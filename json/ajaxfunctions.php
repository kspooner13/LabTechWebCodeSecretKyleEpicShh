<?php_egg_logo_guid

function getTeamTable() {



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
$sql = "SELECT  `CARE Team` as Team, ROUND(AVG(`Antivirus`),1) AS 'Antivirus', ROUND(AVG(`Disk`),1) AS 'Disk', ROUND(AVG(`Intrusion`),1) AS 'Intrusion', ROUND(AVG(`Usability`),1) AS 'Usability', ROUND(AVG(`Services`),1) AS 'Services', ROUND(AVG(`Updates`),1) AS 'Updates', ROUND(AVG(`Event Log`),1) AS 'Events', ROUND(((ROUND(AVG(`Antivirus`),1)+ROUND(AVG(`Disk`),1)+ROUND(AVG(`Intrusion`),1)+ROUND(AVG(`Usability`),1)+ROUND(AVG(`Services`),1)+ROUND(AVG(`Updates`),1)+ROUND(AVG(`Event Log`),1))/7),1) AS 'Overall Score' ";
$sql.=" FROM hc_scores GROUP BY `CARE Team`";
$query=mysqli_query($conn, $sql) or die("Team List - Failed Query");
$totalData = mysqli_num_rows($query);
$totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.



$query=mysqli_query($conn, $sql) or die("Team List - Failed Query");


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