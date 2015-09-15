<?php

//This is the team render for plugin_lthc_scores_computers

//Lets render?

$client =  $computerScores[0]['plugin_lthc_scores_computers']['Client_Name'];
$team = $computerScores[0]['plugin_lthc_scores_computers']['Team_Assignment'];
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
            <h5>LabTech Health Check Plugin - Client Listing </h5>  <h5>Team: <?php echo $this->Html->link($computerScores[0]['plugin_lthc_scores_computers']['Team_Assignment'], array('controller' => 'HealthCheck', 'action' => 'team', $computerScores[0]['plugin_lthc_scores_computers']['Team_Assignment'])); ?></h5>
            <h1><?php echo $client; ?></h1>
        </div>
    </div><!--pageheader-->

    <div class="maincontent">
        <div class="maincontentinner">

<!-- Insert Tiles Here -->

              <?php

              //define some variables
              $dng = "box-danger";
              $war = "box-warning";
              $suc = "box-success";

              $score = $clientScores[0][0]['score'];
              $av = $clientScores[0][0]['AV'];
              $int = $clientScores[0][0]['INT'];
              ?>

            <div class='row'>

                <div class="col-lg-3">

                    <div class="widgetbox <?php if ($clientScores[0][0]['score'] > '80') { echo $suc; } elseif ($clientScores[0][0]['score'] > '60' && $clientScores[0][0]['score'] < '80') { echo $war; } else { echo $dng; } ?>">
                        <h4 class="widgettitle">Overall Health</h4>
                        <div class="widgetcontent"><h2><span class='fa fa-ambulance'></span>  <?php echo $clientScores[0][0]['score'];?> %</h2></div>

                    </div>
                </div>
                <div class="col-lg-3">

                    <div class="widgetbox <?php if ($clientScores[0][0]['Disk'] > '80') { echo $suc; } elseif ($clientScores[0][0]['Disk'] > '60' && $clientScores[0][0]['Disk'] < '80') { echo $war; } else { echo $dng; } ?>">
                        <h4 class="widgettitle">Disk Health</h4>
                        <div class="widgetcontent"><h2><span class='fa fa-ambulance'></span>  <?php echo $clientScores[0][0]['Disk'];?> %</h2></div>

                    </div>
                </div>
                <div class="col-lg-3">

                    <div class="widgetbox <?php if ($clientScores[0][0]['Services'] > '80') { echo $suc; } elseif ($clientScores[0][0]['Services'] > '60' && $clientScores[0][0]['Services'] < '80') { echo $war; } else { echo $dng; } ?>">
                        <h4 class="widgettitle">Services Health</h4>
                        <div class="widgetcontent"><h2><span class='fa fa-ambulance'></span>  <?php echo $clientScores[0][0]['Services'];?> %</h2></div>

                    </div>
                </div>
                <div class="col-lg-3">

                    <div class="widgetbox <?php if ($clientScores[0][0]['Updates'] > '80') { echo $suc; } elseif ($clientScores[0][0]['Updates'] > '60' && $clientScores[0][0]['Updates'] < '80') { echo $war; } else { echo $dng; } ?>">
                        <h4 class="widgettitle">Patch Health</h4>
                        <div class="widgetcontent"><h2><span class='fa fa-ambulance'></span>  <?php echo $clientScores[0][0]['Updates'];?> %</h2></div>

                    </div>
                </div>
              </div>
              <div class='row'>
                <div class="col-lg-3">

                    <div class="widgetbox <?php if ($clientScores[0][0]['Usability'] > '80') { echo $suc; } elseif ($clientScores[0][0]['Usability'] > '60' && $clientScores[0][0]['Usability'] < '80') { echo $war; } else { echo $dng; } ?>">
                        <h4 class="widgettitle">Usability Health</h4>
                        <div class="widgetcontent"><h2><span class='fa fa-ambulance'></span>  <?php echo $clientScores[0][0]['Usability'];?> %</h2></div>

                    </div>
                </div>

                <div class="col-lg-3">

                    <div class="widgetbox <?php if ($clientScores[0][0]['INT'] > '80') { echo $suc; } elseif ($clientScores[0][0]['INT'] > '60' && $clientScores[0][0]['INT'] < '80') { echo $war; } else { echo $dng; } ?>">
                        <h4 class="widgettitle">Intrusion Health</h4>
                        <div class="widgetcontent"><h2><span class='fa fa-ambulance'></span>  <?php echo $clientScores[0][0]['INT'];?> %</h2></div>

                    </div>
                </div>

                <div class="col-lg-3">

                    <div class="widgetbox <?php if ($clientScores[0][0]['AV'] > '80') { echo $suc; } elseif ($clientScores[0][0]['AV'] > '60' && $clientScores[0][0]['AV'] < '80') { echo $war; } else { echo $dng; } ?>">
                        <h4 class="widgettitle">Antivirus Health</h4>
                        <div class="widgetcontent"><h2><span class='fa fa-ambulance'></span>  <?php echo $clientScores[0][0]['AV'];?> %</h2></div>

                    </div>
                </div>

                <div class="col-lg-3">

                    <div class="widgetbox <?php if ($clientScores[0][0]['EL'] > '80') { echo $suc; } elseif ($clientScores[0][0]['EL'] > '60' && $clientScores[0][0]['EL'] < '80') { echo $war; } else { echo $dng; } ?>">
                        <h4 class="widgettitle">Event Log Health</h4>
                        <div class="widgetcontent"><h2><span class='fa fa-ambulance'></span>  <?php echo $clientScores[0][0]['EL'];?> %</h2></div>

                    </div>
                </div>

            </div>
<!-- end add -->
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
                                    <?php foreach ($computerScores as $cscore): ?>
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
