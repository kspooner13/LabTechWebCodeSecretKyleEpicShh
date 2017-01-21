'use strict';

// Column chart
// ------------------------------

// Initialize chart
google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawColumn);


// Chart settings
function drawColumn() {

    // Data
    var data = google.visualization.arrayToDataTable([
        ['Time', 'Desktops/Laptops', 'Mobile', 'Tablet'],        
		['08:00',  432,213,223],
		['09:00',  345,212,314],
		['10:00',  546,245,514],
		['11:00',  234,654,123],
		['12:00',  344,234,254],
		['13:00',  342,432,241],
		['14:00',  543,234,432],
		['15:00',  556,134,251],
		['16:00',  213,531,113],
		['17:00',  356,123,457],
		['18:00',  463,543,654],
        ['19:00',  357,553,421],
        ['20:00',  645,231,454],
        ['21:00',  563,436,234]
    ]);


    // Options
    var options_column = {
        fontName: 'open_sansregular',
        height: 270,
        fontSize: 11,
        chartArea: {
            left: '10%',
            width: '100%',
            height: 220
        },
        tooltip: {
            textStyle: {
                fontName: 'open_sansregular',
                fontSize: 11
            }
        },
        vAxis: {
            title: 'Total pageviews',
            titleTextStyle: {
                fontSize: 11,
                italic: false
            },
            gridlines:{
                color: '#fff',
                count: 6
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
    var column = new google.visualization.ColumnChart($('#google-column')[0]);
    column.draw(data, options_column);
}


// Initialize chart
google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawAreaChart);
// Chart settings
function drawAreaChart() {
    // Data
    var data = google.visualization.arrayToDataTable([
        ['Year', 'Visitors'],
        ['2011',  432],
		['2012',  329],
		['2013',  793],
        ['2014',  870],
        ['2015',  660],
        ['2016',  930]
    ]);
    // Options
    var options = {
        fontName: 'open_sansregular',
		backgroundColor:'transparent',
        height:60,
        curveType: 'function',
        fontSize: 9,
        areaOpacity: 0.4,
        chartArea: {
            left: '0%',
            width: '100%',
            height: 60,
        },
		series: {
			0: { color: '#fff' },            
		},
        pointSize: 5,
        tooltip: {
            textStyle: {
                fontName: 'open_sansregular',
                fontSize: 9
            }
        },
        vAxis: {
			baselineColor: 'transparent',
            title: 'Visitors',
            titleTextStyle: {
                fontSize: 9,
                italic: false
            },
            gridarea:{
                color: 'transparent',
                count: 8
            },
			gridlines:{
                color: 'transparent',
                count: 6
            },
            minValue: 0
        },
        legend: 'none',
		series: {
			0: { color: '#4FC3F7' }			
		}
    };
    // Draw chart
    var area_chart = new google.visualization.AreaChart($('#google-area')[0]);
    area_chart.draw(data, options);
}


// Column chart
// Initialize chart
google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawColumn1);

// Chart settings
function drawColumn1() {

    // Data
    var data = google.visualization.arrayToDataTable([
        ['Month', 'Bounce rate (%)'],
        ['Nov',  23],
        ['Dec',  13],
		['Jan',  43],
		['Feb',  23],
        ['Mar',  13],
		['Apr',  43],
        ['May',  25],
		['Jun',  56],
        ['jul',  12],
        ['Aug',  43]        
    ]);

    // Options
    var options_column1 = {
		backgroundColor: 'transparent',
        fontName: 'open_sansregular',
        height: 60,
        fontSize: 9,
        chartArea: {
            left: '0%',
            width: '100%',
            height: 60
        },
        tooltip: {
            textStyle: {
                fontName: 'open_sansregular',
                fontSize: 9
            }
        },
        vAxis: {
			baselineColor: 'transparent',
            title: 'Bounce rate',
            titleTextStyle: {
                fontSize: 9,
                italic: false
            },
            gridlines:{
                color: 'transparent',
                count: 6
            },
            minValue: 0
        },
        legend: 'none',
		series: {
			0: { color: '#4DB6AC' }			
		}
    };

    // Draw chart
    var column = new google.visualization.ColumnChart($('#google-column-bounce')[0]);
    column.draw(data, options_column1);
}


// Initialize chart
google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawAreaChart_views);
// Chart settings
function drawAreaChart_views() {
    // Data
    var data_views = google.visualization.arrayToDataTable([
        ['Month', 'Sessions (All users)', 'Sessions (Mobiles, tablets)'],
        ['Jul 15',  568,      421],
        ['Aug 15',  658,      321],		
		['Sep 15',  872,      123],
        ['Oct 15',  568,      311],
		['Nov 15',  932,      435],
        ['Dec 15',  435,      123],
        ['Jan 16',  2468,       1120],
		['Feb 16',  1000,      313],
        ['Mar 16',  543,      112],
        ['Apr 16',  655,       331],
		['May 16',  645,      229],
        ['Jun 16',  567,      256],
        ['Jul 16',  467,       295],
        ['Aug 06',  495,      189]
    ]);
    // Options
    var options_views = {
        fontName: 'open_sansregular',
        height: 200,
        curveType: 'function',
        fontSize: 11,
        areaOpacity: 0.4,
        chartArea: {
            left: '6%',
            width: '100%',
            height: 150
        },
        pointSize: 8,
        tooltip: {
            textStyle: {
                fontName: 'open_sansregular',
                fontSize: 11
            }
        },
        vAxis: {
            title: 'Sessions',
            titleTextStyle: {
                fontSize: 11,
                italic: false
            },
            gridarea:{
                color: '#fff',
                count: 8
            },
            minValue: 0
        },
        legend: {
            position: 'bottom',
            alignment: 'end',
            textStyle: {
                fontSize: 12
            }
        },
		series: {
			0: { color: '#1E88E5' },
			1: { color: '#E53935' }	
		},		
    };
    // Draw chart
    var area_chart_views = new google.visualization.AreaChart($('#google-area_views')[0]);
    area_chart_views.draw(data_views, options_views);
}

