<?php
include('../config/dbconnect.php');
include('../config/sql.php');
?>

<!DOCTYPE html>
<html>
<head><title>Marco Managed Health Scores | CARE Team</title>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>
<body>
<progress value="0"></progress>
  <div id="nav2">
	<ul class="js-css-menu shadow responsive vertical">
		<li><h3><a href="../index.php">Main</a></h3><hr>
		 <div>
		  <ul>
			<li><h3 style="margin-bottom: 0px; margin-top: 10px;">Main</h3></li>
			<hr class="hrfull">
			<li><a href="../index.php">Home</a></li>
			<li><a href="../php/stats.php">LabTech Stats</a></li>
			<li><a href="http://status.marconet.com/" target=_blank>NOC Server Status</a></li>
			<li><a href="https://ltweb1.marconet.com/" target=_blank>LabTech Web Server</a></li>
			<li><a href="http://stckbvault01/" target=_blank>LabTech Knowledgebase</a></li>
			<li><a href="https://connect.marconet.com/" target=_blank>ConnectWise</a></li>
			<li><a href="https://sp.marconet.com/" target=_blank>Marco SharePoint</a></li>
			<hr class="hrfull">
		  </ul>	
		  </div>
		  </li>
		<li><h3><a href="#">Trending</a></h3><hr>
		<div>
		  <ul>
			<li><h3 style="margin-bottom: 0px; margin-top: 10px;">Trending</h3></li>
			<hr class="hrfull">
			<li><a href=../php/trending.php?trend=Antivirus>Antivirus</a></li> 
			<li><a href=../php/trending.php?trend=Disk>Disk</a></li> 
			<li><a href=../php/trending.php?trend=Intrusion>Intrusion</a></li> 
			<li><a href=../php/trending.php?trend=Usability>Usability</a></li> 
			<li><a href=../php/trending.php?trend=Services>Services</a></li> 
			<li><a href=../php/trending.php?trend=Updates>Updates</a></li> 
			<li><a href="../php/trending.php?trend=Event Log">Events</a></li> 
			<li><a href="../php/trending.php?trend=Avg Score">Overall Score</a></li>
			<hr class="hrfull">
		  </ul>
		  </div>
		  </li>
		<li><h3><a href="#">CARE Team</a></h3><hr>
		<div>
		  <ul>
			<li><h3 style="margin-bottom: 0px; margin-top: 10px;">CARE Team</h3></li>
			<hr class="hrfull">
				<?php
					$result4 = mysqli_query($conn,$list_team);
					while ($row = mysqli_fetch_array($result4)) {echo "<li><a href=\"../php/care_score.php?careteam=".$row["netsp"]."\">".$row["netsp"]." Team</a></li>";}
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
				$result4 = mysqli_query($conn,$list_spec);
				while ($row = mysqli_fetch_array($result4)) {echo "<li style=\"width:180px;\"><a href=\"../php/ns_score.php?net_sp=".$row["netsp"]."\">".$row["netsp"]."</a></li>";}
			?>
		  </ul>
		  <hr style="width:100%;">
		  </div>
		  </li>
		</ul>
	<h4 style='color:#ccc'>
		<img src='../images/warning-shield-16.png'>&nbsp;&nbsp;Score Warning<br>
		<img src='../images/red-warning-shield-16.png'>&nbsp;&nbsp;Score Critical
	</h4>
  </div>
<div id="header">
  <div id="headerlogo">
  	<a href="../index.php"><img src="../images/marco-logo.png" align=left style="margin-left: 15px" vspace=20></img></a></div>
  <div id="headerbg"></div>
<h1><b>&nbsp; Managed Services</b></h1>
</div>
<div id="space">
	<div id="section-two">

