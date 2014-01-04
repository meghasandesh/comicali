<?php
require_once('dbconnect.php');
$res = mysql_query('SELECT * FROM `comics`', $conn);
$comics = array();
//echo mysql_num_rows($res);
if($res) {
	while($row = mysql_fetch_assoc($res)) {
		$comics[] = $row;
	}
	echo json_encode($comics);
}
?>