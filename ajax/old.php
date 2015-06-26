
<?php


//////////////////////////////////////////////////
// Code Originally written by Brandon @ marconet
//
// Modified by Kyle Spooner
//
//////////////////////////////////////////////////

//
//
//
//
$version = '1.0';


// Lets put the configuration info here
// Wow its been awhile working in PHP...
//

require('/config/dbconnect.php');




?>

<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="plugins/bootstrap/bootstrap.css" rel="stylesheet">
		<link href="plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet">
		<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
		<link href="plugins/fancybox/jquery.fancybox.css" rel="stylesheet">
		<link href="plugins/fullcalendar/fullcalendar.css" rel="stylesheet">
		<link href="plugins/xcharts/xcharts.min.css" rel="stylesheet">
		<link href="plugins/select2/select2.css" rel="stylesheet">
		<link href="css/theme.css" rel="stylesheet">
</head>
<body>
<?php /* We gonna hide this while we reconstruct the page
  <div id="header">
          <div id="headerlogo">
                <a href="index.php"><img src="marco-logo.png" align=left style="margin-left: 15px" vspace=20></img></a></div>
          <div id="headerbg"></div>
        <h1><b>&nbsp; Managed Services</b></h1>
  </div>
*/ ?>
<!--Start Header-->
<div id="screensaver">
	<canvas id="canvas"></canvas>
	<i class="fa fa-lock" id="screen_unlock"></i>
</div>
<div id="modalbox">
	<div class="template-modal">
		<div class="template-modal-header">
			<div class="modal-header-name">
				<span>Basic table</span>
			</div>
			<div class="box-icons">
				<a class="close-link">
					<i class="fa fa-times"></i>
				</a>
			</div>
		</div>
		<div class="template-modal-inner">
		</div>
		<div class="template-modal-bottom">
		</div>
	</div>
</div>
<div class="left-side">
        <progress value="0"></progress>
		<nav class="left-navbar navbar sidebar" role="navigation">
           <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="index.html"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="charts.html"><i class="fa fa-fw fa-bar-chart-o"></i> Charts</a>
                    </li>
                    <li>
                        <a href="tables.html"><i class="fa fa-fw fa-table"></i> Tables</a>
                    </li>
                    <li>
                        <a href="forms.html"><i class="fa fa-fw fa-edit"></i> Forms</a>
                    </li>
                    <li>
                        <a href="bootstrap-elements.html"><i class="fa fa-fw fa-desktop"></i> Bootstrap Elements</a>
                    </li>
                    <li>
                        <a href="bootstrap-grid.html"><i class="fa fa-fw fa-wrench"></i> Bootstrap Grid</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#main" class="collapsed" aria-expanded="false"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="main" class="collapse" aria-expanded="false" style="height: 0px;">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="stats.php">LabTech Stats</a></li>
                        <li><a href="http://status.marconet.com/" target=_blank>NOC Server Status</a></li>
                        <li><a href="https://ltweb1.marconet.com/" target=_blank>LabTech Web Server</a></li>
                        <li><a href="http://stckbvault01/" target=_blank>LabTech Knowledgebase</a></li>
                        <li><a href="https://connect.marconet.com/" target=_blank>ConnectWise</a></li>
                        <li><a href="https://sp.marconet.com/" target=_blank>Marco SharePoint</a></li>
                        </ul>
                    </li>
					<li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo" class="collapsed" aria-expanded="false"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse" aria-expanded="false" style="height: 0px;">
                        <li><a href=trending.php?trend=Antivirus>Antivirus</a></li>
                        <li><a href=trending.php?trend=Disk>Disk</a></li>
                        <li><a href=trending.php?trend=Intrusion>Intrusion</a></li>
                        <li><a href=trending.php?trend=Usability>Usability</a></li>
                        <li><a href=trending.php?trend=Services>Services</a></li>
                        <li><a href=trending.php?trend=Updates>Updates</a></li>
                        <li><a href="trending.php?trend=Event Log">Events</a></li>
                        <li><a href="trending.php?trend=Avg Score">Overall Score</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Blank Page</a>
                    </li>
                  </ul>
				 
        </nav>

                  <ul>

                        <hr class="hrfull">
                  </ul>
                  </div>
				  <!---
                  </li>
                <li><h3><a href="#">CARE Team</a></h3><hr>
				
                <div>
                  <ul>
                        <li><h3 style="margin-bottom: 0px; margin-top: 10px;">CARE Team</h3></li>
                        <hr class="hrfull">
                                <?php
                                  $sql4 = "SELECT distinct `CARE Team` as netsp FROM hc_scores";
                                  $result4 = mysqli_query($conn,$sql4);
								  if (mysqli_fetch_array($results4) > 0) {
                                while ($row = mysqli_fetch_array($result4)) {echo "<li><a href=\"care_score.php?careteam=".$row["netsp"]."\">".$row["netsp"]." Team</a></li>";}
								}
                                ?>
                        <hr class="hrfull">
                  </ul>
                  </div>
                  </li>
                <li><h3><a href="#">Network Specialist</a></h3>
                <div class="netspec">
                <h3 style="margin-bottom: 0px; margin-top: 10px;">Network Specialist</h3>
                <hr>
                  <ul class="col1">
                          <?php
                                 $sql4 = "SELECT DISTINCT `Client Specialist` AS client_spec FROM v_extradataclients WHERE `client specialist` != '' ORDER BY client_spec asc";
                                 $result4 = mysqli_query($conn,$sql4);
                                while ($row = mysqli_fetch_array($result4)) {echo "<li style=\"width:180px;\"><a href=\"ns_score.php?net_sp=".$row["client_spec"]."\">".$row["client_spec"]."</a></li>";}
                          ?>
                  </ul>
                  <hr style="width:100%;">
                  </div>
                  </li>
                </ul>
			</div>
		</div>
  </div>
  -->

