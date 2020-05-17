<?php 
session_start();
error_reporting(0); 
ob_start();
include 'db_connect.php';
$conn=Opencon();
$email=$_POST["email"];
$pass=$_POST["pass"];
$query="SELECT * FROM `user` WHERE `email`='$email' AND `password`='$pass'";
$res = mysqli_query($conn,$query);
$cek=mysqli_num_rows($res);
$row = mysqli_fetch_array($res);
if($cek>0){
    $_SESSION['cek']='f';
    $_SESSION['login']='true';
    $_SESSION['email']=$email;
    $_SESSION['pass']=$pass;
    $_SESSION['name']=$row['lname'];
    header("location: to/toindex.php");
    
}
else{
    $_SESSION['cek']='t';
    $_SESSION['login']='false';
    header("location: to/tologin.php");
}

?>