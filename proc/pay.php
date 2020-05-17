<!-- 
Alexander Gracetantiono
(AXESIDE)
github:
https://github.com/AlexanderGracetantiono/
 -->
<?php
session_start();
ob_start();
include 'db_connect.php';
$conn = Opencon();
$rands=$_GET['c'];
$type=$_GET['t'];
$email=$_GET['e'];
$date=$_GET['d'];
$time=$_GET['w'];
$resto=$_GET['r'];
$query="UPDATE `book` SET `code`='$rands' WHERE `date` = '$date' 
AND `waktu`= '$time'
AND `email`= '$email' 
AND `type`='$type' 
AND `resto`='$resto'";
mysqli_query($conn,$query);
header("location: to/toindex.php");
?>
<!-- pay untuktampilkan price code  database bank! -->
<!-- <html>

<head>
    <link rel="icon" href="img/logoo.png">
    <link rel="stylesheet" type="text/css" href="css/form.css">
</head>

<body style="background-image: url(img/1252089.jpg)">
    <div style="text-align:center;color:white;margin-top:30px;">
        <?php //$price=$_GET['p'];
    ?>
        <span style="font-size:45px;">
            Total Price :
        </span><br><br>
        <span
            style="font-size:33px;Border:2px solid white;border-radius:1pc;padding-left:12px;padding-right:12px;padding-top:8px;padding-bottom:8px;">
            <?php
       // echo $price;
        ?>
        </span><br><br><br>
        <span style="font-size:45px;">
            Your Code is:
        </span><br><br><br>
        <span
            style="font-size:33px;Border:2px solid white;border-radius:2pc;padding-left:12px;padding-right:12px;padding-top:8px;padding-bottom:8px;">
            <?php
       // include 'db_connect.php';
       // $rands=$_GET['c'];
        // $rands=mt_rand(00000000000,99999999999);
        // /**/ 
        // $conn = Opencon();
        // $query="INSERT INTO `payment` VALUE('$rands',$price)";
        // mysqli_query($conn,$query);
        // Closecon($conn);
        // /**/
        // echo $rands;
        ?>
        </span>
    </div>
</body>

</html> -->