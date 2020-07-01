<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
            <div class="content-header-left col-md-4 col-12 mb-2">
                <h2 class="content-header-title">PEMERIKSAAN RUJUK</h>
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
                                <!-- <h4 class="card-title">Form Pendaftaran Nikah - Header</h4> -->
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <!-- ISI DISINI -->
                                    <form action="<?= BASE_URL . 'penghulu/submitPemeriksaanRujuk' ?>" method="post" id="form" novalidate>
                                        <input type="hidden" id="regID" name="regID" value="<?= $result[0]->REG_ID; ?>">
                                        <div class="row mb-1">
                                            <div class="col-md-6">
                                                <h6 style="color: #18d26e;"><strong>PILIH DAERAH</strong></h6>
                                            </div>
                                            <div class="col-md-6"></div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="provinsi">Provinsi <span class="danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" id="provinsi" class="form-control" placeholder="" name="provinsi" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="kabupaten">Kabupaten/Kota <span class="danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" id="kabupaten" class="form-control" placeholder="" name="kabupaten" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="kecamatan">Kecamatan <span class="danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" id="kecamatan" class="form-control" placeholder="" name="kecamatan" required>
                                            </div>
                                        </div>
                                        <div class="row mb-1">
                                            <div class="col-md-6">
                                                <h6 style="color: #18d26e;"><strong>DETAIL PENCATATAN RUJUK</strong></h6>
                                            </div>
                                            <div class="col-md-6"></div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="nomoraktanikah">Nomor Akta Nikah <span class="danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" id="nomoraktanikah" class="form-control" placeholder="" name="nomoraktanikah" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="nomorrujuk">Nomor Rujuk <span class="danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" id="nomorrujuk" class="form-control" placeholder="" name="nomorrujuk" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="tanggalrujuk">Tanggal Rujuk <span class="danger">*</span></label>
                                            <div class="col-md-9">
                                                <div class="position-relative has-icon-left datepicker">
                                                    <input type="text" id="tanggalrujuk" class="form-control date" name="tanggalrujuk" autocomplete="off" required>
                                                    <div class="form-control-position">
                                                        <i class="ft-calendar"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-1">
                                            <div class="col-md-6">
                                                <h6 style="color: #18d26e;"><strong>IKRAR RUJUK</strong></h6>
                                                <p>Telah dilakukan ikrar rujuk pada hari:</p>
                                            </div>
                                            <div class="col-md-6"></div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="tanggalikrarrujuk">Tanggal Ikrar Rujuk <span class="danger">*</span></label>
                                            <div class="col-md-9">
                                                <div class="position-relative has-icon-left datepicker">
                                                    <input type="text" id="tanggalikrarrujuk" class="form-control date" name="tanggalikrarrujuk" autocomplete="off" required>
                                                    <div class="form-control-position">
                                                        <i class="ft-calendar"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <label class="col-md-3 label-control" for="rujukke">Rujuk ke- <span class="danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" id="rujukke" class="form-control number" placeholder="" name="rujukke" required>
                                            </div>
                                        </div>

                                        <hr class="divider" />

                                        <ul class="nav nav-tabs">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="base-tab1" data-toggle="tab" aria-controls="tab1" href="#tab1" aria-expanded="true">Data Suami</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="base-tab2" data-toggle="tab" aria-controls="tab2" href="#tab2" aria-expanded="false">Data Istri</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content px-2 pt-3">
                                            <div role="tabpanel" class="tab-pane active" id="tab1" aria-expanded="true" aria-labelledby="base-tab1">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="nik_s">NIK Suami <span class="danger">*</span></label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="nik_s" class="form-control nik required" placeholder="" name="nik_s" required value="<?= $result[0]->NIK_S; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="nama_s">Nama Lengkap Suami <span class="danger">*</span></label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="nama_s" class="form-control" placeholder="" name="nama_s" required value="<?= $result[0]->NAMA_S; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="alias_s">Nama Alias <span class="danger">*</span></label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="alias_s" class="form-control" placeholder="" name="alias_s" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="bin_s">Bin <span class="danger">*</span></label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="bin_s" class="form-control" placeholder="" name="bin_s" required>
                                                    </div>
                                                </div>
                                                <?php $ttl_s = explode(',', $result[0]->TTL_S); ?>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="ttl_s">Tempat Tanggal Lahir <span class="danger">*</span></label>
                                                    <div class="col-md-5">
                                                        <input type="text" id="ttl_s" class="form-control" placeholder="" name="ttl_s" required value="<?= $ttl_s[0]; ?>">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="position-relative has-icon-left">
                                                            <input type="text" id="ttl2_s" class="form-control date required" name="ttl2_s" autocomplete="off" required value="<?= $ttl_s[1] ?>">
                                                            <div class="form-control-position">
                                                                <i class="ft-calendar"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="umur_s">Umur(tahun) <span class="danger">*</span></label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="umur_s" class="form-control number required" placeholder="" name="umur_s" required value="<?= $result[0]->UMUR_S; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="agama_s">Agama <span class="danger">*</span></label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="agama_s" class="form-control" placeholder="" name="agama_s" value="Islam" readonly>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="kwn_s">Kewarganegaraan <span class="danger">*</span></label>
                                                    <div class="col-md-9">
                                                        <select id="kwn_s" name="kwn_s" class="form-control" required>
                                                            <option value="0" selected="" disabled="">Pilih salah satu</option>
                                                            <option value="WNI">WNI</option>
                                                            <option value="WNA">WNA</option>
                                                        </select>
                                                        <!-- <input type="text" id="kwn_s" class="form-control" placeholder="" name="kwn_s"> -->
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="pendidikan_s">Pendidikan Terakhir <span class="danger">*</span></label>
                                                    <div class="col-md-9">
                                                        <select id="pendidikan_s" name="pendidikan_s" class="form-control" required>
                                                            <option value="none" selected="" disabled="">Pilih salah satu</option>
                                                            <option value="SD">SD</option>
                                                            <option value="SMP">SMP</option>
                                                            <option value="SMA">SMA</option>
                                                            <option value="Diploma">Diploma</option>
                                                            <option value="Sarjana">Sarjana</option>
                                                            <option value="Magister">Magister</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="pekerjaan_s">Pekerjaan <span class="danger">*</span></label>
                                                    <div class="col-md-9">
                                                        <input type="text" style="width: 100%" id="pekerjaan_s" class="select2 jobs form-control" placeholder="" name="pekerjaan_s" required value="<?= $result[0]->PEKERJAAN_S; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="tempattinggal_s">Tempat Tinggal <span class="danger">*</span></label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="tempattinggal_s" class="form-control" placeholder="" name="tempattinggal_s" required value="<?= $result[0]->ALMT_S; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="nohp_s">Nomor HP <span class="danger">*</span></label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="nohp_s" class="form-control mobile required" placeholder="" name="nohp_s" required value="<?= $result[0]->NO_HP_S; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="email_s">Email <span class="danger">*</span></label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="email_s" class="form-control" placeholder="" name="email_s" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="status_s">Status <span class="danger">*</span></label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="status_s" class="form-control" placeholder="" name="status_s" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab2" aria-labelledby="base-tab2">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="nik_i">NIK Istri <span class="danger">*</span></label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="nik_i" class="form-control nik required" placeholder="" name="nik_i" required value="<?= $result[0]->NIK_I; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="nama_i">Nama Lengkap Istri <span class="danger">*</span></label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="nama_i" class="form-control" placeholder="" name="nama_i" required value="<?= $result[0]->NAMA_I; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="alias_i">Nama Alias <span class="danger">*</span></label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="alias_i" class="form-control" placeholder="" name="alias_i" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="bin_i">Bin <span class="danger">*</span></label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="bin_i" class="form-control" placeholder="" name="bin_i" required>
                                                    </div>
                                                </div>
                                                <?php $ttl_i = explode(',', $result[0]->TTL_I); ?>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="ttl_i">Tempat Tanggal Lahir <span class="danger">*</span></label>
                                                    <div class="col-md-5">
                                                        <input type="text" id="ttl_i" class="form-control" placeholder="" name="ttl_i" required value="<?= $ttl_i[0]; ?>">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="position-relative has-icon-left">
                                                            <input type="text" id="ttl2_i" class="form-control date required" name="ttl2_i" autocomplete="off" required value="<?= $ttl_i[1]; ?>">
                                                            <div class="form-control-position">
                                                                <i class="ft-calendar"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="umur_i">Umur(tahun) <span class="danger">*</span></label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="umur_i" class="form-control number required" placeholder="" name="umur_i" required value="<?= $result[0]->UMUR_I; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="agama_i">Agama <span class="danger">*</span></label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="agama_i" class="form-control" placeholder="" name="agama_i" value="Islam" readonly>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="kwn_i">Kewarganegaraan <span class="danger">*</span></label>
                                                    <div class="col-md-9">
                                                        <select id="kwn_i" name="kwn_i" class="form-control" required>
                                                            <option value="0" selected="" disabled="">Pilih salah satu</option>
                                                            <option value="WNI">WNI</option>
                                                            <option value="WNA">WNA</option>
                                                        </select>
                                                        <!-- <input type="text" id="kwn_i" class="form-control" placeholder="" name="kwn_i"> -->
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="pendidikan_i">Pendidikan Terakhir <span class="danger">*</span></label>
                                                    <div class="col-md-9">
                                                        <select id="pendidikan_i" name="pendidikan_i" class="form-control" required>
                                                            <option value="none" selected="" disabled="">Pilih salah satu</option>
                                                            <option value="SD">SD</option>
                                                            <option value="SMP">SMP</option>
                                                            <option value="SMA">SMA</option>
                                                            <option value="Diploma">Diploma</option>
                                                            <option value="Sarjana">Sarjana</option>
                                                            <option value="Magister">Magister</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="pekerjaan_i">Pekerjaan <span class="danger">*</span></label>
                                                    <div class="col-md-9">
                                                        <input type="text" style="width: 100%" id="pekerjaan_i" class="select2 jobs form-control" placeholder="" name="pekerjaan_i" required value="<?= $result[0]->PEKERJAAN_I; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="tempattinggal_i">Tempat Tinggal <span class="danger">*</span></label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="tempattinggal_i" class="form-control" placeholder="" name="tempattinggal_i" required value="<?= $result[0]->ALMT_I; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="nohp_i">Nomor HP <span class="danger">*</span></label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="nohp_i" class="form-control mobile required" placeholder="" name="nohp_i" required value="<?= $result[0]->NO_HP_I; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="email_i">Email <span class="danger">*</span></label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="email_i" class="form-control" placeholder="" name="email_i" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="status_i">Status <span class="danger">*</span></label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="status_i" class="form-control" placeholder="" name="status_i" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <hr class="divider" />

                                        <div class="row mb-1">
                                            <div class="col-md-12">
                                                <h6 style="color: #18d26e;"><strong>PENGHULU/PEMBANTU PPN YANG MENCATAT/MENGHADIRI AKAD NIKAH</strong></h6>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="namapetugas">Nama <span class="danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" id="namapetugas" class="form-control" placeholder="" name="namapetugas" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="jabatanpetugas">Jabatan/Pangkat <span class="danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" id="jabatanpetugas" class="form-control" placeholder="" name="jabatanpetugas" required>
                                            </div>
                                        </div>
                                        <br>
                                        <ul class="nav nav-tabs">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="base-tab-saksisaksi" data-toggle="tab" aria-controls="tabsaksisaksi" href="#tabsaksisaksi" aria-expanded="true">SAKSI-SAKSI</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="base-tab-pencatatan-talaq" data-toggle="tab" aria-controls="tabpencatatantalaq" href="#tabpencatatantalaq" aria-expanded="false">PENCATATAN TALAQ</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content px-2 pt-3">
                                            <div role="tabpanel" class="tab-pane active" id="tabsaksisaksi" aria-expanded="true" aria-labelledby="base-tab-saksisaksi">
                                                <!-- SAKSI-SAKSI -->
                                                <ul class="nav nav-tabs">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" id="base-tab-saksi1" data-toggle="tab" aria-controls="tabsaksi1" href="#tabsaksi1" aria-expanded="true">SAKSI 1</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="base-tab-saksi2" data-toggle="tab" aria-controls="tabsaksi2" href="#tabsaksi2" aria-expanded="false">SAKSI 2</a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content px-2 pt-2">
                                                    <!-- SAKSI 1 -->
                                                    <div role="tabpanel" class="tab-pane active" id="tabsaksi1" aria-expanded="true" aria-labelledby="base-tab-saksi1">
                                                        <div class="form-group row">
                                                            <label class="col-md-3 label-control" for="nik_saksi_1">NIK Saksi 1 <span class="danger">*</span></label>
                                                            <div class="col-md-9">
                                                                <input type="text" id="nik_saksi_1" class="form-control nik required" placeholder="" name="nik_saksi_1" required>
                                                            </div>
                                                            <!-- <div class="col-md-2">
                                                                <input type="button" class="btn btn-info btn-min-width" value="Cek NIK" id="nkh_btnceknik_s">
                                                            </div> -->
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-md-3 label-control" for="nama_saksi_1">Nama Lengkap Saksi 1 <span class="danger">*</span></label>
                                                            <div class="col-md-9">
                                                                <input type="text" id="nama_saksi_1" class="form-control" placeholder="" name="nama_saksi_1" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-md-3 label-control" for="ttl_saksi_1">Tempat Tanggal Lahir <span class="danger">*</span></label>
                                                            <div class="col-md-5">
                                                                <input type="text" id="ttl_saksi_1" class="form-control" placeholder="" name="ttl_saksi_1" required>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="position-relative has-icon-left">
                                                                    <input type="text" id="ttl2_saksi_1" class="form-control date required" name="ttl2_saksi_1" required>
                                                                    <div class="form-control-position">
                                                                        <i class="ft-calendar"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-md-3 label-control" for="agama_saksi_1">Agama <span class="danger">*</span></label>
                                                            <div class="col-md-9">
                                                                <input type="text" id="agama_saksi_1" class="form-control" placeholder="" name="agama_saksi_1" value="Islam" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-md-3 label-control" for="kwn_saksi_1">Kewarganegaraan <span class="danger">*</span></label>
                                                            <div class="col-md-9">
                                                                <select id="kwn_saksi_1" name="kwn_saksi_1" class="form-control" required>
                                                                    <option value="0" selected="" disabled="">Pilih salah satu</option>
                                                                    <option value="WNI">WNI</option>
                                                                    <option value="WNA">WNA</option>
                                                                </select>
                                                                <!-- <input type="text" id="kwn_saksi_1" class="form-control" placeholder="" name="kwn_saksi_1"> -->
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-md-3 label-control" for="pekerjaan_saksi_1">Pekerjaan <span class="danger">*</span></label>
                                                            <div class="col-md-9">
                                                                <input type="text" style="width: 100%" id="pekerjaan_saksi_1" class="select2 jobs form-control" placeholder="" name="pekerjaan_saksi_1" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-md-3 label-control" for="tempattinggal_saksi_1">Tempat Tinggal <span class="danger">*</span></label>
                                                            <div class="col-md-9">
                                                                <input type="text" id="tempattinggal_saksi_1" class="form-control" placeholder="" name="tempattinggal_saksi_1" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- SAKSI 2 -->
                                                    <div class="tab-pane" id="tabsaksi2" aria-labelledby="base-tab-saksi2">
                                                        <div class="form-group row">
                                                            <label class="col-md-3 label-control" for="nik_saksi_2">NIK Saksi 2 <span class="danger">*</span></label>
                                                            <div class="col-md-9">
                                                                <input type="text" id="nik_saksi_2" class="form-control nik required" placeholder="" name="nik_saksi_2" required>
                                                            </div>
                                                            <!-- <div class="col-md-2">
                                                                <input type="button" class="btn btn-info btn-min-width" value="Cek NIK" id="nkh_btnceknik_s">
                                                            </div> -->
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-md-3 label-control" for="nama_saksi_2">Nama Lengkap Saksi 2 <span class="danger">*</span></label>
                                                            <div class="col-md-9">
                                                                <input type="text" id="nama_saksi_2" class="form-control" placeholder="" name="nama_saksi_2" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-md-3 label-control" for="ttl_saksi_2">Tempat Tanggal Lahir <span class="danger">*</span></label>
                                                            <div class="col-md-5">
                                                                <input type="text" id="ttl_saksi_2" class="form-control" placeholder="" name="ttl_saksi_2" required>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="position-relative has-icon-left">
                                                                    <input type="text" id="ttl2_saksi_2" class="form-control date required" name="ttl2_saksi_2" autocomplete="off" required>
                                                                    <div class="form-control-position">
                                                                        <i class="ft-calendar"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-md-3 label-control" for="agama_saksi_2">Agama <span class="danger">*</span></label>
                                                            <div class="col-md-9">
                                                                <input type="text" id="agama_saksi_2" class="form-control" placeholder="" name="agama_saksi_2" value="Islam" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-md-3 label-control" for="kwn_saksi_2">Kewarganegaraan <span class="danger">*</span></label>
                                                            <div class="col-md-9">
                                                                <select id="kwn_saksi_2" name="kwn_saksi_2" class="form-control" required>
                                                                    <option value="0" selected="" disabled="">Pilih salah satu</option>
                                                                    <option value="WNI">WNI</option>
                                                                    <option value="WNA">WNA</option>
                                                                </select>
                                                                <!-- <input type="text" id="kwn_saksi_2" class="form-control" placeholder="" name="kwn_saksi_2"> -->
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-md-3 label-control" for="pekerjaan_saksi_2">Pekerjaan <span class="danger">*</span></label>
                                                            <div class="col-md-9">
                                                                <input type="text" style="width: 100%" id="pekerjaan_saksi_2" class="select2 jobs form-control" placeholder="" name="pekerjaan_saksi_2" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-md-3 label-control" for="tempattinggal_saksi_2">Tempat Tinggal <span class="danger">*</span></label>
                                                            <div class="col-md-9">
                                                                <input type="text" id="tempattinggal_saksi_2" class="form-control" placeholder="" name="tempattinggal_saksi_2" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tabpencatatantalaq" aria-labelledby="base-tab-pencatatan-talaq">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="pengadilanagama">Pengadilan Agama <span class="danger">*</span></label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="pengadilanagama" class="form-control" placeholder="" name="pengadilanagama" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="nomorpengadilan">Nomor <span class="danger">*</span></label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="nomorpengadilan" class="form-control" placeholder="" name="nomorpengadilan" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="tanggalputusan">Tanggal Putusan <span class="danger">*</span></label>
                                                    <div class="col-md-9">
                                                        <div class="position-relative has-icon-left datepicker">
                                                            <input type="text" id="tanggalputusan" class="form-control date" name="tanggalputusan" autocomplete="off" required>
                                                            <div class="form-control-position">
                                                                <i class="ft-calendar"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group row float-md-right">
                                            <div class="col-md-12">
                                                <input type="button" id="nextToDetail" class="btn btn-danger btn-min-width mb-0" placeholder="" name="nextToDetail" value="Batalkan">
                                                <button type="submit" class="btn btn-success btn-min-width mb-0" style="margin-left: 5px;">Simpan</button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- AKHIR ISI -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END OF HEADER SIDE -->


            </section>
        </div>
    </div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->

