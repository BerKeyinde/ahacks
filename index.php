<?php
session_start();
require('sql_conn.php');
if (!isset($_SESSION["uid"])) {
	header('Location: login.php');
	return(0);
}
//Information Update
$uid = $_SESSION["uid"];
if (isset($_POST["update_info"])) {
	$upd_email = $_POST["email"];
	$upd_contact = $_POST["contact"];
	$upd_address = $_POST["address"];
	$upd_bmonth = $_POST["bday_month"];
	$upd_bday = $_POST["bday_day"];
	$upd_byear = $_POST["bday_year"];
	


	mysql_select_db("ahacks", $conn);
	$sql = "UPDATE users SET 
	email = '$upd_email', contact_number = '$upd_contact', residential_address = '$upd_address', bday_month = '$upd_bmonth', bday_day = '$upd_bday', bday_year = '$upd_byear' 
	WHERE username = '$uid'";
	$result = mysql_query($sql);
	if (!$result) {
		die("Error ".mysql_error());
	}else{
		header('Location: index.php');
	}
 }
 $uid = $_SESSION["uid"];
if (isset($_POST["update_infox"])) {
	$upd_email = $_POST["email"];
	$upd_contact = $_POST["contact_number"];
	$upd_address = $_POST["residential_address"];
	$upd_bmonth = $_POST["bday_month"];
	$upd_bday = $_POST["bday_day"];
	$upd_byear = $_POST["bday_year"];
	$upd_username = $_POST["username"];
	$upd_skills = $_POST["tagskills"];

	mysql_select_db("ahacks", $conn);
	$sql = "UPDATE users SET 
	email = '$upd_email', contact_number = '$upd_contact', residential_address = '$upd_address', bday_month = '$upd_bmonth', bday_day = '$upd_bday', bday_year = '$upd_byear', username = '$upd_username', skill_tags = '$upd_skills' 
	WHERE username = '$uid'";
	$result = mysql_query($sql);
	if (!$result) {
		die("Error ".mysql_error());
	}else{
		header('Location: index.php');
	}
 }
else{
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
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>TUTOR.ME</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="design/dist/css/vendor/bootstrap.min.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="design/dist/css/flat-ui.css" rel="stylesheet">

    <link rel="shortcut icon" href="design/dist/img/favicon.ico">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="../../dist/js/vendor/html5shiv.js"></script>
      <script src="../../dist/js/vendor/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript">
    function loadSearch()
    {

    }
    </script>
  </head>
  <body>
    <style>
      body {
        min-height: 2000px;
        padding-top: 70px;
      }
    </style>

    <!-- Static navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
          </button>
          <a class="navbar-brand" href="#">TUTOR.ME</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Dashboard</a></li>
            <li><a href="#Profile">Profile</a></li>
            <li><a href="#locate">Set my Location</a></li>
           
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown"><a href="dropdown-toggle" data-toggle="dropdown"><?php echo $first_name.' '.$last_name; ?></a>
              <ul class="dropdown-menu">
                <li><a href="#">Help</a></li>
                <li><a href="#">Report a problem</a></li>
                <li class="divider"></li>
                <li><a href="logout.php">Logout</a></li>
              </ul>
            </li>


            </li>
            
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>


    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="row">
      	<div class="col-sm-8">
      		<?php include('notif.html'); ?>
      	</div>
      	<div class="col-sm-4">
      		
            <iframe src="searchresult.php" width="100%" height="300px" frameborder="0"></iframe>
      	</div>
      </div>

    </div> <!-- /container -->
    <div id="Profile"></div>

<!--PROFILE-->
<?php
	if ($account_type == 3) {
		include('tutor_profile.php');
	}elseif ($account_type == 1) {
		include('about.php');
	}
?>

<!--STUDENTS-->
<?php
if ($account_type == 3) {
    include('students.php');
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
