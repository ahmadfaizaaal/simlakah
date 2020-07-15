<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
            <div class="content-header-left col-md-4 col-12 mb-2">
                <h2 class="content-header-title">VALIDASI BERKAS</h>
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
                                <h4 class="card-title">Data Pendaftaran</h4>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <!-- <div class="alert alert-success" style="display: none;" role="alert"></div> -->
                                    <table class="table table-striped table-responsive" id="dataTableValidasi">
                                        <thead>
                                            <tr>
                                                <th scope="col" style="width: 2%;">No.</th>
                                                <th scope="col" style="width: 5%;">NIK Calon Suami</th>
                                                <th scope="col" style="width: 10%;">Nama Calon Suami</th>
                                                <th scope="col" style="width: 5%;">Umur(tahun)</th>
                                                <th scope="col" style="width: 10%;">Pekerjaan</th>
                                                <th scope="col" style="width: 5%;">NIK Calon Istri</th>
                                                <th scope="col" style="width: 10%;">Nama Calon Istri</th>
                                                <th scope="col" style="width: 5%;">Umur(tahun)</th>
                                                <th scope="col" style="width: 5%;">Pekerjaan</th>
                                                <th scope="col" style="width: 5%;">Jenis Pendaftaran</th>
                                                <th scope="col" style="width: 5%;">Berkas</th>
                                                <th scope="col" style="width: 5%;">Lokasi Akad</th>
                                                <th scope="col" style="width: 5%;">Status Pendaftaran</th>
                                                <th scope="col" style="width: 40%">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="showDataRegistrasi">

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
<div class="modal fade" id="modalViewBerkas" tabindex="-1" role="dialog" aria-labelledby="modalViewBerkasLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalViewBerkasLabel"><strong>BERKAS PENDAFTARAN</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- <div class="alert my-alert" style="display: none;"></div> -->
                <input type="hidden" name="regId" value="0">
                <div class="form-group row">
                    <label for="regCode" class="label-control col-md-4">Kode Registrasi</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="regCode" name="regCode" value="" disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="regType" class="label-control col-md-4">Jenis Pendaftaran</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="regType" name="regType" value="" disabled>
                    </div>
                </div>
                <br>
                <table class="table table-striped table-responsive" id="dataBerkas">
                    <thead>
                        <tr>
                            <th scope="col" style="width: 2%;">No.</th>
                            <th scope="col" style="width: 58%;">Nama Dokumen</th>
                            <th scope="col" style="width: 20%;">Untuk Suami</th>
                            <th scope="col" style="width: 20%;">Untuk Istri</th>
                        </tr>
                    </thead>
                    <tbody id="showFiles">

                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL IMAGE -->
