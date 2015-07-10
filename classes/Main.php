<?php
class Main {
 	
	
 
    function __construct() {
	
	
    }
 
    function __destruct() {
       
    }
 
    public function loadModules() {
	
		$module = array();
		
		$mod_count = count($module);
		
		
		
		}
	private function getSpecs(){
	
		$database = new Database();
		
		$sql4 = "SELECT DISTINCT `Client Specialist` AS client_spec FROM v_extradataclients WHERE `client specialist` != '' ORDER BY client_spec asc";
	}
	public function loadPage($name) {
	
	include('pages/' .$name .'.php');
	
	}
	
	public function buildTemplate($type) {
	
	
		if ($type === 'head') {
		
		echo "<html lang='en'>
					<head>
					  <meta charset='utf-8'>
					  <meta name='viewport' content='width=device-width, initial-scale=1.0'>

					  <title>";
					  echo APP_TITLE; 
					  
					  echo "</title>

					  <link rel='stylesheet' type='text/css' href='plugins/bootstrap/bootstrap.css'>
					  <link rel='stylesheet' type='text/css' href='css/font-awesome.min.css'>
					  <link rel='stylesheet' type='text/css' href='css/weather/weather-icons.min.css'>

					  <link rel='stylesheet' type='text/css' href='css/menu-effects.css'>

					  <!-- Google Fonts -->

					  <!--[if lt IE 9]>
					  <script src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js'></script>
					  <script src='https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js'></script>
					  <![endif]-->

					  <!-- Assets -->
					  <link rel='stylesheet' type='text/css' href='plugins/jquery-ui/jquery-ui-1.10.3.custom.css' />
					  
					  <link rel='stylesheet' type='text/css' href='plugins/fullcalendar/fullcalendar.css' />
					  <link rel='stylesheet' type='text/css' href='plugins/datatables/jquery.datatables.css' />
					  <link rel='stylesheet' type='text/css' href='plugins/icheck/_all.css' />

					  <!-- Theme Styles -->
					  <link rel='stylesheet' type='text/css' href='css/styles-less.css'>
					  <link rel='stylesheet' type='text/css' href='css/responsive.css'>
					  <link rel='stylesheet' type='text/css' href='css/animate.css'>
					  <link rel='stylesheet' type='text/css' href='css/demo.css'>

					  <!--[if lte IE 8]><script language='javascript' type='text/javascript' src='assets/flotcharts/excanvas.min.js'></script><![endif]-->

					  <!-- Google Maps -->
					  <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=true'></script>

					  <link rel='shortcut icon' href='favicon.ico' type='image/png'>
					  <link rel='shortcut icon' type='image/png' href='favicon.ico' />

					</head>
		
		";
		}
		if ($type === 'nav') {
		
		echo "
		
		
	 <!-- Sidebar Start -->
				  <div class='sidebar'>

				  <!-- Logo Start -->
				  <a href='index.php'>
					<div class='logo-container' id='step1'>
					  <img src='img/testimg.png' width='225'>
					</div>
				  </a>
				  <!-- Logo End -->

				  <!-- Sidebar User Profile Start -->
				  <div class='sidebar-profile'>
					<div class='user-avatar'>
					<i class='fa fa-user fa-4x'></i>
					</div>
					<div class='user-info'>
					 <a href='#'> Mr. Lab Tech </a>
					</div>
				  </div>

				  <div class='responsive-menu'>
					<a href='#'><i class='fa fa-bars'></i></a>
				  </div>
				  <!-- Sidebar User Profile End -->

				  <!-- Menu Start -->
				  	<ul class='menu' style='text-align: center; font: #fff;'>
					<li><span class='menu-ucon'></span>
					<a href='#'><span class='menu-text'>Core</span></a>
					</li>
					</ul>
				  <ul class='menu'>
					<li class='lightblue'>
					  <a href='index.php'>
						<span class='menu-icon'><i class='fa fa-home'></i></span>
						<span class='menu-text'>Dashboard</span>
					  </a>
					</li>
					<li class='parent purple'>
					  <a href=''>
						<span class='menu-icon'><i class='fa fa-desktop'></i></span>
						<span class='menu-text'>Computer</span>
				<span class='notification'>new</span>
					  </a>
					  <ul class='child'>
						<li>
						  <a href='#'>Computer Listings</a>
						</li>
					  </ul>
					</li>
					<li class='orange'>
					  <a href='#'>
						<span class='menu-icon'><i class='fa fa-css3'></i></span>
						<span class='menu-text'>Systems</span>
						<span class='notification lightgreen'>62</span>
					  </a>
					</li>
					<li class='parent lightred'>
					  <a href='#'>
						<span class='menu-icon'><i class='fa fa-windows'></i></span>
						<span class='menu-text'>Tickets</span>
					  </a>
					  <ul class='child'>
						<li>
						  <a href='#'>Coming Soon Page</a>
						</li>
					  </ul>
					</li>
					<li class='parent lightyellow'>
					  <a href='support.html'>
						<span class='menu-icon'><i class='fa fa-users'></i></span>
						<span class='menu-text'>Support Center</span>
					  </a>
					  <ul class='child'>
						<li>
						  <a href='index.php?page=tickets'>Ticket Archive</a>
						</li>
						<li>
						  <a href='tickets.php'>Ticket Response</a>
						</li>
					  </ul>
					</li>
					</ul>
					<ul class='menu' style='text-align: center; font: #fff;'>
					<li><span class='menu-ucon'></span>
					<a href='#'><span class='menu-text'>Modules</span></a>
					</li>
					</ul>
					<ul class='menu'>
					<li class='parent green'>
					  <a href=''>
						<span class='menu-icon'><i class='fa fa-rocket'></i></span>
						<span class='menu-text'>Health Check</span>
					  </a>
					  <ul class='child'>
					  <li><a href='index.php?page=teams'>Module Home</a></li>
					  ";
					  $db = new Database(DB_HOST, DB_USER, DB_PASS, DB_NAME);
					  
					  $sql4 = "SELECT DISTINCT `Client Specialist` AS client_spec FROM v_extradataclients WHERE `client specialist` != '' ORDER BY client_spec asc";
					  
					  $return = $db->query($sql4);
					  while ($row = $db->fetch_array($return)) {
							$encode = urlencode($row['client_spec']);
							echo "<li><a href='#'>".$row['client_spec']."</a></li>";
							}
		 echo"
					</ul>
					</li>
						<li class='parent green'>
						  <a href=''>
							<span class='menu-icon'><i class='fa fa-rocket'></i></span>
							<span class='menu-text'>System Stability</span>
						  </a>
						  <ul class='child'>
						<li><a href=>Trending</a></li>
						<li><a  href=>Anti-Virus</a></li>
						<li><a  href=>Intrusions</a></li>
						<li><a  href=>Disk Performance</a></li>
						<li><a href=>Services</a></li>
						<li><a href=>Updates</a></li>
						<li><a href=>Events</a></li>
						<li><a href=>Overall Score</a></li>
						</ul>
						</li>
				  </ul>
				  <!-- Menu End -->

				</div>
				  <!-- Sidebar End -->
		
		
		";
		}
		
		if ($type === 'footer') {
		
		
		echo "
		
		<!-- Javascript -->
<script src='plugins/jquery/jquery-2.1.0.min.js'></script>
<script src='plugins/jquery-ui/jquery-ui.min.js'></script>

<script src='plugins/sidebar/min-height.js'></script>

<!-- Custom Scroll Bar -->
<script src='plugins/nicescroll/jquery.nicescroll.min.js'></script>

<script src='plugins/bootstrap/bootstrap.min.js'></script>


<script src='js/table-to-chart.js'></script>
<script src='plugins/fullcalendar/fullcalendar.min.js'></script>
<script src='plugins/fullcalendar/gcal.js'></script>
<script src='plugins/sidebar/min-height.js'></script>

<!-- DataTables -->
<script src='plugins/datatables/jquery.dataTables.js'></script>

<!-- Morris Charts -->
<script src='plugins/morrischarts/raphael.js'></script>
<script src='plugins/morrischarts/morris.js'></script>

<!-- iCheck -->
<script src='plugins/icheck/icheck.js'></script>

<!-- CountTo -->
<script src='js/jquery.count-to.js'></script>

<!--- Weather -->
<script src='js/jquery.simpleWeather.js'></script>

<!-- FlotCharts  -->
<script src='plugins/flotcharts/flotcharts-common.js'></script>
<script src='plugins/flotcharts/jquery.flot.min.js'></script>
<script src='plugins/flotcharts/jquery.flot.resize.min.js'></script>
<script src='plugins/flotcharts/jquery.flot.canvas.min.js'></script>
<script src='plugins/flotcharts/jquery.flot.image.min.js'></script>
<script src='plugins/flotcharts/jquery.flot.categories.min.js'></script>
<script src='plugins/flotcharts/jquery.flot.crosshair.min.js'></script>
<script src='plugins/flotcharts/jquery.flot.errorbars.min.js'></script>
<script src='plugins/flotcharts/jquery.flot.fillbetween.min.js'></script>
<script src='plugins/flotcharts/jquery.flot.navigate.min.js'></script>
<script src='plugins/flotcharts/jquery.flot.pie.min.js'></script>
<script src='plugins/flotcharts/jquery.flot.selection.min.js'></script>
<script src='plugins/flotcharts/jquery.flot.stack.min.js'></script>
<script src='plugins/flotcharts/jquery.flot.symbol.min.js'></script>
<script src='plugins/flotcharts/jquery.flot.threshold.min.js'></script>
<script src='plugins/flotcharts/jquery.colorhelpers.min.js'></script>
<script src='plugins/flotcharts/jquery.flot.time.min.js'></script>

<!--- Demo --->
<script src='js/icheck.js'></script>
<script src='js/dashboard.js'></script>
<script src='js/all-pages.js'></script>
<script src='js/page-index.js'></script>



		
		";
		
		
		
		
		}
		
			
		
	
	
	}
		
		
	
	
	
	
	
	
 
}
?>