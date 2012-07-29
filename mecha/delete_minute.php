<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<head>

  <title>Delete Minutes</title>


  <!-- Le styles -->
  <link href="css/index.css" rel="stylesheet"/>
  <style type="text/css">
  body {
    padding-top: 60px;
    padding-bottom: 40px;
  }
  </style>

  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <script type="text/javascript">
  $(document).ready(function(){
    //send array of selected announcements to delete
    $("#delete").submit(function(ev){
      ev.preventDefault();
      var selected= $("#selectBox").val();
      if (selected!=null) {
        $.post('scripts/delete_min.php', {'selected[]': selected}, function(data) {
          alert(data);
          location.reload();
        });
      }
    });
  });
  </script>
</head>	

<body>
 <p>Select minutes to delete.</p>
<?php
	require("nav3.php");
?>

  <div class="container">

    <!-- Example row of columns -->
    <div class="row">
      <div class="span4">
        <h3>Minutes</h3>

        <form id="delete" action="">
          <p>
          <select size="20" multiple="multiple" id="selectBox">
            <?php
            function output($str) {
              $trimmed= str_replace("minutes/", "", $str);
              $trimmed= str_replace(".html", "", $trimmed);
              echo "<option value='".$str."'>$trimmed</option>";
            }
            //gets all files in minutes folder
            $files= glob("minutes/*");
            arsort($files); //reverse sort (most recent first)
            foreach ($files as $filename) {
              output($filename);
            }
            ?>
          </select>
          <br/>
          <input type="submit" value="Delete"/>
          </p>
        </form>

      </div>

    </div>

  </div> <!-- /container -->

</body>
</html>