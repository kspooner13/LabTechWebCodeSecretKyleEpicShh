<?php


include('../config/dbconnect.php');

// storing  request (ie, get/post) global array to a variable  
$requestData = $_REQUEST;


if ($_REQUEST['type'] === 'getData') {
	
$spec = urldecode($_REQUEST['spec']);
	
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

// getting total number records without any search
$sql = "SELECT `Client Name` as Client,
Antivirus,
`Disk`, 
Intrusion, 
Usability,
Services,
Updates,
`Event Log`,
ROUND(((`Antivirus`+`Disk`+`Intrusion`+`Usability`+`Services`+`Updates`+`Event Log`)/7),1) AS 'Overall Score' ";
$sql.=" FROM hc_scores as s JOIN v_extradataclients as V on v.clientid=s.clientid WHERE v.`Client Specialist` = '".$spec."'";
	
	
	if (isset($_REQUEST['order'][0]['column'])) {
	$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."  LIMIT ".$requestData['start']." ,".$requestData['length']."   "; }
$query=mysqli_query($conn, $sql) or die(mysqli_error());
$totalData = mysqli_num_rows($query);
$totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.



$query=mysqli_query($conn, $sql) or die("Team List - Failed Query");


$data = array();
while( $row=mysqli_fetch_array($query) ) {  // preparing an array
	$nestedData=array(); 

	$nestedData[] = $row["Client"];
	$nestedData[] = $row["Antivirus"];
	$nestedData[] = $row["Disk"];
	$nestedData[] = $row["Intrusion"];
	$nestedData[] = $row["Usability"];
	$nestedData[] = $row["Services"];
	$nestedData[] = $row["Updates"];
	$nestedData[] = $row["Event Log"];
	$nestedData[] = $row["Overall Score"];
	
	$data[] = $nestedData;
}



$json_data = array(
			"draw"            => intval( $requestData['draw'] ),   // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw. 
			"recordsTotal"    => intval( $totalData ),  // total number of records
			"recordsFiltered" => intval( $totalFiltered ), // total number of records after searching, if there is no searching then totalFiltered = totalData
			"data"            => $data   // total data array
			);
echo json_encode($json_data);  // send data as json format

}

if ($_REQUEST['type'] === 'getEx') {

$columns = array( 
// datatable column index  => database column name
	0 =>'Team',
	1 =>'Antivirus', 
	2 => 'Disk',
	3=> 'Intrusion',
	4=> 'Usability',
	5=> 'Services',
	6=> 'Updates',
	7=> 'Events',
	8=> 'Overall Score'
);

// getting total number records without any search
$sql = "SELECT         hc_scores.`Team Assignment` as Team,
                        ROUND(AVG(NULLIF(`AV Ex`,0)),1) AS 'Antivirus',
                        ROUND(AVG(NULLIF(`Disk Ex`,0)),1) AS 'Disk',
                        ROUND(AVG(NULLIF(`Intrusion Ex`,0)),1) AS 'Intrusion',
                        ROUND(AVG(NULLIF(`Usability Ex`,0)),1) AS 'Usability',
                        ROUND(AVG(NULLIF(`Services Ex`,0)),1) AS 'Services',
                        ROUND(AVG(NULLIF(`Updates Ex`,0)),1) AS 'Updates',
                        ROUND(AVG(NULLIF(`Event Ex`,0)),1) AS 'Events',
                        ROUND(((ROUND(AVG(NULLIF(`AV Ex`,0)),1)+ROUND(AVG(NULLIF(`Disk Ex`,0)),1)+ROUND(AVG(NULLIF(`Intrusion Ex`,0)),1)+ROUND(AVG(NULLIF(`Usability Ex`,0)),1)+ROUND(AVG(NULLIF(`Services Ex`,0)),1)+ROUND(AVG(NULLIF(`Updates Ex`,0)),1)+ROUND(AVG(NULLIF(`Event Ex`,0)),1))/7),1) AS 'Overall Score'
                 ";
$sql.=" FROM hc_scores JOIN v_extradataclients USING (clientid) WHERE v_extradataclients.`Exclude Reporting` <> 1  AND clientid NOT IN(SELECT clientid FROM `v_extradataclients` WHERE `v_extradataclients`.`Go Live Date` < DATE_ADD(NOW(), INTERVAL -1 MONTH) AND `v_extradataclients`.`Go Live Date` > 0) GROUP BY hc_scores.`Team Assignment`";
if (isset($_REQUEST['order'][0]['column'])) {
	$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."  LIMIT ".$requestData['start']." ,".$requestData['length']."   "; }
$query=mysqli_query($conn, $sql) or die("Exclusion List - Failed Query");
$totalData = mysqli_num_rows($query);
$totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.



$query=mysqli_query($conn, $sql) or die("Exclusion List - Failed Query");


$data = array();
while( $row=mysqli_fetch_array($query) ) {  // preparing an array
	$nestedData=array(); 

	$nestedData[] = $row["Team"];
	$nestedData[] = $row["Antivirus"];
	$nestedData[] = $row["Disk"];
	$nestedData[] = $row["Intrusion"];
	$nestedData[] = $row["Services"];
	$nestedData[] = $row["Updates"];
	$nestedData[] = $row["Events"];
	$nestedData[] = $row["Overall Score"];
	
	$data[] = $nestedData;
}



$json_data = array(
			"draw"            => intval( $requestData['draw'] ),   // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw. 
			"recordsTotal"    => intval( $totalData ),  // total number of records
			"recordsFiltered" => intval( $totalFiltered ), // total number of records after searching, if there is no searching then totalFiltered = totalData
			"data"            => $data   // total data array
			);
			
			
echo json_encode($json_data);  // send data as json format






}


