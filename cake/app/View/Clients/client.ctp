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
                                        <img width="150" src="http://harvestersolutions.com/wp-content/uploads/2014/11/Clients-icon.png" alt="" class="img-rounded">
                                    </div>
                                    <br>
                                    <!-- Title/Computer Name -->
                                    <h3 class="sidebar-title text-center">Acumen IT</h3>



                                    <ul class="fleet-stats">
                                        <li>
                                            <i class="fa fa-windows text-info" data-toggle="tooltip" data-placement="top" title="Odometer"></i> 
                                            <a href="#" data-toggle="tooltip" data-placement="right" title="Last updated Today at 5 PM">13 Servers</a>
                                        </li>
                                        <li>

                                            <i class="fa fa-desktop text-info" data-toggle="tooltip"  title="Veicle status"></i> 
                                            <a href="#" data-toggle="modal">32 Workstations</a>


                                        </li>
                                        <li>
                                            <i class="fa fa-building text-info" data-toggle="tooltip" data-placement="top" title="Vehicle type"></i> 
                                            <a href="#">3 Locations</a>
                                        <li>
                                            <i class="fa fa-users text-info" data-toggle="tooltip" data-placement="top" title="Location"></i> <a href="3">64 Contacts</a>
                                        </li>
 
                                    </ul>
                                    <br> <br>
                                    <!-- Browse -->
                                    <ul class="nav nav-list nav-fleet">
                                        <li class="nav-header">BROWSE</li>

                                        <li><a href="#"><span class="pull-right label label-default">4</span>Dashboard</a></li>

                                        <li><a href="#"><span class="pull-right label label-default">2</span>Information</a></li>

                                        <li><a href="#"><span class="pull-right label label-default">0</span>Documents</a></li>

                                        <li><a href="#"><span class="pull-right label label-default">1</span>Contacts</a></li>

                                        <li><a href="#"><span class="pull-right label label-default">4</span>Product Keys</a></li>

                                        <li><a href="#"><span class="pull-right label label-default">1</span>Permissions</a></li>

                                        <li><a href="#"><span class="pull-right label label-default">1</span>Status</a></li>

                                        <li><a href="#"><span class="pull-right label label-default">6</span>Computers</a></li>
                                        
                                        <li><a href="#"><span class="pull-right label label-default">6</span>Network Devices</a></li>
                                        
                                        <li><a href="#"><span class="pull-right label label-default">6</span>Standards & Health</a></li>
                                        

                                    </ul>





                                </div>


                            </div>
                        </div>
                        <!--- END SIDEBAR -->


                        <!-- Content -->
                        <div class="col-md-9 fleet-content">
                            <!-- Breadcrumb -->
                            <ol class="breadcrumb">
                                <li><a href="#">AcumenIT</a></li>
                                <li class="active">Dashboard</li>
                            </ol>
                            <!-- Content Panel -->
                            <div class="panel fleet-panel panel-blockquote">
                                <div class="panel-body">
                                    <!-- Fleet title -->
                                    <h1 id="fleet-car-title"><i class="fa fa-gears"></i> Dashboard</h1>
                                    <div class="separator bottom"></div>
                                    <br>

                                    <!-- Details Content -->
                                    <div class="row" style="padding-left: 20px;">
                                        <div class="col-md-6">
                                            <!-- Details -->
                                            <div class="panel panel-blockquote panel-border-success left">
                                                <div class="panel-heading panel-info clearfix">
                                                    <h3 class="panel-title">Details</h3>
                                                    <!-- Panel Menu -->
                                                    
                                                    <!-- Panel Menu -->
                                                </div>
                                                <br>
                                                <div class="panel-body">
                                                    <table class="table table-list text-small">
                                                        <tbody style="font-size: 11px;">
                                                            <tr>
                                                                <td class="text-muted text-right col-md-3">Client Name</td>
                                                                <td><?php echo $client['Client']['Name']; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted text-right">Company</td>
                                                                <td><?php echo $client['Client']['Company']; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted text-right">Main Contact</td>
                                                                <td><?php echo $client['Client']['Firstname']; ?> <?php echo $client['Client']['LastName']; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted text-right">Address</td>
                                                                <td><?php echo $client['Client']['Address1']; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted text-right">Address</td>
                                                                <td><?php echo $client['Client']['Address2']; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted text-right">City / State / Zip</td>
                                                                <td><?php echo $client['Client']['City']; ?>, <?php echo $client['Client']['State']; ?> <?php echo $client['Client']['Zip']; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted text-right">Phone</td>
                                                                <td><?php echo $client['Client']['Phone']; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted text-right">Notes:</td>
                                                                <td><?php echo $client['Client']['Comment']; ?></td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                            <!-- Locations -->
                                            <div class="panel panel-blockquote panel-border-success left">
                                                <div class="panel-heading panel-info clearfix">
                                                    <h3 class="panel-title">Locations</h3>
                                                    <!-- Panel Menu -->
                                                    
                                                    <!-- Panel Menu -->
                                                </div>
                                                <div class="panel-body">
                                                    <table class="table table-list text-small">
                                                        <tbody style="font-size: 11px;">
                                                            <tr>
                                                                <td class="text-muted text-right col-md-3">1</td>
                                                                <td><a href='#'>Main Office</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted text-right">2</td>
                                                                <td><a href='#'>Datacenter</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted text-right">3</td>
                                                                <td><a href='#'>123 st Office</a></td>
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
                                                            <h1 class="success">4</h1>
                                                            <span class="caption">Overdue</span>
                                                        </div>
                                                        <div class="col-sm-4 text-center">
                                                            <h1 class="info">1,952</h1>
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
                                                            <h3 class="panel-title">Performance Health</h3>
                                                        </div>
                                                        <div class="panel-body fleet-issues">
                                                            <div class="row">
                                                                <div class="col-sm-6 text-center">
                                                                    <h1 class="success">45 %</h1>
                                                                    <span class="caption">Disk Health</span>
                                                                </div>
                                                                <div class="col-sm-6 text-center">
                                                                    <h1 class="warning">58 %</h1>
                                                                    <span class="caption">Usability Health</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Renewal Reminders -->
                                                <div class="col-md-6">
                                                    <div class="panel panel-square">
                                                        <div class="panel-heading panel-info clearfix">
                                                            <h3 class="panel-title">Health Overview</h3>
                                                        </div>
                                                        <div class="panel-body fleet-issues">
                                                            <div class="row">
                                                                <div class="col-sm-6 text-center">
                                                                    <h1 class="danger">79 %</h1>
                                                                    <span class="caption">Services Health</span>
                                                                </div>
                                                                <div class="col-sm-6 text-center">
                                                                    <h1 class="success">92 %</h1>
                                                                    <span class="caption">Overall Score</span>
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
                                                        <a href="#comments" data-toggle="tab"><i class="fa fa-clock-o text-info"></i> Timeslips</a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#notes" data-toggle="tab"><i class="fa fa-ticket text-info"></i> Tickets</a>
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
                                                                <td>Script Alpha Two Zero</td>
                                                                <td class="text-success"><a href='#'>0h 4m</a> @ 12/12/15 8:03 PM</td>
                                                                <td>Time has been added to ticket abdias </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted text-right col-md-3">kspooner</td>
                                                                <td>Install Webroot</td>
                                                                <td class="text-success"><a href='#'>0h 4m</a> @ 12/12/15 8:03 PM</td>
                                                                <td>Time has been added to ticket abdias </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted text-right col-md-3">root</td>
                                                                <td>Install Monitor Alpha Bravo Charlie Delta</td>
                                                                <td class="text-success"><a href='#'>0h 4m</a> @ 12/12/15 8:03 PM</td>
                                                                <td>Time has been added to ticket abdias </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted text-right col-md-3">root</td>
                                                                <td>Remove Monitor Alpha Bravo Charlie Delta</td>
                                                               <td class="text-success"><a href='#'>0h 4m</a> @ 12/12/15 8:03 PM</td>
                                                                <td>Time has been added to ticket abdias </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted text-right col-md-3">root</td>
                                                                <td>Install Monitor Alpha Bravo Charlie Delta</td>
                                                                <td class="text-success"><a href='#'>0h 4m</a> @ 12/12/15 8:03 PM</td>
                                                                <td>Time has been added to ticket abdias </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted text-right col-md-3">root</td>
                                                                <td>Remove Monitor Alpha Bravo Charlie Delta</td>
                                                                <td class="text-success"><a href='#'>0h 4m</a> @ 12/12/15 8:03 PM</td>
                                                                <td>Time has been added to ticket abdias </td>
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
