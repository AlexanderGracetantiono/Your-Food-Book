<!DOCTYPE html>
<!--
PROJECT UAS
Alexander / 51170018
Michelle Florence Abigail / 58170473
-->
<html lang="en">
<?php
session_start();
error_reporting(0);
ob_start();
include 'proc/db_connect.php';
$conn = Opencon();
$_SESSION['rsv']="";
?>

<head>
    <link rel="icon" href="images/logoraw.png">
    <title>FoodBook.com</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
    <link rel="stylesheet" href="css/chat2.css">

</head>

<body data-spy="scroll" data-target="#site-navbar" data-offset="200">

    <nav class="navbar navbar-expand-lg navbar-dark site_navbar bg-dark site-navbar-light" id="site-navbar">
        <div class="container">
            <img src="images/logoraw.png" width="40px" height="40px">
            <a class="navbar-brand" href="index.html">FoodBook</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#site-nav"
                aria-controls="site-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="site-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="#section-home" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="#section-about" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="#section-offer" class="nav-link">Offer</a></li>
                    <li class="nav-item"><a href="#section-menu" class="nav-link">Resto</a></li>
                    <li class="nav-item"><a href="#section-gallery" class="nav-link">Gallery</a></li>
                    <li class="nav-item"><a href="#section-contact" class="nav-link">Contact</a></li>
                    <?php if($_SESSION['login']=='true'){ ?>
                    <li class="nav-item"><a href="proc/logout.php" class="nav-link">Logout</a></li>
                    <li class="nav-item"><a href="#" data-toggle="modal" target="_blank" data-target="#statusmodal"
                            class="nav-link">Status</a></li>
                    <?php } else{?>
                    <li class="nav-item"><a href="register.php" class="nav-link">Register</a></li>
                    <li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->
    <!-- END nav -->
    <!-- cahtbot chatbotcahtbot chatbotcahtbot chatbotcahtbot chatbotcahtbot chatbotcahtbot chatbotcahtbot chatbotcahtbot chatbot -->
    <!-- cahtbot chatbotcahtbot chatbotcahtbot chatbotcahtbot chatbotcahtbot chatbotcahtbot chatbotcahtbot chatbotcahtbot chatbot -->
    <!-- cahtbot chatbotcahtbot chatbotcahtbot chatbotcahtbot chatbotcahtbot chatbotcahtbot chatbotcahtbot chatbotcahtbot chatbot -->
    <button class="open-button" onclick="openForm()"><b>Chat</b></button>

    <div class="chat-popup" id="myForm">
        <form class="form-container" onsubmit="rep_ly(event)">
            <span style="color: orange;font-size:34px;">Chat</span>
            <button type="button" class="btn cancel" onclick="closeForm()">X</button>
            <div id="div1" class="a">
                <div id="divrep">
                </div>
            </div>
            <!-- end -->
            <input type="text" id="ipt" class="a" placeholder='Ask us...'><br>
            <button type="submit" class="btn">Send</button>

        </form>
    </div>

    <script>
    function openForm() {
        document.getElementById("myForm").style.display = "block";
    }

    function closeForm() {
        document.getElementById("myForm").style.display = "none";
    }
    </script>
    <!-- chatbot end -->

    <section class="site-cover" style="background-image: url(images/bg_1.png);" id="section-home">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center site-vh-100">
                <div class="col-md-12">
                    <?php if($_SESSION['login']=='true'){
                      if($_SESSION['cek']=='f'){ 
                      header("location:proc/r_val.php");
                      }
                      ?>
                    <h1 class="site-heading site-animate mb-3">Welcome <span id="u_name"><?php echo $_SESSION['name'];?>
                        </span></h1>
                    <?php } else{?>
                    <h1 class="site-heading site-animate mb-3">Welcome To FoodBook</h1>
                    <?php } ?>
                    <h2 class="h5 site-subheading mb-5 site-animate">Search Our Food Book &amp; Book Our Food.
                    </h2>
                    <p><a class="btn btn-outline-white btn-lg site-animate"
                            style="font-size:40px; border:7px solid white;" href="reservation.php">Reservation</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- END section -->

    <section class="site-section" id="section-about" style="background-color:rgb(37, 36, 36);">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center mb-5 site-animate">
                    <h4 class="site-sub-title">About us</h4>
                    <h2 class="site-primary-title display-4" style="Color:White">What is FoodBook</h2>
                    <p>FoodBook is a website that allow you to book your favorite Restaurant
                    </p>
                    <p class="mb-4">
                        We Provide 3 Restaurant for you to choose<br>
                        FoodBook Also integrated with Bank KKG for Easy Transaction
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- END section -->


    <section class="site-section bg-light" id="section-offer">
        <div class="container" style="color:black">

            <div class="row">
                <div class="col-md-12 text-center mb-5 site-animate">
                    <h4 class="site-sub-title">Our Offers</h4>
                    <h2 class="display-4">Our Offer This Week</h2>
                    <div class="row justify-content-center">
                        <div class="col-md-7">
                            <p class="lead">We offer the best Quality Food From the best Restaurant in Jakarta</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="owl-carousel site-owl">

                        <div class="item">
                            <div class="media d-block mb-4 text-center site-media site-animate border-0">
                                <img src="images/ma ying shang shu.jpg" alt="Ma ying shang shu" class="img-fluid">
                                <div class="media-body p-md-5 p-4">
                                    <h5 class="text-primary">IDR 45K</h5>
                                    <h5 class="mt-0 h4">Ma Ying Shang Shu</h5>
                                    <p class="mb-4">Makanan khas China yang terbuat dari campuran mie <br>
                                        dan daging sapi cincang yang ditumis langsung bersama bumbu khas dan
                                        rempah-rempah.</p>

                                    <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Order Now!</a></p>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="media d-block mb-4 text-center site-media site-animate border-0">
                                <img src="images/ayam pengemis.jpg" alt="Ayam Pengemis" class="img-fluid">
                                <div class="media-body p-md-5 p-4">
                                    <h5 class="text-primary">IDR 65K</h5>
                                    <h5 class="mt-0 h4">Ayam Pengemis</h5>
                                    <p class="mb-4">Makanan Khas China Daging ayam yang telah diberi bumbu khusus
                                        dibungkus terlebih
                                        dahulu dengan daun teratai dan tanah liat.</p>

                                    <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Order Now!</a></p>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="media d-block mb-4 text-center site-media site-animate border-0">
                                <img src="images/tanghulu.jpg" alt="tanghulu" class="img-fluid">
                                <div class="media-body p-md-5 p-4">
                                    <h5 class="text-primary">IDR 15K</h5>
                                    <h5 class="mt-0 h4">Tanghulu</h5>
                                    <p class="mb-4"> Tanghulu atau manisan apel Tiongkok, merupakan camilan bergaya
                                        Beijing kuno yang
                                        terdiri dari tusuk sate,
                                        dengan buah apel yang dicelupkan pada gula cair, kemudian dikeringkan.</p>

                                    <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Order Now!</a></p>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="media d-block mb-4 text-center site-media site-animate border-0">
                                <img src="images/shabu-shabu.jpg" alt="shabu-shabu" class="img-fluid">
                                <div class="media-body p-md-5 p-4">
                                    <h5 class="text-primary">IDR 30K</h5>
                                    <h5 class="mt-0 h4">Shabu-Shabu</h5>
                                    <p class="mb-4">Shabu-shabu merupakan makanan khas Jepang yang berisi irisan tipis
                                        daging, tahu, jamur
                                        dan sayuran.
                                        Daging yang biasanya dipakai adalah daging sapi, tetapi terkadang dipakai daging
                                        ayam, ikan, dan
                                        gurita.
                                        Daging shabu-shabu dinikmati bersama saus Jepang yang mengandung wijen yang
                                        disebut gomadare.</p>

                                    <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Order Now!</a></p>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="media d-block mb-4 text-center site-media site-animate border-0">
                                <img src="images/sushi.jpg" alt="Sushi" class="img-fluid">
                                <div class="media-body p-md-5 p-4">
                                    <h5 class="text-primary">IDR 25K</h5>
                                    <h5 class="mt-0 h4">Sushi</h5>
                                    <p class="mb-4">Sushi merupakan makanan khas Jepang yang sangat populer bukan hanya
                                        di negara asalnya
                                        tapi juga di luar
                                        negeri.
                                        Sushi dibuat dari nasi dengan tambahan makanan laut, telur, dan sayuran segar.
                                    </p>

                                    <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Order Now!</a></p>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="media d-block mb-4 text-center site-media site-animate border-0">
                                <img src="images/anmitsu.jpg" alt="anmitsu" class="img-fluid">
                                <div class="media-body p-md-5 p-4">
                                    <h5 class="text-primary">IDR 22K</h5>
                                    <h5 class="mt-0 h4">Anmitsu</h5>
                                    <p class="mb-4">Anmitsu terbuat dari agar-agar atau gelatin Jepang dalam sirop gula
                                        merah.
                                        Selain agar-agar, anmitsu juga dihiasi dengan kacang merah, kue mochi, es krim,
                                        dan buah-buahan favorit orang yang menikmatinya.</p>

                                    <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Order Now!</a></p>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="media d-block mb-4 text-center site-media site-animate border-0">
                                <img src="images/nakji bokkeum.jpg" alt="nakji bokkeum" class="img-fluid">
                                <div class="media-body p-md-5 p-4">
                                    <h5 class="text-primary">IDR 40K</h5>
                                    <h5 class="mt-0 h4">Nakji Bokkeum</h5>
                                    <p class="mb-4">Olahan laut yang terbuat dari gurita ini merupakan gurita goreng
                                        Biasanya disajikan dengan cara di goreng kering
                                        dan dicampur dengan tumis sayuran atau menjadi topping mie korea.
                                        Makanan ini memiliki cita rasa yang unik terutama dengan pasta cabe yang
                                        digunakan untuk membuatnya.
                                    </p>

                                    <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Order Now!</a></p>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="media d-block mb-4 text-center site-media site-animate border-0">
                                <img src="images/sundubu jjigae.jpg" alt="sundubu jjigae" class="img-fluid">
                                <div class="media-body p-md-5 p-4">
                                    <h5 class="text-primary">IDR 35K</h5>
                                    <h5 class="mt-0 h4">Sundubu Jigae</h5>
                                    <p class="mb-4">Sundubu jigae merupakan salah satu makanan berkuah khas Korea.
                                        Biasanya disajikan pada musim dingin atau saat hujan karena dapat menghangatkan
                                        tubuh.
                                        Bahan utama dari sundubu jigae ini adalah tahu yang sangat lembut, ditambah
                                        dengan kubis,
                                        udang, suiran ikan goreng dan juga cumi-cumi.
                                        Makanan ini kaya dengan gizi dan juga lezat disantap ketika masih hangat.</p>

                                    <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Order Now!</a></p>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="media d-block mb-4 text-center site-media site-animate border-0">
                                <img src="images/dasik.jpg" alt="dasik" class="img-fluid">
                                <div class="media-body p-md-5 p-4">
                                    <h5 class="text-primary">IDR 20K</h5>
                                    <h5 class="mt-0 h4">Dasik</h5>
                                    <p class="mb-4"> Dasik adalah makanan penutup yang memiliki ukuran satu kali gigit
                                        yang biasanya
                                        ditemani oleh teh.
                                        Dasik dibuat dari biji-bijian seperti gandum atau tepung dari biji-bijian yang
                                        dapat dikonsumsi dan
                                        campuran
                                        madu.
                                        Dasik biasanya memiliki beberapa bentuk berbeda dengan warna yang berbeda-beda
                                        pula
                                        yaitu hijau, kuning, merah mudah, hitam, dan putih.
                                    </p>

                                    <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Order Now!</a></p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- END section -->

    <section class="site-section" id="section-menu">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center mb-5 site-animate">
                    <h2 class="display-4">Restaurant</h2>
                </div>

                <div class="col-md-12 text-center">

                    <ul class="nav site-tab-nav nav-pills mb-5" id="pills-tab" role="tablist">
                        <li class="nav-item site-animate">
                            <a class="nav-link active" id="pills-jp-tab" data-toggle="pill" href="#pills-jp" role="tab"
                                aria-controls="pills-jp" aria-selected="true">Eatadakimasu</a>
                        </li>
                        <li class="nav-item site-animate">
                            <a class="nav-link" id="pills-ch-tab" data-toggle="pill" href="#pills-ch" role="tab"
                                aria-controls="pills-ch" aria-selected="false">Hao CHi!</a>
                        </li>
                        <li class="nav-item site-animate">
                            <a class="nav-link" id="pills-kr-tab" data-toggle="pill" href="#pills-kr" role="tab"
                                aria-controls="pills-kr" aria-selected="false">Sunbae</a>
                        </li>
                    </ul>

                    <div class="tab-content text-left">
                        <div class="tab-pane fade show active" id="pills-jp" role="tabpanel"
                            aria-labelledby="pills-jp-tab">
                            <div class="row">
                                <div class="col-md-6 site-animate">
                                    <div class="media menu-item">
                                        <img class="mr-3" src="images/jp1.jpg" class="img-fluid" alt="food.img">
                                        <div class="media-body">
                                            <h5 class="mt-0">Sushi</h5>
                                            <p>Fresh Sushi With Profesional Chef</p>
                                            <h6 class="text-primary menu-price">IDR 25K</h6>
                                        </div>
                                    </div>

                                    <div class="media menu-item">
                                        <img class="mr-3" src="images/jp5.jpg" class="img-fluid" alt="food.img">
                                        <div class="media-body">
                                            <h5 class="mt-0">Shabu Shabu</h5>
                                            <p>Best Meat From Japan!.</p>
                                            <h6 class="text-primary menu-price">IDR 30K</h6>
                                        </div>
                                    </div>

                                    <div class="media menu-item">
                                        <img class="mr-3" src="images/jp2.jpg" class="img-fluid" alt="food.img">
                                        <div class="media-body">
                                            <h5 class="mt-0">Ramen</h5>
                                            <p>Souyu Ramen With Chicken</p>
                                            <h6 class="text-primary menu-price">IDR 45K</h6>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6 site-animate">
                                    <div class="media menu-item">
                                        <img class="mr-3" src="images/jp3.jpg" class="img-fluid" alt="food.img">
                                        <div class="media-body">
                                            <h5 class="mt-0">Dango</h5>
                                            <p>Dango For your Appetizer.</p>
                                            <h6 class="text-primary menu-price">IDR 15K</h6>
                                        </div>
                                    </div>

                                    <div class="media menu-item">
                                        <img class="mr-3" src="images/jp4.jpg" class="img-fluid" alt="food.img">
                                        <div class="media-body">
                                            <h5 class="mt-0">Matcha</h5>
                                            <p>Green Tea From the best leaf</p>
                                            <h6 class="text-primary menu-price">IDR 10K</h6>
                                        </div>
                                    </div>

                                    <div class="media menu-item">
                                        <img class="mr-3" src="images/jp6.jpg" class="img-fluid" alt="food.img">
                                        <div class="media-body">
                                            <h5 class="mt-0">Beef Soba</h5>
                                            <p>Beef Souyu Soba</p>
                                            <h6 class="text-primary menu-price">IDR 55K</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-ch" role="tabpanel" aria-labelledby="pills-ch-tab">
                            <div class="row">
                                <div class="col-md-6 site-animate">

                                    <div class="media menu-item">
                                        <img class="mr-3" src="images/ch1.jpg" class="img-fluid" alt="food.img">
                                        <div class="media-body">
                                            <h5 class="mt-0">Chicken Dumpling</h5>
                                            <p>Chicken Dumpling For your Appetizer.</p>
                                            <h6 class="text-primary menu-price">IDR 26K</h6>
                                        </div>
                                    </div>

                                    <div class="media menu-item">
                                        <img class="mr-3" src="images/ch2.jpg" class="img-fluid" alt="food.img">
                                        <div class="media-body">
                                            <h5 class="mt-0">Veggie Dumpling</h5>
                                            <p>Veggie Dumpling for Vegetarian</p>
                                            <h6 class="text-primary menu-price">IDR 35K</h6>
                                        </div>
                                    </div>

                                    <div class="media menu-item">
                                        <img class="mr-3" src="images/ch3.jpg" class="img-fluid" alt="food.img">
                                        <div class="media-body">
                                            <h5 class="mt-0">Kombucha</h5>
                                            <p>Herbal Drink From China</p>
                                            <h6 class="text-primary menu-price">IDR 12K</h6>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6 site-animate">

                                    <div class="media menu-item">
                                        <img class="mr-3" src="images/ch4.jpg" class="img-fluid" alt="food.img">
                                        <div class="media-body">
                                            <h5 class="mt-0">Chicken Soup</h5>
                                            <p>Soup With Herba.</p>
                                            <h6 class="text-primary menu-price">IDR 14K</h6>
                                        </div>
                                    </div>

                                    <div class="media menu-item">
                                        <img class="mr-3" src="images/menu_2.jpg" class="img-fluid" alt="food.img">
                                        <div class="media-body">
                                            <h5 class="mt-0">Lotus Root Soup</h5>
                                            <p>Lotus Root Soup With Red Beans</p>
                                            <h6 class="text-primary menu-price">IDR 45K</h6>
                                        </div>
                                    </div>

                                    <div class="media menu-item">
                                        <img class="mr-3" src="images/menu_1.jpg" class="img-fluid" alt="food.img">
                                        <div class="media-body">
                                            <h5 class="mt-0">Pork Belly</h5>
                                            <p>Crisp Pork Belly With Konyaku Rice</p>
                                            <h6 class="text-primary menu-price">IDR 78K</h6>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-kr" role="tabpanel" aria-labelledby="pills-kr-tab">
                            <div class="row">
                                <div class="col-md-6 site-animate">

                                    <div class="media menu-item">
                                        <img class="mr-3" src="images/kr1.jpg" class="img-fluid" alt="food.img">
                                        <div class="media-body">
                                            <h5 class="mt-0">Baesuk</h5>
                                            <p>Korean Steamed Pears With Red Beans.</p>
                                            <h6 class="text-primary menu-price">IDR 24K</h6>
                                        </div>
                                    </div>

                                    <div class="media menu-item">
                                        <img class="mr-3" src="images/kr2.jpg" class="img-fluid" alt="food.img">
                                        <div class="media-body">
                                            <h5 class="mt-0">Mul-naengmyeon</h5>
                                            <p>Cold Noodle From Korea.</p>
                                            <h6 class="text-primary menu-price">IDR 45K</h6>
                                        </div>
                                    </div>

                                    <div class="media menu-item">
                                        <img class="mr-3" src="images/kr3.jpg" class="img-fluid" alt="food.img">
                                        <div class="media-body">
                                            <h5 class="mt-0">SULBING</h5>
                                            <p>Melon With Icecream on top</p>
                                            <h6 class="text-primary menu-price">IDR 14K</h6>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6 site-animate">

                                    <div class="media menu-item">
                                        <img class="mr-3" src="images/kr4.jpg" class="img-fluid" alt="food.img">
                                        <div class="media-body">
                                            <h5 class="mt-0">Goguma</h5>
                                            <p>Sweet Potato Latte</p>
                                            <h6 class="text-primary menu-price">IDR 18K</h6>
                                        </div>
                                    </div>

                                    <div class="media menu-item">
                                        <img class="mr-3" src="images/kr5.jpg" class="img-fluid" alt="food.img">
                                        <div class="media-body">
                                            <h5 class="mt-0">Kimchi</h5>
                                            <p>Spicy Food From Korea</p>
                                            <h6 class="text-primary menu-price">IDR 45K</h6>
                                        </div>
                                    </div>

                                    <div class="media menu-item">
                                        <img class="mr-3" src="images/kr6.jpg" class="img-fluid" alt="food.img">
                                        <div class="media-body">
                                            <h5 class="mt-0">Tteokbokki</h5>
                                            <p>Spicy Stir-fried Rice Cakes</p>
                                            <h6 class="text-primary menu-price">IDR 34K</h6>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <style>
    .img-fluid {
        width: 380px;
        height: 330px;
        border: 2px solid white;
    }
    </style>
    <section class="site-section" id="section-gallery" style="background-color: rgb(37, 36, 36);">
        <div class="container">
            <div class="row site-custom-gutters">

                <div class="col-md-12 text-center mb-5 site-animate">
                    <h2 class="display-4" style="color:White;">Gallery</h2>
                </div>

                <div class="col-md-4 site-animate">
                    <a href="images/jp1.jpg" class="site-thumbnail image-popup">
                        <img src="images/jp1.jpg" alt="food.img" class="img-fluid">
                    </a>
                </div>
                <div class="col-md-4 site-animate">
                    <a href="images/jp2.jpg" class="site-thumbnail image-popup">
                        <img src="images/jp2.jpg" alt="food.img" class="img-fluid">
                    </a>
                </div>
                <div class="col-md-4 site-animate">
                    <a href="images/jp3.jpg" class="site-thumbnail image-popup">
                        <img src="images/jp3.jpg" alt="food.img" class="img-fluid">
                    </a>
                </div>

                <div class="col-md-4 site-animate">
                    <a href="images/jp4.jpg" class="site-thumbnail image-popup">
                        <img src="images/jp4.jpg" alt="food.img" class="img-fluid">
                    </a>
                </div>
                <div class="col-md-4 site-animate">
                    <a href="images/jp5.jpg" class="site-thumbnail image-popup">
                        <img src="images/jp5.jpg" alt="food.img" class="img-fluid">
                    </a>
                </div>
                <div class="col-md-4 site-animate">
                    <a href="images/jp6.jpg" class="site-thumbnail image-popup">
                        <img src="images/jp6.jpg" alt="food.img" class="img-fluid">
                    </a>
                </div>

                <div class="col-md-4 site-animate">
                    <a href="images/kr1.jpg" class="site-thumbnail image-popup">
                        <img src="images/kr1.jpg" alt="food.img" class="img-fluid">
                    </a>
                </div>
                <div class="col-md-4 site-animate">
                    <a href="images/ch4.jpg" class="site-thumbnail image-popup">
                        <img src="images/ch4.jpg" alt="food.img" class="img-fluid">
                    </a>
                </div>
                <div class="col-md-4 site-animate">
                    <a href="images/ch6.jpg" class="site-thumbnail image-popup">
                        <img src="images/ch6.jpg" alt="food.img" class="img-fluid">
                    </a>
                </div>

                <div class="col-md-4 site-animate">
                    <a href="images/kr4.jpg" class="site-thumbnail image-popup">
                        <img src="images/kr4.jpg" alt="food.img" class="img-fluid">
                    </a>
                </div>
                <div class="col-md-4 site-animate">
                    <a href="images/ch2.jpg" class="site-thumbnail image-popup">
                        <img src="images/ch2.jpg" alt="food.img" class="img-fluid">
                    </a>
                </div>
                <div class="col-md-4 site-animate">
                    <a href="images/kr6.jpg" class="site-thumbnail image-popup">
                        <img src="images/kr6.jpg" alt="food.img" class="img-fluid">
                    </a>
                </div>
            </div>
        </div>
    </section>


    <footer class="site-footer site-bg-dark site-section" id="section-contact">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4 site-animate">
                            <h2 class="site-heading-2">About Us</h2>
                            <p>This Website Created by Alexander Grace and Michelle Florence<br>
                                and idea by Martin Komala<br><br>
                                Contact us on:<br>
                                -> mflorenceabigail@yahoo.com <br>
                                -> alexander.remains.1247@gmail.com <br><br>
                                Thank you.
                            </p>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </footer>
    <!-- Modal for register -->

    <div class="modal fade" id="statusmodal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12 p-5">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <small>CLOSE </small><span aria-hidden="true">&times;</span>
                            </button>
                            <h1 class="mb-4">Status</h1>
                            <?php
                            
                            $email= $_SESSION['email'];
                            $query="SELECT * FROM `book` WHERE `email` = '$email'";
                            $result = mysqli_query($conn,$query);
                            $cek=mysqli_num_rows($result);
                            if($cek>0){
                                 while($row = mysqli_fetch_array($result)){
                                if($row['status']=='false'){
                                    $stat="Belum Dibayar";
                                }
                                else{$stat="Sudah Dibayar";}
                                echo $row['resto']." Type: ".$row['type']." Status:".$stat." Code: ".$row['code']."<br>Pesan: ".$row['pesan'];
                                echo"<hr><br>";
                                    }
                            }
                            else{
                                echo "Tidak ada Transaksi";
                            }
                            
                            ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End modal register -->
    <!-- loader -->
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
    <script>
    function myfun() {
        x = document.getElementById("u_name").innerHTML;
        sessionStorage.setItem("x", x);
    }
    myfun();
    </script>
    <script>
    var last = "";

    function randm(min, max) {
        return Math.floor(Math.random() * (max - min + 1)) + min;
    }

    function rep_ly(event) {
        var rep = "";
        var time = "";
        var greet = "";
        var end_greet = "";
        var c = 0;
        var x = document.getElementById("ipt").value;
        document.getElementById("ipt").value = "";
        var temp_ipt = x;
        x = x.toLowerCase();
        x = last.concat(x);
        // Greeting
        if (x.includes("Hello") || x.includes("hello") || x.includes("halo") || x.includes("Halo") || x.includes(
                "hallo") ||
            x.includes("Hallo")) {
            greet = "Halo ";
        }
        // Time pagi/siang/malem
        if (x.includes("Pagi") || x.includes("pagi")) {
            time = "Selamat Pagi, ";
        } else if (x.includes("Siang") || x.includes("siang")) {
            time = "Selamat Siang, ";
        } else if (x.includes("Malem") || x.includes("malem") || x.includes("Malam") || x.includes("malam")) {
            time = "Selamat Malam, ";
        }

        // VIP ONLY
        if (x.includes("vip")) {
            if (x.includes("harga") || x.includes("kapasitas")) {
                if (x.includes("1")) {
                    rep = "untuk VIP1 Harga nya Rp.1.200.000 dengan kapasitas 15 orang"
                } else if (x.includes("2")) {
                    rep = "untuk VIP2 Harga nya Rp.1.450.000 dengan kapasitas 15 orang"
                } else {
                    rep =
                        "Kita punya 2 tipe ruangan VIP untuk VIP1 Rp.1.200.000 dan VIP2 Rp.1.450.000 dengan masing-masing kapasitas 15 orang";
                }
            }
            if (x.includes("smok") || x.includes("rokok")) {
                rep = "Untuk Ruangan VIP karna tipenya ruangan diharapkan untuk tidak merokok";
            } else {
                rep = "x";
            }
            end_greet = " TerimaKasih.";
        }
        // pesan nya?, 1. Harga(Meja,Makanan ,Meja) 
        else if (x.includes("harga") || x.includes("Harga")) {
            if (x.includes("Meja") || x.includes("meja")) { //harga _>meja
                if ((x.includes("Persegi") || x.includes("persegi")) || (x.includes("Bundar") || x.includes(
                        "bundar"))) {
                    if (x.includes("1") || x.includes("2") || x.includes("3") || x.includes("4") ||
                        x.includes("5") || x.includes("6") || x.includes("7") || x.includes("8") || x.includes("9") || x
                        .includes("0")) {
                        if (x.includes("Persegi") || x.includes("persegi")) {
                            if (x.includes("2") && (x.includes("orang") || x.includes("Orang"))) {
                                rep = "Untuk Pemesanan Meja ini Cukup Membooking sebesar Rp.100.000 Saja";
                            } else if (x.includes("4") && (x.includes("orang") || x.includes("Orang"))) {
                                rep = "Untuk Pemesanan Meja ini Cukup Membooking sebesar Rp.150.000 Saja";
                            } else if (x.includes("6") && (x.includes("orang") || x.includes("Orang"))) {
                                rep = "Untuk Pemesanan Meja ini Cukup Membooking sebesar Rp.200.000 Saja";
                            } else if (x.includes("10") && (x.includes("orang") || x.includes("Orang"))) {
                                rep = "Untuk Pemesanan Meja ini Cukup Membooking sebesar Rp.300.000 Saja";
                            } else if (x.includes("15") && (x.includes("orang") || x.includes("Orang"))) {
                                rep = "Untuk Pemesanan Meja ini Cukup Membooking sebesar Rp.450.000 Saja";
                            } else {
                                rep = "Seperti nya Meja untuk ukuran segitu tidak tersedia..";
                            }
                            last = "";
                        } else if (x.includes("Bundar") || x.includes("bundar")) {
                            if (x.includes("4") && (x.includes("orang") || x.includes("Orang"))) {
                                rep = "Untuk Pemesanan Meja ini Cukup Membooking sebesar Rp.200.000 Saja";
                            } else if (x.includes("6") && (x.includes("orang") || x.includes("Orang"))) {
                                rep = "Untuk Pemesanan Meja ini Cukup Membooking sebesar Rp.300.000 Saja";
                            } else if (x.includes("10") && (x.includes("orang") || x.includes("Orang"))) {
                                rep = "Untuk Pemesanan Meja ini Cukup Membooking sebesar Rp.500.000 Saja";
                            } else if (x.includes("15") && (x.includes("orang") || x.includes("Orang"))) {
                                rep = "Untuk Pemesanan Meja ini Cukup Membooking sebesar Rp.600.000 Saja";
                            } else {
                                rep = "Seperti nya Meja untuk ukuran segitu tidak tersedia..";
                            }
                            last = "";
                        } //minsal dia gak nulis brapa banyak meja
                    } else {
                        last = x + " orang";
                        rep = "Tolong lebih Spesifik lagi Berapa Jumlah Orang nya..";
                        time = ""
                    }
                } //tutup klo dia gamake kotak/bundar
                // harga mahal meja nya..... dia gak spesifik tapi bilang mahal
                else if (x.includes("Mahal") || x.includes("mahal")) {
                    rep =
                        "Harga booking Meja kita tidak mahal kok, karena setelah anda datang uang yang anda bayarkan akan dikembalikan dalam bentuk kredit yang dapat digunakan untuk pemesanan menu..";
                    last = "";
                } else {
                    last = x;
                    rep = "Tolong lebih Spesifik lagi Bagaimana Tipe meja nya? Bundar/Persegi";
                    time = ""
                }
            } //tutup meja
            else if (x.includes("Makanan") || x.includes("makanan") || x.includes("Menu") || x.includes("menu")) {
                if (x.includes("Mahal") || x.includes("mahal")) {
                    rep = "Harga Makanan Kita Cukup Standart kok";

                } else {
                    rep = "Untuk Harga menu nya sangat standart kok, berkisar dari Rp.10.000 untuk menu pembuka..";
                }
            } else if (x.includes("Mahal") || x.includes("mahal")) {
                rep =
                    "Harga booking Meja kita tidak mahal kok, karena setelah anda datang uang yang anda bayarkan akan dikembalikan dalam bentuk kredit yang dapat digunakan untuk pemesanan menu..";
            } else {
                rep = "x";
            }
            // Ini klo dia nanya, klo cmn hello aja gausah terima kasih.
            end_greet = " TerimaKasih.";
        } else if (x.includes("kembali") || x.includes("Kembali") || x.includes("refund") || x.includes("Refund") ||
            x.includes("pengembalian") || x.includes("Pengembalian")) {

            if (x.includes("uang") || x.includes("Uang")) {

                if (x.includes("datang") || x.includes("Datang") || x.includes("hadir") ||
                    x.includes("Hadir") || x.includes("jadi") || x.includes("Jadi")) {
                    if (x.includes("tidak") || x.includes("gak") ||
                        x.includes("gk") || x.includes("berhalangan") || x.includes("tdk")) {
                        rep =
                            "Maaf Pengembalian uang apabila anda tidak datang maka tidak akan dikembalikan kecuali untuk ruangan VIP";
                    } else {
                        rep = "Pengembalian uang dalam bentuk Credit yang bisa digunakan di Restoran yang anda pilih";
                    }
                } else if (x.includes("tidak") || x.includes("gk") || x.includes("gak")) {
                    if (x.includes("puas") || x.includes("senang") || x.includes("suka")) {
                        rep = "Untuk Masalah Tersebut harap menghubungi nama restoran yang bersangkutan.";
                    } else {
                        rep = "x";
                    }
                } else {
                    rep = "Pengembalian uang dalam bentuk Credit yang bisa digunakan di Restoran yang anda pilih";
                }
            } else {
                rep = "x";
            }
            end_greet = " TerimaKasih.";

        } else if (x.includes("minsal") || x.includes("perminsalan") || x.includes("misal") ||
            x.includes("contoh") || x.includes("contohnya") ||
            x.includes("apabila") || x.includes("kalau") || x.includes("kalo")) {

            if (x.includes("datang") || x.includes("Datang") || x.includes("hadir") ||
                x.includes("Hadir") || x.includes("jadi") || x.includes("Jadi")) {
                if (x.includes("tidak") || x.includes("gak") ||
                    x.includes("gk") || x.includes("berhalangan") || x.includes("tdk")) {
                    if ((x.includes("sudah") || x.includes("udah")) && (x.includes("bayar") || x.includes("book") ||
                            x.includes("transfer") || x.includes("trans"))) {
                        rep =
                            "apabila anda tidak datang tetapi sudah membayar maka tidak akan dikembalikan kecuali untuk ruangan VIP";
                    } else {
                        rep =
                            "Apabila anda belum mentransfer dalam 24jam maka pemesanan anda pada hari tersebut akan di hapus";
                    }
                } else {
                    rep = "apabila anda belum membayar maka sistem akan membatalkan pemesanan anda dalam waktu 24 jam";
                }
            } else {
                rep = "apabila anda belum membayar maka sistem akan membatalkan pemesanan anda dalam waktu 24 jam";
            }
            end_greet = " TerimaKasih.";
        } else if (greet == "" && time == "") {
            rep = "x";
        } else {
            rep = "";
        }
        if (rep == "x" && greet == "") {
            rep = "Hai.. TerimaKasih Sudah menghubungi kami, pesan anda akan kami sampaikan secepatnya..";
            end_greet = "";
        }
        var true_reply = ((greet.concat(time)).concat(rep)).concat(end_greet);
        event.preventDefault();
        c_ipt(temp_ipt);
        c_rep(true_reply);
    }

    function c_rep(a) {
        var p_rep = document.createElement("p");
        p_rep.className = 'rpy';
        var n_rep = document.createTextNode(a);
        p_rep.appendChild(n_rep);
        var e_rep = document.getElementById("divrep");
        e_rep.appendChild(p_rep);
    }

    function c_ipt(a) {
        var p_rep = document.createElement("p");
        p_rep.className = 'ipt';
        var n_rep = document.createTextNode(a);
        p_rep.appendChild(n_rep);
        var e_rep = document.getElementById("divrep");
        e_rep.appendChild(p_rep);
    }

    function myf() {
        var a = sessionStorage.getItem("x");
        if (a == null) {
            a = '';
        }
        var rep;
        var time = new Date().getHours();
        var time = new Date().getHours();
        if (time < 20) {
            rep = "Good day " + a + " How can i help you?";
            c_rep(rep);
        } else {
            rep = "Good Night " + a + " How can i help you?";
            c_rep(rep);
        }
    }


    myf();
    </script>


</body>

</html>