<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
            <div class="content-header-left col-md-4 col-12 mb-2">
                <h2 class="content-header-title">PENGHULU</h>
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
                                    <a href="javascript::" id="btnAdd" class="btn btn-icon btn-success mb-0" data-toggle="modal" data-target="#modalPenghulu"><i class="ft-user-plus"></i> &nbsp;Tambah Penghulu</a>
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

                                    <table class="table table-striped table-responsive" id="dataTablePenghulu">
                                        <thead>
                                            <tr>
                                                <th scope="col" style="width: 2%;">No.</th>
                                                <th scope="col" style="width: 13%;">NIP</th>
                                                <th scope="col" style="width: 25%;">Nama Penghulu</th>
                                                <th scope="col" style="width: 20%;">Alamat</th>
                                                <th scope="col" style="width: 5%;">No.Telp</th>
                                                <th scope="col" style="width: 40%">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="showDataPenghulu">

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

<!-- MODAL PENGHULU -->
<div class="modal fade" id="modalPenghulu" tabindex="-1" role="dialog" aria-labelledby="modalPenghuluLabel" aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalPenghuluLabel"><strong>TAMBAH DATA PENGHULU</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- <div class="alert my-alert" style="display: none;"></div> -->
                <form action="<?= BASE_URL . 'staff/addPenghulu' ?>" method="post" id="formAddEditPenghulu">
                    <input type="hidden" name="offId" value="0">
                    <div class="form-group row">
                        <label for="nip" class="label-control col-md-4">NIP</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="nip" name="nip" value="" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama" class="label-control col-md-4">Nama</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="nama" name="nama" value="" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat" class="label-control col-md-4">Alamat</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="alamat" name="alamat" value="" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="noTelp" class="label-control col-md-4">No.Telp</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="noTelp" name="noTelp" value="" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="label-control col-md-4">Email</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="email" name="email" value="" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="username" class="label-control col-md-4">Username</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="username" name="username" value="" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="label-control col-md-4">Kata Sandi</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="password" name="password" value="" required>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" id="btnSave" class="btn btn-success">Save</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(function() {
        showDataPenghulu();

        $(document).ready(function() {
            $('#dataTablePenghulu').DataTable({
                "lengthMenu": [
                    [5, 10, 25, 50, -1],
                    [5, 10, 25, 50, "All"]
                ]
            });
        });

        $('#btnSave').click(function() {
            var url = $('#formAddEditPenghulu').attr('action');
            var data = $('#formAddEditPenghulu').serialize();
            //validate form
            var nip = $('input[name=nip]');
            var nama = $('input[name=nama]');
            var alamat = $('input[name=alamat]');
            var noTelp = $('input[name=noTelp]');
            var email = $('input[name=email]');
            var username = $('input[name=username]');
            var password = $('input[name=password]');

            if (nip.val() != '' && nama.val() != '' && alamat.val() != '' &&
                noTelp.val() != '' && email.val() != '' && username.val() != '' && password.val() != '') {
                $.ajax({
                    type: 'ajax',
                    method: 'post',
                    url: url,
                    data: data,
                    async: false,
                    dataType: 'json',
                    success: function(response) {
                        if (response.success) {
                            $('#modalPenghulu').modal('hide');
                            $('#formAddEditPenghulu')[0].reset();
                            if (response.type == 'add') {
                                type = 'ditambahkan'
                            } else if (response.type == 'update') {
                                type = 'diubah'
                            }
                            swal("Selamat!", "Data pengulu berhasil " + type + "!", "success");
                            showDataPenghulu();
                        } else {
                            swal("Internal Server error 500!", "Error!", "error");
                        }
                    },
                    error: function() {
                        swal("Gagal menambahkan data penghulu!", "Error!", "error");
                    }
                });
            } else {
                swal("Field tidak boleh kosong!", "Error!", "error");
            }
        });

        //ADD PENGHULU
        $('#btnAdd').click(function() {
            validateMobilePhone();
            validateNIP();
            $('input[name=nip]').removeAttr('readonly');
            $('input[name=nama]').removeAttr('readonly');
            $('input[name=alamat]').removeAttr('readonly');
            $('input[name=noTelp]').removeAttr('readonly');
            $('input[name=email]').removeAttr('readonly');
            $('input[name=username]').removeAttr('readonly');
            $('input[name=password]').removeAttr('readonly');
            $('#btnSave').show();
            $('#modalPenghulu').find('.modal-title').text('TAMBAH DATA PENGHULU');
            $('#formAddEditPenghulu').attr('action', '<?= BASE_URL . 'staff/addPenghulu'; ?>');
            $('#formAddEditPenghulu')[0].reset();
        });

        //EDIT PENGHULU
        $('#showDataPenghulu').on('click', '.editPenghulu', function() {
            var offId = $(this).attr('data');
            $('#btnSave').show();
            $('#modalPenghulu').modal('show');
            $('#modalPenghulu').find('.modal-title').text('UBAH DATA PENGHULU');
            $('#formAddEditPenghulu').attr('action', '<?= BASE_URL . 'staff/updatePenghulu' ?>');
            $.ajax({
                type: 'ajax',
                method: 'post',
                url: '<?= BASE_URL . 'staff/getDetailPenghulu'; ?>',
                data: {
                    offId: offId
                },
                async: false,
                dataType: 'json',
                success: function(data) {
                    $('input[name=nip]').removeAttr('readonly');
                    $('input[name=nama]').removeAttr('readonly');
                    $('input[name=alamat]').removeAttr('readonly');
                    $('input[name=noTelp]').removeAttr('readonly');
                    $('input[name=email]').removeAttr('readonly');
                    $('input[name=offId]').val(offId);
                    $('input[name=nip]').val(data.NIP);
                    $('input[name=nama]').val(data.NAME);
                    $('input[name=alamat]').val(data.ADDRESS);
                    $('input[name=noTelp]').val(data.PHONE);
                    $('input[name=email]').val(data.EMAIL);
                    $('input[name=username]').attr('readonly', true);
                    $('input[name=username]').val(data.USERNAME);
                    $('input[name=password]').attr('readonly', true);
                    $('input[name=password]').val(data.PASSWORD_LABEL);
                },
                error: function() {
                    swal("Internal Server error 500!", "Error!", "error");
                }
            });
        });

        //VIEW PENGHULU
        $('#showDataPenghulu').on('click', '.viewPenghulu', function() {
            var offId = $(this).attr('data');
            $('#modalPenghulu').modal('show');
            $('#modalPenghulu').find('.modal-title').text('LIHAT DATA PENGHULU');
            $('#btnSave').hide();
            $.ajax({
                type: 'ajax',
                method: 'post',
                url: '<?= BASE_URL . 'staff/getDetailPenghulu'; ?>',
                data: {
                    offId: offId
                },
                async: false,
                dataType: 'json',
                success: function(data) {
                    $('input[name=offId]').val(offId);
                    $('input[name=nip]').attr('readonly', true);
                    $('input[name=nip]').val(data.NIP);
                    $('input[name=nama]').attr('readonly', true);
                    $('input[name=nama]').val(data.NAME);
                    $('input[name=alamat]').attr('readonly', true);
                    $('input[name=alamat]').val(data.ADDRESS);
                    $('input[name=noTelp]').attr('readonly', true);
                    $('input[name=noTelp]').val(data.PHONE);
                    $('input[name=email]').attr('readonly', true);
                    $('input[name=email]').val(data.EMAIL);
                    $('input[name=username]').attr('readonly', true);
                    $('input[name=username]').val(data.USERNAME);
                    $('input[name=password]').attr('readonly', true);
                    $('input[name=password]').val(data.PASSWORD_LABEL);
                },
                error: function() {
                    swal("Internal Server error 500!", "Error!", "error");
                }
            });
        });

        //DELETE PENGHULU
        $('#showDataPenghulu').on('click', '.deletePenghulu', function() {
            var offId = $(this).attr('data');
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
                        url: '<?= BASE_URL . 'staff/deletePenghulu/'; ?>',
                        data: {
                            offId: offId
                        },
                        async: false,
                        dataType: 'json',
                        success: function(response) {
                            if (response.success) {
                                swal("Selamat!", "Data Penghulu berhasil dihapus!", "success");
                                showDataPenghulu();
                            } else {
                                swal("Error!", "Gagal Hapus data!", "error");
                            }
                        },
                        error: function() {
                            swal("Internal Server error 500!", "Error!", "error");
                        }
                    });
                }
            });
        });

        //SHOW DATA PENGHULU
        function showDataPenghulu() {
            $.ajax({
                type: 'ajax',
                method: 'post',
                url: '<?= BASE_URL . 'staff/showDataPenghulu'; ?>',
                async: false,
                dataType: 'json',
                success: function(data) {
                    var html = '';
                    var i;
                    for (i = 0; i < data.length; i++) {
                        html += '<tr>' +
                            '<th scope="col" style="width: 2%;">' + (i + 1) + '</th>' +
                            '<td scope="col" style="width: 13%;">' + data[i].NIP + '</td>' +
                            '<td scope="col" style="width: 25%;">' + data[i].NAME + '</td>' +
                            '<td scope="col" style="width: 20%;">' + data[i].ADDRESS + '</td>' +
                            '<td scope="col" style="width: 5%;">' + data[i].PHONE + '</td>' +
                            '<td scope="col" style="width: 40%">' +
                            '<a href="javascript:;" class="btn round btn-sm btn-icon btn-info viewPenghulu" style="margin-left:5px;" data-toggle="tooltip" data-placement="bottom" title="LIhat Detail" data="' + data[i].OFFICER_ID + '"><i class="ft-eye"></i></a>' +
                            '<a href="javascript:;" class="btn round btn-sm btn-icon btn-warning editPenghulu" style="margin-left:5px;" data-toggle="tooltip" data-placement="bottom" title="Edit" data="' + data[i].OFFICER_ID + '"><i class="ft-edit-2"></i></a>' +
                            '<a href="javascript:;" class="btn round btn-sm btn-icon btn-danger deletePenghulu" style="margin-left:5px;" data-toggle="tooltip" data-placement="bottom" title="Hapus" data="' + data[i].OFFICER_ID + '"><i class="ft-x"></i></a>' +
                            '</td>' +
                            '</tr>';
                    }
                    $('#showDataPenghulu').html(html);
                    $('[data-toggle="tooltip"]').tooltip();
                },
                error: function() {
                    swal("Error!", "Could not get Data from Database!", "error");
                }
            });
        }

        function validateMobilePhone() {
            $('#noTelp').on('keyup', function(e) {
                numberLength = $('#noTelp').val().length;
            });

            $('#noTelp').on('keypress', function(e) {
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

        function validateNIP() {
            $('#nip').on('keypress', function(e) {
                var $this = $(this);
                var regex = new RegExp("^[0-9\b]+$");
                var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
                // for 16 digit number only
                if ($this.val().length > 17) {
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
    });
</script>