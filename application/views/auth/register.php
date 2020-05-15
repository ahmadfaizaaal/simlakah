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

        <div class="card o-hidden border-0 shadow-lg col-lg-7 mx-auto" style="background-color: #000000; opacity: 0.7; margin-top: 85px;">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center mb-4">
                                <img class="background-position: center; background-size: cover;" src="<?= BASE_THEME; ?>img/logo_simlakah.png" style="width:75%; height:75%;" alt="Simlakah Image">
                                <!-- <h1 class="h4 text-gray-900 mb-4"><b>Registration Page</b></h1> -->
                            </div>
                            <!-- <hr> -->
                            <form class="user" method="post" action="<?= BASE_URL . 'auth/register'; ?>">
                                <!-- NO KTP -->
                                <div class="form-group row">
                                    <div class="col-sm-9 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="nik" name="nik" placeholder="Masukkan No. KTP" value="<?= set_value('nik'); ?>">
                                        <?= form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="col-sm-3">
                                        <!-- <button type="submit" class="btn btn-success btn-user btn-block" onclick="cek()">
                                            Cek KTP
                                        </button> -->
                                        <input type="button" class="btn btn-success btn-user btn-block" id="nik" name="nik" onclick="cek()" value="Cek KTP">
                                    </div>
                                </div>
                                <!-- NAMA LENGKAP -->
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="fullname" name="fullname" placeholder="Nama Lengkap" value="<?= set_value('fullname'); ?>" readonly>
                                    <?= form_error('fullname', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <!-- TEMPAT TANGGAL LAHIR -->
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="birthplace" name="birthplace" placeholder="Tempat Lahir" readonly>
                                        <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="birthdate" name="birthdate" placeholder="Tanggal Lahir" readonly>
                                    </div>
                                </div>
                                <!-- ALAMAT -->
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="address" name="address" placeholder="Alamat Sesuai KTP" value="<?= set_value('fullname'); ?>" readonly>
                                    <?= form_error('fullname', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <!-- <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username" value="<?= set_value('username'); ?>">
                                    <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div> -->
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user mobile-valid" id="phone" name="phone" placeholder="No. HP / WA" value="<?= set_value('phone'); ?>">
                                    <?= form_error('phone', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email" value="<?= set_value('email'); ?>">
                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Kata Sandi">
                                        <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Ulangi Kata Sandi">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success btn-user btn-block">
                                    Buat Akun
                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <p class="small">Sudah mempunyai akun?
                                    <strong>
                                        <a href="<?= BASE_URL . 'auth/login' ?>" class="main-text">Login sekarang!</a>
                                    </strong>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div id="preloader"></div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" type="text/javascript"></script>

    <script>
        var numberLength = 0;
        $(function() {
            $('.alert-success').fadeIn().delay(1500).fadeOut('slow');
            $('.alert-danger').fadeIn().delay(1500).fadeOut('slow');

            $('.mobile-valid').on('keyup', function(e) {
                numberLength = $('#phone').val().length;
            });

            $('.mobile-valid').on('keypress', function(e) {
                var $this = $(this);
                var regex = new RegExp("^[0-9\b]+$");
                var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
                var currentNum = 48;
                // for 12 digit number only
                if ($this.val().length > 11) {
                    e.preventDefault();
                    return false;
                }
                if (numberLength == 0) {
                    currentNum = 48;
                } else if (numberLength == 1) {
                    currentNum = 56;
                }
                if (e.charCode != currentNum && e.charCode > 47 && e.charCode < 58) {
                    if ($this.val().length == 0) {
                        e.preventDefault();
                        return false;
                    } else {
                        var result = e.charCode != currentNum && numberLength == 1 ? false : true;
                        return result;
                    }
                }
                if (regex.test(str)) {
                    currentNum = 56;
                    return true;
                }
                e.preventDefault();
                return false;
            });

            $('#birthdate').datepicker({
                dateFormat: 'dd-mm-yyyy'
            }).val();

        });

        function cek() {
            alert("tes");
        }
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