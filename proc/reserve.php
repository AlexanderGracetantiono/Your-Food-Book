<?php
session_start();
ob_start();
error_reporting(0);
include 'db_connect.php';
// value
$conn = Opencon();
$email= $_SESSION['email'];
$type=$_POST['p_type'];
$resto=$_POST['p_resto'];
$lname=$_POST['p_lname'];
$date=$_POST['p_date'];
$time=$_POST['p_time'];
$mssg=$_POST['p_mssg'];
// echo $email." ok ".$date."sss".$time."sss".$resto."sss".$type."sss".$fname;
// cek meja
 $query="SELECT * FROM `book` WHERE `date` = '$date' AND `waktu`= '$time' AND `type`='$type' AND `resto`='$resto'";
 $query2="SELECT * FROM `meja` WHERE `tipe`='$type' AND `resto`='$resto'";
 $result = mysqli_query($conn,$query);
 $result2 = mysqli_query($conn,$query2);
 $cek=mysqli_num_rows($result);
 $cek2=mysqli_num_rows($result2);
 $row = mysqli_fetch_array($result2);
 if(($cek>=$row['tipe'])&($cek>0)){
     $_SESSION['rsv']='f';
     //tanda meja tak ada
      header("location: to/toreserve.php");
  }
  else{
    $rands=0;
    $rands=mt_rand(00000000000,99999999999);
      $_SESSION['rsv']='t';
      $query3="INSERT INTO `book`(`date`, `waktu`, `type`, `resto`, `nama`, `email`, `status`, `pesan`, `price`, `code`) 
      VALUES ('$date','$time','$type','$resto','$lname','$email','false','$mssg','$price','$rands')";
      mysqli_query($conn,$query3);
      $price=$row['harga'];
      //new
    
$brand='resto';
        //later
      header("location: savedatabase.php?p=$price&&c=$rands&&b=$brand");
 }
?>