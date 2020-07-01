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
                                    <?= form_open_multipart('penghulu/submitPemeriksaanNikah', 'class="steps-validation" id="form"'); ?>
                                    <input type="hidden" id="regID" name="regID" value="<?= $result[0]->REG_ID; ?>">
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
                                                    <label for="namacal_s">Nama Lengkap <span class="danger">*</span></label>
                                                    <input type="text" class="form-control" id="namacal_s" name="namacal_s" value="<?= $result[0]->NAMA_CAL_S ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="agamacal_s">Agama <span class="danger">*</span></label>
                                                    <input type="text" class="form-control" id="agamacal_s" name="agamacal_s" value="Islam" readonly required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="ttlcal_s">Tempat Tanggal Lahir <span class="danger">*</span></label>
                                                    <input type="text" class="form-control" id="ttlcal_s" name="ttlcal_s" value="<?= $result[0]->TTL_S; ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="pekerjaancal_s">Pekerjaan <span class="danger">*</span></label>
                                                    <input type="text" class="form-control jobs" id="pekerjaancal_s" name="pekerjaancal_s" value="<?= $result[0]->PEKERJAAN_S; ?>" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="nikcal_s">Nomor Induk Kependudukan (NIK) <span class="danger">*</span></label>
                                                    <input type="text" class="form-control nik" id="nikcal_s" name="nikcal_s" value="<?= $result[0]->NIK_CAL_S; ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="pendidikancal_s">Pendidikan Terakhir <span class="danger">*</span></label>
                                                    <select id="pendidikancal_s" name="pendidikancal_s" class="form-control" required>
                                                        <option value="0" selected="" disabled="">Pilih salah satu</option>
                                                        <option value="SD">SD</option>
                                                        <option value="SMP">SMP</option>
                                                        <option value="SMA">SMA</option>
                                                        <option value="Diploma">Diploma</option>
                                                        <option value="Sarjana">Sarjana</option>
                                                        <option value="Magister">Magister</option>
                                                    </select>
                                                    <!-- <input type="text" class="form-control" id="pendidikancal_s" name="pendidikancal_s" required> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="kwncal_s">Kewarganegaraan <span class="danger">*</span></label>
                                                    <select id="kwncal_s" name="kwncal_s" class="form-control" required>
                                                        <option value="0" selected="" disabled="">Pilih salah satu</option>
                                                        <option value="WNI">WNI</option>
                                                        <option value="WNA">WNA</option>
                                                    </select>
                                                    <!-- <input type="text" class="form-control" id="kwncal_s" name="kwncal_s" value="<?= $result[0]->KEWARGANEGARAAN_S; ?>" required> -->
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="alamatcal_s">Alamat <span class="danger">*</span></label>
                                                    <input type="text" class="form-control" id="alamatcal_s" name="alamatcal_s" value="<?= $result[0]->ALMT_S; ?>" required>
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
                                                    <label for="namaayahcal_s">Nama Lengkap Ayah <span class="danger">*</span></label>
                                                    <input type="text" class="form-control" id="namaayahcal_s" name="namaayahcal_s" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="namaibucal_s">Nama Lengkap Ibu <span class="danger">*</span></label>
                                                    <input type="text" class="form-control" id="namaibucal_s" name="namaibucal_s" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="ttlayahcal_s">Tempat Tanggal Lahir Ayah <span class="danger">*</span></label>
                                                    <input type="text" class="form-control" id="ttlayahcal_s" name="ttlayahcal_s" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="ttlibucal_s">Tempat Tanggal Lahir Ibu <span class="danger">*</span></label>
                                                    <input type="text" class="form-control" id="ttlibucal_s" name="ttlibucal_s" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="nikayahcal_s">Nomor Induk Kependudukan (NIK) Ayah <span class="danger">*</span></label>
                                                    <input type="text" class="form-control nik" id="nikayahcal_s" name="nikayahcal_s" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="nikibucal_s">Nomor Induk Kependudukan (NIK) Ibu <span class="danger">*</span></label>
                                                    <input type="text" class="form-control nik" id="nikibucal_s" name="nikibucal_s" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="kwnayahcal_s">Kewarganegaraan Ayah <span class="danger">*</span></label>
                                                    <select id="kwnayahcal_s" name="kwnayahcal_s" class="form-control" required>
                                                        <option value="0" selected="" disabled="">Pilih salah satu</option>
                                                        <option value="WNI">WNI</option>
                                                        <option value="WNA">WNA</option>
                                                    </select>
                                                    <!-- <input type="text" class="form-control" id="kwnayahcal_s" name="kwnayahcal_s" required> -->
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="kwnibucal_s">Kewarganegaraan Ibu <span class="danger">*</span></label>
                                                    <select id="kwnibucal_s" name="kwnibucal_s" class="form-control" required>
                                                        <option value="0" selected="" disabled="">Pilih salah satu</option>
                                                        <option value="WNI">WNI</option>
                                                        <option value="WNA">WNA</option>
                                                    </select>
                                                    <!-- <input type="text" class="form-control" id="kwnibucal_s" name="kwnibucal_s" required> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="agamaayahcal_s">Agama Ayah <span class="danger">*</span></label>
                                                    <input type="text" class="form-control" id="agamaayahcal_s" name="agamaayahcal_s" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="agamaibucal_s">Agama Ibu <span class="danger">*</span></label>
                                                    <input type="text" class="form-control" id="agamaibucal_s" name="agamaibucal_s" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="pekerjaanayahcal_s">Pekerjaan Ayah <span class="danger">*</span></label>
                                                    <input type="text" class="form-control jobs" id="pekerjaanayahcal_s" name="pekerjaanayahcal_s" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="pekerjaanibucal_s">Pekerjaan Ibu <span class="danger">*</span></label>
                                                    <input type="text" class="form-control jobs" id="pekerjaanibucal_s" name="pekerjaanibucal_s" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="alamatayah_s">Alamat Ayah <span class="danger">*</span></label>
                                                    <input type="text" class="form-control" id="alamatayah_s" name="alamatayah_s" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="alamatibucal_s">Alamat Ibu <span class="danger">*</span></label>
                                                    <input type="text" class="form-control" id="alamatibucal_s" name="alamatibucal_s" required>
                                                </div>
                                            </div>
                                        </div>

                                        <hr class="divider" />

                                        <div class="form-group row mb-2">
                                            <label class="col-md-2" for="statusperkawinan_s">Status Perkawinan <span class="danger">*</span></label>
                                            <div class="col-md-10">
                                                <select id="statusperkawinan_s" name="statusperkawinan_s" class="form-control" required>
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
                                                    <input type="text" class="form-control number" id="jumlahistri" name="jumlahistri">
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
                                                    <input type="text" class="form-control date" id="tanggalkeputusan_s" name="tanggalkeputusan_s">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="tanggal_s">Tanggal</label>
                                                    <input type="text" class="form-control date" id="tanggal_s" name="tanggal_s">
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
                                                    <label class="col-md-4 label-control" for="pernikahanke_s">Pernikahan ke- <span class="danger">*</span></label>
                                                    <div class="col-md-8">
                                                        <input type="text" id="pernikahanke_s" class="form-control number" placeholder="" name="pernikahanke_s" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="diasendiri_s">Dia Sendiri <span class="danger">*</span></label>
                                                    <div class="col-md-9">
                                                        <select id="diasendiri_s" name="diasendiri_s" class="form-control" required>
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
                                                    <label class="col-md-3 label-control" for="bekasistri_s">Bekas Istri <span class="danger">*</span></label>
                                                    <div class="col-md-9">
                                                        <select id="bekasistri_s" name="bekasistri_s" class="form-control" required>
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
                                                    <label class="col-md-3 label-control" for="istriistri_s">Istri / Istri-istri <span class="danger">*</span></label>
                                                    <div class="col-md-9">
                                                        <select id="istriistri_s" name="istriistri_s" class="form-control" required>
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
                                            <label class="col-md-2 label-control" for="pejabatPI_s">Pejabat Pemberi Izin</label>
                                            <div class="col-md-10">
                                                <input type="text" id="pejabatPI_s" class="form-control" placeholder="" name="pejabatPI_s">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 label-control" for="nomorpejabat_s">Nomor</label>
                                            <div class="col-md-10">
                                                <input type="text" id="nomorpejabat_s" class="form-control" placeholder="" name="nomorpejabat_s">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 label-control" for="tanggalsuratpejabat_s">Tanggal Surat</label>
                                            <div class="col-md-10">
                                                <input type="text" id="tanggalsuratpejabat_s" class="form-control date" placeholder="" name="tanggalsuratpejabat_s">
                                            </div>
                                        </div>

                                        <div class="row mb-1">
                                            <div class="col-md-6">
                                                <h6 style="color: #18d26e;"><strong>JIKA SUAMI WNA (WARGA NEGARA ASING)</strong></h6>
                                            </div>
                                            <div class="col-md-6"></div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 label-control" for="instansiPI_s">Instansi Pemberi Izin</label>
                                            <div class="col-md-10">
                                                <input type="text" id="instansiPI_s" class="form-control" placeholder="" name="instansiPI_s">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 label-control" for="nomorinstansi_s">Nomor</label>
                                            <div class="col-md-10">
                                                <input type="text" id="nomorinstansi_s" class="form-control" placeholder="" name="nomorinstansi_s">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 label-control" for="tanggalsuratinstansi_s">Tanggal Surat</label>
                                            <div class="col-md-10">
                                                <input type="text" id="tanggalsuratinstansi_s" class="form-control date" placeholder="" name="tanggalsuratinstansi_s">
                                            </div>
                                        </div>

                                        <div class="row mb-1">
                                            <div class="col-md-6">
                                                <h6 style="color: #18d26e;"><strong>JIKA BELUM MENCAPAI USIA 19 TAHUN</strong></h6>
                                            </div>
                                            <div class="col-md-6"></div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 label-control" for="izinpengadilan_s">Izin Pengadilan</label>
                                            <div class="col-md-10">
                                                <input type="text" id="izinpengadilan_s" class="form-control" placeholder="" name="izinpengadilan_s">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 label-control" for="nomorizinpengadilan_s">Nomor</label>
                                            <div class="col-md-10">
                                                <input type="text" id="nomorizinpengadilan_s" class="form-control" placeholder="" name="nomorizinpengadilan_s">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 label-control" for="tanggalsuratpengadilan_s">Tanggal Surat</label>
                                            <div class="col-md-10">
                                                <input type="text" id="tanggalsuratpengadilan_s" class="form-control date" placeholder="" name="tanggalsuratpengadilan_s">
                                            </div>
                                        </div>

                                        <div class="row mb-1">
                                            <div class="col-md-6">
                                                <h6 style="color: #18d26e;"><strong>JIKA BELUM MENCAPAI USIA 21 TAHUN</strong></h6>
                                            </div>
                                            <div class="col-md-6"></div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 label-control" for="namapemberiizin_s">Nama Pemberi Izin</label>
                                            <div class="col-md-10">
                                                <input type="text" id="namapemberiizin_s" class="form-control" placeholder="" name="namapemberiizin_s">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 label-control" for="hubungankeluarga_s">Hubungan Keluarga</label>
                                            <div class="col-md-10">
                                                <input type="text" id="hubungankeluarga_s" class="form-control" placeholder="" name="hubungankeluarga_s">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 label-control" for="tanggalsuratpemberiizin_s">Tanggal Surat</label>
                                            <div class="col-md-10">
                                                <input type="text" id="tanggalsuratpemberiizin_s" class="form-control date" placeholder="" name="tanggalsuratpemberiizin_s">
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
                                                    <label for="namacal_i">Nama Lengkap <span class="danger">*</span></label>
                                                    <input type="text" class="form-control" id="namacal_i" name="namacal_i" value="<?= $result[0]->NAMA_CAL_I; ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="agamacal_i">Agama <span class="danger">*</span></label>
                                                    <input type="text" class="form-control" id="agamacal_i" name="agamacal_i" value="Islam" readonly required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="ttlcal_i">Tempat Tanggal Lahir <span class="danger">*</span></label>
                                                    <input type="text" class="form-control" id="ttlcal_i" name="ttlcal_i" value="<?= $result[0]->TTL_I; ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="pekerjaancal_i">Pekerjaan <span class="danger">*</span></label>
                                                    <input type="text" class="form-control jobs" id="pekerjaancal_i" name="pekerjaancal_i" value="<?= $result[0]->PEKERJAAN_I; ?>" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="nikcal_i">Nomor Induk Kependudukan (NIK) <span class="danger">*</span></label>
                                                    <input type="text" class="form-control nik" id="nikcal_i" name="nikcal_i" value="<?= $result[0]->NIK_CAL_I; ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="pendidikancal_i">Pendidikan Terakhir <span class="danger">*</span></label>
                                                    <select id="pendidikancal_i" name="pendidikancal_i" class="form-control" required>
                                                        <option value="0" selected="" disabled="">Pilih salah satu</option>
                                                        <option value="SD">SD</option>
                                                        <option value="SMP">SMP</option>
                                                        <option value="SMA">SMA</option>
                                                        <option value="Diploma">Diploma</option>
                                                        <option value="Sarjana">Sarjana</option>
                                                        <option value="Magister">Magister</option>
                                                    </select>
                                                    <!-- <input type="text" class="form-control" id="pendidikancal_i" name="pendidikancal_i" required> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="kwncal_i">Kewarganegaraan <span class="danger">*</span></label>
                                                    <input type="text" class="form-control" id="kwncal_i" name="kwncal_i" value="<?= $result[0]->KEWARGANEGARAAN_I; ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="alamatcal_i">Alamat <span class="danger">*</span></label>
                                                    <input type="text" class="form-control" id="alamatcal_i" name="alamatcal_i" value="<?= $result[0]->ALMT_I; ?>" required>
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
                                                    <label for="namaayahcal_i">Nama Lengkap Ayah <span class="danger">*</span></label>
                                                    <input type="text" class="form-control" id="namaayahcal_i" name="namaayahcal_i" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="namaibucal_i">Nama Lengkap Ibu <span class="danger">*</span></label>
                                                    <input type="text" class="form-control" id="namaibucal_i" name="namaibucal_i" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="ttlayahcal_i">Tempat Tanggal Lahir Ayah <span class="danger">*</span></label>
                                                    <input type="text" class="form-control" id="ttlayahcal_i" name="ttlayahcal_i" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="ttlibucal_i">Tempat Tanggal Lahir Ibu <span class="danger">*</span></label>
                                                    <input type="text" class="form-control" id="ttlibucal_i" name="ttlibucal_i" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="nikayahcal_i">Nomor Induk Kependudukan (NIK) Ayah <span class="danger">*</span></label>
                                                    <input type="text" class="form-control nik" id="nikayahcal_i" name="nikayahcal_i" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="nikibucal_i">Nomor Induk Kependudukan (NIK) Ibu <span class="danger">*</span></label>
                                                    <input type="text" class="form-control nik" id="nikibucal_i" name="nikibucal_i" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="kwnayahcal_i">Kewarganegaraan Ayah <span class="danger">*</span></label>
                                                    <select id="kwnayahcal_i" name="kwnayahcal_i" class="form-control" required>
                                                        <option value="0" selected="" disabled="">Pilih salah satu</option>
                                                        <option value="WNI">WNI</option>
                                                        <option value="WNA">WNA</option>
                                                    </select>
                                                    <!-- <input type="text" class="form-control" id="kwnayahcal_i" name="kwnayahcal_i" required> -->
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="kwnibucal_i">Kewarganegaraan Ibu <span class="danger">*</span></label>
                                                    <select id="kwnibucal_i" name="kwnibucal_i" class="form-control" required>
                                                        <option value="0" selected="" disabled="">Pilih salah satu</option>
                                                        <option value="WNI">WNI</option>
                                                        <option value="WNA">WNA</option>
                                                    </select>
                                                    <!-- <input type="text" class="form-control" id="kwnibucal_i" name="kwnibucal_i" required> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="agamaayahcal_i">Agama Ayah <span class="danger">*</span></label>
                                                    <input type="text" class="form-control" id="agamaayahcal_i" name="agamaayahcal_i" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="agamaibucal_i">Agama Ibu <span class="danger">*</span></label>
                                                    <input type="text" class="form-control" id="agamaibucal_i" name="agamaibucal_i" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="pekerjaanayahcal_i">Pekerjaan Ayah <span class="danger">*</span></label>
                                                    <input type="text" class="form-control jobs" id="pekerjaanayahcal_i" name="pekerjaanayahcal_i" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="pekerjaanibucal_i">Pekerjaan Ibu <span class="danger">*</span></label>
                                                    <input type="text" class="form-control jobs" id="pekerjaanibucal_i" name="pekerjaanibucal_i" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="alamatayah_i">Alamat Ayah <span class="danger">*</span></label>
                                                    <input type="text" class="form-control" id="alamatayah_i" name="alamatayah_i" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="alamatibucal_i">Alamat Ibu <span class="danger">*</span></label>
                                                    <input type="text" class="form-control" id="alamatibucal_i" name="alamatibucal_i" required>
                                                </div>
                                            </div>
                                        </div>

                                        <hr class="divider" />

                                        <div class="form-group row mb-2">
                                            <label class="col-md-2" for="statusperkawinan_i">Status Perkawinan <span class="danger">*</span></label>
                                            <div class="col-md-10">
                                                <select id="statusperkawinan_i" name="statusperkawinan_i" class="form-control" required>
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
                                                        <input type="text" class="form-control date" id="tanggal_i" name="tanggal_i">
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
                                                    <label class="col-md-6 label-control" for="pernikahanke_i">Pernikahan ke- <span class="danger">*</span></label>
                                                    <div class="col-md-6">
                                                        <input type="text" id="pernikahanke_i" class="form-control number" placeholder="" name="pernikahanke_i" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="suami_i">Suami <span class="danger">*</span></label>
                                                    <div class="col-md-9">
                                                        <select id="suami_i" name="suami_i" class="form-control" required>
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
                                                    <label class="col-md-3 label-control" for="bekasistrisuami_i">Bekas Istri Suami <span class="danger">*</span></label>
                                                    <div class="col-md-9">
                                                        <select id="bekasistrisuami_i" name="bekasistrisuami_i" class="form-control" required>
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
                                                    <label class="col-md-3 label-control" for="istriistrisuami_i">Istri / Istri-istri Suami <span class="danger">*</span></label>
                                                    <div class="col-md-9">
                                                        <select id="istriistrisuami_i" name="istriistrisuami_i" class="form-control" required>
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
                                            <label class="col-md-3 label-control" for="pejabatPI_i">Pejabat Pemberi Izin</label>
                                            <div class="col-md-9">
                                                <input type="text" id="pejabatPI_i" class="form-control" placeholder="" name="pejabatPI_i">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="nomorpejabat_i">Nomor</label>
                                            <div class="col-md-9">
                                                <input type="text" id="nomorpejabat_i" class="form-control" placeholder="" name="nomorpejabat_i">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="tanggalsuratpejabat_i">Tanggal Surat</label>
                                            <div class="col-md-9">
                                                <input type="text" id="tanggalsuratpejabat_i" class="form-control date" placeholder="" name="tanggalsuratpejabat_i">
                                            </div>
                                        </div>

                                        <div class="row mb-1">
                                            <div class="col-md-6">
                                                <h6 style="color: #18d26e;"><strong>JIKA ISTRI WNA (WARGA NEGARA ASING)</strong></h6>
                                            </div>
                                            <div class="col-md-6"></div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="instansiPI_i">Instansi Pemberi Izin</label>
                                            <div class="col-md-9">
                                                <input type="text" id="instansiPI_i" class="form-control" placeholder="" name="instansiPI_i">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="nomorinstansi_i">Nomor</label>
                                            <div class="col-md-9">
                                                <input type="text" id="nomorinstansi_i" class="form-control" placeholder="" name="nomorinstansi_i">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="tanggalsuratinstansi_i">Tanggal Surat</label>
                                            <div class="col-md-9">
                                                <input type="text" id="tanggalsuratinstansi_i" class="form-control date" placeholder="" name="tanggalsuratinstansi_i">
                                            </div>
                                        </div>

                                        <div class="row mb-1">
                                            <div class="col-md-6">
                                                <h6 style="color: #18d26e;"><strong>JIKA BELUM MENCAPAI USIA 19 TAHUN</strong></h6>
                                            </div>
                                            <div class="col-md-6"></div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="izinpengadilan_i">Izin Pengadilan</label>
                                            <div class="col-md-9">
                                                <input type="text" id="izinpengadilan_i" class="form-control" placeholder="" name="izinpengadilan_i">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="nomorizinpengadilan_i">Nomor</label>
                                            <div class="col-md-9">
                                                <input type="text" id="nomorizinpengadilan_i" class="form-control" placeholder="" name="nomorizinpengadilan_i">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="tanggalsuratpengadilan_i">Tanggal Surat</label>
                                            <div class="col-md-9">
                                                <input type="text" id="tanggalsuratpengadilan_i" class="form-control date" placeholder="" name="tanggalsuratpengadilan_i">
                                            </div>
                                        </div>

                                        <div class="row mb-1">
                                            <div class="col-md-6">
                                                <h6 style="color: #18d26e;"><strong>JIKA BELUM MENCAPAI USIA 21 TAHUN</strong></h6>
                                            </div>
                                            <div class="col-md-6"></div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="namapemberiizin_i">Nama Pemberi Izin</label>
                                            <div class="col-md-9">
                                                <input type="text" id="namapemberiizin_i" class="form-control" placeholder="" name="namapemberiizin_i">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="hubungankeluarga_i">Hubungan Keluarga</label>
                                            <div class="col-md-9">
                                                <input type="text" id="hubungankeluarga_i" class="form-control" placeholder="" name="hubungankeluarga_i">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="tanggalsuratpemberiizin_i">Tanggal Surat</label>
                                            <div class="col-md-9">
                                                <input type="text" id="tanggalsuratpemberiizin_i" class="form-control date" placeholder="" name="tanggalsuratpemberiizin_i">
                                            </div>
                                        </div>
                                    </fieldset>

                                    <!-- STEP WALI AKAD -->
                                    <h6><i class="step-icon ft-user"></i>Wali Akad</h6>
                                    <fieldset class="mt-2">
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="statuswali">Status Wali <span class="danger">*</span></label>
                                            <div class="col-md-9">
                                                <select id="statuswali" name="statuswali" class="form-control" required>
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
                                                <input type="text" id="hubunganwali" class="form-control" placeholder="" name="hubunganwali" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="sebabwali">Sebab Menjadi Wali <span class="danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" id="sebabwali" class="form-control" placeholder="" name="sebabwali" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="namalengkapwali">Nama Lengkap <span class="danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" id="namalengkapwali" class="form-control" placeholder="" name="namalengkapwali" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="bin">Bin <span class="danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" id="bin" class="form-control" placeholder="" name="bin" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="nikwali">Nomor Induk Kependudukan (NIK) <span class="danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" id="nikwali" class="form-control nik" placeholder="" name="nikwali" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="ttlwali">Tempat Tanggal Lahir <span class="danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" id="ttlwali" class="form-control" placeholder="" name="ttlwali" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="kwnwali">Kewarganegaraan <span class="danger">*</span></label>
                                            <div class="col-md-9">
                                                <select id="kwnwali" name="kwnwali" class="form-control" required>
                                                    <option value="0" selected="" disabled="">Pilih salah satu</option>
                                                    <option value="WNI">WNI</option>
                                                    <option value="WNA">WNA</option>
                                                </select>
                                                <!-- <input type="text" id="kwnwali" class="form-control" placeholder="" name="kwnwali" required> -->
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="agamawali">Agama <span class="danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" id="agamawali" class="form-control" placeholder="" name="agamawali" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="pekerjaanwali">Pekerjaan <span class="danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" id="pekerjaanwali" class="form-control jobs" placeholder="" name="pekerjaanwali" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="alamatwali">Alamat <span class="danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" id="alamatwali" class="form-control" placeholder="" name="alamatwali" required>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <!-- STEP WAKIL WALI AKAD -->
                                    <h6><i class="step-icon ft-file-text"></i>Wakil Wali Akad</h6>
                                    <fieldset class="mt-2">
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="namalengkapwakilwali">Nama Lengkap <span class="danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" id="namalengkapwakilwali" class="form-control" placeholder="" name="namalengkapwakilwali" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="nikwakilwali">Nomor Induk Kependudukan (NIK) <span class="danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" id="nikwakilwali" class="form-control nik" placeholder="" name="nikwakilwali" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="ttlwakilwali">Tempat Tanggal Lahir <span class="danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" id="ttlwakilwali" class="form-control" placeholder="" name="ttlwakilwali" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="kwnwakilwali">Kewarganegaraan <span class="danger">*</span></label>
                                            <div class="col-md-9">
                                                <select id="kwnwakilwali" name="kwnwakilwali" class="form-control" required>
                                                    <option value="0" selected="" disabled="">Pilih salah satu</option>
                                                    <option value="WNI">WNI</option>
                                                    <option value="WNA">WNA</option>
                                                </select>
                                                <!-- <input type="text" id="kwnwakilwali" class="form-control" placeholder="" name="kwnwakilwali" required> -->
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="agamawakilwali">Agama <span class="danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" id="agamawakilwali" class="form-control" placeholder="" name="agamawakilwali" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="pekerjaanwakilwali">Pekerjaan <span class="danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" id="pekerjaanwakilwali" class="form-control jobs" placeholder="" name="pekerjaanwakilwali" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="alamatwakilwali">Alamat <span class="danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" id="alamatwakilwali" class="form-control" placeholder="" name="alamatwakilwali" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="tanggalsuratkuasawakilwali">Tanggal Surat Kuasa <span class="danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" id="tanggalsuratkuasawakilwali" class="form-control date" placeholder="" name="tanggalsuratkuasawakilwali" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="pejabatkuapengesah">Pejabat KUA yang Mengesahkan <span class="danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" id="pejabatkuapengesah" class="form-control" placeholder="" name="pejabatkuapengesah" required>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <!-- STEP MAS KAWIN -->
                                    <h6><i class="step-icon ft-file-text"></i>Mas Kawin</h6>
                                    <fieldset class="mt-2">
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="jenisdanjumlah">Jenis dan Jumlah <span class="danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" id="jenisdanjumlah" class="form-control" placeholder="" name="jenisdanjumlah" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="pembayaran">Pembayaran <span class="danger">*</span></label>
                                            <div class="col-md-9">
                                                <select id="pembayaran" name="pembayaran" class="form-control" required>
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
                                                <input type="text" id="nomortanggalsurat" class="form-control" placeholder="" name="nomortanggalsurat" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="isiperjanjian">Isi Perjanjian <span class="danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" id="isiperjanjian" class="form-control" placeholder="" name="isiperjanjian" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="namanotaris">Nama Notaris <span class="danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" id="namanotaris" class="form-control" placeholder="" name="namanotaris" required>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <!-- STEP WAKIL PETUGAS YANG MEMERIKSA -->
                                    <h6><i class="step-icon ft-file-text"></i>Petugas yang Memeriksa</h6>
                                    <fieldset class="mt-2">
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="namapetugas">Nama <span class="danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" id="namapetugas" class="form-control" placeholder="" name="namapetugas" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="jabatanpetugas">Jabatan <span class="danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" id="jabatanpetugas" class="form-control" placeholder="" name="jabatanpetugas" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="kuakecamatan">KUA Kecamatan/KBRI/KJRI <span class="danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" id="kuakecamatan" class="form-control" placeholder="" name="kuakecamatan" required>
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

