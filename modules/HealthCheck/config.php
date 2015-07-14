<?php

//This is the config file for the modules system.  It is REQUIRED
// to work properly.  You may alter anything inside this and it 
// will only affect the module itself.  It can break it, and the 
// main system depending on what you did.

//don't touch//

//include("$_SERVER[DOCUMENT_ROOT]/lt/classes/Database.php");

##
##Links
##

/*********

You need links to work.  We provide you with a link (home.php) for the main page of your module
Here you can specifiy how we get the rest of your module, if you want it.
If you do not need to create "child links" then you may set the define below to false.

*********/


define('MOD_USE_CHILD_LINKS', 'TRUE');




/***********

So you have two options for links in this module.  You can manually write out where the pages are 
located, or you can dynamically assign them.  If you choose the dynamic route (demo below), 
be mindful that spaces are not your friend.  When you pull the infomation from SQL, you will have
to make sure the information contains no spaces, otherwise you will have to encode and then decode
the information properly.  Lucky you that this is the exact system below.

***********/

//Here you can define your own special icon!  Look up icons for Font Awesome to see the options.  
//make sure you spell it correctly!
$icon_type = 'fa-rocket';



function create_menu() {

//first we need to define and access the database class, you can leave this alone

$menuDb = new Database(DB_HOST, DB_USER, DB_PASS, DB_NAME);

//This is our SQL code, for this demo, it outputs each "specialist" in its true from (including spaces).
$sql4 = "SELECT DISTINCT `Client Specialist` AS client_spec FROM v_extradataclients WHERE `client specialist` != '' ORDER BY client_spec asc";

//This command runs the query against the database
$return = $menuDb->query($sql4);

//Below is the loop.  HIGHLY IMPORTANT  
//Top line runs through an array of the query we just ran, so we can output it correctly.
	while ($row = $menuDb->fetch_array($return)) {
	//THIS LINE
	//IS FOR SPACING IN THE RESULT
	
	//IE This takes non-usable words and makes them URL capable. 
		$encode = urlencode($row['client_spec']);
		
		
		//The line below creates the link itself.  Since this is difficult to arrange, please don't change the most of the link...
		
		echo "<li><a href='/pages/".$encode.".php'>".$row['client_spec']."</a></li>";
	





}

//echo "<li><a>WHAT?!?!</a></li>";

}



?>