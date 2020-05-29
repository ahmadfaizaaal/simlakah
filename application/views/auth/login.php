<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?= BASE_THEME ?>img/icon_simlakah.png" type="image/ico" />

    <title>
        <?= $title; ?>
    </title>

    <!-- Custom fonts for this template-->
    <link href="<?= BASE_THEME; ?>v4/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= BASE_THEME; ?>v4/css/sb-admin-2.css" rel="stylesheet">

</head>

<body background="<?= BASE_THEME ?>img/background_opacity.png" style="background-size: cover">
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-lg-7">

                <div class="card o-hidden border-0 shadow-lg" style="background-color: #000000; opacity: 0.7; margin-top: 85px;">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row" style="z-index: 1">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center mb-3">
                                        <a href="<?= BASE_URL ?>">
                                            <img class="background-position: center; background-size: cover;" src="<?= BASE_THEME; ?>img/logo_simlakah.png" style="width:75%; height:75%;" alt="Simlakah Image">
                                        </a>
                                        <!-- <h1 class="h5 text-gray-900 mb-4"><b>Login Page</b></h1> -->
                                    </div>

                                    <?= $this->session->flashdata('message'); ?>

                                    <form class="user" method="post" action="<?= BASE_URL . 'auth/login/' . $param; ?>">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="nik" name="nik" placeholder="Username / No. KTP" value="<?= set_value('nik'); ?>">
                                            <?= form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Kata Sandi">
                                            <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <button type="submit" class="btn btn-success btn-user btn-block">
                                            Login
                                        </button>
                                    </form>
                                    <hr>
                                    <!-- <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div> -->
                                    <div class="text-center">
                                        <p class="small">Belum pernah mendaftar?
                                            <strong>
                                                <a href="<?= BASE_URL . 'auth/register/' . $param ?>" class="main-text">Buat Akun!</a>
                                            </strong>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <div id="preloader"></div>

    <script>
        $(function() {
            $('.alert-success').fadeIn().delay(1500).fadeOut('slow');
            $('.alert-danger').fadeIn().delay(1500).fadeOut('slow');
        });
    </script>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= BASE_THEME; ?>v4/vendor/jquery/jquery.min.js"></script>
    <script src="<?= BASE_THEME; ?>v4/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= BASE_THEME; ?>v4/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= BASE_THEME; ?>v4/js/sb-admin-2.min.js"></script>

    <script>
        // Preloader
        $(window).on('load', function() {
            if ($('#preloader').length) {
                $('#preloader').delay(100).fadeOut('slow', function() {
                    $(this).remove();
                });
            }
        });
    </script>

</body>

</html>