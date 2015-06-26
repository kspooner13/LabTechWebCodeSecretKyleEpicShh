<!DOCTYPE html>
<html>
<head><title>Marco Managed Health Scores | Usability Details</title>
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
 $computerid = $_GET["computerid"];

// Create connection
include 'dbconnect2.php';

$field="`Event Date`";
$sort="DESC";
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
if($_GET["field"]=="`Event Date`")
{
   $field="`Event Date`";
}
elseif($_GET["field"]=="`Usability Details`")
{
   $field="`Usability Details`";
}


	$sql = "SELECT computerid, computers.name as 'Computer Name', eventdate as 'Event Date', SUBSTRING(stat18,7) as 'Usability Details' FROM h_extrastatsdaily JOIN computers USING (computerid) WHERE computers.computerid={$computerid} AND (INSTR(stat18,\";^\") OR INSTR(stat18,\";:\")) AND eventdate > DATE_ADD(NOW(), INTERVAL -1 MONTH) ORDER BY {$field} {$sort}";

	$result = mysql_query($sql);

    echo "<p><hr width=70%><p><h2><b>Usability Health Score Details{$exclusions_text}</b></h2>
	  <table class=TBscore>
	    <tr align=left>
		  <th width=200 class=names>Computer Name</th>
		  <th class=event_date width=150><a href=\"usability.php?computerid={$computerid}&sorting=".$sort."&field=Event Date\">Event Date</a></th>
		  <th class=score_detail width=450><a href=\"usability.php?computerid={$computerid}&sorting=".$sort."&field=Usability Details\">Usability Details</a></th>
		 </tr>";
 		 
    // output data of each row
    while ($row = mysql_fetch_array($result)) {
        echo "<tr>
		<td class=names><a href=\"labtech:open?computerid=".$row["computerid"]."\">".$row["Computer Name"]."</a></td>
			<td class=event_date>".$row["Event Date"]."</td>
			<td class=score_detail>".$row["Usability Details"]."</td>
		</tr>";
    }
   echo "</table>";
   
   
?>
<br></div></div>
<div id="footer">
<p>Copyright &copy; 2015 <a href="http://www.marconet.com/">marconet.com</a></p>
</div>
<script src="progress_bar.js"></script>
</body></html>


