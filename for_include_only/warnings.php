<?php
include("style.php");
include("db_config.php");
$result = mysql_query("SELECT `name`,`reason`,`banner`,`expires` FROM `warnings` ORDER BY expires DESC") or die(mysql_error());
if($result != null){
//Table Header//
	echo "
	<table width=\"100%\">
	<tr bgcolor='#FFFFFF' style=\"font-weight:bold\">
		<td>Playername</td>
		<td>Reason</td>
		<td>Warner</td>
		<td>Warn Ends</td>
	</tr>";

	while($row = mysql_fetch_assoc($result)){
		//Convert Epoch Time to Standard format
		$date_end = date("M d Y / g:i", substr($row['expires'],0,10));
		//Table goes here//
		echo "
		<tr>
		<td>".$row['name']."</td>
		<td>".$row['reason']."</td>
		<td>".$row['banner']."</td>
		<td>$date_end</td>
		</tr>";
	}
	echo"</table>";
}
?>