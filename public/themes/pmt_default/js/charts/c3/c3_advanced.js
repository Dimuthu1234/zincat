/* ------------------------------------------------------------------------------
 *
 *  # C3.js - advanced examples
 *
 *  Demo setup of chart transformations, zoom, pan and brushing features
 *
 *  Version: 1.0
 *  Latest update: August 1, 2015
 *
 * ---------------------------------------------------------------------------- */

$(function () {


    // Physical Progress
    // ------------------------------
    var physical_progress = c3.generate({
        bindto: '#physical_progress',
        size: {height: 400},
        data: {
            x: 'Month',
            columns: [
                ['Month', '2019-01-25', '2019-02-25', '2019-03-25', '2019-04-25', '2019-05-25', '2019-06-25', '2019-07-25', '2019-08-25', '2019-09-25', '2019-10-25', '2019-11-25', '2019-12-25'],
                ['Target', 5, 8, 15, 20, 25, 35, 50, 65, 70, 85, 90, 100],
                ['Actual', 5, 7, 13, 18, 25, 30, 45, 50, 70, 80, 85, 100],

            ],
            types: {
                Target: 'bar',
                Actual: 'bar',
            },
            colors: {
                Target: '#564dff',
                Actual: '#ff8b1e'
            },
        },
        grid: {
            x: {
                show: true
            },
            y: {
                show: true
            }
        },

        legend: {
            position: 'right'
        },

        axis: {
            x: {
                type: 'timeseries',
                tick: {
                    format: '%Y/%m'
                },
                label: {
                    text: 'Year/Month',
                    position: 'outer-center'
                }
            },
            y: {
                label: {
                    text: 'Target',
                    position: 'outer-middle'
                },

            },
            y2: {
                show: false,
                label: {
                    text: 'Actual',
                    position: 'outer-middle'
                }
            }
        }
    });


    // Financial Progress
    // ------------------------------

    // Generate chart
    var financial_progress = c3.generate({
        bindto: '#financial_progress',
        size: {height: 400},
        data: {
            x: 'x',
            columns: [
                ['x', '2019-01-25', '2019-02-25', '2019-03-25', '2019-04-25', '2019-05-25', '2019-06-25', '2019-07-25', '2019-08-25', '2019-09-25', '2019-10-25', '2019-11-25', '2019-12-25'],
                ['Target', 500000, 800000, 1200000, 1500000, 2000000, 3000000, 3800000, 5000000, 5500000, 7000000, 8800000, 9500000],
                ['Actual', 500000, 600000, 1100000, 1400000, 1800000, 2500000, 3400000, 4500000, 5200000, 6300000, 7900000, 10000000],

            ],
            axes: {
                Actual: 'y2'
            },
            types: {
                Target: 'line',
                Actual: 'line',
            },

        },
        grid: {
            x: {
                show: true
            },
            y: {
                show: true
            }
        },
        legend: {
            position: 'right'
        },
        axis: {
            x: {
                type: 'timeseries',
                tick: {
                    format: '%Y/%m'
                },
                label: {
                    text: 'Year/Month',
                    position: 'outer-center'
                },
            },
            y: {
                label: {
                    text: 'Target',
                    position: 'outer-middle'
                },

            },
            y2: {
                show: false,
                label: {
                    text: 'Actual',
                    position: 'outer-middle'
                }
            }
        }
    });


    // Resize chart on sidebar width change
    $(".sidebar-control").on('click', function () {
        transform.resize();
        financial_progress.resize();
        physical_progress.resize();
    });
});