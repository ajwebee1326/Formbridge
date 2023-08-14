<!DOCTYPE html>
<html>

<!-- Mirrored from radixtouch.in/templates/admin/hotel/source/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Apr 2018 06:56:17 GMT -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <meta name="author" content="SmartUniversity" />
    <title>WeBee Social</title>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
    <!-- icons -->
    <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="assets/plugins/iconic/css/material-design-iconic-font.min.css">
    <!-- bootstrap -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- style -->
    <link rel="stylesheet" href="assets/css/pages/extra_pages.css">
    <!-- favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" />
</head>

<body>
    <div class="limiter">
        <div class="container-login100 page-background">
            <div class="wrap-login100">
                <form class="login100-form validate-form" action="{{ route('login') }}" method="POST">
                    @csrf
                    <span class="login100-form-logo">
                        <i class="zmdi zmdi-flower"></i>
                    </span>
                    <span class="login100-form-title p-b-34 p-t-27">
                        Form-Bridge
                    </span>
                    <div class="wrap-input100 validate-input" data-validate="Enter username">
                        <input class="input100" type="email" id="email" name="email" placeholder="Username" value="admin@gmail.com">
                        <span class="focus-input100" data-placeholder="&#xf207;"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input class="input100" type="password" id="password" name="password" placeholder="Password" value="123456">
                        <span class="focus-input100" data-placeholder="&#xf191;"></span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Login
                        </button>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
    <!-- start js include path -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <!-- bootstrap -->
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/pages/extra_pages/login.js"></script>
    <script src="assets/js/pages/sweet-alert/sweet-alert-data.js"></script>

  
    <!-- end js include path -->
</body>

<!-- Mirrored from radixtouch.in/templates/admin/hotel/source/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Apr 2018 06:56:17 GMT -->

</html>