<?php
//CLIENT PAGE FANCY LIKE
?>
<div class="rightpanel">
    <div class="maincontent">
        <div class="maincontentinner">
            <div class="row-fluid">
                <div class="page-content">
                    <div class="container-fluid fleet-view">
                        <div class='col-md-3 fleet-sidebar'>
                            <div class='panel fleet-panel panel-blockquote panel-border-info right'>
                                <div class='panel-body'>
                                    <div class="text-center fleet-img">
                                        
                                        <img width="150" src="http://ams86.co.uk/wpimages/wp627702e8_06.png" alt="" class="img-rounded">
                                    </div>
                                    <br>
                                    <!-- Title/Computer Name -->
                                    <h3 class="sidebar-title text-center"><?php echo $computer['Computer']['Name']; ?> (<?php echo $computer['Computer']['ComputerID'];?>)</h3>



                                    <ul class="fleet-stats">
                                        <li>
                                            <i class="fa fa-windows text-info" data-toggle="tooltip" data-placement="top" title="Odometer"></i> 
                                            <a href="#" data-toggle="tooltip" data-placement="right" title="Last updated Today at 5 PM">AIT.LOCAL</a>
                                        </li>
                                        <li>

                                            <i class="fa fa-flag text-info" data-toggle="tooltip"  title="Veicle status"></i> 
                                            <a href="#" data-toggle="modal">Virtual Machine Bios</a>


                                        </li>
                                        <li>
                                            <i class="fa fa-tag text-info" data-toggle="tooltip" data-placement="top" title="Vehicle type"></i> 
                                            <a href="#">Installed: 12/1/2014 2:01 PM</a>
                                        <li>
                                            <i class="fa fa-sitemap text-info" data-toggle="tooltip" data-placement="top" title="Location"></i> 10.2.255.255
                                        </li>
                                        <li>
                                            <i class="fa fa-television text-info" data-toggle="tooltip" data-placement="top" title="ScreenConnect"></i> 
                                            <span class="text-muted">ScreenConnect</span> <a href="#">Active</a>  <span class="pull-right"><input type="button" value="Launch" name="launch" class="btn btn-success"></span>
                                        </li>
                                    </ul>
                                    <br> <br>
                                    <!-- Browse -->
                                    <ul class="nav nav-list nav-fleet">
                                        <li class="nav-header">BROWSE</li>

                                        <li><a href="#"><span class="pull-right label label-default">4</span>Dashboard</a></li>

                                        <li><a href="#"><span class="pull-right label label-default">2</span>Hardware</a></li>

                                        <li><a href="#"><span class="pull-right label label-default">0</span>Services</a></li>

                                        <li><a href="#"><span class="pull-right label label-default">1</span>Processes</a></li>

                                        <li><a href="#"><span class="pull-right label label-default">4</span>Software</a></li>

                                        <li><a href="#"><span class="pull-right label label-default">1</span>Network</a></li>

                                        <li><a href="#"><span class="pull-right label label-default">1</span>Commands</a></li>

                                        <li><a href="#"><span class="pull-right label label-default">6</span>Scripts</a></li>
                                        
                                        <li><a href="#"><span class="pull-right label label-default">6</span>Patching</a></li>
                                        
                                        <li><a href="#"><span class="pull-right label label-default">6</span>Event Logs</a></li>
                                        
                                        <li><a href="#"><span class="pull-right label label-default">6</span>Ignite</a></li>
                                        
                                        <li><a href="#"><span class="pull-right label label-default">6</span>Agent Alerts</a></li>
                                        
                                        <li><a href="#"><span class="pull-right label label-default">6</span>Ticketing</a></li>
                                        
                                        <li><a href="#"><span class="pull-right label label-default">6</span>Extra Data Fields (Info)</a></li>

                                    </ul>





                                </div>


                            </div>
                        </div>
                        <!--- END SIDEBAR -->


                        <!-- Content -->
                        <div class="col-md-9 fleet-content">
                            <!-- Breadcrumb -->
                            <ol class="breadcrumb">
                                <li><a href="#">Acumen IT</a></li>
                                <li><a href="#">Main Office</a></li>
                                <li><a href="#">AITTWLT</a></li>
                                <li class="active">Dashboard</li>
                            </ol>
                            <!-- Content Panel -->
                            <div class="panel fleet-panel panel-blockquote">
                                <div class="panel-body">
                                    <!-- Fleet title -->
                                    <h1 id="fleet-car-title"><i class="fa fa-server"></i> <?php echo $computer['Computer']['Name']; ?></h1> 
                                    <div class="separator bottom"></div>
                                    <br>

                                    <!-- Details Content -->
                                    <div class="row" style="padding-left: 20px;">
                                        <div class="col-md-6">
                                            <!-- Details -->
                                            <div class="panel panel-blockquote panel-border-success left">
                                                <div class="panel-heading panel-info clearfix">
                                                    <h3 class="panel-title">Details</h3>
                                                </div>
                                                <br>
                                                <div class="panel-body">
                                                    <table class="table table-list text-small">
                                                        <tbody style="font-size: 11px;">
                                                            <tr>
                                                                <td class="text-muted text-right col-md-3">Type</td>
                                                                <td><?php echo $computer['Computer']['OS']; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted text-right">Mfg.</td>
                                                                <td><?php echo $computer['Computer']['BiosMFG']; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted text-right">Virus Scanner</td>
                                                                <td><?php echo $computer['Computer']['VirusScanner']; ?><span class='text-success'><i class="fa fa-thumbs-up"></i> ACTIVE</span></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted text-right">Last Contact</td>
                                                                <td>12/8/2015 8:56:47 AM</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted text-right">Last Heartbeat</td>
                                                                <td><?php echo $computer['Computer']['LastContact']; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted text-right">Install Date</td>
                                                                <td>12/1/2011 4:06:24 PM</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted text-right">Last Logged In:</td>
                                                                <td><?php echo $computer['Computer']['LastUsername']; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted text-right">Uptime</td>
                                                                <td><?php echo $computer['Computer']['UpTime']; ?></td>
                                                            </tr>

                                                            <tr>
                                                                <td class="text-muted text-right">Domain</td>
                                                                <td><?php echo $computer['Computer']['Domain']; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted text-right">Serial Number</td>
                                                                <td><?php echo $computer['Computer']['BiosVer']; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted text-right">Service Plan</td>
                                                                <td>MISSING</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted text-right">Maintenance Mode</td>
                                                                <td><span class="text-sucess">MISSING</span></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            
                                            <div class="panel panel-blockquote panel-border-success left">
                                                <div class="panel-heading panel-info clearfix">
                                                    <h3 class="panel-title">Computer Contact</h3>
                                                </div>
                                                <div class="panel-body">
                                                    <table class="table table-list text-small">
                                                        <tbody style="font-size: 11px;">
                                                            <tr>
                                                                <td class="text-muted text-right col-md-3">Contact Name</td>
                                                                <td>John Doe</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted text-right col-md-3">Phone</td>
                                                                <td>5555555555</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted text-right col-md-3">Email</td>
                                                                <td>John.Doe@Email.Com</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="panel panel-blockquote panel-border-success left">
                                                <div class="panel-heading panel-info clearfix">
                                                    <h3 class="panel-title">Network</h3>
                                                </div>
                                                <div class="panel-body">
                                                    <table class="table table-list">
                                                        <tbody style="font-size: 11px;">
                                                            <tr>
                                                                <td class="text-muted text-right col-md-3">IP Adress</td>
                                                                <td><?php echo $computer['Computer']['LocalAddress']; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted text-right col-md-3">Router Address</td>
                                                                <td><?php echo $computer['Computer']['RouterAddress']; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted text-right col-md-3">MAC Address</td>
                                                                <td><?php echo $computer['Computer']['MAC ']; ?></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>



                                        </div>
                                        <div class="col-md-6">
                                            <!-- Stats -->
                                            <div class="panel panel-square">
                                                <div class="panel-heading panel-info clearfix">
                                                    <h3 class="panel-title">Agent Flags</h3>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="row" style="padding-left: 20px;">
                                                        <div class="col-sm-4">
                                                            <div class="media media-success">
                                                                <div class="pull-left">
                                                                    <div class="media-object fleet-icon" style="padding-top: 7px;">
                                                                        <i class="fa fa-sitemap"></i><br>
                                                                    </div>
                                                                 <span class="caption">Probe</span>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4" >
                                                            <div class="media media-mute" >
                                                                <div class="pull-left">
                                                                    <div class="media-object fleet-icon" style="padding-top: 7px;">
                                                                        <i class="fa fa-desktop"></i>
                                                                    </div>
                                                                    <span class="caption">LocalSystem</span>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4" >
                                                            <div class="media media-success" >
                                                                <div class="pull-left">
                                                                    <div class="media-object fleet-icon" style="padding-top: 7px;">
                                                                        <i class="fa fa-feed"></i>
                                                                    </div>
                                                                    <span class="caption">Master</span>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <form role="form">
                                                            <div class='col-sm-4'>
                                                                <fieldset>
                                                                <input type="checkbox" id="checkbox1" disabled> <label for="checkbox1"> Virtual Machine </label><br>
                                                                <input type="checkbox"> Reboot Needed <br>
                                                                <input type="checkbox"> FasTalk <br>
                                                                </fieldset>
                                                            </div>
                                                            <div class='col-sm-4'>
                                                                
                                                                <input type="checkbox"> Virtual Host <br>
                                                                <input type="checkbox"> Locked Down <br>
                                                                <input type="checkbox"> Intel vPRO <br>
                                                               
                                                            </div> 
                                                            <div class='col-sm-4'>
                                                                <input type="checkbox"> Tunnels Avail <br>
                                                                <input type="checkbox"> HP iLO <br>
                                                                <input type="checkbox"> Intel AMT <br>
                                                            </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            

                                            <!-- Issues -->

                                            <div class="panel panel-square">
                                                <div class="panel-heading panel-info clearfix">
                                                    <h3 class="panel-title">Ticketing</h3>
                                                </div>
                                                <div class="panel-body fleet-issues">
                                                    <div class="row">
                                                        <div class="col-sm-4 text-center">
                                                            <h1 class="success">5</h1>
                                                            <span class="caption">Open</span>
                                                        </div>
                                                        <div class="col-sm-4 text-center">
                                                            <h1 class="success">0</h1>
                                                            <span class="caption">Overdue</span>
                                                        </div>
                                                        <div class="col-sm-4 text-center">
                                                            <h1 class="info">3</h1>
                                                            <span class="caption">Resolved</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-square">
                                                <div class="panel-heading panel-info clearfix">
                                                    <h3 class="panel-title">Drives</h3>
                                                </div>
                                                <div class="panel-body fleet-issues">
                                                    <div class="row">
                                                        <div class="col-sm-4 text-center">
                                                            <?php print_r($drive); ?>
                                                            <?php
                                                            $free = $drive[0]['drives']['Size'] / $drive['0']['drives']['Free']; 
                                                            ?>
                                                            <h1 class="success">
                                                               <?php echo $free; ?>
                                                            </h1>
                                                            <span class="caption">Open</span>
                                                        </div>
                                                        <div class="col-sm-4 text-center">
                                                            <h1 class="success">0</h1>
                                                            <span class="caption">Overdue</span>
                                                        </div>
                                                        <div class="col-sm-4 text-center">
                                                            <h1 class="info">3</h1>
                                                            <span class="caption">Resolved</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row" style="padding-left: 15px;">
                                                <!-- Service Reminders -->
                                                <div class="col-md-6">
                                                    <div class="panel panel-square">
                                                        <div class="panel-heading panel-info clearfix">
                                                            <h3 class="panel-title">Performance</h3>
                                                        </div>
                                                        <div class="panel-body fleet-issues">
                                                            <div class="row">
                                                                <div class="col-sm-6 text-center">
                                                                    <h1 class="success">45 %</h1>
                                                                    <span class="caption">Memory<br> Utilization</span>
                                                                </div>
                                                                <div class="col-sm-6 text-center">
                                                                    <h1 class="warning">58 %</h1>
                                                                    <span class="caption">CPU <br>Utilization</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Renewal Reminders -->
                                                <div class="col-md-6">
                                                    <div class="panel panel-square">
                                                        <div class="panel-heading panel-info clearfix">
                                                            <h3 class="panel-title">Overview</h3>
                                                        </div>
                                                        <div class="panel-body fleet-issues">
                                                            <div class="row">
                                                                <div class="col-sm-6 text-center">
                                                                    <h1 class="danger">79 %</h1>
                                                                    <span class="caption">Disk Space Used (C:)</span>
                                                                </div>
                                                                <div class="col-sm-6 text-center">
                                                                    <h1 class="success">92 %</h1>
                                                                    <span class="caption">Health Score</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Tabs -->
                                            <div class="tabs tabs-icons" id="fleet-car-comments-tasks">
                                                <!-- Nav tabs -->
                                                <ul class="nav nav-tabs">
                                                    <li class="active">
                                                        <a href="#comments" data-toggle="tab"><i class="fa fa-comment"></i> Command History</a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#notes" data-toggle="tab"><i class="fa fa-tasks"></i> Scripts History</a>
                                                    </li>
                                                </ul>

                                                <!-- Tab panes -->
                                                <div class="tab-content fleet-comments">
                                                    <div class="tab-pane fade active in" id="comments">

                                                        <div class="panel">
                                                            
                                                        <div class="panel-body">
                                                        <table class="table table-list text-small">
                                                        <tbody style="font-size: 11px;">
                                                            <tr>
                                                                <td class="text-muted text-right col-md-3">kspooner</td>
                                                                <td>Install Webroot</td>
                                                                <td class="text-success">Success!</td>
                                                                <td>12/12/15 8:03 PM </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted text-right col-md-3">kspooner</td>
                                                                <td>Install Webroot</td>
                                                                <td class="text-danger">Failed</td>
                                                                <td>12/12/15 8:03 PM </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted text-right col-md-3">root</td>
                                                                <td>Install Monitor Alpha Bravo Charlie Delta</td>
                                                                <td class="text-success">Success!</td>
                                                                <td>12/12/15 8:03 PM </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted text-right col-md-3">root</td>
                                                                <td>Remove Monitor Alpha Bravo Charlie Delta</td>
                                                                <td class="text-success">Success!</td>
                                                                <td>12/12/15 8:03 PM </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted text-right col-md-3">root</td>
                                                                <td>Install Monitor Alpha Bravo Charlie Delta</td>
                                                                <td class="text-success">Success!</td>
                                                                <td>12/12/15 8:03 PM </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted text-right col-md-3">root</td>
                                                                <td>Remove Monitor Alpha Bravo Charlie Delta</td>
                                                                <td class="text-success">Success!</td>
                                                                <td>12/12/15 8:03 PM </td>
                                                            </tr>
                                                            
                                                            
                                                        </tbody>
                                                        </table>
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                        </div>
                                                        </div>

                                                        

                                                        

                                                    </div>
                                                    <div class="tab-pane fade" id="notes">
                                                        <div class="todo-wrapper">
                                                            <div class="panel">
                                                            
                                                        <div class="panel-body">
                                                        <table class="table table-list text-small">
                                                        <tbody style="font-size: 11px;">
                                                            <tr>
                                                                <td class="text-muted text-right col-md-3">kspooner</td>
                                                                <td>Install Webroot</td>
                                                                <td class="text-success">Success!</td>
                                                                <td>12/12/15 8:03 PM </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted text-right col-md-3">kspooner</td>
                                                                <td>Install Webroot</td>
                                                                <td class="text-danger">Failed</td>
                                                                <td>12/12/15 8:03 PM </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted text-right col-md-3">root</td>
                                                                <td>Install Monitor Alpha Bravo Charlie Delta</td>
                                                                <td class="text-success">Success!</td>
                                                                <td>12/12/15 8:03 PM </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted text-right col-md-3">root</td>
                                                                <td>Remove Monitor Alpha Bravo Charlie Delta</td>
                                                                <td class="text-success">Success!</td>
                                                                <td>12/12/15 8:03 PM </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted text-right col-md-3">root</td>
                                                                <td>Install Monitor Alpha Bravo Charlie Delta</td>
                                                                <td class="text-success">Success!</td>
                                                                <td>12/12/15 8:03 PM </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted text-right col-md-3">root</td>
                                                                <td>Remove Monitor Alpha Bravo Charlie Delta</td>
                                                                <td class="text-success">Success!</td>
                                                                <td>12/12/15 8:03 PM </td>
                                                            </tr>
                                                            
                                                            
                                                        </tbody>
                                                        </table>

                                                        </div>
                                                        </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <!-- Task of car (AngularJS powered) -->
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- //. Content -->














                    </div>



                </div>

            </div>

        </div>

    </div>
</div>
</div>
