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
    <link href="assets/libs/datatables/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/datatables/responsive.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/datatables/buttons.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/datatables/select.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <!-- Navigation Bar-->
    <header id="topnav">

        <!-- Topbar Start -->
        <div class="navbar-custom">
            <div class="container-fluid">
                <ul class="list-unstyled topnav-menu float-right mb-0">

                    <li class="dropdown notification-list">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle nav-link">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </li>
                    <li class="d-none d-sm-block">
                            
                        <div style="margin-top: 15px; margin-right: 20px;" class="app-search-box">
                            <button class="btn btn-icon waves-effect btn-secondary"> <i class=" fab fa-bitcoin"> เครดิตของคุณ :</i> </button>
                            
                        </div>
                   
                </li>
                    <li class="d-none d-sm-block">
                            
                        <div style="margin-top: 15px; margin-right: 10px;" class="app-search-box">
                            {{--   --}}
                            @switch(Auth::user()->status)
                                @case(1)
                                <button type="button" class="btn btn-danger waves-effect width-md waves-light">ระดับของคุณ : Webmaster</button>
                                    @break
                                @case(2)
                                <button type="button" class="btn btn-warning waves-effect width-md waves-light">ระดับของคุณ : Senoir</button>
                                    @break
                                @case(3)
                                    <button type="button" class="btn btn-info waves-effect width-md waves-light">ระดับของคุณ : Master</button>
                                    @break
                                @case(4)
                                    ​<button type="button" class="btn btn-primary waves-effect width-md waves-light">ระดับของคุณ : Agent</button>
                                    @break
                                @case(5)
                                    <button type="button" class="btn btn-success waves-effect width-md waves-light">ระดับของคุณ : Memberr</button>
                                    @break
                                @default
                                    
                            @endswitch    
                            
                        </div>
                   
                </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#"
                            role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="assets/images/users/user-1.jpg" alt="user-image" class="rounded-circle">
                            <span class="pro-user-name ml-1">
                                {{ Auth::user()->name }} <i class="mdi mdi-chevron-down"></i> 
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                         
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-user"></i>
                                <span>บัญชีผู้ใช้ของฉัน</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-plus"></i>
                                <span>เพิ่มข้อมูลสมาชิก</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-list"></i>
                                <span>รายงานการขาย</span>
                            </a>

                            <div class="dropdown-divider"></div>

                            <!-- item-->
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                ออกจากระบบ
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>

                <!-- LOGO -->
                <div class="logo-box">
                    <a href="/home" class="logo text-center">
                        <span class="logo-lg">
                            <img src="assets/images/logo-light.png" alt="" height="26">
                            <!-- <span class="logo-lg-text-light">UBold</span> -->
                        </span>
                        <span class="logo-sm">
                            <!-- <span class="logo-sm-text-dark">U</span> -->
                            <img src="assets/images/logo-sm.png" alt="" height="24">
                        </span>
                    </a>
                </div>

            </div> <!-- end container-fluid-->
        </div>
        <!-- end Topbar -->

        <div class="topbar-menu">
            <div class="container-fluid">
                <div id="navigation">
                    <!-- Navigation Menu-->
                    <ul class="navigation-menu">

                        <li class="has-submenu">
                            <a href="/home"><i class="fas fa-home"></i>หน้าแรก</a>
                        </li>

                    </ul>

                    <ul class="navigation-menu">

                        <li class="has-submenu">
                            <a href="/member"><i class="fas fa-user-friends"></i>ข้อมูลสมาชิก</a>
                        </li>

                    </ul>

                    <ul class="navigation-menu">

                        <li class="has-submenu">
                            <a href="/test"><i class="fas fa-user-friends"></i>test</a>
                        </li>

                    </ul>
                    <!-- End navigation menu -->

                    <div class="clearfix"></div>
                </div>
                <!-- end #navigation -->
            </div>
            <!-- end container -->
        </div>
        <!-- end navbar-custom -->

    </header>
    <!-- End Navigation Bar-->

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="wrapper">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">ตอนนี้คุณอยู่ที่</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                                <li class="breadcrumb-item active">{{ $header }} </li>
                            </ol>
                        </div>
                        <h4 class="page-title"> {{ $header }} </h4>
                    </div>

                    @yield('content')
                </div>
            </div>
            <!-- end page title -->


        </div> <!-- end container -->
    </div>
    <!-- end wrapper -->

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->

    <!-- Footer Start -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    2019 - 2020 &copy; Powered By <a href="/">Lotto1678!</a>
                </div>
                <div class="col-md-6">
                    <div class="text-md-right footer-links d-none d-sm-block">
                        <a href="javascript:void(0);">เกี่ยวกับเรา</a>
                        <a href="javascript:void(0);">คู่มือการใช้งาน</a>
                        <a href="javascript:void(0);">ติดต่อผู้ดูแลระบบ</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end Footer -->



    <!-- Vendor js -->
    <script src="assets/js/vendor.min.js"></script>
    <script src="assets/libs/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/libs/datatables/dataTables.bootstrap4.js"></script>
    <script src="assets/libs/datatables/dataTables.responsive.min.js"></script>
    <script src="assets/libs/datatables/responsive.bootstrap4.min.js"></script>
    <script src="assets/libs/datatables/dataTables.buttons.min.js"></script>
    <script src="assets/libs/datatables/buttons.bootstrap4.min.js"></script>
    <script src="assets/js/pages/datatables.init.js"></script>

    <!-- App js-->
    <script src="assets/js/app.min.js"></script>

</body>

</html>