// Pie chart
// ------------------------------
// Initialize chart
google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawPie);

// Chart settings    
function drawPie() {

    // Data
    var data = google.visualization.arrayToDataTable([
        ['Channel', 'Visitors'],
        ['Organic search',     72],
        ['Social',      23],
        ['Dirrect',  97],
        ['Refferal', 75]
    ]);

    // Options
    var options_pie = {
        fontName: 'open_sansregular',
        height: 150,
        chartArea: {
            left: 0,
            width: '100%',
            height: '100%'
        }
    };
    // Instantiate and draw our chart, passing in some options.
    var pie = new google.visualization.PieChart($('#google-pie1')[0]);
    pie.draw(data, options_pie);
}


google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawPie2);

// Chart settings    
function drawPie2() {

    // Data
    var data2 = google.visualization.arrayToDataTable([
        ['Channel', 'Visitors'],
        ['Organic search',     67],
        ['Social',      43],
        ['Dirrect',  76],
        ['Refferal', 34]
    ]);

    // Options
    var options_pie2 = {
        fontName: 'open_sansregular',
        height: 150,
        chartArea: {
            left: 0,
            width: '100%',
            height: '100%'
        }
    };
    // Instantiate and draw our chart, passing in some options.
    var pie2 = new google.visualization.PieChart($('#google-pie2')[0]);
    pie2.draw(data2, options_pie2);
}



// Initialize chart
google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawAreaChart1);
// Chart settings
function drawAreaChart1() {
    // Data
    var data1 = google.visualization.arrayToDataTable([
        ['Month', 'Visitors'],
        ['Dec',  564],
		['Jan',  453],
		['Feb',  567],
        ['Mar',  1570],
        ['Apr',  523],
		['May',  586],
        ['Jun',  480],
        ['Jul',  490],
        ['Aug',  512]
    ]);
	var data2 = google.visualization.arrayToDataTable([
        ['Month', 'Visitors'],
        ['Dec',  564],
		['Jan',  234],
		['Feb',  654],
        ['Mar',  425],
        ['Apr',  523],
		['May',  586],
        ['Jun',  1570],
        ['Jul',  490],
        ['Aug',  512]
    ]);
	var data3 = google.visualization.arrayToDataTable([
        ['Month', 'Visitors'],
        ['Dec',  355],
		['Jan',  453],
		['Feb',  567],
        ['Mar',  423],
        ['Apr',  523],
		['May',  586],
        ['Jun',  1879],
        ['Jul',  490],
        ['Aug',  643]
    ]);
    // Options
    var options1 = {
        fontName: 'tahoma',
        height: 40,
        curveType: 'function',
        fontSize: 11,
        areaOpacity: 0.3,
        chartArea: {
            left: '0',
            width: '100%',
            height: 40
        },
        pointSize: 4,
        tooltip: {
            textStyle: {
                fontName: 'tahoma',
                fontSize: 11
            }
        },
        vAxis: {
			baselineColor: 'transparent',
            title: 'Visitors',
            titleTextStyle: {
                fontSize: 9,
                italic: false
            },
            gridarea:{
                color: 'transparent',
                count: 8
            },
			gridlines:{
                color: 'transparent',
                count: 6
            },
            minValue: 0
        },
        legend: 'none',
		series: {
			0: { color: '#F44336' }			
		}
    };
    // Draw chart
    var area_chart1 = new google.visualization.AreaChart($('#google-area-sm1')[0]);
    area_chart1.draw(data1, options1);
	
	var area_chart2 = new google.visualization.AreaChart($('#google-area-sm2')[0]);
    area_chart2.draw(data2, options1);
	
	var area_chart3 = new google.visualization.AreaChart($('#google-area-sm3')[0]);
    area_chart3.draw(data3, options1);
	
	var area_chart4 = new google.visualization.AreaChart($('#google-area-sm4')[0]);
    area_chart4.draw(data2, options1);
	
	var area_chart5 = new google.visualization.AreaChart($('#google-area-sm5')[0]);
    area_chart5.draw(data3, options1);
	
	var area_chart6 = new google.visualization.AreaChart($('#google-area-sm6')[0]);
    area_chart6.draw(data1, options1);
	
	var area_chart7 = new google.visualization.AreaChart($('#google-area-sm7')[0]);
    area_chart7.draw(data3, options1);
	
	var area_chart8 = new google.visualization.AreaChart($('#google-area-sm8')[0]);
    area_chart8.draw(data1, options1);
	
	var area_chart9 = new google.visualization.AreaChart($('#google-area-sm9')[0]);
    area_chart9.draw(data2, options1);
}