<?php
 $careteam = $_GET["careteam"];
 $exclusions = $_GET["exclusions"];
 $field="`Client Name`";
 $sort="ASC";
	if(isset($_GET["sorting"]))
	{
	  if($_GET["sorting"]=="ASC")
	  {
	  $sort="DESC";
	  }
	  else
	  {
		$sort="ASC";
	  }
	}
	if($_GET["field"]=="Client Name")
	{
	   $field = "`Client Name`"; 
	}
	elseif($_GET["field"]=="Antivirus")
	{
	   $field = "Antivirus";
	}
	elseif($_GET["field"]=="Disk")
	{
	   $field="Disk";
	}
	elseif($_GET["field"]=="Intrusion")
	{
	   $field="Intrusion";
	}
	elseif($_GET["field"]=="Usability")
	{
	   $field="Usability";
	}
	elseif($_GET["field"]=="Services")
	{
	   $field="Services";
	}
	elseif($_GET["field"]=="Updates")
	{
	   $field="Updates";
	}
	elseif($_GET["field"]=="Events")
	{
	   $field="Events";
	}
	elseif($_GET["field"]=="Overall Score")
	{
	   $field="`Overall Score`";
	}

	if ($exclusions == "true") {
	  $exclusions_text = " | Client Exclusions Enabled";
	} else {
	  $exclusions_text = "";
	}

