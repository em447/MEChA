<?php
if (isset($_POST["selected"])) {
	$selected= $_POST["selected"];
	foreach ($selected as $filename) {
		unlink("../$filename");
	}
	echo "Minutes successfully deleted.";
}
?>