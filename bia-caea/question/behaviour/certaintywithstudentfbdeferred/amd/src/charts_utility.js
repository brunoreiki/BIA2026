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

define(['core/chartjs'], function(ChartJS) {

    /**
     * Display the chart when it has loaded, and execute the given callback.
     * @param {String} chartRole The "role" data attribute of the chart container.
     * @param {CallableFunction?} callback An optional function to execute once the chart has loaded.
     */
    function executeWhenChartLoaded(chartRole, callback) {
        var delayed = function() {
            var chart = ChartJS.getChart(document.querySelector('[data-role=' + chartRole + '] .chart-area canvas'));
            if (typeof chart === "undefined") {
                setTimeout(delayed, 200);
            } else {
                if (typeof callback === "function") {
                    callback(chart);
                }
                document.querySelector('[data-role=' + chartRole + ']').classList.remove('invisible');
                document.querySelector('[data-role=' + chartRole + '-loading-icon]').remove();
            }
        };
        delayed();
    }

    return {
        displayChartWhenLoaded: (chartRole) => executeWhenChartLoaded(chartRole),
        executeWhenChartLoaded: executeWhenChartLoaded,
    };
});
