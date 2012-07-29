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

    <title>Events</title>

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet"/>
    <link rel='stylesheet' type='text/css' href='fullcalendar-1.5.3/fullcalendar/fullcalendar.css' />
	<link rel='stylesheet' type='text/css' href='fullcalendar-1.5.3/fullcalendar/fullcalendar.print.css' media='print' />
	<link type="text/css" href="jquerycustom/css/dark-hive/jquery-ui-1.8.20.custom.css" rel="stylesheet" />
		
	<script type="text/javascript" src="jquerycustom/js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="jquerycustom/js/jquery-ui-1.8.20.custom.min.js"></script>
    <script type='text/javascript' src='fullcalendar-1.5.3/fullcalendar/fullcalendar.min.js'></script>
	<script type='text/javascript' src='events/events.js'></script>
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
	</style>
    <script src="bootstrap.min.js"></script>
   	<script type="text/javascript">
		 $('.carousel').carousel();
		 $('.nav-tabs').button();
	</script>
   </head>	
  <body>
  <?php
  	require("nav1.php");
  ?>
    

	
    <div class="container">
	

      <!-- Example row of columns -->
      <div class="hero-unit">
      <?php if(isset($_SESSION['user'])&&($_SESSION['user']=='admin')){
       	echo "<p>Admin you can edit the calendar</p>";
       }else{
       	echo "<p style='color:black'>Click on our events to find out what's going on!</p>";
       	} ?>
      <div class="pager">
          	<div id='calendar'></div>
      </div>
			<div id='loading' style='display:none'>loading...</div>
			<div id='newEventDialog' class='dialog ui-helper-hidden, row-fluid'>
	 			<form method="get">
	    		<div>
	        		<label class="label label-inverse">Title:</label>
	        		<input id='title' class="field" type="text"></input><br />
	    		</div>
	    		<div>
	    			<label class="label label-inverse">End Date:</label>
	    			<input id='enddate' class='field' type="text"></input><br />
	    		</div>
	    		<div>
	    			<label class="label label-inverse">Color:</label>
	    			<div id='color' class="btn-group" data-toggle="buttons-radio">
						<button type="button" name='colors' value="blue" class="btn btn-primary active" data-toggle="button">Social</button>
						<button type="button" name='colors' value="green" class="btn btn-success" data-toggle="button">Professional</button>
						<button type="button" name='colors' value="orange" class="btn btn-warning" data-toggle="button">Service</button>
						<button type="button" name='colors' value="red" class="btn btn-danger" data-toggle="button">Important</button>
					</div>
				</div>
	    		<div>
	    			<label class="label label-inverse">Description:</label>
	    			<textarea id='desc' style="resize: none;" class='span12' rows='6' cols='500'></textarea><br />
	    		</div>
	   			</form>
        	</div>
        	<div id='descEventDialog' class='dialog ui-helper-hidden'>
	    		<div>
	    			<p id='desc_content'></p>
	    		</div> 
	    	</div>
	</div> 
	</div>
<?php
	if(isset($_SESSION['user'])) echo "<p id='privileges'>".$_SESSION['user']."</p>";
?>
<script>
	$('#privileges').hide();
</script>

  </body>
</html>
