<?php
$conn = mysql_connect("localhost", "root", "q#mcnl254");
if (!$conn) {
	die("DB Conn Error".mysql_error());
}
mysql_select_db("ahacks", $con);
?>