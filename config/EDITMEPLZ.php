<?php


//EDIT ME PLEASE
//THEN RENAME ME TO dbconnect.php
//THANKS

$servername = "";
$username = "";
$password = "";
$dbname = "";

define("DB_HOST", "");
define("DB_NAME", "");
define("DB_USER", "");
define("DB_PASS", "");

//Edit this line please,  good WOEID to find your weather location ID
define("WOEID", "123456");
define("CITYSTATE", "New York, NY");

//Edit this line for your Lat/Longitude  for google maps
define("LAT", "125");
define("LON", "-125");

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>