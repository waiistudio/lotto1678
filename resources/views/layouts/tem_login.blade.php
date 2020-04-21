<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title> @yield('title') </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body>

        <div class="home-btn d-none d-sm-block">
            <a href="/"><i class=" fas fa-chevron-circle-left h2 text-dark"> กลับสู่หน้าแรก</i></a>
        </div>

        <div class="account-pages mt-5 mb-5">
            <div class="container">
                
                @yield('content')
                
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- App js-->
        <script src="assets/js/app.min.js"></script>
        
    </body>
</html>