<?php

//This is the team render for plugin_lthc_scores_computers

//Lets render?

$client =  $clientScores[0]['plugin_lthc_scores_computers']['Client_Name']; 
$team = $clientScores[0]['plugin_lthc_scores_computers']['Team_Assignment'];
?>

<div class="rightpanel">

    <ul class="breadcrumbs">
        <li><a href="dashboard.html"></a> <span class="separator"></span></li>
        <li>Dashboard ></li>
        <li>Health Check ></li>
        <li><?php echo $team; ?> > </li>
        <li><?php echo $client; ?></li>
    </ul>

    <div class="pageheader">
        <form action="results.html" method="post" class="searchbar">
            <input type="text" name="keyword" placeholder="To search type and hit enter..." />
        </form>
        <div class="pageicon"><span class="iconfa-hospital"></span></div>
        <div class="pagetitle">
            <h5>LabTech Health Check Plugin - Client Listing </h5>  <h5>Team: <?php echo $this->Html->link($clientScores[0]['plugin_lthc_scores_computers']['Team_Assignment'], array('controller' => 'HealthCheck', 'action' => 'team', $clientScores[0]['plugin_lthc_scores_computers']['Team_Assignment'])); ?></h5>
            <h1><?php echo $client; ?></h1>
        </div>
    </div><!--pageheader-->

    <div class="maincontent">
        <div class="maincontentinner">

            <div class="row">
                <div class="col-lg-12">


                    <div class="panel panel-info panel-square panel-no-border text-center">

                        <h4 class="widgettitle">Health Check By Client</h4>
                           
                        <div class="panel-body">
                                                        <div class='col-sm-6'>
                               </div>
                            <div class='col-sm-6'>
                            
                            
                            
                            </div>
                            <table id='teamTable' class='table responsive table-striped table-bordered'>
                                <thead>
                                    <tr>
                                        <th><?php echo $this->Paginator->sort('Computer_Name'); ?></th>
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
                                    <?php foreach ($clientScores as $cscore): ?>
                                        <tr>
                                            <td><?php echo $this->Html->link($cscore['plugin_lthc_scores_computers']['Computer_Name'], array('controller' => 'HealthCheck', 'action' => 'client', $cscore['plugin_lthc_scores_computers']['ClientID'])); ?> </td>
                                            <td><?php echo $cscore['plugin_lthc_scores_computers']['Antivirus']; ?> </td>
                                            <td><?php echo $cscore['plugin_lthc_scores_computers']['Disk']; ?> </td>
                                            <td><?php echo $cscore['plugin_lthc_scores_computers']['Intrusion']; ?> </td>
                                            <td><?php echo $cscore['plugin_lthc_scores_computers']['Usability']; ?></td>
                                            <td><?php echo $cscore['plugin_lthc_scores_computers']['Services']; ?></td>
                                            <td><?php echo $cscore['plugin_lthc_scores_computers']['Updates']; ?></td>
                                            <td><?php echo $cscore['plugin_lthc_scores_computers']['Event_Log']; ?></td>
                                            <td><?php echo $cscore['plugin_lthc_scores_computers']['Avg_Score']; ?></td>

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