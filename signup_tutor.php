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
  <body style = "background-color: #1abc9c;">
    <style>
      body {
        min-height: 2000px;
        padding-top: 70px;
      }
    </style>

   
    <div class="container">
    <div class="col-sm-3">
      
    </div>
    <div class="col-sm-6">
    <center>
          <!-- Main component for a primary marketing message or call to action -->
          <div class="jumbotron" style="border: 2em; background-color: #F2F1EF;">
           <span style = "font-size: 1.7em;">TUTOR.ME</span><br>
            <span style = "color: #00B16A;">CREATE TUTOR ACCOUNT</span>
           <br><br>
            <form class="form-horizontal" role="form" action="signup_tutor.php" method = "POST">
            <div class="form-group">
             <div class="row">
               <div class="col-sm-6">
                 <input type="text" name="first_name" class="form-control" placeholder="First Name">
               </div>
               <div class="col-sm-6">
                 <input type="text" name="last_name" class="form-control" placeholder="Last Name">
               </div>
             </div>
            </div>
            <div class="form-group">
             
            
                <input type="email" name="email" class="form-control" placeholder="Email">
              
            </div>
            <div class="form-group">
             
            
                <input type="text" name="residential_address" class="form-control" placeholder="Residential Address">
              
            </div>
            <div class="form-group">
             
            
                <input type="text" name="contact_number" class="form-control" placeholder="Contact Number">
              
            </div>
            <div class="form-group">
             
            
                <input type="text" name="username" class="form-control" placeholder="Username">
              
            </div>
            <div class="form-group">
             
            
                <input type="password" name="password" class="form-control" placeholder="Password">
              
            </div>
            <div class="form-group">
             
            
                <input type="password" name="password2" class="form-control" placeholder="Repeat Password">
              
            </div>

            <div class="form-group">
            
                <button type="submit" class="btn btn-default" name="signup" style="background-color: #D24D57;">Continue &raquo;</button>
             
            </div>
          </form>
          </center>
          </div>
      </div>
      <div class="col-sm-3">
        
      </div>
    </div> <!-- /container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="design/dist/js/vendor/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="design/dist/js/flat-ui.min.js"></script>

    <script src="design/assets/js/application.js"></script>

  </body>
</html>
<?php
require('sql_conn.php');
if (isset($_POST["signup"])) {

  $first_name = $_POST["first_name"];
  $last_name = $_POST["last_name"];
  $email = $_POST["email"];
  $uid = $_POST["username"];
  $upass = $_POST["password"];
  $upass2 = $_POST["password2"];
  if ($upass2 != $upass) {

    echo'
      <script type="text/javascript">
    alert("Passwords Mismatched!");

</script>
    ';
   exit;
  }
  $residential_address = $_POST["residential_address"];
  $contact_number = $_POST["contact_number"];

  $pass = sha1($upass);
  mysql_select_db("ahacks", $conn);
  $sql = "INSERT INTO users 
  (username, password, first_name, last_name, email, residential_address, contact_number, account_type) VALUES 
  ('$uid', '$pass', '$first_name', '$last_name', '$email', '$residential_address', '$contact_number', 3)";
  $query = mysql_query($sql);
  if (!$query) {
    die("SQL Exec. Failed! <br>" .mysql_error());
  }elseif($query){
    header('Location: login.php');
    exit;
  }

  

}
?>