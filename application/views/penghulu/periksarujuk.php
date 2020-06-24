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
                                    <div class="row mb-1">
                                        <div class="col-md-6">
                                            <h6 style="color: #18d26e;"><strong>PILIH DAERAH</strong></h6>
                                        </div>
                                        <div class="col-md-6"></div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="provinsi">Provinsi <span class="danger">*</span></label>
                                        <div class="col-md-9">
                                            <input type="text" id="provinsi" class="form-control" placeholder="" name="provinsi">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="kabupaten">Kabupaten/Kota <span class="danger">*</span></label>
                                        <div class="col-md-9">
                                            <input type="text" id="kabupaten" class="form-control" placeholder="" name="kabupaten">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="kecamatan">Kecamatan <span class="danger">*</span></label>
                                        <div class="col-md-9">
                                            <input type="text" id="kecamatan" class="form-control" placeholder="" name="kecamatan">
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
                                            <input type="text" id="nomoraktanikah" class="form-control" placeholder="" name="nomoraktanikah">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="nomorrujuk">Nomor Rujuk <span class="danger">*</span></label>
                                        <div class="col-md-9">
                                            <input type="text" id="nomorrujuk" class="form-control" placeholder="" name="nomorrujuk">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="tanggalrujuk">Tanggal Rujuk <span class="danger">*</span></label>
                                        <div class="col-md-9">
                                            <div class="position-relative has-icon-left datepicker">
                                                <input type="text" id="tanggalrujuk" class="form-control" name="tanggalrujuk">
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
                                        <label class="col-md-3 label-control" for="tanggalsuratpemberiizin_i">Tanggal Ikrar Rujuk <span class="danger">*</span></label>
                                        <div class="col-md-9">
                                            <div class="position-relative has-icon-left datepicker">
                                                <input type="text" id="nkh_tanggal_akad" class="form-control" name="nkh_tanggal_akad">
                                                <div class="form-control-position">
                                                    <i class="ft-calendar"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label class="col-md-3 label-control" for="tanggalsuratpemberiizin_i">Rujuk ke- <span class="danger">*</span></label>
                                        <div class="col-md-9">
                                            <input type="text" id="nkh_alamat_i" class="form-control" placeholder="" name="nkh_alamat_i">
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
                                                <label class="col-md-3 label-control" for="nkh_nik_s">NIK Suami <span class="danger">*</span></label>
                                                <div class="col-md-7">
                                                    <input type="text" id="nkh_nik_s" class="form-control required" placeholder="" name="nkh_nik_s">
                                                </div>
                                                <div class="col-md-2">
                                                    <input type="button" class="btn btn-info btn-min-width" value="Cek NIK" id="nkh_btnceknik_s">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="nkh_nama_s">Nama Lengkap Suami <span class="danger">*</span></label>
                                                <div class="col-md-9">
                                                    <input type="text" id="nkh_nama_s" class="form-control required" placeholder="" name="nkh_nama_s">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="nkh_nama_s">Nama Alias <span class="danger">*</span></label>
                                                <div class="col-md-9">
                                                    <input type="text" id="nkh_nama_s" class="form-control required" placeholder="" name="nkh_nama_s">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="nkh_nama_s">Bin <span class="danger">*</span></label>
                                                <div class="col-md-9">
                                                    <input type="text" id="nkh_nama_s" class="form-control required" placeholder="" name="nkh_nama_s">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="nkh_ttl_s">Tempat Tanggal Lahir <span class="danger">*</span></label>
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
                                                <label class="col-md-3 label-control" for="nkh_umur_s">Umur(tahun) <span class="danger">*</span></label>
                                                <div class="col-md-9">
                                                    <input type="text" id="nkh_umur_s" class="form-control required" placeholder="" name="nkh_umur_s">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="nkh_status_s"><?= $question[8]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                                                <div class="col-md-9">
                                                    <select id="nkh_status_s" name="nkh_status_s" class="form-control required">
                                                        <option value="none" selected="" disabled="">Pilih salah satu</option>
                                                        <option value="Jejakan">Jejaka</option>
                                                        <option value="Beristri">Beristri</option>
                                                        <option value="Cerai Mati">Cerai Mati</option>
                                                        <option value="Cerai Hidup">Cerai Hidup</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="nkh_agama_s">Agama <span class="danger">*</span></label>
                                                <div class="col-md-9">
                                                    <input type="text" id="nkh_agama_s" class="form-control required" placeholder="" name="nkh_agama_s" value="Islam" <?= $question[9]->IS_READONLY; ?>>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="nkh_alamat_s">Kewarganegaraan <span class="danger">*</span></label>
                                                <div class="col-md-9">
                                                    <input type="text" id="nkh_alamat_s" class="form-control required" placeholder="" name="nkh_alamat_s">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="nkh_alamat_s">Pendidikan Terakhir <span class="danger">*</span></label>
                                                <div class="col-md-9">
                                                    <input type="text" id="nkh_alamat_s" class="form-control required" placeholder="" name="nkh_alamat_s">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="nkh_pekerjaan_s">Pekerjaan <span class="danger">*</span></label>
                                                <div class="col-md-9">
                                                    <input type="text" style="width: 100%" id="nkh_pekerjaan_s" class="select2 job form-control required" placeholder="" name="nkh_pekerjaan_s">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="nkh_pekerjaan_s">Tempat Tinggal <span class="danger">*</span></label>
                                                <div class="col-md-9">
                                                    <input type="text" style="width: 100%" id="nkh_pekerjaan_s" class="select2 job form-control required" placeholder="" name="nkh_pekerjaan_s">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="nkh_nohp_s">Nomor HP <span class="danger">*</span></label>
                                                <div class="col-md-9">
                                                    <input type="text" id="nkh_nohp_s" class="form-control required" placeholder="" name="nkh_nohp_s">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="nkh_nohp_s">Email <span class="danger">*</span></label>
                                                <div class="col-md-9">
                                                    <input type="text" id="nkh_nohp_s" class="form-control required" placeholder="" name="nkh_nohp_s">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="nkh_nohp_s">Status <span class="danger">*</span></label>
                                                <div class="col-md-9">
                                                    <input type="text" id="nkh_nohp_s" class="form-control required" placeholder="" name="nkh_nohp_s">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab2" aria-labelledby="base-tab2">
                                            <p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie pastry cotton candy oat cake fruitcake jelly chupa chups. Pudding caramels pastry powder cake soufflé wafer caramels. Jelly-o pie cupcake.</p>
                                        </div>
                                    </div>
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