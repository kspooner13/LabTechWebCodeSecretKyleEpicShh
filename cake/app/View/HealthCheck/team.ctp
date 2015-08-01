<?php

//This is the team render for HealthCheck

//Lets render?

$teamGroup =  $teamScores[0]['HealthCheck']['Team Assignment']; 
?>

<div class="rightpanel">

    <ul class="breadcrumbs">
        <li><a href="dashboard.html"></a> <span class="separator"></span></li>
        <li>Dashboard ></li>
        <li>Health Check ></li>
        <li><?php echo $teamScores[0]['HealthCheck']['Team Assignment']; ?></li>
    </ul>

    <div class="pageheader">
        <form action="results.html" method="post" class="searchbar">
            <input type="text" name="keyword" placeholder="To search type and hit enter..." />
        </form>
        <div class="pageicon"><span class="iconfa-hospital"></span></div>
        <div class="pagetitle">
            <h5>LabTech Health Check Plugin - Team Listing</h5>
            <h1><?php echo $teamGroup; ?></h1>
        </div>
    </div><!--pageheader-->

    <div class="maincontent">
        <div class="maincontentinner">

            <div class="row">
                <div class="col-lg-12">


                    <div class="panel panel-info panel-square panel-no-border text-center">

                        <h4 class="widgettitle">Health Check By Team</h4>
                           
                        <div class="panel-body">
                                                        <div class='col-sm-6'>
                               </div>
                            <div class='col-sm-6'>
                            
                            
                            
                            </div>
                            <table class='table responsive table-striped table-bordered'>
                                <thead>
                                    <tr>
                                        <th><?php echo $this->Paginator->sort('`Client Name`'); ?></th>
                                        <th>Anti-Virus</th>
                                        <th>Disk</th>
                                        <th>Intrusion</th>
                                        <th>Usability</th>
                                        <th>Services</th>
                                        <th>Updates</th>
                                        <th>Event Log</th>
                                        <th>Average Score</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($teamScores as $cscore): ?>
                                        <tr>
                                            <td><?php echo $this->Html->link($cscore['HealthCheck']['Client Name'], array('controller' => 'HealthCheck', 'action' => 'client', $cscore['HealthCheck']['ClientID'])); ?> </td>
                                            <td><?php echo $cscore['HealthCheck']['Antivirus']; ?> </td>
                                            <td><?php echo $cscore['HealthCheck']['Disk']; ?> </td>
                                            <td><?php echo $cscore['HealthCheck']['Intrusion']; ?> </td>
                                            <td><?php echo $cscore['HealthCheck']['Usability']; ?></td>
                                            <td><?php echo $cscore['HealthCheck']['Services']; ?></td>
                                            <td><?php echo $cscore['HealthCheck']['Updates']; ?></td>
                                            <td><?php echo $cscore['HealthCheck']['Event Log']; ?></td>
                                            <td><?php echo $cscore['HealthCheck']['Avg Score']; ?></td>

                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                                
                            </table><br>
                            <div class='col-sm-6'>
                          </div>
                            <div class='col-sm-6'>
                           
                            
                            
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

</div>