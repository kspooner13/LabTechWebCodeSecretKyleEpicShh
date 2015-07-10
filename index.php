
<?php

/************************************************************
Module framework for EPiCenter 'Epic' codebase.

Name: Index.php
Function: Command and control the template layout and settings
and autoload the classes




************************************************************/

spl_autoload_register('autoloader');
require('/config/dbconnect.php');

function autoloader($classname) {

include_once '/classes/' . $classname . '.php';


}

$dbclass = new Database(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$mainClass = new Main();
$login = new Login();

define('USE_LOGIN', 'YES');

if (USE_LOGIN === 'YES' ){

		if ($login->isUserLoggedIn() == false) {

		header('location: pages/login.php');

		}
}


?>



<body>



<?php $mainClass->buildTemplate('head'); ?>


<section class='content'>


<?php $mainClass->buildTemplate('nav'); ?>
 
 
 
 
 <?php
 
 
 if (empty($_REQUEST['page'])) {
 
 $mainClass->loadPage('home');
 
 }
 else {
 
 $mainClass->loadPage($_REQUEST['page']);
 }
 
 ?>

 


<?php $mainClass->buildTemplate('footer'); ?>




<script>
$(document).ready(function() {
  $.simpleWeather({
    location: 'Greenville, SC',
    woeid: '2414583',
    unit: 'f',
    success: function(weather) {
      html = '<h2><i class="icon-'+weather.code+'"></i> '+weather.temp+'&deg;'+weather.units.temp+'</h2>';
      html += '<ul><li>'+weather.city+', '+weather.region+'</li>';
      html += '<li class="currently">'+weather.currently+'</li>';
      html += '<li>'+weather.wind.direction+' '+weather.wind.speed+' '+weather.units.speed+'</li></ul>';
  
      $("#weather").html(html);
    },
    error: function(error) {
      $("#weather").html('<p>'+error+'</p>');
    }
  });
});


</script>
</body>
</html>