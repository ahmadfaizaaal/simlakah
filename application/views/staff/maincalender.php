<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
            <div class="content-header-left col-md-4 col-12 mb-2">
                <h2 class="content-header-title">PENJADWALAN</h2>
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
                                <!-- <h4 class="card-title">Penjadwalan</h4> -->
                                <div class="text-left">
                                    <a href="javascript::" id="btnAdd" class="btn btn-icon btn-success mb-0 add_calendar" data-toggle="modal" data-target="#modalPenghulu"><i class="ft-plus"></i> &nbsp;Jadwalkan</a>
                                </div>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <!-- ISINYA ITU DISINI -->
                                    <div class="container">
                                        <div class="page-content-wrapper">
                                            <div class="page-content">
                                                <div class="alert notification" style="display: none;">
                                                    <button class="close" data-close="alert"></button>
                                                    <p></p>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="portlet light bordered">
                                                            <div class="portlet-body">
                                                                <!-- <div class="table-toolbar">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="btn-group">
                                                                                <a href="#" class="btn btn-primary add_calendar"> ADD NEW EVENT
                                                                                    <i class="fa fa-plus"></i>
                                                                                </a>
                                                                                <br>
                                                                                <br>
                                                                            </div>
                                                                        </div>
                                                                    </div> -->
                                                            </div>
                                                            <!-- place -->
                                                            <div id="calendarIO"></div>
                                                            <!-- <div class="modal fade" id="create_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <form class="form-horizontal" method="POST" action="POST" id="form_create">
                                                                            <input type="hidden" name="schedule_id" value="0">
                                                                            <div class="modal-header">
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                                <h4 class="modal-title" id="myModalLabel">Create calendar event</h4>
                                                                            </div>
                                                                            <div class="modal-body">

                                                                                <div class="form-group">
                                                                                    <div class="alert alert-danger" style="display: none;"></div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="control-label col-sm-2">Title <span class="required"> * </span></label>
                                                                                    <div class="col-sm-10">
                                                                                        <input type="text" name="title" class="form-control" placeholder="Title">
                                                                                    </div>
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label class="control-label col-sm-2">Description</label>
                                                                                    <div class="col-sm-10">
                                                                                        <textarea name="description" rows="3" class="form-control" placeholder="Enter description"></textarea>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label for="color" class="col-sm-2 control-label">Color</label>
                                                                                    <div class="col-sm-10">
                                                                                        <select name="color" class="form-control">
                                                                                            <option value="">Choose</option>
                                                                                            <option style="color:#0071c5;" value="#0071c5">&#9724; Dark blue</option>
                                                                                            <option style="color:#40E0D0;" value="#40E0D0">&#9724; Turquoise</option>
                                                                                            <option style="color:#008000;" value="#008000">&#9724; Green</option>
                                                                                            <option style="color:#FFD700;" value="#FFD700">&#9724; Yellow</option>
                                                                                            <option style="color:#FF8C00;" value="#FF8C00">&#9724; Orange</option>
                                                                                            <option style="color:#FF0000;" value="#FF0000">&#9724; Red</option>
                                                                                            <option style="color:#000;" value="#000">&#9724; Black</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label class="control-label col-sm-2">Start Date</label>
                                                                                    <div class="col-sm-10">
                                                                                        <div class="input-group input-medium date date-picker" data-date-format="yyyy-mm-dd" data-date-viewmode="years">
                                                                                            <input type="text" name="jadwal" class="form-control" readonly>
                                                                                            <span class="input-group-addon"><i class="fa fa-calendar font-dark"></i></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label class="control-label col-sm-2">End Date</label>
                                                                                    <div class="col-sm-10">
                                                                                        <div class="input-group input-medium date date-picker" data-date-format="yyyy-mm-dd" data-date-viewmode="years">
                                                                                            <input type="text" name="end_date" class="form-control" readonly>
                                                                                            <span class="input-group-addon"><i class="fa fa-calendar font-dark"></i></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <a href="javascript::void" class="btn default" data-dismiss="modal">Cancel</a>
                                                                                <a class="btn btn-danger delete_calendar" style="display: none;">Delete</a>
                                                                                <button type="submit" class="btn green">Submit</button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div> -->
                                                            <div class="modal fade" id="create_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                                <div class="modal-dialog modal-lg" role="document">
                                                                    <div class="modal-content">
                                                                        <form class="form-horizontal" method="POST" action="POST" id="form_create">
                                                                            <input type="hidden" name="SCHEDULE_ID" value="0">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="titlePenjadwalan"><strong>TAMBAH PENJADWALAN</strong></h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="form-group">
                                                                                    <div class="alert alert-danger" style="display: none;"></div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label for="REG_CODE" class="label-control col-md-4">Registration Code<span class="danger"> *</label>
                                                                                    <div class="col-md-8">
                                                                                        <input type="text" class="form-control" id="REG_CODE" name="REG_CODE" value="" required>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label for="TITLE" class="label-control col-md-4">Nama Penjadwalan<span class="danger"> *</label>
                                                                                    <div class="col-md-2">
                                                                                        <div class="position-relative has-icon-left">
                                                                                            <input type="text" autocomplete="off" id="EVENT_TIME" class="form-control" name="EVENT_TIME" required>
                                                                                            <div class="form-control-position">
                                                                                                <i class="ft-clock"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <input type="text" id="TITLE" name="TITLE" class="form-control" value="" required>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label for="COLOR" class="label-control col-md-4">Jenis Pendaftaran<span class="danger"> *</label>
                                                                                    <div class="col-sm-8">
                                                                                        <input type="hidden" id="regType" value="<?= $regType; ?>">
                                                                                        <input type="hidden" name="COLOR" id="COLOR_NOTBLANK" value="">
                                                                                        <select name="COLOR" class="form-control">
                                                                                            <option value="">Pilih salah satu</option>
                                                                                            <option style="color:#40E0D0;" value="#40E0D0">&#9724; Nikah</option>
                                                                                            <option style="color:#FF0000;" value="#FF0000">&#9724; Rujuk</option>
                                                                                            <option style="color:#FFD700;" value="#FFD700">&#9724; Isbat</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label class="col-md-4 label-control date-picker" for="EVENT_SCHEDULE">Jadwal<span class="danger"> *</label>
                                                                                    <div class="col-md-8">
                                                                                        <!-- <div class="input-group input-medium date date-picker" data-date-format="yyyy-mm-dd" data-date-viewmode="years">
                                                                                            <input type="text" name="jadwal" class="form-control" readonly>
                                                                                            <span class="input-group-addon"><i class="fa fa-calendar font-dark"></i></span>
                                                                                        </div> -->
                                                                                        <div class="position-relative has-icon-left datepicker">
                                                                                            <input type="text" autocomplete="off" id="EVENT_SCHEDULE" class="form-control" name="EVENT_SCHEDULE" required>
                                                                                            <div class="form-control-position">
                                                                                                <i class="ft-calendar"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <a href="javascript::void" class="btn default" data-dismiss="modal">Batal</a>
                                                                                <a class="btn btn-danger delete_calendar text-white" style="display: none;">Hapus</a>
                                                                                <button type="submit" class="btn btn-success">Simpan</button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <!-- <option style="color:#FF0000;" value="#FF0000">&#9724; Red</option>
                                                            <option style="color:#FFD700;" value="#FFD700">&#9724; Yellow</option>
                                                            <option style="color:#40E0D0;" value="#40E0D0">&#9724; Turquoise</option> -->
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <h5>Keterangan : </h5>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <p style="color:#40E0D0;">&#9724; Nikah</p>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <p style="color:#FF0000;">&#9724; Rujuk</p>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <p style="color:#FFD700;">&#9724; Isbat</p>
                                                                </div>
                                                            </div>
                                                            <!-- <div class="container">
                                                            </div> -->
                                                            <!-- end place -->
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
<script type="text/javascript">
    var get_data = '<?php echo $get_data; ?>';
    var backend_url = '<?php echo base_url(); ?>';

    $(document).ready(function() {
        var type = $('#regType').val();
        if (type != '') {
            $('#COLOR_NOTBLANK').val(type);
            $('#create_modal input[name=REG_CODE]').val('<?= $regCode; ?>');
            $('#create_modal input[name=TITLE]').val('<?= $namaCalon; ?>');
            $('#create_modal select[name=COLOR]').val(type);
            $('#create_modal input[name=REG_CODE]').attr('readonly', true);
            $('#create_modal input[name=TITLE]').attr('readonly', true);
            $('#create_modal select[name=COLOR]').attr('disabled', true);
        } else {
            $('#create_modal input[name=REG_CODE]').removeAttr('readonly');
            $('#create_modal input[name=TITLE]').removeAttr('readonly');
            $('#create_modal select[name=COLOR]').removeAttr('disabled');
        }

        $('#EVENT_SCHEDULE').datetimepicker({
            locale: 'id',
            format: 'YYYY-MM-DD',
            minDate: moment().add(0, 'days'),
            useCurrent: true
        });
        $('#EVENT_TIME').datetimepicker({
            locale: 'id',
            format: 'HH:mm',
            useCurrent: true
        });
        $('#calendarIO').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month'
            },
            defaultDate: moment().format('YYYY-MM-DD'),
            displayEventTime: false,
            editable: true,
            eventLimit: true, // allow "more" link when too many events
            selectable: false,
            selectHelper: true,
            select: function(start, end) {
                $('#create_modal input[name=EVENT_SCHEDULE]').val(moment(start).format('YYYY-MM-DD'));
                // $('#create_modal input[name=EVENT_SCHEDULE]').val(moment(end).format('YYYY-MM-DD'));
                $('#create_modal').modal('show');
                save();
                $('#calendarIO').fullCalendar('unselect');
            },
            eventDrop: function(event, delta, revertFunc) { // si changement de position
                editDropResize(event);
            },
            eventResize: function(event, dayDelta, minuteDelta, revertFunc) { // si changement de longueur
                editDropResize(event);
            },
            eventClick: function(event, element) {
                // detail(event);
                // editData(event);
                // deleteData(event);
            },
            events: JSON.parse(get_data)
        });
    });

    $(document).on('click', '.add_calendar', function() {
        var scheduleType = '<?= $scheduleType; ?>';

        if ('general' == scheduleType) {
            $('#create_modal input[name=REG_CODE]').removeAttr('readonly');
            $('#create_modal input[name=TITLE]').removeAttr('readonly');
            $('#create_modal select[name=COLOR]').removeAttr('disabled');
            $('#form_create')[0].reset();
        }
        $('#create_modal input[name=SCHEDULE_ID]').val(0);
        $('#create_modal').modal('show');
    })

    $(document).on('submit', '#form_create', function() {

        var element = $(this);
        var eventData;
        $.ajax({
            url: backend_url + 'jadwal/save',
            type: element.attr('method'),
            data: element.serialize(),
            dataType: 'JSON',
            beforeSend: function() {
                element.find('button[type=submit]').html('<i class="fa fa-spinner fa-spin" aria-hidden="true"></i>');
            },
            success: function(data) {
                if (data.status) {
                    eventData = {
                        id: data.SCHEDULE_ID,
                        title: '(' + $('#create_modal input[name=EVENT_TIME]').val() + ')  ' + $('#create_modal input[name=TITLE]').val(),
                        start: moment($('#create_modal input[name=EVENT_SCHEDULE]').val()).format('YYYY-MM-DD HH:mm:ss'),
                        end: moment($('#create_modal input[name=EVENT_SCHEDULE]').val()).format('YYYY-MM-DD HH:mm:ss'),
                        color: $('#create_modal input[name=COLOR]').val()
                    };
                    $('#calendarIO').fullCalendar('renderEvent', eventData, true); // stick? = true
                    $('#create_modal').modal('hide');
                    element[0].reset();
                    swal(
                        "Selamat!",
                        data.notif,
                        "success"
                    ).then(result => {
                        if (result.value) {
                            $.ajax({
                                type: 'ajax',
                                method: 'post',
                                url: '<?= BASE_URL . 'registration/updateSchedule/'; ?>',
                                data: {
                                    regCode: data.REG_CODE,
                                    schedule: data.EVENT_SCHEDULE,
                                    time: data.EVENT_TIME
                                },
                                async: false,
                                dataType: 'json',
                                success: function(response) {
                                    if (response.success) {
                                        window.location.href = response.redirect_url;
                                    }
                                },
                                error: function() {
                                    swal("Error!", "Internal Server error 500!", "error");
                                }
                            });
                        }
                    });
                } else {
                    swal("Error!", data.notif, "error");
                }
                element.find('button[type=submit]').html('Submit');
            },
            error: function(jqXHR, textStatus, errorThrown) {
                element.find('button[type=submit]').html('Submit');
                swal("Error!", "Internal server error 500!", "error");
            }
        });
        return false;
    })

    function editDropResize(event) {
        start = event.start.format('YYYY-MM-DD HH:mm:ss');
        if (event.end) {
            end = event.end.format('YYYY-MM-DD HH:mm:ss');
        } else {
            end = start;
        }

        $.ajax({
            url: backend_url + 'jadwal/save',
            type: 'POST',
            data: 'SCHEDULE_ID=' + event.id + '&TITLE=' + event.title + '&EVENT_SCHEDULE=' + start,
            dataType: 'JSON',
            beforeSend: function() {},
            success: function(data) {
                if (data.status) {
                    swal("Selamat!", "Jadwal berhasil diubah!", "success");
                } else {
                    swal("Error!", "Gagal mengubah jadwal!", "error");
                }

            },
            error: function(jqXHR, textStatus, errorThrown) {
                swal("Error!", "Internal server error 500!", "error");
            }
        });
    }

    function save() {
        $('#form_create').submit(function() {
            var element = $(this);
            var eventData;
            $.ajax({
                url: backend_url + 'jadwal/save',
                type: element.attr('method'),
                data: element.serialize(),
                dataType: 'JSON',
                beforeSend: function() {
                    element.find('button[type=submit]').html('<i class="fa fa-spinner fa-spin" aria-hidden="true"></i>');
                },
                success: function(data) {
                    if (data.status) {
                        eventData = {
                            id: data.SCHEDULE_ID,
                            title: '(' + $('#create_modal input[name=EVENT_TIME]').val() + ')  ' + $('#create_modal input[name=TITLE]').val(),
                            start: moment($('#create_modal input[name=EVENT_SCHEDULE]').val()).format('YYYY-MM-DD HH:mm:ss'),
                            end: moment($('#create_modal input[name=EVENT_SCHEDULE]').val()).format('YYYY-MM-DD HH:mm:ss'),
                            color: $('#create_modal select[name=COLOR]').val()
                        };
                        $('#calendarIO').fullCalendar('renderEvent', eventData, true); // stick? = true
                        $('#create_modal').modal('hide');
                        element[0].reset();
                        swal(
                            "Selamat!",
                            data.notif,
                            "success"
                        ).then(result => {
                            if (result.value) {
                                $.ajax({
                                    type: 'ajax',
                                    method: 'post',
                                    url: '<?= BASE_URL . 'registration/updateSchedule/'; ?>',
                                    data: {
                                        regCode: data.REG_CODE,
                                        schedule: data.EVENT_SCHEDULE,
                                        time: data.EVENT_TIME
                                    },
                                    async: false,
                                    dataType: 'json',
                                    success: function(response) {
                                        if (response.success) {
                                            window.location.href = response.redirect_url;
                                        }
                                    },
                                    error: function() {
                                        swal("Error!", "Internal Server error 500!", "error");
                                    }
                                });
                            }
                        });

                    } else {
                        swal("Error!", data.notif, "error");
                    }
                    element.find('button[type=submit]').html('Submit');
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    element.find('button[type=submit]').html('Submit');
                    swal("Error!", "Internal server error 500!", "error");
                }
            });
            return false;
        })
    }

    function detail(event) {
        $('#create_modal input[name=SCHEDULE_ID]').val(event.id);
        var eventTime = event.title.substr(1, 5);
        var eventTitle = event.title.substr(10, event.title.length);
        $('#create_modal input[name=TITLE]').val(eventTitle);
        $('#create_modal input[name=EVENT_TIME]').val(eventTime);
        $('#create_modal input[name=EVENT_SCHEDULE]').val(moment(event.start).format('YYYY-MM-DD'));
        $('#create_modal select[name=COLOR]').val(event.color);
        $('#create_modal .delete_calendar').show();
        $('#create_modal').modal('show');
    }

    function editData(event) {
        $('#form_create').submit(function() {
            var element = $(this);
            var eventData;
            $.ajax({
                url: backend_url + 'jadwal/save',
                type: element.attr('method'),
                data: element.serialize(),
                dataType: 'JSON',
                beforeSend: function() {
                    element.find('button[type=submit]').html('<i class="fa fa-spinner fa-spin" aria-hidden="true"></i>');
                },
                success: function(data) {
                    if (data.status) {
                        event.id = $('#create_modal input[name=REG_CODE]').val();
                        event.title = '(' + $('#create_modal input[name=EVENT_TIME]').val() + ')  ' + $('#create_modal input[name=TITLE]').val();
                        event.start = moment($('#create_modal input[name=EVENT_SCHEDULE]').val()).format('YYYY-MM-DD HH:mm:ss');
                        event.end = moment($('#create_modal input[name=EVENT_SCHEDULE]').val()).format('YYYY-MM-DD HH:mm:ss');
                        event.color = $('#create_modal select[name=COLOR]').val();
                        $('#calendarIO').fullCalendar('updateEvent', event);

                        $('#create_modal').modal('hide');
                        element[0].reset();
                        $('#create_modal input[name=SCHEDULE_ID]').val(0)
                        swal(
                            "Selamat!",
                            data.notif,
                            "success"
                        ).then(result => {
                            if (result.value) {
                                $.ajax({
                                    type: 'ajax',
                                    method: 'post',
                                    url: '<?= BASE_URL . 'registration/updateSchedule/'; ?>',
                                    data: {
                                        regCode: data.REG_CODE,
                                        schedule: data.EVENT_SCHEDULE,
                                        time: data.EVENT_TIME
                                    },
                                    async: false,
                                    dataType: 'json',
                                    success: function(response) {
                                        if (response.success) {
                                            window.location.href = response.redirect_url;
                                        }
                                    },
                                    error: function() {
                                        swal("Error!", "Internal Server error 500!", "error");
                                    }
                                });
                            }
                        });
                    } else {
                        swal("Error!", data.notif, "error");
                    }
                    element.find('button[type=submit]').html('Simpan');
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    element.find('button[type=submit]').html('Simpan');
                    swal("Error!", "Internal server error 500!", "error");
                }
            });
            return false;
        })
    }

    function deleteData(event) {
        $('#create_modal .delete_calendar').click(function() {
            $.ajax({
                url: backend_url + 'calendar/delete',
                type: 'POST',
                data: 'id=' + event.SCHEDULE_ID,
                dataType: 'JSON',
                beforeSend: function() {},
                success: function(data) {
                    if (data.status) {
                        $('#calendarIO').fullCalendar('removeEvents', event._id);
                        $('#create_modal').modal('hide');
                        $('#form_create')[0].reset();
                        $('#create_modal input[name=SCHEDULE_ID]').val(0);
                        swal("Info!", data.notif, "success");
                        // $('.notification').removeClass('alert-danger').addClass('alert-primary').find('p').html(data.notif);
                    } else {
                        swal("Error!", data.notif, "error");
                        // $('#form_create').find('.alert').css('display', 'block');
                        // $('#form_create').find('.alert').html(data.notif);
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    swal("Error!", "Internal server error 500!", "error");
                    // $('#form_create').find('.alert').css('display', 'block');
                    // $('#form_create').find('.alert').html('Wrong server, please save again');
                }
            });
        })
    }
</script>