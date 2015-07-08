<?php
include('../php/config/dbconnect.php');
include('../php/config/sql.php');
?>

<!DOCTYPE html> <html> <head>
        <meta charset="utf-8" />
        <title>Marco Managed Health Scores</title>
        <link href="../css/style.css" rel="stylesheet" />
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> </head> <body>
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
  <div id="space" style="width:100%;">
        <div id="section-two" style="width:100%">
                <?php
                $result = $conn->query($exclude_client);
                if ($result->num_rows > 0) {
                        echo "<p><hr width=70%><p><h2><b>Client Exclusions</b></h2>
                <table class=TBscore>
                  <tr>
			<th width=210 class=names>Client Name</th>
			<th width=75 class=stats>CARE Team</th>
			<th width=75 class=stats>Ignore - All Services</th>
			<th width=50 class=stats>Ignore Antivirus</th>
			<th width=50 class=stats>Ignore Disk</th>
			<th width=50 class=stats>Ignore Intrusion</th>
			<th width=50 class=stats>Ignore Usability</th>
			<th width=50 class=stats>Ignore Services</th>
			<th width=50 class=stats>Ignore Updates</th>
			<th width=50 class=stats>Ignore Events</th>
			<th width=100 class=stats>Go Live Date</th>
			<th width=350 class=stats style='text-align:left;'>Exclusion Comments</th>
                  </tr>";
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                                echo "
                        <tr align=center>
                                <td class=names><a href=\"../php/client_score.php?client=".$row["Client Name"]."\">".$row["Client Name"]."</a></td>
				<td class=stats style='text-align:center;'>".$row["Team Assignment"]."</td>
				<td class=stats style='text-align:center;'>".$row["Exclude Reporting"]."</td>
                                <td class=stats style='text-align:center;'>".$row["Ignore Antivirus"]."</td>
                                <td class=stats style='text-align:center;'>".$row["Ignore Disk"]."</td>
                                <td class=stats style='text-align:center;'>".$row["Ignore Intrusion"]."</td>
                                <td class=stats style='text-align:center;'>".$row["Ignore Usability"]."</td>
                                <td class=stats style='text-align:center;'>".$row["Ignore Services"]."</td>
                                <td class=stats style='text-align:center;'>".$row["Ignore Updates"]."</td>
                                <td class=stats style='text-align:center;'>".$row["Ignore Event Log"]."</td>
                                <td class=stats style='text-align:center;'>".$row["Go Live Date"]."</td>
				<td class=stats style='text-align:left;'>".$row["Exclusion Comments"]."</td>
                        </tr>";
                        }
                        echo "</table>";
                } else {
                        echo "0 results";
                }
                $result2 = $conn->query($exclude_comp);
                if ($result2->num_rows > 0) {
                        echo "<br><p id='computer'><hr width=70%><p><h2><b>Computer Exclusions</b></h2>
                <table class=TBscore>
                  <tr>
			  <th width=250 class=names>Client Name</th>
			  <th width=75 class=stats>CARE Team</th>
			  <th width=150 class=stats>Computer Name</th>
			  <th width=50 class=stats>Ignore Antivirus</th>
			  <th width=50 class=stats>Ignore Disk</th>
			  <th width=50 class=stats>Ignore Intrusion</th>
			  <th width=50 class=stats>Ignore Usability</th>
			  <th width=50 class=stats>Ignore Services</th>
			  <th width=50 class=stats>Ignore Updates</th>
			  <th width=50 class=stats>Ignore Events</th>
			  <th class=stats width=350 style='text-align:left;'>Exclusion Comments</th>
                  </tr>";
                        // output data of each row
                        while($row = $result2->fetch_assoc()) {
                                echo "
                        <tr align=center>
                                <td class=names><a href=\"../php/client_score.php?client=".$row["Client Name"]."\">".$row["Client Name"]."</a></td>
				<td class=stats style='text-align:center;'>".$row["Team Assignment"]."</td>
				<td class=stats style='text-align:left;'>".$row["Computer Name"]."</td>
                                <td class=stats style='text-align:center;'>".$row["Ignore Antivirus"]."</td>
                                <td class=stats style='text-align:center;'>".$row["Ignore Disk"]."</td>
                                <td class=stats style='text-align:center;'>".$row["Ignore Intrusion"]."</td>
                                <td class=stats style='text-align:center;'>".$row["Ignore Usability"]."</td>
                                <td class=stats style='text-align:center;'>".$row["Ignore Services"]."</td>
                                <td class=stats style='text-align:center;'>".$row["Ignore Updates"]."</td>
                                <td class=stats style='text-align:center;'>".$row["Ignore Event Log"]."</td>
				<td class=stats style='text-align:left;'>".$row["Exclusion Comments"]."</td>
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
        <div id="footer">
                <p>Copyright &copy; 2015 <a href="http://www.marconet.com/">marconet.com</a></p>
        </div> <script src="../js/progress_bar.js"></script> </body> </html>
