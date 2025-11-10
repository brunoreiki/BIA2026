// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Charts postprocessing for "Single Quiz" certainty report.
 * @copyright  2025 Astor Bizard, 2024 Loic Delon
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

import ChartJS from 'core/chartjs';
import ChartsUtility from 'qbehaviour_certaintywithstudentfbdeferred/charts_utility';
import Notification from 'core/notification';
import Templates from 'core/templates';
import Repository from 'report_certaintyquizzes/repository';

const component = 'report_certaintyquizzes';
const behaviourComponent = 'qbehaviour_certaintywithstudentfbdeferred';

var courseid = null;
var quizid = null;
var attempttype = null;

/**
 * Handle toggling on and off of sidebar for interval charts.
 * @param {Array} userids Userids to get info for.
 * @param {Number} clickedElementIndex Index of clicked element.
 * @param {String} chartName Chart name (one of 'grades' or 'lucidity').
 */
async function toggleSidebar(userids, clickedElementIndex, chartName) {
    let sidebar = document.getElementById('charts-sidebar-' + chartName);
    let chartContainer = document.getElementById('charts-content-' + chartName);

    if (sidebar.dataset.selectedNum == clickedElementIndex) {
        sidebar.hidden = true;
        chartContainer.classList.remove('reducedwidth');
        sidebar.dataset.selectedNum = -1;
        return;
    }

    sidebar.dataset.selectedNum = clickedElementIndex;

    var sortColumn = chartName === 'grades' ? 'grade' : 'lucidityindex';
    var table = await Repository.getUsersAttemptsData(courseid, quizid, attempttype, userids, sortColumn);
    sidebar.innerHTML = table;
    sidebar.hidden = false;
    chartContainer.classList.add('reducedwidth');
}

/**
 * Handle toggling on and off of sidebar for question charts.
 * @param {Number} questionid Question ID.
 */
async function toggleSidebarQuestion(questionid) {
    var sidebar = document.getElementById('charts-sidebar-question');
    var chartsContainer = document.getElementById('charts-content-question');

    if (sidebar.dataset.currentQuestion == questionid) {
        sidebar.hidden = true;
        chartsContainer.classList.remove('reducedwidth');
        sidebar.dataset.currentQuestion = -1;
        return;
    }

    sidebar.dataset.currentQuestion = questionid;

    var questionData = await Repository.getQuestionData(courseid, quizid, questionid, attempttype);

    while (sidebar.firstChild) {
        sidebar.firstChild.remove();
    }

    var container = document.createElement('div');
    container.classList.add('w-100', 'border', 'border-dark', 'overflow-hidden', 'bg-white', 'm-4');

    var questionSummaryContainer = document.createElement('div');
    questionSummaryContainer.classList.add('p-3', 'overflow-auto');
    questionSummaryContainer.innerHTML = questionData.questionsummary;
    container.appendChild(questionSummaryContainer);

    var chartRole = component + '_answers-chart';
    var chartCanvas = document.querySelector('[data-role=' + chartRole + '] .chart-area canvas');
    if (ChartJS.getChart(chartCanvas)) {
        ChartJS.getChart(chartCanvas).destroy();
    }

    if (questionData.chartdata.length > 0) {
        var chartContainer = document.createElement('div');
        chartContainer.classList.add('py-2', 'px-3', 'border-top', 'border-dark');
        chartContainer.style.minHeight = '48vh';

        Templates.renderForPromise(behaviourComponent + '/loadingchart', {
            role: chartRole,
            chartcontext: {
                chartdata: questionData.chartdata,
                withtable: true,
            },
        })
        .then(({html, js}) => {
            Templates.replaceNodeContents(chartContainer, html, js);
            ChartsUtility.executeWhenChartLoaded(chartRole, function(answersChart) {
                answersChart.options.scales.x.ticks.autoSkip = false;
                answersChart.options.scales.x.title.display = true;
                answersChart.options.scales.x.title.text = M.util.get_string('answer', 'moodle');
                answersChart.options.scales.y.ticks.stepSize = 1;
                answersChart.options.scales.y.title.display = true;
                answersChart.options.scales.y.title.text = M.util.get_string('numofanswers', behaviourComponent);
                answersChart.update();
            });
        })
        .catch(Notification.exception);

        container.appendChild(chartContainer);
    }

    sidebar.appendChild(container);
    sidebar.hidden = false;
    chartsContainer.classList.add('reducedwidth');
}

