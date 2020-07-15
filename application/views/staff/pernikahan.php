<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
            <div class="content-header-left col-md-4 col-12 mb-2">
                <h2 class="content-header-title">PERNIKAHAN</h>
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
                                <!-- <h4 class="card-title">Data Penghulu</h4> -->
                                <div class="text-left">
                                    <a href="javascript::" id="btnAdd" class="btn btn-icon btn-success mb-0" data-toggle="modal" data-target="#modalPernikahan"><i class="ft-user-plus"></i> &nbsp;Tambah Calon Pengantin</a>
                                </div>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <!-- <div class="alert alert-success" style="display: none;" role="alert"></div> -->

                                    <table class="table table-striped table-responsive" id="dataTablePernikahan">
                                        <thead style="word-wrap: break-word; word-break: break-all; white-space: normal;">
                                            <tr>
                                                <th scope="col" style="width: 2%;">No.</th>
                                                <th scope="col" style="width: 5%;">Tanggal Daftar</th>
                                                <th scope="col" style="width: 5%;">Tanggal Akad</th>
                                                <th scope="col" style="width: 10%;">Lokasi Akad</th>
                                                <th scope="col" style="width: 10%;">Nama Calon Suami</th>
                                                <th scope="col" style="width: 10%;">Status Pendaftaran</th>
                                                <th scope="col" style="width: 5%;">Jadwal Sidang</th>
                                                <th scope="col" style="width: 50%">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="showDataPernikahan">

                                        </tbody>
                                    </table>
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

