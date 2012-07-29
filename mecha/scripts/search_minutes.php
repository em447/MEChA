<?php
//searches $filename for $terms, and returns the file in the form of
//a link if all terms are found.
function search($filename, $terms) {
	$filecontents= file_get_contents($filename);
	$found= true;
	foreach ($terms as $term) {
		$isin= (stripos($filecontents, $term)!==false);
		$found= $isin && $found;
	}
	if ($found) {
		$url= str_replace("../", "", $filename);
		$trimmed= str_replace("minutes/", "", $url);
		$trimmed= str_replace(".html", "", $trimmed);
		return "<a href='"."$url' target='_blank'>$trimmed</a><br/>";
	}
	else {
		return "";
	}
}

if (isset($_POST["query"])) {
	$terms= explode(" ", $_POST["query"]);
	//gets all files in minutes folder
	$files= glob("../minutes/*");
	$return= "";
	foreach ($files as $filename) {
		$return= $return . search($filename, $terms);
	}
	if ($return=="") {
		echo "<em>No matches found.</em>";
	}
	else {
		echo $return;
	}
}
?>