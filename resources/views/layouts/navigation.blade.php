<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mega Able bootstrap admin template by codedthemes</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Mega Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="codedthemes" />
    <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/pages/waves/css/waves.min.css') }}" type="text/css" media="all">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/pages/waves/css/waves.min.css') }}" type="text/css" media="all">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/themify-icons/themify-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery.mCustomScrollbar.css') }}">
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    <div class="theme-loader">
        <div class="loader-track">
            <div class="preloader-wrapper">
            </div>
        </div>
    </div>
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                        <div class="mobile-search waves-effect waves-light">
                            <div class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                        <input type="text" class="form-control" placeholder="Enter Keyword">
                                        <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="index.html">
                            <img class="img-fluid" src="{{ asset('assets/images/logo.png') }}" alt="Theme-Logo" />
                        </a>
                        <a class="mobile-options waves-effect waves-light">
                            <i class="ti-more"></i>
                        </a>
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                            </li>
                            <li class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                        <input type="text" class="form-control">
                                        <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="header-notification">
                                <a href="#!" class="waves-effect waves-light">
                                    <i class="ti-bell"></i>
                                    <span class="badge bg-c-red"></span>
                                </a>
                            </li>
                            <li class="user-profile header-notification">
                                <a href="#!" class="waves-effect waves-light">
                                    <img src="{{ asset('assets/images/avatar-4.jpg') }}" class="img-radius" alt="User-Profile-Image">
                                    <span>{{ Auth::user()->name }}</span>
                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul class="show-notification profile-notification">
                                    <li class="waves-effect waves-light">
                                        <a href="#!">
                                            <i class="ti-settings"></i> Settings
                                        </a>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <a href="user-profile.html">
                                            <i class="ti-user"></i> Profile
                                        </a>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <a href="email-inbox.html">
                                            <i class="ti-email"></i> My Messages
                                        </a>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <a href="auth-lock-screen.html">
                                            <i class="ti-lock"></i> Lock Screen
                                        </a>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <a href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                                <i class="ti-layout-sidebar-left"></i>{{ __('Log Out') }}
                                            </a>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <nav class="pcoded-navbar">
                <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                <div class="pcoded-inner-navbar main-menu">
                    <div class="">
                        <div class="main-menu-header">
                            <img class="img-80 img-radius" src="{{ asset('assets/images/avatar-4.jpg') }}" alt="User-Profile-Image">
                            <div class="user-details">
                                <span id="more-details">{{ Auth::user()->name }}<i class="fa fa-caret-down"></i></span>
                            </div>
                        </div>

                        <div class="main-menu-content">
                            <ul>
                                <li class="more-details">
                                    <a href="user-profile.html"><i class="ti-user"></i>View Profile</a>
                                    <a href="#!"><i class="ti-settings"></i>Settings</a>
                                    <a href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();"><i class="ti-layout-sidebar-left"></i>{{ __('Log Out') }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="pcoded-search">
                        <span class="searchbar-toggle"> </span>
                        <div class="pcoded-search-box ">
                            <input type="text" placeholder="Search">
                            <span class="search-icon"><i class="ti-search"></i></span>
                        </div>
                    </div>
                    <ul class="pcoded-item pcoded-left-item">
                        <li class="active">
                            <a href="index.html" class="waves-effect waves-dark">
                                <span class="pcoded-micon"><i class="ti-home"></i></span>
                                <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                                <span class="pcoded-mcaret"></span>
                            </a>
                        </li>
                        <li class="">
                            <a href="navbar-light.html" class="waves-effect waves-dark">
                                <span class="pcoded-micon"><i class="ti-layout-cta-right"></i><b>N</b></span>
                                <span class="pcoded-mtext" data-i18n="nav.navigate.main">Navigation</span>
                                <span class="pcoded-mcaret"></span>
                            </a>
                        </li>
                        <li class="pcoded-hasmenu">
                            <a href="javascript:void(0)" class="waves-effect waves-dark">
                                <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                                <span class="pcoded-mtext" data-i18n="nav.basic-components.main">Basic Components</span>
                                <span class="pcoded-mcaret"></span>
                            </a>
                            <ul class="pcoded-submenu">
                                <li class=" ">
                                    <a href="alert.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Alert</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="breadcrumb.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Breadcrumbs</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="button.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext" data-i18n="nav.basic-components.button">Button</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="box-shadow.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext" data-i18n="nav.basic-components.box-shadow">Box-Shadow</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="accordion.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Accordion</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="generic-class.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext" data-i18n="nav.basic-components.generic-class">Generic Class</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="tabs.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext" data-i18n="nav.basic-components.tabs">Tabs</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="color.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext" data-i18n="nav.basic-components.color">Color</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="label-badge.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext" data-i18n="nav.basic-components.label-badge">Label Badge</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="progress-bar.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext" data-i18n="nav.basic-components.progress-bar">Progress Bar</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="preloader.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext" data-i18n="nav.basic-components.preloader">Pre-Loader</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="list.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext" data-i18n="nav.basic-components.list">List</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="tooltip.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext" data-i18n="nav.basic-components.tooltip-popover">Tooltip And Popover</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="typography.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext" data-i18n="nav.basic-components.typography">Typography</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="other.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext" data-i18n="nav.basic-components.other">Other</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <div class="main-body">
                        <div class="page-wrapper">
                            <div class="page-body">
                                @yield('content')
                            </div>
                        </div>
                        <div id="styleSelector"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Required Jquery -->
    <script type="text/javascript" src="{{ asset('assets/js/jquery/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery-ui/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/popper.js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- waves js -->
    <script src="{{ asset('assets/pages/waves/js/waves.min.js') }}"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="{{ asset('assets/js/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
    <!-- Custom js -->
    <script src="{{ asset('assets/js/pcoded.min.js') }}"></script>
    <script src="{{ asset('assets/js/vertical/vertical-layout.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>