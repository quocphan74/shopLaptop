<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<head>
    <title>Modern Shoppe a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Sign In :: w3layouts</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Modern Shoppe Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!--//for-mobile-apps -->
    <!--Custom Theme files -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--//Custom Theme files -->
    <!--js-->
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/modernizr.custom.js"></script>
    <!--//js-->
    <!--cart-->
    <script src="js/simpleCart.min.js"></script>
    <!--cart-->
    <!--web-fonts-->
    <link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Pompiere' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Fascinate' rel='stylesheet' type='text/css'>
    <!--web-fonts-->
    <!--animation-effect-->
    <link href="css/animate.min.css" rel="stylesheet">
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <!--//animation-effect-->
    <!--start-smooth-scrolling-->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!--//end-smooth-scrolling-->
</head>

<body>
    <!--header-->
            <!--header-three-->
                    <!--navbar-header-->
                   
                        <!--//navbar-collapse-->
                        <header class="cd-main-header">
                            <ul class="cd-header-buttons">
                                <li>
                                    <a class="cd-search-trigger" href="#cd-search"> <span></span></a>
                                </li>
                            </ul>
                            <!-- cd-header-buttons -->
                        </header>
                    </div>
                    <!--//navbar-header-->
                </nav>
                <div id="cd-search" class="cd-search">
                    <form>
                        <input type="search" placeholder="Search...">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--//header-->
    <!--breadcrumbs-->
    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow fadeInUp" data-wow-delay=".5s">
                <li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Trang Chủ</a></li>
                <li class="active">Đăng Nhập</li>
            </ol>
        </div>
    </div>
    <!--//breadcrumbs-->
    <!--login-->
    <div class="login-page">
        <div class="title-info wow fadeInUp animated" data-wow-delay=".5s">
            <h3 class="title"><span>Đăng Nhập</span></h3>
        </div>
        <div class="widget-shadow">
            <div class="login-top wow fadeInUp animated" data-wow-delay=".7s">
                <h4>Chào mừng bạn đến với Toyy Shoppe !? <a href="register.php">Đăng Ký Ngay »</a> </h4>
            </div>
            <div class="login-body wow fadeInUp animated" data-wow-delay=".7s">
                <form method="post" action="dangnhap.php">
                    <input type="text" class="user" name="email" placeholder="Enter your email" required="" value="<?php if(isset($_COOKIE['user'])) echo $_COOKIE['user']; ?>">
                    <input type="password" name="password" class="lock" placeholder="Password" value="<?php if(isset($_COOKIE['pass'])) echo $_COOKIE['pass']; ?>">
                    <input type="submit" name="Sign_In" value="Sign In">
                    <div class="forgot-grid">
                        <label class="checkbox"><input type="checkbox" name="checkbox" value="" <?php if(isset($_COOKIE['user'])) echo 'checked'; ?> ><i></i>Ghi nhớ</label>
                        <div class="forgot">
                            <a href="#">Quên mật khẩu?</a>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="login-page-bottom">
            <h5> - OR -</h5>
            <div class="social-btn"><a href="#"><i>Facebook</i></a></div>
            <div class="social-btn sb-two"><a href="#"><i>Twitter</i></a></div>
        </div>
    </div>
    <!--//login-->
    <!--footer-->
    <div class="footer">
        <div class="container">
            <div class="footer-info">
                <div class="col-md-4 footer-grids wow fadeInUp animated" data-wow-delay=".5s">
                    <h4 class="footer-logo"><a href="index.php">Modern <b>Shoppe</b> <span class="tag">Everything for Kids world </span> </a></h4>
                    <p>© 2016 Modern Shoppe . All rights reserved | Design by <a href="http://w3layouts.com" target="_blank">W3layouts</a></p>
                </div>
                <div class="col-md-4 footer-grids wow fadeInUp animated" data-wow-delay=".7s">
                    <h3>Popular</h3>
                    <ul>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="products.php">new</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                        <li><a href="faq.php">FAQ</a></li>
                        <li><a href="checkout.php">Wishlist</a></li>
                    </ul>
                </div>
                <div class="col-md-4 footer-grids wow fadeInUp animated" data-wow-delay=".9s">
                    <h3>Subscribe</h3>
                    <p>Sign Up Now For More Information <br> About Our Company </p>
                    <form>
                        <input type="text" placeholder="Enter Your Email" required="">
                        <input type="submit" value="Go">
                    </form>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--//footer-->
    <!--search jQuery-->
    <script src="js/main.js"></script>
    <!--//search jQuery-->
    <!--smooth-scrolling-of-move-up-->
    <script type="text/javascript">
        $(document).ready(function() {

            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear'
            };

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!--//smooth-scrolling-of-move-up-->
    <!--Bootstrap core JavaScript
    ================================================== -->
    <!--Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>

</html>