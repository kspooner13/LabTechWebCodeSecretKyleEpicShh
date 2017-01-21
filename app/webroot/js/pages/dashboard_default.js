'use strict';
// Stacked bars
// Initialize chart
google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawBarStacked);

// Chart settings
function drawBarStacked() {

    // Data
    var data = google.visualization.arrayToDataTable([
        ['Source', 'Google', 'Yahoo', 'Bing', 'AskMe', { role: 'annotation' } ],        
        ['2013', 14, 20, 25, 30, ''],
        ['2014', 10, 24, 20, 32, ''],
        ['2015', 15, 25, 30, 35, ''],
        ['2016', 16, 22, 23, 30, '']
    ]);

    // Options
    var options_bar_stacked = {
        fontName: 'tahoma',
		backgroundColor:'transparent',
        height: 130,
        fontSize: 9,
        chartArea: {
            left: '10%',
            width: '100%',
            height: 90
        },
        isStacked: true,
        tooltip: {
            textStyle: {
                fontName: 'tahoma',
                fontSize: 9
            }
        },
        hAxis: {
            gridlines:{
                color: '#ccc',
                count: 10
            },
            minValue: 0,
			textStyle:{color: '#FFF'},
			baselineColor: 'transparent',
        },
		vAxis: {
			textStyle: {
				color: '#FFF'
			},
			titleTextStyle: {
				color: '#FFF'
			},
			gridlines:{
                color: 'transparent',             
            },
			gridarea:{
                color: 'transparent',                
            },
			gridlines:{
                color: 'transparent',                
            }
		},
        legend: {
            position: 'top',
            alignment: 'center',
            textStyle: {
                fontSize: 9,
				color:'#FFF'
            }
        }
    };

    // Draw chart
    var bar_stacked = new google.visualization.BarChart($('#google-bar-stacked')[0]);
    bar_stacked.draw(data, options_bar_stacked);
}

// Resize chart
$(function () {

    // Resize chart on sidebar width change and window resize
    $(window).on('resize', resize);
    $(".sidebar-control").on('click', resize);

    // Resize function
    function resize() {
        drawBarStacked();
    }
});


$(function() {	
	$('.map-world-markers').vectorMap({
		map: 'world_mill_en',
		backgroundColor: 'transparent',
		scaleColors: ['#90A4AE', '#78909C'],
		normalizeFunction: 'polynomial',
		regionStyle: {
			initial: {
				fill: '#ccc'
			}
		},
		hoverOpacity: 0.8,
		hoverColor: false,
		markerStyle: {
			initial: {
				r: 7,
				'fill': '#EF5350',
				'fill-opacity': 1,
				'stroke': '#fff',
				'stroke-width' : 1.5,
				'stroke-opacity': 1
			},
			hover: {
				'stroke': '#ccc',
				'fill-opacity': 1,
				'stroke-width': 1.5
			}
		},
		focusOn: {
			x: 0.1,
			y: 0.1,
			scale: 1
		},
		markers: [
			{latLng:[41.9,12.45],name:"Vatican City",earnings:"500"},{latLng:[43.73,7.41],name:"Monaco",earnings:"32"},{latLng:[43.93,12.46],name:"San Marino",earnings:"510"},{latLng:[47.14,9.52],name:"Liechtenstein",earnings:"130"},{latLng:[17.3,-62.73],name:"Saint Kitts and Nevis",earnings:"329"},{latLng:[35.88,14.5],name:"Malta",earnings:"435"},{latLng:[12.05,-61.75],name:"Grenada",earnings:"321"},{latLng:[13.16,-61.23],name:"Saint Vincent and the Grenadines",earnings:"110"},{latLng:[13.16,-59.55],name:"Barbados",earnings:"90"},{latLng:[17.11,-61.85],name:"Antigua and Barbuda",earnings:"230"},{latLng:[42.5,1.51],name:"Andorra",earnings:"123"},{latLng:[14.01,-60.98],name:"Saint Lucia",earnings:"500"},{latLng:[15.3,-61.38],name:"Dominica",earnings:"239"},{latLng:[26.02,50.55],name:"Bahrain",earnings:"225"}
		]
	});		
});


