<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code.">
    <meta name="keywords" content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title><?= $title; ?></title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="<?= BASE_THEME ?>adm/app-assets/css/vendors.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN CHAMELEON  CSS-->
    <link rel="stylesheet" type="text/css" href="<?= BASE_THEME ?>adm/app-assets/css/app.css">
    <!-- END CHAMELEON  CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="<?= BASE_THEME ?>adm/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="<?= BASE_THEME ?>adm/app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="<?= BASE_THEME ?>adm/app-assets/css/pages/timeline.css">
    <link rel="stylesheet" type="text/css" href="<?= BASE_THEME ?>adm/app-assets/css/plugins/forms/wizard.css">
    <link rel="stylesheet" type="text/css" href="<?= BASE_THEME ?>adm/app-assets/vendors/css/forms/selects/select2.min.css">
    <link rel="stylesheet" type="text/css" href="<?= BASE_THEME ?>adm/app-assets/fonts/simple-line-icons/style.min.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?= BASE_THEME ?>adm/assets/css/style.css">
    <!-- END Custom CSS-->
    <link rel="icon" href="<?= BASE_THEME ?>img/icon_simlakah.png" type="image/ico" />
    <!-- BEGIN JQuery -->
    <script src="<?= BASE_THEME; ?>v4/vendor/jquery/jquery.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= BASE_THEME ?>datetime/build/css/bootstrap-datetimepicker.min.css">
</head>

