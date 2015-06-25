<?php

//Pre-stuff here, so far just turn on the DataTables code
//and get our PHP values
include('../config/dbconnect.php');
/*
$sql = "SELECT  `CARE Team`, ROUND(AVG(`Antivirus`),1) AS 'Antivirus', ROUND(AVG(`Disk`),1) AS 'Disk', ROUND(AVG(`Intrusion`),1) AS 'Intrusion', ROUND(AVG(`Usability`),1) AS 'Usability', ROUND(AVG(`Services`),1) AS 'Services', ROUND(AVG(`Updates`),1) AS 'Updates', ROUND(AVG(`Event Log`),1) AS 'Events', ROUND(((ROUND(AVG(`Antivirus`),1)+ROUND(AVG(`Disk`),1)+ROUND(AVG(`Intrusion`),1)+ROUND(AVG(`Usability`),1)+ROUND(AVG(`Services`),1)+ROUND(AVG(`Updates`),1)+ROUND(AVG(`Event Log`),1))/7),1) AS 'Overall Score'
        FROM hc_scores GROUP BY `CARE Team`";
$result = mysqli_query($conn,$sql);
$rows = array();

while ($r = mysqli_fetch_assoc($result)) {
	$rows[] = array('data' => $r);
	}
echo json_encode($rows);
*/
?>
<script>
$(document).ready( function () {
   var teamTable= $('#team_table').DataTable({
		"processing": true,
		"serverSide": true,
		"searching": false,
		"ajax" : {
			url: "json/mainpage.php?type=getTeam",
			type: "post" }
	
		}
	);
	var expTable= $('#ex_table').DataTable({
		"processing": true,
		"serverSide": true,
		"searching": false,
		"ajax" : {
			url: "json/mainpage.php?type=getEx",
			type: "post" }
	
		}
	);
	var specTable= $('#spec_table').DataTable({
		"processing": true,
		"serverSide": true,
		"searching": false,
		"ajax" : {
			url: "json/mainpage.php?type=getSpec",
			type: "post" }
	
		}
	);
} );
</script>

<!--Start Breadcrumb-->
<div class="row">
	<div id="breadcrumb" class="col-xs-12">
		<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li><a href="#">Dashboard</a></li>
		</ol>
	</div>
</div>
<!--End Breadcrumb-->
<!--Start Dashboard 1-->
<div id="dashboard-header" class="row">
	<div class="col-xs-2 col-sm-1 col-sm-offset-1">

	</div>
	<div class="clearfix visible-xs"></div>
	Temp Charts here... Maybe show some trending info in chart form?
	<!---
	<div class="col-xs-12 col-sm-8 col-md-7 pull-right">
		<div class="row">
			<div class="col-xs-4">
				<div class="sparkline-dashboard" id="sparkline-1"></div>
				<div class="sparkline-dashboard-info">
					<i class="fa fa-usd"></i>756.45M
					<span class="txt-primary">EBITDA</span>
				</div>
			</div>
			<div class="col-xs-4">
				<div class="sparkline-dashboard" id="sparkline-2"></div>
				<div class="sparkline-dashboard-info">
					<i class="fa fa-usd"></i>245.12M
					<span class="txt-info">OIBDA</span>
				</div>
			</div>
			<div class="col-xs-4">
				<div class="sparkline-dashboard" id="sparkline-3"></div>
				<div class="sparkline-dashboard-info">
					<i class="fa fa-usd"></i>107.83M
					<span>REVENUE</span>
				</div>
			</div>
		</div>
	</div> -->
	</div>
<!--End Dashboard 1-->
<!--Start Dashboard 2-->
<div class="row-fluid">
	<div id="dashboard_links" class="col-xs-12 col-sm-2 pull-right">
		<ul class="nav nav-pills nav-stacked">
			<li class="active"><a href="#" class="tab-link" id="overview">Team Health Scores</a></li>
			<li><a href="#" class="tab-link" id="graph">Team Health Scores (Exclusions)</a></li>
			<li><a href="#" class="tab-link" id="servers">Specialists Health Scores</a></li>

		</ul>
	</div>
	<div id="dashboard_tabs" class="col-xs-12 col-sm-10">
		<!--Start Dashboard Tab 1-->
		<div id="dashboard-overview" class="row" style="visibility: visible; position: relative;">
			<div id="table holder" class="col-xs-12" style="padding-top: 10px;">
				<? // AJAX - Asynchronous Javascript and XML - Sounds fancy, lets do that.?>
				<table id='team_table' class='display table table-bordered' cellspacing='0'>
					<thead>
						<tr>
							<td>Team</td>
							<td>Antivirus</td>
							<td>Disk</td>
							<td>Intrusion</td>
							<td>Services</td>
							<td>Updates</td>
							<td>Events</td>
							<td>Overall Scores</td>
						</tr>
					</thead>
				</table>
			</div>
		</div>
		<!--End Dashboard Tab 1-->
		<!--Start Dashboard Tab 3-->
		<div id="dashboard-graph" class="row" style="width:100%; visibility: hidden; position: absolute;" >
			<div class="col-xs-12" style="padding-top: 10px;">
				<table id='ex_table' class='display table table-bordered' cellspacing='0'>
					<thead>
						<tr>
							<td>Team</td>
							<td>Antivirus</td>
							<td>Disk</td>
							<td>Intrusion</td>
							<td>Services</td>
							<td>Updates</td>
							<td>Events</td>
							<td>Overall Scores</td>
						</tr>
					</thead>
				</table>
			</div>
		</div>
		<!--End Dashboard Tab 3-->
		<!--Start Dashboard Tab 4-->
		<div id="dashboard-servers" class="row" style="width: 100%; visibility: hidden; position: absolute;">
			<div class="col-xs-12" style="padding-top: 10px;">
				<table id='spec_table' class='display table table-bordered' cellspacing='0'>
					<thead>
						<tr>
							<td>Specialist</td>
							<td>Antivirus</td>
							<td>Disk</td>
							<td>Intrusion</td>
							<td>Services</td>
							<td>Updates</td>
							<td>Events</td>
							<td>Overall Scores</td>
						</tr>
					</thead>
				</table>
			
		
		<!--- This is for historical reasons.  I like the layout and junk, and dun wanna remake it OK! 
		

			-->
			</div>
		</div>
		<!--End Dashboard Tab 4-->
	</div>
	<div class="clearfix"></div>
</div>
<!--End Dashboard 2 -->
<div style="height: 40px;"></div>
<script type="text/javascript">
// Array for random data for Sparkline
var sparkline_arr_1 = SparklineTestData();
var sparkline_arr_2 = SparklineTestData();
var sparkline_arr_3 = SparklineTestData();
$(document).ready(function() {
	// Make all JS-activity for dashboard
	DashboardTabChecker();
	// Load Knob plugin and run callback for draw Knob charts for dashboard(tab-servers)
	LoadKnobScripts(DrawKnobDashboard);
	// Load Sparkline plugin and run callback for draw Sparkline charts for dashboard(top of dashboard + plot in tables)
	LoadSparkLineScript(DrawSparklineDashboard);
	// Load Morris plugin and run callback for draw Morris charts for dashboard
	LoadMorrisScripts(MorrisDashboard);
	// Make beauty hover in table
	$("#ticker-table").beautyHover();
});
</script>
