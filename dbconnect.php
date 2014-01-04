<?php
$conn = mysql_connect("10.246.16.217","comica_li","YgGPiXbW");
if(!$conn)
{
die("Error");
}
$db = mysql_select_db("comica_li",$conn);


if (!$db) {
	die("Database selection failed: " . mysql_error());
}
?>
