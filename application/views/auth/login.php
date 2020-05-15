<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?= $title; ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link rel="icon" href="<?= BASE_THEME ?>img/icon_simlakah.png" type="image/ico" />

    <!-- Favicons -->
    <!-- <link href="<?= BASE_THEME; ?>img/favicon.png" rel="icon"> -->
    <link href="<?= BASE_THEME; ?>img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="<?= BASE_THEME; ?>lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.4.0/css/bootstrap4-toggle.min.css" rel="stylesheet"> -->

    <!-- Libraries CSS Files -->
    <link href="<?= BASE_THEME; ?>lib/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?= BASE_THEME; ?>lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?= BASE_THEME; ?>lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?= BASE_THEME; ?>lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="<?= BASE_THEME; ?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= BASE_THEME; ?>lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="<?= BASE_THEME; ?>css/style.css" rel="stylesheet">
    <link href="<?= BASE_THEME; ?>css/custom.css" rel="stylesheet">

    <!-- =======================================================
    Theme Name: BizPage
    Theme URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

    <!--==========================
    Header
  ============================-->
    <header id="header">
        <div class="container-fluid row">
            <div class="col-md-4">
                <div id="logo" class="pull-left">
                    <!-- <h1><a href="#intro" class="scrollto">Simlakah</a></h1> -->
                    <!-- Uncomment below if you prefer to use an image logo -->
                    <a href="#intro">
                        <img src="<?= BASE_THEME; ?>img/logo_simlakah.png" alt="" title="" width="60%" style="margin-top: -12px;" />
                    </a>
                </div>
            </div>
            <div class="col-md-8">
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li class="menu-active"><a href="#intro">Home</a></li>
                        <li><a href="#about">Profile</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <!-- <li>
                            <a href="#login">
                                <span>
                                    <i class="fas fa-fw fa-sign-in-alt"></i>
                                </span> Login
                            </a>
                        </li> -->
                    </ul>
                </nav><!-- #nav-menu-container -->
            </div>
        </div>
    </header>
    <!-- #header -->

    <section id="intro">
        <div class="intro-container">
            <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

                <div class="carousel-inner" role="listbox">

                    <div class="carousel-item active">
                        <div class="carousel-background"><img src="<?= BASE_THEME; ?>img/intro-carousel/1.png" alt=""></div>
                        <div class="carousel-container">
                            <div class="carousel-auth">
                                <div class="container-fluid">
                                    <form>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" style="z-index: 1000;">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" style="z-index: 1000;">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- #intro -->

    <!-- <main id="main">
        <section id="auth">
            <div class="header-item">
                <div class="header-background">
                    <img src="<?= BASE_THEME; ?>img/intro-carousel/1.png" alt="" width="100%">
                </div>
                <div class="header-container">
                    <div class="row">
                        <div class="col-md-9"></div>
                        <div class="col-md-3" style="background-color: yellowgreen; ">
                            <form>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main> -->

    <!--==========================
    Footer
  ============================-->
    <footer id="footer">
        <!-- <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-info">
                        <h3>BizPage</h3>
                        <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="ion-ios-arrow-right"></i> <a href="#">Home</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="#">About us</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="#">Services</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>Contact Us</h4>
                        <p>
                            A108 Adam Street <br>
                            New York, NY 535022<br>
                            United States <br>
                            <strong>Phone:</strong> +1 5589 55488 55<br>
                            <strong>Email:</strong> info@example.com<br>
                        </p>

                        <div class="social-links">
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                        </div>

                    </div>

                    <div class="col-lg-3 col-md-6 footer-newsletter">
                        <h4>Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum dolore legam minim quorum culpa amet magna export quem marada parida nodela caramase seza.</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
                    </div>

                </div>
            </div>
        </div> -->

        <div class="container">
            <div class="copyright">
                Copyright &copy; <strong>SIMLAKAH | </strong>Sistem Manajemen Layanan Pernikahan 2020
            </div>
            <div class="credits">
                <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
        -->
                Designed by <a href="https://bootstrapmade.com/">Nadya Dwi Sukmawati</a>
            </div>
        </div>
    </footer><!-- #footer -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <div id="preloader"></div>

    <!-- JavaScript Libraries -->
    <script src="<?= BASE_THEME; ?>lib/jquery/jquery.min.js"></script>
    <script src="<?= BASE_THEME; ?>lib/jquery/jquery-migrate.min.js"></script>
    <script src="<?= BASE_THEME; ?>lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= BASE_THEME; ?>lib/easing/easing.min.js"></script>
    <script src="<?= BASE_THEME; ?>lib/superfish/hoverIntent.js"></script>
    <script src="<?= BASE_THEME; ?>lib/superfish/superfish.min.js"></script>
    <script src="<?= BASE_THEME; ?>lib/wow/wow.min.js"></script>
    <script src="<?= BASE_THEME; ?>lib/waypoints/waypoints.min.js"></script>
    <script src="<?= BASE_THEME; ?>lib/counterup/counterup.min.js"></script>
    <script src="<?= BASE_THEME; ?>lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?= BASE_THEME; ?>lib/isotope/isotope.pkgd.min.js"></script>
    <script src="<?= BASE_THEME; ?>lib/lightbox/js/lightbox.min.js"></script>
    <script src="<?= BASE_THEME; ?>lib/touchSwipe/jquery.touchSwipe.min.js"></script>
    <!-- Contact Form JavaScript File -->
    <script src="<?= BASE_THEME; ?>contactform/contactform.js"></script>

    <!-- Template Main Javascript File -->
    <script src="<?= BASE_THEME; ?>js/main.js"></script>

    <script>
        function hvr(dom, action) {
            if (action == 'in') {
                $(dom).find("[col=white]").css("text-align", "center");
                $(dom).find("[col=white]").css("display", "none");
                $(dom).find("[col=green]").css("text-align", "center");
                $(dom).find("[col=green]").css("display", "block");
            } else {
                $(dom).find("[col=green]").css("text-align", "center");
                $(dom).find("[col=green]").css("display", "none");
                $(dom).find("[col=white]").css("text-align", "center");
                $(dom).find("[col=white]").css("display", "block");
            }
        }
    </script>

</body>

</html>