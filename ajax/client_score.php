<!DOCTYPE html>
<html>
<head><title>Marco Managed Health Scores | Client Computers</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>
<body>
<progress value="0"></progress>
  <div id="nav2">
	<ul class="js-css-menu shadow responsive vertical">
		<li><h3><a href="index.php">Main</a></h3><hr>
		 <div>
		  <ul>
			<li><h3 style="margin-bottom: 0px; margin-top: 10px;">Main</h3></li>
			<hr class="hrfull">
			<li><a href="index.php">Home</a></li>
			<li><a href="stats.php">LabTech Stats</a></li>
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
			<li><a href=trending.php?trend=Antivirus>Antivirus</a></li> 
			<li><a href=trending.php?trend=Disk>Disk</a></li> 
			<li><a href=trending.php?trend=Intrusion>Intrusion</a></li> 
			<li><a href=trending.php?trend=Usability>Usability</a></li> 
			<li><a href=trending.php?trend=Services>Services</a></li> 
			<li><a href=trending.php?trend=Updates>Updates</a></li> 
			<li><a href="trending.php?trend=Event Log">Events</a></li> 
			<li><a href="trending.php?trend=Avg Score">Overall Score</a></li>
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
				  include 'dbconnect2.php';
				  $sql4 = "SELECT distinct `CARE Team` as netsp FROM hc_scores";
				  $result4 = mysql_query($sql4);
				while ($row = mysql_fetch_array($result4)) {echo "<li><a href=\"care_score.php?careteam=".$row["netsp"]."\">".$row["netsp"]." Team</a></li>";}  
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
			 	 include 'dbconnect2.php';
				 $sql4 = "SELECT distinct `Network Specialist` as netsp FROM v_extradataclients WHERE `Network Specialist` != 'None' order by netsp asc";
				 $result4 = mysql_query($sql4);
				while ($row = mysql_fetch_array($result4)) {echo "<li style=\"width:180px;\"><a href=\"ns_score.php?net_sp=".$row["netsp"]."\">".$row["netsp"]."</a></li>";}  
			  ?>
		  </ul>
		  <hr style="width:100%;">
		  </div>
		  </li>
		</ul>
  </div>
<div id="header">
  <div id="headerlogo">
  	<a href="index.php"><img src="marco-logo.png" align=left style="margin-left: 15px" vspace=20></img></a></div>
  <div id="headerbg"></div>
<h1><b>&nbsp; Managed Services</b></h1>
</div>
<div id="space">

	<div id="section-two">
 <?php
 $client = $_GET["client"];
 $exclusions = $_GET["exclusions"];
// $exclusions = "false";
// Create connection
include 'dbconnect2.php';

$field="`Computer Name`";
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
		if($_GET["field"]=="Computer Name")
		{
		   $field = "`Computer Name`"; 
		}
		if($_GET["field"]=="Status")
		{
		   $field = "`Status`"; 
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
	$sql = "SELECT 	computerid, `Computer Name`,IF((computers.lastcontact > date_add(now(),interval -10 minute)), 'Online','<font color=red><b>Offline</b></font>') AS 'Status',
	IF((`AV Ex` < 90), CONCAT('<font color=red><b>',`AV Ex`,'</b></font>'),`AV Ex`) AS 'Antivirus',
	IF((`Disk Ex` < 90), CONCAT('<font color=red><b>',`Disk Ex`,'</b></font>'),`Disk Ex`) AS 'Disk',
	IF((`Intrusion Ex` < 90), CONCAT('<font color=red><b>',`Intrusion Ex`,'</b></font>'),`Intrusion Ex`) AS 'Intrusion',
	IF((`Usability Ex` < 90), CONCAT('<font color=red><b>',`Usability Ex`,</b>'</font>'),`Usability Ex`) AS 'Usability',
	IF((`Services Ex` < 90), CONCAT('<font color=red><b>',`Services Ex`,'</b></font>'),`Services Ex`) AS 'Services',
	IF((`Updates Ex` < 90), CONCAT('<font color=red><b>',`updates ex`,'</b></font>'),`updates ex`)) AS 'Updates',
	IF((`Event Ex` < 90), CONCAT('<font color=red><b>',`Event Ex`,'</b></font>'),`Event Ex`) AS 'Events',
	IF((ROUND(((`AV Ex`+`Disk Ex`+`Intrusion Ex`+`Usability Ex`+`Services Ex`+`Updates Ex`+`Event Ex`)/7),1) < 90), CONCAT('<font color=red><b>',ROUND(((`AV Ex`+`Disk Ex`+`Intrusion Ex`+`Usability Ex`+`Services Ex`+`Updates Ex`+`Event Ex`)/7),1),'</b></font>'),ROUND(((`AV Ex`+`Disk Ex`+`Intrusion Ex`+`Usability Ex`+`Services Ex`+`Updates Ex`+`Event Ex`)/7),1)) AS 'Overall Score'
