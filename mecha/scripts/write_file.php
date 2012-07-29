<?php
//script that gets minute entry.
//writes entry to a file and emails to listserv.
if (isset($_POST["content"])) {
	$content= $_POST["content"]; //get body of minutes doc
	//save to file
	$date= date("Y-m-d H:i:s");
	$filename= "../minutes/" . date("Y-m-d_H.i.s") . ".html"; //name file according to date/time
	$file= fopen($filename, "w");
	fwrite($file, $content);
	fclose($file);
	//email to listserv
	$to= "emunoz_978@hotmail.com";
	$subject= "PAD Minutes from $date";
	$from= "MECHA";
	//allows html in email
	$headers= 'MIME-Version: 1.0' . "\r\n";
	$headers.= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers.= "From: $from";
	
	if (function_exists('mail'))
	{
		echo "it does exist";
	}
	/*if (mail($to, $subject, $content, $headers))
	{
		echo "<em>Successfully saved and emailed.</em>";
	}
	else
	{
		echo "<em>Did not send.</em>";
	}*/
}
?>