// Line chart
// Initialize chart
google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawLineChart);
// Chart settings
function drawLineChart() {
    // Data
    var data = google.visualization.arrayToDataTable([
        ['Year', 'Sales'],
        ['2011',  1000],
        ['2012',  1170],
        ['2013',  660],
		['2014',  1400],
        ['2015',  2370],
        ['2016',  1660]
    ]);
    // Options
    var options = {
		legend: 'none',
		series: {
			0: { color: '#fff' },            
		},
        fontName: 'tahoma',
        height: 80,
        curveType: 'function',
        fontSize: 11,
		crosshair:{
			color:'#607D8B',
		},
        chartArea: {
            left: '0%',
            width: '100%',
			backgroundColor:'#AFB42B',			
            height: 80
        },		
        pointSize:6,
        tooltip: {
            textStyle: {
                fontName: 'tahoma',
                fontSize: 11
            }
        },
        vAxis: {
			baselineColor: '#AFB42B',
            title: 'Sales',
            titleTextStyle: {
                fontSize: 11,
                italic: false
            },
            gridlines:{
                color: '#AFB42B',
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
    var line_chart = new google.visualization.LineChart($('#google-line')[0]);
    line_chart.draw(data, options);
}

// Resize chart
$(function () {
    // Resize chart on sidebar width change and window resize
    $(window).on('resize', resize);
    $(".sidebar-control").on('click', resize);
    // Resize function
    function resize() {
        drawLineChart();
    }
});


// Rotated donut chart
// Initialize chart
google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawDonutRotated);


// Chart settings
function drawDonutRotated() {

    // Data
    var data = google.visualization.arrayToDataTable([
        ['Source', 'Sales'],
        ['Direct',     60],
        ['Channel',    40]
    ]);

    // Options
    var options_donut_rotate = {
		legend: 'none',
        fontName: 'tahoma',
        pieHole: 0.35,
        pieStartAngle: 180,
        height: 70,
        chartArea: {
            left: 0,
            width: '100%',
            height: '100%'
        }
    };

    // Instantiate and draw our chart, passing in some options.
    var donut_rotate = new google.visualization.PieChart($('#google-donut-rotate')[0]);
    donut_rotate.draw(data, options_donut_rotate);
}


// Column chart
// Initialize chart
google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawColumn1);

// Chart settings
function drawColumn1() {

    // Data
    var data1 = google.visualization.arrayToDataTable([
        ['Year', 'Sales'],
		['2010',  435],
		['2011',  543],
		['2012',  467],
        ['2013',  776],
        ['2014',  1170],
        ['2015',  660],
        ['2016',  1030]
    ]);

    // Options
    var options_column_sales = {
		legend: 'none',
		series: {
			0: { color: '#8E24AA' },            
		},
        fontName: 'tahoma',
        height: 80,
        fontSize: 12,
        chartArea: {
            left: '0%',
            width: '100%',
            height: 80
        },
        tooltip: {
            textStyle: {
                fontName: 'tahoma',
                fontSize: 11
            }
        },
        vAxis: {
			baselineColor: '#fff',
            title: 'Sales',
            titleTextStyle: {
                fontSize: 11,
                italic: false
            },
            gridlines:{
                color: '#fff',
                count: 7
            },
            minValue: 0
        }
    };
    // Draw chart
    var column1 = new google.visualization.ColumnChart($('#google-column-sales')[0]);
    column1.draw(data1, options_column_sales);
}


// Resize chart
$(function () {
    // Resize chart on sidebar width change and window resize
    $(window).on('resize', resize);
    $(".sidebar-control").on('click', resize);

    // Resize function
    function resize() {
        drawColumn1();
    }
});

function initLocalClocks() {
  // Get the local time using JS
  var date = new Date;
  var seconds = date.getSeconds();
  var minutes = date.getMinutes();
  var hours = date.getHours();

  // Create an object with each hand and it's angle in degrees
  var hands = [
    {
      hand: 'hours',
      angle: (hours * 30) + (minutes / 2)
    },
    {
      hand: 'minutes',
      angle: (minutes * 6)
    },
    {
      hand: 'seconds',
      angle: (seconds * 6)
    }
  ];
  // Loop through each of these hands to set their angle
  for (var j = 0; j < hands.length; j++) {
    var elements = document.querySelectorAll('.' + hands[j].hand);
    for (var k = 0; k < elements.length; k++) {
        elements[k].style.webkitTransform = 'rotateZ('+ hands[j].angle +'deg)';
        elements[k].style.transform = 'rotateZ('+ hands[j].angle +'deg)';
        // If this is a minute hand, note the seconds position (to calculate minute position later)
        if (hands[j].hand === 'minutes') {
          elements[k].parentNode.setAttribute('data-second-angle', hands[j + 1].angle);
        }
    }
  }
}
/*
 * Set a timeout for the first minute hand movement (less than 1 minute), then rotate it every minute after that
 */
function setUpMinuteHands() {
  // Find out how far into the minute we are
  var containers = document.querySelectorAll('.minutes-container');
  var secondAngle = containers[0].getAttribute("data-second-angle");
  if (secondAngle > 0) {
    // Set a timeout until the end of the current minute, to move the hand
    var delay = (((360 - secondAngle) / 6) + 0.1) * 1000;
    setTimeout(function() {
      moveMinuteHands(containers);
    }, delay);
  }
}

/*
 * Do the first minute's rotation
 */
function moveMinuteHands(containers) {
  for (var i = 0; i < containers.length; i++) {
    containers[i].style.webkitTransform = 'rotateZ(6deg)';
    containers[i].style.transform = 'rotateZ(6deg)';
  }
  // Then continue with a 60 second interval
  setInterval(function() {
    for (var i = 0; i < containers.length; i++) {
      if (containers[i].angle === undefined) {
        containers[i].angle = 12;
      } else {
        containers[i].angle += 6;
      }
      containers[i].style.webkitTransform = 'rotateZ('+ containers[i].angle +'deg)';
      containers[i].style.transform = 'rotateZ('+ containers[i].angle +'deg)';
    }
  }, 60000);
}
/*
 * Move the second containers
 */
function moveSecondHands() {
  var containers = document.querySelectorAll('.seconds-container');
  setInterval(function() {
    for (var i = 0; i < containers.length; i++) {
      if (containers[i].angle === undefined) {
        containers[i].angle = 6;
      } else {
        containers[i].angle += 6;
      }
      containers[i].style.webkitTransform = 'rotateZ('+ containers[i].angle +'deg)';
      containers[i].style.transform = 'rotateZ('+ containers[i].angle +'deg)';
    }
  }, 1000);
}