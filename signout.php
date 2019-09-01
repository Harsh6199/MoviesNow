<html>
<head>
	<style type="text/css">
		body{
      margin: 0;
      padding: 0;
      background: url(https://newevolutiondesigns.com/images/freebies/texture-wallpaper-preview-72.jpg);
      background-size: cover;
      background-position: center;
      font-family: sans-serif;
      }
      h1
      {
        margin: 15%;
        padding: 0 0 20px;
        text-align: center;
        font-size: 70px;
        font-weight: bold;
        color: #E6E6FA;
      }
	</style>
</head>
<?php
   session_start();
   // unset($_SESSION["uname"]);
   // unset($_SESSION["pass"]);
   
   // echo '<h1>You have cleaned session</h1>';
   session_destroy();
   header('Refresh: 1; URL = bollytv.html');
?>
</html>