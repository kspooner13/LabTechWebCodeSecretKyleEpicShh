'use strict';
// Pie chart
// ------------------------------

// Initialize chart
google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawPie);


// Chart settings    
function drawPie() {

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
    var options_pie = {
        fontName: 'tahoma',
        height: 200,
        chartArea: {
            left: 50,
            width: '100%',
            height: '100%'
        }
    };
    

    // Instantiate and draw our chart, passing in some options.
    var pie = new google.visualization.PieChart($('#google-pie')[0]);
    pie.draw(data, options_pie);
}