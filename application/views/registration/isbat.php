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
                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"> <span class="avatar avatar-online"><img src="<?= BASE_THEME ?>adm/app-assets/images/portrait/small/avatar-s-19.png" alt="avatar"></span></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="arrow_box_right">
                                    <a class="dropdown-item" href="#"><span class="avatar avatar-online"><img src="<?= BASE_THEME ?>adm/app-assets/images/portrait/small/avatar-s-19.png" alt="avatar"><span class="user-name text-bold-700 ml-1">John Doe</span></span></a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="user-profile.html"><i class="ft-user"></i> Edit Profile</a>
                                    <a class="dropdown-item" href="email-application.html"><i class="ft-mail"></i> My Inbox</a>
                                    <a class="dropdown-item" href="project-summary.html"><i class="ft-check-square"></i> Task</a>
                                    <a class="dropdown-item" href="chat-application.html"><i class="ft-message-square"></i> Chats</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="login.html"><i class="ft-power"></i> Logout</a>
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
                    <a class="navbar-brand" href="index.html">
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
                    <h2 class="content-header-title">REGISTRASI ISBAT</h>
                </div>
                <!-- <div class="content-header-right col-md-8 col-12">
                    <div class="breadcrumbs-top float-md-right">
                        <div class="breadcrumb-wrapper mr-1">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="index.html">Registration</a>
                                </li>
                                <li class="breadcrumb-item active">isbat
                                </li>
                            </ol>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="content-body">
                <section id="drag-area">
                    <?= $this->session->flashdata('message'); ?>
                    <!-- HEADER SIDE OF REGISTRASI isbat -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Form Pendaftaran Isbat - Header</h4>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <!-- <div class="form-group row">
                                            <label class="col-md-3 label-control" for="isb_tempat"><?= $question[0]->QUESTION_LABEL ?></label>
                                            <div class="col-md-9">
                                                <select id="isb_tempat" name="isb_tempat" class="form-control">
                                                    <option value="none" selected="" disabled="">Pilih salah satu</option>
                                                    <option value="kua">Di KUA</option>
                                                    <option value="nonkua">Di Luar KUA</option>
                                                </select>
                                            </div>
                                        </div> -->

                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="isb_tanggal_akad"><?= $question[0]->QUESTION_LABEL ?></label>
                                            <div class="col-md-5">
                                                <div class="position-relative has-icon-left datepicker">
                                                    <input type="text" id="isb_tanggal_akad" class="form-control" name="isb_tanggal_akad">
                                                    <div class="form-control-position">
                                                        <i class="ft-calendar"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="position-relative has-icon-left">
                                                    <input type="text" id="isb_jam_akad" class="form-control" name="isb_jam_akad">
                                                    <div class="form-control-position">
                                                        <i class="ft-clock"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="isb_alamat_akad"><?= $question[1]->QUESTION_LABEL ?></label>
                                            <div class="col-md-9">
                                                <input type="text" id="isb_alamat_akad" class="form-control" placeholder="" name="isb_alamat_akad">
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

                    <!-- MAIN SIDE OF REGISTRASI isbat -->
                    <div class="row" id="detailSection">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Form Pendaftaran Isbat - Detail</h4>
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
                                        <input type="hidden" id="type" name="type" value="isbat">
                                        <!-- Step 1 -->
                                        <h6><i class="step-icon ft-user"></i> Data Suami</h6>
                                        <fieldset class="mt-2">
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="isb_kewarganegaraan_s"><?= $question[2]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                                                <div class="col-md-9">
                                                    <select id="isb_kewarganegaraan_s" name="isb_kewarganegaraan_s" class="form-control required">
                                                        <option value="none" selected="" disabled="">Pilih salah satu</option>
                                                        <option value="wni">WNI</option>
                                                        <option value="wna">WNA</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="isb_nik_s"><?= $question[3]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                                                <div class="col-md-7">
                                                    <input type="text" id="isb_nik_s" class="form-control required" placeholder="" name="isb_nik_s">
                                                </div>
                                                <div class="col-md-2">
                                                    <input type="button" class="btn btn-info btn-min-width" value="Cek NIK" id="isb_btnceknik_s">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="isb_nama_s"><?= $question[4]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                                                <div class="col-md-9">
                                                    <input type="text" id="isb_nama_s" class="form-control required" placeholder="" name="isb_nama_s">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="isb_ttl_s"><?= $question[5]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                                                <div class="col-md-5">
                                                    <input type="text" id="isb_ttl_s" class="form-control required" placeholder="" name="isb_ttl_s">
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="position-relative has-icon-left">
                                                        <input type="text" id="isb_ttl2_s" class="form-control required" name="isb_ttl2_s">
                                                        <div class="form-control-position">
                                                            <i class="ft-calendar"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="isb_umur_s"><?= $question[6]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                                                <div class="col-md-9">
                                                    <input type="text" id="isb_umur_s" class="form-control required" placeholder="" name="isb_umur_s">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="isb_agama_s"><?= $question[7]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                                                <div class="col-md-9">
                                                    <input type="text" id="isb_agama_s" class="form-control required" placeholder="" name="isb_agama_s" value="Islam" <?= $question[7]->IS_READONLY; ?>>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="isb_alamat_s"><?= $question[8]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                                                <div class="col-md-9">
                                                    <input type="text" id="isb_alamat_s" class="form-control required" placeholder="" name="isb_alamat_s">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="isb_pekerjaan_s"><?= $question[9]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                                                <div class="col-md-9">
                                                    <input type="text" style="width: 100%" id="isb_pekerjaan_s" class="select2 job form-control required" placeholder="" name="isb_pekerjaan_s">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="isb_nohp_s"><?= $question[10]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                                                <div class="col-md-9">
                                                    <input type="text" id="isb_nohp_s" class="form-control required" placeholder="" name="isb_nohp_s">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="isb_foto_s"><?= $question[11]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                                                <div class="col-md-9">
                                                    <!-- <div class="row">
                                                        <div class="col-sm-3">
                                                            <input type="hidden" name="isb_oldfoto_s" value="Avatar">
                                                            <img src="<?= BASE_THEME ?>adm/app-assets/images/portrait/small/avatar-s-19.png" alt="" class="img-thumbnail">
                                                        </div>
                                                        <div class="col-sm-9"> -->
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" name="isb_foto_s" id="isb_foto_s">
                                                        <label for="isb_foto_s" class="custom-file-label required"></label>
                                                        <p class="text-left"><small class="text-muted">NB : Silahkan unggah pas foto ukuran 2x3 dengan latar belakang berwarna biru.</small></p>
                                                    </div>
                                                    <!-- </div>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </fieldset>

                                        <!-- Step 2 -->
                                        <h6><i class="step-icon ft-user"></i>Data Istri</h6>
                                        <fieldset class="mt-2">
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="isb_kewarganegaraan_i"><?= $question[12]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                                                <div class="col-md-9">
                                                    <select id="isb_kewarganegaraan_i" name="isb_kewarganegaraan_i" class="form-control required">
                                                        <option value="none" selected="" disabled="">Pilih salah satu</option>
                                                        <option value="wni">WNI</option>
                                                        <option value="wna">WNA</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="isb_nik_i"><?= $question[13]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                                                <div class="col-md-7">
                                                    <input type="text" id="isb_nik_i" class="form-control required" placeholder="" name="isb_nik_i">
                                                </div>
                                                <div class="col-md-2">
                                                    <input type="button" class="btn btn-info btn-min-width" value="Cek NIK" id="isb_btnceknik_i">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="isb_nama_i"><?= $question[14]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                                                <div class="col-md-9">
                                                    <input type="text" id="isb_nama_i" class="form-control required" placeholder="" name="isb_nama_i">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="isb_ttl_i"><?= $question[15]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                                                <div class="col-md-5">
                                                    <input type="text" id="isb_ttl_i" class="form-control required" placeholder="" name="isb_ttl_i">
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="position-relative has-icon-left">
                                                        <input type="text" id="isb_ttl2_i" class="form-control required" name="isb_ttl2_i">
                                                        <div class="form-control-position">
                                                            <i class="ft-calendar"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="isb_umur_i"><?= $question[16]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                                                <div class="col-md-9">
                                                    <input type="text" id="isb_umur_i" class="form-control required" placeholder="" name="isb_umur_i">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="isb_agama_i"><?= $question[17]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                                                <div class="col-md-9">
                                                    <input type="text" id="isb_agama_i" class="form-control required" placeholder="" name="isb_agama_i" value="Islam" <?= $question[17]->IS_READONLY; ?>>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="isb_alamat_i"><?= $question[18]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                                                <div class="col-md-9">
                                                    <input type="text" id="isb_alamat_i" class="form-control required" placeholder="" name="isb_alamat_i">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="isb_pekerjaan_i"><?= $question[19]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                                                <div class="col-md-9">
                                                    <input type="text" style="width: 100%" id="isb_pekerjaan_i" class="select2 job form-control required" placeholder="" name="isb_pekerjaan_i">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="isb_nohp_i"><?= $question[20]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                                                <div class="col-md-9">
                                                    <input type="text" id="isb_nohp_i" class="form-control required" placeholder="" name="isb_nohp_i">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="isb_oldfoto_i"><?= $question[21]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                                                <div class="col-md-9">
                                                    <!-- <div class="row">
                                                        <div class="col-sm-3">
                                                            <input type="hidden" name="isb_foto_i" value="Avatar">
                                                            <img src="<?= BASE_THEME ?>adm/app-assets/images/portrait/small/avatar-s-19.png" alt="" class="img-thumbnail">
                                                        </div>
                                                        <div class="col-sm-9"> -->
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" name="isb_foto_i" id="isb_foto_i">
                                                        <label for="isb_foto_i" class="custom-file-label required"></label>
                                                        <p class="text-left"><small class="text-muted">NB : Silahkan unggah pas foto ukuran 2x3 dengan latar belakang berwarna biru.</small></p>
                                                    </div>
                                                    <!-- </div>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </fieldset>

                                        <!-- Step 3 -->
                                        <h6><i class="step-icon ft-file-text"></i>Data Dokumen Isbat</h6>
                                        <fieldset class="mt-2">
                                            <div class="form-group row">
                                                <label class="col-md-4 label-control" for="isb_docsppa"><?= $question[22]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                                                <div class="col-md-8">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" name="isb_docsppa" id="isb_docsppa">
                                                        <label for="isb_docsppa" class="custom-file-label"></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-4 label-control" for="isb_docktp"><?= $question[23]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                                                <div class="col-md-4">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" name="isb_docktp_s" id="isb_docktp_s">
                                                        <label for="isb_docktp_s" class="custom-file-label"></label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" name="isb_docktp_i" id="isb_docktp_i">
                                                        <label for="isb_docktp_i" class="custom-file-label"></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-4 label-control" for="isb_dockk"><?= $question[25]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                                                <div class="col-md-4">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" name="isb_dockk_s" id="isb_dockk_s">
                                                        <label for="isb_dockk_s" class="custom-file-label"></label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" name="isb_dockk_i" id="isb_dockk_i">
                                                        <label for="isb_dockk_i" class="custom-file-label"></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-4 label-control" for="isb_docakta"><?= $question[27]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                                                <div class="col-md-4">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" name="isb_docakta_s" id="isb_docakta_s">
                                                        <label for="isb_docakta_s" class="custom-file-label"></label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" name="isb_docakta_i" id="isb_docakta_i">
                                                        <label for="isb_docakta_i" class="custom-file-label"></label>
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
                if ($('#isb_tempat').val() != '' && $('#isb_alamat_akad').val() != '') {
                    var uniqueID = generateUniqueID();

                    // var tempatAkad_label = '<?= $question[0]->QUESTION_LABEL; ?>';
                    // var tempatAkad_ans = $('#isb_tempat').val();

                    var tanggalAkad_label = '<?= $question[1]->QUESTION_LABEL; ?>';
                    var tanggalAkad_ans = $('#nkh_tanggal_akad').val() + ' ' + $('#nkh_jam_akad').val();

                    var alamatAkad_label = '<?= $question[1]->QUESTION_LABEL; ?>';
                    var alamatAkad_ans = $('#isb_alamat_akad').val();

                    $.ajax({
                        type: 'ajax',
                        method: 'post',
                        url: '<?= BASE_URL . 'registration/submitHeader'; ?>',
                        data: {
                            uniqueID: uniqueID,
                            type: '<?= $type; ?>',
                            // tempatAkad: tempatAkad_label + '^' + tempatAkad_ans,
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
                                swal("Gagal submit data header isbat!", "Error!", "error");
                            }
                        },
                        error: function() {
                            swal("Internal Server error 500!", "Error!", "error");
                        }
                    });
                } else {
                    swal("Isi field yang kosong!", "Error!", "error");
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
                                swal("Internal Server error 500!", "Error!", "error");
                            }
                        });
                    }
                })
            });

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

            getFileNameOfImage();

            // VALIDASI TEMPAT AKAD isbat
            // $('#isb_tempat').change(function() {
            //     var isb_tempat = $('#isb_tempat').val();
            //     if ('kua' === isb_tempat) {
            //         $('#isb_alamat_akad').attr('readonly', true);
            //         $('#isb_alamat_akad').val('KUA Dawarblandong');
            //     } else {
            //         $('#isb_alamat_akad').val('');
            //         $('#isb_alamat_akad').attr('readonly', false);
            //     }
            // });

            // CHECK NIK
            $('#isb_btnceknik_s').on('click', function() {
                var nik = $('#isb_nik_s').val();
                checkNIK(nik, 's');
                $('#isb_kewarganegaraan_s').attr('readonly', true);
            });

            $('#isb_btnceknik_i').on('click', function() {
                var nik = $('#isb_nik_i').val();
                checkNIK(nik, 'i');
                $('#isb_kewarganegaraan_i').attr('readonly', true);
            });

        });

        function generateUniqueID() {
            var participantID = '<?= $this->session->userdata('participant_id') ?>';
            var name = '<?= $this->session->userdata('name') ?>';
            var date = '<?= date('YmdHis') ?>';
            return participantID + '/' + name.substr(0, 3) + '/' + date;
        }

        function validateCitizenship(actor) {
            $('#isb_kewarganegaraan_' + actor).change(function() {
                var isb_kewarganegaraan = $('#isb_kewarganegaraan_' + actor).val();
                getKewarganegaraan(isb_kewarganegaraan, actor);
            });
        }

        function initializeDatetime(actor) {
            var tomorrow = moment().add(2, 'days');

            $('#isb_tanggal_akad').datetimepicker({
                locale: 'id',
                format: 'DD-MM-YYYY',
                minDate: tomorrow
            });

            $('#isb_jam_akad').datetimepicker({
                locale: 'id',
                format: 'HH:mm:ss'
            });

            $('#isb_ttl2_' + actor).datetimepicker({
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
                    swal("Internal Server error 500!", "Error!", "error");
                }
            });

            $("#isb_pekerjaan_" + actor).select2({
                data: data,
                placeholder: "Pilih salah satu",
            });
        }

        function getFileNameOfImage() {
            $('.custom-file-input').on('change', function() {
                let fileName = $(this).val().split('\\').pop();
                $(this).next('.custom-file-label').addClass('selected').html(fileName);
            });
        }

        function getKewarganegaraan(element, actor) {
            if ('wni' == element) {
                setEditableElement(true, actor);
            } else {
                setEditableElement(false, actor);
            }
        }

        function setEditableElement(value, actor) {
            var button = '#isb_btnceknik_' + actor;
            $(button).attr('disabled', !value);
            $('#isb_nama_' + actor).attr('readonly', value);
            $('#isb_ttl_' + actor).attr('readonly', value);
            $('#isb_ttl2_' + actor).attr('readonly', value);
            $('#isb_umur_' + actor).attr('readonly', value);
            $('#isb_agama_' + actor).attr('readonly', value);
            $('#isb_alamat_' + actor).attr('readonly', value);
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

            $('#isb_nama_' + actor).val(response.NAMA);
            $('#isb_ttl_' + actor).val(response.TEMPAT_LAHIR);
            $('#isb_ttl2_' + actor).val(day + '-' + month + '-' + year);
            $('#isb_umur_' + actor).val(umur);
            $('#isb_agama_' + actor).val(response.AGAMA);
            $('#isb_alamat_' + actor).val(alamat);
            $('#isb_pekerjaan_' + actor).val(response.PEKERJAAN);
            $('#isb_pekerjaan_' + actor).trigger('change');
        }

        function validateMobilePhone(actor) {
            $('#isb_nohp_' + actor).on('keyup', function(e) {
                numberLength = $('#isb_nohp_' + actor).val().length;
            });

            $('#isb_nohp_' + actor).on('keypress', function(e) {
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
            $('#isb_nik_' + actor).on('keypress', function(e) {
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
                            swal("Data NIK tidak ditemukan!", "Error!", "error");
                        }
                    },
                    error: function() {
                        swal("Internal Server error 500!", "Error!", "error");
                    }
                });
            } else {
                swal("Harap masukkan No. KTP!", "Error!", "error");
            }
        }
    </script>
</body>

</html>