<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-gradient-x-blue-green" data-col="2-columns">
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light">
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="collapse navbar-collapse show" id="navbar-mobile">
                    <ul class="nav navbar-nav mr-auto float-left">
                        <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
                    </ul>
                    <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"> <span class="avatar avatar-online"><img src="<?= BASE_THEME ?>adm/app-assets/images/portrait/small/user.png" alt="avatar"></span></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="arrow_box_right">
                                    <a class="dropdown-item" href="#"><span class="avatar avatar-online"><img src="<?= BASE_THEME ?>adm/app-assets/images/portrait/small/user.png" alt="avatar"><span class="user-name text-bold-700 ml-1"><?= $job; ?></span></span></a>
                                    <!-- <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="user-profile.html"><i class="ft-user"></i> Edit Profile</a>
                                    <a class="dropdown-item" href="email-application.html"><i class="ft-mail"></i> My Inbox</a>
                                    <a class="dropdown-item" href="project-summary.html"><i class="ft-check-square"></i> Task</a>
                                    <a class="dropdown-item" href="chat-application.html"><i class="ft-message-square"></i> Chats</a> -->
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="<?= BASE_URL . 'auth/logout' ?>"><i class="ft-power"></i> Logout</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <div class="main-menu menu-fixed menu-accordion menu-shadow menu-dark" data-scroll-to-active="true" data-img="<?= BASE_THEME ?>adm/app-assets/images/backgrounds/02.jpg">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto">
                    <a class="navbar-brand" href="<?= BASE_URL ?>">
                        <img class="brand-logo" alt="Simlakah admin logo" src="<?= BASE_THEME ?>adm/app-assets/images/logo/logosimlakahsm.png" />
                        <img class="brand-logo-custom" alt="Simlakah admin logo" src="<?= BASE_THEME ?>adm/app-assets/images/logo/simlakahlabel.png" />
                    </a>
                </li>
                <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
            </ul>
        </div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item">
                    <a href="index.html"><i class="ft-home"></i><span class="menu-title" data-i18n="">Beranda</span></a>
                </li>
                <li class=" nav-item">
                    <a href="#"><i class="ft-user"></i><span class="menu-title" data-i18n="">Profil</span></a>
                </li>
                <li class=" nav-item">
                    <a href="https://themeselection.com/demo/chameleon-admin-template/documentation"><i class="ft-phone"></i><span class="menu-title" data-i18n="">Kontak</span></a>
                </li>
            </ul>
        </div>
        <div class="navigation-background"></div>
    </div>

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-wrapper-before"></div>
            <div class="content-header row">
                <div class="content-header-left col-md-4 col-12 mb-2">
                    <h2 class="content-header-title">REGISTRASI NIKAH</h>
                </div>
                <!-- <div class="content-header-right col-md-8 col-12">
                    <div class="breadcrumbs-top float-md-right">
                        <div class="breadcrumb-wrapper mr-1">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="index.html">Registration</a>
                                </li>
                                <li class="breadcrumb-item active">nikah
                                </li>
                            </ol>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="content-body">
                <section id="drag-area">
                    <?= $this->session->flashdata('message'); ?>
                    <!-- HEADER SIDE OF REGISTRASI NIKAH -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Form Pendaftaran Nikah - Header</h4>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="nkh_tempat"><?= $question[0]->QUESTION_LABEL ?></label>
                                            <div class="col-md-9">
                                                <select id="nkh_tempat" name="nkh_tempat" class="form-control">
                                                    <option value="none" selected="" disabled="">Pilih salah satu</option>
                                                    <option value="KUA">Di KUA</option>
                                                    <option value="Di Luar KUA">Di Luar KUA</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="nkh_tanggal_akad"><?= $question[1]->QUESTION_LABEL ?></label>
                                            <div class="col-md-5">
                                                <div class="position-relative has-icon-left datepicker">
                                                    <input type="text" id="nkh_tanggal_akad" class="form-control" name="nkh_tanggal_akad">
                                                    <div class="form-control-position">
                                                        <i class="ft-calendar"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="position-relative has-icon-left">
                                                    <input type="text" id="nkh_jam_akad" class="form-control" name="nkh_jam_akad">
                                                    <div class="form-control-position">
                                                        <i class="ft-clock"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="nkh_alamat_akad"><?= $question[2]->QUESTION_LABEL ?></label>
                                            <div class="col-md-9">
                                                <input type="text" id="nkh_alamat_akad" class="form-control" placeholder="" name="nkh_alamat_akad">
                                            </div>
                                        </div>

                                        <div class="form-group row float-md-right">
                                            <div class="col-md-12">
                                                <input type="button" id="nextToDetail" class="btn btn-info btn-min-width mb-1" placeholder="" name="nextToDetail" value="Selanjutnya">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END OF HEADER SIDE -->

                    <!-- MAIN SIDE OF REGISTRASI NIKAH -->
                    <div class="row" id="detailSection">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Form Pendaftaran Nikah - Detail</h4>
                                    <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <?= form_open_multipart('registration/submitDetail', 'class="steps-validation" id="form"'); ?>
                                        <!-- <form action="<?= BASE_URL . 'registration/submitDetail' ?>" method="post" class="steps-validation" id="form"> -->
                                        <input type="hidden" id="regID" name="regID">
                                        <input type="hidden" id="type" name="type" value="nikah">
                                        <!-- Step 1 -->
                                        <h6><i class="step-icon ft-user"></i> Data Calon Suami</h6>
                                        <fieldset class="mt-2">
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="nkh_kewarganegaraan_s"><?= $question[3]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                                                <div class="col-md-9">
                                                    <input type="hidden" name="nkh_kewarganegaraan_s" id="hidden_kwn_s">
                                                    <select id="nkh_kewarganegaraan_s" name="nkh_kewarganegaraan_s" class="form-control required">
                                                        <option value="none" selected="" disabled="">Pilih salah satu</option>
                                                        <option value="wni">WNI</option>
                                                        <option value="wna">WNA</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="nkh_nik_s"><?= $question[4]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                                                <div class="col-md-7">
                                                    <input type="text" id="nkh_nik_s" class="form-control required" placeholder="" name="nkh_nik_s">
                                                </div>
                                                <div class="col-md-2">
                                                    <input type="button" class="btn btn-info btn-min-width" value="Cek NIK" id="nkh_btnceknik_s">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="nkh_nama_s"><?= $question[5]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                                                <div class="col-md-9">
                                                    <input type="text" id="nkh_nama_s" class="form-control required" placeholder="" name="nkh_nama_s">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="nkh_ttl_s"><?= $question[6]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                                                <div class="col-md-5">
                                                    <input type="text" id="nkh_ttl_s" class="form-control required" placeholder="" name="nkh_ttl_s">
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="position-relative has-icon-left">
                                                        <input type="text" id="nkh_ttl2_s" class="form-control required" name="nkh_ttl2_s">
                                                        <div class="form-control-position">
                                                            <i class="ft-calendar"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="nkh_umur_s"><?= $question[7]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                                                <div class="col-md-9">
                                                    <input type="text" id="nkh_umur_s" class="form-control required" placeholder="" name="nkh_umur_s">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="nkh_status_s"><?= $question[8]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                                                <div class="col-md-9">
                                                    <input type="hidden" name="nkh_status_s" id="hidden_status_s">
                                                    <select id="nkh_status_s" name="nkh_status_s" class="form-control required">
                                                        <option value="none" selected="" disabled="">Pilih salah satu</option>
                                                        <option value="Jejaka">Jejaka</option>
                                                        <option value="Beristri">Beristri</option>
                                                        <option value="Cerai Mati">Cerai Mati</option>
                                                        <option value="Cerai Hidup">Cerai Hidup</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="nkh_agama_s"><?= $question[9]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                                                <div class="col-md-9">
                                                    <input type="text" id="nkh_agama_s" class="form-control required" placeholder="" name="nkh_agama_s" value="Islam" <?= $question[9]->IS_READONLY; ?>>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="nkh_alamat_s"><?= $question[10]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                                                <div class="col-md-9">
                                                    <input type="text" id="nkh_alamat_s" class="form-control required" placeholder="" name="nkh_alamat_s">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="nkh_pekerjaan_s"><?= $question[11]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                                                <div class="col-md-9">
                                                    <input type="text" style="width: 100%" id="nkh_pekerjaan_s" class="select2 job form-control required" placeholder="" name="nkh_pekerjaan_s">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="nkh_nohp_s"><?= $question[12]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                                                <div class="col-md-9">
                                                    <input type="text" id="nkh_nohp_s" class="form-control required" placeholder="" name="nkh_nohp_s">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="nkh_foto_s"><?= $question[13]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                                                <div class="col-md-9">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" name="nkh_foto_s" id="nkh_foto_s" accept="image/jpg, image/jpeg, image/png" required onchange="getFileNameOfImage('nkh_foto_s', 'foto_s')">
                                                        <label for="nkh_foto_s" class="custom-file-label required" id="foto_s"></label>
                                                        <p class="text-left"><small class="text-muted">NB : Silahkan unggah pas foto ukuran 2x3 dengan latar belakang berwarna biru.</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>

                                        <!-- Step 2 -->
                                        <h6><i class="step-icon ft-user"></i>Data Calon Istri</h6>
                                        <fieldset class="mt-2">
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="nkh_kewarganegaraan_i"><?= $question[14]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                                                <div class="col-md-9">
                                                    <input type="hidden" name="nkh_kewarganegaraan_i" id="hidden_kwn_i">
                                                    <select id="nkh_kewarganegaraan_i" name="nkh_kewarganegaraan_i" class="form-control required">
                                                        <option value="none" selected="" disabled="">Pilih salah satu</option>
                                                        <option value="wni">WNI</option>
                                                        <option value="wna">WNA</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="nkh_nik_i"><?= $question[15]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                                                <div class="col-md-7">
                                                    <input type="text" id="nkh_nik_i" class="form-control required" placeholder="" name="nkh_nik_i">
                                                </div>
                                                <div class="col-md-2">
                                                    <input type="button" class="btn btn-info btn-min-width" value="Cek NIK" id="nkh_btnceknik_i">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="nkh_nama_i"><?= $question[16]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                                                <div class="col-md-9">
                                                    <input type="text" id="nkh_nama_i" class="form-control required" placeholder="" name="nkh_nama_i">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="nkh_ttl_i"><?= $question[17]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                                                <div class="col-md-5">
                                                    <input type="text" id="nkh_ttl_i" class="form-control required" placeholder="" name="nkh_ttl_i">
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="position-relative has-icon-left">
                                                        <input type="text" id="nkh_ttl2_i" class="form-control required" name="nkh_ttl2_i">
                                                        <div class="form-control-position">
                                                            <i class="ft-calendar"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="nkh_umur_i"><?= $question[18]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                                                <div class="col-md-9">
                                                    <input type="text" id="nkh_umur_i" class="form-control required" placeholder="" name="nkh_umur_i">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="nkh_status_i"><?= $question[19]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                                                <div class="col-md-9">
                                                    <input type="hidden" name="nkh_status_i" id="hidden_status_i">
                                                    <select id="nkh_status_i" name="nkh_status_i" class="form-control required">
                                                        <option value="none" selected="" disabled="">Pilih salah satu</option>
                                                        <option value="Perawan">Perawan</option>
                                                        <option value="Bersuami">Bersuami</option>
                                                        <option value="Cerai Mati">Cerai Mati</option>
                                                        <option value="Cerai Hidup">Cerai Hidup</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="nkh_agama_i"><?= $question[20]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                                                <div class="col-md-9">
                                                    <input type="text" id="nkh_agama_i" class="form-control required" placeholder="" name="nkh_agama_i" value="Islam" <?= $question[20]->IS_READONLY; ?>>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="nkh_alamat_i"><?= $question[21]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                                                <div class="col-md-9">
                                                    <input type="text" id="nkh_alamat_i" class="form-control required" placeholder="" name="nkh_alamat_i">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="nkh_pekerjaan_i"><?= $question[22]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                                                <div class="col-md-9">
                                                    <input type="text" style="width: 100%" id="nkh_pekerjaan_i" class="select2 job form-control required" placeholder="" name="nkh_pekerjaan_i">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="nkh_nohp_i"><?= $question[23]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                                                <div class="col-md-9">
                                                    <input type="text" id="nkh_nohp_i" class="form-control required" placeholder="" name="nkh_nohp_i">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="nkh_oldfoto_i"><?= $question[24]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                                                <div class="col-md-9">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" name="nkh_foto_i" id="nkh_foto_i" accept="image/jpg, image/jpeg, image/png" required onchange="getFileNameOfImage('nkh_foto_i', 'foto_i')">
                                                        <label for="nkh_foto_i" class="custom-file-label required" id="foto_i"></label>
                                                        <p class="text-left"><small class="text-muted">NB : Silahkan unggah pas foto ukuran 2x3 dengan latar belakang berwarna biru.</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>

                                        <!-- Step 3 -->
                                        <h6><i class="step-icon ft-file-text"></i>Data Dokumen Nikah</h6>
                                        <fieldset class="mt-2">
                                            <div class="form-group row">
                                                <div class="col-md-12">
                                                    <div class="card text-white box-shadow-0 bg-gradient-x-warning">
                                                        <div class="card-content collapse show">
                                                            <div class="card-body">
                                                                <p class="card-text"><i class="ft-alert-triangle"></i>&nbsp; Jenis dokumen berupa file foto yang bertipe <strong>.JPG / .PNG / .JPEG</strong></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-4 label-control" for="nkh_docn1"><?= $question[25]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                                                <div class="col-md-8">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" name="nkh_docn1" id="nkh_docn1" accept="image/jpg, image/jpeg, image/png" required onchange="getFileNameOfImage('nkh_docn1', 'docn1')">
                                                        <label for="nkh_docn1" class="custom-file-label" id="docn1"></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-4 label-control" for="nkh_docn3"><?= $question[26]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                                                <div class="col-md-8">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" name="nkh_docn3" id="nkh_docn3" accept="image/jpg, image/jpeg, image/png" required onchange="getFileNameOfImage('nkh_docn3', 'docn3')">
                                                        <label for="nkh_docn3" class="custom-file-label" id="docn3"></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-4 label-control" for="nkh_docktp"><?= $question[27]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                                                <div class="col-md-4">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" name="nkh_docktp_s" id="nkh_docktp_s" accept="image/jpg, image/jpeg, image/png" required onchange="getFileNameOfImage('nkh_docktp_s', 'ktps')">
                                                        <label for="nkh_docktp_s" class="custom-file-label" id="ktps"></label>
                                                        <p class="text-left"><small class="text-muted">Dokumen untuk suami</small></p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" name="nkh_docktp_i" id="nkh_docktp_i" accept="image/jpg, image/jpeg, image/png" required onchange="getFileNameOfImage('nkh_docktp_i', 'ktpi')">
                                                        <label for="nkh_docktp_i" class="custom-file-label" id="ktpi"></label>
                                                        <p class="text-left"><small class="text-muted">Dokumen untuk istri</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-4 label-control" for="nkh_dockk"><?= $question[29]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                                                <div class="col-md-4">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" name="nkh_dockk_s" id="nkh_dockk_s" accept="image/jpg, image/jpeg, image/png" required onchange="getFileNameOfImage('nkh_dockk_s', 'kks')">
                                                        <label for="nkh_dockk_s" class="custom-file-label" id="kks"></label>
                                                        <p class="text-left"><small class="text-muted">Dokumen untuk suami</small></p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" name="nkh_dockk_i" id="nkh_dockk_i" accept="image/jpg, image/jpeg, image/png" required onchange="getFileNameOfImage('nkh_dockk_i', 'kki')">
                                                        <label for="nkh_dockk_i" class="custom-file-label" id="kki"></label>
                                                        <p class="text-left"><small class="text-muted">Dokumen untuk istri</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-4 label-control" for="nkh_docakta"><?= $question[31]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                                                <div class="col-md-4">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" name="nkh_docakta_s" id="nkh_docakta_s" accept="image/jpg, image/jpeg, image/png" required onchange="getFileNameOfImage('nkh_docakta_s', 'aktas')">
                                                        <label for="nkh_docakta_s" class="custom-file-label" id="aktas"></label>
                                                        <p class="text-left"><small class="text-muted">Dokumen untuk suami</small></p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" name="nkh_docakta_i" id="nkh_docakta_i" accept="image/jpg, image/jpeg, image/png" required onchange="getFileNameOfImage('nkh_docakta_i', 'aktai')">
                                                        <label for="nkh_docakta_i" class="custom-file-label" id="aktai"></label>
                                                        <p class="text-left"><small class="text-muted">Dokumen untuk istri</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row" id="jobAuth">
                                                <label class="col-md-4 label-control"><?= $question[33]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                                                <div class="">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" name="nkh_docpendukung_s" id="nkh_docpendukung_s" accept="image/jpg, image/jpeg, image/png" onchange="getFileNameOfImage('nkh_docpendukung_s', 'adds')">
                                                        <label for="nkh_docpendukung_s" class="custom-file-label" id="adds"></label>
                                                        <p class="text-left"><small class="text-muted">Dokumen untuk suami</small></p>
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" name="nkh_docpendukung_i" id="nkh_docpendukung_i" accept="image/jpg, image/jpeg, image/png" onchange="getFileNameOfImage('nkh_docpendukung_i', 'addi')">
                                                        <label for="nkh_docpendukung_i" class="custom-file-label" id="addi"></label>
                                                        <p class="text-left"><small class="text-muted">Dokumen untuk istri</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row" id="kedutaan">
                                                <label class="col-md-4 label-control"><?= $question[35]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                                                <div class="">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" name="nkh_dockedutaan_s" id="nkh_dockedutaan_s" accept="image/jpg, image/jpeg, image/png" onchange="getFileNameOfImage('nkh_dockedutaan_s', 'kedutaans')">
                                                        <label for="nkh_dockedutaan_s" class="custom-file-label" id="kedutaans"></label>
                                                        <p class="text-left"><small class="text-muted">Dokumen untuk suami</small></p>
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" name="nkh_dockedutaan_i" id="nkh_dockedutaan_i" accept="image/jpg, image/jpeg, image/png" onchange="getFileNameOfImage('nkh_dockedutaan_i', 'kedutaani')">
                                                        <label for="nkh_dockedutaan_i" class="custom-file-label" id="kedutaani"></label>
                                                        <p class="text-left"><small class="text-muted">Dokumen untuk istri</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row" id="passport">
                                                <label class="col-md-4 label-control"><?= $question[37]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                                                <div class="">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" name="nkh_docpassport_s" id="nkh_docpassport_s" accept="image/jpg, image/jpeg, image/png" onchange="getFileNameOfImage('nkh_docpassport_s', 'passports')">
                                                        <label for="nkh_docpassport_s" class="custom-file-label" id="passports"></label>
                                                        <p class="text-left"><small class="text-muted">Dokumen untuk suami</small></p>
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" name="nkh_docpassport_i" id="nkh_docpassport_i" accept="image/jpg, image/jpeg, image/png" onchange="getFileNameOfImage('nkh_docpassport_i', 'passporti')">
                                                        <label for="nkh_docpassport_i" class="custom-file-label" id="passporti"></label>
                                                        <p class="text-left"><small class="text-muted">Dokumen untuk istri</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row" id="imigrasi">
                                                <label class="col-md-4 label-control"><?= $question[39]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                                                <div class="">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" name="nkh_docimigrasi_s" id="nkh_docimigrasi_s" accept="image/jpg, image/jpeg, image/png" onchange="getFileNameOfImage('nkh_docimigrasi_s', 'imigrasis')">
                                                        <label for="nkh_docimigrasi_s" class="custom-file-label" id="imigrasis"></label>
                                                        <p class="text-left"><small class="text-muted">Dokumen untuk suami</small></p>
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" name="nkh_docimigrasi_i" id="nkh_docimigrasi_i" accept="image/jpg, image/jpeg, image/png" onchange="getFileNameOfImage('nkh_docimigrasi_i', 'imigrasii')">
                                                        <label for="nkh_docimigrasi_i" class="custom-file-label" id="imigrasii"></label>
                                                        <p class="text-left"><small class="text-muted">Dokumen untuk istri</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-4 label-control" for="nkh_docnumpang_nikah"><?= $question[41]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                                                <div class="col-md-8">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" name="nkh_docnumpang_nikah" id="nkh_docnumpang_nikah" accept="image/jpg, image/jpeg, image/png" required onchange="getFileNameOfImage('nkh_docnumpang_nikah', 'numpang_nikah')">
                                                        <label for="nkh_docnumpang_nikah" class="custom-file-label" id="numpang_nikah"></label>
                                                        <p class="text-left"><small class="text-muted">Dokumen untuk suami</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END OF MAIN SIDE -->
                    <div class="row float-md-right">
                        <div class="col-md-12">
                            <input type="button" id="cancelRegistration" class="btn btn-danger btn-min-width mb-2" placeholder="" name="cancelRegistration" value="Batalkan Pendaftaran">
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <footer class="footer footer-static footer-light navbar-border navbar-shadow">
        <div class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
            <span class="float-md-left d-block d-md-inline-block">Copyright &copy; <strong>SIMLAKAH </strong> 2020 | Designed by <a href="#">Nadya Dwi Sukmawati</a></span>
            <ul class="list-inline float-md-right d-block d-md-inline-blockd-none d-lg-block mb-0">
            </ul>
        </div>
    </footer>

    <!-- BEGIN VENDOR JS-->
    <script src="<?= BASE_THEME; ?>v4/vendor/jquery/jquery.min.js"></script>
    <script src="<?= BASE_THEME ?>adm/app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="<?= BASE_THEME ?>adm/app-assets/vendors/js/pickers/daterange/daterangepicker.js" type="text/javascript"></script>
    <script src="<?= BASE_THEME ?>adm/app-assets/vendors/js/extensions/jquery.steps.min.js" type="text/javascript"></script>
    <script src="<?= BASE_THEME ?>adm/app-assets/vendors/js/forms/validation/jquery.validate.min.js" type="text/javascript"></script>
    <script src="<?= BASE_THEME ?>adm/app-assets/vendors/js/extensions/sweetalert2.all.js" type="text/javascript"></script>
    <script src="<?= BASE_THEME ?>adm/app-assets/vendors/js/forms/select/select2.full.min.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN CHAMELEON  JS-->
    <script src="<?= BASE_THEME ?>adm/app-assets/js/core/app-menu.js" type="text/javascript"></script>
    <script src="<?= BASE_THEME ?>adm/app-assets/js/core/app.js" type="text/javascript"></script>
    <!-- END CHAMELEON  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="<?= BASE_THEME ?>adm/app-assets/js/scripts/forms/wizard-steps.js" type="text/javascript"></script>
    <script src="<?= BASE_THEME ?>adm/app-assets/js/scripts/extensions/sweet-alerts.js" type="text/javascript"></script>
    <script src="<?= BASE_THEME ?>adm/app-assets/js/scripts/forms/select/form-select2.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.21.0/moment.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.21.0/locale/id.js" type="text/javascript"></script>
    <script src="<?= BASE_THEME ?>datetime/build/js/bootstrap-datetimepicker.min.js"></script>
    <script>
        var listAkad = <?= json_encode($listDateAkad); ?>;
        var listTimeAkad = <?= json_encode($listTimeAkad); ?>;
        var numberLength = 0;
        var kecamatanSuami = '';
        var hasAuth = {
            's': false,
            'i': false
        };

        var isWna = {
            's': false,
            'i': false
        };

        $(function() {
            $('#detailSection').hide();
            $('#cancelRegistration').hide();
            $('#jobAuth').hide();

            $('#nextToDetail').on('click', function() {
                if ($('#nkh_tempat').val() != '' && $('#nkh_tanggal_akad').val() != '' &&
                    $('#nkh_jam_akad').val() != '' && $('#nkh_alamat_akad').val() != '') {
                    var uniqueID = generateUniqueID();

                    var tempatAkad_label = '<?= $question[0]->QUESTION_LABEL; ?>';
                    var tempatAkad_ans = $('#nkh_tempat').val();

                    var tanggalAkad_label = '<?= $question[1]->QUESTION_LABEL; ?>';
                    var tanggalAkad_ans = $('#nkh_tanggal_akad').val() + ' ' + $('#nkh_jam_akad').val();

                    var alamatAkad_label = '<?= $question[2]->QUESTION_LABEL; ?>';
                    var alamatAkad_ans = $('#nkh_alamat_akad').val();

                    $.ajax({
                        type: 'ajax',
                        method: 'post',
                        url: '<?= BASE_URL . 'registration/submitHeader'; ?>',
                        data: {
                            uniqueID: uniqueID,
                            type: '<?= $type; ?>',
                            tempatAkad: tempatAkad_label + '^' + tempatAkad_ans,
                            tanggalAkad: tanggalAkad_label + '^' + tanggalAkad_ans,
                            alamatAkad: alamatAkad_label + '^' + alamatAkad_ans
                        },
                        async: false,
                        dataType: 'json',
                        success: function(data) {
                            if (data != '') {
                                $('#regID').val(data);
                                $('#detailSection').show();
                                $('#cancelRegistration').show();
                                $('#nextToDetail').attr('disabled', true);
                            } else {
                                swal("Error!", "Gagal submit data header nikah!", "error");
                            }
                        },
                        error: function() {
                            swal("Error!", "Internal Server error 500!", "error");
                        }
                    });
                } else {
                    swal("Error!", "Isi field yang kosong!", "error");
                }
            });

            $('#cancelRegistration').on('click', function() {
                swal({
                    title: 'Anda yakin ingin batalkan pendaftaran?',
                    type: 'warning',
                    showCancelButton: true,
                    focusConfirm: false,
                    confirmButtonColor: '#18d26e',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya',
                    cancelButtonText: 'Tidak'
                }).then(result => {
                    if (result.value) {
                        $.ajax({
                            type: 'ajax',
                            method: 'post',
                            url: '<?= BASE_URL . 'registration/rollbackRegistration/'; ?>' + $('#regID').val(),
                            data: {
                                regID: $('#regID').val()
                            },
                            async: false,
                            dataType: 'json',
                            success: function(response) {
                                if (response.success) {
                                    window.location.href = response.redirect_url;
                                }
                            },
                            error: function() {
                                swal("Error!", "Internal Server error 500!", "error");
                            }
                        });
                    }
                })
            });

            //session
            retrieveDataFromSession(<?= $participant; ?>);

            //suami
            initializeDatetime('s');
            validateCitizenship('s');
            validateNIK('s');
            validateMobilePhone('s');
            initializeJobList('s');
            initializeJobAuth('s');

            //istri
            initializeDatetime('i');
            validateCitizenship('i');
            validateNIK('i');
            validateMobilePhone('i');
            initializeJobList('i');
            initializeJobAuth('i');

            // VALIDASI TEMPAT AKAD NIKAH
            $('#nkh_tempat').change(function() {
                var nkh_tempat = $('#nkh_tempat').val();
                if ('KUA' === nkh_tempat) {
                    $('#nkh_alamat_akad').attr('readonly', true);
                    $('#nkh_alamat_akad').val('KUA Dawarblandong');
                } else {
                    $('#nkh_alamat_akad').val('');
                    $('#nkh_alamat_akad').attr('readonly', false);
                }
            });

            // CHECK NIK
            $('#nkh_btnceknik_s').on('click', function() {
                var nik = $('#nkh_nik_s').val();
                checkNIK(nik, 's');
                $('#nkh_kewarganegaraan_s').attr('readonly', true);
            });

            $('#nkh_btnceknik_i').on('click', function() {
                var nik = $('#nkh_nik_i').val();
                checkNIK(nik, 'i');
                $('#nkh_kewarganegaraan_i').attr('readonly', true);
            });

        });

        function generateUniqueID() {
            var participantID = '<?= $this->session->userdata('participant_id') ?>';
            var name = '<?= $this->session->userdata('name') ?>';
            var date = '<?= date('YmdHis') ?>';
            return 'NKH/' + participantID + '/' + name.substr(0, 3) + '/' + date;
        }

        function validateCitizenship(actor) {
            $('#nkh_kewarganegaraan_' + actor).change(function() {
                var nkh_kewarganegaraan = $('#nkh_kewarganegaraan_' + actor).val();
                getKewarganegaraan(nkh_kewarganegaraan, actor);
            });
        }

        function initializeDatetime(actor) {
            var tomorrow = moment().add(2, 'days');

            $('#nkh_tanggal_akad').datetimepicker({
                locale: 'id',
                format: 'DD-MM-YYYY',
                minDate: tomorrow
                // disabledDates: listAkad
            });


            $('#nkh_jam_akad').datetimepicker({
                    locale: 'id',
                    format: 'HH:mm:ss'
                })
                .on('dp.change', function(e) {
                    var nkh_jam_akad = $('#nkh_jam_akad').val();
                    var timeAkadInput = parseInt(nkh_jam_akad.substr(0, 2));
                    var isConflict = false;
                    for (var i = 0; i < listTimeAkad.length; i++) {
                        if (timeAkadInput == listTimeAkad[i]) {
                            swal("Error!", "Jam tersebut tidak tersedia, silahkan pilih jam lain!", "error");
                            isConflict = true;
                        }
                    }
                    $('#nextToDetail').attr('disabled', isConflict);
                });

            $('#nkh_ttl2_' + actor).datetimepicker({
                locale: 'id',
                format: 'DD-MM-YYYY'
            });
        }

        function initializeJobAuth(actor) {
            $('#nkh_pekerjaan_' + actor).change(function() {
                var nkh_pekerjaan = $('#nkh_pekerjaan_' + actor).val();
                $.ajax({
                    type: 'ajax',
                    method: 'post',
                    url: '<?= BASE_URL . 'registration/isNeedAdditionalDoc'; ?>',
                    data: {
                        jobLabel: nkh_pekerjaan
                    },
                    async: false,
                    dataType: 'json',
                    success: function(response) {
                        if ('1' == response) {
                            hasAuth[actor] = true;
                            $('#nkh_docpendukung_' + actor).parent().parent().show();
                            $('#nkh_docpendukung_' + actor).attr('required', true);
                        } else {
                            hasAuth[actor] = false;
                            $('#nkh_docpendukung_' + actor).parent().parent().hide();
                            $('#nkh_docpendukung_' + actor).attr('required', false);
                        }
                    },
                    error: function() {
                        swal("Error!", "Internal Server error 500!", "error");
                    }
                });

                if (hasAuth['s'] && hasAuth['i']) {
                    $('#nkh_docpendukung_s').parent().parent().removeClass();
                    $('#nkh_docpendukung_i').parent().parent().removeClass();
                    $('#nkh_docpendukung_s').parent().parent().addClass('col-md-4');
                    $('#nkh_docpendukung_i').parent().parent().addClass('col-md-4');
                    // $('#jobAuth').show();
                } else if (hasAuth['s'] && !hasAuth['i']) {
                    $('#nkh_docpendukung_s').parent().parent().removeClass();
                    $('#nkh_docpendukung_i').parent().parent().removeClass();
                    $('#nkh_docpendukung_s').parent().parent().addClass('col-md-8');
                    // $('#jobAuth').show();
                } else if (!hasAuth['s'] && hasAuth['i']) {
                    $('#nkh_docpendukung_s').parent().parent().removeClass();
                    $('#nkh_docpendukung_i').parent().parent().removeClass();
                    $('#nkh_docpendukung_i').parent().parent().addClass('col-md-8');
                    // $('#jobAuth').show();
                }

                if (hasAuth['s'] || hasAuth['i']) {
                    $('#jobAuth').show();
                } else {
                    $('#jobAuth').hide();
                }
            });
        }

        function initializeJobList(actor) {
            var data = [];
            $.ajax({
                type: 'ajax',
                method: 'post',
                url: '<?= BASE_URL . 'home/listJob'; ?>',
                async: false,
                dataType: 'json',
                success: function(response) {
                    for (var i = 0; i < response.length; i++) {
                        var obj = {
                            id: response[i].LABEL_PEKERJAAN,
                            text: response[i].LABEL_PEKERJAAN
                        };
                        data.push(obj);
                    }
                },
                error: function() {
                    swal("Error!", "Internal Server error 500!", "error");
                }
            });

            $("#nkh_pekerjaan_" + actor).select2({
                data: data,
                placeholder: "Pilih salah satu",
            });
        }

        function getFileNameOfImage(inputId, id) {
            let fileName = $('#' + inputId).val().split('\\').pop();
            $('#' + id).addClass('selected').html(fileName);
        }

        function getKewarganegaraan(element, actor) {
            if ('wni' == element) {
                setEditableElement(true, actor);

                isWna[actor] = false;
                $('#nkh_dockedutaan_' + actor).parent().parent().hide();
                $('#nkh_dockedutaan_' + actor).attr('required', false);
                $('#nkh_docpassport_' + actor).parent().parent().hide();
                $('#nkh_docpassport_' + actor).attr('required', false);
                $('#nkh_docimigrasi_' + actor).parent().parent().hide();
                $('#nkh_docimigrasi_' + actor).attr('required', false);
            } else {
                setEditableElement(false, actor);

                isWna[actor] = true;
                $('#nkh_dockedutaan_' + actor).parent().parent().show();
                $('#nkh_dockedutaan_' + actor).attr('required', true);
                $('#nkh_docpassport_' + actor).parent().parent().show();
                $('#nkh_docpassport_' + actor).attr('required', true);
                $('#nkh_docimigrasi_' + actor).parent().parent().show();
                $('#nkh_docimigrasi_' + actor).attr('required', true);

                if (isWna['s'] && isWna['i']) {
                    $('#nkh_dockedutaan_s').parent().parent().removeClass();
                    $('#nkh_dockedutaan_i').parent().parent().removeClass();
                    $('#nkh_docpassport_s').parent().parent().removeClass();
                    $('#nkh_docpassport_i').parent().parent().removeClass();
                    $('#nkh_docimigrasi_s').parent().parent().removeClass();
                    $('#nkh_docimigrasi_i').parent().parent().removeClass();
                    $('#nkh_dockedutaan_s').parent().parent().addClass('col-md-4');
                    $('#nkh_dockedutaan_i').parent().parent().addClass('col-md-4');
                    $('#nkh_docpassport_s').parent().parent().addClass('col-md-4');
                    $('#nkh_docpassport_i').parent().parent().addClass('col-md-4');
                    $('#nkh_docimigrasi_s').parent().parent().addClass('col-md-4');
                    $('#nkh_docimigrasi_i').parent().parent().addClass('col-md-4');
                    // $('#jobAuth').show();
                } else if (isWna['s'] && !isWna['i']) {
                    $('#nkh_dockedutaan_s').parent().parent().removeClass();
                    $('#nkh_dockedutaan_i').parent().parent().removeClass();
                    $('#nkh_docpassport_s').parent().parent().removeClass();
                    $('#nkh_docpassport_i').parent().parent().removeClass();
                    $('#nkh_docimigrasi_s').parent().parent().removeClass();
                    $('#nkh_docimigrasi_i').parent().parent().removeClass();
                    $('#nkh_dockedutaan_s').parent().parent().addClass('col-md-8');
                    $('#nkh_docpassport_s').parent().parent().addClass('col-md-8');
                    $('#nkh_docimigrasi_s').parent().parent().addClass('col-md-8');
                    // $('#jobAuth').show();
                } else if (!isWna['s'] && isWna['i']) {
                    $('#nkh_dockedutaan_s').parent().parent().removeClass();
                    $('#nkh_dockedutaan_i').parent().parent().removeClass();
                    $('#nkh_docpassport_s').parent().parent().removeClass();
                    $('#nkh_docpassport_i').parent().parent().removeClass();
                    $('#nkh_docimigrasi_s').parent().parent().removeClass();
                    $('#nkh_docimigrasi_i').parent().parent().removeClass();
                    $('#nkh_dockedutaan_i').parent().parent().addClass('col-md-8');
                    $('#nkh_docpassport_i').parent().parent().addClass('col-md-8');
                    $('#nkh_docimigrasi_i').parent().parent().addClass('col-md-8');
                    // $('#jobAuth').show();
                }
            }

            if (isWna['s'] || isWna['i']) {
                $('#kedutaan').show();
                $('#passport').show();
                $('#imigrasi').show();
            } else {
                $('#kedutaan').hide();
                $('#passport').hide();
                $('#imigrasi').hide();
            }
        }

        function setEditableElement(value, actor) {
            var button = '#nkh_btnceknik_' + actor;
            $(button).attr('disabled', !value);
            $('#nkh_nama_' + actor).attr('readonly', value);
            $('#nkh_ttl_' + actor).attr('readonly', value);
            $('#nkh_ttl2_' + actor).attr('readonly', value);
            $('#nkh_umur_' + actor).attr('readonly', value);
            $('#nkh_agama_' + actor).attr('readonly', value);
            $('#nkh_alamat_' + actor).attr('readonly', value);
            $('#nkh_status_' + actor).attr('disabled', value);
        }

        function retrieveDataFromSession(data) {
            if (data != null) {
                var actor = '';
                var gender = data.JENIS_KELAMIN;
                if ('Laki-laki' == gender) {
                    actor = 's';
                } else {
                    actor = 'i';
                }
                $('#nkh_kewarganegaraan_' + actor).val('wni');
                $('#nkh_nik_' + actor).val(data.NIK);

                //disabled kwn, nik, button NIK
                $('#nkh_kewarganegaraan_' + actor).attr('disabled', true);
                $('#nkh_status_' + actor).attr('disabled', true);
                $('#nkh_nik_' + actor).attr('readonly', true);
                $('#nkh_btnceknik_' + actor).attr('disabled', true);

                var kwn = $('#nkh_kewarganegaraan_' + actor).val();
                $('#hidden_kwn_' + actor).val(kwn);
                var status = $('#nkh_status_' + actor).val();
                $('#hidden_status_' + actor).val(status);
                getKewarganegaraan(kwn, actor);
                retrieveDataNIK(data, actor);
            }
        }

        function retrieveDataNIK(response, actor) {
            var today = new Date();
            var thisYear = today.getFullYear();
            var day = response.TANGGAL_LAHIR.substr(8, 2);
            var month = response.TANGGAL_LAHIR.substr(5, 2);
            var year = response.TANGGAL_LAHIR.substr(0, 4);
            var umur = today.getFullYear() - year;
            var alamat = response.ALAMAT + ' RT ' + response.RT + ' RW ' + response.RW + ' ' +
                response.KELURAHAN + ' ' + response.KECAMATAN + ' ' +
                response.KABUPATEN_KOTA;

            var isSameGender = false;
            var status = '';
            var msg = '';
            if ('s' == actor) {
                isSameGender = 'Laki-laki' == response.JENIS_KELAMIN ? true : false;
                msg = 'Calon suami harus berjenis kelamin laki-laki!';
                kecamatanSuami = response.KECAMATAN;

                if ('Belum Kawin' == response.STATUS_KAWIN) {
                    status = 'Jejaka';
                } else if ('Kawin' == response.STATUS_KAWIN) {
                    status = 'Beristri';
                } else {
                    status = response.STATUS_KAWIN;
                }
            } else if ('i' == actor) {
                isSameGender = 'Perempuan' == response.JENIS_KELAMIN ? true : false;
                msg = 'Calon istri harus berjenis kelamin perempuan!';

                if ('Belum Kawin' == response.STATUS_KAWIN) {
                    status = 'Perawan';
                } else if ('Kawin' == response.STATUS_KAWIN) {
                    status = 'Bersuami';
                } else {
                    status = response.STATUS_KAWIN;
                }

                if (kecamatanSuami != response.KECAMATAN) {
                    $('#nkh_docnumpang_nikah').parent().parent().parent().show();
                    $('#nkh_docnumpang_nikah').attr('required', true);
                } else {
                    $('#nkh_docnumpang_nikah').parent().parent().parent().hide();
                    $('#nkh_docnumpang_nikah').attr('required', false);
                }
            }

            if (isSameGender) {
                $('#nkh_nama_' + actor).val(response.NAMA);
                $('#nkh_ttl_' + actor).val(response.TEMPAT_LAHIR);
                $('#nkh_ttl2_' + actor).val(day + '-' + month + '-' + year);
                $('#nkh_umur_' + actor).val(umur);
                $('#nkh_agama_' + actor).val(response.AGAMA);
                $('#nkh_alamat_' + actor).val(alamat);
                $('#nkh_pekerjaan_' + actor).val(response.PEKERJAAN);
                $('#nkh_pekerjaan_' + actor).trigger('change');
                $('#nkh_status_' + actor).val(status);
                $('#hidden_status_' + actor).val(status);
            } else {
                swal("Error!", msg, "error");
            }

        }

        function validateMobilePhone(actor) {
            $('#nkh_nohp_' + actor).on('keyup', function(e) {
                numberLength = $('#nkh_nohp_' + actor).val().length;
            });

            $('#nkh_nohp_' + actor).on('keypress', function(e) {
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
        }

        function validateNIK(actor) {
            $('#nkh_nik_' + actor).on('keypress', function(e) {
                var $this = $(this);
                var regex = new RegExp("^[0-9\b]+$");
                var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
                // for 16 digit number only
                if ($this.val().length > 15) {
                    e.preventDefault();
                    return false;
                }
                if (regex.test(str)) {
                    currentNum = 56;
                    return true;
                }
                e.preventDefault();
                return false;
            });
        }

        function checkNIK(nik, actor) {
            if ('' != nik) {
                $.ajax({
                    type: 'ajax',
                    method: 'post',
                    url: '<?= BASE_URL . 'auth/cekNIK'; ?>',
                    data: {
                        nik: nik
                    },
                    async: false,
                    dataType: 'json',
                    success: function(data) {
                        if (data != null) {
                            retrieveDataNIK(data, actor);
                        } else {
                            swal("Error!", "Data NIK tidak ditemukan!", "error");
                        }
                    },
                    error: function() {
                        swal("Error!", "Internal Server error 500!", "error");
                    }
                });
            } else {
                swal("Error!", "Harap masukkan No. KTP!", "error");
            }
        }
    </script>
</body>

</html>