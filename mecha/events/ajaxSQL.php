<?php
	session_start();
	include 'array2json.php';
	include "../config/config.php";
	$mysqli = new mysqli($host,$username,$password,$database);

//mysqli_set_charset("utf8");

	if(isset($_GET["insert"])){
		$title = $_GET["title"];
		$title = strip_tags(substr($_GET['title'],0, 100));
		//$title = mysql_escape_string($title); 
	
		$startdate = strtotime($_GET['startdate']);
		$startdate = date('Y-m-d',$startdate);
		
		$enddate = $_GET['enddate'];
			
		$color = $_GET["color"];
		$color = strip_tags(substr($_GET['color'],0, 100));
		//$color = mysql_escape_string($color); 
	
		$desc = $_GET["desc"];
		$desc = strip_tags(substr($_GET['desc'],0, 100));
		//$desc = mysql_escape_string($desc); 
	
	
		$query = "INSERT INTO Events (title,start,end,description,color) VALUES ('$title','$startdate', '$enddate', '$desc','$color')";
		$result = $mysqli->query($query);
	}elseif(isset($_GET['newstart'])){
		$startdate = $_GET['newstart'];
		$enddate = $_GET['newend'];
		$id = $_GET['id'];
		
		$query = "UPDATE Events SET start= '$startdate', end= '$enddate' WHERE eid = '$id'";
		$result = $mysqli->query($query);
	}elseif(isset($_GET['del'])){
		$delete = $_GET['id'];
	
		$query = "DELETE FROM Events WHERE eid = '$delete'";
		$result = $mysqli->query($query);
		
	}elseif(isset($_GET['update_get'])){
		$getinfo = $_GET['id'];
		
		$query = "SELECT * FROM Events WHERE eid = '$getinfo'";
		$result = $mysqli->query($query);
		
		$row = $result->fetch_row();
		$sum = array(
				'id' => $row[0],
				'title' => $row[1],
				'start' => $row[2],
				'end' => $row[3],
				'description' => $row[4],
				'color' => $row[5],
				'url' => $row[6],
				'allDay' => true);
			
		echo array2json($sum);
		
	}elseif(isset($_GET['update_set'])){
		$getinfo = $_GET['id'];
		
		$title = $_GET["title"];
		$title = strip_tags(substr($_GET['title'],0, 100));
		//$title = mysql_escape_string($title); 
		
			
		$color = $_GET["color"];
		$color = strip_tags(substr($_GET['color'],0, 100));
		//$color = mysql_escape_string($color); 
	
		$desc = $_GET["desc"];
		$desc = strip_tags(substr($_GET['desc'],0, 100));
		//$desc = mysql_escape_string($desc); 
		
		$query = "UPDATE Events SET title='$title',color='$color',description='$desc' WHERE eid='$getinfo'";
		$results = $mysqli->query($query);
			
	}else{
  		$query = "SELECT * FROM Events";
  		$result = $mysqli->query($query);
		$c = 0;
		$sum = array();
		if (isset($_SESSION['user']) && $_SESSION['user'] == 'admin'){
			$privilege = true;
		}else{
			$privilege = false;
		}
		while ($row = $result->fetch_row()){
			$sum[$c] = array(
				'id' => $row[0],
				'title' => $row[1],
				'start' => $row[2],
				'end' => $row[3],
				'description' => $row[4],
				'color' => $row[5],
				'url' => $row[6],
				'allDay' => true,
				'editable' => true);
			$c = $c + 1;
		}
		echo array2json($sum);	

	}
?>