<?php
include('../config/dbconnect.php');
include('../config/sql.php');
?>

<!DOCTYPE html>
<html>
<head><title>Marco Managed Health Scores | Services Details</title>
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
		<img src='../images/online.png'>&nbsp;&nbsp;Computer Online<br>
		<img src='../images/offline.png'>&nbsp;&nbsp;Computer Offline<p>
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
 $computerid = $_GET["computerid"];
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
		elseif($_GET["field"]=="`Services Details`")
		{
		   $field="`Services Details`";
		}

	$sql = "SELECT IF((computers.lastcontact > date_add(now(),interval -10 minute)), '<img src=../images/online.png>','<img src=../images/offline.png>') AS 'Status', computerid, computers.name as 'Computer Name', eventdate as 'Event Date', SUBSTRING(stat19,6) as 'Services Details' FROM h_extrastatsdaily JOIN computers USING (computerid) WHERE computers.computerid={$computerid} AND INSTR(stat19,\";\") AND eventdate > DATE_ADD(NOW(), INTERVAL -1 MONTH) ORDER BY {$field} {$sort}";

	$result = mysqli_query($conn,$sql);

    echo "<p><hr width=70%><p><h2><b>Services Health Score Details{$exclusions_text}</b></h2>
	  <table class=TBscore>
	    <tr align=left>
		  <th width=200 class=names>Computer Name</th>
		  <th class=event_date width=150><a href=\"../php/services.php?computerid={$computerid}&sorting=".$sort."&field=Event Date\">Event Date</a></th>
		  <th class=score_detail width=450><a href=\"../php/services.php?computerid={$computerid}&sorting=".$sort."&field=Services Details\">Services Details</a></th>
		 </tr>";
 		 
    // output data of each row
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>
		<td class=names><a href=\"labtech:open?computerid=".$row["computerid"]."\">".$row['Status']."&nbsp;&nbsp;".$row["Computer Name"]."</a></td>
			<td class=event_date style='text-align:left;'>".$row["Event Date"]."</td>
			<td class=score_detail style='text-align:left;'>".$row["Services Details"]."</td>
		</tr>";
    }
   echo "</table>";
?>
<p><br><strong>How this score is calculated:</strong>
<table class=score_explain>
  <tr align=left>
    <td style="text-align:left;"><ul style="list-style-type:disc"><li>Detects if there are any automatic critical services that are not running since the last agent check-in. Critical services are defined as Windows services that are not drivers or printers and are not on the event blacklist.</li>
<li>Weight: no weight</li>
<li>Fail Message: &#147;# critical Windows service(s) stopped&#148;</li><p></ul>
Each day that the system checks run, a score of 1% (fail) or 100% (success) will be given. Even if one automatic critical service is stopped during the check, a score of 1% will be given. The percentage shown for each system check is based on an average of success and failure of the system check score over the period specified. For example, Client A has 5 agents: 3 of the agents passed the service health check for today, while the other 2 failed the service health check for today. Client A&#39;s Service Health score for today will be 60% (3 successful agent checks / 5 total agent checks = .60, or 60%). The percentage for weekly and monthly reports will average this count over time; as an example, Client A&#39;s 5 computers will each run a check over the next 7 days; 2 of those computers will fail their checks twice in that period, and one of those computers will fail its check three times in that period. A total of 35 agent checks are made in this period (5 agents * 7 checks), with a total of 8 failed checks. Client A&#39;s Service Health score for the week will be 80% (28 successful checks / 35 total agent checks = .80, or 80%).</td></tr></table>
</p>

<br></div></div>
<div id="footer">
<p>Copyright &copy; 2015 <a href="http://www.marconet.com/">marconet.com</a></p>
</div>
<script src="../js/progress_bar.js"></script>
</body></html>


