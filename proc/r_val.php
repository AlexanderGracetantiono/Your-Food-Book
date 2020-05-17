<?php 
session_start();
error_reporting(0); 
ob_start();
include 'db_connect.php';
$conn=Opencon();
$email=$_SESSION["email"];
$pass=$_SESSION["pass"];
$query="SELECT * FROM `user` WHERE `email`='$email' AND `password`='$pass'";
$res = mysqli_query($conn,$query);
$cek=mysqli_num_rows($res);
$row = mysqli_fetch_array($res);
if($cek>0){
    $_SESSION['email']=$email;
    $_SESSION['pass']=$pass;
    $_SESSION['name']=$row['lname'];
    $_SESSION['cek']='t';
     header("location: to/toindex.php");

}
else{
    $_SESSION['cek']='invalid';
    header("Location: to/toindex.php");
}

?>