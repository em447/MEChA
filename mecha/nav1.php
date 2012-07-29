<div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
        
        <div class="btn-group pull-right">
        	<form action="#" id="logoutform" style="position:relative; float:left; margin:0px" method="post">
<?php if(isset($_SESSION['user'])){ ?>
     			<input type="submit" class="btn btn-warning" value="Sign Out <?php if(isset($_SESSION['user'])) echo $_SESSION['user'];?>" name="logout" />
<?php }else{?>
     			<input type="submit" class="btn btn-warning" value="Login" name="login" onclick="location.href='login.php'; return false;"/>
<?php }?>
     		</form>
     	</div>

          <div class="nav-collapse">
        	<a class="brand" href="home.php"><b>MEChA de Cornell</b></a> 
            <ul class="nav">
              <li><a href="home.php"><b>Home</b></a></li>
			  <li class="dropdown">
			  	<a class="dropdown-toggle" data-toggle="dropdown" href="#">
					<b>About</b>
					<b class="caret"></b>
				</a>
				<ul class="dropdown-menu">
					<li><a href="constitution.php">Constitution</a></li>
					<li><a href="santabarbara.php">Plan de Santa Barbara</a></li>
				</ul>
			  </li>
              <li><a href="members.php"><b>Members</b></a></li>
              <li><a href="events.php"><b>Events</b></a></li>
              <li><a href="gallery.php"><b>Gallery</b></a></li>
              <li><a href="contact.php"><b>Contact</b></a></li>
<?php if(!isset($_SESSION['user'])){ ?>
<?php }else{?>
               <li><a href="announcements.php">Members Only</a></li>
<?php } ?>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-->
      </div>
    </div><!--/.navbar-->