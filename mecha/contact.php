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
    <title>Contact</title>
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
	</script>
  </head>	
  <body>
  <?php
  	require("nav1.php");
  ?>
    
    <div class="container">
    	<div class="row">
    		<div class="span8 offset2">
       			<h2>Questions or Comments?</h2>
				<br />
        		<form action="scripts/email.php" method="post" id="form">
         			<textarea name="message" rows="10" cols="200" placeholder="Questions?"></textarea>	
         			<br />
         			<input type="text" name="from" placeholder="your email" />
         			<br />
         			<input type="submit" value="send" />
         			<br />
       			</form>

       			<p id="message"></p>
       		</div>
       	</div>
    </div><!--/container-->
    </body>
</html>