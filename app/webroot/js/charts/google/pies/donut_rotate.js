'use strict';
// Rotated donut chart
// ------------------------------

// Initialize chart
google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawDonutRotated);


// Chart settings
function drawDonutRotated() {

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
    var options_donut_rotate = {
        fontName: 'tahoma',
        pieHole: 0.55,
        pieStartAngle: 180,
        height: 200,
        chartArea: {
            left: 50,
            width: '100%',
            height: '100%'
        }
    };


    // Instantiate and draw our chart, passing in some options.
    var donut_rotate = new google.visualization.PieChart($('#google-donut-rotate')[0]);
    donut_rotate.draw(data, options_donut_rotate);
}