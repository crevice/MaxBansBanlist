<?php
include("style.php");
include("db_config.php");
$result = mysql_query("SELECT `name`,`reason`,`banner`,`time`,`expires` FROM `bans` ORDER BY time DESC");
if($result != null){
//Table Header//
	echo "
	<table width=\"100%\">
	<tr bgcolor='#FFFFFF' style=\"font-weight:bold\">
		<td>Player name</td>
		<td>Reason</td>
		<td>Banner</td>
		<td>Ban Starts</td>
		<td>Ban Ends</td>
	</tr>";

	while($row = mysql_fetch_assoc($result)){
		//Convert Epoch Time to Standard format
		$date_start = date("M d Y / g:i", substr($row['time'],0,10));
		$date_end = date("M d Y / g:i", substr($row['expires'],0,10));
		//Check if ban is Permanent//
		if($row['expires'] == "0"){$date_end = "Permanent Ban";}
		//Table goes here//
		echo "
		<tr>
		<td>".$row['name']."</td>
		<td>".$row['reason']."</td>
		<td>".$row['banner']."</td>
		<td>$date_start</td>
		<td>$date_end</td>
		</tr>";
	}
	echo"</table>";
}
?>