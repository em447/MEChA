<?php
	session_start();
	if(isset($_POST['logout'])){
		unset($_SESSION['user']);
		header("Location: index.php");
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


  <head>

    <title>Events</title>

    <!-- Le styles -->
    <link href="css/index.css" rel="stylesheet"/>
    <link rel='stylesheet' type='text/css' href='fullcalendar-1.5.3/fullcalendar/fullcalendar.css' />
	<link rel='stylesheet' type='text/css' href='fullcalendar-1.5.3/fullcalendar/fullcalendar.print.css' media='print' />
	<link type="text/css" href="jquerycustom/css/dark-hive/jquery-ui-1.8.20.custom.css" rel="stylesheet" />
		
	<script type="text/javascript" src="jquerycustom/js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="jquerycustom/js/jquery-ui-1.8.20.custom.min.js"></script>
    <script type='text/javascript' src='fullcalendar-1.5.3/fullcalendar/fullcalendar.min.js'></script>
	<script type='text/javascript' src='events/private.js'></script>
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
	</style>
	
    	<script type="text/javascript" src="bootstrap-carousel.js"></script>
    	<script type="text/javascript" src="bootstrap-button.js"></script>
   	 	<script type="text/javascript">
		 $('.carousel').carousel();
		 $('.nav-tabs').button();
		</script>
   </head>	
  <body>
 <div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container">

        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>

        <a class="brand" href="index.php">Phi Alpha Delta</a>
        
        <div class="btn-group pull-right">
  		<form action="#" id="logoutform" style="position:relative; float:left" method="post">
     	<input type="submit" class="btn btn-primary" value="Sign Out <?php if(isset($_SESSION['user'])) echo $_SESSION['user'];?>" name="logout" />
     	</form>
     	</div>

        <div class="nav-collapse">
          <ul class="nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="announcements.php">The Wall</a></li>
            <li class="active"><a href="private_events.php">Private Events</a></li>
            <li><a href="minutes.php">Minutes</a></li>
            <li><a href="speakers.php">Speakers</a></li>
            <li><a href="announcements.php">Alumni Database</a></li>
            <?php if(isset($_SESSION['user'])&&($_SESSION['user']=='admin')){?>
            <li><a href="ppm.php">Page Management</a></li>
            <?php } ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
  </div>

	
    <div class="container">
		<div class="hero-unit">
		<div id="myCarousel" class="carousel">
			  <!-- Carousel items -->
			  <div class="carousel-inner">
				<div class="active item"><img alt="banner1" src="images/banner.png" /></div>
				<div class="item"><img alt="banner2" src="images/books.png" /></div>
				<div class="item"><img alt="banner3" src="images/logos.png" /></div>
			  </div>
			  <!-- Carousel nav -->
			  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
			  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
		</div>
		</div>
	

      <!-- Example row of columns -->
      <p>Click on a day to add a new event</p>
      <p>You can update, delete, or just view an event description by clicking on an event</p>
      <p>Move the events by dragging and resize them by holding the edge of an event</p>
      <div class="pager">
          	<div id='privatecalendar'></div>
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
<?php
	if(isset($_SESSION['user'])) echo "<p id='privileges'>".$_SESSION['user']."</p>";
?>
<script>
	$('#privileges').hide();
</script>
  </body>
</html>
