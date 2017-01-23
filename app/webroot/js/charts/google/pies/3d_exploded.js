'use strict';
// Sliced 3D donut chart
// ------------------------------

// Initialize chart
google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawExploded3d);


// Chart settings
function drawExploded3d() {

    // Data
    var data = google.visualization.arrayToDataTable([
        ['Language', 'Speakers (in millions)'],
        ['Assamese', 13],
        ['Bengali', 83],
        ['Gujarati', 46],
        ['Hindi', 90],
        ['Kannada', 38],
        ['Maithili', 20],
        ['Malayalam', 33],
        ['Marathi', 72],
        ['Oriya', 33],
        ['Punjabi', 29],
        ['Tamil', 61],
        ['Telugu', 74],
        ['Urdu', 52]
    ]);


    // Options
    var options = {
        fontName: 'tahoma',
        height: 200,
        
        chartArea: {
            left: 50,
            width: '100%',
            height: '100%'
        },
        is3D: true,
        pieSliceText: 'label',
        slices: {  
            2: {offset: 0.15},
            8: {offset: 0.1},
            10: {offset: 0.15},
            11: {offset: 0.1}
        }
    };


    // Instantiate and draw our chart, passing in some options.
    var pie_3d_exploded = new google.visualization.PieChart($('#google-3d-exploded')[0]);
    pie_3d_exploded.draw(data, options);
}