
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
  <form action = "searchresult.php" method = "POST">
 <div class="input-group input-group-hg input-group-rounded">
              <span class="input-group-btn">
                <button name = "search" type="submit" class="btn"><span class="fui-search"></span></button>
              </span>
              <input name = "search_string" type="text" class="form-control" placeholder="Search" id="search-query-2">
  </form>
 </div><!-- /.todo --><br>
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

<?php
include('sql_conn.php');
if (isset($_POST["search"])) {
	$search_string = $_POST["search_string"];
	$search_stringx = strtoupper($search_string);

	mysql_select_db("ahacks", $conn);
	$query = "SELECT * FROM users WHERE account_type = 3";
	$result = mysql_query($query);
	while ($data = mysql_fetch_assoc($result)) {
		$skills = $data["skill_tags"];
		$skillsx = strtoupper($skills);
		$pName = $data["username"];
		$fName = $data["first_name"];
		$lName = $data["last_name"];
		$idx = $data["id"];
		
		$pos = strrpos($skillsx, $search_stringx);
		if ($pos == true) {
			print '<a href = "profilegrab.php?id='.$idx.'" target = "SELF">'.$fName.' '.$lName.'<br></a>';
		}
	}

}
?>