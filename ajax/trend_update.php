<!DOCTYPE html>
<html>
<head><title>Marco Managed Health Scores | Updates Trending</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<center><img src="logo2.png"></img>
<br><i>*Scores are Updated Daily.</i>

<?php
 $client = $_GET["client"];
 $exclusions = $_GET["exclusions"];

// Create connection
include 'dbconnect2.php';

$field="`Client Name`";
$sort="ASC";
if(isset($_GET["sorting"]))
{
  if($_GET["sorting"]=="ASC")
  {
  $sort="DESC";
  }
  else
  {
    $sort="ASC";
  }
}
if($_GET["field"]=="Client Name")
{
   $field = "`Client Name`"; 
}
elseif($_GET["field"]=="CARE Team")
{
   $field = "`CARE Team`";
}
elseif($_GET["field"]=="Previous Date")
{
   $field="`Previous Date`";
}
elseif($_GET["field"]=="Latest Date")
{
   $field="`Latest Date`";
}
elseif($_GET["field"]=="Previous Score")
{
   $field="`Previous Score`";
}
elseif($_GET["field"]=="Percent Change")
{
   $field="`Percent Change`";
}


	$sql = "SELECT x.`Client Name`, x.`CARE Team`, y.checkdate 'Previous Date', x.checkdate 'Latest Date', y.updates 'Previous Score', x.updates 'Latest Score', ROUND((((x.updates - y.updates)/100)*100),2) 'Percent Change'
  FROM hc_scores_weekly X
  JOIN hc_scores_weekly Y ON (y.clientid=x.clientid)
    WHERE x.checkdate = (SELECT MAX(checkdate) FROM hc_scores_weekly)
    GROUP BY x.clientid ORDER BY {$field} {$sort}";

	$result = mysql_query($sql);

    echo "<p><hr align=center width=75%><p><h2><b>Updates Trending</b></h2>
	<P><a href=\"index.php\">Home</a> | <a href=\"javascript:history.back(1);\">Back</a>
	  <table class=TBscore>
	    <tr>
		  <th width=300 class=names><a href=\"trend_update.php?client={$client}&sorting=".$sort."&field=Client Name\">Client Name</a></th>
		  <th class=stats><a href=\"trend_update.php?client={$client}&exclusions=true&sorting=".$sort."&field=CARE Team\">CARE Team</a></th>
		  <th class=stats width=200><a href=\"trend_update.php?client={$client}&exclusions=true&sorting=".$sort."&field=Previous Date\">Previous Date</a></th>
		  <th class=stats width=200><a href=\"trend_update.php?client={$client}&exclusions=true&sorting=".$sort."&field=Latest Date\">Latest Date</a></th>
		  <th class=stats><a href=\"trend_update.php?client={$client}&exclusions=true&sorting=".$sort."&field=Previous Score\">Previous Score</a></th>
		  <th class=stats><a href=\"trend_update.php?client={$client}&exclusions=true&sorting=".$sort."&field=Latest Score\">Latest Score</a></th>
		  <th class=stats><a href=\"trend_update.php?client={$client}&exclusions=true&sorting=".$sort."&field=Percent Change\">Percent Change</a></th>
		 </tr>";
	 
    // output data of each row
	while($row = mysql_fetch_array($result)) {
        echo "<tr align=center>
			<td class=names><a href=\"client_score.php?client=".$row["Client Name"]."\">".$row["Client Name"]."</td>
			<td class=stats>".$row["CARE Team"]."</td>
			<td class=stats>".$row["Previous Date"]."</td>
			<td class=stats>".$row["Latest Date"]."</td>
			<td class=stats>".$row["Previous Score"]."</td>
			<td class=stats>".$row["Latest Score"]."</td>
			<td class=stats>".$row["Percent Change"]."%</td>
		</tr>";
    }
    echo "</table>";
?><br>
<a href="index.php">Home</a> | <a href='javascript:history.back(1);'>Back</a></center>
</body></html>