<!-- MODAL VIEW BERKAS -->
<div class="modal fade" id="modalPernikahan" role="dialog" aria-labelledby="modalPernikahanLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalPernikahanLabel"><strong>TAMBAH CALON PENGANTIN</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= BASE_URL . 'staff/submitRegistration/NikahByOfficer'; ?>" method="post" id="formAddEditPernikahan">
                    <!-- DATA HEADER PERNIKAHAN -->
                    <div class="form-group row">
                        <div class="col-md-12">
                            <div class="card text-white box-shadow-0 bg-success">
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <p class="card-text"><i class="ft-users"></i>&nbsp; DATA HEADER PERNIKAHAN</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 label-control" for="nkh_tempat"><?= $question[0]->QUESTION_LABEL ?></label>
                        <div class="col-md-9">
                            <input type="hidden" name="nkh_tempat" id="nkh_tempat_edit" value="">
                            <select id="nkh_tempat" name="nkh_tempat" class="form-control" required>
                                <option value="0" selected="" disabled="">Pilih salah satu</option>
                                <option value="KUA">Di KUA</option>
                                <option value="Di Luar KUA">Di Luar KUA</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 label-control" for="nkh_tanggal_akad"><?= $question[1]->QUESTION_LABEL ?></label>
                        <div class="col-md-5">
                            <div class="position-relative has-icon-left datepicker">
                                <input type="text" autocomplete="off" id="nkh_tanggal_akad" class="form-control" name="nkh_tanggal_akad" required>
                                <div class="form-control-position">
                                    <i class="ft-calendar"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="position-relative has-icon-left">
                                <input type="text" autocomplete="off" id="nkh_jam_akad" class="form-control" name="nkh_jam_akad" required>
                                <div class="form-control-position">
                                    <i class="ft-clock"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 label-control" for="nkh_alamat_akad"><?= $question[2]->QUESTION_LABEL ?></label>
                        <div class="col-md-9">
                            <input type="text" id="nkh_alamat_akad" class="form-control" placeholder="" name="nkh_alamat_akad" required>
                        </div>
                    </div>

                    <!-- DATA DETAIL CALON SUAMI -->
                    <div class="form-group row">
                        <div class="col-md-12">
                            <div class="card text-white box-shadow-0 bg-success">
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <p class="card-text"><i class="icon-symbol-male"></i>&nbsp; DATA CALON SUAMI</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 label-control" for="nkh_kewarganegaraan_s"><?= $question[3]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                        <div class="col-md-9">
                            <select id="nkh_kewarganegaraan_s" name="nkh_kewarganegaraan_s" class="form-control required" required>
                                <option value="0" selected="" disabled="">Pilih salah satu</option>
                                <option value="WNI">WNI</option>
                                <option value="WNA">WNA</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 label-control" for="nkh_nik_s"><?= $question[4]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                        <div class="col-md-7">
                            <input type="text" id="nkh_nik_s" class="form-control required" placeholder="" name="nkh_nik_s" required>
                        </div>
                        <div class="col-md-2">
                            <input type="button" class="btn btn-info btn-min-width" value="Cek NIK" id="nkh_btnceknik_s" style="margin-left: -20px;">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 label-control" for="nkh_nama_s"><?= $question[5]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                        <div class="col-md-9">
                            <input type="text" id="nkh_nama_s" class="form-control required" placeholder="" name="nkh_nama_s" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 label-control" for="nkh_ttl_s"><?= $question[6]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                        <div class="col-md-5">
                            <input type="text" id="nkh_ttl_s" class="form-control required" placeholder="" name="nkh_ttl_s" required>
                        </div>
                        <div class="col-md-4">
                            <div class="position-relative has-icon-left">
                                <input type="text" id="nkh_ttl2_s" class="form-control required" name="nkh_ttl2_s" required>
                                <div class="form-control-position">
                                    <i class="ft-calendar"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 label-control" for="nkh_umur_s"><?= $question[7]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                        <div class="col-md-9">
                            <input type="text" id="nkh_umur_s" class="form-control required" placeholder="" name="nkh_umur_s" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 label-control" for="nkh_status_s"><?= $question[8]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                        <div class="col-md-9">
                            <select id="nkh_status_s" name="nkh_status_s" class="form-control required" required>
                                <option value="0" selected="" disabled="">Pilih salah satu</option>
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
                            <input type="text" id="nkh_agama_s" class="form-control required" placeholder="" name="nkh_agama_s" value="Islam" <?= $question[9]->IS_READONLY; ?> required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 label-control" for="nkh_alamat_s"><?= $question[10]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                        <div class="col-md-9">
                            <input type="text" id="nkh_alamat_s" class="form-control required" placeholder="" name="nkh_alamat_s" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 label-control" for="nkh_pekerjaan_s"><?= $question[11]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                        <div class="col-md-9">
                            <input type="text" style="width: 100%" id="nkh_pekerjaan_s" class="select2 job form-control required" placeholder="" name="nkh_pekerjaan_s" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 label-control" for="nkh_nohp_s"><?= $question[12]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                        <div class="col-md-9">
                            <input type="text" id="nkh_nohp_s" class="form-control required" placeholder="" name="nkh_nohp_s" required>
                        </div>
                    </div>
                    <!-- END DETAIL CALON SUAMI -->

                    <!-- DATA DETAIL CALON ISTRI -->
                    <div class="form-group row">
                        <div class="col-md-12">
                            <div class="card text-white box-shadow-0 bg-success">
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <p class="card-text"><i class="icon-symbol-female"></i>&nbsp; DATA CALON ISTRI</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 label-control" for="nkh_kewarganegaraan_i"><?= $question[14]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                        <div class="col-md-9">
                            <select id="nkh_kewarganegaraan_i" name="nkh_kewarganegaraan_i" class="form-control required" required>
                                <option value="0" selected="" disabled="">Pilih salah satu</option>
                                <option value="WNI">WNI</option>
                                <option value="WNA">WNA</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 label-control" for="nkh_nik_i"><?= $question[15]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                        <div class="col-md-7">
                            <input type="text" id="nkh_nik_i" class="form-control required" placeholder="" name="nkh_nik_i" required>
                        </div>
                        <div class="col-md-2">
                            <input type="button" class="btn btn-info btn-min-width" value="Cek NIK" id="nkh_btnceknik_i" style="margin-left: -20px;">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 label-control" for="nkh_nama_i"><?= $question[16]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                        <div class="col-md-9">
                            <input type="text" id="nkh_nama_i" class="form-control required" placeholder="" name="nkh_nama_i" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 label-control" for="nkh_ttl_i"><?= $question[17]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                        <div class="col-md-5">
                            <input type="text" id="nkh_ttl_i" class="form-control required" placeholder="" name="nkh_ttl_i" required>
                        </div>
                        <div class="col-md-4">
                            <div class="position-relative has-icon-left">
                                <input type="text" id="nkh_ttl2_i" class="form-control required" name="nkh_ttl2_i" required>
                                <div class="form-control-position">
                                    <i class="ft-calendar"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 label-control" for="nkh_umur_i"><?= $question[18]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                        <div class="col-md-9">
                            <input type="text" id="nkh_umur_i" class="form-control required" placeholder="" name="nkh_umur_i" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 label-control" for="nkh_status_i"><?= $question[19]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                        <div class="col-md-9">
                            <select id="nkh_status_i" name="nkh_status_i" class="form-control required" required>
                                <option value="0" selected="" disabled="">Pilih salah satu</option>
                                <option value="perawan">Perawan</option>
                                <option value="ceraimati">Cerai Mati</option>
                                <option value="ceraihidup">Cerai Hidup</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 label-control" for="nkh_agama_i"><?= $question[20]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                        <div class="col-md-9">
                            <input type="text" id="nkh_agama_i" class="form-control required" placeholder="" name="nkh_agama_i" value="Islam" <?= $question[20]->IS_READONLY; ?> required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 label-control" for="nkh_alamat_i"><?= $question[21]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                        <div class="col-md-9">
                            <input type="text" id="nkh_alamat_i" class="form-control required" placeholder="" name="nkh_alamat_i" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 label-control" for="nkh_pekerjaan_i"><?= $question[22]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                        <div class="col-md-9">
                            <input type="text" style="width: 100%" id="nkh_pekerjaan_i" class="select2 job form-control required" placeholder="" name="nkh_pekerjaan_i" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 label-control" for="nkh_nohp_i"><?= $question[23]->QUESTION_LABEL ?> <span class="danger">*</span></label>
                        <div class="col-md-9">
                            <input type="text" id="nkh_nohp_i" class="form-control required" placeholder="" name="nkh_nohp_i" required>
                        </div>
                    </div>
                    <!-- END DETAIL CALON ISTRI -->
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" id="btnSave" class="btn btn-success">Simpan</button>
            </div>
        </div>
    </div>
