// This file is part of Moodle - http://moodle.org/
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

define(['core/chartjs', 'qbehaviour_certaintywithstudentfbdeferred/charts_utility'], function(ChartJS, ChartsUtility) {

    var component = 'qbehaviour_certaintywithstudentfbdeferred';

    var currentNumForSidebar = -1;

    /**
     * Handle toggling on and off of sidebar for charts.
     * @param {Number} attemptNum Clicked attempt.
     */
    function toggleSidebar(attemptNum) {
        var contentEl = document.querySelector('.charts-content');

        var sidebarsContainer = document.getElementById('charts-sidebar-container');
        sidebarsContainer.hidden = true;
        document.querySelectorAll('[data-role="charts-sidebar"]').forEach(function(sidebar) {
            sidebar.hidden = true;
        });

        if (currentNumForSidebar == attemptNum) {
            contentEl.classList.remove('reducedwidth');
            currentNumForSidebar = -1;
            return;
        }

        currentNumForSidebar = attemptNum;

        // Show sidebar.
        sidebarsContainer.hidden = false;
        document.querySelector('[data-role="charts-sidebar"][data-attemptnum="' + attemptNum + '"]').hidden = false;
        contentEl.classList.add('reducedwidth');
    }

    return {
        postprocessing: function(shapes, hasDeclaredIgnorance) {

            ChartJS.defaults.font.size = 15;

            ChartsUtility.executeWhenChartLoaded(component + '_this-attempt-chart', function(chart) {
                chart.options.scales.x.ticks.display = false;
                chart.options.scales.y.ticks.stepSize = 1;
                chart.options.scales.y.title.display = true;
                chart.options.scales.y.title.text = M.util.get_string('numofanswers', component);
                // Remove points on expected trend.
                chart.options.elements.point.radius = 0;
                chart.options.elements.point.hoverRadius = 0;
                chart.update();

                var postProcessThisAttemptChartTable = function() {
                    var table = document.querySelector('[data-role="' + component + '_this-attempt-chart"] .chart-table table');
                    if (table === null) {
                        setTimeout(postProcessThisAttemptChartTable, 200);
                    } else {
                        // Remove expected trend data from table as it is misleading when reading
                        // (it has long, irrelevant, decimal data values, as the only relevant information is the general shape).
                        table.querySelectorAll('tr > *:nth-child(n+2):nth-child(-n+3)').forEach(e => e.remove());
                    }
                };
                postProcessThisAttemptChartTable();
            });

            // Count shapes to get number of attempts. This is strange but works and it is fine.
            var nattempts = shapes.length;

            if (nattempts < 2) {
                // There is at most one attempt, so grades and lucidity evolution charts are not displayed.
                return;
            }

            var defaultPointRadius = 10;
            var pointHoverRadius = 16;
            var focusedPointRadius = 14;

            var formatAttemptsProgressChart = function(chart, yMin, yMax, yStep) {
                chart.options.scales.x.title.display = true;
                chart.options.scales.x.title.text = M.util.get_string('attemptnumber', 'mod_quiz');
                chart.options.scales.x.offset = true;
                chart.options.scales.y.offset = true;

                chart.options.scales.y.min = yMin;
                chart.options.scales.y.max = yMax;
                chart.options.scales.y.ticks.stepSize = yStep;

                chart.options.elements.point.radius = defaultPointRadius;
                chart.options.elements.point.hoverRadius = pointHoverRadius;

                chart.data.datasets[0].borderColor = 'black';
                chart.data.datasets[0].borderWidth = 2;
                chart.data.datasets[0].pointStyle = shapes;
            };

            var setupTooltipAndSideWindowForChart = function(chart, makeTooltipInfo) {
                chart.options.plugins.tooltip.callbacks.title = function(context) {
                    return M.util.get_string('attempt', 'mod_quiz', context[0].dataIndex + 1);
                };
                chart.options.plugins.tooltip.callbacks.afterBody = function(context) {
                    return makeTooltipInfo(context[0].dataIndex);
                };
                chart.options.plugins.tooltip.callbacks.footer = function() {
                    return M.util.get_string('clickfordetails', component);
                };
                chart.canvas.onclick = function(evt) {
                    var points = chart.getElementsAtEventForMode(evt, 'nearest', {intersect: true}, true);
                    if (points.length > 0) {
                        toggleSidebar(points[0].index + 1);
                    }
                };
            };

            var charts = {
                grades: null,
                lucidity: null,
            };

            var pointsRadiusModified = true;
            var resetPointsRadius = function() {
                if (!pointsRadiusModified) {
                    return;
                }
                if (charts.grades !== null) {
                    charts.grades.mainDataset.pointRadius = Array(nattempts).fill(defaultPointRadius);
                }
                if (charts.lucidity !== null) {
                    charts.lucidity.mainDataset.pointRadius = Array(nattempts).fill(defaultPointRadius);
                }
                if (currentNumForSidebar !== -1) {
                    // Keep current sidebar element bigger.
                    if (charts.grades !== null) {
                        charts.grades.mainDataset.pointRadius[currentNumForSidebar - 1] = focusedPointRadius;
                    }
                    if (charts.lucidity !== null) {
                        charts.lucidity.mainDataset.pointRadius[currentNumForSidebar - 1] = focusedPointRadius;
                    }
                    pointsRadiusModified = true;
                } else {
                    pointsRadiusModified = false;
                }
            };

            ChartsUtility.executeWhenChartLoaded(component + '_grades-chart', function(gradesChart) {
                charts.grades = {
                    chart: gradesChart,
                    mainDataset: gradesChart.data.datasets[0],
                };

                formatAttemptsProgressChart(gradesChart, 0, 100, 10);

                var declaredIgnoranceDataset = null;
                if (hasDeclaredIgnorance) {
                    declaredIgnoranceDataset = gradesChart.data.datasets[1];
                    declaredIgnoranceDataset.hidden = true;
                }

                setupTooltipAndSideWindowForChart(gradesChart, function(itemIndex) {
                    if (hasDeclaredIgnorance) {
                        return M.util.get_string('declaredignoranceratea', component, declaredIgnoranceDataset.data[itemIndex]);
                    } else {
                        return '';
                    }
                });

                // Make both charts highlight the same points on hover, as they describe the same attempts.
                gradesChart.options.onHover = function() {
                    if (charts.lucidity !== null) {
                        var needUpdate = false;
                        if (pointsRadiusModified) {
                            resetPointsRadius();
                            needUpdate = true;
                        }
                        var activeElements = arguments[1];
                        if (activeElements.length === 1) {
                            charts.lucidity.mainDataset.pointRadius[activeElements[0].index] = pointHoverRadius;
                            pointsRadiusModified = true;
                            needUpdate = true;
                        }
                        if (needUpdate) {
                            charts.lucidity.chart.update();
                            gradesChart.update();
                        }
                    }
                };
                gradesChart.canvas.onmouseout = function() {
                    if (charts.lucidity !== null && pointsRadiusModified) {
                        resetPointsRadius();
                        charts.lucidity.chart.update();
                        gradesChart.update();
                    }
                };

                gradesChart.update();
            });

            ChartsUtility.executeWhenChartLoaded(component + '_lucidity-chart', function(lucidityChart) {
                charts.lucidity = {
                    chart: lucidityChart,
                    mainDataset: lucidityChart.data.datasets[0],
                };

                formatAttemptsProgressChart(lucidityChart, -100, 100, 10);

                var labelsDataset = lucidityChart.data.datasets[1];
                labelsDataset.hidden = true;

                setupTooltipAndSideWindowForChart(lucidityChart, function(itemIndex) {
                    return labelsDataset.data[itemIndex];
                });

                // Make both charts highlight the same points on hover, as they describe the same attempts.
                lucidityChart.options.onHover = function() {
                    if (charts.grades !== null) {
                        var needUpdate = false;
                        if (pointsRadiusModified) {
                            resetPointsRadius();
                            needUpdate = true;
                        }
                        var activeElements = arguments[1];
                        if (activeElements.length === 1) {
                            charts.grades.mainDataset.pointRadius[activeElements[0].index] = pointHoverRadius;
                            pointsRadiusModified = true;
                            needUpdate = true;
                        }
                        if (needUpdate) {
                            charts.grades.chart.update();
                            lucidityChart.update();
                        }
                    }
                };
                lucidityChart.canvas.onmouseout = function() {
                    if (charts.grades !== null && pointsRadiusModified) {
                        resetPointsRadius();
                        charts.grades.chart.update();
                        lucidityChart.update();
                    }
                };

                lucidityChart.update();
            });
        }
    };

});
