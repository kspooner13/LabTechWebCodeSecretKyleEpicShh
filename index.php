
<?php


//////////////////////////////////////////////////
// Code Originally written by Brandon @ marconet
//
// Modified and Enhanced by Kyle Spooner
//
//////////////////////////////////////////////////

//
//
//
//
include('config/Login.php');
include('config/config.php');
require('config/dbconnect.php');

if (USE_LOGIN == 'YES' && AUTH_TYPE == 'LT'){

		$login = new Login();
		if ($login->isUserLoggedIn() == false) {

		header('location: ajax/page_login.php');

		}
}






?>

<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<!--<script src="http://code.jquery.com/jquery.js"></script>-->
		<script src="plugins/jquery/jquery-2.1.0.min.js"></script>
		<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
		
		<!-- Load the CSS! -->

		<link href="plugins/bootstrap/bootstrap.css" rel="stylesheet">
		<link href="css/bootstrap.dataTables.css" rel="stylesheet">
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
<header class="navbar">
	<div class="container-fluid expanded-panel">
		<div class="row">
			<div id="logo" class="col-xs-12 col-sm-2">
				<a href="index.php">ControlCenter</a>
			</div>
			<div id="top-panel" class="col-xs-12 col-sm-10">
				<div class="row">
					<div class="col-xs-8 col-sm-4">
						<a href="#" class="show-sidebar">
						  <i class="fa fa-bars"></i>
						</a>
						<div id="search">
							<input type="text" placeholder="search"/>
							<i class="fa fa-search"></i>
						</div>
					</div>
					<div class="col-xs-4 col-sm-8 top-panel-right">
						<ul class="nav navbar-nav pull-right panel-menu">
							<li class="hidden-xs">
								<a href="http://status.marconet.com/" target='_blank' class="modal-link">
									<i class="fa fa-bell"></i>
									<span class="badge">NOC</span>
								</a>
							</li>
							<li  class="hidden-xs>
								<a href="http://status.marconet.com/" target='_blank'>
									<span class="badge">NOC Server Status</span>
								</a>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle account" data-toggle="dropdown">
									<i class="fa fa-angle-down pull-right"></i>
									<div class="user-mini pull-right">
										<span class="welcome">Welcome,</span>
										<span><b><?php echo $_SESSION['user_name']; ?></b></span>
									</div>
								</a>
								<ul class="dropdown-menu">
										<a href="ajax/page_login.php?logout=true">
											<i class="fa fa-power-off"></i>
											<span>Logout</span>
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<!--Start Container-->
<div id="main" class="container-fluid">
	<div class="row">
		<div id="sidebar-left" class="col-xs-2 col-sm-2">
			<ul class="nav main-menu">
				<li>
					<a href="ajax/dashboard.php" class="active ajax-link">
						<i class="fa fa-dashboard"></i>
						<span class="hidden-xs">Main Dashboard</span>
					</a>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-bar-chart-o"></i>
						<span class="hidden-xs">System Stability</span>
					</a>
					<ul class="dropdown-menu">
											 <li>a< class="ajax-link" href="ajax/page_trending.php">Trending</a></li>
						<li><a class="ajax-link" href="ajax/charts_xcharts.html">Anti-Virus</a></li>
						<li><a class="ajax-link" href="ajax/charts_flot.html">Intrusions</a></li>
						<li><a class="ajax-link" href="ajax/charts_google.html">Disk Performance</a></li>
						<li><a class="ajax-link" href="ajax/charts_morris.html">Services</a></li>
						<li><a class="ajax-link" href="ajax/charts_morris.html">Updates</a></li>
						<li><a class="ajax-link" href="ajax/charts_morris.html">Events</a></li>
						<li><a class="ajax-link" href="ajax/charts_morris.html">Overall Score</a></li>
					</ul>
				</li>
				<?php
                                 $sql4 = "SELECT DISTINCT	`Team Assignment` 
FROM v_extradataclients WHERE `Team Assignment` != '' ORDER BY `Team Assignment` ASC";
                                 $result4 = mysqli_query($conn,$sql4);
								 if (mysqli_num_rows($result4) > 0 ){
								 ?>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-table"></i>
						 <span class="hidden-xs">Team Listings</span>
					</a>
					<ul class="dropdown-menu">
						<?php
                                while ($row = mysqli_fetch_array($result4)) {echo "<li><a class='ajax-link' href='ajax/page_teams.php?team=".$row['Team Assignment']."'>".$row["Team Assignment"]."</a></li>";}
                          ?>
					</ul>
				</li>
				<?php } ?>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-pencil-square-o"></i>
						 <span class="hidden-xs">Client Specialists</span>
					</a>
					<ul class="dropdown-menu">
                          <?php
                                 $sql4 = "SELECT DISTINCT `Client Specialist` AS client_spec FROM v_extradataclients WHERE `client specialist` != '' ORDER BY client_spec asc";
                                 $result4 = mysqli_query($conn,$sql4);
                                while ($row = mysqli_fetch_array($result4)) {echo "<li><a class='ajax-link' href=\'ns_score.php?net_sp='".$row['client_spec']."\'>".$row["client_spec"]."</a></li>";}
                          ?>
					</ul>
				</li>

			</ul>
		</div>
		<!--Start Content-->
		<div id="content" class="col-xs-12 col-sm-10">
			<div class="preloader">
				<img src="img/template_getdata.gif" class="template-getdata" alt="preloader"/>
			</div>
			<div id="ajax-content"></div>
		</div>
		<!--End Content-->
	</div>
</div>
<!--End Container-->

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="plugins/datatables/jquery.datatables.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.js"></script>
<script src="plugins/datatables/TableTools.js"></script>
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<script src="plugins/justified-gallery/jquery.justifiedgallery.min.js"></script>
<script src="plugins/tinymce/tinymce.min.js"></script>
<script src="plugins/tinymce/jquery.tinymce.min.js"></script>
<!-- All functions for this theme + document.ready processing -->
<script src="js/template.js"></script>
</body>
</html>
