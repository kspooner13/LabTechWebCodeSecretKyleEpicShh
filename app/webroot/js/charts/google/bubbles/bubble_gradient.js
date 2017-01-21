'use strict';
// Bubble chart with color scale
// ------------------------------

// Initialize chart
google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawBubbleGradientChart);


// Chart settings
function drawBubbleGradientChart() {

    // Data
    var data = google.visualization.arrayToDataTable([
        ['ID', 'X', 'Y', 'Temperature'],
        ['',   80,  167,      120],
        ['',   79,  136,      130],
        ['',   78,  184,      50],
        ['',   72,  278,      230],
        ['',   81,  200,      210],
        ['',   72,  170,      100],
        ['',   68,  477,      80]
    ]);


    // Optinos
    var options = {
        fontName: 'tahoma',
        height: 275,
        fontSize: 11,
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
                count: 15
            },
            minValue: 0
        },
        bubble: {
          textStyle: {
            fontSize: 11
          },
          stroke: '#fff'
        }
    };


    // Draw chart
    var gradient_bubble = new google.visualization.BubbleChart($('#google-bubble-gradient')[0]);
    gradient_bubble.draw(data, options);
}

// Resize chart
// ------------------------------

$(function () {

    // Resize chart on sidebar width change and window resize
    $(window).on('resize', resize);
    $(".sidebar-control").on('click', resize);

    // Resize function
    function resize() {
        drawBubbleGradientChart();
    }
});
