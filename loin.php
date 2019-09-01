<?php
session_start(); 
$host="localhost";
$user="root";
$password="";
$db="userdetails";
error_reporting(E_ALL ^ E_NOTICE);

$con=mysqli_connect($host,$user,$password,$db);
//mysql_select_db($db);
$val = $_POST['email'];
    if(isset($_POST['login']) && $val!=' ')
    {
      $email=$_POST['email'];
      $password=$_POST['password'];
      $query = "select * from user where Email='$email' AND Password='$password'";

      $query_run = mysqli_query($con,$query);
      if(mysqli_num_rows($query_run)>0)
      {
        $_SESSION['email']=$email;
        if(!empty($_POST["autologin"]))
        {
        setcookie ("email", $_POST["email"], time() + (10 * 365 * 24 * 60 * 60));
        setcookie ("password", $_POST["password"], time() + (10 * 365 * 24 * 60 * 60));
        }
        else
        {
        if(isset($_COOKIE["email"]))
        {
        setcookie ("email", "");
        }
        if(isset($_COOKIE["password"]))
        {
        setcookie ("password", "");
        }
        }
        header('location:navigation.html');
      }
      else
      {
        echo '<script type="text/javascript">alert("Invalid Credentials")</script>';
      }
    }

  



 ?>
