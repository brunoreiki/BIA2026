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

/* globals MathJax */

import ChartJS from 'core/chartjs';
import ChartsUtility from 'qbehaviour_certaintywithstudentfbdeferred/charts_utility';
import Notification from 'core/notification';
import Templates from 'core/templates';
import Repository from 'report_certaintyquizzes/repository';

const component = 'report_certaintyquizzes';
const behaviourComponent = 'qbehaviour_certaintywithstudentfbdeferred';

var courseid = null;
var quizid = null;

var questionids = [];
var usageids = [];

/**
 * Handle toggling on and off of sidebar for interval charts.
 * @param {Array} attemptids Attempt ids to get info for.
 * @param {Number} clickedElementIndex Index of clicked element.
 * @param {String} chartName Chart name (one of 'grades' or 'lucidity').
 */
async function toggleSidebar(attemptids, clickedElementIndex, chartName) {
    let sidebar = document.getElementById('charts-sidebar-' + chartName);
    let chartContainer = document.getElementById('charts-content-' + chartName);

    if (sidebar.dataset.selectedNum == clickedElementIndex) {
        closeSidebar(sidebar, chartContainer, 'selectedNum');
        return;
    }

    sidebar.dataset.selectedNum = clickedElementIndex;

    var sortColumn = chartName === 'grades' ? 'grade' : 'lucidityindex';
    var table = await Repository.getUsersAttemptsData(courseid, quizid, attemptids, sortColumn);
    var tableContainer = document.createElement('div');
    tableContainer.classList.add('w-100', 'position-relative', 'pt-5', 'mx-4');
    tableContainer.innerHTML = table;

    var closeButton = createCloseButton();
    closeButton.style.position = 'absolute';
    closeButton.style.top = 0;
    closeButton.style.right = 0;
    closeButton.onclick = () => closeSidebar(sidebar, chartContainer, 'selectedNum');
    tableContainer.prepend(closeButton);

    sidebar.replaceChildren(tableContainer);
    sidebar.hidden = false;
    chartContainer.classList.add('reducedwidth');
}

/**
 * Create a close button.
 */
function createCloseButton() {
    return createButton('fa-close', 'closebuttontitle', 'moodle');
}

/**
 * Create a simple icon button.
 * @param {String} faIcon CSS class of fontawesome (should be one of "fa-...")
 * @param {String} str Lang identifier for button title.
 * @param {String} component Component of lang identifier.
 */
function createButton(faIcon, str, component) {
    var button = document.createElement('button');
    button.classList.add('btn', 'p-0');
    button.type = 'button';
    button.title = M.util.get_string(str, component);
    button.ariaLabel = M.util.get_string(str, component);
    var icon = document.createElement('i');
    icon.classList.add('fa', faIcon, 'fa-lg');
    button.appendChild(icon);
    return button;
}

/**
 * Close the sidebar.
 * @param {Element} sidebar The sidebar to close.
 * @param {Element} chartsContainer The charts element that should take back its width.
 * @param {String} dataAttr The data attribute to reset.
 */
function closeSidebar(sidebar, chartsContainer, dataAttr) {
    sidebar.hidden = true;
    chartsContainer.classList.remove('reducedwidth');
    sidebar.dataset[dataAttr] = -1;
}

/**
 * Handle toggling on and off of sidebar for question charts.
 * @param {Number} questionIndex Question index in chart.
 */
async function toggleSidebarQuestion(questionIndex) {
    var sidebar = document.getElementById('charts-sidebar-question');
    var chartsContainer = document.getElementById('charts-content-question');

    var questionid = questionids[questionIndex];

    if (sidebar.dataset.currentQuestion == questionid) {
        closeSidebar(sidebar, chartsContainer, 'currentQuestion');
        return;
    }

    sidebar.dataset.currentQuestion = questionid;

    var questionData = await Repository.getQuestionData(courseid, questionid, usageids[questionIndex]);

    var container = document.createElement('div');
    container.classList.add('w-100', 'border', 'border-dark', 'overflow-hidden', 'bg-white', 'm-4');

    var titleBar = document.createElement('div');
    titleBar.classList.add('mb-2', 'align-items-center');
    titleBar.style.display = 'grid';
    titleBar.style.gridTemplateColumns = 'auto 1fr auto auto';
    titleBar.style.gap = '1em';

    var prevButton = createButton('fa-caret-left', 'previous', 'moodle');
    prevButton.onclick = function() {
        var qindex = questionids.indexOf(questionid);
        if (qindex > 0) {
            toggleSidebarQuestion(qindex - 1);
        }
    };
    titleBar.appendChild(prevButton);

    var questionTitle = document.createElement('div');
    questionTitle.classList.add('h6', 'm-0');
    questionTitle.textContent = questionData.questiontitle;
    titleBar.appendChild(questionTitle);

    var nextButton = createButton('fa-caret-right', 'next', 'moodle');
    nextButton.onclick = function() {
        var qindex = questionids.indexOf(questionid);
        if (qindex < questionids.length - 1) {
            toggleSidebarQuestion(qindex + 1);
        }
    };
    titleBar.appendChild(nextButton);

    var closeButton = createCloseButton();
    closeButton.onclick = () => closeSidebar(sidebar, chartsContainer, 'currentQuestion');
    titleBar.appendChild(closeButton);

    var questionSummaryContainer = document.createElement('div');
    questionSummaryContainer.classList.add('p-3');
    questionSummaryContainer.appendChild(titleBar);
    var questionSummarySubContainer = document.createElement('div');
    questionSummarySubContainer.classList.add('overflow-auto');
    questionSummarySubContainer.innerHTML = questionData.questionsummary;
    questionSummaryContainer.appendChild(questionSummarySubContainer);
    container.appendChild(questionSummaryContainer);
    if (typeof MathJax == 'object' && typeof MathJax.Hub == 'object' && typeof MathJax.Hub.Queue == 'function') {
        // There may be MathJax in the question text that needs some post rendering.
        // See https://moodle.org/mod/forum/discuss.php?d=239658 and https://moodle.org/mod/forum/discuss.php?d=320371.
        MathJax.Hub.Queue(["Typeset", MathJax.Hub, container]);
    }

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
            return {html, js};
        })
        .catch(Notification.exception);

        container.appendChild(chartContainer);
    }

    sidebar.replaceChildren(container);
    sidebar.hidden = false;
    chartsContainer.classList.add('reducedwidth');
}

