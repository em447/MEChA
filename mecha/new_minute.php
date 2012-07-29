<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<script type="text/javascript" src="tinymce/jscripts/tiny_mce/tiny_mce.js" ></script>
	<script type="text/javascript">
	tinyMCE.init({
		mode : "textareas",
		theme : "advanced"
	});
	</script>

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		//AJAX to send form to script that saves minutes to file
		$("#form").submit(function(ev){
			tinyMCE.triggerSave(); //saves content
			ev.preventDefault(); //prevents normal form action
			$("#message").html("<em>Processing...</em>");
			$.ajax({
				url: "scripts/write_file.php",
				type: "post",
				data: $("#form").serialize(),
				success: function(msg){
					$("#message").html(msg); //prints if successful
				}
			});
		});
	});
	</script>
</head>

<body>

	<form action="scripts/write_file.php" method="post" id="form">  
		<p>
			<textarea name="content" cols="100" rows="35" > 
			</textarea>
		</p>
		<p id="message"></p>
		<p>
			<input type="submit" name="submit" value="Save and email" />
		</p>
	</form>
	
</body>

</html>