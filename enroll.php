<?php
include('sql_conn.php');
$tid = $_GET["tid"];
$sid = $_GET["sid"];
mysql_select_db("ahacks", $conn);
	$query = "INSERT INTO subsciptions (tutee_id, totor_code, subscription_status) VALUES('$sid', '$tid', 1)";
	$result = mysql_query($query);
	if (!$result) {
		die("Error ".mysql_error());
	}else{
		header('Location: profilegrab.php?id='.$tid.'');
		exit;
	}

	$age = (2015-$bday_year);


include('about_search.php');
?>
