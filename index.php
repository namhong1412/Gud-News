<?php 
    include_once 'controller/database.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Document Title -->
    <title>Home | Gud News</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="views/assets/images/logo/favicon.png">
    <!-- CSS Files -->
    <!--==== Google Fonts ====-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
    <!--==== Bootstrap css file ====-->
    <link rel="stylesheet" href="views/assets/css/bootstrap.min.css">
    <!--==== Font-Awesome css file ====-->
    <link rel="stylesheet" href="views/assets/css/font-awesome.min.css">
    <!--==== Style css file ====-->
    <link rel="stylesheet" href="views/assets/css/style.css">
    <!--==== Responsive css file ====-->
    <link rel="stylesheet" href="views/assets/css/responsive.css">
    <!--==== Custom css file ====-->
    <link rel="stylesheet" href="views/assets/css/custom.css">
</head>

<body>
    <!-- Preloader -->
    <div class="preLoader">
        <div class="preload-inner">
            <div class="sk-cube-grid">
                <div class="sk-cube sk-cube1"></div>
                <div class="sk-cube sk-cube2"></div>
                <div class="sk-cube sk-cube3"></div>
                <div class="sk-cube sk-cube4"></div>
                <div class="sk-cube sk-cube5"></div>
                <div class="sk-cube sk-cube6"></div>
                <div class="sk-cube sk-cube7"></div>
                <div class="sk-cube sk-cube8"></div>
                <div class="sk-cube sk-cube9"></div>
            </div>
        </div>
    </div>
    <!-- End Of Preloader -->
    <!-- Main header -->
    <header class="header">
        <!-- Start Header Navbar-->
        <div class="main-header">
            <div class="main-menu-wrap">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-3 col-md-4 col-6" style="max-width: 20%;">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="index.html">
                                    <img src="views/assets/img/logo.png" data-rjs="2" alt="jironis">
                                </a>
                            </div>
                            <!-- End of Logo -->
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-4 col-6 menu-button">
                            <div class="menu--inner-area clearfix">
                                <div class="menu-wraper">
                                    <nav>
                                        <!-- Header-menu -->
                                        <div class="header-menu dosis">
                                            <ul>
                                                <li class="active"><a href="index.php">Home</a></li>
                                                <li><a href="#features">About us</a></li>
                                            </ul>
                                        </div>
                                        <!-- End of Header-menu -->
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-8 d-md-block d-none">
                            <div class="urgent-call text-right">
                                <a href="#" class="btn">Contribute news</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Navbar-->
    </header>
    <!-- End of Main header -->
    <!-- home banner area -->
    <div class="banner-area-inner">
        <div class="banner-inner-area banner-area1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-8 col-lg-6">
                        <!-- banner text -->
                        <div class="banner-text-inner">
                            <div class="banner-shape-wrap">
                                <div class="banner-shape-inner">
                                    <img src="views/assets/img/banner/shaps1.png" alt="" class='shape shape1 rotate3d'>
                                    <img src="views/assets/img/banner/shaps2.png" alt="" class='shape shape2 rotate2d'>
                                    <img src="views/assets/img/banner/shaps3.png" alt="" class='shape shape3 rotate-2d'>
                                    <img src="views/assets/img/banner/shaps4.png" alt="" class='shape shape4 rotate3d'>
                                    <img src="views/assets/img/banner/shaps5.png" alt="" class='shape shape5 rotate2d'>
                                    <img src="views/assets/img/banner/shaps6.png" alt="" class='shape shape6 rotate-2d'>
                                    <img src="views/assets/img/banner/shaps7.png" alt="" class='shape shape7 rotate3d'>
                                </div>
                            </div>
                            <h1>Gud News -<br> Light tomorrow <br> with today</h1>
                            <p>This website bring you articles with positive and optimistic information about aspects of life, especially the Covid 19- related situations.</p>
                            <a href="#" class="btn">Read news</a>
                            <a href="#" class="btn">About us</a>
                        </div>
                        <!-- banner text -->
                    </div>
                    <div class="col-lg-6 col-md-4 offse-xl-2">
                        <!-- banner image-->
                        <div class="banner-image">
                            <img src="views/assets/img/banner/mockup.png" alt="">
                        </div>
                        <!--End of banner image-->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- start blog area -->
    <section class="border-top pt-115 pb-80" id='blog' style="border-top: none !important;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-12">
                    <div class="section-title text-center">
                        <h2>News</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php include_once 'views/show/show_all_post.php'; ?>
            </div>
        </div>
    </section>
    <!-- end of blog artea -->
    <!-- download app -->
    <section class="border-top pt-110 pb-150">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-12">
                    <div class="download-app-inner text-center">
                        <h2 class="h1">
                            Message
                        </h2>
                        <h3>"Covid-19 đang lấy đi nhiều thứ từ chúng ta. Nhưng nó cũng cho chúng ta cơ hội đặc biệt để đến với nhau, để làm việc với nhau, để học tập với nhau và để phát triển cùng nhau"</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of download app -->
    <footer class="footer">
        <div class="footerbg">
            <img src="views/assets/img/footer-bg.png" alt="">
        </div>
        <div class="footer-top pt-120 pb-110">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <!-- footer widget -->
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <a href="index.html"><img src="views/assets/img/logo.png" alt=""></a>
                            </div>
                            <p>A website that contains articles that bring positive, optimistic information about life and especially about the situation of Covid-19.</p>
                            <!-- footer social area -->
                            <div class="footer-social-area">
                                <ul class="social-icons social-icons-light nav">
                                    <li><a href="#" target="_blank"><i class="fa fa-facebook-f"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                            <!-- End of footer social area -->
                        </div>
                        <!--End of footer widget -->
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="footer-widget">
                            <!-- widget header -->
                            <div class="widget-header">
                                <h5>Our Address</h5>
                            </div>
                            <!-- widget header -->
                            <div class="widget-body">
                                <ul class="address-list">
                                    <li>
                                        <span><i class="fa  fa-phone-square"></i></span>
                                        (+84) 974 899 663
                                    </li>
                                    <li>
                                        <span><i class="fa  fa-envelope"></i></span>
                                        nguyennamhong3012@gmail.com
                                    </li>
                                    <li>
                                        <span><i class="fa  fa-map"></i></span>
                                        BKHUP Co-working Space - Ha Noi
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="footer-widget">
                            <div class="widget-body">
                                <div class="twetter-post-inner">
                                    <div class="footer-post-details">
                                        @GudNews - Light tomorrow with today (･´з`･)
                                    </div>
                                    <div class="twetter-post">
                                        <span><i class="fa fa-twitter"></i></span>
                                        GudNews - Apr 25, 2020
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="footer-text text-center">
                <p>© copyright 2020 by Mắm - Hackcocy 2020 (Hackathon online)</p>
            </div>
        </div>
    </footer>
    <!-- back to top -->
    <div class="back-to-top">
        <a href="#"><i class="fa fa-chevron-up"></i></a>
    </div>
    <!-- back to top -->
    <!-- JS Files -->
    <!-- ==== JQuery 3.3.1 js file==== -->
    <script src="views/assets/js/jquery-3.3.1.min.js"></script>
    <!-- ==== Bootstrap js file==== -->
    <script src="views/assets/js/bootstrap.bundle.min.js"></script>
    <!-- ==== JQuery Waypoint js file==== -->
    <script src="views/assets/plugins/waypoints/jquery.waypoints.min.js"></script>
    <!-- ==== Parsley js file==== -->
    <script src="views/assets/plugins/parsley/parsley.min.js"></script>
    <!-- ==== parallax js==== -->
    <script src="views/assets/plugins/parallax/parallax.js"></script>
    <!-- ==== Owl Carousel js file==== -->
    <script src="views/assets/plugins/owl-carousel/owl.carousel.min.js"></script>
    <!-- ==== Menu  js file==== -->
    <script src="views/assets/js/menu.min.js"></script>
    <!-- ==== Script js file==== -->
    <script src="views/assets/js/scripts.js"></script>
    <!-- ==== Custom js file==== -->
    <script src="views/assets/js/custom.js"></script>
</body>

</html>