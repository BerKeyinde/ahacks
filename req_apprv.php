<?php
session_start();
$subs_id = $_SESSION["subs_id"];
$apprv = 3;
	require('sql_conn.php');
	mysql_select_db("ahacks", $conn);

	$sql = "UPDATE subsciptions SET subscription_status = '$apprv' WHERE id = '$subs_id'";
	$result = mysql_query($sql);
	if (!$result) {
		die("ERROR! ".mysql_error());
	}else{
		header('Location: notifetch.php');
		exit;
	}
?>