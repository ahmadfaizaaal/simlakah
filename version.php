<?php
// echo 'Current PHP version: ' . phpversion();

?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code.">
    <meta name="keywords" content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>Date &amp; time picker - Chameleon Admin - Modern Bootstrap 4 WebApp & Dashboard HTML Template + UI Kit</title>
    <link rel="apple-touch-icon" href="<?= BASE_THEME ?>adm/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?= BASE_THEME ?>adm/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="<?= BASE_THEME ?>adm/app-assets/css/vendors.css">
    <link rel="stylesheet" type="text/css" href="<?= BASE_THEME ?>adm/app-assets/vendors/css/pickers/daterange/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="<?= BASE_THEME ?>adm/app-assets/vendors/css/pickers/pickadate/default.css">
    <link rel="stylesheet" type="text/css" href="<?= BASE_THEME ?>adm/app-assets/vendors/css/pickers/pickadate/default.date.css">
    <link rel="stylesheet" type="text/css" href="<?= BASE_THEME ?>adm/app-assets/vendors/css/pickers/pickadate/default.time.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN CHAMELEON  CSS-->
    <link rel="stylesheet" type="text/css" href="<?= BASE_THEME ?>adm/app-assets/css/app.css">
    <!-- END CHAMELEON  CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="<?= BASE_THEME ?>adm/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="<?= BASE_THEME ?>adm/app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="<?= BASE_THEME ?>adm/app-assets/css/plugins/pickers/daterange/daterange.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?= BASE_THEME ?>adm/assets/css/style.css">
    <!-- END Custom CSS-->
</head>

<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-gradient-x-purple-blue" data-col="2-columns">
    <div class="form-group">
        <label>Single Date Picker</label>
        <div class='input-group'>
            <input type='text' class="form-control singledate" />
            <div class="input-group-append">
                <span class="input-group-text">
                    <span class="la la-calendar"></span>
                </span>
            </div>
        </div>
        <!-- <small class="text-muted">The Date Range Picker can be turned into a single date picker widget with only one calendar. In this example, dropdowns to select a month and year have also been enabled at the top of the calendar to quickly jump to different months.</small> -->
    </div>


    <!-- BEGIN VENDOR JS-->
    <script src="<?= BASE_THEME ?>adm/app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="<?= BASE_THEME ?>adm/app-assets/vendors/js/pickers/pickadate/picker.js" type="text/javascript"></script>
    <script src="<?= BASE_THEME ?>adm/app-assets/vendors/js/pickers/pickadate/picker.date.js" type="text/javascript"></script>
    <script src="<?= BASE_THEME ?>adm/app-assets/vendors/js/pickers/pickadate/picker.time.js" type="text/javascript"></script>
    <script src="<?= BASE_THEME ?>adm/app-assets/vendors/js/pickers/pickadate/legacy.js" type="text/javascript"></script>
    <script src="<?= BASE_THEME ?>adm/app-assets/vendors/js/pickers/dateTime/moment-with-locales.min.js" type="text/javascript"></script>
    <script src="<?= BASE_THEME ?>adm/app-assets/vendors/js/pickers/daterange/daterangepicker.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN CHAMELEON  JS-->
    <script src="<?= BASE_THEME ?>adm/app-assets/js/core/app-menu.js" type="text/javascript"></script>
    <script src="<?= BASE_THEME ?>adm/app-assets/js/core/app.js" type="text/javascript"></script>
    <!-- END CHAMELEON  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="<?= BASE_THEME ?>adm/app-assets/js/scripts/pickers/dateTime/pick-a-datetime.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->
</body>

</html>