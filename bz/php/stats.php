<?php
include('../config/dbconnect.php');
include('../config/sql.php');
?>

<!DOCTYPE html>
<html>
<head><title>Marco Managed Health Scores</title>
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

	<div id="section">
<p><hr width=70%><p>
 <?php
// Device Count
	$sql = "SELECT FORMAT(SUM(CASE WHEN os LIKE '%server%' THEN 1 ELSE 0 END),0) AS TotalSrv, FORMAT(SUM(CASE WHEN os NOT LIKE '%server%' THEN 1 ELSE 0 END),0) AS TotalWS, FORMAT(COUNT(computerid),0) AS Total FROM computers ORDER BY TotalSrv DESC";

// Top Redirectors
	$sql2 = "SELECT DISTINCT IF(INSTR(redirname,\"&\"),CONCAT(RIGHT(LEFT(redirname,INSTR(redirname,\"&\")-1),20)),redirname) redirname, COUNT(redirname) AS Total, SUM(duration) Duration FROM h_redirector WHERE starttime > DATE_ADD(NOW(), INTERVAL -30 DAY) GROUP BY redirname ORDER BY Total DESC";
	
// Script, Patching, Commands Counts
	$sqlPatch = "SELECT COUNT(DISTINCT DATE(QueuedDate)) AS EventDate, FORMAT(COUNT(*),0) AS Patching FROM h_patching";
	$sqlCommand = "SELECT COUNT(DISTINCT DATE(DateExecuted)) AS EventDate, FORMAT(COUNT(*),0) AS Commands FROM h_commands WHERE `Status`=3";
	$sqlScript = "SELECT COUNT(DISTINCT DATE(HistoryDate)) AS EventDate, FORMAT(COUNT(*),0) AS Scripts FROM h_scripts WHERE ScriptStatus=3";
	
// Run Queries
	$result = mysqli_query($conn,$sql);
	$result2 = mysqli_query($conn,$sql2);
	$resultPatch = mysqli_query($conn,$sqlPatch);
	$resultCommand = mysqli_query($conn,$sqlCommand);
	$resultScript = mysqli_query($conn,$sqlScript);
	
// Table Device Count
    echo "<h2><b>Installation Summary</b></h2>
	  <P>
	  <table class=TBscore>
	    <tr align=left>
		  <th style=\"padding-left: 10px;\">Servers</th>
		  <th style=\"text-align:center;\">Workstations</a></th>
		  <th style=\"padding-right: 10px; text-align:right;\">Total</a></th>
		 </tr>";
 	
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>
			<td style=\"padding-left: 20px;\">".$row["TotalSrv"]."</td>
			<td style=\"text-align:center;\">".$row["TotalWS"]."</td>
			<td style=\"padding-right: 10px; text-align:right;\">".$row["Total"]."</td>
		</tr>";
    }
   echo "</table>";
   