if ($exclusions == "true") {
	$sql = "SELECT 	`Client Name`,
		IF((ROUND(AVG(`AV Ex`),1) < 75), CONCAT('<img src=../images/red-warning-shield-16.png> <font color=red>',ROUND(AVG(`AV Ex`),1),'</font>'),IF((ROUND(AVG(`AV Ex`),1) < 90), CONCAT('<img src=../images/warning-shield-16.png> <font color=black>',ROUND(AVG(`AV Ex`),1),'</font>'),ROUND(AVG(`AV Ex`),1))) AS 'Antivirus',
        	IF((ROUND(AVG(`Disk Ex`),1) < 75), CONCAT('<img src=../images/red-warning-shield-16.png> <font color=red>',ROUND(AVG(`Disk Ex`),1),'</font>'),IF((ROUND(AVG(`Disk Ex`),1) < 90), CONCAT('<img src=../images/warning-shield-16.png> <font color=black>',ROUND(AVG(`Disk Ex`),1),'</font>'),ROUND(AVG(`Disk Ex`),1))) AS 'Disk',
        	IF((ROUND(AVG(`Intrusion Ex`),1) < 75), CONCAT('<img src=../images/red-warning-shield-16.png> <font color=red>',ROUND(AVG(`Intrusion Ex`),1),'</font>'),IF((ROUND(AVG(`Intrusion Ex`),1) < 90), CONCAT('<img src=../images/warning-shield-16.png> <font color=black>',ROUND(AVG(`Intrusion Ex`),1),'</font>'),ROUND(AVG(`Intrusion Ex`),1))) AS 'Intrusion',
        	IF((ROUND(AVG(`Usability Ex`),1) < 75), CONCAT('<img src=../images/red-warning-shield-16.png> <font color=red>',ROUND(AVG(`Usability Ex`),1),'</font>'),IF((ROUND(AVG(`Usability Ex`),1) < 90), CONCAT('<img src=../images/warning-shield-16.png> <font color=black>',ROUND(AVG(`Usability Ex`),1),'</font>'),ROUND(AVG(`Usability Ex`),1))) AS 'Usability',
        	IF((ROUND(AVG(`Services Ex`),1) < 75), CONCAT('<img src=../images/red-warning-shield-16.png> <font color=red>',ROUND(AVG(`Services Ex`),1),'</font>'),IF((ROUND(AVG(`Services Ex`),1) < 90), CONCAT('<img src=../images/warning-shield-16.png> <font color=black>',ROUND(AVG(`Services Ex`),1),'</font>'),ROUND(AVG(`Services Ex`),1))) AS 'Services',
        	IF((ROUND(AVG(`Updates Ex`),1) < 75), CONCAT('<img src=../images/red-warning-shield-16.png> <font color=red>',ROUND(AVG(`Updates Ex`),1),'</font>'),IF((ROUND(AVG(`Updates Ex`),1) < 90), CONCAT('<img src=../images/warning-shield-16.png> <font color=black>',ROUND(AVG(`Updates Ex`),1),'</font>'),ROUND(AVG(`Updates Ex`),1))) AS 'Updates',
        	IF((ROUND(AVG(`Event Ex`),1) < 75), CONCAT('<img src=../images/red-warning-shield-16.png> <font color=red>',ROUND(AVG(`Event Ex`),1),'</font>'),IF((ROUND(AVG(`Event Ex`),1) < 90), CONCAT('<img src=../images/warning-shield-16.png> <font color=black>',ROUND(AVG(`Event Ex`),1),'</font>'),ROUND(AVG(`Event Ex`),1))) AS 'Events',
		IF((ROUND(((ROUND(AVG(`AV Ex`),1)+ROUND(AVG(`Disk Ex`),1)+ROUND(AVG(`Intrusion Ex`),1)+ROUND(AVG(`Usability Ex`),1)+ROUND(AVG(`Services Ex`),1)+ROUND(AVG(`Updates Ex`),1)+ROUND(AVG(`Event Ex`),1))/7),1) < 75), CONCAT('<img src=../images/red-warning-shield-16.png> <font color=red>',ROUND(((ROUND(AVG(`AV Ex`),1)+ROUND(AVG(`Disk Ex`),1)+ROUND(AVG(`Intrusion Ex`),1)+ROUND(AVG(`Usability Ex`),1)+ROUND(AVG(`Services Ex`),1)+ROUND(AVG(`Updates Ex`),1)+ROUND(AVG(`Event Ex`),1))/7),1),'</font>'),IF((ROUND(((ROUND(AVG(`AV Ex`),1)+ROUND(AVG(`Disk Ex`),1)+ROUND(AVG(`Intrusion Ex`),1)+ROUND(AVG(`Usability Ex`),1)+ROUND(AVG(`Services Ex`),1)+ROUND(AVG(`Updates Ex`),1)+ROUND(AVG(`Event Ex`),1))/7),1) < 90), CONCAT('<img src=../images/warning-shield-16.png> <font color=black>',ROUND(((ROUND(AVG(`AV Ex`),1)+ROUND(AVG(`Disk Ex`),1)+ROUND(AVG(`Intrusion Ex`),1)+ROUND(AVG(`Usability Ex`),1)+ROUND(AVG(`Services Ex`),1)+ROUND(AVG(`Updates Ex`),1)+ROUND(AVG(`Event Ex`),1))/7),1),'</font>'),ROUND(((ROUND(AVG(`AV Ex`),1)+ROUND(AVG(`Disk Ex`),1)+ROUND(AVG(`Intrusion Ex`),1)+ROUND(AVG(`Usability Ex`),1)+ROUND(AVG(`Services Ex`),1)+ROUND(AVG(`Updates Ex`),1)+ROUND(AVG(`Event Ex`),1))/7),1))) AS 'Overall Score'
		FROM hc_scores JOIN v_extradataclients USING (clientid) WHERE v_extradataclients.`Exclude Reporting` <> 1 AND hc_scores.clientid NOT IN(SELECT clientid FROM `v_extradataclients` WHERE `v_extradataclients`.`Go Live Date` < DATE_ADD(NOW(), INTERVAL -1 MONTH) AND `v_extradataclients`.`Go Live Date` > 0) AND hc_scores.`Team Assignment` = '{$careteam}' GROUP BY `Client Name` ORDER BY {$field} {$sort}";
	} else {
	$sql = "SELECT 	`Client Name`, 
		IF((ROUND(AVG(`Antivirus`),1) < 75), CONCAT('<img src=../images/red-warning-shield-16.png> <font color=red>',ROUND(AVG(`Antivirus`),1),'</font>'),IF((ROUND(AVG(`Antivirus`),1) < 90), CONCAT('<img src=../images/warning-shield-16.png> <font color=black>',ROUND(AVG(`Antivirus`),1),'</font>'),ROUND(AVG(`Antivirus`),1))) AS 'Antivirus',
        	IF((ROUND(AVG(`Disk`),1) < 75), CONCAT('<img src=../images/red-warning-shield-16.png> <font color=red>',ROUND(AVG(`Disk`),1),'</font>'),IF((ROUND(AVG(`Disk`),1) < 90), CONCAT('<img src=../images/warning-shield-16.png> <font color=black>',ROUND(AVG(`Disk`),1),'</font>'),ROUND(AVG(`Disk`),1))) AS 'Disk',
        	IF((ROUND(AVG(`Intrusion`),1) < 75), CONCAT('<img src=../images/red-warning-shield-16.png> <font color=red>',ROUND(AVG(`Intrusion`),1),'</font>'),IF((ROUND(AVG(`Intrusion`),1) < 90), CONCAT('<img src=../images/warning-shield-16.png> <font color=black>',ROUND(AVG(`Intrusion`),1),'</font>'),ROUND(AVG(`Intrusion`),1))) AS 'Intrusion',
        	IF((ROUND(AVG(`Usability`),1) < 75), CONCAT('<img src=../images/red-warning-shield-16.png> <font color=red>',ROUND(AVG(`Usability`),1),'</font>'),IF((ROUND(AVG(`Usability`),1) < 90), CONCAT('<img src=../images/warning-shield-16.png> <font color=black>',ROUND(AVG(`Usability`),1),'</font>'),ROUND(AVG(`Usability`),1))) AS 'Usability',
        	IF((ROUND(AVG(`Services`),1) < 75), CONCAT('<img src=../images/red-warning-shield-16.png> <font color=red>',ROUND(AVG(`Services`),1),'</font>'),IF((ROUND(AVG(`Services`),1) < 90), CONCAT('<img src=../images/warning-shield-16.png> <font color=black>',ROUND(AVG(`Services`),1),'</font>'),ROUND(AVG(`Services`),1))) AS 'Services',
        	IF((ROUND(AVG(`Updates`),1) < 75), CONCAT('<img src=../images/red-warning-shield-16.png> <font color=red>',ROUND(AVG(`Updates`),1),'</font>'),IF((ROUND(AVG(`Updates`),1) < 90), CONCAT('<img src=../images/warning-shield-16.png> <font color=black>',ROUND(AVG(`Updates`),1),'</font>'),ROUND(AVG(`Updates`),1))) AS 'Updates',
        	IF((ROUND(AVG(`Event Log`),1) < 75), CONCAT('<img src=../images/red-warning-shield-16.png> <font color=red>',ROUND(AVG(`Event Log`),1),'</font>'),IF((ROUND(AVG(`Event Log`),1) < 90), CONCAT('<img src=../images/warning-shield-16.png> <font color=black>',ROUND(AVG(`Event Log`),1),'</font>'),ROUND(AVG(`Event Log`),1))) AS 'Events',
		IF((ROUND(((ROUND(AVG(`Antivirus`),1)+ROUND(AVG(`Disk`),1)+ROUND(AVG(`Intrusion`),1)+ROUND(AVG(`Usability`),1)+ROUND(AVG(`Services`),1)+ROUND(AVG(`Updates`),1)+ROUND(AVG(`Event Log`),1))/7),1) < 75), CONCAT('<img src=../images/red-warning-shield-16.png> <font color=red>',ROUND(((ROUND(AVG(`Antivirus`),1)+ROUND(AVG(`Disk`),1)+ROUND(AVG(`Intrusion`),1)+ROUND(AVG(`Usability`),1)+ROUND(AVG(`Services`),1)+ROUND(AVG(`Updates`),1)+ROUND(AVG(`Event Log`),1))/7),1),'</font>'),IF((ROUND(((ROUND(AVG(`Antivirus`),1)+ROUND(AVG(`Disk`),1)+ROUND(AVG(`Intrusion`),1)+ROUND(AVG(`Usability`),1)+ROUND(AVG(`Services`),1)+ROUND(AVG(`Updates`),1)+ROUND(AVG(`Event Log`),1))/7),1) < 90), CONCAT('<img src=../images/warning-shield-16.png> <font color=black>',ROUND(((ROUND(AVG(`Antivirus`),1)+ROUND(AVG(`Disk`),1)+ROUND(AVG(`Intrusion`),1)+ROUND(AVG(`Usability`),1)+ROUND(AVG(`Services`),1)+ROUND(AVG(`Updates`),1)+ROUND(AVG(`Event Log`),1))/7),1),'</font>'),ROUND(((ROUND(AVG(`Antivirus`),1)+ROUND(AVG(`Disk`),1)+ROUND(AVG(`Intrusion`),1)+ROUND(AVG(`Usability`),1)+ROUND(AVG(`Services`),1)+ROUND(AVG(`Updates`),1)+ROUND(AVG(`Event Log`),1))/7),1))) AS 'Overall Score'
		FROM hc_scores WHERE hc_scores.`Team Assignment` = '{$careteam}' GROUP BY `Client Name` ORDER BY {$field} {$sort}";
	}
	$result = mysqli_query($conn,$sql);

