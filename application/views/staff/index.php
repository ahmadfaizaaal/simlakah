    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-wrapper-before"></div>
            <div class="content-header row">
                <div class="content-header-left col-md-4 col-12 mb-2">
                    <h2 class="content-header-title">DASHBOARD</h>
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
                    <!-- JADWAL -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Jadwal Sidang</h4>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <!-- ISINYA JADWAL DISINI -->
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

                                                                </div>
                                                                <!-- place -->
                                                                <div id="calendarIO"></div>

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
                    <!-- END OF JADWAL -->

                    <!-- CHART -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Jumlah Pendaftar</h4>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <!-- ISINYA CHART DISINI -->
                                        <div class="height-800">
                                            <canvas id="bar-chart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END OF CHART -->


                </section>
            </div>
        </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->

    <script>
        var totalNikah = <?= json_encode($totalNikah); ?>;
        var totalRujuk = <?= json_encode($totalRujuk); ?>;
        var totalIsbat = <?= json_encode($totalIsbat); ?>;

        $(window).on("load", function() {

            //Get the context of the Chart canvas element we want to select
            var ctx = $("#bar-chart");

            // Chart Options
            var chartOptions = {
                // Elements options apply to all of the options unless overridden in a dataset
                // In this case, we are setting the border of each horizontal bar to be 2px wide and green
                elements: {
                    rectangle: {
                        borderWidth: 2,
                        borderColor: 'rgb(0, 255, 0)',
                        borderSkipped: 'left'
                    }
                },
                responsive: true,
                maintainAspectRatio: false,
                responsiveAnimationDuration: 500,
                legend: {
                    position: 'top',
                },
                scales: {
                    xAxes: [{
                        display: true,
                        gridLines: {
                            color: "#f3f3f3",
                            drawTicks: false,
                        },
                        scaleLabel: {
                            display: true,
                        },
                        ticks: {
                            stepSize: 1
                        }
                    }],
                    yAxes: [{
                        display: true,
                        gridLines: {
                            color: "#f3f3f3",
                            drawTicks: false,
                        },
                        scaleLabel: {
                            display: true,
                        }
                    }]
                },
                title: {
                    display: false,
                    text: 'Chart.js Horizontal Bar Chart'
                }
            };

            // Chart Data
            var chartData = {
                labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
                datasets: [{
                        label: "Rujuk",
                        data: totalRujuk,
                        backgroundColor: "#FF0000",
                        hoverBackgroundColor: "rgba(255,0,0,.9)",
                        borderColor: "transparent"
                    },
                    {
                        label: "Nikah",
                        data: totalNikah,
                        backgroundColor: "#40E0D0",
                        hoverBackgroundColor: "rgba(64,224,208,.9)",
                        borderColor: "transparent"
                    },
                    {
                        label: "Isbat",
                        data: totalIsbat,
                        backgroundColor: "#FFD700",
                        hoverBackgroundColor: "rgba(255,215,0,.9)",
                        borderColor: "transparent"
                    }
                ]
            };

            var config = {
                type: 'horizontalBar',

                // Chart Options
                options: chartOptions,

                data: chartData
            };

            // Create the chart
            var lineChart = new Chart(ctx, config);
        });

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
                editable: false,
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