<script>
    $(function() {
        initializeJobList();
        validateNumber();
        validateNIK();
        validateStatusPerkawinan('s');
        validateStatusPerkawinan('i');
        validateKewarganegaraan('s', '<?= $result[0]->KEWARGANEGARAAN_S; ?>');
        validateKewarganegaraan('i', '<?= $result[0]->KEWARGANEGARAAN_I; ?>');
        validateUmur('s', '<?= $result[0]->UMUR_S; ?>');
        validateUmur('i', '<?= $result[0]->UMUR_I; ?>');
        validatePekerjaan('s', '<?= $result[0]->PEKERJAAN_S; ?>');
        validatePekerjaan('i', '<?= $result[0]->PEKERJAAN_I; ?>');

        $('#kwncal_s').change(function() {
            var kwn = $('#kwncal_s').val();
            validateKewarganegaraan('s', kwn);
        });

        $('#kwncal_i').change(function() {
            var kwn = $('#kwncal_i').val();
            validateKewarganegaraan('i', kwn);
        });

        $('#pekerjaancal_s').change(function() {
            var job = $('#pekerjaancal_s').val();
            validatePekerjaan('s', job);
        });

        $('#pekerjaancal_i').change(function() {
            var job = $('#pekerjaancal_i').val();
            validatePekerjaan('i', job);
        });

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

    function validateStatusPerkawinan(actor) {
        $('#statusperkawinan_' + actor).change(function() {
            var statusperkawinan = $('#statusperkawinan_' + actor).val();
            if ('s' == actor) {
                if ('Perjaka' == statusperkawinan) {
                    //field data duda
                    $('#namabekasistri').val('');
                    $('#alamatistri').val('');
                    $('#namaakta').val('');
                    $('#instansi_s').val('');
                    $('#nomor_s').val('');
                    $('#tanggal_s').val('');

                    $('#namabekasistri').attr('readonly', true);
                    $('#alamatistri').attr('readonly', true);
                    $('#namaakta').attr('readonly', true);
                    $('#instansi_s').attr('readonly', true);
                    $('#nomor_s').attr('readonly', true);
                    $('#tanggal_s').attr('readonly', true);

                    //field data beristri
                    $('#jumlahistri').val('');
                    $('#namaistri').val('');
                    $('#pengadilanPI').val('');
                    $('#nomorkeputusan_s').val('');
                    $('#tanggalkeputusan_s').val('');

                    $('#jumlahistri').attr('readonly', true);
                    $('#namaistri').attr('readonly', true);
                    $('#pengadilanPI').attr('readonly', true);
                    $('#nomorkeputusan_s').attr('readonly', true);
                    $('#tanggalkeputusan_s').attr('readonly', true);
                } else if ('Beristri' == statusperkawinan) {
                    //field data duda
                    $('#namabekasistri').val('');
                    $('#alamatistri').val('');
                    $('#namaakta').val('');
                    $('#instansi_s').val('');
                    $('#nomor_s').val('');
                    $('#tanggal_s').val('');

                    $('#namabekasistri').attr('readonly', true);
                    $('#alamatistri').attr('readonly', true);
                    $('#namaakta').attr('readonly', true);
                    $('#instansi_s').attr('readonly', true);
                    $('#nomor_s').attr('readonly', true);
                    $('#tanggal_s').attr('readonly', true);

                    //field data beristri
                    $('#jumlahistri').attr('readonly', false);
                    $('#namaistri').attr('readonly', false);
                    $('#pengadilanPI').attr('readonly', false);
                    $('#nomorkeputusan_s').attr('readonly', false);
                    $('#tanggalkeputusan_s').attr('readonly', false);
                } else if ('Duda' == statusperkawinan) {
                    //field data duda
                    $('#namabekasistri').attr('readonly', false);
                    $('#alamatistri').attr('readonly', false);
                    $('#namaakta').attr('readonly', false);
                    $('#instansi_s').attr('readonly', false);
                    $('#nomor_s').attr('readonly', false);
                    $('#tanggal_s').attr('readonly', false);

                    //field data beristri
                    $('#jumlahistri').val('');
                    $('#namaistri').val('');
                    $('#pengadilanPI').val('');
                    $('#nomorkeputusan_s').val('');
                    $('#tanggalkeputusan_s').val('');

                    $('#jumlahistri').attr('readonly', true);
                    $('#namaistri').attr('readonly', true);
                    $('#pengadilanPI').attr('readonly', true);
                    $('#nomorkeputusan_s').attr('readonly', true);
                    $('#tanggalkeputusan_s').attr('readonly', true);
                }
            } else if ('i' == actor) {
                if ('Perawan' == statusperkawinan) {
                    //field data janda
                    $('#namabekassuami').val('');
                    $('#alamatbekassuami').val('');
                    $('#namaakta_i').val('');
                    $('#instansi_i').val('');
                    $('#nomor_i').val('');
                    $('#tanggal_i').val('');

                    $('#namabekassuami').attr('readonly', true);
                    $('#alamatbekassuami').attr('readonly', true);
                    $('#namaakta_i').attr('readonly', true);
                    $('#instansi_i').attr('readonly', true);
                    $('#nomor_i').attr('readonly', true);
                    $('#tanggal_i').attr('readonly', true);
                } else if ('Janda' == statusperkawinan) {
                    $('#namabekassuami').attr('readonly', false);
                    $('#alamatbekassuami').attr('readonly', false);
                    $('#namaakta_i').attr('readonly', false);
                    $('#instansi_i').attr('readonly', false);
                    $('#nomor_i').attr('readonly', false);
                    $('#tanggal_i').attr('readonly', false);
                }
            }
        });
    }
</script>