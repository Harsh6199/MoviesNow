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
      h2
      {
        margin: 0;
        padding: 0 0 20px;
        text-align: center;
        font-size: 40px;
        color: #000033;
      }
  </style>
</head>
<body>
<?php
  include 'connect.php';

$Email=$_POST['email'];
$Gender=$_POST['gender'];
$password=$_POST['password'];

$sql="INSERT INTO `user` (`Email`,`Gender`,`Password`) VALUES('$Email','$Gender','$password')";



  if(mysqli_query($con,$sql))
 {
echo ("<h1>Successfully Registered</h1>");
echo '<a href="bollytv.html"><h2>go back to login page</h2></a>';
  }

  else
  {
      echo 'Registrationsuccess';
    
  } 
  mysqli_close($con);

?>
</body>
</html>