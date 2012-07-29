<?php
	session_start();
	if(isset($_POST['logout'])){
  	unset($_SESSION['user']);
  	header("Location: home.php");
  	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Minutes</title>
    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet"/>
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script> 
	<script src="bootstrap.min.js"></script>
	<script type="text/javascript">
		 $('.carousel').carousel();
		 $(".collapse").collapse();
		 $(document).ready(function(){
			//jquery to open selected minutes in new window
			$("#minutes").submit(function(ev){
			  ev.preventDefault();
			  var selected= $("#selectBox").val();
			  if (selected!=null) {
				window.open(selected);
			  }
			});
			//AJAX for searching
			$("#search").submit(function(ev){
			  ev.preventDefault(); //prevents normal form action
			  $("#results").html("Results");
			  $("#hits").html("<em>Searching...</em>");
			  $.ajax({
				url: "scripts/search_minutes.php",
				type: "post",
				data: $("#search").serialize(),
				success: function(msg){
				  $("#hits").html(msg); //prints search results
				}
			  });
			});
		  });
	</script>
  </head>	
  <body>
  <?php
  	require("nav2.php");
  ?>
    
    <div class="container">
    	<div class="row">
    		<div class="span4">
				<h2>Minutes</h2>
		
				<form id="minutes" action="">
				  <p>
				  <select size="10" id="selectBox">
					<?php
					//Creates an option input with value set to url and display set to trimmed file name
					function printMinutes($str) {
					  $trimmed= str_replace("minutes/", "", $str);
					  $trimmed= str_replace(".html", "", $trimmed);
					  echo "<option value='".$str."'>$trimmed</option>";
					}
					//gets all files in minutes folder
					$files= glob("minutes/*");
					arsort($files); //reverse sort (most recent first)
					foreach ($files as $filename) {
					  printMinutes($filename);
					}
					?>
				  </select>
				  <br/>
				  <input type="submit" value="View"/>
				  </p>
				</form>
						
			</div>
			<div class="span4">
				<h2>Search</h2>
				
				<form action="scripts/search_minutes.php" method="post" id="search">
				  <p>
					<input type="text" name="query" placeholder="Search..."></input><br/>
					<input type="submit" value ="Search"></input>
				  </p>
				</form>
		
				<h3 id="results"></h3>
				<p id="hits">
				</p>
		
				<br/>
				<h2>New Minutes</h2>
				<p>
				  <a href="new_minute.php">Enter new minutes</a>
				</p>
				<br/>
			</div>
    		
       	</div>
    </div><!--/container-->
    </body>
</html>