if ($_REQUEST['type'] === 'getSpec') {


$columns = array( 
// datatable column index  => database column name
	0 =>'Specialist',
	1 =>'Antivirus', 
	2 => 'Disk',
	3=> 'Intrusion',
	4=> 'Usability',
	5=> 'Services',
	6=> 'Updates',
	7=> 'Events',
	8=> 'Overall Score'
);

// getting total number records without any search
$sql = "SELECT `Client Specialist` AS Specialist,
                        ROUND(AVG(NULLIF(`AV Ex`,0)),1) AS 'Antivirus',
                        ROUND(AVG(NULLIF(`Disk Ex`,0)),1) AS 'Disk',
                        ROUND(AVG(NULLIF(`Intrusion Ex`,0)),1) AS 'Intrusion',
                        ROUND(AVG(NULLIF(`Usability Ex`,0)),1) AS 'Usability',
                        ROUND(AVG(NULLIF(`Services Ex`,0)),1) AS 'Services',
                        ROUND(AVG(NULLIF(`Updates Ex`,0)),1) AS 'Updates',
                        ROUND(AVG(NULLIF(`Event Ex`,0)),1) AS 'Events',
                        ROUND(((ROUND(AVG(NULLIF(`AV Ex`,0)),1)+ROUND(AVG(NULLIF(`Disk Ex`,0)),1)+ROUND(AVG(NULLIF(`Intrusion Ex`,0)),1)+ROUND(AVG(NULLIF(`Usability Ex`,0)),1)+ROUND(AVG(NULLIF(`Services Ex`,0)),1)+ROUND(AVG(NULLIF(`Updates Ex`,0)),1)+ROUND(AVG(NULLIF(`Event Ex`,0)),1))/7),1) AS 'Overall Score'
                 ";
$sql.=" FROM hc_scores JOIN v_extradataclients USING (clientid) WHERE `Client Specialist` != 'None' GROUP BY `Client Specialist`";

	$query=mysqli_query($conn, $sql) or die("employee-grid-data.php: get employees");
	$totalData = mysqli_num_rows($query);
	$totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.
	
	if( !empty($requestData['search']['value']) ) {   // if there is a search parameter, $requestData['search']['value'] contains search parameter
		$searchString = "'" . str_replace(",", "','", $requestData['search']['value']) . "'"; //wrapping qoutation
		$sql.=" AND ( `Client Name` IN (".$searchString.") )";    	
	}
	$query=mysqli_query($conn, $sql) or die("Failed getting data from TeamPage|Error 2204");
	$totalFiltered = mysqli_num_rows($query); // when there is a search parameter then we have to modify total number filtered rows as per search result. e
	if (isset($_REQUEST['order'][0]['column'])) {
	$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."  LIMIT ".$requestData['start']." ,".$requestData['length']."   "; }
	/* $requestData['order'][0]['column'] contains colmun index, $requestData['order'][0]['dir'] contains order such as asc/desc  */	
	$query=mysqli_query($conn, $sql) or die("Team List - Failed Query");


$data = array();
while( $row=mysqli_fetch_array($query) ) {  // preparing an array
	$nestedData=array(); 

	$nestedData[] = $row["Specialist"];
	$nestedData[] = $row["Antivirus"];
	$nestedData[] = $row["Disk"];
	$nestedData[] = $row["Intrusion"];
	$nestedData[] = $row["Services"];
	$nestedData[] = $row["Updates"];
	$nestedData[] = $row["Events"];
	$nestedData[] = $row["Overall Score"];
	
	$data[] = $nestedData;
}



$json_data = array(
			"draw"            => intval( $requestData['draw'] ),   // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw. 
			"recordsTotal"    => intval( $totalData ),  // total number of records
			"recordsFiltered" => intval( $totalFiltered ), // total number of records after searching, if there is no searching then totalFiltered = totalData
			"data"            => $data   // total data array
			);
			
			
echo json_encode($json_data);  // send data as json format


}

?>




