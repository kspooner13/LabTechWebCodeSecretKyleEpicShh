'use strict';
// Initialize chart
google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawAreaChart);
// Chart settings
function drawAreaChart() {
    // Data
    var data = google.visualization.arrayToDataTable([
        ['Year', 'Sales', 'Expenses'],
        ['2004',  1000,      400],
        ['2005',  1170,      460],
        ['2006',  660,       1120],
        ['2007',  1030,      540]
    ]);
    // Options
    var options = {
        fontName: 'tahoma',
        height: 300,
        curveType: 'function',
        fontSize: 11,
        areaOpacity: 0.4,
        chartArea: {
            left: '10%',
            width: '100%',
            height: 225
        },
        pointSize: 6,
        tooltip: {
            textStyle: {
                fontName: 'tahoma',
                fontSize: 11
            }
        },
        vAxis: {
            title: 'Sales and Expenses',
            titleTextStyle: {
                fontSize: 11,
                italic: false
            },
            gridarea:{
                color: '#e5e5e5',
                count: 8
            },
            minValue: 0
        },
        legend: {
            position: 'top',
            alignment: 'end',
            textStyle: {
                fontSize: 12
            }
        }
    };
    // Draw chart
    var area_chart = new google.visualization.AreaChart($('#google-area')[0]);
    area_chart.draw(data, options);
}
// Resize chart
// ------------------------------
$(function () {
    // Resize chart on sidebar width change and window resize
    $(window).on('resize', resize);
    $(".sidebar-control").on('click', resize);
    // Resize function
    function resize() {
        drawAreaChart();
    }
});