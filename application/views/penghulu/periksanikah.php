<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
            <div class="content-header-left col-md-4 col-12 mb-2">
                <h2 class="content-header-title">PEMERIKSAAN NIKAH</h>
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
                                    <!-- 
                                    INDEX:
                                    1. CALON SUAMI LINE 50
                                    2. CALON ISTRI LINE 498
                                    3. WALI AKAD 906
                                    4. WAKIL WALI AKAD 982
                                    5. MAS KAWIN 1042
                                    6. PERJANJIAN PERKAWINAN 1064
                                    7. WAKIL PETUGAS YANG MEMERIKSA 1088
                                    -->
                                    <?= form_open_multipart('registration/submitDetail', 'class="steps-validation" id="form"'); ?>
                                    <input type="hidden" id="regID" name="regID">
                                    <input type="hidden" id="type" name="type" value="nikah">
                                    <!-- STEP CALON SUAMI -->
                                    <h6><i class="step-icon ft-user"></i> Calon Suami</h6>
                                    <fieldset class="mt-2">
                                        <div class="row mb-1">
                                            <div class="col-md-6">
                                                <h6 style="color: #18d26e;"><strong>CALON SUAMI</strong></h6>
                                            </div>
                                            <div class="col-md-6"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="namacal_s">Nama Lengkap</label>
                                                    <input type="text" class="form-control" id="namacal_s" name="namacal_s">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="agamacal_s">Agama</label>
                                                    <input type="text" class="form-control" id="agamacal_s" name="agamacal_s">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="ttlcal_s">Tempat Tanggal Lahir</label>
                                                    <input type="text" class="form-control" id="ttlcal_s" name="ttlcal_s">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="pekerjaancal_s">Pekerjaan</label>
                                                    <input type="text" class="form-control" id="pekerjaancal_s" name="pekerjaancal_s">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="nikcal_s">Nomor Induk Kependudukan (NIK)</label>
                                                    <input type="text" class="form-control" id="nikcal_s" name="nikcal_s">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="pendidikancal_s">Pendidikan Terakhir</label>
                                                    <input type="text" class="form-control" id="pendidikancal_s" name="pendidikancal_s">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="kwncal_s">Kewarganegaraan</label>
                                                    <input type="text" class="form-control" id="kwncal_s" name="kwncal_s">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="alamatcal_s">Alamat</label>
                                                    <input type="text" class="form-control" id="alamatcal_s">
                                                </div>
                                            </div>
                                        </div>

                                        <hr class="divider" />

                                        <div class="row mb-1">
                                            <div class="col-md-6">
                                                <h6 style="color: #18d26e;"><strong>ORANG TUA / AYAH KANDUNG</strong></h6>
                                            </div>
                                            <div class="col-md-6">
                                                <h6 style="color: #18d26e;"><strong>ORANG TUA / IBU KANDUNG</strong></h6>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="namaayahcal_s">Nama Lengkap Ayah</label>
                                                    <input type="text" class="form-control" id="namaayahcal_s" name="namaayahcal_s">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="namaibucal_s">Nama Lengkap Ibu</label>
                                                    <input type="text" class="form-control" id="namaibucal_s" name="namaibucal_s">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="ttlayahcal_s">Tempat Tanggal Lahir Ayah</label>
                                                    <input type="text" class="form-control" id="ttlayahcal_s" name="ttlayahcal_s">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="ttlibucal_s">Tempat Tanggal Lahir Ibu</label>
                                                    <input type="text" class="form-control" id="ttlibucal_s" name="ttlibucal_s">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="nikayahcal_s">Nomor Induk Kependudukan (NIK) Ayah</label>
                                                    <input type="text" class="form-control" id="nikayahcal_s" name="nikayahcal_s">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="nikibucal_s">Nomor Induk Kependudukan (NIK) Ibu</label>
                                                    <input type="text" class="form-control" id="nikibucal_s" name="nikibucal_s">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="kwnayahcal_s">Kewarganegaraan Ayah</label>
                                                    <input type="text" class="form-control" id="kwnayahcal_s" name="kwnayahcal_s">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="kwnibucal_s">Kewarganegaraan Ibu</label>
                                                    <input type="text" class="form-control" id="kwnibucal_s" name="kwnibucal_s">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="agamaayahcal_s">Agama Ayah</label>
                                                    <input type="text" class="form-control" id="agamaayahcal_s" name="agamaayahcal_s">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="agamaibucal_s">Agama Ibu</label>
                                                    <input type="text" class="form-control" id="agamaibucal_s" name="agamaibucal_s">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="pejerjaanayahcal_s">Pekerjaan Ayah</label>
                                                    <input type="text" class="form-control" id="pejerjaanayahcal_s" name="pejerjaanayahcal_s">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="pekerjaanibucal_s">Pekerjaan Ibu</label>
                                                    <input type="text" class="form-control" id="pekerjaanibucal_s" name="pekerjaanibucal_s">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="alamatayah_s">Alamat Ayah</label>
                                                    <input type="text" class="form-control" id="alamatayah_s" name="alamatayah_s">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="alamatibucal_s">Alamat Ibu</label>
                                                    <input type="text" class="form-control" id="alamatibucal_s" name="alamatibucal_s">
                                                </div>
                                            </div>
                                        </div>

                                        <hr class="divider" />

                                        <div class="form-group row mb-2">
                                            <label class="col-md-2" for="statusperkawinan_s">Status Perkawinan</label>
                                            <div class="col-md-10">
                                                <select id="statusperkawinan_s" name="statusperkawinan_s" class="form-control">
                                                    <option value="0" selected="" disabled="">Pilih salah satu</option>
                                                    <option value="Perjaka">Perjaka</option>
                                                    <option value="Beristri">Beristri</option>
                                                    <option value="Duda">Duda</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-1">
                                            <div class="col-md-6">
                                                <h6 style="color: #18d26e;"><strong>JIKA DUDA</strong></h6>
                                            </div>
                                            <div class="col-md-6">
                                                <h6 style="color: #18d26e;"><strong>JIKA BERISTRI</strong></h6>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="namabekasistri">Nama Bekas Istri</label>
                                                    <input type="text" class="form-control" id="namabekasistri" name="namabekasistri">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="jumlahistri">Jumlah Istri</label>
                                                    <input type="text" class="form-control" id="jumlahistri" name="jumlahistri">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="alamatistri">Alamat</label>
                                                    <input type="text" class="form-control" id="alamatistri" name="alamatistri">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="namaistri">Nama Istri</label>
                                                    <input type="text" class="form-control" id="namaistri" name="namaistri">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-0">
                                            <div class="col-md-6">
                                                <h6 style="color: #18d26e;"><strong>BUKTI DUDA BERUPA</strong></h6>
                                            </div>
                                            <div class="col-md-6"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="namaakta">Nama Akta</label>
                                                    <input type="text" class="form-control" id="namaakta" name="namaakta">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="pengadilanPI">Pengadilan Pemberi Izin</label>
                                                    <input type="text" class="form-control" id="pengadilanPI" name="pengadilanPI">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="instansi_s">Instansi</label>
                                                    <input type="text" class="form-control" id="instansi_s" name="instansi_s">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="nomorkeputusan_s">Nomor Keputusan</label>
                                                    <input type="text" class="form-control" id="nomorkeputusan_s" name="nomorkeputusan_s">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="nomor_s">Nomor</label>
                                                    <input type="text" class="form-control" id="nomor_s" name="nomor_s">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="tanggalkeputusan_s">Tanggal Keputusan</label>
                                                    <input type="text" class="form-control" id="tanggalkeputusan_s" name="tanggalkeputusan_s">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="tanggal_s">Tanggal</label>
                                                    <input type="text" class="form-control" id="tanggal_s" name="tanggal_s">
                                                </div>
                                            </div>
                                            <div class="col-md-6"></div>
                                        </div>

                                        <hr class="divider" />

                                        <div class="row">
                                            <div class="card text-white box-shadow-0 bg-success col-md-12">
                                                <div class="card-content collapse show">
                                                    <div class="card-body">
                                                        <p class="card-text"><i class="icon-question"></i>&nbsp; Adakah hubungan nasab, radla'ah atau mushaharah (semenda) antara calon istri dengan:</strong></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-4 label-control" for="pernikahanke_s">Pernikahan ke-<span class="danger">*</span></label>
                                                    <div class="col-md-8">
                                                        <input type="text" id="pernikahanke_s" class="form-control" placeholder="" name="pernikahanke_s">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="diasendiri_s">Dia Sendiri</label>
                                                    <div class="col-md-9">
                                                        <select id="diasendiri_s" name="diasendiri_s" class="form-control">
                                                            <option value="0" selected="" disabled="">Pilih salah satu</option>
                                                            <option value="Ada">Ada</option>
                                                            <option value="Tidak Ada">Tidak Ada</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6"></div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="bekasistri_s">Bekas Istri</label>
                                                    <div class="col-md-9">
                                                        <select id="bekasistri_s" name="bekasistri_s" class="form-control">
                                                            <option value="0" selected="" disabled="">Pilih salah satu</option>
                                                            <option value="Iya">Iya</option>
                                                            <option value="Tidak">Tidak</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-6"></div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="istriistri_s">Istri / Istri-istri</label>
                                                    <div class="col-md-9">
                                                        <select id="istriistri_s" name="istriistri_s" class="form-control">
                                                            <option value="0" selected="" disabled="">Pilih salah satu</option>
                                                            <option value="Iya">Iya</option>
                                                            <option value="Tidak">Tidak</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <hr class="divider" />

                                        <div class="row mb-1">
                                            <div class="col-md-6">
                                                <h6 style="color: #18d26e;"><strong>JIKA SUAMI ANGGOTA TNI/POLRI</strong></h6>
                                            </div>
                                            <div class="col-md-6"></div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 label-control" for="pejabatPI_s">Pejabat Pemberi Izin <span class="danger">*</span></label>
                                            <div class="col-md-10">
                                                <input type="text" id="pejabatPI_s" class="form-control" placeholder="" name="pejabatPI_s">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 label-control" for="nomorpejabat_s">Nomor <span class="danger">*</span></label>
                                            <div class="col-md-10">
                                                <input type="text" id="nomorpejabat_s" class="form-control" placeholder="" name="nomorpejabat_s">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 label-control" for="tanggalsuratpejabat_s">Tanggal Surat <span class="danger">*</span></label>
                                            <div class="col-md-10">
                                                <input type="text" id="tanggalsuratpejabat_s" class="form-control" placeholder="" name="tanggalsuratpejabat_s">
                                            </div>
                                        </div>

                                        <div class="row mb-1">
                                            <div class="col-md-6">
                                                <h6 style="color: #18d26e;"><strong>JIKA SUAMI WNA (WARGA NEGARA ASING)</strong></h6>
                                            </div>
                                            <div class="col-md-6"></div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 label-control" for="instansiPI_s">Instansi Pemberi Izin <span class="danger">*</span></label>
                                            <div class="col-md-10">
                                                <input type="text" id="instansiPI_s" class="form-control" placeholder="" name="instansiPI_s">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 label-control" for="nomorinstansi_s">Nomor <span class="danger">*</span></label>
                                            <div class="col-md-10">
                                                <input type="text" id="nomorinstansi_s" class="form-control" placeholder="" name="nomorinstansi_s">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 label-control" for="tanggalsuratinstansi_s">Tanggal Surat <span class="danger">*</span></label>
                                            <div class="col-md-10">
                                                <input type="text" id="tanggalsuratinstansi_s" class="form-control" placeholder="" name="tanggalsuratinstansi_s">
                                            </div>
                                        </div>

                                        <div class="row mb-1">
                                            <div class="col-md-6">
                                                <h6 style="color: #18d26e;"><strong>JIKA BELUM MENCAPAI USIA 19 TAHUN</strong></h6>
                                            </div>
                                            <div class="col-md-6"></div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 label-control" for="izinpengadilan_s">Izin Pengadilan <span class="danger">*</span></label>
                                            <div class="col-md-10">
                                                <input type="text" id="izinpengadilan_s" class="form-control" placeholder="" name="izinpengadilan_s">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 label-control" for="nomorizinpengadilan_s">Nomor <span class="danger">*</span></label>
                                            <div class="col-md-10">
                                                <input type="text" id="nomorizinpengadilan_s" class="form-control" placeholder="" name="nomorizinpengadilan_s">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 label-control" for="tanggalsuratpengadilan_s">Tanggal Surat <span class="danger">*</span></label>
                                            <div class="col-md-10">
                                                <input type="text" id="tanggalsuratpengadilan_s" class="form-control" placeholder="" name="tanggalsuratpengadilan_s">
                                            </div>
                                        </div>

                                        <div class="row mb-1">
                                            <div class="col-md-6">
                                                <h6 style="color: #18d26e;"><strong>JIKA BELUM MENCAPAI USIA 21 TAHUN</strong></h6>
                                            </div>
                                            <div class="col-md-6"></div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 label-control" for="namapemberiizin_s">Nama Pemberi Izin <span class="danger">*</span></label>
                                            <div class="col-md-10">
                                                <input type="text" id="namapemberiizin_s" class="form-control" placeholder="" name="namapemberiizin_s">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 label-control" for="hubungankeluarga_s">Hubungan Keluarga <span class="danger">*</span></label>
                                            <div class="col-md-10">
                                                <input type="text" id="hubungankeluarga_s" class="form-control" placeholder="" name="hubungankeluarga_s">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 label-control" for="tanggalsuratpemberiizin_s">Tanggal Surat <span class="danger">*</span></label>
                                            <div class="col-md-10">
                                                <input type="text" id="nkh_alamat_i" class="form-control" placeholder="" name="nkh_alamat_i">
                                            </div>
                                        </div>
                                    </fieldset>

                                    <!-- STEP CALON ISTRI -->
                                    <h6><i class="step-icon ft-user"></i> Calon Istri</h6>
                                    <fieldset class="mt-2">
                                        <div class="row mb-1">
                                            <div class="col-md-6">
                                                <h6 style="color: #18d26e;"><strong>CALON ISTRI</strong></h6>
                                            </div>
                                            <div class="col-md-6"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="namacal_i">Nama Lengkap</label>
                                                    <input type="text" class="form-control" id="namacal_i" name="namacal_i">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="agamacal_i">Agama</label>
                                                    <input type="text" class="form-control" id="agamacal_i" name="agamacal_i">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="ttlcal_i">Tempat Tanggal Lahir</label>
                                                    <input type="text" class="form-control" id="ttlcal_i" name="ttlcal_i">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="pekerjaancal_i">Pekerjaan</label>
                                                    <input type="text" class="form-control" id="pekerjaancal_i" name="pekerjaancal_i">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="nikcal_i">Nomor Induk Kependudukan (NIK)</label>
                                                    <input type="text" class="form-control" id="nikcal_i" name="nikcal_i">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="pendidikancal_i">Pendidikan Terakhir</label>
                                                    <input type="text" class="form-control" id="pendidikancal_i" name="pendidikancal_i">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="kwncal_i">Kewarganegaraan</label>
                                                    <input type="text" class="form-control" id="kwncal_i" name="kwncal_i">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="alamatcal_i">Alamat</label>
                                                    <input type="text" class="form-control" id="alamatcal_i">
                                                </div>
                                            </div>
                                        </div>

                                        <hr class="divider" />

                                        <div class="row mb-1">
                                            <div class="col-md-6">
                                                <h6 style="color: #18d26e;"><strong>ORANG TUA / AYAH KANDUNG</strong></h6>
                                            </div>
                                            <div class="col-md-6">
                                                <h6 style="color: #18d26e;"><strong>ORANG TUA / IBU KANDUNG</strong></h6>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="namaayahcal_i">Nama Lengkap Ayah</label>
                                                    <input type="text" class="form-control" id="namaayahcal_i" name="namaayahcal_i">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="namaibucal_i">Nama Lengkap Ibu</label>
                                                    <input type="text" class="form-control" id="namaibucal_i" name="namaibucal_i">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="ttlayahcal_i">Tempat Tanggal Lahir Ayah</label>
                                                    <input type="text" class="form-control" id="ttlayahcal_i" name="ttlayahcal_i">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="ttlibucal_i">Tempat Tanggal Lahir Ibu</label>
                                                    <input type="text" class="form-control" id="ttlibucal_i" name="ttlibucal_i">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="nikayahcal_i">Nomor Induk Kependudukan (NIK) Ayah</label>
                                                    <input type="text" class="form-control" id="nikayahcal_i" name="nikayahcal_i">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="nikibucal_i">Nomor Induk Kependudukan (NIK) Ibu</label>
                                                    <input type="text" class="form-control" id="nikibucal_i" name="nikibucal_i">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="kwnayahcal_i">Kewarganegaraan Ayah</label>
                                                    <input type="text" class="form-control" id="kwnayahcal_i" name="kwnayahcal_i">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="kwnibucal_i">Kewarganegaraan Ibu</label>
                                                    <input type="text" class="form-control" id="kwnibucal_i" name="kwnibucal_i">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="agamaayahcal_i">Agama Ayah</label>
                                                    <input type="text" class="form-control" id="agamaayahcal_i" name="agamaayahcal_i">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="agamaibucal_i">Agama Ibu</label>
                                                    <input type="text" class="form-control" id="agamaibucal_i" name="agamaibucal_i">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="pejerjaanayahcal_i">Pekerjaan Ayah</label>
                                                    <input type="text" class="form-control" id="pejerjaanayahcal_i" name="pejerjaanayahcal_i">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="pekerjaanibucal_i">Pekerjaan Ibu</label>
                                                    <input type="text" class="form-control" id="pekerjaanibucal_i" name="pekerjaanibucal_i">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="alamatayah_i">Alamat Ayah</label>
                                                    <input type="text" class="form-control" id="alamatayah_i" name="alamatayah_i">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="alamatibucal_i">Alamat Ibu</label>
                                                    <input type="text" class="form-control" id="alamatibucal_i" name="alamatibucal_i">
                                                </div>
                                            </div>
                                        </div>

                                        <hr class="divider" />

                                        <div class="form-group row mb-2">
                                            <label class="col-md-2" for="statusperkawinan_i">Status Perkawinan</label>
                                            <div class="col-md-10">
                                                <select id="statusperkawinan_i" name="statusperkawinan_i" class="form-control">
                                                    <option value="0" selected="" disabled="">Pilih salah satu</option>
                                                    <option value="Perawan">Perawan</option>
                                                    <option value="Janda">Janda</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-1">
                                            <div class="col-md-6">
                                                <h6 style="color: #18d26e;"><strong>JIKA JANDA</strong></h6>
                                            </div>
                                            <div class="col-md-6">
                                                <h6 style="color: #18d26e;"><strong>BUKTI JANDA BERUPA</strong></h6>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-4 label-control" for="namabekassuami">Nama Bekas Suami</label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" id="namabekassuami" name="namabekassuami">
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-1">
                                                    <label class="col-md-4" for="alamatbekassuami">Alamat</label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" id="alamatbekassuami" name="alamatbekassuami">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3" for="namaakta_i">Nama Akta</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" id="namaakta_i" name="namaakta_i">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3" for="instansi_i">Instansi</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" id="instansi_i" name="instansi_i">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3" for="nomor_i">Nomor</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" id="nomor_i" name="nomor_i">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3" for="tanggal_i">Tanggal</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" id="tanggal_i" name="tanggal_i">
                                                    </div>
                                                    <div class="col-md-6"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <hr class="divider" />

                                        <div class="row">
                                            <div class="card text-white box-shadow-0 bg-success col-md-12">
                                                <div class="card-content collapse show">
                                                    <div class="card-body">
                                                        <p class="card-text"><i class="icon-question"></i>&nbsp; Adakah hubungan nasab, radla'ah atau mushaharah (semenda) antara calon istri dengan:</strong></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-6 label-control" for="pernikahanke_i">Pernikahan ke-<span class="danger">*</span></label>
                                                    <div class="col-md-6">
                                                        <input type="text" id="pernikahanke_i" class="form-control" placeholder="" name="pernikahanke_i">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="suami_i">Suami</label>
                                                    <div class="col-md-9">
                                                        <select id="suami_i" name="suami_i" class="form-control">
                                                            <option value="0" selected="" disabled="">Pilih salah satu</option>
                                                            <option value="Ada">Ada</option>
                                                            <option value="Tidak Ada">Tidak Ada</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6"></div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="bekasistrisuami_i">Bekas Istri Suami</label>
                                                    <div class="col-md-9">
                                                        <select id="bekasistrisuami_i" name="bekasistrisuami_i" class="form-control">
                                                            <option value="0" selected="" disabled="">Pilih salah satu</option>
                                                            <option value="Iya">Iya</option>
                                                            <option value="Tidak">Tidak</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-6"></div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="istriistrisuami_i">Istri / Istri-istri Suami</label>
                                                    <div class="col-md-9">
                                                        <select id="istriistrisuami_i" name="istriistrisuami_i" class="form-control">
                                                            <option value="0" selected="" disabled="">Pilih salah satu</option>
                                                            <option value="Iya">Iya</option>
                                                            <option value="Tidak">Tidak</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <hr class="divider" />

                                        <div class="row mb-1">
                                            <div class="col-md-6">
                                                <h6 style="color: #18d26e;"><strong>JIKA ISTRI ANGGOTA TNI/POLRI</strong></h6>
                                            </div>
                                            <div class="col-md-6"></div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="pejabatPI_i">Pejabat Pemberi Izin <span class="danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" id="pejabatPI_i" class="form-control" placeholder="" name="pejabatPI_i">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="nomorpejabat_i">Nomor <span class="danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" id="nomorpejabat_i" class="form-control" placeholder="" name="nomorpejabat_i">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="tanggalsuratpejabat_i">Tanggal Surat <span class="danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" id="tanggalsuratpejabat_i" class="form-control" placeholder="" name="tanggalsuratpejabat_i">
                                            </div>
                                        </div>

                                        <div class="row mb-1">
                                            <div class="col-md-6">
                                                <h6 style="color: #18d26e;"><strong>JIKA ISTRI WNA (WARGA NEGARA ASING)</strong></h6>
                                            </div>
                                            <div class="col-md-6"></div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="instansiPI_i">Instansi Pemberi Izin <span class="danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" id="instansiPI_i" class="form-control" placeholder="" name="instansiPI_i">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="nomorinstansi_i">Nomor <span class="danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" id="nomorinstansi_i" class="form-control" placeholder="" name="nomorinstansi_i">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="tanggalsuratinstansi_i">Tanggal Surat <span class="danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" id="tanggalsuratinstansi_i" class="form-control" placeholder="" name="tanggalsuratinstansi_i">
                                            </div>
                                        </div>

                                        <div class="row mb-1">
                                            <div class="col-md-6">
                                                <h6 style="color: #18d26e;"><strong>JIKA BELUM MENCAPAI USIA 19 TAHUN</strong></h6>
                                            </div>
                                            <div class="col-md-6"></div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="izinpengadilan_i">Izin Pengadilan <span class="danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" id="izinpengadilan_i" class="form-control" placeholder="" name="izinpengadilan_i">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="nomorizinpengadilan_i">Nomor <span class="danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" id="nomorizinpengadilan_i" class="form-control" placeholder="" name="nomorizinpengadilan_i">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="tanggalsuratpengadilan_i">Tanggal Surat <span class="danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" id="tanggalsuratpengadilan_i" class="form-control" placeholder="" name="tanggalsuratpengadilan_i">
                                            </div>
                                        </div>

                                        <div class="row mb-1">
                                            <div class="col-md-6">
                                                <h6 style="color: #18d26e;"><strong>JIKA BELUM MENCAPAI USIA 21 TAHUN</strong></h6>
                                            </div>
                                            <div class="col-md-6"></div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="namapemberiizin_i">Nama Pemberi Izin <span class="danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" id="namapemberiizin_i" class="form-control" placeholder="" name="namapemberiizin_i">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="hubungankeluarga_i">Hubungan Keluarga <span class="danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" id="hubungankeluarga_i" class="form-control" placeholder="" name="hubungankeluarga_i">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="tanggalsuratpemberiizin_i">Tanggal Surat <span class="danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" id="tanggalsuratpemberiizin_i" class="form-control" placeholder="" name="tanggalsuratpemberiizin_i">
                                            </div>
                                        </div>
                                    </fieldset>

                                    <!-- STEP WALI AKAD -->
                                    <h6><i class="step-icon ft-user"></i>Wali Akad</h6>
                                    <fieldset class="mt-2">
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="statuswali">Status Wali <span class="danger">*</span></label>
                                            <div class="col-md-9">
                                                <select id="statuswali" name="statuswali" class="form-control">
                                                    <option value="none" selected="" disabled="">Pilih salah satu</option>
                                                    <option value="Nasab">Nasab</option>
                                                    <option value="Hakim">Hakim</option>
                                                    <option value="Muhakkam">Muhakkam</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="hubunganwali">Hubungan Wali <span class="danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" id="hubunganwali" class="form-control" placeholder="" name="hubunganwali">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="sebabwali">Sebab Menjadi Wali <span class="danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" id="sebabwali" class="form-control" placeholder="" name="sebabwali">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="namalengkapwali">Nama Lengkap <span class="danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" id="namalengkapwali" class="form-control" placeholder="" name="namalengkapwali">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="bin">Bin <span class="danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" id="bin" class="form-control" placeholder="" name="bin">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="nikwali">Nomor Induk Kependudukan (NIK) <span class="danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" id="nikwali" class="form-control" placeholder="" name="nikwali">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="ttlwali">Tempat Tanggal Lahir <span class="danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" id="ttlwali" class="form-control" placeholder="" name="ttlwali">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="kwnwali">Kewarganegaraan <span class="danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" id="kwnwali" class="form-control" placeholder="" name="kwnwali">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="agamawali">Agama <span class="danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" id="agamawali" class="form-control" placeholder="" name="agamawali">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="pekerjaanwali">Pekerjaan <span class="danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" id="pekerjaanwali" class="form-control" placeholder="" name="pekerjaanwali">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="alamatwali">Alamat <span class="danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" id="alamatwali" class="form-control" placeholder="" name="alamatwali">
                                            </div>
                                        </div>
                                    </fieldset>

                                    <!-- STEP WAKIL WALI AKAD -->
                                    <h6><i class="step-icon ft-file-text"></i>Wakil Wali Akad</h6>
                                    <fieldset class="mt-2">
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="namalengkapwakilwali">Nama Lengkap <span class="danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" id="namalengkapwakilwali" class="form-control" placeholder="" name="namalengkapwakilwali">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="nikwakilwali">Nomor Induk Kependudukan (NIK) <span class="danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" id="nikwakilwali" class="form-control" placeholder="" name="nikwakilwali">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="ttlwakilwali">Tempat Tanggal Lahir <span class="danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" id="ttlwakilwali" class="form-control" placeholder="" name="ttlwakilwali">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="kwnwakilwali">Kewarganegaraan <span class="danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" id="kwnwakilwali" class="form-control" placeholder="" name="kwnwakilwali">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="agamawakilwali">Agama <span class="danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" id="agamawakilwali" class="form-control" placeholder="" name="agamawakilwali">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="pekerjaanwakilwali">Pekerjaan <span class="danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" id="pekerjaanwakilwali" class="form-control" placeholder="" name="pekerjaanwakilwali">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="alamatwakilwali">Alamat <span class="danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" id="alamatwakilwali" class="form-control" placeholder="" name="alamatwakilwali">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="tanggalsuratkuasawakilwali">Tanggal Surat Kuasa <span class="danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" id="tanggalsuratkuasawakilwali" class="form-control" placeholder="" name="tanggalsuratkuasawakilwali">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="pejabatkuapengesah">Pejabat KUA yang Mengesahkan <span class="danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" id="pejabatkuapengesah" class="form-control" placeholder="" name="pejabatkuapengesah">
                                            </div>
                                        </div>
                                    </fieldset>

                                    <!-- STEP MAS KAWIN -->
                                    <h6><i class="step-icon ft-file-text"></i>Mas Kawin</h6>
                                    <fieldset class="mt-2">
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="jenisdanjumlah">Jenis dan Jumlah <span class="danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" id="jenisdanjumlah" class="form-control" placeholder="" name="jenisdanjumlah">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="pembayaran">Pembayaran <span class="danger">*</span></label>
                                            <div class="col-md-9">
                                                <select id="pembayaran" name="pembayaran" class="form-control">
                                                    <option value="none" selected="" disabled="">Pilih salah satu</option>
                                                    <option value="Tunai">Tunai</option>
                                                    <option value="Hutang">Hutang</option>
                                                </select>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <!-- STEP PERJANJIAN PERKAWINAN -->
                                    <h6><i class="step-icon ft-file-text"></i>Perjanjian Perkawinan</h6>
                                    <fieldset class="mt-2">
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="nomortanggalsurat">Nomor dan Tanggal Surat <span class="danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" id="nomortanggalsurat" class="form-control" placeholder="" name="nomortanggalsurat">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="isiperjanjian">Isi Perjanjian <span class="danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" id="isiperjanjian" class="form-control" placeholder="" name="isiperjanjian">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="namanotaris">Nama Notaris <span class="danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" id="namanotaris" class="form-control" placeholder="" name="namanotaris">
                                            </div>
                                        </div>
                                    </fieldset>

                                    <!-- STEP WAKIL PETUGAS YANG MEMERIKSA -->
                                    <h6><i class="step-icon ft-file-text"></i>Petugas yang Memeriksa</h6>
                                    <fieldset class="mt-2">
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="namapetugas">Nama <span class="danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" id="namapetugas" class="form-control" placeholder="" name="namapetugas">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="jabatanpetugas">Jabatan <span class="danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" id="jabatanpetugas" class="form-control" placeholder="" name="jabatanpetugas">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="kuakecamatan">KUA Kecamatan/KBRI/KJRI <span class="danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" id="kuakecamatan" class="form-control" placeholder="" name="kuakecamatan">
                                            </div>
                                        </div>
                                    </fieldset>
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