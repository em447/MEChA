<?php
	if(isset($_POST['id'])){
		include "config/config.php";
    	$mysqli= new mysqli($host, $username, $password, $database);
    	$id = $_POST['id'];
    	$query= "SELECT * FROM Members WHERE mid=$id";
        $result= $mysqli->query($query);
        
        while($row = $result->fetch_assoc()){
        	echo "<div class='modal-header'>
        		<button class='close' data-dismiss='modal'>&times;</button>
				<h4>".$row['position']."</h4>
				</div>
				
				<div class='modal-body'>
				<div class='container-fluid'>
				<div class='row-fluid'>
				
				<div class='span8'>
			    <div class='nailthumb-container big-square'>
         		<img src='".$row['url']."'/>
         		</div>
         		</div>
         		
         		<div class='span4'>
         		<em style='font-size:15px'>".$row['name']."</em>
         		<p></p>
         		<p style='font-size:11px'>Class of ".$row['year']."</p>
         		<p style='font-size:11px'>".$row['from']."</p>
         		<p style='font-size:11px'>".$row['bio']."</p>
         		</div>
         		
         		</div>
         		</div>
         		</div>";  
        }
	}


?>