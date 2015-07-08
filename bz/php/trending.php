<?php
include('../config/dbconnect.php');
include('../config/sql.php');
?>

<!DOCTYPE html>
<html>
<head><title>Marco Managed Health Scores | Score Trending</title>
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
 $client = $_GET["client"];
 $trend = $_GET["trend"];

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
elseif($_GET["field"]=="CARE Team")
{
   $field = "`Team Assignment`";
}
elseif($_GET["field"]=="Active Customer")
{
   $field="`Active Customer`";
}
elseif($_GET["field"]=="Previous Date")
{
   $field="`Previous Date`";
}
elseif($_GET["field"]=="Latest Date")
{
   $field="`Latest Date`";
}
elseif($_GET["field"]=="Previous Score")
{
   $field="`Previous Score`";
}
elseif($_GET["field"]=="Latest Score")
{
   $field="`Latest Score`";
}
elseif($_GET["field"]=="Percent Change")
{
   $field="`Percent Change`";
}


	$sql = "SELECT x.`Client Name`, x.`Team Assignment`,IF(`Managed IT - Active` = 1, '<img src=../images/check.png>','<img src=../images/xmark.png>') 'Active Customer', CONCAT(LEFT(y.checkdate,10)) 'Previous Date', CONCAT(LEFT(x.checkdate,10)) 'Latest Date', y.`{$trend}` 'Previous Score', x.`{$trend}` 'Latest Score', ROUND((((x.`{$trend}` - y.`{$trend}`)/100)*100),2) 'Percent Change'
  FROM hc_scores_weekly X
  JOIN hc_scores_weekly Y ON (y.clientid=x.clientid) JOIN v_extradataclients ON x.clientid=v_extradataclients.clientid
    WHERE x.checkdate = (SELECT MAX(checkdate) FROM hc_scores_weekly)
    GROUP BY x.clientid ORDER BY {$field} {$sort}";
	

	$result = mysqli_query($conn,$sql);

    echo "<p><hr align=center width=75%><p><h2><b>{$trend} Trending</b></h2>
	  <table class=TBscore>
	    <tr>
		  <th width=300 class=names><a href=\"../php/trending.php?trend={$trend}&sorting=".$sort."&field=Client Name\">Client Name</a></th>
		  <th class=stats width=125><a href=\"../php/trending.php?trend={$trend}&sorting=".$sort."&field=CARE Team\">CARE Team</a></th>
		  <th class=stats width=150><a href=\"../php/trending.php?trend={$trend}&sorting=".$sort."&field=Active Customer\">Active Customer</a></th>
		  <th class=stats width=150><a href=\"../php/trending.php?trend={$trend}&sorting=".$sort."&field=Previous Date\">Previous Date</a></th>
		  <th class=stats width=150><a href=\"../php/trending.php?trend={$trend}&sorting=".$sort."&field=Latest Date\">Latest Date</a></th>
		  <th class=stats><a href=\"../php/trending.php?trend={$trend}&sorting=".$sort."&field=Previous Score\">Previous Score</a></th>
		  <th class=stats><a href=\"../php/trending.php?trend={$trend}&sorting=".$sort."&field=Latest Score\">Latest Score</a></th>
		  <th class=stats><a href=\"../php/trending.php?trend={$trend}&sorting=".$sort."&field=Percent Change\">Percent Change</a></th>
		 </tr>";
	 
    // output data of each row
	while($row = mysqli_fetch_array($result)) {
        echo "<tr align=center>
			<td class=names><a href=\"../php/client_score.php?client=".$row["Client Name"]."\">".$row["Client Name"]."</td>
			<td class=stats style='text-align:center;'>".$row["Team Assignment"]."</td>
			<td class=stats style='text-align:center;'>".$row["Active Customer"]."</td>
			<td class=stats>".$row["Previous Date"]."</td>
			<td class=stats>".$row["Latest Date"]."</td>
			<td class=stats>".$row["Previous Score"]."</td>
			<td class=stats>".$row["Latest Score"]."</td>
			<td class=stats>".$row["Percent Change"]."%</td>
		</tr>";
    }
    echo "</table>";
?><br></div></div>
<div id="footer">
<p>Copyright &copy; 2015 <a href="http://www.marconet.com/">marconet.com</a></p>
</div>
<script src="../js/progress_bar.js"></script>
</body></html>
