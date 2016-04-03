<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Tutor.me - Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="design/dist/css/vendor/bootstrap.min.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="design/dist/css/flat-ui.min.css" rel="stylesheet">

    <link rel="shortcut icon" href="img/favicon.ico">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
      <style>
      body {
        min-height: 1000px;
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
    <div class="row">
      <div class="col-sm-12">
        <div class="jumbotron">
        <div class="row">
          <div class="col-xs-3">
          <img src="pgh.png" class="img-rounded img-responsive"></div>
         
          <a href="enroll.php?tid=<?php echo $tId; ?>&sid=<?php echo $spxid; ?>" onClick = "return confirm('are you sure?')"class="btn btn-success btn-wide">Enroll now!</a>
          <a href=""><button class="btn btn-danger btn-wide">Withdraw</button></a>
          <a href="evaluation.php?tid=<?php echo $tId; ?>&sid=<?php echo $spxid; ?>"><button class="btn btn-warning btn-wide">Give some feedback!</button></a>
          </div>
          <div>Rating: 
            <?php
              mysql_select_db("ahacks", $conn);
              $query9 = "SELECT * FROM eval WHERE username = '$qws'";
              $result9 = mysql_query($query9);
              $ave = 0;
              $ave1 = 0;
              $isel = 0;
              $i = 0;
              $j = 0;
               $ave1 = ($ave/$i);
              while ($data9 = mysql_fetch_assoc($result9)) {
                $ev1 = $data9["eval1"];
                if ($ev1 != 0) {
                  $j++;
                }
                $ev2 = $data9["eval2"];
                if ($ev2 != 0) {
                  $j++;
                }
                $ev3 = $data9["eval3"];
                if ($ev3 != 0) {
                  $j++;
                }
                $ev4 = $data9["eval4"];
                if ($ev4 != 0) {
                  $j++;
                }
                $ev5 = $data9["eval5"];
                if ($ev5 != 0) {
                  $j++;
                }

                $avsum = ($ev1+$ev2+$ev3+$ev4+$ev5)/$j;

                $i++;
                $ave+=$avsum;
              }
              print $ave;
            ?>
          </div>
        <h5><?php echo $first_name.' '.$last_name ?></h5><br>

        <h6>Information</h6>
       <hr>
          <p>Age: <label><?php echo $age; ?></label></p>
         <p>Email Address: <label><?php echo $email; ?></label></p>
         <p>Contact Number: <label><?php echo $contact; ?></label></p>
         <p>Home Address: <label><?php echo $residential_address; ?></label></p>
         <p>Skills: <label><?php echo $skill_tags; ?></label></p>
         <p>Specializations: </p>
       
       </div> <!--jumbotron-->
     </div> <!--col-sm-12-->
    </div> <!--row-->
  </div> <!--container-->



    <!-- jQuery (necessary for Flat UI's JavaScript plugins) -->
    <script src="design/dist/js/vendor/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="design/dist/js/vendor/video.js"></script>
    <script src="design/dist/js/flat-ui.min.js"></script>
    <script src="design/docs/assets/js/application.js"></script>

    <script>
      $(document).ready(function(){
        $('select[name="inverse-dropdown"], select[name="inverse-dropdown-optgroup"], select[name="inverse-dropdown-disabled"]').select2({dropdownCssClass: 'select-inverse-dropdown'});

        $('select[name="searchfield"]').select2({dropdownCssClass: 'show-select-search'});
        $('select[name="inverse-dropdown-searchfield"]').select2({dropdownCssClass: 'select-inverse-dropdown show-select-search'});
      });
    </script>

  </body>
</html>
