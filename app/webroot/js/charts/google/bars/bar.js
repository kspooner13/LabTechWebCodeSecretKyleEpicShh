'use strict';
// Bar chart
// ------------------------------

// Initialize chart
google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawBar);

// Chart settings
function drawBar() {

    // Data
    var data = google.visualization.arrayToDataTable([
        ['Year', 'Sales', 'Expenses'],
        ['2004',  1000,      400],
        ['2005',  1170,      460],
        ['2006',  660,       1120],
        ['2007',  1030,      540]
    ]);
    // Options
    var options_bar = {
        fontName: 'tahoma',
        height: 300,
        fontSize: 12,
        chartArea: {
            left: '10%',
            width: '100%',
            height: 225
        },
        tooltip: {
            textStyle: {
                fontName: 'tahoma',
                fontSize: 11
            }
        },
        vAxis: {
            gridlines:{
                color: '#e5e5e5',
                count: 10
            },
            minValue: 0
        },
        legend: {
            position: 'top',
            alignment: 'center',
            textStyle: {
                fontSize: 12
            }
        }
    };
    // Draw chart
    var bar = new google.visualization.BarChart($('#google-bar')[0]);
    bar.draw(data, options_bar);
}
// Resize chart
// ------------------------------
$(function () {
    // Resize chart on sidebar width change and window resize
    $(window).on('resize', resize);
    $(".sidebar-control").on('click', resize);
    // Resize function
    function resize() {
        drawBar();
    }
});