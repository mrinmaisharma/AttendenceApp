<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Attendance Portal | "<?php echo $__env->yieldContent('title'); ?></title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon-sm.ico">
    <!-- Pignose Calender -->
    <!-- <link href="/plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet"> -->
    <!-- Chartist -->
    <link rel="stylesheet" href="/plugins/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
    <!-- Custom Stylesheet -->
    <link href="/icon/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/icon/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <link href="/icon/weather-icons/css/weather-icons.min.css" rel="stylesheet">
    <link href="/icon/cryptocoins/css/cryptocoins.css" rel="stylesheet">
    <link href="/icon/cryptocoins/css/cryptocoins-colors.css" rel="stylesheet">
    <link href="/icon/linea-icons/linea.css" rel="stylesheet">
    <link href="/icon/ionicons/css/ionicons.css" rel="stylesheet">
    <link href="/icon/themify-icons/themify-icons.css" rel="stylesheet">
    <link href="/icon/flag-icon-css/flag-icon.min.css" rel="stylesheet">
    <link href="/icon/material-design-iconic-font/materialdesignicons.min.css" rel="stylesheet">
    <link href="/icon/pe-icon-set-weather/css/pe-icon-set-weather.min.css" rel="stylesheet">
    <link href="/plugins/animate/animate.min.css" rel="stylesheet">
    <link href="/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet">
    <link href="/plugins/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">

</head>

<body data-page-id="<?php echo $__env->yieldContent('data-page-id'); ?>">
    
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <?php echo $__env->make('includes.app.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->make('includes.app.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="content-body" style="min-height: 788px;">
        <!-- Main -->
            <?php echo $__env->yieldContent('content'); ?>
        </div>
        <?php echo $__env->make('includes.app.footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->
    
<!-- <script type="text/javascript" src="/js/admin/all.js"></script> -->
<script type="text/javascript" src="/plugins/common/common.min.js"></script>
<script type="text/javascript" src="/js/custom.min.js"></script>
<script type="text/javascript" src="/js/settings.js"></script>
<script type="text/javascript" src="/js/gleek.js"></script>
<script type="text/javascript" src="/js/styleSwitcher.js"></script>

<!-- Chartjs -->
<script type="text/javascript" src="/plugins/chart.js/Chart.bundle.min.js"></script>
<!-- Circle progress -->
<script type="text/javascript" src="/plugins/circle-progress/circle-progress.min.js"></script>
<!-- Morrisjs -->
<script type="text/javascript" src="/plugins/raphael/raphael.min.js"></script>
<script type="text/javascript" src="/plugins/morris/morris.min.js"></script>
<!-- Pignose Calender -->
<script type="text/javascript" src="/plugins/moment/moment.min.js"></script>
<script type="text/javascript" src="/plugins/pg-calendar/js/pignose.calendar.min.js"></script>

<!-- <script type="text/javascript" src="/js/dashboard/dashboard-1.js"></script> -->


</body>
</html>