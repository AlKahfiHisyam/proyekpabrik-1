<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Responsive layout --}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

    {{-- Title --}}
    <title>@yield('title')</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('/managerproduksi/favicon/favicon.ico') }}">
    {{-- <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/managerproduksi/favicon/apple-touch-icon.png') }}"> --}}
    {{-- <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/managerproduksi/favicon/favicon-32*32.png') }}"> --}}
    {{-- <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/managerproduksi/favicon/favicon-16*16.png') }}"> --}}
    {{-- <link rel="manifest" href="{{ asset('/managerproduksi/favicon/site.webmanifest') }}"> --}}
    
    {{-- Soyuz CSS + Bootstrap --}}
    <link href="{{ asset('/assets/plugins/switchery/switchery.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/plugins/animate/animate.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/assets/css/icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/assets/css/flag-icon.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/assets/css/style.css') }}" rel="stylesheet" type="text/css">
    
    {{-- Fontawesome --}}
    <link rel="stylesheet" href="{{ asset('/managerproduksi/fontawesome/css/all.min.css') }}">

    {{-- Extra CSS --}}
    <link rel="stylesheet" href="{{ asset('/managerproduksi/css/header.css') }}">
    @yield('extra-css')

</head>
<body class="horizontal-layout">
<!-- Start Containerbar -->
<div id="containerbar" class="container-fluid">
    <!-- Start Leftbar -->
    <!-- <div class="leftbar"> -->
    <!-- Start Sidebar -->
    <!-- <div class="sidebar">    -->

    <!-- </div> -->
    <!-- End Sidebar -->
    <!-- </div> -->
    <!-- End Leftbar -->
    <!-- Start Rightbar -->
    <div class="rightbar">
        <!-- Start Topbar Mobile -->
        <div class="topbar-mobile">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="mobile-logobar">
                        <a href="{{ url('/manager-produksi') }}" class="mobile-logo"><img src="{{ asset('/managerproduksi/img/logo_gangsar.png') }}" class="img-fluid"
                                alt="logo"></a>
                    </div>
                    <div class="mobile-togglebar">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <div class="topbar-toggle-icon">
                                    <a class="topbar-toggle-hamburger" href="javascript:void();">
                                        <img src="{{ asset('/assets/images/svg-icon/horizontal.svg') }}"
                                            class="img-fluid menu-hamburger-horizontal" alt="horizontal">
                                        <img src="{{ asset('/assets/images/svg-icon/verticle.svg') }}"
                                            class="img-fluid menu-hamburger-vertical" alt="verticle">
                                    </a>
                                </div>
                            </li>
                            <li class="list-inline-item">
                                <div class="menubar">
                                    <a class="menu-hamburger navbar-toggle bg-transparent" href="javascript:void();"
                                        data-toggle="collapse" data-target="#navbar-menu" aria-expanded="true">
                                        <img src="{{ asset('/assets/images/svg-icon/menu.svg') }}"
                                            class="img-fluid menu-hamburger-collapse" alt="menu">
                                        <img src="{{ asset('/assets/images/svg-icon/close.svg') }}"
                                            class="img-fluid menu-hamburger-close" alt="close">
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Topbar -->
        <div class="topbar">
            <!-- Start container-fluid -->
            <div class="container-fluid">
                <!-- Start row -->
                <div class="row align-items-center">
                    <!-- Start col -->
                    <div class="col-md-12 align-self-center">
                        <div class="togglebar">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <div class="logobar">
                                        <a href="{{ url('/manager-produksi') }}" class="logo logo-large"><img src="{{ asset('/managerproduksi/img/logo_gangsar.png') }}"
                                                class="img-fluid" alt="logo"></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="infobar">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <div class="profilebar">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle" href="#" role="button" id="profilelink"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                                                    src="{{ asset('/assets/images/users/profile.svg') }}" class="img-fluid"
                                                    alt="profile">
                                                    <span class="live-icon">{{ App\Models\Pegawai::where('id_jabatan', 3)->value('nama') }}</span>
                                                    <span class="feather icon-chevron-down live-icon"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="profilelink">
                                                <div class="dropdown-item">
                                                    <div class="profilename">
                                                        <h5>{{ App\Models\Pegawai::where('id_jabatan', 3)->value('nama') }}</h5>
                                                    </div>
                                                </div>
                                                <div class="userbox pr-4">
                                                    <ul class="list-unstyled mb-0">
                                                        <li class="media dropdown-item">
                                                            <a href="{{ url('/change-password') }}" class="profile-icon">
                                                                <img src="{{ asset('/assets/images/svg-icon/authentication.svg') }}" class="img-fluid" alt="logout">
                                                                Change Password
                                                            </a>
                                                        </li>
                                                        <li class="media dropdown-item">
                                                            <a href="{{ url('/logout') }}" class="profile-icon">
                                                                <img src="{{ asset('/assets/images/svg-icon/logout.svg') }}" class="img-fluid" alt="logout">
                                                                Logout
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-inline-item menubar-toggle">
                                    <div class="menubar">
                                        <a class="menu-hamburger navbar-toggle bg-transparent" href="javascript:void();"
                                            data-toggle="collapse" data-target="#navbar-menu" aria-expanded="true">
                                            <img src="{{ asset('/assets/images/svg-icon/menu.svg') }}"
                                                class="img-fluid menu-hamburger-collapse" alt="menu">
                                            <img src="{{ asset('/assets/images/svg-icon/close.svg') }}"
                                                class="img-fluid menu-hamburger-close" alt="close">
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End col -->
                </div>
                <!-- End row -->
            </div>
            <!-- End container-fluid -->
        </div>
        <!-- End Topbar -->
        <!-- Start Navigationbar -->
        <div class="navigationbar">
            <!-- Start container-fluid -->
            <div class="container-fluid">
                <!-- Start Horizontal Nav -->
                <nav class="horizontal-nav mobile-navbar fixed-navbar">
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="horizontal-menu">
                            <li class="menu-dashboard">
                                <a href="{{ url('/manager-produksi') }}">
                                    <img src="{{ asset('/assets/images/svg-icon/frontend.svg') }}" class="img-fluid" alt="Home">
                                    <span>Dashboard</span>
                                </a>
                            </li>

                            <li class="menu-penerimaan-barang">
                                <a href="{{ url('/penerimaan/history_penerimaan') }}">
                                    <img src="{{ asset('/assets/images/svg-icon/ecommerce.svg') }}" class="img-fluid" alt="hospital">
                                    <span>Penerimaan Barang</span>
                                </a>
                            </li>

                            <li class="dropdown menu-data-produksi">
                                <a href="" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="{{ asset('/assets/images/svg-icon/tables.svg') }}" class="img-fluid" alt="hospital">
                                    <span>Data Produksi</span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li class="dropdown">
                                        <a href="javaScript:void();" class="dropdown-toggle" data-toggle="dropdown">
                                        <img src="{{ asset('/assets/images/svg-icon/tables.svg') }}" class="img-fluid"
                                                alt="dashboard">Gudang Kacang
                                        </a>

                                        <ul class="dropdown-menu">
                                            <li><a href="{{ url('/manpro-kacang/home') }}">Home</a></li>
                                            <li class="dropdown">
                                                <a href="javaScript:void();" class="dropdown-toggle" data-toggle="dropdown">Stock</a>

                                                <ul class="dropdown-menu">
                                                    <li><a href="{{url('/manpro-kacang/stock/gk')}}">Gudang Kacang</a></li>
                                                    <li><a href="{{url('/manpro-kacang/stock/gks')}}">Gudang Kacang Sortir</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="{{ url('/manpro-kacang/kerjaharian') }}">Kerja Harian</a></li>
                                        </ul>
                                    </li>

                                    <li class="dropdown">
                                        <a href="javaScript:void();" class="dropdown-toggle" data-toggle="dropdown">
                                        <img src="{{ asset('/assets/images/svg-icon/tables.svg') }}" class="img-fluid"
                                                alt="dashboard">Gudang Bawang
                                        </a>

                                        <ul class="dropdown-menu">
                                            <li><a href="{{url('/manpro-bawang/home')}}">Home</a></li>
                                            <li class="dropdown">
                                                <a href="javaScript:void();" class="dropdown-toggle" data-toggle="dropdown">Stock</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="{{url('/manpro-bawang/stock/bawangkulit')}}">Bawang Kulit</a></li>
                                                    <li><a href="{{url('/manpro-bawang/stock/bawangkupas')}}">Bawang Kupas</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="javaScript:void();" class="dropdown-toggle" data-toggle="dropdown">Kerja Harian</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="{{url('/manpro-bawang/kerjaharian/tenagakupas')}}">Tenaga Kupas</a></li>
                                                    <li><a href="{{url('/manpro-bawang/kerjaharian/pembagianbawang')}}">Pembagian Bawang</a></li>
                                                    <li><a href="{{url('/manpro-bawang/kerjaharian/penerimaanbawang')}}">Penerimaan Bawang</a></li>
                                                    <li><a href="{{url('/manpro-bawang/kerjaharian/persiapanmasak')}}">Persiapan Masak Kanji</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="dropdown">
                                        <a href="javaScript:void();" class="dropdown-toggle" data-toggle="dropdown">
                                        <img src="{{ asset('/assets/images/svg-icon/tables.svg') }}" class="img-fluid"
                                                alt="dashboard">Gudang Bumbu
                                        </a>

                                        <ul class="dropdown-menu">
                                            <li><a href="{{ url('/manager-produksi/gudang-bumbu') }}">Home</a></li>
                                            <li><a href="{{ url('/manager-produksi/gudang-bumbu/stock') }}">Stock</a></li>
                                            <li><a href="{{ url('/manager-produksi/gudang-bumbu/kerja-harian') }}">Kerja Harian</a></li>
                                        </ul>
                                    </li>

                                    <li class="dropdown">
                                        <a href="javaScript:void();" class="dropdown-toggle" data-toggle="dropdown">
                                        <img src="{{ asset('/assets/images/svg-icon/tables.svg') }}" class="img-fluid"
                                                alt="dashboard">Gudang Tapioka
                                        </a>

                                        <ul class="dropdown-menu">
                                            <li><a href="{{ url('/manager-produksi/gudang-tapioka') }}">Home</a></li>
                                            <li><a href="{{ url('/manager-produksi/gudang-tapioka/stock') }}">Stock</a></li>
                                            <li><a href="{{ url('/manager-produksi/gudang-tapioka/kerja-harian') }}">Kerja Harian</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                
                            </li>

                            <li class="menu-order-masak">
                                <a href="{{ url('/manager-produksi/order-masak') }}">
                                    <img src="{{ asset('/assets/images/svg-icon/basic.svg') }}" class="img-fluid" alt="hospital">
                                    <span>Order Masak</span>
                                </a>
                            </li>
                            
                        
                        </ul>
                    </div>
                </nav>
                <!-- End Horizontal Nav -->
            </div>
            <!-- End container-fluid -->
        </div>
        <!-- End Navigationbar -->
        <!-- Start Breadcrumbbar -->
        <div class="breadcrumbbar">
            <div class="row align-items-center">
                <div class="col-md-8 col-lg-8">
                    <h4 class="page-title">
                        @yield('page-title')
                    </h4>
                    <div class="breadcrumb-list">
                        <ol class="breadcrumb">
                            @yield('breadcrumb')
                        </ol>
                    </div>
                </div>
                {{-- <div class="col-md-4 col-lg-4">
                    <div class="widgetbar">
                        <button class="btn btn-primary-rgba"><i class="feather icon-plus mr-2"></i>Actions</button>
                    </div>
                </div> --}}
            </div>
        </div>
        <!-- End Breadcrumbbar -->
        <!-- Start Contentbar -->
        <div class="contentbar">

            <!-- Start row -->
            {{-- <div class="row">
                <!-- Start col -->
                <div class="col-md-12 col-lg-12 col-xl-12">
                    <div class="text-center mt-3 mb-5">
                        <h4>Page Title</h4>
                    </div>
                </div>
                <!-- End col -->
            </div> --}}
            <!-- End row -->

            @yield('content')

        </div>
        <!-- End Contentbar -->
        <!-- Start Footerbar -->
        <div class="footerbar">
            <footer class="footer">
                <p class="mb-0">© 2020 Gangsar - All Rights Reserved.</p>
            </footer>
        </div>
        <!-- End Footerbar -->
    </div>
    <!-- End Rightbar -->
</div>
<!-- End Containerbar -->

    {{-- Boostrap Script --}}
    <script src="{{ asset('/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('/assets/js/bootstrap.min.js') }}"></script>

    {{-- Soyuz Script --}}
    <script src="{{ asset('/assets/js/modernizr.min.js') }}"></script>
    <script src="{{ asset('/assets/js/detect.js') }}"></script>
    <script src="{{ asset('/assets/js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('/assets/js/horizontal-menu.js') }}"></script>

    {{-- Switchery Js --}}
    <script src="{{ asset('/assets/plugins/switchery/switchery.min.js') }}"></script>
    
    {{-- Extra Script --}}
    @yield('extra-script')
    
    {{-- Core Js --}}
    <script src="{{ asset('/assets/js/core2.js') }}"></script>
</body>
</html>