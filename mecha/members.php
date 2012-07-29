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
    <title>Members</title>
    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet"/>
    <link href="nailthumb/jquery.nailthumb.1.1.css" rel="stylesheet"/>
     <style type="text/css" media="screen">
        .small-square{
            width: 150px;
            height: 150px;
        }
        .big-square{
        	width: 300px;
        	height: 300px;
        }
    </style>
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script> 
	<script src="bootstrap.min.js"></script>
	<script src="jquery.imgpreload/jquery.imgpreload.min.js"></script>
	<script type="text/javascript" src="nailthumb/jquery.nailthumb.1.1.js"></script>
	<script type="text/javascript">
		$('.carousel').carousel();
		$(".collapse").collapse();
		$(document).ready(function(){
			
			jQuery('.nailthumb-container img').imgpreload({
					each: function(){
						$(this).parents('.nailthumb-container').nailthumb({preload:true});
						}
				});
			
			jQuery('.nailthumb-container').nailthumb();
			//highlight border on hover
			
			$('.well').hover(function() {
			  $(this).css({'border-color': '#0088cc'});
			},
			function() {
			  $(this).css({'border-color': '#ddd'});
			});
			
			//display bio on click (officers)
			$("#officers .well").click(function() {
			  var varid= $(this).children("input").val();
			  $('#myModal').load("membersSQL.php", {id: varid}, function() {
			  
			  	jQuery('.nailthumb-container.big-square').nailthumb({
			  		onStart: function(){jQuery('#pic').hide();},
			  		onFinish: function(){jQuery('#pic').show();},
			  		replaceAnimation:null
			  		});
				$('#myModal').modal('show');
			  });
			});
			
			//(chairs)
			/*$("#chairs .thumbnail").click(function() {
			  var varid= $(this).children("input").val();
			  $('#myModal').load("scripts/get_chair.php", {id: varid}, function() {
				$('#myModal').modal('show');
			  });
			});*/
		  });
	</script>
  </head>	
  <body>
  <?php
  	require("nav1.php");
  ?>
    

    <div id="myModal" class="modal hide fade in"></div>
    
    <div class="content span12 offset2">
    	<div class="row-fluid" id="officers">
    	<h2>Officers</h2>
    	<hr>
    	<?php
    		include "config/config.php";
    		$mysqli= new mysqli($host, $username, $password, $database);
         	$query= "SELECT * FROM Members";
         	$result= $mysqli->query($query);
         	
         	while($row = $result->fetch_assoc()){
         		echo "<div class='well span2'>
         		<h4>".$row['position']."</h4>
         		<input type='hidden' value='".$row['mid']."'/>
         		<div class='nailthumb-container small-square'>
         		<img src='".$row['url']."' />
         		</div>
         		<em>".$row['name']."</em>
         		</div>";
         	}
    	?>
    	</div>
    	<div class="row-fluid" id="members">
    	<h2>Members</h2>
    	<hr>
    	</div>
    
    	
    </div>
    </body>
</html>