/**
 * Do common formatting for interval charts.
 * @param {*} chart ChartJS object.
 * @param {String} chartName Either 'grades' or 'lucidity', used for selectors.
 * @param {String} xAxisTitle Title of X axis.
 * @param {Array} attemptsByInterval Array of array of attempt ids, for each interval.
 */
function formatIntervalsChart(chart, chartName, xAxisTitle, attemptsByInterval) {
    chart.options.scales.y.ticks.stepSize = 1;
    chart.options.scales.y.title.display = true;
    chart.options.scales.y.title.text = M.util.get_string('numofstudents', component);
    chart.options.scales.x.title.display = true;
    chart.options.scales.x.title.text = xAxisTitle;

    chart.options.scales.x.ticks.autoSkip = false;
    chart.canvas.onclick = function(evt) {
        const points = chart.getElementsAtEventForMode(evt, 'nearest', {intersect: true}, true);
        if (points.length > 0) {
            toggleSidebar(attemptsByInterval[points[0].index], points[0].index, chartName);
        }
    };
    chart.options.plugins.tooltip.callbacks.footer = function() {
        return M.util.get_string('clickfordetails', behaviourComponent);
    };
}

/**
 * Do common formatting for question charts.
 * @param {*} chart ChartJS object.
 */
function formatQuestionsCharts(chart) {
    chart.options.scales.x.ticks.autoSkip = false;
    chart.options.scales.x.title.display = true;
    chart.options.scales.x.title.text = M.util.get_string('question', 'moodle');
    chart.options.scales.y.ticks.stepSize = 1;
    chart.options.scales.y.title.display = true;
    chart.options.scales.y.title.text = M.util.get_string('numofstudents', component);
    chart.canvas.onclick = function(evt) {
        const points = chart.getElementsAtEventForMode(evt, 'nearest', {intersect: true}, true);
        if (points.length > 0) {
            toggleSidebarQuestion(points[0].index);
        }
    };
    chart.options.plugins.tooltip.callbacks.footer = function() {
        return M.util.get_string('clickfordetails', behaviourComponent);
    };
}

export default {
    postprocess: function(ajaxData, attemptidsByGradeInterval, attemptidsByLucidityInterval, totalAttempts, questionIDs, usageIDs) {
        courseid = ajaxData.courseid;
        quizid = ajaxData.quizid;

        questionids = questionIDs;
        usageids = usageIDs;

        ChartJS.defaults.font.size = 15;

        ChartsUtility.executeWhenChartLoaded(component + '_students-by-grade', function(gradesChart) {
            var xAxisTitle = M.util.get_string('gradeover100', component);
            formatIntervalsChart(gradesChart, 'grades', xAxisTitle, attemptidsByGradeInterval);
            gradesChart.update();
        });

        ChartsUtility.executeWhenChartLoaded(component + '_students-by-lucidity', function(lucidityChart) {
            var xAxisTitle = M.util.get_string('lucidityindex', behaviourComponent);
            formatIntervalsChart(lucidityChart, 'lucidity', xAxisTitle, attemptidsByLucidityInterval);
            lucidityChart.update();
        });

        ChartsUtility.executeWhenChartLoaded(component + '_grade-by-question-chart', function(questionsGradesChart) {
            questionsGradesChart.options.scales.y.min = 0;
            questionsGradesChart.options.scales.y.max = totalAttempts;

            formatQuestionsCharts(questionsGradesChart);

            questionsGradesChart.update();
        });

        ChartsUtility.executeWhenChartLoaded(component + '_certainty-by-question-chart', function(answerClassesChart) {
            formatQuestionsCharts(answerClassesChart);
            answerClassesChart.update();
        });
    },
};
