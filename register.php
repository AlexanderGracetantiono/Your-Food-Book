<!DOCTYPE html>
<!--
PROJECT UAS
Alexander / 51170018
Michelle Florence Abigail / 58170473
-->
<?php 
session_start();
// $_SESSION['login']="";
ob_start();
error_reporting(0);
?>
<html lang="en">

<head>
    <link rel="icon" href="images/logoraw.png">
    <title>FoodBook.com</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700|Raleway" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">



    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
</head>


<body data-spy="scroll" data-target="#site-navbar" data-offset="200">
    <nav class="navbar navbar-expand-lg navbar-dark site_navbar bg-dark site-navbar-light" id="site-navbar">
        <div class="container">
            <img src="images/logoraw.png" width="40px" height="40px">
            <a class="navbar-brand" href="#">FoodBook</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#site-nav"
                aria-controls="site-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="site-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="index.php#section-home" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="site-cover" style="background-image: url(images/bg2.jpg);" id="section-home">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center site-vh-100">
                <div class="col-md-12">
                    <?php if($_SESSION['reg']=='true'){ ?>
                    <img src="images/load.gif" width="300px" height="300px">
                    <?php
                header("refresh:1.4;url=index.php");
                } else { ?>

                    <h1 class="site-heading site-animate mb-3">Register</h1>

                    <!-- Modal for Login -->

                    <div class="col-md-12 text-center mb-5 site-animate"
                        style="background-color:gray; border-radius:2pc;">
                        <form method="post" action="proc/regis.php">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="m_fname">First Name</label>
                                    <input type="text" class="form-control" id="m_fname" name="fname">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="m_lname">Last Name</label>
                                    <input type="text" class="form-control" id="m_lname" name="lname">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label for="m_email">Telp.number</label>
                                    <input name="telp" id="telp" value="" required="required" aria-required="true"
                                        class="form-control" title="Your Telephone Number" type="text" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label for="m_email">Email</label>
                                    <input name="email" id="email" value="" required="required" aria-required="true"
                                        class="form-control"
                                        pattern="^(([-\w\d]+)(\.[-\w\d]+)*@([-\w\d]+)(\.[-\w\d]+)*(\.([a-zA-Z]{2,5}|[\d]{1,3})){1,2})$"
                                        title="Your email address" type="email" spellcheck="false" size="30" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label for="pass1">Password</label>
                                    <input type="password" id="psw1" name="pass"
                                        pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" class="form-control"
                                        title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                                        required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Submit">
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- End modal login -->

                    <?php }?>
                    <!-- <p><a target="_blank" class="btn btn-outline-white btn-lg site-animate" data-toggle="modal"
                            data-target="#reservationModal" onclick="updatedate()">Reservation</a></p> -->
                </div>
            </div>
        </div>
    </section>
    <div id="site-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" /></svg></div>


    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>

    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>

    <script src="js/jquery.animateNumber.min.js"></script>

    <script src="js/main.js"></script>
</body>

</html>