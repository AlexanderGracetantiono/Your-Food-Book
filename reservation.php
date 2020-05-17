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


<body data-spy="scroll" data-target="#site-navbar" data-offset="200" style="background-color:black;">

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
                    <li class="nav-item"><a href="register.php" class="nav-link">Register</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="site-cover" style="background-image: url(images/bg_1.png);" id="section-home">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center site-vh-100">
                <div class="col-md-12">

                    <!-- Modal  for peesanan meja-->

                    <style>
                    input[type=date]::-webkit-inner-spin-button {
                        -webkit-appearance: none;
                        display: none;
                    }
                    </style>

                    <div class="row">
                        <div class="col-lg-12 p-5">
                            <?php
                            if($_SESSION['login']=='true'){
                            ?>
                            <h1 class="mb-4" style="color:white;">Reserve A Table</h1>
                            <form action="proc/reserve.php" method="post">
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <input type="text" class="form-control" id="m_fname" name="p_fname"
                                            placeholder="First Name">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input type="text" class="form-control" id="m_lname" name="p_lname"
                                            placeholder="Last Name">
                                    </div>
                                </div>
                                <!-- <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label for="m_email">Email</label>
                                        <input name="p_email" id="email" value="" required="required"
                                            aria-required="true" class="form-control"
                                            pattern="^(([-\w\d]+)(\.[-\w\d]+)*@([-\w\d]+)(\.[-\w\d]+)*(\.([a-zA-Z]{2,5}|[\d]{1,3})){1,2})$"
                                            title="Your email address" type="email" spellcheck="false" size="30" />
                                    </div>
                                </div> -->
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label for="m_people">How Many People</label>
                                        <select name="p_type" id="m_people" class="form-control">
                                            <option value="1">1 People</option>
                                            <option value="2">2 People</option>
                                            <option value="3">3 People</option>
                                            <option value="4">4 People</option>
                                            <option value="5+">5+ People</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="m_res">Select Restaurant</label>
                                        <select name="p_resto" id="m_res" class="form-control">
                                            <option value="Haochi">Hao Chi!</option>
                                            <option value="Eatadakimasu">Eatadakimasu</option>
                                            <option value="Sunbae">Sunbae</option>
                                        </select>
                                    </div>
                                    <!-- <div class="col-md-6 form-group">
                                        <label for="m_phone">Phone</label>
                                        <input type="text" class="form-control" id="m_phone" name="p_telp">
                                    </div> -->
                                </div>

                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label for="m_date">Date</label>
                                        <input type="date" class="form-control" id="m_date" min="2019-01-01"
                                            name="p_date" max="2020-01-01">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="m_time">Time</label>
                                        <input type="time" class="form-control" id="m_time" max="20:00" min="07:00"
                                            name="p_time">
                                    </div>
                                </div>
                                <?php 
                                if($_SESSION['rsv']=='f'){
                                ?>
                                <p>Maaf Meja tidak tersedia pada tanggal dan waktu yang anda pilih</p>
                                <?php } ?>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label for="m_message">Message</label>
                                        <textarea class="form-control" id="m_message" cols="30" rows="7"
                                            name="p_mssg"></textarea>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <input type="submit" class="btn btn-primary btn-lg btn-block"
                                            value="Reserve Now">
                                    </div>
                                </div>
                                <script>
                                function updatedate() {
                                    var currdate = new Date();
                                    //Mon Jun 17 2019 15:27:46 GMT+0700 (Indochina Time)
                                    var month = currdate.getMonth();
                                    var year = currdate.getFullYear();
                                    var date = currdate.getDate();
                                    month = month + 1;
                                    if (month < 10) {
                                        month = "0" + month;
                                    }
                                    if (date < 10) {
                                        date = "0" + date;
                                    }
                                    var mindate = year + "-" + month + "-" + date;
                                    document.getElementById("m_date").min = mindate;
                                    document.getElementById("m_date").value = mindate;

                                }
                                updatedate()
                                </script>
                            </form>
                            <?php 
                            } else {
                            ?>
                            <div class="container" style="background-color:white;border-radius:2pc;">
                                <div class="row">
                                    <div class="col-md-12 text-center mb-5 site-animate">

                                        <h3 class="site-primary-title display-4" style="Color:black">Reservation<br>Need
                                            to
                                            Login First
                                        </h3>
                                        <br>
                                        <h4 class="site-sub-title">
                                            Have FoodBook Account?
                                        </h4>
                                        <a href="login.php" class="nav-link"
                                            style="font-size:40px;color:blue;">Login</a><br>
                                        <h4 class="site-sub-title">
                                            or
                                        </h4>
                                        <a href="register.php" class="nav-link" style="font-size:40px;color:blue;">Sign
                                            Up now</a>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>

                    <!-- END Modal -->
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