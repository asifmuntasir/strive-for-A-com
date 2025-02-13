<!doctype html>
<html lang="en">

<head>


    <meta charset="utf-8" />
    <title>StriveForA+</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('/admin') }}/assets/images/favicon.ico">

    <!-- plugin css -->
    <link href="{{ asset('/admin') }}/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css"
        rel="stylesheet" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="{{ asset('/admin') }}/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet"
        type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('/admin') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('/admin') }}/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

<style>
    .logo-design{
        color: #3D8D7A;
        cursor: pointer;
    }

    .logo-design:hover{
        color: #C14600;
    }
</style>

</head>

<body data-topbar="light" data-layout="horizontal">

    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                    <h2 class="navbar-brand logo-design display-2">StriveForA+</h2>
                    </div>

                    <button type="button"
                        class="btn btn-sm px-3 font-size-24 d-lg-none header-item waves-effect waves-light"
                        data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                        <i class="mdi mdi-menu"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav text-black">
                            <li class="nav-item">
                            <a class="nav-link active"href="#">Home</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                            </li>
                        </ul>
                    </div>


                </div>


                <div class="d-flex">

                    {{-- <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                            <i class="mdi-account-circle"></i>
                            <span class="d-none d-xl-inline-block ms-1">Auth</span>
                            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">

                            <a class="dropdown-item" href="{{ route('login') }}"> Login</a>

                            <a class="dropdown-item text-danger" href="{{ route('register') }}">Register</a>
                        </div>
                    </div> --}}


                </div>
            </div>
        </header>

        <div class="container">


        </div>


        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">

                <!-- start page title -->
        {{-- <div class="page-title-box" style="padding: 0 24px 42px 24px!important">

        </div> --}}
                <!-- end page title -->


                <div class="container-fluid">

                    <div class="page-content-wrapper">




                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">

                                        {{-- <h4 class="header-title">Vertical Timeline</h4> --}}


                                        <div class="timeline">
                                            <div class="container">

                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="timeline-container">
<!---------Post------->
<div class="row timeline-right">
    {{-- <div class="col-md-6">
        <p class="timeline-date">
            25 Jun 2021
        </p>
    </div> --}}
    <div class="col-md-12">
        <div class="timeline-box bg-light border-1" >

@foreach ($posts as $post)
<div class="media">

    <div class="timeline-icon">
        <div class="align-self-center me-3">
            <img src="{{ uploaded_file($post->teacher->image) }}" class="rounded-circle avatar-xs" alt="">
        </div>
        {{-- <i
            class="ti-home h4 text-primary"></i> --}}
    </div>
    <div class="media-body ps-3">

        <div class="timeline-text">
            <h3 class="font-size-20"> {{ $post->teacher->name }} <span style="font-size: 14px">({{ $post->created_at }})</span></h3>
            <h5 class="font-size-16 pt-3"> Category: {{ $post->category->title }} </h5>
            <h5 class="font-size-16 pt-"> {{ $post->title }} </h5>
            <p class="mb-0 mt- text-muted" style="font-size: 16px">
        {{ $post->description }}</p><br/>

        @if ($post->image == null)

        @else
        <div class="">
            <img class="img-thumbnail" alt="200x200" style="width: autot; height: 200px;"
             src="{{ uploaded_file($post->image) }}" data-holder-rendered="true">
        </div>
        @endif
        </div>

    </div>
</div>
<br/>
<hr/>
<br/>
@endforeach


        </div>
    </div>
</div>

<!------End post--------->


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


                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->



            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © Morvin.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Designed <i class="mdi mdi-heart text-danger"></i> by Asif Muntasir
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->


    </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->
    {{-- <div class="right-bar">
        <div data-simplebar class="h-100">
            <div class="rightbar-title d-flex align-items-center px-3 py-4">

                <h5 class="m-0 me-2">Settings</h5>

                <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                    <i class="mdi mdi-close noti-icon"></i>
                </a>
            </div>

            <!-- Settings -->
            <hr class="mt-0" />
            <h6 class="text-center mb-0">Choose Layouts</h6>

            <div class="p-4">
                <div class="mb-2">
                    <img src="{{ asset('/admin') }}/assets/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="layout-1">
                </div>

                <div class="form-check form-switch mb-3">
                    <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch" checked>
                    <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                </div>

                <div class="mb-2">
                    <img src="{{ asset('/admin') }}/assets/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="layout-2">
                </div>
                <div class="form-check form-switch mb-3">
                    <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch" data-bsStyle="{{ asset('/admin') }}/assets/css/bootstrap-dark.min.css" data-appStyle="{{ asset('/admin') }}/assets/css/app-dark.min.css">
                    <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                </div>

                <div class="mb-2">
                    <img src="{{ asset('/admin') }}/assets/images/layouts/layout-3.jpg" class="img-fluid img-thumbnail" alt="layout-3">
                </div>
                <div class="form-check form-switch mb-5">
                    <input class="form-check-input theme-choice" type="checkbox" id="rtl-mode-switch" data-appStyle="{{ asset('/admin') }}/assets/css/app-rtl.min.css">
                    <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
                </div>


            </div>

        </div> <!-- end slimscroll-menu-->
    </div> --}}
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <script src="{{ asset('/admin') }}/assets/libs/jquery/jquery.min.js"></script>
    <script src="{{ asset('/admin') }}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('/admin') }}/assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="{{ asset('/admin') }}/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="{{ asset('/admin') }}/assets/libs/node-waves/waves.min.js"></script>

    <!-- apexcharts -->
    <script src="{{ asset('/admin') }}/assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- Plugins js-->
    <script src="{{ asset('/admin') }}/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js">
    </script>
    <script
        src="{{ asset('/admin') }}/assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js">
    </script>

    <script src="{{ asset('/admin') }}/assets/js/pages/dashboard.init.js"></script>


    <script src="{{ asset('/admin') }}/assets/js/app.js"></script>

</body>

</html>
