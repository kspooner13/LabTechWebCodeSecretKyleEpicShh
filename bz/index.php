<?php
include('config/dbconnect.php');
include('config/sql.php');
?>

<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8" />
        <title>Marco Managed Health Scores</title>
        <link href="css/style.css" rel="stylesheet" />
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
			<li><a href="php/stats.php">LabTech Stats</a></li>
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
			<li><a href=php/trending.php?trend=Antivirus>Antivirus</a></li> 
			<li><a href=php/trending.php?trend=Disk>Disk</a></li> 
			<li><a href=php/trending.php?trend=Intrusion>Intrusion</a></li> 
			<li><a href=php/trending.php?trend=Usability>Usability</a></li> 
			<li><a href=php/trending.php?trend=Services>Services</a></li> 
			<li><a href=php/trending.php?trend=Updates>Updates</a></li> 
			<li><a href="php/trending.php?trend=Event Log">Events</a></li> 
			<li><a href="php/trending.php?trend=Avg Score">Overall Score</a></li>
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
					while ($row = mysqli_fetch_array($result4)) {echo "<li><a href=\"php/care_score.php?careteam=".$row["netsp"]."\">".$row["netsp"]." Team</a></li>";}
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
				while ($row = mysqli_fetch_array($result4)) {echo "<li style=\"width:180px;\"><a href=\"php/ns_score.php?net_sp=".$row["netsp"]."\">".$row["netsp"]."</a></li>";}
			?>
		  </ul>
		  <hr style="width:100%;">
		  </div>
		  </li>
		</ul>
	<h4 style='color:#ccc'>
		<img src='images/warning-shield-16.png'>&nbsp;&nbsp;Score Warning<br>
		<img src='images/red-warning-shield-16.png'>&nbsp;&nbsp;Score Critical
	</h4>
  </div>
  <div id="header">
          <div id="headerlogo">
                <a href="index.php"><img src="images/marco-logo.png" align=left style="margin-left: 15px" vspace=20></img></a></div>
          <div id="headerbg"></div>
        <h1><b>&nbsp; Managed Services</b></h1>
  </div>
  <div id="space">
        <div id="section-two">
                <?php
                $result = $conn->query($score_team);
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
                                <td class=names><a href=php/care_score.php?careteam=".$row["Team Assignment"].">".$row["Team Assignment"]."</a></td>
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

                $result2 = $conn->query($score_team_ex);

                if ($result2->num_rows > 0) {
                        echo "<p><br><hr width=70%><p><br><h2><b>NOC Health Scores - Client<a href=php/exclusions.php#client> Exclusions </a>Enabled</b></h2>
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
                         <td class=names><a href=php/care_score.php?careteam=".$row["Team Assignment"]."&exclusions=true>".$row["Team Assignment"]."</a></td>
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
                
                $result3 = $conn->query($score_spec_ex);

                if ($result3->num_rows > 0) {
                        echo "<p><br><h2><hr width=70%><p><br><b>Network Specialist Summary - <a href=php/exclusions.php#computer> Exclusions </a>Enabled</b></h2>
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
                          <td class=names><a href=\"php/ns_score.php?net_sp=".$row["Client Specialist"]."\">".$row["Client Specialist"]."</a></td>
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

        <div id="footer">
                <p>Copyright &copy; 2015 <a href="http://www.marconet.com/">marconet.com</a></p>
        </div>

<script src="js/progress_bar.js"></script>
</body>
</html>
