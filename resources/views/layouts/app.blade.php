<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Dashboard &mdash; SMK INDONESIA') }}</title>
    <link rel="shortcut icon" href="{{ asset('assets/img/school.svg') }}" type="image/x-icon">


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    {{-- //   <link rel="stylesheet" href="assets/css/bootstrap.min.css"> --}}
    {{-- <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet"> --}}
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/modules/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/modules/fontawesome/css/all.min.css') }}">
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('assets/modules/bootstrapsocial/bootstrap-social.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/select2-bootstrap4.css') }}" />

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">

    <script src="{{ asset('assets/modules/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/sweetalert.min.js') }}"></script>

</head>

<body style="background: #e2e8f0">
    <div id="app">
        <div class="navbar-bg"></div>

        <nav class="navbar main-navbar navbar-expand-md navbar-light bg-primary shadow-sm">
            {{-- <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}"> {{ config('app.name', 'Laravel') }}</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                    @endif
                    @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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


    </div> --}}
    <form class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
        </ul>
    </form>
    <ul class="navbar-nav navbar-right">

        <li class="dropdown"><a href="#" data-toggle="dropdown"
                class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <img alt="image" src="{{ asset('assets/img/avatar/avatar-1.png') }}" class="rounded-circle mr-1">
                <div class="d-sm-none d-lg-inline-block">Hi, {{ auth()->user()->name }}</div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="{{ route('logout') }}" style="cursor: pointer" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();"
                    class="dropdown-item has-icon text-danger">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
    </ul>
    </nav>

    <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
            <div class="sidebar-brand">
                <a href="/home">SMK INDONESIA</a>
            </div>
            <div class="sidebar-brand sidebar-brand-sm">
                <a href="/home">SMK</a>
            </div>
            <ul class="sidebar-menu">
                <li class="menu-header">MAIN MENU</li>
                <li class="{{ setActive('admin/dashboard') }}"><a class="nav-link"
                        href="{{ route('admin.dashboard.index') }}"><i class="fas fa-tachometer-alt"></i>
                        <span>Dashboard</span></a></li>
                @can('posts.index')
                <li class="{{ setActive('admin/post') }}"><a class="nav-link" href="{{ route('admin.post.index') }}"><i
                            class="fas fa-book-open"></i>
                        <span>Berita</span></a></li>
                @endcan

                @can('tags.index')
                <li class="{{ setActive('admin/tag') }}"><a class="nav-link" href="{{ route('admin.tag.index') }}"><i
                            class="fas fa-tags"></i>
                        <span>Tags</span></a>
                </li>
                @endcan

                @can('categories.index')
                <li class="{{ setActive('admin/category') }}"><a class="nav-link"
                        href="{{ route('admin.category.index') }}"><i class="fas fa-folder"></i>
                        <span>Kategori</span></a></li>
                @endcan

                @can('events.index')
                <li class="{{ setActive('admin/event') }}"><a class="nav-link"
                        href="{{ route('admin.event.index') }}"><i class="fas fa-bell"></i>
                        <span>Agenda</span></a></li>
                @endcan

                @if(auth()->user()->can('photos.index') || auth()->user()->can('videos.index'))
                <li class="menu-header">GALERI</li>
                @endif

                @can('photos.index')
                <li class="{{ setActive('admin/photo') }}"><a class="nav-link"
                        href="{{ route('admin.photo.index') }}"><i class="fas fa-image"></i>
                        <span>Foto</span></a></li>
                @endcan

                @can('videos.index')
                <li class="{{ setActive('admin/video') }}"><a class="nav-link"
                        href="{{ route('admin.video.index') }}"><i class="fas fa-video"></i>
                        <span>Video</span></a></li>
                @endcan

                @if(auth()->user()->can('roles.index') || auth()->user()->can('permission.index') ||
                auth()->user()->can('users.index'))
                <li class="menu-header">PENGATURAN</li>
                @endif

                @can('sliders.index')
                <li class="{{ setActive('admin/slider') }}"><a class="nav-link"
                        href="{{ route('admin.slider.index') }}"><i class="fas fa-laptop"></i>
                        <span>Sliders</span></a></li>
                @endcan

                <li
                    class="dropdown {{ setActive('admin/role'). setActive('admin/permission'). setActive('admin/user') }}">
                    @if(auth()->user()->can('roles.index') || auth()->user()->can('permission.index') ||
                    auth()->user()->can('users.index'))
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-users"></i><span>Users
                            Management</span></a>
                    @endif

                    <ul class="dropdown-menu">
                        @can('roles.index')
                        <li class="{{ setActive('admin/role') }}"><a class="nav-link"
                                href="{{ route('admin.role.index') }}"><i class="fas fa-unlock"></i> Roles</a>
                        </li>
                        @endcan

                        @can('permissions.index')
                        <li class="{{ setActive('admin/permission') }}"><a class="nav-link"
                                href="{{ route('admin.permission.index') }}"><i class="fas fa-key"></i>
                                Permissions</a></li>
                        @endcan

                        @can('users.index')
                        <li class="{{ setActive('admin/user') }}"><a class="nav-link"
                                href="{{ route('admin.user.index') }}"><i class="fas fa-users"></i>
                                Users</a>
                        </li>
                        @endcan
                    </ul>
                </li>
            </ul>
        </aside>
    </div>

    <main class="py-4">
        @yield('content')
    </main>

    <footer class="main-footer">
        <div class="footer-left">
            Copyright &copy; 2018 <div class="bullet"></div> SMK INDONESIA <div class="bullet"></div> All Rights
            Reserved.
        </div>
        <div class="footer-right">

        </div>
    </footer>
    </div>

    <!-- General JS Scripts -->
    <script src="{{ asset('assets/modules/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/modules/popper.js') }}"></script>
    <script src="{{ asset('assets/modules/tooltip.js') }}"></script>
    <script src="{{ asset('assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('assets/modules/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/stisla.js') }}"></script>
    <script src="{{ asset('assets/modules/select2/dist/js/select2.full.min.js') }}"></script>
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
    <!-- Template JS File -->
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script>
        //active select2
        $(document).ready(function () {
            $('select').select2({
                theme: 'bootstrap4',
                width: 'style',
            });
        });

        //flash message
        @if(session()->has('success'))
        swal({
            type: "success",
            icon: "success",
            title: "BERHASIL!",
            text: "{{ session('success') }}",
            timer: 1500,
            showConfirmButton: false,
            showCancelButton: false,
            buttons: false,
        });
        @elseif(session()->has('error'))
        swal({
            type: "error",
            icon: "error",
            title: "GAGAL!",
            text: "{{ session('error') }}",
            timer: 1500,
            showConfirmButton: false,
            showCancelButton: false,
            buttons: false,
        });
        @endif
    </script>
</body>

</html>