'use strict';
// Donut chart
// ------------------------------

// Initialize chart
google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawDonut);


// Chart settings
function drawDonut() {

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
    var options_donut = {
        fontName: 'tahoma',
        pieHole: 0.55,
        height: 200,
        chartArea: {
            left: 50,
            width: '100%',
            height: '100%'
        }
    };
    

    // Instantiate and draw our chart, passing in some options.
    var donut = new google.visualization.PieChart($('#google-donut')[0]);
    donut.draw(data, options_donut);
}