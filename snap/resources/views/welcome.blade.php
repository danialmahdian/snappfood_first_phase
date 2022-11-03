<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>burger html5 landing page</title>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/flaticon.css" />

    <!-- Animate -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Bootsnav -->
    <link rel="stylesheet" href="css/bootsnav.css">
    <!-- Color style -->
    <link rel="stylesheet" href="css/color.css">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" href="css/custom.css" />

    <link rel="stylesheet" href="css/style.css" />
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body data-spy="scroll" data-target="#navbar-menu" data-offset="100">

<!-- Preloader -->
<div id="loading">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <div class="object" id="object_one"></div>
            <div class="object" id="object_two"></div>
            <div class="object" id="object_three"></div>
            <div class="object" id="object_four"></div>
            <div class="object" id="object_five"></div>
            <div class="object" id="object_six"></div>
            <div class="object" id="object_seven"></div>
            <div class="object" id="object_eight"></div>
            <div class="object" id="object_big"></div>
        </div>
    </div>
</div>
<!--End Preloader -->
<!-- Navbar -->
<nav class="navbar navbar-default bootsnav no-background navbar-fixed black">
    <div class="container">

        <!-- Start Atribute Navigation -->
        <div class="attr-nav">
            <ul>
                <li class="side-menu"><a href="#"><i class="fa fa-bars"></i></a></li>
            </ul>
        </div>
        <!-- End Atribute Navigation -->

        <!-- Start Header Navigation -->
        <div class="navbar-header">
            <a class="navbar-brand" href="#"><img src="{{ asset('images/logo.png') }}" class="logo" alt=""></a>
        </div>
        <!-- End Header Navigation -->
    </div>

    <!-- Start Side Menu -->
    <div class="side">
        <a href="#" class="close-side"><i class="fa fa-times"></i></a>
        <div class="widget">
            <h6 class="title">SnappFood</h6>
            <ul class="link">
                <li><a href="#">Admin</a></li>
                <li><a href="#">User</a></li>
                <li><a href="#">Seller</a></li>
            </ul>
        </div>
    </div>
    <!-- End Side Menu -->
</nav>

<!-- Header -->
<header id="hello">
    <!-- Container -->
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="banner">
                    <h3>-introducing-</h3>
                    <h1>FATTY BURGER</h1>

                    <div class="inner_banner">
                        <div class="banner_content">
                            <p>A double layer of sear-sizzled 100% pure beef mingled with special sauce on a sesame seed bun and topped with melty American cheese, crisp lettuce, minced onions and tangy pickles.</p>
                            <p>*Based on pre-cooked patty weight.</p>
                        </div>
                        <div class="stamp">
{{--                            <img src="images/stamp.png" alt="" />--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Container end -->
    <p class="caption">*Limited Time Only</p>
</header><!-- Header end -->

<!-- Block Content -->
<section id="block">
    <div class="container">

        <!-- First section -->
        <div class="row">
            <div class="col-sm-8">
                <div class="feature">
                    <div class="shack_burger">
                        <div class="chicken">
{{--                            <img src="images/chicken.png" alt="Chicken" />--}}
                        </div>

                        <h2>Shack Burger </h2>
                        <p>Black Angus beef patty topped with American cheese, tomato, lettuce, and “Shack Sauce,” served in a grilled potato bun</p>
                    </div>
                    <p class="caption">*Limited Time Only</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="signature">
                    <div class="shape">
                        <span class="flaticon flaticon-burger"></span>
                        <p>signature</p>
                    </div>
                    <div class="signature_content">
                        <p>It used to be a Secret but not any more! Our tribute to the King is a Cheddar Beef Patty,</p>
                    </div>
                </div>
            </div>
        </div><!-- first section end -->


        <!-- Third section -->
        <!-- Carousel -->
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
            </ol>


            <!-- Forth section -->
            <div class="row forth_sec">
                <div class="col-sm-4">
                    <div class="menu">
                        <div class="inner_content">
                            <span class="flaticon flaticon-burger"></span>
                            <h2>menu</h2>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="drinks">
                        <div class="inner_content">
                            <span class="flaticon flaticon-drink"></span>
                            <h2>drinks</h2>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="sides">
                        <div class="inner_content">
                            <span class="flaticon flaticon-food"></span>
                            <h2>sides</h2>
                        </div>
                    </div>
                </div>
            </div><!-- forth section end -->
        </div>
</section><!-- Block Content end-->

<!-- Lock -->
<section id="lock">
    <h2>SERVING MORE THAN JUST BURGERS SINCE 1998</h2>
    <p>Check out our opening hours and location address below.</p>
</section>



<!-- Footer -->
<footer>
    <!-- Container -->
    <div class="container">
        <div class="row">

            <div class="col-lg-3 col-sm-4 col-xs-12 col-lg-offset-1 pull-right">
                <div class="subscribe">
                    <h4>Working hourse</h4>
                    <p> Monday-Friday 06:00-23:00</p>
                    <p> Sat-Sun 08:00-22:00 </p>



                </div>
            </div>

            <div class="col-lg-3 col-sm-4 col-xs-12 col-lg-offset-1 pull-right">
                <div class="contact_us">
                    <h4>Contact Us</h4>
                    <a href="">info@junkyburget.com</a>

                    <address>
                        Jalan Awan Hijau, Taman OUG<br />
                        58200 Kuala Lumpur <br />
                        Malaysia <br />
                    </address>
                </div>
            </div>

            <div class="col-lg-4 col-sm-4 col-xs-12 pull-right">
                <div class="basic_info">
                    <a href=""><img class="footer_logo" src="{{ asset('images/logo.png') }}" alt="Snapp Food" /></a>

                    <ul class="list-inline social">
                        <li><a href="" class="fa fa-facebook"></a></li>
                        <li><a href="" class="fa fa-twitter"></a></li>
                        <li><a href="" class="fa fa-instagram"></a></li>
                    </ul>

                    <div class="footer-copyright">
                        <p class="wow fadeInRight" data-wow-duration="1s">
                            Made with
                            <i class="fa fa-heart"></i>
                            by
                            <a target="_blank" href="http://bootstrapthemes.co">Bootstrap Themes</a> <br />
                            2016. All Rights Reserved
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div><!-- Container end -->
</footer><!-- Footer end -->


<!-- scroll up-->
<div class="scrollup">
    <a href="#"><i class="fa fa-chevron-up"></i></a>
</div><!-- End off scroll up-->

<!-- JavaScript -->
<script src="http://code.jquery.com/jquery-1.12.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<!-- Bootsnav js -->
<script src="js/bootsnav.js"></script>



<!--main js-->
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
