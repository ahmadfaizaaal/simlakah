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

    <!-- Libraries CSS Files -->
    <link href="<?= BASE_THEME; ?>lib/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?= BASE_THEME; ?>lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?= BASE_THEME; ?>lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?= BASE_THEME; ?>lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="<?= BASE_THEME; ?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= BASE_THEME; ?>lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="<?= BASE_THEME; ?>css/style.css" rel="stylesheet">
</head>

<body>

    <!--==========================
    Header
  ============================-->
    <header id="header">
        <div class="container-fluid row">
            <div class="col-md-4">
                <div id="logo" class="pull-left">
                    <a href="<?= BASE_URL ?>">
                        <img src="<?= BASE_THEME; ?>img/logo_simlakah.png" alt="" title="" width="60%" style="margin-top: -12px;" />
                    </a>
                </div>
            </div>
            <div class="col-md-8">
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li class="menu-active"><a href="#intro">Beranda</a></li>
                        <li><a href="#about">Profil</a></li>
                        <li><a href="#contact">Kontak</a></li>
                        <?php
                        if ($this->session->userdata('nik') != '') {
                        ?>
                            <li>
                                <a href="<?= BASE_URL . 'auth/logout' ?>">
                                    <span>
                                        <i class="fas fa-fw fa-sign-out-alt"></i>
                                    </span> Logout
                                </a>
                            </li>
                        <?php
                        }
                        ?>
                    </ul>
                </nav><!-- #nav-menu-container -->
            </div>
        </div>
    </header><!-- #header -->

    <!--==========================
    Intro Section
  ============================-->
    <section id="intro">
        <div class="intro-container">
            <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

                <ol class="carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">

                    <div class="carousel-item active">
                        <div class="carousel-background"><img src="<?= BASE_THEME; ?>img/intro-carousel/1.png" alt=""></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <?= $this->session->flashdata('message'); ?>
                                <h2>Direktorat Jenderal</h2>
                                <h2 style="margin-top: -25px">Bimbingan Masyarakat Islam</h2>
                                <p>Kementerian Agama Republik Indonesia</p>
                                <a href="<?= BASE_URL . 'auth/login/general' ?>" class="btn-get-started scrollto mt-5">Klik untuk Login!</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="carousel-background"><img src="<?= BASE_THEME; ?>img/intro-carousel/2.png" alt=""></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2>Kantor Urusan Agama</h2>
                                <h2 style="margin-top: -25px">Dawarblandong</h2>
                                <p>Pastikan Nikah Anda Tercatat di KUA!</p>
                                <a href="<?= BASE_URL . 'auth/login/general' ?>" class="btn-get-started scrollto mt-5">Klik untuk Login!</a>
                            </div>
                        </div>
                    </div>

                </div>

                <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>

                <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>

            </div>
        </div>
    </section><!-- #intro -->

    <main id="main">

        <!--==========================
      Featured Services Section
    ============================-->
        <section id="featured-services">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 box text-center">
                        <img src="<?= BASE_THEME; ?>img/couple_wh.png" style="width: 20%">
                        <h4 class="title"><a href="<?= BASE_URL . 'home/registration/nikah' ?>"><strong>Daftar Nikah</strong></a></h4>
                    </div>

                    <div class="col-lg-4 box box-bg text-center">
                        <img src="<?= BASE_THEME; ?>img/couple_wh.png" style="width: 20%">
                        <h4 class="title"><a href="<?= BASE_URL . 'home/registration/rujuk' ?>"><strong>Daftar Rujuk</strong></a></h4>
                    </div>

                    <div class="col-lg-4 box text-center">
                        <img src="<?= BASE_THEME; ?>img/couple_wh.png" style="width: 20%">
                        <h4 class="title"><a href="<?= BASE_URL . 'home/registration/isbat' ?>"><strong>Daftar Isbat</strong></a></h4>
                    </div>

                </div>
            </div>
        </section>
        <!-- #featured-services -->
    </main>

    <!--==========================
    Footer
  ============================-->
    <footer id="footer">
        <div class="container">
            <div class="copyright">
                Copyright &copy; <strong>SIMLAKAH | </strong>Sistem Manajemen Layanan Pernikahan 2020
            </div>
            <div class="credits">
                Designed by <a href="#">Nadya Dwi Sukmawati</a>
            </div>
        </div>
    </footer>
    <!-- #footer -->

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
</body>

</html>