<div class="container">
  <div id="space">
        <div id="section-two">
                <?php
                 // Create connection


                        $sql = "SELECT  `CARE Team`, ROUND(AVG(`Antivirus`),1) AS 'Antivirus', ROUND(AVG(`Disk`),1) AS 'Disk', ROUND(AVG(`Intrusion`),1) AS 'Intrusion', ROUND(AVG(`Usability`),1) AS 'Usability', ROUND(AVG(`Services`),1) AS 'Services', ROUND(AVG(`Updates`),1) AS 'Updates', ROUND(AVG(`Event Log`),1) AS 'Events', ROUND(((ROUND(AVG(`Antivirus`),1)+ROUND(AVG(`Disk`),1)+ROUND(AVG(`Intrusion`),1)+ROUND(AVG(`Usability`),1)+ROUND(AVG(`Services`),1)+ROUND(AVG(`Updates`),1)+ROUND(AVG(`Event Log`),1))/7),1) AS 'Overall Score'
                        FROM hc_scores GROUP BY `CARE Team`";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                        echo "<p><hr width=70%><p><h2><b>NOC Health Scores</b></h2>
                <table class=TBscore>
                  <tr>
                  <th width=180 class=names>CARE Team</th>
                  <th class=stats>Antivirus</th>
                  <th class=stats>Disk</th>
                  <th class=stats>Intrusion</th>
                  <th class=stats>Usability</th>
                  <th class=stats>Services</th>
                  <th class=stats>Updates</th>
                  <th class=stats>Events</th>
                  <th class=stats>Overall Score</th>
                  </tr>";
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                                echo "
                        <tr align=center>
                                <td class=names><a href=care_score.php?careteam=".$row["CARE Team"].">".$row["CARE Team"]."</a></td>
                                <td class=stats>".$row["Antivirus"]."</td>
                                <td class=stats>".$row["Disk"]."</td>
                                <td class=stats>".$row["Intrusion"]."</td>
                                <td class=stats>".$row["Usability"]."</td>
                                <td class=stats>".$row["Services"]."</td>
                                <td class=stats>".$row["Updates"]."</td>
                                <td class=stats>".$row["Events"]."</td>
                                <td class=stats>".$row["Overall Score"]."</td>
                        </tr>";
                        }
                        echo "</table>";
                } else {
                        echo "0 results";
                }

                $sql2 = "SELECT         `CARE Team`,
                        ROUND(AVG(NULLIF(`AV Ex`,0)),1) AS 'Antivirus',
                        ROUND(AVG(NULLIF(`Disk Ex`,0)),1) AS 'Disk',
                        ROUND(AVG(NULLIF(`Intrusion Ex`,0)),1) AS 'Intrusion',
                        ROUND(AVG(NULLIF(`Usability Ex`,0)),1) AS 'Usability',
                        ROUND(AVG(NULLIF(`Services Ex`,0)),1) AS 'Services',
                        ROUND(AVG(NULLIF(`Updates Ex`,0)),1) AS 'Updates',
                        ROUND(AVG(NULLIF(`Event Ex`,0)),1) AS 'Events',
                        ROUND(((ROUND(AVG(NULLIF(`AV Ex`,0)),1)+ROUND(AVG(NULLIF(`Disk Ex`,0)),1)+ROUND(AVG(NULLIF(`Intrusion Ex`,0)),1)+ROUND(AVG(NULLIF(`Usability Ex`,0)),1)+ROUND(AVG(NULLIF(`Services Ex`,0)),1)+ROUND(AVG(NULLIF(`Updates Ex`,0)),1)+ROUND(AVG(NULLIF(`Event Ex`,0)),1))/7),1) AS 'Overall Score'
                FROM hc_scores JOIN v_extradataclients USING (clientid) WHERE v_extradataclients.`Ignore - Non Contractual Services` <> 1  AND clientid NOT IN(SELECT clientid FROM `v_extradataclients` WHERE `v_extradataclients`.`Go Live Date` < DATE_ADD(NOW(), INTERVAL -1 MONTH) AND `v_extradataclients`.`Go Live Date` > 0) GROUP BY `CARE Team`";
                $result2 = $conn->query($sql2);

                if ($result2->num_rows > 0) {
                        echo "<p><br><hr width=70%><p><br><h2><b><a href=exclusions.php>NOC Health Scores - Client Exclusions Enabled</a></b></h2>
                <table class=TBscore>
                 <tr>
                  <th width=180 class=names>CARE Team</th>
                  <th class=stats>Antivirus</th>
                  <th class=stats>Disk</th>
                  <th class=stats>Intrusion</th>
                  <th class=stats>Usability</th>
                  <th class=stats>Services</th>
                  <th class=stats>Updates</th>
                  <th class=stats>Events</th>
                  <th class=stats>Overall Score</th>
                 </tr>";
                        // output data of each row
                        while($row = $result2->fetch_assoc()) {
                                echo "
                        <tr align=center>
                         <td class=names><a href=care_score.php?careteam=".$row["CARE Team"]."&exclusions=true>".$row["CARE Team"]."</a></td>
                         <td class=stats>".$row["Antivirus"]."</td>
                         <td class=stats>".$row["Disk"]."</td>
                         <td class=stats>".$row["Intrusion"]."</td>
                         <td class=stats>".$row["Usability"]."</td>
                         <td class=stats>".$row["Services"]."</td>
                         <td class=stats>".$row["Updates"]."</td>
                         <td class=stats>".$row["Events"]."</td>
                         <td class=stats>".$row["Overall Score"]."</td>
                        </tr>";
                        }
                        echo "</table>";
                } else {
                        echo "0 results";
                }
                $sql3 = "SELECT `Network Specialist`,
                        ROUND(AVG(NULLIF(`AV Ex`,0)),1) AS 'Antivirus',
                        ROUND(AVG(NULLIF(`Disk Ex`,0)),1) AS 'Disk',
                        ROUND(AVG(NULLIF(`Intrusion Ex`,0)),1) AS 'Intrusion',
                        ROUND(AVG(NULLIF(`Usability Ex`,0)),1) AS 'Usability',
                        ROUND(AVG(NULLIF(`Services Ex`,0)),1) AS 'Services',
                        ROUND(AVG(NULLIF(`Updates Ex`,0)),1) AS 'Updates',
                        ROUND(AVG(NULLIF(`Event Ex`,0)),1) AS 'Events',
                        ROUND(((ROUND(AVG(NULLIF(`AV Ex`,0)),1)+ROUND(AVG(NULLIF(`Disk Ex`,0)),1)+ROUND(AVG(NULLIF(`Intrusion Ex`,0)),1)+ROUND(AVG(NULLIF(`Usability Ex`,0)),1)+ROUND(AVG(NULLIF(`Services Ex`,0)),1)+ROUND(AVG(NULLIF(`Updates Ex`,0)),1)+ROUND(AVG(NULLIF(`Event Ex`,0)),1))/7),1) AS 'Overall Score'
                FROM hc_scores JOIN v_extradataclients USING (clientid) WHERE `Network Specialist` != 'None' GROUP BY `Network Specialist`";
                $result3 = $conn->query($sql3);

                if ($result3->num_rows > 0) {
                        echo "<p><br><h2><hr width=70%><p><br><b>Network Specialist Summary - Exclusions Enabled</b></h2>
                        <table class=TBscore>
                         <tr>
                          <th width=180 class=names>Network Specialist</th>
                          <th class=stats>Antivirus</th>
                          <th class=stats>Disk</th>
                          <th class=stats>Intrusion</th>
                          <th class=stats>Usability</th>
                          <th class=stats>Services</th>
                          <th class=stats>Updates</th>
                          <th class=stats>Events</th>
                          <th class=stats>Overall Score</th>
                         </tr>";
                        // output data of each row
                        while($row = $result3->fetch_assoc()) {
                                echo "
                        <tr align=center>
                          <td class=names><a href=\"ns_score.php?net_sp=".$row["Network Specialist"]."\">".$row["Network Specialist"]."</a></td>
                          <td class=stats>".$row["Antivirus"]."</td>
                          <td class=stats>".$row["Disk"]."</td>
                          <td class=stats>".$row["Intrusion"]."</td>
                          <td class=stats>".$row["Usability"]."</td>
                          <td class=stats>".$row["Services"]."</td>
                          <td class=stats>".$row["Updates"]."</td>
                          <td class=stats>".$row["Events"]."</td>
                          <td class=stats>".$row["Overall Score"]."</td>
                        </tr>";
                        }
                        echo "</table>";
                } else {
                        echo "0 results";
                }
                $conn->close();
                ?>
        </div>
  </div>
</div>
        <div id="footer">
                <p>Copyright &copy; 2015 <a href="http://www.marconet.com/">marconet.com</a></p>
        </div>

        <script src="js/jquery.js"></script>
		<link href="js/bootstrap.js" rel="javascript" />
		
<script src="progress_bar.js"></script>
</body>
</html>