FROM hc_scores_computers JOIN v_extradataclients USING (clientid) left join computers using (computerid) WHERE v_extradataclients.`Ignore - Non Contractual Services` <> 1 AND `Client Name` = '{$client}' GROUP BY `Computerid` ORDER BY {$field} {$sort}";
	} else {
	$sql = "SELECT 	computerid, `Computer Name`,IF((computers.lastcontact > date_add(now(),interval -10 minute)), 'Online','<font color=red><b>Offline</b></font>') AS 'Status', 
	IF((antivirus < 90), CONCAT('<font color=red><b>',antivirus,'</b></font>'),antivirus) AS 'Antivirus', 
	IF((disk < 90), CONCAT('<font color=red><b>',disk,'</b></font>'),disk) AS 'Disk', 
	IF((intrusion < 90), CONCAT('<font color=red><b>',intrusion,'</b></font>'),intrusion) AS 'Intrusion', 
	IF((usability < 90), CONCAT('<font color=red><b>',usability,'</b></font>'),usability) AS 'Usability', 
	IF((services < 90), CONCAT('<font color=red><b>',services,'</b></font>'),services) AS 'Services', 
	IF((updates < 90), CONCAT('<font color=red><b>',updates,'</b></font>'),updates) AS 'Updates', 
	IF((`Event Log` < 90), CONCAT('<font color=red><b>',`Event Log`,'</b></font>'),`Event Log`) AS 'Events', 
	IF((ROUND(((`Antivirus`+`Disk`+`Intrusion`+`Usability`+`Services`+`Updates`+`Event Log`)/7),1) < 90), CONCAT('<font color=red><b>',ROUND(((`Antivirus`+`Disk`+`Intrusion`+`Usability`+`Services`+`Updates`+`Event Log`)/7),1),'</b></font>'),ROUND(((`Antivirus`+`Disk`+`Intrusion`+`Usability`+`Services`+`Updates`+`Event Log`)/7),1)) AS 'Overall Score'
FROM hc_scores_computers JOIN v_extradataclients USING (clientid) left join computers using (computerid) WHERE `Client Name` = '{$client}' GROUP BY `Computerid` ORDER BY {$field} {$sort}";
	}
	$result = mysql_query($sql);


