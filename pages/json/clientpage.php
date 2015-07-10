<?php


include('../config/dbconnect.php');

// storing  request (ie, get/post) global array to a variable  
$requestData = $_REQUEST;

if ($_REQUEST['type'] === 'getData') {

	$excl = $_REQUEST['excl'];
	$team = urldecode($_REQUEST['team']);
	$columns = array( 
	// datatable column index  => database column name
		0 => 'Computer Name',
		1 => 'Status',
		2 => 'Antivirus', 
		3 => 'Disk',
		4 => 'Intrusion',
		5 => 'Usability',
		6 => 'Services',
		7 => 'Updates',
		8 => 'Event Log',
		9 => 'Overall Score'
	);

	$sql = "SELECT 	computerid, `Computer Name`,IF((computers.lastcontact > DATE_ADD(NOW(),INTERVAL -10 MINUTE)), 'Online','Offline') AS 'Status',
	`AV Ex` AS 'Antivirus',
	`Disk Ex` AS 'Disk',
	`Intrusion Ex` AS 'Intrusion',
	`Usability Ex` AS 'Usability',
	`Services Ex` AS 'Services',
	`updates ex` AS 'Updates',
	`Event Ex` AS 'Events',
	ROUND(((`AV Ex`+`Disk Ex`+`Intrusion Ex`+`Usability Ex`+`Services Ex`+`Updates Ex`+`Event Ex`)/7),1) AS 'Overall Score' ";
	$sql.=" FROM hc_scores_computers JOIN v_extradataclients USING (clientid) LEFT JOIN computers USING (computerid) WHERE v_extradataclients.`Exclude Reporting` <> 1";
	$sql.="AND `Client Name` LIKE"
	$query=mysqli_query($conn, $sql) or die("Error getting clients.");
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




