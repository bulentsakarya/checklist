<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('vendors/simplebar/css/simplebar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendors/simplebar.css') }}">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/examples.css') }}" rel="stylesheet">
</head>

<body>
    <div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
        <div class="sidebar-brand d-none d-md-flex">
            <svg class="sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
                <use xlink:href="{{ asset('assets/brand/coreui.svg#full') }}"></use>
            </svg>
            <svg class="sidebar-brand-narrow" width="46" height="46" alt="CoreUI Logo">
                <use xlink:href="{{ asset('assets/brand/coreui.svg#signet') }}"></use>
            </svg>
        </div>
        <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <svg class="nav-icon">
                        <use xlink:href="{{ asset('vendors/coreui/icons/svg/free.svg#cil-speedometer') }}"></use>
                    </svg> Dashboard<span class="badge badge-sm bg-info ms-auto">NEW</span>
                </a>
            </li>
            <li class="nav-title">Theme</li>
            <li class="nav-item">
                <a class="nav-link" href="colors.html">
                    <svg class="nav-icon">
                        <use xlink:href="{{ asset('vendors/coreui/icons/svg/free.svg#cil-drop') }}"></use>
                    </svg> Colors
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="typography.html">
                    <svg class="nav-icon">
                        <use xlink:href="{{ asset('vendors/coreui/icons/svg/free.svg#cil-pencil') }}"></use>
                    </svg> Typography
                </a>
            </li>
            <li class="nav-title">Components</li>
            <li class="nav-group">
                <a class="nav-link nav-group-toggle" href="#">
                    <svg class="nav-icon">
                        <use xlink:href="{{ asset('vendors/coreui/icons/svg/free.svg#cil-puzzle') }}"></use>
                    </svg> Base
                </a>
                <ul class="nav-group-items">
                    <li class="nav-item"><a class="nav-link" href="base/accordion.html"><span class="nav-icon"></span> Accordion</a></li>
                    <li class="nav-item"><a class="nav-link" href="base/breadcrumb.html"><span class="nav-icon"></span> Breadcrumb</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-link-danger" href="https://coreui.io/pro/" target="_top">
                    <svg class="nav-icon">
                        <use xlink:href="{{ asset('vendors/coreui/icons/svg/free.svg#cil-layers') }}"></use>
                    </svg> Try CoreUI
                    <div class="fw-semibold">PRO</div>
                </a>
            </li>
        </ul>
        <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
    </div>
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
        <header class="header header-sticky mb-4">
            <div class="container-fluid">
                <button class="header-toggler px-md-0 me-md-3" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
                    <svg class="icon icon-lg">
                        <use xlink:href="{{ asset('vendors/coreui/icons/svg/free.svg#cil-menu') }}"></use>
                    </svg>
                </button>
                <a class="header-brand d-md-none" href="#">
                    <svg width="118" height="46" alt="CoreUI Logo">
                        <use xlink:href="{{ asset('assets/brand/coreui.svg#full') }}"></use>
                    </svg>
                </a>
                <ul class="header-nav d-none d-md-flex">
                    <li class="nav-item"><a class="nav-link" href="#">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Users</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Settings</a></li>
                </ul>
                <ul class="header-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <svg class="icon icon-lg">
                                <use xlink:href="{{ asset('vendors/coreui/icons/svg/free.svg#cil-bell') }}"></use>
                            </svg>
                        </a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#">
                            <svg class="icon icon-lg">
                                <use xlink:href="{{ asset('vendors/coreui/icons/svg/free.svg#cil-list-rich') }}"></use>
                            </svg></a></li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <svg class="icon icon-lg">
                                <use xlink:href="{{ asset('vendors/coreui/icons/svg/free.svg#cil-envelope-open') }}"></use>
                            </svg>
                        </a>
                    </li>
                </ul>
                <ul class="header-nav ms-3">
                    <li class="nav-item dropdown">
                        <a class="nav-link py-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <div class="avatar avatar-md"><img class="avatar-img" src="{{ asset('assets/img/avatars/8.jpg') }}" alt="user@email.com"></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end pt-0">
                            <div class="dropdown-header bg-light py-2">
                                <div class="fw-semibold">Account</div>
                            </div>
                            <a class="dropdown-item" href="#">
                                <svg class="icon me-2">
                                    <use xlink:href="{{ asset('vendors/coreui/icons/svg/free.svg#cil-bell') }}"></use>
                                </svg> Updates<span class="badge badge-sm bg-info ms-2">42</span>
                            </a>
                            <a class="dropdown-item" href="#">
                                <svg class="icon me-2">
                                    <use xlink:href="{{ asset('vendors/coreui/icons/svg/free.svg#cil-envelope-open') }}"></use>
                                </svg> Messages<span class="badge badge-sm bg-success ms-2">42</span>
                            </a>
                            <a class="dropdown-item" href="#">
                                <svg class="icon me-2">
                                    <use xlink:href="{{ asset('vendors/coreui/icons/svg/free.svg#cil-task') }}"></use>
                                </svg> Tasks<span class="badge badge-sm bg-danger ms-2">42</span>
                            </a>
                            <a class="dropdown-item" href="#">
                                <svg class="icon me-2">
                                    <use xlink:href="{{ asset('vendors/coreui/icons/svg/free.svg#cil-comment-square') }}"></use>
                                </svg> Comments<span class="badge badge-sm bg-warning ms-2">42</span>
                            </a>
                            <div class="dropdown-header bg-light py-2">
                                <div class="fw-semibold">Settings</div>
                            </div>
                            <a class="dropdown-item" href="#">
                                <svg class="icon me-2">
                                    <use xlink:href="{{ asset('vendors/coreui/icons/svg/free.svg#cil-user') }}"></use>
                                </svg> Profile
                            </a>
                            <a class="dropdown-item" href="#">
                                <svg class="icon me-2">
                                    <use xlink:href="{{ asset('vendors/coreui/icons/svg/free.svg#cil-settings') }}"></use>
                                </svg> Settings
                            </a>
                            <a class="dropdown-item" href="#">
                                <svg class="icon me-2">
                                    <use xlink:href="{{ asset('vendors/coreui/icons/svg/free.svg#cil-credit-card') }}"></use>
                                </svg> Payments<span class="badge badge-sm bg-secondary ms-2">42</span>
                            </a>
                            <a class="dropdown-item" href="#">
                                <svg class="icon me-2">
                                    <use xlink:href="{{ asset('vendors/coreui/icons/svg/free.svg#cil-file') }}"></use>
                                </svg> Projects<span class="badge badge-sm bg-primary ms-2">42</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">
                                <svg class="icon me-2">
                                    <use xlink:href="{{ asset('vendors/coreui/icons/svg/free.svg#cil-lock-locked') }}"></use>
                                </svg> Lock Account
                            </a>
                            <a class="dropdown-item" href="#">
                                <svg class="icon me-2">
                                    <use xlink:href="{{ asset('vendors/coreui/icons/svg/free.svg#cil-account-logout') }}"></use>
                                </svg> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="header-divider"></div>
            <div class="container-fluid">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb my-0 ms-2">
                        <li class="breadcrumb-item"><span>Home</span></li>
                        <li class="breadcrumb-item active"><span>Blank</span></li>
                    </ol>
                </nav>
            </div>
        </header>
        <div class="body flex-grow-1 px-3">
            <div class="container-lg">
                @yield('content')
            </div>
        </div>
        <footer class="footer">
            <div><a href="https://coreui.io">CoreUI </a><a href="https://coreui.io">Bootstrap Admin Template</a> © 2021 creativeLabs.</div>
            <div class="ms-auto">Powered by&nbsp;<a href="https://coreui.io/bootstrap/ui-components/">CoreUI UI Components</a></div>
        </footer>
    </div>
    <script src="{{ asset('vendors/coreui/coreui/js/coreui.bundle.min.js') }}"></script>
    <script src="{{ asset('vendors/simplebar/js/simplebar.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.24.1/prism.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.24.1/plugins/autoloader/prism-autoloader.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.24.1/plugins/unescaped-markup/prism-unescaped-markup.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.24.1/plugins/normalize-whitespace/prism-normalize-whitespace.js"></script>
</body>

</html>


<!-- <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

CSRF Token
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title></title>

    <!-- Scripts
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html> -->