if ($exclusions == "true") {
    echo "<p><hr width=70%><p><h2><b>{$client} Health Scores{$exclusions_text}</b></h2>
	  <table class=TBscore>
	    <tr>
		  <th width=300 class=names><a href=\"client_score.php?client={$client}&sorting=".$sort."&field=Computer Name\">Computer Name</a></th>
		  <th class=stats><a href=\"client_score.php?client={$client}&exclusions=true&sorting=".$sort."&field=Status\">Status</a></th>
		  <th class=stats><a href=\"client_score.php?client={$client}&exclusions=true&sorting=".$sort."&field=Antivirus\">Antivirus</a></th>
		  <th class=stats><a href=\"client_score.php?client={$client}&exclusions=true&sorting=".$sort."&field=Disk\">Disk</a></th>
		  <th class=stats><a href=\"client_score.php?client={$client}&exclusions=true&sorting=".$sort."&field=Intrusion\">Intrusion</a></th>
		  <th class=stats><a href=\"client_score.php?client={$client}&exclusions=true&sorting=".$sort."&field=Usability\">Usability</a></th>
		  <th class=stats><a href=\"client_score.php?client={$client}&exclusions=true&sorting=".$sort."&field=Services\">Services</a></th>
		  <th class=stats><a href=\"client_score.php?client={$client}&exclusions=true&sorting=".$sort."&field=Updates\">Updates</a></th>
		  <th class=stats><a href=\"client_score.php?client={$client}&exclusions=true&sorting=".$sort."&field=Events\">Events</a></th>
		  <th class=stats><a href=\"client_score.php?client={$client}&exclusions=true&sorting=".$sort."&field=Overall Score\">Overall Score</a></th>
		 </tr>";
} else {
	    echo "<p><hr width=70%><p><h2><b>{$client} Health Scores{$exclusions_text}</b></h2>
	  <table class=TBscore>
	    <tr>
		  <th width=300 class=names><a href=\"client_score.php?client={$client}&sorting=".$sort."&field=Computer Name\">Computer Name</a></th>
		  <th class=stats><a href=\"client_score.php?client={$client}&sorting=".$sort."&field=Status\">Status</a></th>
		  <th class=stats><a href=\"client_score.php?client={$client}&sorting=".$sort."&field=Antivirus\">Antivirus</a></th>
		  <th class=stats><a href=\"client_score.php?client={$client}&sorting=".$sort."&field=Disk\">Disk</a></th>
		  <th class=stats><a href=\"client_score.php?client={$client}&sorting=".$sort."&field=Intrusion\">Intrusion</a></th>
		  <th class=stats><a href=\"client_score.php?client={$client}&sorting=".$sort."&field=Usability\">Usability</a></th>
		  <th class=stats><a href=\"client_score.php?client={$client}&sorting=".$sort."&field=Services\">Services</a></th>
		  <th class=stats><a href=\"client_score.php?client={$client}&sorting=".$sort."&field=Updates\">Updates</a></th>
		  <th class=stats><a href=\"client_score.php?client={$client}&sorting=".$sort."&field=Events\">Events</a></th>
		  <th class=stats><a href=\"client_score.php?client={$client}&sorting=".$sort."&field=Overall Score\">Overall Score</a></th>
		 </tr>";
	}
		 
    // output data of each row
    while ($row = mysql_fetch_array($result)) {
        echo "<tr align=center>
		<td class=names><a href=\"labtech:open?computerid=".$row["computerid"]."\">".$row["Computer Name"]."</a></td>
			<td class=stats>".$row["Status"]."</td>
			<td class=stats><a href=\"antivirus.php?computerid=".$row["computerid"]."\">".$row["Antivirus"]."</a></td>
			<td class=stats><a href=\"disk.php?computerid=".$row["computerid"]."\">".$row["Disk"]."</a></td>
			<td class=stats><a href=\"intrusion.php?computerid=".$row["computerid"]."\">".$row["Intrusion"]."</a></td>
			<td class=stats><a href=\"usability.php?computerid=".$row["computerid"]."\">".$row["Usability"]."</a></td>
			<td class=stats><a href=\"services.php?computerid=".$row["computerid"]."\">".$row["Services"]."</a></td>
			<td class=stats><a href=\"updates.php?computerid=".$row["computerid"]."\">".$row["Updates"]."</a></td>
			<td class=stats><a href=\"events.php?computerid=".$row["computerid"]."\">".$row["Events"]."</a></td>
			<td class=stats>".$row["Overall Score"]."</td>
		</tr>";
    }
   echo "</table>"; 
?><br></div></div>
<div id="footer">
<p>Copyright &copy; 2015 <a href="http://www.marconet.com/">marconet.com</a></p>
</div>
<script src="progress_bar.js"></script>
</body></html>


