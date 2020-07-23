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
                    <h2 class="content-header-title">REGISTRASI RUJUK</h>
                </div>
                <!-- <div class="content-header-right col-md-8 col-12">
                    <div class="breadcrumbs-top float-md-right">
                        <div class="breadcrumb-wrapper mr-1">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="index.html">Registration</a>
                                </li>
                                <li class="breadcrumb-item active">Rujuk
                                </li>
                            </ol>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="content-body">
                <section id="drag-area">
                    <?= $this->session->flashdata('message'); ?>
                    <!-- HEADER SIDE OF REGISTRASI Rujuk -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Form Pendaftaran Rujuk - Header</h4>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="rjk_tanggal_daftar_rujuk"><?= $question[0]->QUESTION_LABEL ?></label>
                                            <div class="col-md-9">
                                                <div class="position-relative has-icon-left datepicker">
                                                    <input type="text" id="rjk_tanggal_daftar_rujuk" class="form-control" name="rjk_tanggal_daftar_rujuk" <?= $question[0]->IS_READONLY; ?>>
                                                    <div class="form-control-position">
                                                        <i class="ft-calendar"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="rjk_tanggal_cerai"><?= $question[1]->QUESTION_LABEL ?></label>
                                            <div class="col-md-9">
                                                <div class="position-relative has-icon-left datepicker">
                                                    <input type="text" id="rjk_tanggal_cerai" class="form-control" name="rjk_tanggal_cerai" <?= $question[1]->IS_READONLY; ?>>
                                                    <div class="form-control-position">
                                                        <i class="ft-calendar"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="rjk_masa_idah"><?= $question[2]->QUESTION_LABEL ?></label>
                                            <div class="col-md-9">
                                                <input type="hidden" id="masaIdah" name="masaIdah">
                                                <input type="text" id="rjk_masa_idah" class="form-control" placeholder="" name="rjk_masa_idah" <?= $question[2]->IS_READONLY; ?>>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="rjk_status_cerai"><?= $question[3]->QUESTION_LABEL ?></label>
                                            <div class="col-md-9">
                                                <input type="text" id="rjk_status_cerai" class="form-control" placeholder="" name="rjk_status_cerai" value="Cerai Raj'i" <?= $question[3]->IS_READONLY; ?>>
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

                    <!-- MAIN SIDE OF REGISTRASI Rujuk -->
                    <div class="row" id="detailSection">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Form Pendaftaran Rujuk - Detail</h4>
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
                                        <input type="hidden" id="type" name="type" value="rujuk">
                                        <!-- Step 1 -->
                                        <h6><i class="step-icon ft-user"></i> Data Calon Suami</h6>
                                        <fieldset class="mt-2">
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="rjk_kewarganegaraan_s"><?= $question[4]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                                                <div class="col-md-9">
                                                    <select id="rjk_kewarganegaraan_s" name="rjk_kewarganegaraan_s" class="form-control required">
                                                        <option value="none" selected="" disabled="">Pilih salah satu</option>
                                                        <option value="wni">WNI</option>
                                                        <option value="wna">WNA</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="rjk_nik_s"><?= $question[5]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                                                <div class="col-md-7">
                                                    <input type="hidden" name="rjk_kewarganegaraan_s" id="hidden_kwn_s">
                                                    <input type="text" id="rjk_nik_s" class="form-control required" placeholder="" name="rjk_nik_s">
                                                </div>
                                                <div class="col-md-2">
                                                    <input type="button" class="btn btn-info btn-min-width" value="Cek NIK" id="rjk_btnceknik_s">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="rjk_nama_s"><?= $question[6]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                                                <div class="col-md-9">
                                                    <input type="text" id="rjk_nama_s" class="form-control required" placeholder="" name="rjk_nama_s">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="rjk_ttl_s"><?= $question[7]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                                                <div class="col-md-5">
                                                    <input type="text" id="rjk_ttl_s" class="form-control required" placeholder="" name="rjk_ttl_s">
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="position-relative has-icon-left">
                                                        <input type="text" id="rjk_ttl2_s" class="form-control required" name="rjk_ttl2_s">
                                                        <div class="form-control-position">
                                                            <i class="ft-calendar"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="rjk_umur_s"><?= $question[8]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                                                <div class="col-md-9">
                                                    <input type="text" id="rjk_umur_s" class="form-control required" placeholder="" name="rjk_umur_s">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="rjk_agama_s"><?= $question[9]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                                                <div class="col-md-9">
                                                    <input type="text" id="rjk_agama_s" class="form-control required" placeholder="" name="rjk_agama_s" value="Islam" <?= $question[9]->IS_READONLY; ?>>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="rjk_alamat_s"><?= $question[10]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                                                <div class="col-md-9">
                                                    <input type="text" id="rjk_alamat_s" class="form-control required" placeholder="" name="rjk_alamat_s">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="rjk_pekerjaan_s"><?= $question[11]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                                                <div class="col-md-9">
                                                    <input type="text" style="width: 100%" id="rjk_pekerjaan_s" class="select2 job form-control required" placeholder="" name="rjk_pekerjaan_s">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="rjk_nohp_s"><?= $question[12]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                                                <div class="col-md-9">
                                                    <input type="text" id="rjk_nohp_s" class="form-control required" placeholder="" name="rjk_nohp_s">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="rjk_foto_s"><?= $question[13]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                                                <div class="col-md-9">
                                                    <!-- <div class="row"> -->
                                                    <!-- <div class="col-sm-3">
                                                            <input type="hidden" name="rjk_oldfoto_s" value="Avatar">
                                                            <img src="<?= BASE_THEME ?>adm/app-assets/images/portrait/small/avatar-s-19.png" alt="" class="img-thumbnail">
                                                        </div>
                                                        <div class="col-sm-9"> -->
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" name="rjk_foto_s" id="rjk_foto_s" accept="image/jpg, image/jpeg, image/png" required onchange="getFileNameOfImage('rjk_foto_s', 'foto_s')">
                                                        <label for="rjk_foto_s" class="custom-file-label required" id="foto_s"></label>
                                                        <p class="text-left"><small class="text-muted">NB : Silahkan unggah pas foto ukuran 2x3 dengan latar belakang berwarna biru.</small></p>
                                                    </div>
                                                    <!-- </div> -->
                                                    <!-- </div> -->
                                                </div>
                                            </div>
                                        </fieldset>

                                        <!-- Step 2 -->
                                        <h6><i class="step-icon ft-user"></i>Data Calon Istri</h6>
                                        <fieldset class="mt-2">
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="rjk_kewarganegaraan_i"><?= $question[14]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                                                <div class="col-md-9">
                                                    <select id="rjk_kewarganegaraan_i" name="rjk_kewarganegaraan_i" class="form-control required">
                                                        <option value="none" selected="" disabled="">Pilih salah satu</option>
                                                        <option value="wni">WNI</option>
                                                        <option value="wna">WNA</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="rjk_nik_i"><?= $question[15]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                                                <div class="col-md-7">
                                                    <input type="hidden" name="rjk_kewarganegaraan_i" id="hidden_kwn_i">
                                                    <input type="text" id="rjk_nik_i" class="form-control required" placeholder="" name="rjk_nik_i">
                                                </div>
                                                <div class="col-md-2">
                                                    <input type="button" class="btn btn-info btn-min-width" value="Cek NIK" id="rjk_btnceknik_i">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="rjk_nama_i"><?= $question[16]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                                                <div class="col-md-9">
                                                    <input type="text" id="rjk_nama_i" class="form-control required" placeholder="" name="rjk_nama_i">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="rjk_ttl_i"><?= $question[17]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                                                <div class="col-md-5">
                                                    <input type="text" id="rjk_ttl_i" class="form-control required" placeholder="" name="rjk_ttl_i">
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="position-relative has-icon-left">
                                                        <input type="text" id="rjk_ttl2_i" class="form-control required" name="rjk_ttl2_i">
                                                        <div class="form-control-position">
                                                            <i class="ft-calendar"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="rjk_umur_i"><?= $question[18]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                                                <div class="col-md-9">
                                                    <input type="text" id="rjk_umur_i" class="form-control required" placeholder="" name="rjk_umur_i">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="rjk_agama_i"><?= $question[19]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                                                <div class="col-md-9">
                                                    <input type="text" id="rjk_agama_i" class="form-control required" placeholder="" name="rjk_agama_i" value="Islam" <?= $question[19]->IS_READONLY; ?>>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="rjk_alamat_i"><?= $question[20]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                                                <div class="col-md-9">
                                                    <input type="text" id="rjk_alamat_i" class="form-control required" placeholder="" name="rjk_alamat_i">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="rjk_pekerjaan_i"><?= $question[21]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                                                <div class="col-md-9">
                                                    <input type="text" style="width: 100%" id="rjk_pekerjaan_i" class="select2 job form-control required" placeholder="" name="rjk_pekerjaan_i">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="rjk_nohp_i"><?= $question[22]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                                                <div class="col-md-9">
                                                    <input type="text" id="rjk_nohp_i" class="form-control required" placeholder="" name="rjk_nohp_i">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="rjk_oldfoto_i"><?= $question[23]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                                                <div class="col-md-9">
                                                    <!-- <div class="row">
                                                        <div class="col-sm-3">
                                                            <input type="hidden" name="rjk_foto_i" value="Avatar">
                                                            <img src="<?= BASE_THEME ?>adm/app-assets/images/portrait/small/avatar-s-19.png" alt="" class="img-thumbnail">
                                                        </div>
                                                        <div class="col-sm-9"> -->
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" name="rjk_foto_i" id="rjk_foto_i" accept="image/jpg, image/jpeg, image/png" required onchange="getFileNameOfImage('rjk_foto_i', 'foto_i')">
                                                        <label for="rjk_foto_i" class="custom-file-label required" id="foto_i"></label>
                                                        <p class="text-left"><small class="text-muted">NB : Silahkan unggah pas foto ukuran 2x3 dengan latar belakang berwarna biru.</small></p>
                                                    </div>
                                                    <!-- </div>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </fieldset>

                                        <!-- Step 3 -->
                                        <h6><i class="step-icon ft-file-text"></i>Data Dokumen Rujuk</h6>
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
                                                <label class="col-md-4 label-control" for="rjk_docaktacerai"><?= $question[24]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                                                <div class="col-md-8">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" name="rjk_docaktacerai" id="rjk_docaktacerai" accept="image/jpg, image/jpeg, image/png" required onchange="getFileNameOfImage('rjk_docaktacerai', 'aktacerai')">
                                                        <label for="rjk_docaktacerai" class="custom-file-label" id="aktacerai"></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-4 label-control" for="rjk_docktp"><?= $question[25]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                                                <div class="col-md-4">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" name="rjk_docktp_s" id="rjk_docktp_s" accept="image/jpg, image/jpeg, image/png" required onchange="getFileNameOfImage('rjk_docktp_s', 'ktps')">
                                                        <label for="rjk_docktp_s" class="custom-file-label" id="ktps"></label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" name="rjk_docktp_i" id="rjk_docktp_i" accept="image/jpg, image/jpeg, image/png" required onchange="getFileNameOfImage('rjk_docktp_i', 'ktpi')">
                                                        <label for="rjk_docktp_i" class="custom-file-label" id="ktpi"></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-4 label-control" for="rjk_dockk"><?= $question[27]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                                                <div class="col-md-4">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" name="rjk_dockk_s" id="rjk_dockk_s" accept="image/jpg, image/jpeg, image/png" required onchange="getFileNameOfImage('rjk_dockk_s', 'kks')">
                                                        <label for="rjk_dockk_s" class="custom-file-label" id="kks"></label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" name="rjk_dockk_i" id="rjk_dockk_i" accept="image/jpg, image/jpeg, image/png" required onchange="getFileNameOfImage('rjk_dockk_i', 'kki')">
                                                        <label for="rjk_dockk_i" class="custom-file-label" id="kki"></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-4 label-control" for="rjk_docakta"><?= $question[29]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                                                <div class="col-md-4">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" name="rjk_docakta_s" id="rjk_docakta_s" accept="image/jpg, image/jpeg, image/png" required onchange="getFileNameOfImage('rjk_docakta_s', 'aktas')">
                                                        <label for="rjk_docakta_s" class="custom-file-label" id="aktas"></label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" name="rjk_docakta_i" id="rjk_docakta_i" accept="image/jpg, image/jpeg, image/png" required onchange="getFileNameOfImage('rjk_docakta_i', 'aktai')">
                                                        <label for="rjk_docakta_i" class="custom-file-label" id="aktai"></label>
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
        var numberLength = 0;

        $(function() {
            $('#detailSection').hide();
            $('#cancelRegistration').hide();

            $('#nextToDetail').on('click', function() {
                if ($('#rjk_tanggal_daftar_rujuk').val() != '' && $('#rjk_tanggal_cerai').val() != '' &&
                    $('#rjk_masa_idah').val() != '' && $('#rjk_status_cerai').val() != '') {
                    var uniqueID = generateUniqueID();

                    var tanggalDaftarRujuk_label = '<?= $question[0]->QUESTION_LABEL; ?>';
                    var tanggalDaftarRujuk_ans = $('#rjk_tanggal_daftar_rujuk').val();

                    var tanggalCerai_label = '<?= $question[1]->QUESTION_LABEL; ?>';
                    var tanggalCerai_ans = $('#rjk_tanggal_cerai').val();

                    var masaIdah_label = '<?= $question[2]->QUESTION_LABEL; ?>';
                    var masaIdah_ans = $('#rjk_masa_idah').val();

                    var statusCerai_label = '<?= $question[3]->QUESTION_LABEL; ?>';
                    var statusCerai_ans = $('#rjk_status_cerai').val();

                    if ($('#masaIdah').val() < 90) {
                        $.ajax({
                            type: 'ajax',
                            method: 'post',
                            url: '<?= BASE_URL . 'registration/submitHeader'; ?>',
                            data: {
                                uniqueID: uniqueID,
                                type: '<?= $type; ?>',
                                tanggalDaftarRujuk: tanggalDaftarRujuk_label + '^' + tanggalDaftarRujuk_ans,
                                tanggalCerai: tanggalCerai_label + '^' + tanggalCerai_ans,
                                masaIdah: masaIdah_label + '^' + masaIdah_ans,
                                statusCerai: statusCerai_label + '^' + statusCerai_ans
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
                                    swal("Error!", "Gagal submit data header rujuk!", "error");
                                }
                            },
                            error: function() {
                                swal("Error!", "Internal Server error 500!", "error");
                            }
                        });
                    } else {
                        swal("Melebihi batas masa idah (>90 hari)", "Anda harus mengulang akad nikah!", "error");
                    }
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

            //istri
            initializeDatetime('i');
            validateCitizenship('i');
            validateNIK('i');
            validateMobilePhone('i');
            initializeJobList('i');

            // CHECK NIK
            $('#rjk_btnceknik_s').on('click', function() {
                var nik = $('#rjk_nik_s').val();
                checkNIK(nik, 's');
                $('#rjk_kewarganegaraan_s').attr('readonly', true);
            });

            $('#rjk_btnceknik_i').on('click', function() {
                var nik = $('#rjk_nik_i').val();
                checkNIK(nik, 'i');
                $('#rjk_kewarganegaraan_i').attr('readonly', true);
            });

        });

        function generateUniqueID() {
            var participantID = '<?= $this->session->userdata('participant_id') ?>';
            var name = '<?= $this->session->userdata('name') ?>';
            var date = '<?= date('YmdHis') ?>';
            return 'RJK/' + participantID + '/' + name.substr(0, 3) + '/' + date;
        }

        function validateCitizenship(actor) {
            $('#rjk_kewarganegaraan_' + actor).change(function() {
                var rjk_kewarganegaraan = $('#rjk_kewarganegaraan_' + actor).val();
                getKewarganegaraan(rjk_kewarganegaraan, actor);
            });
        }

        function initializeDatetime(actor) {
            var today = moment().add(0, 'days');

            $('#rjk_tanggal_daftar_rujuk').datetimepicker({
                locale: 'id',
                format: 'DD-MM-YYYY',
                maxDate: today
            });

            $('#rjk_tanggal_cerai').datetimepicker({
                locale: 'id',
                format: 'DD-MM-YYYY',
                maxDate: today
            }).on('dp.change', function(e) {
                var rjk_tanggal_daftar_rujuk = $('#rjk_tanggal_daftar_rujuk').val();
                var rjk_tanggal_cerai = $('#rjk_tanggal_cerai').val();

                $.ajax({
                    type: 'ajax',
                    method: 'post',
                    url: '<?= BASE_URL . 'registration/getMasaIdah'; ?>',
                    data: {
                        tanggalDaftarRujuk: rjk_tanggal_daftar_rujuk,
                        tanggalCerai: rjk_tanggal_cerai
                    },
                    async: false,
                    dataType: 'json',
                    success: function(response) {
                        $('#masaIdah').val(response);
                        $('#rjk_masa_idah').val(response + ' hari');
                    },
                    error: function() {
                        swal("Error!", "Internal Server error 500!", "error");
                    }
                });
            });

            $('#rjk_ttl2_' + actor).datetimepicker({
                locale: 'id',
                format: 'DD-MM-YYYY'
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

            $("#rjk_pekerjaan_" + actor).select2({
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
            } else {
                setEditableElement(false, actor);
            }
        }

        function setEditableElement(value, actor) {
            var button = '#rjk_btnceknik_' + actor;
            $(button).attr('disabled', !value);
            $('#rjk_nama_' + actor).attr('readonly', value);
            $('#rjk_ttl_' + actor).attr('readonly', value);
            $('#rjk_ttl2_' + actor).attr('readonly', value);
            $('#rjk_umur_' + actor).attr('readonly', value);
            $('#rjk_agama_' + actor).attr('readonly', value);
            $('#rjk_alamat_' + actor).attr('readonly', value);
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
                $('#rjk_kewarganegaraan_' + actor).val('wni');
                $('#rjk_nik_' + actor).val(data.NIK);

                //disabled kwn, nik, button NIK
                $('#rjk_kewarganegaraan_' + actor).attr('disabled', true);
                $('#rjk_nik_' + actor).attr('readonly', true);
                $('#rjk_btnceknik_' + actor).attr('disabled', true);

                var kwn = $('#rjk_kewarganegaraan_' + actor).val();
                $('#hidden_kwn_' + actor).val(kwn);
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
            var msg = '';
            if ('s' == actor) {
                isSameGender = 'Laki-laki' == response.JENIS_KELAMIN ? true : false;
                msg = 'Calon suami harus berjenis kelamin laki-laki!';
            } else if ('i' == actor) {
                isSameGender = 'Perempuan' == response.JENIS_KELAMIN ? true : false;
                msg = 'Calon istri harus berjenis kelamin perempuan!';
            }

            if (isSameGender) {
                $('#rjk_nama_' + actor).val(response.NAMA);
                $('#rjk_ttl_' + actor).val(response.TEMPAT_LAHIR);
                $('#rjk_ttl2_' + actor).val(day + '-' + month + '-' + year);
                $('#rjk_umur_' + actor).val(umur);
                $('#rjk_agama_' + actor).val(response.AGAMA);
                $('#rjk_alamat_' + actor).val(alamat);
                $('#rjk_pekerjaan_' + actor).val(response.PEKERJAAN);
                $('#rjk_pekerjaan_' + actor).trigger('change');
            } else {
                swal("Error!", msg, "error");
            }
        }

        function validateMobilePhone(actor) {
            $('#rjk_nohp_' + actor).on('keyup', function(e) {
                numberLength = $('#rjk_nohp_' + actor).val().length;
            });

            $('#rjk_nohp_' + actor).on('keypress', function(e) {
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
            $('#rjk_nik_' + actor).on('keypress', function(e) {
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