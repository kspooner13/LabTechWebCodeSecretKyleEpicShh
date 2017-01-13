<!-- BEGIN PAGE CONTENT -->
<div class="right_col" role="main">
    <div class="maincontent">
        <div class="maincontentinner">
            <div class="row-fluid">
                <div class="page-content">
                    <div class="container-fluid">
						<div class="right_col" role="main">
						<div class="row tile_count">
						<?php /*
							<div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
							  <span class="count_top"><i class="fa fa-desktop"></i> License Count</span>
							  <div class="count"><?php echo $this->Number->format($compCount[0][0]['count(*)'],
									array('places' => '0', 'before' => '', 'thousands' => ',')); ?> / 50000</div>
							  <span class="count_bottom"><i class="green">4% </i> From last Week</span>
							</div>
							<div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
							  <span class="count_top"><i class="fa fa-ticket"></i> Scripts Running</span>
							  <div class="count">123.50</div>
							  <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>
							</div>
							<div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
							  <span class="count_top"><i class="fa fa-user"></i> Total Locations Monitored</span>
							  <div class="count green">2,500</div>
							  <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
							</div>
							<div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
							  <span class="count_top"><i class="fa fa-user"></i> Total Clients Monitored</span>
							  <div class="count"><?php echo $this->Number->format($clientCount[0][0]['count(Clients.clientid)'],
									array('places' => '0', 'before' => '', 'thousands' => ',')); ?></div>
							  <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
							</div>
							<div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
							  <span class="count_top"><i class="fa fa-user"></i> Offline Servers</span>
							  <div class="count">2,315</div>
							  <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
							</div>
							<div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
							  <span class="count_top"><i class="fa fa-desktop"></i> Offline Workstations</span>
							  <div class="count"><?php echo $offlineCount[0][0]['count']; ?></div>
							  <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
							</div>
							*/?>
						 </div>
				 
				 <!-- /top tiles -->

			</div>
              <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="dashboard_graph">

                <div class="row x_title">
                  <div class="col-md-6">
                    <h3>Network Activities <small>Graph title sub-title</small></h3>
                  </div>
                  <div class="col-md-6">
                    <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                      <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                      <span>December 8, 2016 - January 6, 2017</span> <b class="caret"></b>
                    </div>
                  </div>
                </div>

                <div class="col-md-9 col-sm-9 col-xs-10">
                  <div id="placeholder33" style="height: 260px; display: none" class="demo-placeholder"></div>
                  <div style="width: 100%;">
                    <div id="canvas_dahs" class="demo-placeholder" style="width: 100%; height: 270px; padding: 0px; position: relative;"><canvas class="flot-base" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 1210px; height: 270px;" width="1210" height="270"></canvas><div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 151px; top: 254px; left: 162px; text-align: center;">Jan 02</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 151px; top: 254px; left: 357px; text-align: center;">Jan 03</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 151px; top: 254px; left: 551px; text-align: center;">Jan 04</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 151px; top: 254px; left: 746px; text-align: center;">Jan 05</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 151px; top: 254px; left: 941px; text-align: center;">Jan 06</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 151px; top: 254px; left: 1136px; text-align: center;">Jan 07</div></div><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div class="flot-tick-label tickLabel" style="position: absolute; top: 242px; left: 13px; text-align: right;">0</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 223px; left: 7px; text-align: right;">10</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 204px; left: 7px; text-align: right;">20</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 186px; left: 7px; text-align: right;">30</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 167px; left: 7px; text-align: right;">40</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 149px; left: 7px; text-align: right;">50</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 130px; left: 7px; text-align: right;">60</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 112px; left: 7px; text-align: right;">70</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 93px; left: 7px; text-align: right;">80</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 75px; left: 7px; text-align: right;">90</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 56px; left: 1px; text-align: right;">100</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 38px; left: 1px; text-align: right;">110</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 19px; left: 1px; text-align: right;">120</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 1px; left: 1px; text-align: right;">130</div></div></div><canvas class="flot-overlay" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 1210px; height: 270px;" width="1210" height="270"></canvas></div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 bg-white">
                  <div class="x_title">
                    <h2>Client Downloads</h2>
                    <div class="clearfix"></div>
                  </div>

                  <div class="col-md-12 col-sm-12 col-xs-6">
                                                                     <ul>
                                                    <li><?php
            $loc = Configure::read('Location');
            echo $this->Html->link('LabTech Control Center',
                    'http://' . $loc . '/Labtech/Updates/ControlCenterInstaller.exe');
            ?> </li>
                                                    <li><?php echo $this->Html->link('Default Win Agent',
                    'http://' . $loc . '/Labtech/Deployment.aspx?probe=1'); ?></li>
                                                    <li><?php echo $this->Html->link('Default Linux Agent',
                    'http://' . $loc . '/Labtech/Deployment.aspx?probe=1&MSILocations=1&InstallType=linux'); ?></li>
                                                    <li><?php echo $this->Html->link('Default MAC Agent',
                    'http://' . $loc . '/Labtech/Deployment.aspx?probe=1&MSILocations=1&InstallType=mac'); ?></li>
                                                    <li>Default MSI Installer</li>
                                                </ul>


                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-6">
                    <div class="panel form-control">
