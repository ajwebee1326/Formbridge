<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->

<!-- Mirrored from radixtouch.in/templates/admin/hotel/source/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Apr 2018 06:55:56 GMT -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <meta name="author" content="SmartUniversity" />
    <title>Spice Hotel | Bootstrap 4 Admin Dashboard Template + UI Kit</title>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
    <!-- icons -->
    <link href="assets/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!--bootstrap -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/summernote/summernote.css" rel="stylesheet">
    <!-- morris chart -->
    <link href="assets/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- Material Design Lite CSS -->
    <link rel="stylesheet" href="assets/plugins/material/material.min.css">
    <link rel="stylesheet" href="assets/css/material_style.css">
    <!-- animation -->
    <link href="assets/css/pages/animate_page.css" rel="stylesheet">
    <!-- Template Styles -->
    <link href="assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/theme-color.css" rel="stylesheet" type="text/css" />
    <!-- favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" />
</head>
<!-- END HEAD -->

<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white dark-sidebar-color logo-dark">
    <div class="page-wrapper">
        <!-- start header -->

        <x.admin.header />
        <!-- end header -->
        <!-- start page container -->
        <div class="page-container">
            <!-- start sidebar menu -->
            <x-admin.sidebar />
            <!-- end sidebar menu -->
            <!-- start page content -->
            <div class="page-content-wrapper">
                @yield('content')
            </div>
            <!-- end page content -->
            <!-- start chat sidebar -->
           
            <!-- end chat sidebar -->
        </div>
        <!-- end page container -->
        <!-- start footer -->
        <x-admin.footer />
        <!-- end footer -->
    </div>
    <!-- start js include path -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <script src="assets/plugins/popper/popper.min.js"></script>
    <script src="assets/plugins/jquery-blockui/jquery.blockui.min.js"></script>
    <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- bootstrap -->
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <script src="assets/js/pages/sparkline/sparkline-data.js"></script>
    <!-- Common js-->
    <script src="assets/js/app.js"></script>
    <script src="assets/js/layout.js"></script>
    <script src="assets/js/theme-color.js"></script>
    <!-- material -->
    <script src="assets/plugins/material/material.min.js"></script>
    <!-- animation -->
    <script src="assets/js/pages/ui/animations.js"></script>
    <!-- morris chart -->
    <script src="assets/plugins/morris/morris.min.js"></script>
    <script src="assets/plugins/morris/raphael-min.js"></script>
    <script src="assets/js/pages/chart/morris/morris_home_data.js"></script>
    <!-- end js include path -->
</body>

<!-- Mirrored from radixtouch.in/templates/admin/hotel/source/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Apr 2018 06:55:56 GMT -->

</html>