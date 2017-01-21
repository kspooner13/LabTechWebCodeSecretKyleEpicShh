'use strict';
// Line intervals
// ------------------------------
// Initialize chart
google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawLineIntervals);
// Chart settings
function drawLineIntervals() {
    // Data
    var data = new google.visualization.DataTable();
        data.addColumn('string', 'x');
        data.addColumn('number', 'values');
        data.addColumn({id:'i0', type:'number', role:'interval'});
        data.addColumn({id:'i1', type:'number', role:'interval'});
        data.addColumn({id:'i2', type:'number', role:'interval'});
        data.addColumn({id:'i2', type:'number', role:'interval'});
        data.addColumn({id:'i2', type:'number', role:'interval'});
        data.addColumn({id:'i2', type:'number', role:'interval'});
    data.addRows([
        ['a', 100, 90, 110, 85, 96, 104, 120],
        ['b', 120, 95, 130, 90, 113, 124, 140],
        ['c', 130, 105, 140, 100, 117, 133, 139],
        ['d', 90, 85, 95, 85, 88, 92, 95],
        ['e', 70, 74, 63, 67, 69, 70, 72],
        ['f', 30, 39, 22, 21, 28, 34, 40],
        ['g', 80, 77, 83, 70, 77, 85, 90],
        ['h', 100, 90, 110, 85, 95, 102, 110]
    ]);
    // The intervals data as narrow lines (useful for showing raw source data)
    var options_line_intervals = {
        fontName: 'tahoma',
        height: 300,
        curveType: 'function',
        fontSize: 11,
        chartArea: {
            left: '10%',
            width: '100%',
            height: 225
        },
        lineWidth: 3,
        tooltip: {
            textStyle: {
                fontName: 'tahoma',
                fontSize: 11
            }
        },
        series: [{'color': '#EF5350'}],
        intervals: {'style': 'line'}, // Use line intervals.
        pointSize: 6,
        vAxis: {
            title: 'Number values',
            titleTextStyle: {
                fontSize: 11,
                italic: false
            },
            gridlines:{
                color: '#e5e5e5',
                count: 12
            },
            minValue: 0
        },
        legend: 'none'
    };
    // Draw chart
    var line_intervals = new google.visualization.LineChart($('#google-line-intervals')[0]);
    line_intervals.draw(data, options_line_intervals);
}
// Resize chart
// ------------------------------
$(function () {
    // Resize chart on sidebar width change and window resize
    $(window).on('resize', resize);
    $(".sidebar-control").on('click', resize);
    // Resize function
    function resize() {
        drawLineIntervals();
    }
});