// Table Script, Patching, Commands Count
    echo "<br><h2><b>Activity Count</b></h2>
	  <P>
	  <table class=TBscore>
	    <tr align=left>
		  <th style=\"padding-left: 10px; width: 120px;\">Activity</th>
		  <th style=\"padding-left: 10px; width:100px;\">History</th>
		  <th style=\"padding-right: 10px;text-align:right; width: 120px;\">Performed</th>
		 </tr>";
 	
    while ($row = mysqli_fetch_array($resultPatch)) {
        echo "<tr>
		<td style=\"padding-left: 10px;\">Updates</td>
		<td style=\"padding-left: 10px;\">".$row["EventDate"]." Days</td>
		<td style=\"padding-right: 10px; text-align:right;\">".$row["Patching"]."</td>
	     </tr>";
		}
	while ($row = mysqli_fetch_array($resultCommand)) {
        echo "<tr>
		<td style=\"padding-left: 10px;\">Commands</td>
		<td style=\"padding-left: 10px;\">".$row["EventDate"]." Days</td>
		<td style=\"padding-right: 10px; text-align:right;\">".$row["Commands"]."</td>
	      </tr>";
		}
	while ($row = mysqli_fetch_array($resultScript)) {
        echo "<tr>
		<td style=\"padding-left: 10px;\">Scripts</td>
		<td style=\"padding-left: 10px;\">0".$row["EventDate"]." Days</td>
		<td style=\"padding-right: 10px; text-align:right;\">".$row["Scripts"]."</td>
	      </tr>";
		}
   echo "</table>";
   
 // Table Redirectors
    echo "<br><h2><b>Top Redirectors Last 30 Days</b></h2>
	  <P>
	  <table class=TBscore padding=5px>
	    <tr align=center>
		  <th align=left width=200 class=names>Remote Control</th>
		  <th>Total</a></th>
		  <th>Duration</a></th>
		 </tr>";
 		 
    while ($row = mysqli_fetch_array($result2)) {
        echo "<tr align=center>
		<td align=left class=names>".$row["redirname"]."</td>
			<td>".$row["Total"]."</td>
			<td>".$row["Duration"]."</td>
		</tr>";
    }
   echo "</table>";
?>
</div>

<div id="right">
<p><hr width=70%><p>
<?php
	$field="`Ticket`";
	$sort="ASC";
	if(isset($_GET["sorting"]))
	{if($_GET["sorting"]=="ASC")
	  {$sort="DESC";}
	   else
	    {$sort="ASC";}}
	if($_GET["field"]=="Ticket")
	 {$field = "`Ticket`";}
	  elseif($_GET["field"]=="New")
	   {$field = "`New`";}
	  elseif($_GET["field"]=="Open")
	   {$field="`Open`";}
	  elseif($_GET["field"]=="Resolved")
	   {$field="`Resolved`";}
	  elseif($_GET["field"]=="Total")
	   {$field="`Total`";}

// Ticket Status
	$sql3 = "SELECT IF(category=5,'Tray Ticket',categoryname) AS Ticket, SUM(STATUS = 1) AS New, SUM(STATUS = 2) AS Open, SUM(STATUS = 4) AS Resolved, sum(status in (1,2,4)) as Total FROM tickets JOIN v_extradataclients USING (clientid) JOIN infocategory ON infocategory.id=tickets.category WHERE starteddate > DATE_ADD(NOW(), INTERVAL -30 DAY) AND `Managed IT - Active` = 1 AND externalid > 0 GROUP BY `category` ORDER BY {$field} {$sort}";
	
$result3 = mysqli_query($conn,$sql3);
// Table Tickets
    echo "<h2><b>Ticket Status Summary</b></h2>
	  <P>
	  <table class=TBscore padding=5px>
	    <tr align=left>
		  <th width=300 class=names><a href=\"../php/stats.php?sorting=".$sort."&field=Ticket\">Ticket Type</a></th>
		  <th align=center><a href=\"../php/stats.php?sorting=".$sort."&field=New\">New</a></th>
		  <th align=center><a href=\"../php/stats.php?sorting=".$sort."&field=Open\">Open</a></th>
		  <th align=center><a href=\"../php/stats.php?sorting=".$sort."&field=Closed\">Closed</a></th>
		  <th align=center><a href=\"../php/stats.php?sorting=".$sort."&field=Total\">Total</a></th>
		 </tr>";
 		 
    while ($row = mysqli_fetch_array($result3)) {
        echo "<tr align=center>
		<td align=left class=names>".$row["Ticket"]."</td>
			<td>".$row["New"]."</td>
			<td>".$row["Open"]."</td>
			<td>".$row["Resolved"]."</td>
			<td>".$row["Total"]."</td>
		</tr>";
    }
   echo "</table>";
   
 ?>
</div>
</div>

<div id="footer">
<p>Copyright &copy; 2015 <a href="http://www.marconet.com/">marconet.com</a></p>
</div>
<script src="../js/progress_bar.js"></script>
	
</body></html>