<?php echo $this->Form->create('Dashboard',
        array('action' => 'downloadAgent')); ?>
<?php echo $this->Form->select('Client.ClientID',
        $clientDrop,
        array('class' => 'select input-sm', 'empty' => ' --- SELECT CLIENT ---')); ?>
                                                    <br><br>

                                                    <?php echo $this->Form->select('Location.LocationID',
                                                            'location_id',
                                                            array('class' => 'select input-sm',
                                                        'empty' => ' --- SELECT LOCATION ---')); ?>
                                                    <br><br>
                                                    <select name='type' class="select input-sm">
                                                        <option>-- SELECT TYPE -- </option>
                                                        <option value='EXE'>Windows EXE</option>
                                                        <option value='msi'>Windows MSI</option>
                                                        <option value='linux'>Linux</option>
                                                        <option value='mac'>MAC</option>

                                                    </select>
                                                    <br><br>
<?php echo $this->Form->submit(); ?>
                                                    </form>
                                                </div>
                  </div>

                </div>

                <div class="clearfix"></div>
              </div>
            </div>

          </div><br></br>
                        <div class="row">
                            <div class="col-lg-4">


                                <div class="panel panel-default ">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Agent Downloads</h3>
                                    </div>

                                    <div class="panel-body">



                                        <div style="padding: 10px;" class="google-maps-container">
                                            <div style="float: left;"
                                                 


                                            </div>
                                            <div style="float: right;">
                                                <
                                            </div>
                                        </div>





                                    </div>


                                </div>


                            </div><!-- /.col-sm-8 -->
                            <div class="col-lg-4">


                                <div class="panel panel-primary panel-square panel-no-border">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Traffic Map</h3>
                                    </div>
                                    <div class='panel-body'>
                                        <div class='google-maps-container'>
                                            <div id='map-canvas-4'></div>
                                        </div>
                                    </div>
                                </div><!-- /.panel panel-default panel-square panel-no-border -->
                                <!-- END CURRENCY RATES -->

                            </div><!-- /.col-sm-4 -->
                            <div class="col-lg-4">
                                <div class="panel panel-square panel-warning">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><i class="fa fa-rss-square"></i> RSS Feed </h3>
                                    </div>
                                    <div class="panel-body">
                                        
                                    </div>
                                </div>
                            </div>





                        </div>

                        <div class="row">
                            <div class="col-lg-4">
                                <?php
                                if (!isset($ltserver[0]['computers']['TotalMemory'])) {
                                    $missing = true;
                                    $serverName = 'DEFAULT SERVER COMPUTER ID IS MISSING';
                                } else {
                                    // LT Server Calculations
                                    $totalMem = $ltserver[0]['computers']['TotalMemory'];
                                    $totalFree = $ltserver[0]['computers']['MemoryAvail'];
                                    $cpuUsage = $ltserver[0]['computers']['CPUUsage'];
                                    //$driveFree = $ltserver[0]['computers']['ComputerDriveFree'];
                                    //$driveSize = $ltserver[0]['computers']['ComputerDriveSize'];
                                    $serverName = $ltserver[0]['computers']['Name'];
                                    $missing = false;

                                    // $drive = (($driveSize - $driveFree) / $driveSize) * 100;
                                    $memUsed = $totalMem - $totalFree;
                                    $mem = (($totalMem - $totalFree) / $totalMem)
                                            * 100;
                                }
                                ?>
                                <!-- BEGIN SERVER STATUS WIDGET -->
                                <div class="panel panel-success panel-square panel-no-border">
                                    <div class="panel-heading lg">
                                        <h3 class="panel-title"><strong>LabTech Server Status - <?php echo $serverName; ?></strong></h3>
                                    </div>
                                    <div id="panel-chart-widget-1" style="padding: 10px;" class="collapse in">
                                        <div class="the-box no-border full bg-success no-margin">
                                            <div id="realtime-chart-widget">
                                                <div id="realtime-chart-container-widget"></div>
                                            </div><!-- /.realtime-chart -->
                                        </div><!-- /.the-box .no-border -->
                                        <div class="the-box no-border" style="padding-left: 25px;">
                                            <div class="row" >

                                                <?php
                                                if ($missing === true) {

                                                    echo "<div class='col-sm-6'> <div class='btn btn-danger'><h3> DEFAULT LABTECH SERVER IS MISSING</h3></div>"
                                                    . "<br> <div> Error Code: LTSVR - 10001<br>Fix: Missing proper ID for the Labtech Server</div>"
                                                    . "</div>";
                                                } else {
                                                    echo "
                                                <div class='col-sm-6'>
                                                    <div class='row'>
                                                        <div class='col-xs-6 text-center'>
                                                            <h4 class='small-heading'>Total Memory</h4>
                                                            
                                                        </div><!-- /.col-xs-6 -->
                                                        <div class='col-xs-6 text-center'>
                                                            <h4 class='small-heading'></h4>
                                                            <span class='chart chart-widget-pie widget-easy-pie-2' data-percent='85'>
                                                                <span class='percent'></span>
                                                            </span>
                                                        </div><!-- /.col-xs-6 -->
                                                    </div><!-- /.row -->
                                                    <hr />
                                                    <div class='row' style='padding-left: 45px;'>
                                                        <h3 >" . $memUsed . " / " . $totalMem . "  GB</h3>
                                                        ";
                                                    echo "
                                                    </div>

                                                </div><!-- /.col-sm-6 -->
                                                <div class='col-sm-6'>
                                                    <h4 class='small-heading'>System status</h4>
                                                    <p class='small'>Memory Usage - <span class='text-danger'>" . $this->Number->toPercentage($mem) . "</span></p>
                                                    <div class='progress no-rounded progress-xs'>
                                                        <div class='progress-bar progress-bar-danger' role='progressbar' aria-valuenow='" . $this->Number->toPercentage($mem) . "' aria-valuemin='0' aria-valuemax='100' style='width: " . $this->Number->toPercentage($mem) . "'>
                                                        </div><!-- /.progress-bar .progress-bar-danger -->
                                                    </div><!-- /.progress .no-rounded -->
                                                    <p class='small'>CPU Usage - <span class='text-warning'>" . $this->Number->toPercentage($cpuUsage) . "</span></p>
                                                    <div class='progress no-rounded progress-xs'>
                                                        <div class='progress-bar progress-bar-warning' role='progressbar' aria-valuenow='65' aria-valuemin='0' aria-valuemax='100' style='width: " . $this->Number->toPercentage($cpuUsage) . "'>
                                                        </div><!-- /.progress-bar .progress-bar-warning -->
                                                    </div><!-- /.progress .no-rounded -->
                                                    <p class='small'>C: Drive - <span class='text-success'> Used</span></p>
                                                    <div class='progress no-rounded progress-xs'>
                                                        <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow='40' aria-valuemin='0' aria-valuemax='100' style='width: '>
                                                        </div><!-- /.progress-bar .progress-bar-success -->
                                                    </div><!-- /.progress .no-rounded -->
                                                    ";
                                                }
                                                ?>
                                            </div><!-- /.col-sm-6 -->
                                        </div><!-- /.row -->
                                    </div><!-- /.the-box .no-border -->
                                </div><!-- /#panel-chart-widget-1 -->
                            </div><!-- /.the-box .no-border -->
                            <!-- END SERVER STATUS WIDGET -->

                        </div><!-- /.col-sm-12 col-md-8 -->


                        <div class="col-lg-4">


                            <div class="panel darken success panel-square">
                                <div class="panel-heading no-border text-white">
                                    <a class="pull-right" href="#"><i class="fa fa-map-marker fa-2x text-white"></i></a>
                                    <span id="weatherheader"></span><br><br><br>
                                    <div class="text-center inner-all margin top">
                                        <span class="h1" id="weathertemp"></span>
                                    </div><br>
                                </div>
                                <div class="panel-body lighten success no-border">
                                    <div class="row">
                                        <div class="col-xs-4 text-center darken-border success right">
                                            <span class="text-white block">Humidity</span><br>
                                            <span id="weatherhumid"></span>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <span class="text-white block">Last Updated</span><bR>
                                            <span id="weatherupdated"></span>
                                        </div>
                                        <div class="col-xs-4 text-center darken-border success left">
                                            <span class="text-white block">Winds</span><br>
                                            <span id="weatherspeed"></span>
                                        </div>
                                    </div>
                                </div>

                            </div><!-- /.panel panel-default panel-square panel-no-border -->
                            <!-- END CURRENCY RATES -->

                        </div><!-- /.col-sm-4 -->



                            <div class="col-lg-4">
                                <div class="panel panel-blockquote panel-border-success panel-square">
                                    <div class="panel-heading panel-info clearfix">
                                        <h3 class="panel-title"><i class="fa fa-twitter-square"></i> Twitter Feed </h3>
                                    </div>
                                    <div class="panel-body">
                                        
                                    </div>
                                </div>
                            </div>




                    </div><!-- /.row -->






                </div><!-- /.container-fluid -->
                <div class="footer">&COPY; 2015 Kyle Spooner</div>

                <!-- END FOOTER -->


            </div><!-- /.page-content -->

            <script>
                /*** Google Maps ***/
                var map4;
                function initialize4() {
                    var mapOptions4 = {
                        zoom: 10,
                        center: new google.maps.LatLng(<?php echo Configure::read('Lat'); ?>, <?php echo Configure::read('Lon'); ?>),
                        styles: [
                            {
                                "featureType": "water",
                                "stylers": [
                                    {
                                        "color": "#46bcec"
                                    },
                                    {
                                        "visibility": "on"
                                    }
                                ]
                            },
                            {
                                "featureType": "landscape",
                                "stylers": [
                                    {
                                        "color": "#f2f2f2"
                                    }
                                ]
                            },
                            {
                                "featureType": "road",
                                "stylers": [
                                    {
                                        "saturation": -100
                                    },
                                    {
                                        "lightness": 45
                                    }
                                ]
                            },
                            {
                                "featureType": "road.highway",
                                "stylers": [
                                    {
                                        "visibility": "simplified"
                                    }
                                ]
                            },
                            {
                                "featureType": "road.arterial",
                                "elementType": "labels.icon",
                                "stylers": [
                                    {
                                        "visibility": "off"
                                    }
                                ]
                            },
                            {
                                "featureType": "administrative",
                                "elementType": "labels.text.fill",
                                "stylers": [
                                    {
                                        "color": "#444444"
                                    }
                                ]
                            },
                            {
                                "featureType": "transit",
                                "stylers": [
                                    {
                                        "visibility": "off"
                                    }
                                ]
                            },
                            {
                                "featureType": "poi",
                                "stylers": [
                                    {
                                        "visibility": "off"
                                    }
                                ]
                            }
                        ]
                    };
                    map4 = new google.maps.Map(document.getElementById('map-canvas-4'), mapOptions4);
                    var trafficLayer = new google.maps.TrafficLayer();
                    trafficLayer.setMap(map4);
                }

                google.maps.event.addDomListener(window, 'load', initialize4);


            </script>

            <script>
                $(document).ready(function () {
                    $.simpleWeather({
                        location: '<?php echo Configure::read('CityState'); ?>',
                        woeid: '<?php echo Configure::read('WOEID'); ?>',
                        unit: 'f',
                        success: function (weather) {
                            header = '<span class="h3">' + weather.city + ', ' + weather.region + '</span>';
                            temp = '<i class="wi wi-fw wi-' + weather.code + ' text-white animate bounceInDown"></i> ' + weather.temp + '&deg; ';
                            speed = '<span>' + weather.wind.speed + ' ' + weather.units.speed + '</span>';
                            humid = '<span>' + weather.humidity + ' %</span>';
                            update = '<span>' + weather.updated + ' </span>';
                            $("#weatherheader").html(header);
                            $("#weathertemp").html(temp);
                            $("#weatherspeed").html(speed);
                            $("#weatherhumid").html(humid);
                            $("#weatherupdated").html(update);



                        },
                        error: function (error) {
                            $("#weather").html('<p>' + error + '</p>');
                        }
                    });
                });</script>

            <?php
            $this->Js->get('#ClientClientID')->event('change',
                    $this->Js->request(array(
                        'controller' => 'Location',
                        'action' => 'getloc'
                            ),
                            array(
                        'update' => '#LocationLocationID',
                        'async' => true,
                        'method' => 'post',
                        'dataExpression' => true,
                        'data' => $this->Js->serializeForm(array(
                            'isForm' => true,
                            'inline' => true
                        ))
                    ))
            );
            ?>