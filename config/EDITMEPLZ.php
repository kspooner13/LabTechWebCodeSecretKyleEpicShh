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

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>