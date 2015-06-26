<?php


include('../config/dbconnect.php');

// storing  request (ie, get/post) global array to a variable  
$requestData = $_REQUEST;

if ($_REQUEST['type'] === 'getTeamData') {

	$team = $_REQUEST['team'];
	$columns = array( 
	// datatable column index  => database column name
		0 => 'Client',
		1 => 'Antivirus', 
		2 => 'Disk',
		3 => 'Intrusion',
		4 => 'Usability',
		5 => 'Services',
		6 => 'Updates',
		7 => 'Event Log',
		8 => 'Overall Score'
	);

	$sql = "SELECT 	`Client Name` as Client, 
	`Antivirus`, 
	`Disk`, 
	`Intrusion`, 
	`Usability`, 
	`Services`, 
	`Updates`, 
	`Event Log`, 
	ROUND(((`Antivirus`+`Disk`+`Intrusion`+`Usability`+`Services`+`Updates`+`Event Log`)/7),1) AS 'Overall Score' ";
	$sql.=" FROM hc_scores WHERE `Team Assignment` = '".$team."'";
	
	$query=mysqli_query($conn, $sql) or die("employee-grid-data.php: get employees");
	$totalData = mysqli_num_rows($query);
	$totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.
	
	if( !empty($requestData['search']['value']) ) {   // if there is a search parameter, $requestData['search']['value'] contains search parameter
		$searchString = "'" . str_replace(",", "','", $requestData['search']['value']) . "'"; //wrapping qoutation
		$sql.=" AND ( `Client Name` IN (".$searchString.") ";    
		$sql.=" OR DISK < (".$searchString.")  )";
	
	$query=mysqli_query($conn, $sql) or die("Failed getting data from TeamPage|Error 2204");
	$totalFiltered = mysqli_num_rows($query); // when there is a search parameter then we have to modify total number filtered rows as per search result. 
	$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."  LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
	/* $requestData['order'][0]['column'] contains colmun index, $requestData['order'][0]['dir'] contains order such as asc/desc  */	}
	$query=mysqli_query($conn, $sql) or die("Team List - Failed Query");


	$data = array();
	while( $row=mysqli_fetch_array($query) ) {  // preparing an array
		$nestedData=array(); 

		$nestedData[] = $row["Client"];
		$nestedData[] = $row["Antivirus"];
		$nestedData[] = $row["Disk"];
		$nestedData[] = $row["Intrusion"];
		$nestedData[] = $row['Usability'];
		$nestedData[] = $row["Services"];
		$nestedData[] = $row["Updates"];
		$nestedData[] = $row["Event Log"];
		$nestedData[] = $row["Overall Score"];
		
		$data[] = $nestedData;
	}



	$json_data = array(
				"recordsTotal"    => intval( $totalData ),  // total number of records
				"recordsFiltered" => intval( $totalFiltered ), // total number of records after searching, if there is no searching then totalFiltered = totalData
				"data"            => $data   // total data array
				);
	echo json_encode($json_data);  // send data as json format

}


?>




