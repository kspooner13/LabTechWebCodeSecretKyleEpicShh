'use strict';
// Stepped area
// ------------------------------
// Initialize chart
google.load("visualization", "1", { packages:["corechart"] });
google.setOnLoadCallback(drawSteppedAreaChart);
// Chart settings
function drawSteppedAreaChart() {
    // Data
    var data = google.visualization.arrayToDataTable([
        ['Director (Year)',  'Rotten Tomatoes', 'IMDB'],
        ['Alfred Hitchcock (1935)', 8.4,         7.9],
        ['Ralph Thomas (1959)',     6.9,         6.5],
        ['Don Sharp (1978)',        6.5,         6.4],
        ['James Hawes (2008)',      4.4,         6.2]
    ]);
    // Options
    var options_stepped_area = {
        fontName: 'tahoma',
        height: 300,
        isStacked: true,
        fontSize: 11,
        areaOpacity: 0.4,
        chartArea: {
            left: '10%',
            width: '100%',
            height: 225
        },
        lineWidth: 1,
        tooltip: {
            textStyle: {
                fontName: 'tahoma',
                fontSize: 11
            }
        },
        pointSize: 6,
        vAxis: {
            title: 'Accumulated Rating',
            titleTextStyle: {
                fontSize: 11,
                italic: false
            },
            gridlines:{
                color: '#e5e5e5',
                count: 8
            },
            minValue: 0
        },
        legend: {
            position: 'top',
            alignment: 'center',
            textStyle: {
                fontSize: 11
            }
        }
    };
    // Draw chart 
    var stepped_area_chart = new google.visualization.SteppedAreaChart($('#google-area-stepped')[0]);
    stepped_area_chart.draw(data, options_stepped_area);
}
// Resize chart
// ------------------------------
$(function () {
    // Resize chart on sidebar width change and window resize
    $(window).on('resize', resize);
    $(".sidebar-control").on('click', resize);
    // Resize function
    function resize() {
        drawSteppedAreaChart();
    }
});