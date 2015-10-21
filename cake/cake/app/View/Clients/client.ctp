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

                                <div class="widgetbox <?php
                                if ($clientScores[0][0]['score'] > '80') {
                                    echo $suc;
                                } elseif ($clientScores[0][0]['score'] > '60' && $clientScores[0][0]['score'] < '80') {
                                    echo $war;
                                } else {
                                    echo $dng;
                                }
                                ?>">
                                    <h4 class="widgettitle">Overall Health</h4>
                                    <div class="widgetcontent"><h2><span class='fa fa-ambulance'></span>  <?php echo $clientScores[0][0]['score']; ?> %</h2></div>

                                </div>
                                <div class="widgetbox <?php
                                if ($clientScores[0][0]['Disk'] > '80') {
                                    echo $suc;
                                } elseif ($clientScores[0][0]['Disk'] > '60' && $clientScores[0][0]['Disk'] < '80') {
                                    echo $war;
                                } else {
                                    echo $dng;
                                }
                                ?>">
                                    <h4 class="widgettitle">Disk Health</h4>
                                    <div class="widgetcontent"><h2><span class='fa fa-ambulance'></span>  <?php echo $clientScores[0][0]['Disk']; ?> %</h2></div>

                                </div>
                                
                                
                            </div>
                            
                            <div class="col-lg-3">
                                <div class="widgetbox">
                                    <h4 class="widgettitle">trending data title</h4>
                                    <div class="widgetcontent"><img src='http://www.psdgraphics.com/file/3d_pie_chart.jpg' height='200px'/> </div>

                                </div>
                            </div>
                            <div class="col-lg-3">

                                <div class="widgetbox">
                                    <h4 class="widgettitle">trending data title</h4>
                                    <div class="widgetcontent"><img src='http://www.psdgraphics.com/file/3d_pie_chart.jpg' height='200px'/> </div>

                                </div>
                            </div>
                                                        <div class="col-lg-3">

                                <div class="widgetbox">
                                    <h4 class="widgettitle">trending data title</h4>
                                    <div class="widgetcontent"><img src='http://www.psdgraphics.com/file/3d_pie_chart.jpg' height='200px'/> </div>

                                </div>
                            </div>
                        </div>
                        

                       
                        <?php ?>
                        <div class="row" style="padding-left: 15px; padding-right: 15px;">

                            <div class="col-sm-2">

                                <button class="btn" style='width: 160px;'>Create a Ticket</button><br><br>
                               <button class="btn" style='width: 160px;'>View Detailed Reports</button>
                               
                            </div>

                            <div class="tabs-right col-lg-10">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#rA">Open Tickets</a></li>
                                    <li><a data-toggle="tab" href="#rB">Computers</a></li>
                                    <li><a data-toggle="tab" href="#rC">Contacts</a></li>
                                    <li><a data-toggle="tab" href="#rC">Contacts</a></li>
                                    <li><a data-toggle="tab" href="#rC">Passwords</a></li> 
                                    <li><a data-toggle="tab" href="#rC">Product Keys</a></li>
                                   
                                </ul>
                                <div class="tab-content">
                                    <div id="rA" class="tab-pane active">
                                        <p>I hold tickets! Wooo!</p>
                                    </div>
                                    <div id="rB" class="tab-pane">
                                        <p>Howdy, I'm in Section B.</p>
                                    </div>
                                    <div id="rC" class="tab-pane">
                                        <p>What up girl, this is Section C.</p>
                                    </div>
                                </div><!--tab-content-->
                            </div><!--tabbable tabs-right-->


                        </div>

                    </div>



                </div>

            </div>


        </div>
    </div>
</div>
</div>
