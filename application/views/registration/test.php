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
                                            <label class="col-md-3 label-control" for="nkh_tempat">Tempat Nikah</label>
                                            <div class="col-md-9">
                                                <select id="nkh_tempat" name="nkh_tempat" class="form-control">
                                                    <option value="none" selected="" disabled="">Pilih salah satu</option>
                                                    <option value="kua">Di KUA</option>
                                                    <option value="nonkua">Di Luar KUA</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="nkh_tanggal_akad">Tanggal Akad Nikah</label>
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
                                            <label class="col-md-3 label-control" for="nkh_alamat_akad">Alamat Lokasi Akad Nikah</label>
                                            <div class="col-md-9">
                                                <input type="text" id="nkh_alamat_akad" class="form-control" placeholder="" name="nkh_alamat_akad">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END OF HEADER SIDE -->

                    <!-- MAIN SIDE OF REGISTRASI NIKAH -->
                    <div class="row">
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
                                        <form action="#" class="steps-validation">
                                            <!-- Step 1 -->
                                            <h6><i class="step-icon ft-user"></i> Data Calon Suami</h6>
                                            <fieldset class="mt-2">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="nkh_kewarganegaraan_s">Kewarganegaraan <span class="danger">*</span></label>
                                                    <div class="col-md-9">
                                                        <select id="nkh_kewarganegaraan_s" name="nkh_kewarganegaraan_s" class="form-control required">
                                                            <option value="none" selected="" disabled="">Pilih salah satu</option>
                                                            <option value="wni">WNI</option>
                                                            <option value="wna">WNA</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="nkh_nik_s">NIK Calon Suami <span class="danger">*</span></label>
                                                    <div class="col-md-7">
                                                        <input type="text" id="nkh_nik_s" class="form-control required" placeholder="" name="nkh_nik_s">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <input type="button" class="btn btn-info btn-min-width" value="Cek NIK" id="nkh_btnceknik_s">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="nkh_nama_s">Nama Calon Suami <span class="danger">*</span></label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="nkh_nama_s" class="form-control required" placeholder="" name="nkh_nama_s">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="nkh_ttl_s">Tempat & Tanggal Lahir <span class="danger">*</span></label>
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
                                                    <label class="col-md-3 label-control" for="nkh_umur_s">Umur <span class="danger">*</span></label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="nkh_umur_s" class="form-control required" placeholder="" name="nkh_umur_s">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="nkh_status_s">Status <span class="danger">*</span></label>
                                                    <div class="col-md-9">
                                                        <select id="nkh_status_s" name="nkh_status_s" class="form-control required">
                                                            <option value="none" selected="" disabled="">Pilih salah satu</option>
                                                            <option value="jejaka">Jejaka</option>
                                                            <option value="beristri">Beristri</option>
                                                            <option value="ceraimati">Cerai Mati</option>
                                                            <option value="ceraihidup">Cerai Hidup</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="nkh_agama_s">Agama <span class="danger">*</span></label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="nkh_agama_s" class="form-control required" placeholder="" name="nkh_agama_s">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="nkh_alamat_s">Alamat <span class="danger">*</span></label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="nkh_alamat_s" class="form-control required" placeholder="" name="nkh_alamat_s">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="nkh_pekerjaan_s">Pekerjaan <span class="danger">*</span></label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="nkh_pekerjaan_s" class="select2 job form-control required" placeholder="" name="nkh_pekerjaan_s">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="nkh_nohp_s">No. HP / WA <span class="danger">*</span></label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="nkh_nohp_s" class="form-control required" placeholder="" name="nkh_nohp_s">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="nkh_foto_s">Foto Calon Suami <span class="danger">*</span></label>
                                                    <div class="col-md-9">
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <input type="hidden" name="nkh_old_image_s" value="Avatar">
                                                                <img src="<?= BASE_THEME ?>adm/app-assets/images/portrait/small/avatar-s-19.png" alt="" class="img-thumbnail">
                                                            </div>
                                                            <div class="col-sm-9">
                                                                <div class="custom-file">
                                                                    <input type="file" class="custom-file-input" name="nkh_old_image_s" id="nkh_old_image_s">
                                                                    <label for="nkh_old_image_s" class="custom-file-label required"></label>
                                                                    <p class="text-left"><small class="text-muted">NB : Silahkan unggah pas foto ukuran 2x3 dengan latar belakang berwarna biru.</small></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>

                                            <!-- Step 2 -->
                                            <h6><i class="step-icon ft-user"></i>Data Calon Istri</h6>
                                            <fieldset class="mt-2">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="nkh_kewarganegaraan_i">Kewarganegaraan <span class="danger">*</span></label>
                                                    <div class="col-md-9">
                                                        <select id="nkh_kewarganegaraan_i" name="nkh_kewarganegaraan_i" class="form-control required">
                                                            <option value="none" selected="" disabled="">Pilih salah satu</option>
                                                            <option value="wni">WNI</option>
                                                            <option value="wna">WNA</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="nkh_nik_i">NIK Calon Istri <span class="danger">*</span></label>
                                                    <div class="col-md-7">
                                                        <input type="text" id="nkh_nik_i" class="form-control required" placeholder="" name="nkh_nik_i">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <input type="button" class="btn btn-info btn-min-width" value="Cek NIK" id="nkh_btnceknik_i">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="nkh_nama_i">Nama Calon Istri <span class="danger">*</span></label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="nkh_nama_i" class="form-control required" placeholder="" name="nkh_nama_i">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="nkh_ttl_i">Tempat & Tanggal Lahir <span class="danger">*</span></label>
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
                                                    <label class="col-md-3 label-control" for="nkh_umur_i">Umur <span class="danger">*</span></label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="nkh_umur_i" class="form-control required" placeholder="" name="nkh_umur_i">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="nkh_status_i">Status <span class="danger">*</span></label>
                                                    <div class="col-md-9">
                                                        <select id="nkh_status_i" name="nkh_status_i" class="form-control required">
                                                            <option value="none" selected="" disabled="">Pilih salah satu</option>
                                                            <option value="perawan">Perawan</option>
                                                            <option value="ceraimati">Cerai Mati</option>
                                                            <option value="ceraihidup">Cerai Hidup</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="nkh_agama_i">Agama <span class="danger">*</span></label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="nkh_agama_i" class="form-control required" placeholder="" name="nkh_agama_i">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="nkh_alamat_i">Alamat <span class="danger">*</span></label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="nkh_alamat_i" class="form-control required" placeholder="" name="nkh_alamat_i">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="nkh_pekerjaan_i">Pekerjaan <span class="danger">*</span></label>
                                                    <div class="col-md-9">
                                                        <input type="text" style="width: 100%" id="nkh_pekerjaan_i" class="select2 job form-control required" placeholder="" name="nkh_pekerjaan_i">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="nkh_nohp_i">No. HP / WA <span class="danger">*</span></label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="nkh_nohp_i" class="form-control required" placeholder="" name="nkh_nohp_i">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="nkh_foto_i">Foto Calon Istri <span class="danger">*</span></label>
                                                    <div class="col-md-9">
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <input type="hidden" name="nkh_old_image_i" value="Avatar">
                                                                <img src="<?= BASE_THEME ?>adm/app-assets/images/portrait/small/avatar-s-19.png" alt="" class="img-thumbnail">
                                                            </div>
                                                            <div class="col-sm-9">
                                                                <div class="custom-file">
                                                                    <input type="file" class="custom-file-input" name="image" id="image">
                                                                    <label for="image" class="custom-file-label required"></label>
                                                                    <p class="text-left"><small class="text-muted">NB : Silahkan unggah pas foto ukuran 2x3 dengan latar belakang berwarna biru.</small></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>

                                            <!-- Step 3 -->
                                            <h6><i class="step-icon ft-file-text"></i>Data Dokumen Nikah</h6>
                                            <fieldset class="mt-2">
                                                <div class="form-group row">
                                                    <label class="col-md-5 label-control" for="nkh_docn1">Surat Keterangan untuk Nikah N1 (Dari Kelurahan) <span class="danger">*</span></label>
                                                    <div class="col-md-7">
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" name="nkh_docn1" id="nkh_docn1">
                                                            <label for="nkh_docn1" class="custom-file-label">Pilih file</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-5 label-control" for="nkh_docn3">Surat Persetujuan Mempelai N3 <span class="danger">*</span></label>
                                                    <div class="col-md-7">
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" name="nkh_docn3" id="nkh_docn3">
                                                            <label for="nkh_docn3" class="custom-file-label">Pilih file</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-5 label-control" for="nkh_docktp">Kartu Tanda Penduduk <span class="danger">*</span></label>
                                                    <div class="col-md-7">
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" name="nkh_docktp" id="nkh_docktp">
                                                            <label for="nkh_docktp" class="custom-file-label">Pilih file</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-5 label-control" for="nkh_dockk">Kartu Keluarga <span class="danger">*</span></label>
                                                    <div class="col-md-7">
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" name="nkh_dockk" id="nkh_dockk">
                                                            <label for="nkh_dockk" class="custom-file-label">Pilih file</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-5 label-control" for="nkh_docakta">Akta Kelahiran <span class="danger">*</span></label>
                                                    <div class="col-md-7">
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" name="nkh_docakta" id="nkh_docakta">
                                                            <label for="nkh_docakta" class="custom-file-label">Pilih file</label>
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

            // VALIDASI TEMPAT AKAD NIKAH
            $('#nkh_tempat').change(function() {
                var nkh_tempat = $('#nkh_tempat').val();
                if ('kua' === nkh_tempat) {
                    $('#nkh_alamat_akad').attr('readonly', true);
                } else {
                    $('#nkh_alamat_akad').attr('readonly', false);
                }
            });

            // CHECK NIK
            $('#nkh_btnceknik_s').on('click', function() {
                var nik = $('#nkh_nik_s').val();
                checkNIK(nik, 's');
                $('#nkh_kewarganegaraan_s').attr('disabled', true);
            });

            $('#nkh_btnceknik_i').on('click', function() {
                var nik = $('#nkh_nik_i').val();
                checkNIK(nik, 'i');
                $('#nkh_kewarganegaraan_i').attr('disabled', true);
            });

        });

        function validateCitizenship(actor) {
            $('#nkh_kewarganegaraan_' + actor).change(function() {
                var nkh_kewarganegaraan = $('#nkh_kewarganegaraan_' + actor).val();
                getKewarganegaraan(nkh_kewarganegaraan, actor);
            });
        }

        function checkNIK(actor) {
            $('#nkh_btnceknik_' + actor).on('click', function() {
                var nik = $('#nkh_nik_' + actor).val();
                checkNIK(nik, actor);
                $('#nkh_kewarganegaraan_' + actor).attr('disabled', true);
            });
        }

        function initializeDatetime(actor) {
            var tomorrow = moment().add(7, 'days');

            $('#nkh_tanggal_akad').datetimepicker({
                locale: 'id',
                format: 'DD-MM-YYYY',
                minDate: tomorrow
            });

            $('#nkh_jam_akad').datetimepicker({
                locale: 'id',
                format: 'HH:mm'
            });

            $('#nkh_ttl2_' + actor).datetimepicker({
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

            $("#nkh_pekerjaan_" + actor).select2({
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
            var button = '#nkh_btnceknik_' + actor;
            $(button).attr('disabled', !value);
            $('#nkh_nama_' + actor).attr('readonly', value);
            $('#nkh_ttl_' + actor).attr('readonly', value);
            $('#nkh_ttl2_' + actor).attr('readonly', value);
            $('#nkh_umur_' + actor).attr('readonly', value);
            $('#nkh_agama_' + actor).attr('readonly', value);
            $('#nkh_alamat_' + actor).attr('readonly', value);
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

            $('#nkh_nama_' + actor).val(response.NAMA);
            $('#nkh_ttl_' + actor).val(response.TEMPAT_LAHIR);
            $('#nkh_ttl2_' + actor).val(day + '-' + month + '-' + year);
            $('#nkh_umur_' + actor).val(umur);
            $('#nkh_agama_' + actor).val(response.AGAMA);
            $('#nkh_alamat_' + actor).val(alamat);
            $('#nkh_pekerjaan_' + actor).val(response.PEKERJAAN);
            $('#nkh_pekerjaan_' + actor).trigger('change');
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