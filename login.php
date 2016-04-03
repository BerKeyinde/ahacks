<?php
require('sql_conn.php');
if (isset($_POST["login"])) {
  $uid = $_POST["username"];
  $upass = $_POST["password"];
  $pass = sha1($upass);

  //Authenticate
  mysql_select_db("ahacks", $conn);
  $sql_login = "SELECT * FROM users WHERE username = '$uid'";
  $query = mysql_query($sql_login);
  if (!$query) {
    die("Err <br>".mysql_error());
  }elseif ($query) {
    $data = mysql_fetch_assoc($query);
    $uidx = $data["username"];
    $passx = $data["password"];
    if ($passx == $pass) {
      session_start();
      $_SESSION["uid"] = $uidx;
      //print "logged in";
      header('Location: index.php');
    }else{
      print "AUTH FAILURE!";
      exit;
    }
    
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
  <body style="background-color:#1abc9c">
   <form class="form-horizontal" role="form" action="login.php" method = "POST">
    <style>
      body {
        min-height: 2000px;
        padding-top: 70px;
      }
    </style>

   
    <div class="login-screen" style="padding-left:400px;"><center>
          <div class="login-icon">
            <h3>Welcome to <small>TUTOR.ME</small></h3>
            <a class="btn btn-inverse" href="signup.php">Sign-up now!</a>
          </div>

          <div class="login-form">
            <div class="form-group">
              <input type="text" name="username" class="form-control login-field" value="" placeholder="Username" id="login-name" />
              <label class="login-field-icon fui-user" for="login-name"></label>
            </div>

            <div class="form-group">
              <input type="password" name="password" class="form-control login-field" value="" placeholder="Password" id="login-pass" />
              <label class="login-field-icon fui-lock" for="login-pass"></label>
            </div>

            <button type = "submit" name="login" class="btn btn-primary btn-lg btn-block">Log in</button>
            <a class="login-link" href="#">Lost your password?</a>
          </div>
        </div>
 </form>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="design/dist/js/vendor/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="design/dist/js/flat-ui.min.js"></script>

    <script src="design/assets/js/application.js"></script>

  </body>
</html>
