'use strict';
// Stacked columns
// ------------------------------

// Initialize chart
google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawColumnStacked);


// Chart settings
function drawColumnStacked() {

    // Data
    var data = google.visualization.arrayToDataTable([
        ['Genre', 'Fantasy & Sci Fi', 'Romance', 'Mystery/Crime', 'General', 'Western', 'Literature', { role: 'annotation' } ],
        ['2000', 20, 30, 35, 40, 45, 30, ''],
        ['2005', 14, 20, 25, 30, 48, 30, ''],
        ['2010', 10, 24, 20, 32, 18, 5, ''],
        ['2015', 15, 25, 30, 35, 20, 15, ''],
        ['2020', 16, 22, 23, 30, 16, 9, ''],
        ['2025', 12, 26, 20, 40, 20, 30, ''],
        ['2030', 28, 19, 29, 30, 12, 13, '']
    ]);


    // Options
    var options_column_stacked = {
        fontName: 'tahoma',
        height: 300,
        fontSize: 12,
        chartArea: {
            left: '10%',
            width: '100%',
            height: 225
        },
        isStacked: true,
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
    var column_stacked = new google.visualization.ColumnChart($('#google-column-stacked')[0]);
    column_stacked.draw(data, options_column_stacked);
}


// Resize chart
// ------------------------------

$(function () {

    // Resize chart on sidebar width change and window resize
    $(window).on('resize', resize);
    $(".sidebar-control").on('click', resize);

    // Resize function
    function resize() {
        drawColumnStacked();
    }
});
