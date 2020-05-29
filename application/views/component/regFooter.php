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