if ($exclusions == "true") {
    echo "<p><hr align=center width=75%><p><h2><b>{$careteam} Team Health Scores{$exclusions_text}</b></h2>
	<table class=TBscore>
	  <tr>
	    <th class=names width=300><a href=\"../php/care_score.php?careteam={$careteam}&exclusions=true&sorting=".$sort."&field=Client Name\">Client Name</a></th>
		<th class=stats><a href=\"../php/care_score.php?careteam={$careteam}&exclusions=true&sorting=".$sort."&field=Antivirus\">Antivirus</a></th>
		<th class=stats><a href=\"../php/care_score.php?careteam={$careteam}&exclusions=true&sorting=".$sort."&field=Disk\">Disk</a></th>
		<th class=stats><a href=\"../php/care_score.php?careteam={$careteam}&exclusions=true&sorting=".$sort."&field=Intrusion\">Intrusion</a></th>
		<th class=stats><a href=\"../php/care_score.php?careteam={$careteam}&exclusions=true&sorting=".$sort."&field=Usability\">Usability</a></th>
		<th class=stats><a href=\"../php/care_score.php?careteam={$careteam}&exclusions=true&sorting=".$sort."&field=Services\">Services</a></th>
		<th class=stats><a href=\"../php/care_score.php?careteam={$careteam}&exclusions=true&sorting=".$sort."&field=Updates\">Updates</a></th>
		<th class=stats><a href=\"../php/care_score.php?careteam={$careteam}&exclusions=true&sorting=".$sort."&field=Events\">Events</a></th>
		<th class=stats><a href=\"../php/care_score.php?careteam={$careteam}&exclusions=true&sorting=".$sort."&field=Overall Score\">Overall Score</a></th>
	  </tr>";
	  } else {
	echo "<p><hr align=center width=75%><p><h2><b>{$careteam} Team Health Scores{$exclusions_text}</b></h2>
	<table class=TBscore>
	  <tr>
	    <th class=names width=300><a href=\"../php/care_score.php?careteam={$careteam}&sorting=".$sort."&field=Client Name\">Client Name</a></th>
		<th class=stats><a href=\"../php/care_score.php?careteam={$careteam}&sorting=".$sort."&field=Antivirus\">Antivirus</a></th>
		<th class=stats><a href=\"../php/care_score.php?careteam={$careteam}&sorting=".$sort."&field=Disk\">Disk</a></th>
		<th class=stats><a href=\"../php/care_score.php?careteam={$careteam}&sorting=".$sort."&field=Intrusion\">Intrusion</a></th>
		<th class=stats><a href=\"../php/care_score.php?careteam={$careteam}&sorting=".$sort."&field=Usability\">Usability</a></th>
		<th class=stats><a href=\"../php/care_score.php?careteam={$careteam}&sorting=".$sort."&field=Services\">Services</a></th>
		<th class=stats><a href=\"../php/care_score.php?careteam={$careteam}&sorting=".$sort."&field=Updates\">Updates</a></th>
		<th class=stats><a href=\"../php/care_score.php?careteam={$careteam}&sorting=".$sort."&field=Events\">Events</a></th>
		<th class=stats><a href=\"../php/care_score.php?careteam={$careteam}&sorting=".$sort."&field=Overall Score\">Overall Score</a></th>
	  </tr>";
	  }
    // output data of each row
	while($row = mysqli_fetch_array($result)) {
        echo "<tr align=center>
			<td class=names><a href=\"../php/client_score.php?client=".$row["Client Name"]."\">".$row["Client Name"]."</td>
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
?><br></div></div>
<div id="footer">
<p>Copyright &copy; 2015 <a href="http://www.marconet.com/">marconet.com</a></p>
</div>
<script src="../js/progress_bar.js"></script>
</body></html>
