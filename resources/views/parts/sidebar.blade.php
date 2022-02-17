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
                <a class="nav-link" href="{{ route('home')}}">
                    <svg class="nav-icon">
                        <use xlink:href="{{ asset('vendors/coreui/icons/svg/free.svg#cil-speedometer') }}"></use>
                    </svg> Dashboard
                </a>
            </li>
            @if(auth()->user()->is_admin)
            <li class="nav-title">Admin</li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.pages.index')}}">
                    <svg class="nav-icon">
                        <use xlink:href="{{ asset('vendors/coreui/icons/svg/free.svg#cil-drop') }}"></use>
                    </svg> Pages
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="typography.html">
                    <svg class="nav-icon">
                        <use xlink:href="{{ asset('vendors/coreui/icons/svg/free.svg#cil-pencil') }}"></use>
                    </svg> Typography
                </a>
            </li>
            @endif
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
