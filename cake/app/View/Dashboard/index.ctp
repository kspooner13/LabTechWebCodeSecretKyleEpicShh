<!-- BEGIN PAGE CONTENT -->
<div class="rightpanel">

    <ul class="breadcrumbs">
        <li><a href="dashboard.html"></a> <span class="separator"></span></li>
        <li>Dashboard</li>

    </ul>

    <div class="pageheader">
        <form action="results.html" method="post" class="searchbar">
            <input type="text" name="keyword" placeholder="To search type and hit enter..." />
        </form>
        <div class="pageicon"><span class="iconfa-laptop"></span></div>
        <div class="pagetitle">
            <h5>All Features Summary</h5>
            <h1>Dashboard</h1>
                        <?php
$CoName = Configure::read('Location'); ?>
        </div>
    </div><!--pageheader-->
    <div class="maincontent">
        <div class="maincontentinner">
            <div class="row-fluid">
                <div class="page-content">
                    <div class="container-fluid">

                        <!-- BEGIN EXAMPLE ALERT -->
                        <div class="alert alert-success alert-block square fade in alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <p><strong>Welcome!</strong></p>
                            <p>SUCCESS!  The new template is working, and you have installed EPiC!</p>
                        </div>
                        <!-- END EXAMPLE ALERT -->


                        <div class="row">
                            <div class="col-lg-3">

                                <!-- BEGIN TODAY VISITOR TILES -->
                                <div class="panel panel-danger panel-square panel-no-border text-center">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Total Managed Computers</h3>
                                    </div>
                                    <div class="panel-body">
                                        <h1 class="bolded tiles-number text-danger"><?php echo $this->Number->format($compCount[0][0]['count(*)'], array('places' => '0', 'before' => '', 'thousands' => ',') ); ?></h1>
                                        <p class="text-muted"><small>TOTAL REACH <strong>25%</strong></small></p>
                                    </div><!-- /.panel-body -->
                                </div><!-- /.panel panel-success panel-block-color -->
                                <!-- END TODAY VISITOR TILES -->

                            </div><!-- /.col-sm-6 -->
                            <div class="col-lg-3">

                                <!-- BEGIN TODAY VISITOR TILES -->
                                <div class="panel panel-warning panel-square panel-no-border text-center">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Total Managed Clients</h3>
                                    </div>
                                    <div class="panel-body">
                                        <h1 class="bolded tiles-number text-warning"><?php echo $this->Number->format($clientCount[0][0]['count(*)'], array('places' => '0', 'before' => '', 'thousands' => ',') ); ?></h1>
                                        <p class="text-muted"><small>Last List <strong>221</strong></small></p>
                                    </div><!-- /.panel-body -->
                                </div><!-- /.panel panel-success panel-block-color -->
                                <!-- END TODAY VISITOR TILES -->

                            </div><!-- /.col-sm-6 -->
                            <div class="col-lg-3">

                                <!-- BEGIN TODAY VISITOR TILES -->
                                <div class="panel panel-success panel-square panel-no-border text-center">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Total Open Tickets</h3>
                                    </div>
                                    <div class="panel-body">
                                        <h1 class="bolded tiles-number text-success"><?php echo $this->Number->format($ticketCount[0][0]['count(*)'], array('places' => '0', 'before' => '', 'thousands' => ',') ); ?></h1>
                                        <p class="text-muted"><small>Last Count <strong>221,202</strong></small></p>
                                    </div><!-- /.panel-body -->
                                </div><!-- /.panel panel-success panel-block-color -->
                                <!-- END TODAY VISITOR TILES -->

                            </div><!-- /.col-sm-6 -->
                            <div class="col-lg-3">

                                <!-- BEGIN TODAY VISITOR TILES -->
                                <div class="panel panel-warning panel-square panel-no-border text-center">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Total Offline Machines</h3>
                                    </div>
                                    <div class="panel-body">
                                        <h1 class="bolded tiles-number text-warning"><?php echo $offlineCount[0][0]['count(*)']; ?></h1>
                                        <p class="text-muted"><small>Last Check <strong>2 HOURS AGO</strong></small></p>
                                    </div><!-- /.panel-body -->
                                </div><!-- /.panel panel-success panel-block-color -->
                                <!-- END TODAY VISITOR TILES -->

                            </div><!-- /.col-sm-6 -->

                        </div><!-- /.row -->

                        <div class="row">
                            <div class="col-lg-6">


                                <div class="panel panel-default ">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Agent Downloads</h3>
                                    </div>

                                    <div class="panel-body">



                                        <div style="padding: 10px;">
                                            <div style="float: left;"
                                                 <ul>
                                                    <li><?php 
                                                $loc = Configure::read('Location');
                                                echo $this->Html->link('LabTech Control Center', 'http://'.$loc.'/Labtech/Updates/ControlCenterInstaller.exe'); ?> </li>
                                                    <li>Default Agent</li>
                                                    <li>Default Linux Agent</li>
                                                    <li>Default MAC Agent</li>
                                                    <li>Default MSI Installer</li>
                                                </ul>


                                            </div>
                                            <div style="float: right;">
                                                <div class="panel form-control">
                                                    <form >
                                            <?php echo $this->Form->select('Client.ClientID', $clientDrop, array('class' => 'select input-sm')); ?>
                                                        <br>
                                                        <select class="select input-sm">
                                                            <option>-- Location -- </option>

                                                        </select>
                                                        <br>
                                                        <select class="select input-sm">
                                                            <option>-- Type -- </option>

                                                        </select>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>





                                    </div>


                                </div>


                            </div><!-- /.col-sm-8 -->
                            <div class="col-lg-6">


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







                        </div>

                        <div class="row">
                            <div class="col-lg-6">

                                <!-- BEGIN SERVER STATUS WIDGET -->
                                <div class="panel panel-success panel-square panel-no-border">
                                    <div class="panel-heading lg">
                                        <h3 class="panel-title"><strong>LabTech Server Status</strong></h3>
                                    </div>
                                    <div id="panel-chart-widget-1" style="padding: 10px;" class="collapse in">
                                        <div class="the-box no-border full bg-success no-margin">
                                            <div id="realtime-chart-widget">
                                                <div id="realtime-chart-container-widget"></div>
                                            </div><!-- /.realtime-chart -->
                                        </div><!-- /.the-box .no-border -->
                                        <div class="the-box no-border">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="row">
                                                        <div class="col-xs-6 text-center">
                                                            <h4 class="small-heading">Kernel memory</h4>
                                                            <span class="chart chart-widget-pie widget-easy-pie-1" data-percent="45">
                                                                <span class="percent"></span>
                                                            </span>
                                                        </div><!-- /.col-xs-6 -->
                                                        <div class="col-xs-6 text-center">
                                                            <h4 class="small-heading">Physical memory</h4>
                                                            <span class="chart chart-widget-pie widget-easy-pie-2" data-percent="85">
                                                                <span class="percent"></span>
                                                            </span>
                                                        </div><!-- /.col-xs-6 -->
                                                    </div><!-- /.row -->
                                                    <hr />
                                                    <button class="btn btn-block btn-danger"><i class="fa fa-cogs"></i> Resource monitor</button>
                                                </div><!-- /.col-sm-6 -->
                                                <div class="col-sm-6">
                                                    <h4 class="small-heading">System status</h4>
                                                    <p class="small">Handles - <span class="text-danger">80%</span></p>
                                                    <div class="progress no-rounded progress-xs">
                                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                        </div><!-- /.progress-bar .progress-bar-danger -->
                                                    </div><!-- /.progress .no-rounded -->
                                                    <p class="small">Threads - <span class="text-warning">65%</span></p>
                                                    <div class="progress no-rounded progress-xs">
                                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
                                                        </div><!-- /.progress-bar .progress-bar-warning -->
                                                    </div><!-- /.progress .no-rounded -->
                                                    <p class="small">Proccess - <span class="text-success">40%</span></p>
                                                    <div class="progress no-rounded progress-xs">
                                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                                        </div><!-- /.progress-bar .progress-bar-success -->
                                                    </div><!-- /.progress .no-rounded -->
                                                    <p class="small">Cached - <span class="text-info">70%</span></p>
                                                    <div class="progress no-rounded progress-xs">
                                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                                        </div><!-- /.progress-bar .progress-bar-info -->
                                                    </div><!-- /.progress .no-rounded -->
                                                </div><!-- /.col-sm-6 -->
                                            </div><!-- /.row -->
                                        </div><!-- /.the-box .no-border -->
                                    </div><!-- /#panel-chart-widget-1 -->
                                </div><!-- /.the-box .no-border -->
                                <!-- END SERVER STATUS WIDGET -->

                            </div><!-- /.col-sm-12 col-md-8 -->


                            <div class="col-lg-6">


                                <div class="panel panel-info panel-square panel-no-border">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Current Weather</h3>
                                    </div>
                                    <div class='panel-body' style='background: #44447f;'>
                                        <div class='panel-primary' id='weather'></div>
                                    </div>
                                </div><!-- /.panel panel-default panel-square panel-no-border -->
                                <!-- END CURRENCY RATES -->

                            </div><!-- /.col-sm-4 -->






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
                            center: new google.maps.LatLng(<?php echo Configure::read('Lat'); ?>, <?php echo Configure::read('Lon');?>),
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
                    $(document).ready(function() {
  $.simpleWeather({
    location: '<?php echo Configure::read('CityState'); ?>',
    woeid: '<?php echo Configure::read('WOEID'); ?>',
    unit: 'f',
    success: function(weather) {
      html = '<h2><i class="icon-'+weather.code+'"></i> '+weather.temp+'&deg;'+weather.units.temp+'</h2>';
      html += '<ul><li>'+weather.city+', '+weather.region+'</li>';
      html += '<li class="currently">'+weather.currently+'</li>';
      html += '<li>'+weather.wind.direction+' '+weather.wind.speed+' '+weather.units.speed+'</li></ul>';
  
      $("#weather").html(html);
    },
    error: function(error) {
      $("#weather").html('<p>'+error+'</p>');
    }
  });
});</script>