<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Date/Time Picker Component For Bootstrap 4 Demo</title>

    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="<?= BASE_THEME ?>adm/app-assets/css/vendors.css">
    <!-- <link rel="stylesheet" type="text/css" href="<?= BASE_THEME ?>adm/app-assets/vendors/css/pickers/daterange/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="<?= BASE_THEME ?>adm/app-assets/vendors/css/pickers/pickadate/default.css">
    <link rel="stylesheet" type="text/css" href="<?= BASE_THEME ?>adm/app-assets/vendors/css/pickers/pickadate/default.date.css">
    <link rel="stylesheet" type="text/css" href="<?= BASE_THEME ?>adm/app-assets/vendors/css/pickers/pickadate/default.time.css"> -->
    <!-- END VENDOR CSS-->
    <!-- BEGIN CHAMELEON  CSS-->
    <link rel="stylesheet" type="text/css" href="<?= BASE_THEME ?>adm/app-assets/css/app.css">
    <!-- END CHAMELEON  CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="<?= BASE_THEME ?>adm/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="<?= BASE_THEME ?>adm/app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="<?= BASE_THEME ?>adm/app-assets/css/pages/timeline.css">
    <link rel="stylesheet" type="text/css" href="<?= BASE_THEME ?>adm/app-assets/css/plugins/forms/wizard.css">
    <!-- <link rel="stylesheet" type="text/css" href="<?= BASE_THEME ?>adm/app-assets/css/plugins/pickers/daterange/daterange.css"> -->
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?= BASE_THEME ?>adm/assets/css/style.css">
    <!-- END Custom CSS-->
    <link rel="icon" href="<?= BASE_THEME ?>img/icon_simlakah.png" type="image/ico" />
    <!-- BEGIN JQuery -->
    <script src="<?= BASE_THEME; ?>v4/vendor/jquery/jquery.min.js"></script>


    <!-- <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.0.0/flatly/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= BASE_THEME ?>datetime/build/css/bootstrap-datetimepicker.min.css">
    <!-- <style>
        body {
            background-color: #fafafa;
        }

        .container {
            margin-top: 150px;
        }
    </style> -->
</head>

<body>
    <div class="container">
        <h1>Date/Time Picker Component For Bootstrap 4 Demo</h1>
        <div class="row">
            <div class='col-sm-6'>
                <input type='text' class="form-control" id='datetimepicker1' />
            </div>

        </div>
    </div>

    <!-- BEGIN VENDOR JS-->
    <script src="<?= BASE_THEME; ?>v4/vendor/jquery/jquery.min.js"></script>
    <script src="<?= BASE_THEME ?>adm/app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- <script src="<?= BASE_THEME ?>adm/app-assets/vendors/js/pickers/pickadate/picker.js" type="text/javascript"></script>
<script src="<?= BASE_THEME ?>adm/app-assets/vendors/js/pickers/pickadate/picker.date.js" type="text/javascript"></script>
<script src="<?= BASE_THEME ?>adm/app-assets/vendors/js/pickers/pickadate/picker.time.js" type="text/javascript"></script>
<script src="<?= BASE_THEME ?>adm/app-assets/vendors/js/pickers/pickadate/legacy.js" type="text/javascript"></script>
<script src="<?= BASE_THEME ?>adm/app-assets/vendors/js/pickers/dateTime/moment-with-locales.min.js" type="text/javascript"></script> -->
    <script src="<?= BASE_THEME ?>adm/app-assets/vendors/js/pickers/daterange/daterangepicker.js" type="text/javascript"></script>
    <script src="<?= BASE_THEME ?>adm/app-assets/vendors/js/extensions/jquery.steps.min.js" type="text/javascript"></script>
    <script src="<?= BASE_THEME ?>adm/app-assets/vendors/js/forms/validation/jquery.validate.min.js" type="text/javascript"></script>
    <script src="<?= BASE_THEME ?>adm/app-assets/vendors/js/extensions/sweetalert2.all.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN CHAMELEON  JS-->
    <script src="<?= BASE_THEME ?>adm/app-assets/js/core/app-menu.js" type="text/javascript"></script>
    <script src="<?= BASE_THEME ?>adm/app-assets/js/core/app.js" type="text/javascript"></script>
    <!-- END CHAMELEON  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- <script src="<?= BASE_THEME ?>adm/app-assets/js/scripts/pickers/dateTime/pick-a-datetime.js" type="text/javascript"></script> -->
    <script src="<?= BASE_THEME ?>adm/app-assets/js/scripts/forms/wizard-steps.js" type="text/javascript"></script>
    <script src="<?= BASE_THEME ?>adm/app-assets/js/scripts/extensions/sweet-alerts.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.21.0/moment.min.js" type="text/javascript"></script>
    <script src="<?= BASE_THEME ?>datetime/build/js/bootstrap-datetimepicker.min.js"></script>
    <script>
        $(function() {
            $('#datetimepicker1').datetimepicker();
        });
    </script>
</body>

</html>