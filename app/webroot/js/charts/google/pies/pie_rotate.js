'use strict';
// Rotated pie chart
// ------------------------------

// Initialize chart
google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawPieRotated);


// Chart settings
function drawPieRotated() {

    // Data
    var data = google.visualization.arrayToDataTable([
        ['Task', 'Hours per Day'],
        ['Work',     11],
        ['Eat',      2],
        ['Commute',  2],
        ['Watch TV', 2],
        ['Sleep',    7]
    ]);


    // Options
    var options_pie_rotate = {
        fontName: 'tahoma',
        pieStartAngle: 180,
        height: 200,
        chartArea: {
            left: 50,
            width: '100%',
            height: '100%'
        }
    };


    // Instantiate and draw our chart, passing in some options.
    var pie_rotate = new google.visualization.PieChart($('#google-pie-rotate')[0]);
    pie_rotate.draw(data, options_pie_rotate);
}