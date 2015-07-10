<?php

//home.php  mainpage

$dbclass = new Database(DB_HOST, DB_USER, DB_PASS, DB_NAME);
?>

<div class='content-liquid-full'>
<div class='container'>

 <!-- Header Bar Start -->
  <div class='row header-bar' id='step2'>

  </div>
  <!-- Header Bar End -->

  <!-- Breadcrumbs Start -->
  <div class='row breadcrumbs'>
    <div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
      <ul class='breadcrumbs'>
        <li><a href='#'><i class='fa fa-home'></i></a></li>
        <li><a href='#'>Dashboard</a></li>
      </ul>
    </div>
  </div>
  <!-- Breadcrumbs End -->
<!-- Row Start -->
<div class='row'>

<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>

  <!-- Row Start -->
  <div class='row'>

    <div class='col-xs-12 col-sm-6 col-md-4 col-lg-2'>

      <!-- Social Box - Facebook -->
      <div class='social-box facebook'>

        <div class='icon-container'>
          <div class='inner'>
            <i class='fa fa-desktop'></i>
          </div>
        </div>

        <div class='text-container'>
          <div class='inner'>
            <span>1,594</span> Computers
          </div>
        </div>
      </div>
      <!-- Social Box - Facebook End -->

    </div>
    <div class='col-xs-12 col-sm-6 col-md-4 col-lg-2'>

      <!-- Social Box - Twitter -->
      <div class='social-box twitter'>

        <div class='icon-container'>
          <div class='inner'>
            <i class='fa fa-server'></i>
          </div>
        </div>

        <div class='text-container'>
          <div class='inner'>
            <span>3,120</span> Servers
          </div>
        </div>
      </div>
      <!-- Social Box - Twitter End -->

    </div>
    <div class='col-xs-12 col-sm-6 col-md-4 col-lg-2'>

      <!-- Social Box - Dribble -->
      <div class='social-box dribbble'>

        <div class='icon-container'>
          <div class='inner'>
            <i class='fa fa-user-secret'></i>
          </div>
        </div>

        <div class='text-container'>
          <div class='inner'>
            <span>180</span> Specialists
          </div>
        </div>
      </div>
      <!-- Social Box - Dribble End -->

    </div>
    <div class='col-xs-12 col-sm-6 col-md-4 col-lg-2'>

      <!-- Social Box - Projects -->
      <div class='social-box projects'>

        <div class='icon-container'>
          <div class='inner'>
            <i class='fa fa-rocket'></i>
          </div>
        </div>

        <div class='text-container'>
          <div class='inner'>
            <span>102</span> Projects
          </div>
        </div>
      </div>
      <!-- Social Box - Projects End -->

    </div>
    <div class='col-xs-12 col-sm-6 col-md-4 col-lg-2'>

      <!-- Social Box - Projects -->
      <div class='social-box tasks'>

        <div class='icon-container'>
          <div class='inner'>
            <i class='fa fa-bars'></i>
          </div>
        </div>

        <div class='text-container'>
          <div class='inner'>
            <span>84</span> Open Tickets
          </div>
        </div>
      </div>
      <!-- Social Box - Projects End -->

    </div>
    <div class='col-xs-12 col-sm-6 col-md-4 col-lg-2'>

      <!-- Social Box - Projects -->
      <div class='social-box posts'>

        <div class='icon-container'>
          <div class='inner'>
            <i class='fa fa-code-fork'></i>
          </div>
        </div>

        <div class='text-container'>
          <div class='inner'>
            <span>645</span> Scripts
          </div>
        </div>
      </div>
      <!-- Social Box - Projects End -->

    </div>

  </div>
  <!-- Row End -->

</div>

<div class='col-xs-12 col-sm-12 col-md-8 col-lg-8'>

<div class='row' id='step4'>

<!-- Revenue Chart Start -->
<div class='col-xs-12 col-sm-12 col-md-12 col-lg-6'>


  <div class='box no-padding whos-online'>
    <div class='inner'>

      <!-- Weather Start -->
      <!-- Title Bar Start -->
      <div class='title-bar'>
        <i class='fa fa-cloud fa-2x'></i>Current Weather
     
      </div>

		<div class='box whos-online' id='weather'>
		</div>

     
      <!-- Weather End -->

    </div>
  </div>

</div>
<!-- Revenue Chart End -->

<!-- Week Sales Chart Start -->
<div class='col-xs-12 col-sm-12 col-md-12 col-lg-6'>


  <!-- Google Maps Start -->
  <div class='boxed no-padding'>
    <div class='inner'>

      <!-- Title Bart Start -->
      <div class='title-bar white'>
        <h4>Custom Google Maps</h4>
      </div>
      <!-- Title Bart End -->

      <div class='google-maps-container'>
        <div id='map-canvas-4'></div>
      </div>
      <!-- Google Maps Example End -->

    </div>
  </div>
  <!-- Google Maps End -->

