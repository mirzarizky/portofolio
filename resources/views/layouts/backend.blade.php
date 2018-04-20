<!doctype html>
<!--[if lte IE 9]><html lang="en" class="lt-ie10 lt-ie10-msg no-focus"><![endif]-->
<!--[if gt IE 9]><!--><html lang="en" class="no-focus"><!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <title>{{ config('app.name') }} - @yield('title')</title>

    <meta name="description" content="">
    <meta name="author" content="Mirja">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Mirja">
    <meta property="og:site_name" content="Mirja">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    {{--<!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->--}}
    <link rel="shortcut icon" href="assets/img/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/img/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <link rel="stylesheet" id="css-main" href="{{asset('css/codebase.min.css')}}">
    @yield('style')
    <!-- END Stylesheets -->
    {{--<!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->--}}
    {{--<!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->--}}
</head>
<body>
<!-- Page Container -->
<div id="page-container" class="sidebar-o side-scroll sidebar-inverse page-header-modern main-content-boxed">
    <!-- Sidebar -->
    <nav id="sidebar">
        <!-- Sidebar Scroll Container -->
        <div id="sidebar-scroll">
            <!-- Sidebar Content -->
            <div class="sidebar-content">
                <!-- Side Header -->
                <div class="content-header content-header-fullrow px-15">
                    <!-- Mini Mode -->
                    <div class="content-header-section sidebar-mini-visible-b">
                        <!-- Logo -->
                        <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                                    <span class="text-dual-primary-dark">m</span><span class="text-primary">irja</span>
                                </span>
                        <!-- END Logo -->
                    </div>
                    <!-- END Mini Mode -->

                    <!-- Normal Mode -->
                    <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                        <!-- Close Sidebar, Visible only on mobile screens -->
                        <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                            <i class="fa fa-times text-danger"></i>
                        </button>
                        <!-- END Close Sidebar -->

                        <!-- Logo -->
                        <div class="content-header-item">
                            <a class="link-effect font-w700" href="{{url('/')}}">
                                <i class="si si-fire text-primary"></i>
                                <span class="font-size-xl text-dual-primary-dark">M</span><span class="font-size-xl text-primary">irja</span>
                            </a>
                        </div>
                        <!-- END Logo -->
                    </div>
                    <!-- END Normal Mode -->
                </div>
                <!-- END Side Header -->

                <!-- Side User -->
                <div class="content-side content-side-full content-side-user px-10 align-parent">
                    <!-- Visible only in mini mode -->
                    <div class="sidebar-mini-visible-b align-v animated fadeIn">
                        <img class="img-avatar img-avatar32" src="{{asset('img/avatars/avatar0.jpg')}}" alt="Avatar">
                    </div>
                    <!-- END Visible only in mini mode -->

                    <!-- Visible only in normal mode -->
                    <div class="sidebar-mini-hidden-b text-center">
                        <a class="img-link" href="">
                            <img class="img-avatar" src="{{asset('img/avatars/avatar0.jpg')}}" alt="Avatar">
                        </a>
                        <ul class="list-inline mt-10">
                            <li class="list-inline-item">
                                <a class="link-effect text-dual-primary-dark font-size-xs font-w600 text-uppercase" href="">{{Auth::user()->name}}</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="link-effect text-dual-primary-dark" data-toggle="layout" data-action="sidebar_style_inverse_toggle" href="javascript:void(0)">
                                    <i class="si si-drop"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="link-effect text-dual-primary-dark" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                                    <i class="si si-logout"></i>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </div>
                    <!-- END Visible only in normal mode -->
                </div>
                <!-- END Side User -->

                <!-- Side Navigation -->
                <div class="content-side content-side-full">
                    <ul class="nav-main">
                        <li>
                            <a class="active" href="{{route('dashboard')}}">
                                <i class="si si-cup"></i>
                                <span class="sidebar-mini-hide">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-main-heading">
                            <span class="sidebar-mini-visible">HD</span>
                            <span class="sidebar-mini-hidden">Heading</span>
                        </li>
                        <li>
                            <a class="nav-submenu" data-toggle="nav-submenu" href="#">
                                <i class="si si-puzzle"></i>
                                <span class="sidebar-mini-hide">Dropdown</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="javascript:void(0)">Link #1</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Link #2</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- END Side Navigation -->
            </div>
            <!-- Sidebar Content -->
        </div>
        <!-- END Sidebar Scroll Container -->
    </nav>
    <!-- END Sidebar -->

    <!-- Header -->
    <header id="page-header">
        <!-- Header Content -->
        <div class="content-header">
            <!-- Left Section -->
            <div class="content-header-section">
                <!-- Toggle Sidebar -->
                <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="sidebar_toggle">
                    <i class="fa fa-navicon"></i>
                </button>
                <!-- END Toggle Sidebar -->
            </div>
            <!-- END Left Section -->

            <!-- Right Section -->
            <div class="content-header-section">
                <!-- User Dropdown -->
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{Auth::user()->name}}<i class="fa fa-angle-down ml-5"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right min-width-150" aria-labelledby="page-header-user-dropdown">
                        <a class="dropdown-item" href="">
                            <i class="si si-user mr-5"></i> Profile
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                            <i class="si si-logout mr-5"></i> Sign Out
                        </a>
                    </div>
                </div>
                <!-- END User Dropdown -->
            </div>
            <!-- END Right Section -->
        </div>
        <!-- END Header Content -->

        <!-- Header Loader -->
        <div id="page-header-loader" class="overlay-header bg-primary">
            <div class="content-header content-header-fullrow text-center">
                <div class="content-header-item">
                    <i class="fa fa-sun-o fa-spin text-white"></i>
                </div>
            </div>
        </div>
        <!-- END Header Loader -->
    </header>
    <!-- END Header -->

    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Content -->
        @yield('content')
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->

    <!-- Footer -->
    <footer id="page-footer" class="opacity-0">
        <div class="content py-20 font-size-xs clearfix">
            <div class="float-right">
                Crafted with <i class="fa fa-heart text-pulse"></i>
            </div>
            <div class="float-left">
                <a class="font-w600" href="https://mirzarizky.com" target="_blank">Mirja</a> &copy; <span class="js-year-copy"></span>
            </div>
        </div>
    </footer>
    <!-- END Footer -->
</div>
<!-- END Page Container -->

<!-- Core JS -->
<script src="{{asset('js/codebase.min.js')}}"></script>
@yield('script')
</body>
</html>
