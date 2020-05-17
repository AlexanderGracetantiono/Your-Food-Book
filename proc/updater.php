<?php
ob_start();
include 'db_connect.php';
$conn = Opencon();
$code=$_GET['c'];
$query="UPDATE `book` SET `status`='true' WHERE `code` = '$code'";
mysqli_query($conn,$query);
//link to bank
header("location:index.php");
?>