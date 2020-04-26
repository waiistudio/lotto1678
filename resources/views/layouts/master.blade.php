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
    <link href=" {{ asset('assets/libs/datatables/dataTables.bootstrap4.css') }} " rel="stylesheet" type="text/css" />
    <link href=" {{ asset('assets/libs/datatables/responsive.bootstrap4.css') }} " rel="stylesheet" type="text/css" />
    <link href=" {{ asset('assets/libs/datatables/buttons.bootstrap4.css') }} " rel="stylesheet" type="text/css" />
    <link href=" {{ asset('assets/libs/datatables/select.bootstrap4.css') }} " rel="stylesheet" type="text/css" />
    <link href=" {{ asset('assets/css/bootstrap.css') }} " rel="stylesheet" type="text/css" />
    <link href=" {{ asset('assets/css/icons.min.css') }} " rel="stylesheet" type="text/css" />
    <link href=" {{ asset('assets/css/app.min.css') }} " rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- <script src="{{ URL::asset('js/app.js') }}" defer></script> --}}

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
                            <button class="btn btn-icon waves-effect btn-secondary"> <i class=" fab fa-bitcoin">
                                    เครดิตของคุณ :</i> </button>

                        </div>

                    </li>
                    <li class="d-none d-sm-block">

                        <div style="margin-top: 15px; margin-right: 10px;" class="app-search-box">
                            {{--   --}}
                            @switch(Auth::user()->status)
                            @case(1)
                            <button type="button" class="btn btn-danger waves-effect width-md waves-light">ระดับของคุณ :
                                Webmaster</button>
                            @break
                            @case(2)
                            <button type="button" class="btn btn-warning waves-effect width-md waves-light">ระดับของคุณ
                                : Senoir</button>
                            @break
                            @case(3)
                            <button type="button" class="btn btn-info waves-effect width-md waves-light">ระดับของคุณ :
                                Masters</button>
                            @break
                            @case(4)
                            ​<button type="button" class="btn btn-primary waves-effect width-md waves-light">ระดับของคุณ
                                : Agent</button>
                            @break
                            @case(5)
                            <button type="button" class="btn btn-success waves-effect width-md waves-light">ระดับของคุณ
                                : Member</button>
                            @break
                            @default

                            @endswitch

                        </div>

                    </li>

                    <li class="dropdown notification-list">
                        <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect">
                            <img src=" {{ asset('assets/images/users/user-1.jpg') }} " width="25px;" alt="user-image"
                                class="rounded-circle">
                            <span class="pro-user-name ml-1">
                                {{ Auth::user()->name }} <i class="mdi mdi-chevron-down"></i>
                            </span>
                        </a>
                    </li>
                </ul>

                <!-- LOGO -->
                <div class="logo-box">
                    <a href="/home" class="logo text-center">
                        <span class="logo-lg">
                            <img src=" {{ asset('assets/images/logo-light.png') }} " alt="" height="26">
                            <!-- <span class="logo-lg-text-light">UBold</span> -->
                        </span>
                        <span class="logo-sm">
                            <!-- <span class="logo-sm-text-dark">U</span> -->
                            <img src=" {{ asset('assets/images/logo-sm.png') }} " alt="" height="24">
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
                            <a href="/huay"><i class=" fas fa-clipboard-list"></i>หวย</a>
                        </li>

                    </ul>

                    <ul class="navigation-menu">

                        <li class="has-submenu">
                            <a href="/questions"><i class="fas fa-info"></i>สอบถามการใช้งาน</a>
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

    <!-- Right Sidebar -->
    <div class="right-bar">
        <div class="rightbar-title">
            <a href="javascript:void(0);" class="right-bar-toggle float-right">
                <i class="dripicons-cross noti-icon"></i>
            </a>
            <h4 class="m-0 text-white">ข้อมูลส่วนตัว</h4>
        </div>
        <div class="slimscroll-menu rightbar-content">
            <!-- User box -->
            <div class="user-box">
                <div class="user-img">
                    <img src="assets/images/users/user-1.jpg" alt="user-img" title="Mat Helme"
                        class="rounded-circle img-fluid">
                    <a href="javascript:void(0);" class="user-edit"><i class="mdi mdi-pencil"></i></a>
                </div>

                <h5><a href="javascript: void(0);"> {{ Auth::user()->name }} </a> </h5>
                <p class="text-muted mb-0"><small> ระดับ :
                        @switch(Auth::user()->status)
                        @case(1)
                        Webmaster
                        @break
                        @case(2)
                        : Senoir
                        @break
                        @case(3)
                        Masters
                        @break
                        @case(4)
                        : Agent
                        @break
                        @case(5)
                        : Member
                        @break
                        @default

                        @endswitch
                    </small></p>
                <p class="text-muted mb-0"><small>จำนวนเครดิต :</small></p>
            </div>

            <!-- Settings -->
            <hr class="mt-0" />
            <h5 class="pl-3">Basic Settings</h5>
            <hr class="mb-0" />

            <div class="p-3">
                <div class="checkbox checkbox-primary mb-2">
                    <input id="Rcheckbox1" type="checkbox" checked>
                    <label for="Rcheckbox1">
                        Notifications
                    </label>
                </div>
                <div class="checkbox checkbox-primary mb-2">
                    <input id="Rcheckbox2" type="checkbox" checked>
                    <label for="Rcheckbox2">
                        API Access
                    </label>
                </div>
                <div class="checkbox checkbox-primary mb-2">
                    <input id="Rcheckbox3" type="checkbox">
                    <label for="Rcheckbox3">
                        Auto Updates
                    </label>
                </div>
                <div class="checkbox checkbox-primary mb-2">
                    <input id="Rcheckbox4" type="checkbox" checked>
                    <label for="Rcheckbox4">
                        Online Status
                    </label>
                </div>
                <div class="checkbox checkbox-primary mb-0">

                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                        ออกจากระบบ
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>

                </div>

                <!-- Timeline -->
                <hr class="mt-0" />
                <h5 class="pl-3 pr-3">จำนวนสมาชิก <span class="float-right badge badge-pill badge-danger">25</span></h5>
                <hr class="mb-0" />
                <div class="p-3">
                    <div class="inbox-widget">

                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/user-6.jpg" class="rounded-circle"
                                    alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);"
                                    class="text-dark">Adhamdannaway</a>
                            </p>
                            <p class="inbox-item-text">This theme is awesome!</p>
                        </div>
                    </div> <!-- end inbox-widget -->
                </div> <!-- end .p-3-->

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Vendor js -->
        <script src=" {{ asset('assets/js/vendor.min.js') }} "></script>
        <script src=" {{ asset('assets/libs/datatables/jquery.dataTables.min.js') }} "></script>
        <script src=" {{ asset('assets/libs/datatables/dataTables.bootstrap4.js') }} "></script>
        <script src=" {{ asset('assets/libs/datatables/dataTables.responsive.min.js') }} "></script>
        <script src=" {{ asset('assets/libs/datatables/responsive.bootstrap4.min.js') }} "></script>
        <script src=" {{ asset('assets/libs/datatables/dataTables.buttons.min.js') }} "></script>
        <script src=" {{ asset('assets/libs/datatables/buttons.bootstrap4.min.js') }} "></script>
        <script src=" {{ asset('assets/js/pages/datatables.init.js') }} "></script>

        <!-- App js-->
        <script src=" {{ asset('assets/js/app.min.js') }} "></script>

</body>

</html>