<div class="modal fade" id="modalImg" tabindex="-1" role="dialog" aria-labelledby="modalImgLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalImgLabel"><strong>BERKAS PENDAFTARAN</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <img src="" alt="" id="docImage" style="width: 90%;">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(function() {
        showDataRegistration();

        $(document).ready(function() {
            $('#dataTableValidasi').DataTable({
                "lengthMenu": [
                    [5, 10, 25, 50, -1],
                    [5, 10, 25, 50, "All"]
                ]
            });
        });

        // $('#btnSave').click(function() {
        //     var url = $('#formAddEditProject').attr('action');
        //     var data = $('#formAddEditProject').serialize();
        //     //validate form
        //     var projectName = $('input[name=projectName]');
        //     var projectNickname = $('input[name=projectNickname]');
        //     var projectDesc = $('textarea[name=projectDesc]');
        //     var projectStatus = $('#projectStatus').val();
        //     var clientCompany = $('input[name=clientCompany]');
        //     var result = '';

        //     if (projectName.val() != '' && projectNickname.val() != '' && projectDesc.val() != '' && clientCompany.val() != '') {
        //         $.ajax({
        //             type: 'ajax',
        //             method: 'post',
        //             url: url,
        //             data: data,
        //             async: false,
        //             dataType: 'json',
        //             success: function(response) {
        //                 if (response.success) {
        //                     var type = '';
        //                     $('#modalViewBerkas').modal('hide');
        //                     $('#formAddEditProject')[0].reset();
        //                     if (response.type == 'add') {
        //                         type = 'created'
        //                     } else if (response.type == 'update') {
        //                         type = 'updated'
        //                     }
        //                     $('.alert-success').html('The project has been ' + type + ' successfully!').fadeIn().delay(1500).fadeOut('slow');
        //                     showAllProject();
        //                 } else {
        //                     alert('Error');
        //                 }
        //             },
        //             error: function() {
        //                 alert('Could not add data');
        //             }
        //         });
        //     } else {
        //         $('.my-alert').addClass('alert-danger');
        //         $('.my-alert').html('All fields is required!').fadeIn().delay(1500).fadeOut('slow');
        //     }
        // });

        //VIEW BERKAS
        $('#showDataRegistrasi').on('click', '.viewBerkas', function() {
            var param = $(this).attr('data');
            $('#modalViewBerkas').modal('show');
            // $('#modalViewBerkas').find('.modal-title').text('Berkas Pendaftaran');
            $.ajax({
                type: 'ajax',
                method: 'post',
                url: '<?= BASE_URL . 'staff/getRegistrationFiles'; ?>',
                data: {
                    param: param
                },
                async: false,
                dataType: 'json',
                success: function(data) {
                    $('input[name=regId]').val(param.split('^')[0]);
                    $('input[name=regCode]').val(data[0].REG_CODE);
                    $('input[name=regType]').val(data[0].FORM_NAME);

                    var html = '';
                    var idx = 1;
                    for (i = 0; i < data.length; i++) {
                        html += '<tr>' +
                            '<th scope="row" style="width: 2%;">' + idx + '</th>' +
                            '<td style="width: 58%;">' + data[i].QUESTION_LABEL + '</td>' +
                            '<td style="width: 20%;">' +
                            '<a href="javascript:;" class="btn btn-sm btn-icon round btn-info mr-1 imgModalA" data-toggle="tooltip" data-placement="bottom" title="Tampilkan" data="' + data[i].QUESTION_LABEL + '^' + data[i].ANSWER + '"><i class="ft-eye"></i> Lihat</a>' +
                            '</td>';
                        var nextIdx = i + 1;
                        if (data[i].QUESTION_LABEL == data[nextIdx].QUESTION_LABEL) {
                            html += '<td style="width: 20%;">' +
                                '<a href="javascript:;" class="btn btn-sm btn-icon round btn-info mr-1 imgModalB" data-toggle="tooltip" data-placement="bottom" title="Tampilkan" data="' + data[nextIdx].QUESTION_LABEL + '^' + data[nextIdx].ANSWER + '"><i class="ft-eye"></i> Lihat</a>' +
                                '</td></tr>';
                            i++;
                        } else {
                            html += '<td style="width: 20%;"></td></tr>';
                        }
                        idx++;
                    }
                    $('#showFiles').html(html);
                    $('[data-toggle="tooltip"]').tooltip();
                },
                error: function() {
                    swal("Error!", "Gagal memuat data!", "error");
                }
            });
        });

        //VIEW IMAGE LEFT
        $('#showFiles').on('click', '.imgModalA', function() {
            var param = $(this).attr('data');
            var obj = param.split('^');
            var img = obj[1].split('_');
            var imgPath = img[0];
            $('#docImage').attr('src', '<?= BASE_THEME . 'registration/'; ?>' + imgPath + '/' + obj[1]);
            $('#modalImg').modal('show');
            $('#modalImg').find('.modal-title').text(obj[0].toUpperCase());
        });

        //VIEW IMAGE RIGHT
        $('#showFiles').on('click', '.imgModalB', function() {
            var param = $(this).attr('data');
            var obj = param.split('^');
            var img = obj[1].split('_');
            var imgPath = img[0];
            $('#docImage').attr('src', '<?= BASE_THEME . 'registration/'; ?>' + imgPath + '/' + obj[1]);
            $('#modalImg').modal('show');
            $('#modalImg').find('.modal-title').text(obj[0].toUpperCase());
        });

        //VALIDATE DATA
        $('#showDataRegistrasi').on('click', '.validate', function() {
            var data = $(this).attr('data');
            var param = data.split('^');
            var regId = param[0];
            var lokasiAkad = param[1];
            var formName = param[2];
            swal({
                title: 'Apakah anda yakin data sudah sesuai?',
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
                        url: '<?= BASE_URL . 'registration/validateRegistration/'; ?>',
                        data: {
                            regId: regId,
                            lokasiAkad: lokasiAkad,
                            formName: formName
                        },
                        async: false,
                        dataType: 'json',
                        success: function(response) {
                            if (response.success) {
                                swal("Selamat!", "Data berhasil diperbarui!", "success");
                                showDataRegistration();
                            } else {
                                swal("Error!", "Proses validasi data gagal!", "error");
                            }
                        },
                        error: function() {
                            swal("Error!", "Internal Server error 500!", "error");
                        }
                    });
                }
            });
        });

        //REJECT DATA
        $('#showDataRegistrasi').on('click', '.reject', function() {
            var regId = $(this).attr('data');
            swal({
                title: 'Apakah anda yakin?',
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
                        url: '<?= BASE_URL . 'registration/rejectRegistration/'; ?>',
                        data: {
                            regId: regId
                        },
                        async: false,
                        dataType: 'json',
                        success: function(response) {
                            if (response.success) {
                                swal("Selamat!", "Data berhasil diperbarui!", "success");
                                showDataRegistration();
                            } else {
                                swal("Error!", "Proses rejecting data gagal!", "error");
                            }
                        },
                        error: function() {
                            swal("Error!", "Internal Server error 500!", "error");
                        }
                    });
                }
            });
        });

        //SHOW DATA REGISTRATION
        function showDataRegistration() {
            $.ajax({
                type: 'ajax',
                method: 'post',
                url: '<?= BASE_URL . 'staff/showDataRegistration'; ?>',
                async: false,
                dataType: 'json',
                success: function(data) {
                    var html = '';
                    var i;
                    var lokasiAkad;
                    for (i = 0; i < data.length; i++) {
                        if (data[i].TMP_NIKAH == null) {
                            lokasiAkad = '-';
                        } else {
                            lokasiAkad = data[i].TMP_NIKAH;
                        }

                        html += '<tr>' +
                            '<th scope="row" style="width: 2%;">' + (i + 1) + '</th>' +
                            '<td style="width: 5%;">' + (data[i].FORM_NAME == 'Nikah' ? data[i].NIK_CAL_S : data[i].NIK_S) + '</td>' +
                            '<td style="width: 10%;">' + (data[i].FORM_NAME == 'Nikah' ? data[i].NAMA_CAL_S : data[i].NAMA_S) + '</td>' +
                            '<td style="width: 5%;">' + data[i].UMUR_S + '</td>' +
                            '<td style="width: 10%;">' + data[i].PEKERJAAN_S + '</td>' +
                            '<td style="width: 5%;">' + (data[i].FORM_NAME == 'Nikah' ? data[i].NIK_CAL_I : data[i].NIK_I) + '</td>' +
                            '<td style="width: 10%;">' + (data[i].FORM_NAME == 'Nikah' ? data[i].NAMA_CAL_I : data[i].NAMA_I) + '</td>' +
                            '<td style="width: 5%;">' + data[i].UMUR_I + '</td>' +
                            '<td style="width: 5%;">' + data[i].PEKERJAAN_I + '</td>' +
                            '<td style="width: 5%;">' + data[i].FORM_NAME + '</td>' +
                            '<td style="width: 5%;">' +
                            '<a href="javascript:;" class="btn btn-sm btn-icon round btn-info mr-1 viewBerkas" data-toggle="tooltip" data-placement="bottom" title="Lihat Berkas" data="' + data[i].REG_ID + '^' + data[i].FORM_NAME + '"><i class="ft-eye"></i></a>' +
                            '</td>' +
                            '<td style="width: 5%;">' + lokasiAkad + '</td>' +
                            '<td style="width: 5%;">' + data[i].STATUS_DESC + '</td>' +
                            '<td style="width: 40%;">';

                        if (data[i].STATUS_CODE == 'P') {
                            html += '<a href="javascript:;" class="btn btn-sm round btn-success mr-1 validate" data-toggle="tooltip" data-placement="bottom" title="Valid" data="' + data[i].REG_ID + '^' + lokasiAkad + '^' + data[i].FORM_NAME + '" style="margin-left:5px;">Valid</a>' +
                                '<a href="javascript:;" class="btn btn-sm round btn-danger mr-1 reject" data-toggle="tooltip" data-placement="bottom" title="Tolak" data="' + data[i].REG_ID + '" style="margin-left:5px;">Tolak</a>';
                        } else if (data[i].STATUS_CODE == 'PC') {
                            if (lokasiAkad == 'KUA') {
                                html += '-';
                            } else {
                                html += '<a href="<?= BASE_URL . 'registration/sendPaymentCode/'; ?>' + data[i].REG_ID + '" class="btn btn-sm round btn-info mr-1" data-toggle="tooltip" data-placement="bottom" title="Kirim kode bayar">Kirim kode bayar</a>';
                            }
                        }
                        // else if (data[i].STATUS_CODE == 'R') {
                        //     html += '-';
                        // }

                        html += '</td>' +
                            '</tr>';
                    }
                    $('#showDataRegistrasi').html(html);
                    $('[data-toggle="tooltip"]').tooltip();
                },
                error: function() {
                    swal("Error!", "Could not get Data from Database!", "error");
                }
            });
        }
    });
</script>