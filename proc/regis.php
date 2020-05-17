<?php
session_start();
error_reporting(0);
ob_start();
include 'db_connect.php';
$conn=Opencon();
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$email=$_POST["email"];
$pass=$_POST["pass"];
$telp=$_POST["telp"];
$query="INSERT INTO `user` VALUE('$fname','$lname','$email','$pass','$telp')";
mysqli_query($conn,$query);
$_SESSION['cek']='f';
$_SESSION['login']='true';
$_SESSION['email']=$email;
$_SESSION['pass']=$pass; 
$_SESSION['reg']='true';
     header("location:to/toregis.php");
?>