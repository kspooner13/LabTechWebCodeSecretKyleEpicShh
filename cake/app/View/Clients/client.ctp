<?php
//CLIENT PAGE FANCY LIKE
?>

<div class="rightpanel">

    <ul class="breadcrumbs">
        <li><a href="dashboard.html"></a> <span class="separator"></span></li>
        <li>Dashboard ></li>
        <li>Clients</li>
    </ul>

    <div class="pageheader">
        <form action="results.html" method="post" class="searchbar">
            <input type="text" name="keyword" placeholder="To search type and hit enter..." />
        </form>
        <div class="pageicon"><span class="fa fa-university"></span></div>
        <div class="pagetitle">
            <h5>LabTech</h5>
            <h1><?php echo $client['Client']['Name']; ?></h1>
        </div>
    </div><!--pageheader-->
    <?php

    //define some variables
    $dng = "box-danger";
    $war = "box-warning";
    $suc = "box-success";

    $score = $clientScores[0][0]['score'];
    $av = $clientScores[0][0]['AV'];
    $int = $clientScores[0][0]['INT'];





    ?>
    <div class="maincontent">
        <div class="maincontentinner">
            <div class="row-fluid">
                <div class="page-content">
                    <div class="container-fluid">

                        <?php ?>
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
                        <?php  ?>
                        <div class="row">
                            <?php print_r($client); ?>
                        </div>



                    </div>

                </div>


            </div>
        </div>
    </div>
</div>
