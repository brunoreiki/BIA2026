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
 * Charts postprocessing for "Evolution along Quizzes" certainty report.
 * @copyright  2025 Astor Bizard
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

import ChartJS from 'core/chartjs';
import ChartsUtility from 'qbehaviour_certaintywithstudentfbdeferred/charts_utility';
import Url from 'core/url';

const component = 'report_certaintyquizzes';
const behaviourComponent = 'qbehaviour_certaintywithstudentfbdeferred';

export default {
    postprocess: function(hasDeclaredIgnorance, userids, quizids, attemptType) {

        var hideEveryOtherDataset = function(chart) {
            for (var i = 1; i < chart.data.datasets.length; i += 2) {
                chart.data.datasets[i].hidden = true;
            }
        };

        var formatEvolutionChart = function(chart, yMin, yMax, yStep, yAxisTitle) {
            chart.options.scales.y.min = yMin;
            chart.options.scales.y.max = yMax;
            chart.options.scales.y.ticks.stepSize = yStep;
            chart.options.scales.x.offset = true;
            chart.options.scales.y.offset = true;

            chart.options.scales.y.title.display = true;
            chart.options.scales.y.title.text = yAxisTitle;

            chart.options.elements.point.radius = 9;
            chart.options.elements.point.hoverRadius = 12;

            chart.data.datasets.forEach(function(dataset) {
                dataset.borderColor = 'black';
                dataset.borderWidth = 2;
            });
            chart.options.plugins.tooltip.callbacks.footer = function() {
                return M.util.get_string('clickfordetails', behaviourComponent);
            };
            chart.canvas.onclick = function(evt) {
                var points = chart.getElementsAtEventForMode(evt, 'nearest', {intersect: true}, true);
                if (points.length > 0) {
                    window.open(Url.relativeUrl('/report/certaintyquizzes/redirecttoattempt.php', {
                        userid: userids[points[0].datasetIndex / 2],
                        quizid: quizids[points[0].index],
                        attempttype: attemptType,
                    }), '_blank');
                }
            };
        };

        ChartJS.defaults.font.size = 15;

        ChartsUtility.executeWhenChartLoaded(component + '_grades-evolution-chart', function(gradesChart) {
            formatEvolutionChart(gradesChart, 0, 100, 10, M.util.get_string('gradeover100', component));

            if (hasDeclaredIgnorance) {
                hideEveryOtherDataset(gradesChart);
                gradesChart.options.plugins.tooltip.callbacks.afterBody = function(context) {
                    return M.util.get_string('declaredignoranceratea', behaviourComponent,
                        gradesChart.data.datasets[context[0].datasetIndex + 1].data[context[0].dataIndex]);
                };
            }

            gradesChart.update();
        });

        ChartsUtility.executeWhenChartLoaded(component + '_lucidity-evolution-chart', function(lucidityChart) {
            formatEvolutionChart(lucidityChart, 0, 100, 10, M.util.get_string('lucidityindex', behaviourComponent));

            hideEveryOtherDataset(lucidityChart);
            lucidityChart.options.plugins.tooltip.callbacks.afterBody = function(context) {
                return lucidityChart.data.datasets[context[0].datasetIndex + 1].data[context[0].dataIndex];
            };

            lucidityChart.update();
        });
    }
};
