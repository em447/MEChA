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
    <title>MEChA de Cornell</title>
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
		 $('.carousel').carousel({ interval: 500 });
		 $(document).ready(function(){
		 $('.carousel').carousel('cycle');
		 });
		 $(".collapse").collapse();
	</script>
  </head>	
  <body>
	<div id="fb-root"></div>
	<script>
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
  
  <?php
  	require("nav1.php");
  ?>
    
    <!-- Slideshow -->
    <div class="container-fluid">
      <div class="row-fluid">
    		<div class="container">
    <!--<div class="hero-unit span10 offset2" style="background-color:white">-->
    <div class="row">
	<div id="myCarousel" class="carousel span10 offset1">
		<!-- Carousel items -->
		<div class="carousel-inner">
			<div class="active item"><img alt="" src="pics/logo.jpg" width="800" height="400"/>
				<div class="carousel-caption">
            		<h4>New website coming up!</h4>
            	</div>
			</div>
			<div class="item"><img alt="" src="pics/banquet.jpg" width="800" height="400" />
				<div class="carousel-caption">
            		<h4>ECCSF Spring 2012 Conference at Cornell University</h4>
            	</div>
       		</div>
			<div class="item"><img alt="" src="pics/dc-protest.jpg" width="800" height="400"/>
				<div class="carousel-caption">
            		<h4>Protesting SB 1070 outside Supreme Court</h4>
           		</div>
        	</div>
		</div>
		<!-- Carousel nav -->
		<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
		<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
	</div>
	</div>
	</div><!-- container -->
		</div><!--/row-->
	</div><!--/container-->
	<!-- /Slideshow -->
	<div class="container">
		<div class="row-fluid">
			
			<div class="hero-unit span8" style="padding:15px;">
              <h2>News</h2>
              <hr>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn" href="#">View details &raquo;</a></p>
          
              <h2>News</h2>
              <hr>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn" href="#">View details &raquo;</a></p>
			</div> <!--/span-->
			
		  	<div class="span3">
				<!-- Twitter Feed -->
				<script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>
				<script>
new TWTR.Widget({
  version: 2,
  type: 'profile',
  rpp: 4,
  interval: 2500,
  width: 287,
  height: 300,
  theme: {
    shell: {
      background: '#e6ad3c',
      color: '#fafafa'
    },
    tweets: {
      background: '#ffffff',
      color: '#000000',
      links: '#cc8f1d'
    }
  },
  features: {
    scrollbar: false,
    loop: true,
    live: true,
    behavior: 'default'
  }
}).render().setUser('CornellMEChA').start();
!function(d,s,id){
	var js,fjs=d.getElementsByTagName(s)[0];
	if(!d.getElementById(id)){
		js=d.createElement(s);j
		s.id=id;
		js.src="//platform.twitter.com/widgets.js";
		fjs.parentNode.insertBefore(js,fjs);
		}
	}(document,"script","twitter-wjs");
</script>
				<div class="hero-unit" style="padding:0;margin:3px;width:287px;" >
					<div class="fb-like-box" data-href="http://www.facebook.com/MEChADeCornell" data-width="287" data-colorscheme="light" data-show-faces="true" data-stream="false" data-header="true">
					</div>
				</div> <!--/ hero-unit -- >
			</div> <!--/span-->
          
		</div> <!--/row-fluid-->
	</div> <!--/container-fluid-->
    
    <hr>
    	<footer>
        	<p>&copy; Company 2012</p>
      	</footer>
	

    
    

  </body>
</html>