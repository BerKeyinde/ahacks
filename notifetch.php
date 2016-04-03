 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>TUTOR.ME</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="1">
    <!-- Loading Bootstrap -->
    <link href="design/dist/css/vendor/bootstrap.min.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="design/dist/css/flat-ui.css" rel="stylesheet">

    <link rel="shortcut icon" href="design/dist/img/favicon.ico">
     <style>
      
    </style>
  </head>
  <body style="background-color: #EEEEEE;">
<?php
 session_start();
require('sql_conn.php');
if (!isset($_SESSION["uid"])) {
	header('Location: login.php');
	return(0);
}
$uid = $_SESSION["uid"];
	include('sql_conn.php');
	mysql_select_db("ahacks", $conn);

	$sql = "SELECT * FROM users WHERE username = '$uid'";
	$result = mysql_query($sql);
	$data = mysql_fetch_assoc($result);

	$uidprobe = $data["username"];
	if ($uidprobe == "") {
		header('Location: login.php');
		exit;
	}

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
  $gid = $data["id"];

	$age = (2015-$bday_year);
        	mysql_select_db("ahacks", $conn);
        	$uid = $_SESSION["uid"];
        	$sql = "SELECT * FROM subsciptions WHERE totor_code = '$gid'";
			$result = mysql_query($sql);
			while ($data = mysql_fetch_assoc($result)) {
				$subscr_id = $data["tutee_id"];
				$sub_stat = $data["subscription_status"];
				$subs_id = $data["id"];
					if ($sub_stat == 1) {
						mysql_select_db("ahacks", $conn);
						$sql2 = "SELECT * FROM users WHERE username = '$subscr_id'";
						$result2 = mysql_query($sql2);
						$data2 = mysql_fetch_assoc($result2);
							$fname = $data2["first_name"];
							$lname = $data2["last_name"];
							
							$_SESSION["subs_id"] = $subs_id;
							echo '<span class = "form-control"><a href="profilegrab.php?id='.$subs_id.'">'.$fname.' '.$lname.'</a> has requested to enroll on your subject. &nbsp;&nbsp;&nbsp; <a href = "req_apprv.php?id='.$subs_id.'" class="btn-xs btn-primary pull-righ">ACCEPT</a>
							&nbsp;&nbsp;&nbsp; <a href = "req_deny.php?id='.$subs_id.'" class="btn-xs btn-danger pull-righ">DECLINE</a></span>';
						
					}
			}
	
			

        ?>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="design/dist/js/vendor/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="design/dist/js/flat-ui.min.js"></script>

    <script src="design/docs/assets/js/application.js"></script>
    <script>

      var states = new Bloodhound({
        datumTokenizer: function(d) { return Bloodhound.tokenizers.whitespace(d.word); },
        queryTokenizer: Bloodhound.tokenizers.whitespace,
        limit: 4,
        local: [
          { word: "Alabama" },
          { word: "Alaska" },
          { word: "Arizona" },
          { word: "Arkansas" },
          { word: "California" },
          { word: "Colorado" }
        ]
      });

      states.initialize();

      $('input.tagsinput').tagsinput();

      $('input.tagsinput-typeahead').tagsinput('input').typeahead(null, {
        name: 'states',
        displayKey: 'word',
        source: states.ttAdapter()
      });

      $('input.typeahead-only').typeahead(null, {
        name: 'states',
        displayKey: 'word',
        source: states.ttAdapter()
      });

    </script>
    </body>
    </html>