/**
 * Do common formatting for interval charts.
 * @param {*} chart ChartJS object.
 * @param {String} chartName Either 'grades' or 'lucidity', used for selectors.
 * @param {String} xAxisTitle Title of X axis.
 * @param {Array} usersByInterval Array of array of userids, for each interval.
 */
function formatIntervalsChart(chart, chartName, xAxisTitle, usersByInterval) {
    chart.options.scales.y.ticks.stepSize = 1;
    chart.options.scales.y.title.display = true;
    chart.options.scales.y.title.text = M.util.get_string('numofstudents', component);
    chart.options.scales.x.title.display = true;
    chart.options.scales.x.title.text = xAxisTitle;

    chart.options.scales.x.ticks.autoSkip = false;
    chart.canvas.onclick = function(evt) {
        const points = chart.getElementsAtEventForMode(evt, 'nearest', {intersect: true}, true);
        if (points.length > 0) {
            toggleSidebar(usersByInterval[points[0].index], points[0].index, chartName);
        }
    };
    chart.options.plugins.tooltip.callbacks.footer = function() {
        return M.util.get_string('clickfordetails', behaviourComponent);
    };
}

/**
 * Do common formatting for question charts.
 * @param {*} chart ChartJS object.
 * @param {Array} questionIDs Array of questions ids, one for each chart entry.
 */
function formatQuestionsCharts(chart, questionIDs) {
    chart.options.scales.x.ticks.autoSkip = false;
    chart.options.scales.x.title.display = true;
    chart.options.scales.x.title.text = M.util.get_string('question', 'moodle');
    chart.options.scales.y.ticks.stepSize = 1;
    chart.options.scales.y.title.display = true;
    chart.options.scales.y.title.text = M.util.get_string('numofstudents', component);
    chart.canvas.onclick = function(evt) {
        const points = chart.getElementsAtEventForMode(evt, 'nearest', {intersect: true}, true);
        if (points.length > 0) {
            toggleSidebarQuestion(questionIDs[points[0].index]);
        }
    };
    chart.options.plugins.tooltip.callbacks.footer = function() {
        return M.util.get_string('clickfordetails', behaviourComponent);
    };
}

export default {
    postprocess: function(ajaxData, useridsByGradeInterval, useridsByLucidityInterval, totalStudents, questionIDs) {
        courseid = ajaxData.courseid;
        quizid = ajaxData.quizid;
        attempttype = ajaxData.attempttype;

        ChartJS.defaults.font.size = 15;

        ChartsUtility.executeWhenChartLoaded(component + '_students-by-grade', function(gradesChart) {
            var xAxisTitle = M.util.get_string('gradeover100', component);
            formatIntervalsChart(gradesChart, 'grades', xAxisTitle, useridsByGradeInterval);
            gradesChart.update();
        });

        ChartsUtility.executeWhenChartLoaded(component + '_students-by-lucidity', function(lucidityChart) {
            var xAxisTitle = M.util.get_string('lucidityindex', behaviourComponent);
            formatIntervalsChart(lucidityChart, 'lucidity', xAxisTitle, useridsByLucidityInterval);
            lucidityChart.update();
        });

        ChartsUtility.executeWhenChartLoaded(component + '_grade-by-question-chart', function(questionsGradesChart) {
            questionsGradesChart.options.scales.y.min = 0;
            questionsGradesChart.options.scales.y.max = totalStudents;

            formatQuestionsCharts(questionsGradesChart, questionIDs);

            questionsGradesChart.update();
        });

        ChartsUtility.executeWhenChartLoaded(component + '_certainty-by-question-chart', function(answerClassesChart) {
            formatQuestionsCharts(answerClassesChart, questionIDs);
            answerClassesChart.update();
        });
    },
};