<script>
    $(function() {
        initializeJobList();
        validateNumber();
        validateNIK();
        validateMobilePhone('s');
        validateMobilePhone('i');
        // validateStatusPerkawinan('s');
        // validateStatusPerkawinan('i');
        // validateKewarganegaraan('s', '<?= $result[0]->KEWARGANEGARAAN_S; ?>');
        // validateKewarganegaraan('i', '<?= $result[0]->KEWARGANEGARAAN_I; ?>');
        // validateUmur('s', '<?= $result[0]->UMUR_S; ?>');
        // validateUmur('i', '<?= $result[0]->UMUR_I; ?>');
        // validatePekerjaan('s', '<?= $result[0]->PEKERJAAN_S; ?>');
        // validatePekerjaan('i', '<?= $result[0]->PEKERJAAN_I; ?>');

        // $('#kwncal_s').change(function() {
        //     var kwn = $('#kwncal_s').val();
        //     validateKewarganegaraan('s', kwn);
        // });

        // $('#kwncal_i').change(function() {
        //     var kwn = $('#kwncal_i').val();
        //     validateKewarganegaraan('i', kwn);
        // });

        // $('#pekerjaancal_s').change(function() {
        //     var job = $('#pekerjaancal_s').val();
        //     validatePekerjaan('s', job);
        // });

        // $('#pekerjaancal_i').change(function() {
        //     var job = $('#pekerjaancal_i').val();
        //     validatePekerjaan('i', job);
        // });

        $('.date').datetimepicker({
            locale: 'id',
            format: 'DD-MM-YYYY'
        });

    });

    function validateNIK() {
        $('.nik').on('keypress', function(e) {
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

    function validateNumber() {
        $('.number').on('keypress', function(e) {
            var $this = $(this);
            var regex = new RegExp("^[0-9\b]+$");
            var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);

            if (regex.test(str)) {
                currentNum = 56;
                return true;
            }
            e.preventDefault();
            return false;
        });
    }

    function initializeJobList() {
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

        $(".jobs").select2({
            data: data,
            placeholder: "Pilih salah satu",
            width: '100%'
        });
    }

    function validatePekerjaan(actor, job) {
        $('#pekerjaancal_' + actor).val(job);
        if ('KEPOLISIAN RI' == job || 'TENTARA NASIONAL INDONESIA' == job) {
            $('#pejabatPI_' + actor).attr('readonly', false);
            $('#nomorpejabat_' + actor).attr('readonly', false);
            $('#tanggalsuratpejabat_' + actor).attr('readonly', false);
        } else {
            $('#pejabatPI_' + actor).attr('readonly', true);
            $('#nomorpejabat_' + actor).attr('readonly', true);
            $('#tanggalsuratpejabat_' + actor).attr('readonly', true);
        }
    }

    function validateUmur(actor, umur) {
        if (parseInt(umur) < 19) {
            $('#izinpengadilan_' + actor).attr('readonly', false);
            $('#nomorizinpengadilan_' + actor).attr('readonly', false);
            $('#tanggalsuratpengadilan_' + actor).attr('readonly', false);
        } else if (parseInt(umur) > 19 && parseInt(umur) < 21) {
            $('#namapemberiizin_' + actor).attr('readonly', false);
            $('#hubungankeluarga_' + actor).attr('readonly', false);
            $('#tanggalsuratpemberiizin_' + actor).attr('readonly', false);
        } else {
            $('#izinpengadilan_' + actor).val('');
            $('#nomorizinpengadilan_' + actor).val('');
            $('#tanggalsuratpengadilan_' + actor).val('');
            $('#namapemberiizin_' + actor).val('');
            $('#hubungankeluarga_' + actor).val('');
            $('#tanggalsuratpemberiizin_' + actor).val('');

            $('#izinpengadilan_' + actor).attr('readonly', true);
            $('#nomorizinpengadilan_' + actor).attr('readonly', true);
            $('#tanggalsuratpengadilan_' + actor).attr('readonly', true);
            $('#namapemberiizin_' + actor).attr('readonly', true);
            $('#hubungankeluarga_' + actor).attr('readonly', true);
            $('#tanggalsuratpemberiizin_' + actor).attr('readonly', true);
        }
    }

    function validateKewarganegaraan(actor, kwn) {
        $('#kwncal_' + actor).val(kwn);
        if ('WNI' == kwn) {
            $('#instansiPI_' + actor).val('');
            $('#nomorinstansi_' + actor).val('');
            $('#tanggalsuratinstansi_' + actor).val('');

            $('#instansiPI_' + actor).attr('readonly', true);
            $('#nomorinstansi_' + actor).attr('readonly', true);
            $('#tanggalsuratinstansi_' + actor).attr('readonly', true);
        } else if ('WNA' == kwn) {
            $('#instansiPI_' + actor).attr('readonly', false);
            $('#nomorinstansi_' + actor).attr('readonly', false);
            $('#tanggalsuratinstansi_' + actor).attr('readonly', false);
        }
    }

    function validateMobilePhone(actor) {
        $('#nohp_' + actor).on('keyup', function(e) {
            numberLength = $('#nohp_' + actor).val().length;
        });

        $('#nohp_' + actor).on('keypress', function(e) {
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

    // function validateStatusPerkawinan(actor) {
    //     $('#statusperkawinan_' + actor).change(function() {
    //         var statusperkawinan = $('#statusperkawinan_' + actor).val();
    //         if ('s' == actor) {
    //             if ('Perjaka' == statusperkawinan) {
    //                 //field data duda
    //                 $('#namabekasistri').val('');
    //                 $('#alamatistri').val('');
    //                 $('#namaakta').val('');
    //                 $('#instansi_s').val('');
    //                 $('#nomor_s').val('');
    //                 $('#tanggal_s').val('');

    //                 $('#namabekasistri').attr('readonly', true);
    //                 $('#alamatistri').attr('readonly', true);
    //                 $('#namaakta').attr('readonly', true);
    //                 $('#instansi_s').attr('readonly', true);
    //                 $('#nomor_s').attr('readonly', true);
    //                 $('#tanggal_s').attr('readonly', true);

    //                 //field data beristri
    //                 $('#jumlahistri').val('');
    //                 $('#namaistri').val('');
    //                 $('#pengadilanPI').val('');
    //                 $('#nomorkeputusan_s').val('');
    //                 $('#tanggalkeputusan_s').val('');

    //                 $('#jumlahistri').attr('readonly', true);
    //                 $('#namaistri').attr('readonly', true);
    //                 $('#pengadilanPI').attr('readonly', true);
    //                 $('#nomorkeputusan_s').attr('readonly', true);
    //                 $('#tanggalkeputusan_s').attr('readonly', true);
    //             } else if ('Beristri' == statusperkawinan) {
    //                 //field data duda
    //                 $('#namabekasistri').val('');
    //                 $('#alamatistri').val('');
    //                 $('#namaakta').val('');
    //                 $('#instansi_s').val('');
    //                 $('#nomor_s').val('');
    //                 $('#tanggal_s').val('');

    //                 $('#namabekasistri').attr('readonly', true);
    //                 $('#alamatistri').attr('readonly', true);
    //                 $('#namaakta').attr('readonly', true);
    //                 $('#instansi_s').attr('readonly', true);
    //                 $('#nomor_s').attr('readonly', true);
    //                 $('#tanggal_s').attr('readonly', true);

    //                 //field data beristri
    //                 $('#jumlahistri').attr('readonly', false);
    //                 $('#namaistri').attr('readonly', false);
    //                 $('#pengadilanPI').attr('readonly', false);
    //                 $('#nomorkeputusan_s').attr('readonly', false);
    //                 $('#tanggalkeputusan_s').attr('readonly', false);
    //             } else if ('Duda' == statusperkawinan) {
    //                 //field data duda
    //                 $('#namabekasistri').attr('readonly', false);
    //                 $('#alamatistri').attr('readonly', false);
    //                 $('#namaakta').attr('readonly', false);
    //                 $('#instansi_s').attr('readonly', false);
    //                 $('#nomor_s').attr('readonly', false);
    //                 $('#tanggal_s').attr('readonly', false);

    //                 //field data beristri
    //                 $('#jumlahistri').val('');
    //                 $('#namaistri').val('');
    //                 $('#pengadilanPI').val('');
    //                 $('#nomorkeputusan_s').val('');
    //                 $('#tanggalkeputusan_s').val('');

    //                 $('#jumlahistri').attr('readonly', true);
    //                 $('#namaistri').attr('readonly', true);
    //                 $('#pengadilanPI').attr('readonly', true);
    //                 $('#nomorkeputusan_s').attr('readonly', true);
    //                 $('#tanggalkeputusan_s').attr('readonly', true);
    //             }
    //         } else if ('i' == actor) {
    //             if ('Perawan' == statusperkawinan) {
    //                 //field data janda
    //                 $('#namabekassuami').val('');
    //                 $('#alamatbekassuami').val('');
    //                 $('#namaakta_i').val('');
    //                 $('#instansi_i').val('');
    //                 $('#nomor_i').val('');
    //                 $('#tanggal_i').val('');

    //                 $('#namabekassuami').attr('readonly', true);
    //                 $('#alamatbekassuami').attr('readonly', true);
    //                 $('#namaakta_i').attr('readonly', true);
    //                 $('#instansi_i').attr('readonly', true);
    //                 $('#nomor_i').attr('readonly', true);
    //                 $('#tanggal_i').attr('readonly', true);
    //             } else if ('Janda' == statusperkawinan) {
    //                 $('#namabekassuami').attr('readonly', false);
    //                 $('#alamatbekassuami').attr('readonly', false);
    //                 $('#namaakta_i').attr('readonly', false);
    //                 $('#instansi_i').attr('readonly', false);
    //                 $('#nomor_i').attr('readonly', false);
    //                 $('#tanggal_i').attr('readonly', false);
    //             }
    //         }
    //     });
    // }
</script>