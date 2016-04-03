<?php
session_start();
include('sql_conn.php');
$tId = $_GET["id"];
$sid = $_SESSION["uid"];
mysql_select_db("ahacks", $conn);
	$query = "SELECT * FROM users WHERE id = '$tId'";
	$result = mysql_query($query);
	$data = mysql_fetch_assoc($result);
	$last_name = $data["last_name"];
	$first_name = $data["first_name"];
	$email = $data["email"];
	$bday_month = $data["bday_month"];
	$bday_day = $data["bday_day"];
	$bday_year = $data["bday_year"];
	$contact = $data["contact_number"];
	$skill_tags = $data["skill_tags"];
	$account_type = $data["account_type"];
	$residential_address = $data["residential_address"];
	$qws = $data["username"];
	$_SESSION["qws"] = $qws;

	$query2 = "SELECT * FROM users WHERE username = '$sid'";
	$result2 = mysql_query($query2);
	$data2 = mysql_fetch_assoc($result2);

	$spxid = $data2["username"];


	$age = (2015-$bday_year);



include('about_search.php');
?>