</div>

<script>
    var numberLength = 0;
    var listAkad = <?= json_encode($listDateAkad); ?>;

    $(function() {
        showDataPernikahan();

        $(document).ready(function() {
            $('#dataTablePernikahan').DataTable({
                "lengthMenu": [
                    [5, 10, 25, 50, -1],
                    [5, 10, 25, 50, "All"]
                ]
            });

        });

        $('#btnSave').click(function() {
            var url = $('#formAddEditPernikahan').attr('action');
            var data = $('#formAddEditPernikahan').serialize();
            $.ajax({
                type: 'ajax',
                method: 'post',
                url: url,
                data: data,
                async: false,
                dataType: 'json',
                success: function(response) {
                    if (response.success) {
                        $('#modalPernikahan').modal('hide');
                        $('#formAddEditPernikahan')[0].reset();
                        if (response.type == 'add') {
                            type = 'ditambahkan'
                        } else if (response.type == 'update') {
                            type = 'diubah'
                        }
                        swal("Selamat!", "Data calon pengantin berhasil " + type + "!", "success");
                        showDataPernikahan();
                    } else {
                        swal("Error!", "Internal Server error 500!", "error");
                    }
                },
                error: function() {
                    swal("Error!", "Gagal menambahkan data calon pengantin!", "error");
                }
            });
        });

        //ADD CALON PENGANTIN
        $('#btnAdd').click(function() {
            $('#nkh_btnceknik_s').show();
            $('#nkh_btnceknik_i').show();
            //header
            $('select[name=nkh_tempat]').val('0');
            $('select[name=nkh_tempat]').removeAttr('disabled');
            $('input[name=nkh_tanggal_akad]').removeAttr('readonly');
            $('input[name=nkh_jam_akad]').removeAttr('readonly');
            $('input[name=nkh_alamat_akad]').removeAttr('readonly');

            //suami
            $('select[name=nkh_kewarganegaraan_s]').val('0');
            $('select[name=nkh_kewarganegaraan_s]').removeAttr('readonly');
            $('input[name=nkh_nik_s]').removeAttr('readonly');
            $('input[name=nkh_nama_s]').removeAttr('readonly');
            $('input[name=nkh_ttl_s]').removeAttr('readonly');
            $('input[name=nkh_ttl2_s]').removeAttr('readonly');
            $('input[name=nkh_umur_s]').removeAttr('readonly');
            $('select[name=nkh_status_s]').val('0');
            $('select[name=nkh_status_s]').removeAttr('readonly');
            $('input[name=nkh_agama_s]').val('');
            $('input[name=nkh_agama_s]').removeAttr('readonly');
            $('input[name=nkh_alamat_s]').removeAttr('readonly');
            $('input[name=nkh_pekerjaan_s]').val(null).trigger('change');
            $('input[name=nkh_pekerjaan_s]').removeAttr('readonly');
            $('input[name=nkh_nohp_s]').removeAttr('readonly');

            //istri
            $('select[name=nkh_kewarganegaraan_i]').val('0');
            $('select[name=nkh_kewarganegaraan_i]').removeAttr('readonly');
            $('input[name=nkh_nik_i]').removeAttr('readonly');
            $('input[name=nkh_nama_i]').removeAttr('readonly');
            $('input[name=nkh_ttl_i]').removeAttr('readonly');
            $('input[name=nkh_ttl2_i]').removeAttr('readonly');
            $('input[name=nkh_umur_i]').removeAttr('readonly');
            $('select[name=nkh_status_i]').val('0');
            $('select[name=nkh_status_i]').removeAttr('readonly');
            $('input[name=nkh_agama_i]').val('');
            $('input[name=nkh_agama_i]').removeAttr('readonly');
            $('input[name=nkh_alamat_i]').removeAttr('readonly');
            $('input[name=nkh_pekerjaan_i]').val(null).trigger('change');
            $('input[name=nkh_pekerjaan_i]').removeAttr('readonly');
            $('input[name=nkh_nohp_i]').removeAttr('readonly');
            $('#btnSave').show();
            $('#modalPernikahan').find('.modal-title').text('TAMBAH CALON PENGANTIN');
            $('#formAddEditPernikahan').attr('action', '<?= BASE_URL . 'staff/submitRegistration/NikahByOfficer^add^0'; ?>');
            $('#formAddEditPernikahan')[0].reset();
        });

        //EDIT DATA PERNIKAHAN
        $('#showDataPernikahan').on('click', '.editDataNikah', function() {
            var regId = $(this).attr('data');
            $('#btnSave').show();
            $('#nkh_btnceknik_s').show();
            $('#nkh_btnceknik_i').show();
            $('#modalPernikahan').modal('show');
            $('#modalPernikahan').find('.modal-title').text('UBAH DATA CALON PENGANTIN');
            $('#formAddEditPernikahan').attr('action', '<?= BASE_URL . 'staff/submitRegistration/NikahByOfficer^update^' ?>' + regId);
            $.ajax({
                type: 'ajax',
                method: 'post',
                url: '<?= BASE_URL . 'staff/getDetailPernikahan'; ?>',
                data: {
                    regId: regId
                },
                async: false,
                dataType: 'json',
                success: function(data) {
                    for (i = 0; i < data.length; i++) {
                        //header
                        $('select[name=nkh_tempat]').attr('disabled', true);
                        $('input[name=nkh_tanggal_akad]').removeAttr('readonly');
                        $('input[name=nkh_jam_akad]').removeAttr('readonly');
                        $('input[name=nkh_alamat_akad]').removeAttr('readonly');

                        //suami
                        $('select[name=nkh_kewarganegaraan_s]').removeAttr('readonly');
                        $('input[name=nkh_nik_s]').removeAttr('readonly');
                        $('input[name=nkh_nama_s]').removeAttr('readonly');
                        $('input[name=nkh_ttl_s]').removeAttr('readonly');
                        $('input[name=nkh_ttl2_s]').removeAttr('readonly');
                        $('input[name=nkh_umur_s]').removeAttr('readonly');
                        $('select[name=nkh_status_s]').removeAttr('readonly');
                        $('input[name=nkh_agama_s]').removeAttr('readonly');
                        $('input[name=nkh_alamat_s]').removeAttr('readonly');
                        $('input[name=nkh_pekerjaan_s]').removeAttr('readonly');
                        $('input[name=nkh_nohp_s]').removeAttr('readonly');

                        //istri
                        $('select[name=nkh_kewarganegaraan_i]').removeAttr('readonly');
                        $('input[name=nkh_nik_i]').removeAttr('readonly');
                        $('input[name=nkh_nama_i]').removeAttr('readonly');
                        $('input[name=nkh_ttl_i]').removeAttr('readonly');
                        $('input[name=nkh_ttl2_i]').removeAttr('readonly');
                        $('input[name=nkh_umur_i]').removeAttr('readonly');
                        $('select[name=nkh_status_i]').removeAttr('readonly');
                        $('input[name=nkh_agama_i]').removeAttr('readonly');
                        $('input[name=nkh_alamat_i]').removeAttr('readonly');
                        $('input[name=nkh_pekerjaan_i]').removeAttr('readonly');
                        $('input[name=nkh_nohp_i]').removeAttr('readonly');

                        //header
                        $('select[name=nkh_tempat]').val(data[i].TMP_NIKAH);
                        $('#nkh_tempat_edit').val(data[i].TMP_NIKAH);
                        var objTgl = data[i].TGL_AKAD;
                        var tgl = objTgl.split(' ');
                        $('input[name=nkh_tanggal_akad]').val(tgl[0]);
                        $('input[name=nkh_jam_akad]').val(tgl[1]);
                        $('input[name=nkh_alamat_akad]').val(data[i].ALMT_AKAD);

                        //suami
                        $('select[name=nkh_kewarganegaraan_s]').val(data[i].KEWARGANEGARAAN_S);
                        $('input[name=nkh_nik_s]').val(data[i].NIK_CAL_S);
                        $('input[name=nkh_nama_s]').val(data[i].NAMA_CAL_S);
                        var objTtl = data[i].TTL_S;
                        var ttl = objTtl.split(' ');
                        $('input[name=nkh_ttl_s]').val(ttl[0].substr(0, ttl[0].length - 1));
                        $('input[name=nkh_ttl2_s]').val(ttl[1]);
                        $('input[name=nkh_umur_s]').val(data[i].UMUR_S);
                        $('select[name=nkh_status_s]').val(data[i].STATUS_CAL_S);
                        $('input[name=nkh_agama_s]').val(data[i].AGAMA_S);
                        $('input[name=nkh_alamat_s]').val(data[i].ALMT_S);
                        $('input[name=nkh_pekerjaan_s]').val(data[i].PEKERJAAN_S).trigger('change');
                        $('input[name=nkh_nohp_s]').val(data[i].NO_HP_S);

                        //istri
                        $('select[name=nkh_kewarganegaraan_i]').val(data[i].KEWARGANEGARAAN_I);
                        $('input[name=nkh_nik_i]').val(data[i].NIK_CAL_I);
                        $('input[name=nkh_nama_i]').val(data[i].NAMA_CAL_I);
                        var objTtl = data[i].TTL_I;
                        var ttl = objTtl.split(' ');
                        $('input[name=nkh_ttl_i]').val(ttl[0].substr(0, ttl[0].length - 1));
                        $('input[name=nkh_ttl2_i]').val(ttl[1]);
                        $('input[name=nkh_umur_i]').val(data[i].UMUR_I);
                        $('select[name=nkh_status_i]').val(data[i].STATUS_CAL_I);
                        $('input[name=nkh_agama_i]').val(data[i].AGAMA_I);
                        $('input[name=nkh_alamat_i]').val(data[i].ALMT_I);
                        $('input[name=nkh_pekerjaan_i]').val(data[i].PEKERJAAN_I).trigger('change');
                        $('input[name=nkh_nohp_i]').val(data[i].NO_HP_I);
                    }
                },
                error: function() {
                    swal("Error!", "Internal Server error 500!", "error");
                }
            });
        });

        //VIEW PERNIKAHAN
        $('#showDataPernikahan').on('click', '.viewDetailNikah', function() {
            var regId = $(this).attr('data');
            $('#nkh_btnceknik_s').hide();
            $('#nkh_btnceknik_i').hide();
            $('#modalPernikahan').modal('show');
            $('#modalPernikahan').find('.modal-title').text('LIHAT DATA PERNIKAHAN');
            $('#btnSave').hide();
            $.ajax({
                type: 'ajax',
                method: 'post',
                url: '<?= BASE_URL . 'staff/getDetailPernikahan'; ?>',
                data: {
                    regId: regId
                },
                async: false,
                dataType: 'json',
                success: function(data) {
                    for (i = 0; i < data.length; i++) {
                        //header
                        $('select[name=nkh_tempat]').attr('disabled', true);
                        $('select[name=nkh_tempat]').val(data[i].TMP_NIKAH);
                        var objTgl = data[i].TGL_AKAD;
                        var tgl = objTgl.split(' ');
                        $('input[name=nkh_tanggal_akad]').attr('readonly', true);
                        $('input[name=nkh_tanggal_akad]').val(tgl[0]);
                        $('input[name=nkh_jam_akad]').attr('readonly', true);
                        $('input[name=nkh_jam_akad]').val(tgl[1]);
                        $('input[name=nkh_alamat_akad]').attr('readonly', true);
                        $('input[name=nkh_alamat_akad]').val(data[i].ALMT_AKAD);

                        //suami
                        $('select[name=nkh_kewarganegaraan_s]').attr('readonly', true);
                        $('select[name=nkh_kewarganegaraan_s]').val(data[i].KEWARGANEGARAAN_S);
                        $('input[name=nkh_nik_s]').attr('readonly', true);
                        $('input[name=nkh_nik_s]').val(data[i].NIK_CAL_S);
                        $('input[name=nkh_nama_s]').attr('readonly', true);
                        $('input[name=nkh_nama_s]').val(data[i].NAMA_CAL_S);
                        var objTtl = data[i].TTL_S;
                        var ttl = objTtl.split(' ');
                        $('input[name=nkh_ttl_s]').attr('readonly', true);
                        $('input[name=nkh_ttl_s]').val(ttl[0].substr(0, ttl[0].length - 1));
                        $('input[name=nkh_ttl2_s]').attr('readonly', true);
                        $('input[name=nkh_ttl2_s]').val(ttl[1]);
                        $('input[name=nkh_umur_s]').attr('readonly', true);
                        $('input[name=nkh_umur_s]').val(data[i].UMUR_S);
                        $('select[name=nkh_status_s]').attr('readonly', true);
                        $('select[name=nkh_status_s]').val(data[i].STATUS_CAL_S);
                        $('input[name=nkh_agama_s]').attr('readonly', true);
                        $('input[name=nkh_agama_s]').val(data[i].AGAMA_S);
                        $('input[name=nkh_alamat_s]').attr('readonly', true);
                        $('input[name=nkh_alamat_s]').val(data[i].ALMT_S);
                        $('input[name=nkh_pekerjaan_s]').attr('readonly', true);
                        $('input[name=nkh_pekerjaan_s]').val(data[i].PEKERJAAN_S).trigger('change');
                        $('input[name=nkh_nohp_s]').attr('readonly', true);
                        $('input[name=nkh_nohp_s]').val(data[i].NO_HP_S);

                        //istri
                        $('select[name=nkh_kewarganegaraan_i]').attr('readonly', true);
                        $('select[name=nkh_kewarganegaraan_i]').val(data[i].KEWARGANEGARAAN_I);
                        $('input[name=nkh_nik_i]').attr('readonly', true);
                        $('input[name=nkh_nik_i]').val(data[i].NIK_CAL_I);
                        $('input[name=nkh_nama_i]').attr('readonly', true);
                        $('input[name=nkh_nama_i]').val(data[i].NAMA_CAL_I);
                        var objTtl = data[i].TTL_I;
                        var ttl = objTtl.split(' ');
                        $('input[name=nkh_ttl_i]').attr('readonly', true);
                        $('input[name=nkh_ttl_i]').val(ttl[0].substr(0, ttl[0].length - 1));
                        $('input[name=nkh_ttl2_i]').attr('readonly', true);
                        $('input[name=nkh_ttl2_i]').val(ttl[1]);
                        $('input[name=nkh_umur_i]').attr('readonly', true);
                        $('input[name=nkh_umur_i]').val(data[i].UMUR_I);
                        $('select[name=nkh_status_i]').attr('readonly', true);
                        $('select[name=nkh_status_i]').val(data[i].STATUS_CAL_I);
                        $('input[name=nkh_agama_i]').attr('readonly', true);
                        $('input[name=nkh_agama_i]').val(data[i].AGAMA_I);
                        $('input[name=nkh_alamat_i]').attr('readonly', true);
                        $('input[name=nkh_alamat_i]').val(data[i].ALMT_I);
                        $('input[name=nkh_pekerjaan_i]').attr('readonly', true);
                        $('input[name=nkh_pekerjaan_i]').val(data[i].PEKERJAAN_I).trigger('change');
                        $('input[name=nkh_nohp_i]').attr('readonly', true);
                        $('input[name=nkh_nohp_i]').val(data[i].NO_HP_I);
                    }
                },
                error: function() {
                    swal("Error!", "Internal Server error 500!", "error");
                }
            });
        });

        //DELETE PERNIKAHAN
        $('#showDataPernikahan').on('click', '.deleteDataNikah', function() {
            var regId = $(this).attr('data');
            swal({
                title: 'Apakah anda yakin ingin menghapus data ini?',
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
                        url: '<?= BASE_URL . 'staff/deletePernikahan/'; ?>',
                        data: {
                            regId: regId
                        },
                        async: false,
                        dataType: 'json',
                        success: function(response) {
                            if (response.success) {
                                swal("Selamat!", "Data pernikahan berhasil dihapus!", "success");
                                showDataPernikahan();
                            } else {
                                swal("Error!", "Gagal Hapus data!", "error");
                            }
                        },
                        error: function() {
                            swal("Error!", "Internal Server error 500!", "error");
                        }
                    });
                }
            });
        });

        //SHOW DATA PERNIKAHAN
        function showDataPernikahan() {
            $.ajax({
                type: 'ajax',
                method: 'post',
                url: '<?= BASE_URL . 'staff/showDataPernikahan'; ?>',
                async: false,
                dataType: 'json',
                success: function(data) {
                    var html = '';
                    var i;
                    for (i = 0; i < data.length; i++) {
                        html += '<tr>' +
                            '<td scope="col" style="width: 2%;">' + (i + 1) + '</td>' +
                            '<td scope="col" style="width: 5%;">' + data[i].TGL_DAFTAR + '</td>' +
                            '<td scope="col" style="width: 5%;">' + data[i].TGL_AKAD + '</td>' +
                            '<td scope="col" style="width: 10%;">' + data[i].ALMT_AKAD + '</td>' +
                            '<td scope="col" style="width: 10%;">' + data[i].NAMA_CAL_S + '</td>' +
                            '<td scope="col" style="width: 10%;">';
                        if (data[i].STATUS_DESC == 'Ditolak') {
                            html += data[i].STATUS_DESC + '</td>' +
                                '<td scope="col" style="width: 10%;">-</td>';
                        } else {
                            if (data[i].SCHEDULE == null || data[i].SCHEDULE == '') {
                                html += '<a href="<?= BASE_URL . 'jadwal/aturjadwal/'; ?>' + data[i].REG_CODE.replace(/\//g, "~") + '^' + data[i].NAMA_CAL_S + '^' + data[i].FORM_NAME + '" class="btn btn-sm round btn-info mr-1" data-toggle="tooltip" data-placement="bottom" title="Jadwalkan" data="' + data[i].REG_CODE + '^' + data[i].NAMA_CAL_S + '">Jadwalkan</a>' +
                                    '<td scope="col" style="width: 10%;">-</td>';
                            } else {
                                // if (data[i].VERIFIED_DATE != null && data[i].VERIFIED_DATE != '') {
                                html += data[i].STATUS_DESC + '</td>' +
                                    '<td scope="col" style="width: 10%;">' + data[i].SCHEDULE + '</td>';
                                // } else {
                                //     html += data[i].STATUS_DESC + '</td>' +
                                //         '<td scope="col" style="width: 10%;">' + data[i].SCHEDULE + '</td>';
                                // }
                            }
                        }
                        html += '<td scope="col" style="width: 50%">' +
                            '<a href="javascript:;" class="btn round btn-sm btn-icon btn-info viewDetailNikah" style="margin-left:5px;" data-toggle="tooltip" data-placement="bottom" title="LIhat Detail" data="' + data[i].REG_ID + '"><i class="ft-eye"></i></a>' +
                            '<a href="javascript:;" class="btn round btn-sm btn-icon btn-warning editDataNikah" style="margin-left:5px;" data-toggle="tooltip" data-placement="bottom" title="Edit" data="' + data[i].REG_ID + '"><i class="ft-edit-2"></i></a>' +
                            '<a href="javascript:;" class="btn round btn-sm btn-icon btn-danger deleteDataNikah" style="margin-left:5px;" data-toggle="tooltip" data-placement="bottom" title="Hapus" data="' + data[i].REG_ID + '"><i class="ft-x"></i></a>' +
                            '</td>' +
                            '</tr>';
                    }
                    $('#showDataPernikahan').html(html);
                    $('[data-toggle="tooltip"]').tooltip();
                },
                error: function() {
                    swal("Error!", "Gagal memuat data dari database!", "error");
                }
            });
        }

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
            minDate: tomorrow,
            disabledDates: listAkad
        });

        $('#nkh_jam_akad').datetimepicker({
            locale: 'id',
            format: 'HH:mm:ss'
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
                swal("Error!", "Internal Server error 500!", "error");
            }
        });

        $("#nkh_pekerjaan_" + actor).select2({
            data: data,
            placeholder: "Pilih salah satu",
        });
    }

    function getKewarganegaraan(element, actor) {
        if ('WNI' == element) {
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
            $('#nkh_nama_' + actor).val(response.NAMA);
            $('#nkh_ttl_' + actor).val(response.TEMPAT_LAHIR);
            $('#nkh_ttl2_' + actor).val(day + '-' + month + '-' + year);
            $('#nkh_umur_' + actor).val(umur);
            $('#nkh_agama_' + actor).val(response.AGAMA);
            $('#nkh_alamat_' + actor).val(alamat);
            $('#nkh_pekerjaan_' + actor).val(response.PEKERJAAN);
            $('#nkh_pekerjaan_' + actor).trigger('change');
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