</div>
</div>

<!-- Row Start -->
<!---  Row Below Weather/Map App -->
<div class='row'>

   <div class='col-xs-14 col-sm-14 col-md-14 col-lg-12'>
    <div class='box calendar'>

      <!-- Title Bar Start -->
      <div class='title-bar'><i class='fa fa-calendar'></i>Calendar Widget</div>
      <!-- Title Bar End -->

      <div class='calendar-widget'></div>

    </div>
  </div>

</div>

</div>

<!-- Right Sidebar Start -->
<div class='col-xs-12 col-sm-12 col-md-4 col-lg-4'>
<div class='row'>

  <div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>

	<div class='box tasks'>

      <!-- Title Bar Start -->
      <div class='title-bar'>
        <i class='fa fa-user'></i>Open Tasks
        <div class='close-box'>
          <a href='#'><i class='fa fa-times-circle-o'></i></a>
        </div>
      </div>
      <!-- Title Bar End -->

      <!-- Stats List Start -->
      <ul>
        <li>Meeting with developers <span>Created Jan 7th, 2014</span></li>
        <li>Cooming soon page for Envato <span>Created Jan 8th, 2014</span></li>
        <li>Admin Template Custom Widgets <span>Created Jan 12th, 2014</span></li>
      </ul>
      <!-- Stats List End -->

    </div>

  </div>

  <div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>

 <div class='box whos-online'>

      <!-- Title Bar Start -->
      <div class='title-bar'>
        <i class='fa fa-user'></i>Who's Online
      </div>
      <!-- Title Bar End -->

      <!-- Who's Online List Start -->
      <ul>
	          <?php  
		// LETS MAKE SOME THINGS HAPPEN BABY!
		// 
		$getUsers = "SELECT `name` as user FROM users WHERE `name` NOT IN ('root', 'zAdmin', 'admin', 'GHD', 'LT_Frontend', 'LabTechTech', 'asp_LabTech', 'event_scheduler')";
		$gotUsers = $dbclass->query($getUsers);
		
		while ($userlist = $dbclass->fetch_array($gotUsers)){ 
			
			$loggedsql = " SELECT DISTINCT(USER) as `user` FROM INFORMATION_SCHEMA.PROCESSLIST WHERE USER = '".$userlist['user']."' ";
			$info = $dbclass->query($loggedsql);
			$num_row = $dbclass->num_rows($info);
			if ($num_row > 0) {
			$status = 'online';
			}
			else {
			$status = 'offline';
			}
			
			echo "<li><span class='username'>".$userlist['user']."</span>";
			echo "<span class='status ".$status."'>&nbsp;</span></li>";
			
		}
		?>
        <li>

          <span class='username'>The Goat</span>
          <span class='status online'>&nbsp;</span>
        </li>
 
      </ul>
      <!-- Who's Online List End -->

    </div>

  </div>
 



  </div>



</div>
</div>
<!-- Right Sidebar End -->


</div>
<!-- Row End -->

<!-- Footer Line Start -->
<div class='footer-line'>
  &#169; All rights reserved by EPiCenter (Kyle Spooner / Brandon Zylka)
</div>

</div>
</div>

</section>

<script>
/*** Google Maps ***/
var map4;
function initialize4() {
  var mapOptions4 = {
    zoom: 10,
    center: new google.maps.LatLng(<?php echo LAT; ?>, <?php echo LON; ?>),
    styles: [
      {
        "featureType": "water",
        "stylers": [
          {
            "color": "#46bcec"
          },
          {
            "visibility": "on"
          }
        ]
      },
      {
        "featureType": "landscape",
        "stylers": [
          {
            "color": "#f2f2f2"
          }
        ]
      },
      {
        "featureType": "road",
        "stylers": [
          {
            "saturation": -100
          },
          {
            "lightness": 45
          }
        ]
      },
      {
        "featureType": "road.highway",
        "stylers": [
          {
            "visibility": "simplified"
          }
        ]
      },
      {
        "featureType": "road.arterial",
        "elementType": "labels.icon",
        "stylers": [
          {
            "visibility": "off"
          }
        ]
      },
      {
        "featureType": "administrative",
        "elementType": "labels.text.fill",
        "stylers": [
          {
            "color": "#444444"
          }
        ]
      },
      {
        "featureType": "transit",
        "stylers": [
          {
            "visibility": "off"
          }
        ]
      },
      {
        "featureType": "poi",
        "stylers": [
          {
            "visibility": "off"
          }
        ]
      }
    ]
  };
  map4 = new google.maps.Map(document.getElementById('map-canvas-4'), mapOptions4);
    var trafficLayer = new google.maps.TrafficLayer();
  trafficLayer.setMap(map4);
}

google.maps.event.addDomListener(window, 'load', initialize4);
</script>