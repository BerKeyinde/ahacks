<?php
session_start();
include('sql_conn.php');
$sprd = $_GET["sid"];
$sid = $_SESSION["uid"];
$qws = $_SESSION["qws"];
mysql_select_db("ahacks", $conn);
if (isset($_POST["rate"])) {
  $eval1 = $_POST["eval1"];
  $eval2= $_POST["eval1"];
  $eval3= $_POST["eval1"];
  $eval4 = $_POST["eval1"];
  $eval5 = $_POST["eval1"];

  $query = "INSERT INTO eval (username, eval1, eval2, eval3, eval4, eval5) VALUES('$qws', '$eval1', '$eval2', '$eval3', '$eval4', '$eval5')";
  $result = mysql_query($query);
  if (!$result) {
    die("ERROR! ".mysql_error());
  }
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
  </head>
  <body>

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
        </div><!--/.nav-collapse --></div></div>

        <div class="container">
        <div class="row">
		
        <div class="col-sm-12"> 

			<div class="col-sm-5"><br><br><br>
			<h5>Evaluation</h5>
			1. Rate your learning from your tutor:
         <form role="form" action="evaluation.php" method="POST" >
           <div class="form-group">
             <label class="radio">
                <input type="radio" data-toggle="radio" name="eval1" id="optionsRadios1" value="5" data-radiocheck-toggle="radio" required>
               Excellent
              </label>
              <label class="radio">
                <input type="radio" data-toggle="radio" name="eval1" id="optionsRadios1" value="4" data-radiocheck-toggle="radio" required>
                Very Good
              </label>

              <label class="radio">
                <input type="radio" data-toggle="radio" name="eval1" id="optionsRadios1" value="3" data-radiocheck-toggle="radio" required>
                Satisfactory
              </label>
              <label class="radio">
                <input type="radio" data-toggle="radio" name="eval1" id="optionsRadios1" value="2" data-radiocheck-toggle="radio" required>
                Fair
              </label>
              <label class="radio">
                <input type="radio" data-toggle="radio" name="eval1" id="optionsRadios1" value="1" data-radiocheck-toggle="radio" required>
                Poor
              </label>
            </div>
            2. Rate your tutor's attitude towards you:
            <div class="form-group">
             <label class="radio">
                <input type="radio" data-toggle="radio" name="eval2" id="optionsRadios1" value="5" data-radiocheck-toggle="radio" required>
               Excellent
              </label>
              <label class="radio">
                <input type="radio" data-toggle="radio" name="eval2" id="optionsRadios1" value="4" data-radiocheck-toggle="radio" required>
                Very Good
              </label>
              <label class="radio">
                <input type="radio" data-toggle="radio" name="eval2" id="optionsRadios1" value="3" data-radiocheck-toggle="radio" required>
                Satisfactory
              </label>
              <label class="radio">
                <input type="radio" data-toggle="radio" name="eval2" id="optionsRadios1" value="2" data-radiocheck-toggle="radio" required>
                Fair
              </label>
              <label class="radio">
                <input type="radio" data-toggle="radio" name="eval2" id="optionsRadios1" value="1" data-radiocheck-toggle="radio" required>
                Poor
              </label>
            </div>
            3. How are the instruction materials that he/she used?
            <div class="form-group">
             <label class="radio">
                <input type="radio" data-toggle="radio" name="eval3" id="optionsRadios1" value="5" data-radiocheck-toggle="radio" required>
               Excellent
              </label>
              <label class="radio">
                <input type="radio" data-toggle="radio" name="eval3" id="optionsRadios1" value="4" data-radiocheck-toggle="radio" required>
                Very Good
              </label>

              <label class="radio">
                <input type="radio" data-toggle="radio" name="eval3" id="optionsRadios1" value="3" data-radiocheck-toggle="radio" required>
                Satisfactory
              </label>
              <label class="radio">
                <input type="radio" data-toggle="radio" name="eval3" id="optionsRadios1" value="2" data-radiocheck-toggle="radio" required>
                Fair
              </label>
              <label class="radio">
                <input type="radio" data-toggle="radio" name="eval3" id="optionsRadios1" value="1" data-radiocheck-toggle="radio" required>
                Poor
              </label>
            </div>

             4. Did you reached your learning goals? :
            <div class="form-group">
             <label class="radio">
                <input type="radio" data-toggle="radio" name="eval4" id="optionsRadios1" value="5" data-radiocheck-toggle="radio" required>
               Yes!
              </label>
              <label class="radio">
                <input type="radio" data-toggle="radio" name="eval4" id="optionsRadios1" value="4" data-radiocheck-toggle="radio" required>
               Almost there!
              </label>

              <label class="radio">
                <input type="radio" data-toggle="radio" name="eval4" id="optionsRadios1" value="3" data-radiocheck-toggle="radio" required>
               Almost almost there!
              </label>
              <label class="radio">
                <input type="radio" data-toggle="radio" name="eval4" id="optionsRadios1" value="2" data-radiocheck-toggle="radio" required>
                Quite hard to reach
              </label>
              <label class="radio">
                <input type="radio" data-toggle="radio" name="eval4" id="optionsRadios1" value="1" data-radiocheck-toggle="radio" required>
                Not at all
              </label>
            </div>

              5. Rate the contribution made by your tutor:
            <div class="form-group">
             <label class="radio">
                <input type="radio" data-toggle="radio" name="eval5" id="optionsRadios1" value="5" data-radiocheck-toggle="radio" required>
               Excellent
              </label>
              <label class="radio">
                <input type="radio" data-toggle="radio" name="eval5" id="optionsRadios1" value="4" data-radiocheck-toggle="radio" required>
                Very Good
              </label>

              <label class="radio">
                <input type="radio" data-toggle="radio" name="eval5" id="optionsRadios1" value="3" data-radiocheck-toggle="radio" required>
                Satisfactory
              </label>
              <label class="radio">
                <input type="radio" data-toggle="radio" name="eval5" id="optionsRadios1" value="2" data-radiocheck-toggle="radio" required>
                Fair
              </label>
              <label class="radio">
                <input type="radio" data-toggle="radio" name="eval5" id="optionsRadios1" value="1" data-radiocheck-toggle="radio" required>
                Poor
              </label>
            </div>
              <button name="rate" type="submit" class="btn btn-success btn-wide">Submit</button>
            </form>
            </div>
        </div>

	
		</div>
		</div>


		    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="design/dist/js/vendor/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="design/dist/js/flat-ui.min.js"></script>

    <script src="design/docs/assets/js/application.js"></script>
	</body>
</html>