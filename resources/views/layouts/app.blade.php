<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>:: Ticket</title>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Lucid HR & Project Admin Dashboard Template with Bootstrap 5x">
    <meta name="author" content="WrapTheme, design by: ThemeMakker.com">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <link rel="stylesheet" href="{{ asset('assets/css/dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}" />
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    @livewireStyles

    @stack('css')
</head>

<body>

    <div id="layout" class="theme-cyan">

        <!-- Page Loader -->
        <div class="page-loader-wrapper text-center">
            <div class="loader">
                <svg class="p-3 bg-light rounded" width="120px" viewBox="0 0 85 25">
                    <path d="M12.3,7.2l1.5-3.7l8.1,19.4H19l-2.4-5.7H8.2l1.1-2.5h6.1L12.3,7.2z M14.8,20.2l1,2.7H0L9.5,0h3.1L4.3,20.2H14.8
                    z M29,18.5v-14h1.6v12.6h6.2v1.5H29V18.5z M49.6,4.5v9.1c0,1.6-0.5,2.9-1.5,3.8s-2.3,1.4-4,1.4s-3-0.5-3.9-1.4s-1.4-2.2-1.4-3.8V4.5
                    h1.6v9.1c0,1.2,0.3,2.1,1,2.7c0.6,0.6,1.6,0.9,2.8,0.9s2.1-0.3,2.7-0.9c0.6-0.6,1-1.5,1-2.7V4.5H49.6z M59.4,5.7
                    c-1.5,0-2.8,0.5-3.7,1.5s-1.3,2.4-1.3,4.2s0.4,3.3,1.3,4.3c0.9,1,2.1,1.5,3.7,1.5c1,0,2.1-0.2,3.4-0.5v1.4c-1,0.4-2.2,0.5-3.6,0.5
                    c-2.1,0-3.7-0.6-4.8-1.9s-1.7-3-1.7-5.4c0-1.4,0.3-2.7,0.8-3.8c0.5-0.9,1.3-1.8,2.3-2.4s2.2-0.9,3.6-0.9c1.5,0,2.8,0.3,3.9,0.8
                    l-0.7,1.4C61.5,6,60.4,5.7,59.4,5.7z M65.8,18.5v-14h1.6v14.1h-1.6V18.5z M82.5,11.3c0,2.3-0.6,4.1-1.9,5.3s-3.1,1.8-5.4,1.8h-3.9
                    V4.5h4.3c2.2,0,3.9,0.6,5.1,1.8S82.5,9.2,82.5,11.3z M80.8,11.4c0-1.8-0.5-3.2-1.4-4.1s-2.3-1.4-4.1-1.4h-2.4v11.2h2
                    c1.9,0,3.4-0.5,4.4-1.4S80.8,13.3,80.8,11.4z" />
                </svg>
                <div class="h5 fw-light mt-3">Please wait</div>
            </div>
        </div>

        <div id="wrapper">

            <!-- top navbar -->
            <nav class="navbar navbar-fixed-top">
                <div class="container-fluid">
                    <div class="navbar-btn">
                        <button type="button" class="btn-toggle-offcanvas"><i class="fa fa-bars"></i></button>
                    </div>

                    <div class="navbar-brand ps-2">
                        <a href="index.html" class="d-flex">
                            <svg width="85px" viewBox="0 0 85 25">
                                <path class="fill-primary" d="M12.3,7.2l1.5-3.7l8.1,19.4H19l-2.4-5.7H8.2l1.1-2.5h6.1L12.3,7.2z M14.8,20.2l1,2.7H0L9.5,0h3.1L4.3,20.2H14.8
                                z M29,18.5v-14h1.6v12.6h6.2v1.5H29V18.5z M49.6,4.5v9.1c0,1.6-0.5,2.9-1.5,3.8s-2.3,1.4-4,1.4s-3-0.5-3.9-1.4s-1.4-2.2-1.4-3.8V4.5
                                h1.6v9.1c0,1.2,0.3,2.1,1,2.7c0.6,0.6,1.6,0.9,2.8,0.9s2.1-0.3,2.7-0.9c0.6-0.6,1-1.5,1-2.7V4.5H49.6z M59.4,5.7
                                c-1.5,0-2.8,0.5-3.7,1.5s-1.3,2.4-1.3,4.2s0.4,3.3,1.3,4.3c0.9,1,2.1,1.5,3.7,1.5c1,0,2.1-0.2,3.4-0.5v1.4c-1,0.4-2.2,0.5-3.6,0.5
                                c-2.1,0-3.7-0.6-4.8-1.9s-1.7-3-1.7-5.4c0-1.4,0.3-2.7,0.8-3.8c0.5-0.9,1.3-1.8,2.3-2.4s2.2-0.9,3.6-0.9c1.5,0,2.8,0.3,3.9,0.8
                                l-0.7,1.4C61.5,6,60.4,5.7,59.4,5.7z M65.8,18.5v-14h1.6v14.1h-1.6V18.5z M82.5,11.3c0,2.3-0.6,4.1-1.9,5.3s-3.1,1.8-5.4,1.8h-3.9
                                V4.5h4.3c2.2,0,3.9,0.6,5.1,1.8S82.5,9.2,82.5,11.3z M80.8,11.4c0-1.8-0.5-3.2-1.4-4.1s-2.3-1.4-4.1-1.4h-2.4v11.2h2
                                c1.9,0,3.4-0.5,4.4-1.4S80.8,13.3,80.8,11.4z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </nav>
            

            <!-- Sidbar menu -->
            {{-- <div id="left-sidebar" class="sidebar">
                <div class="user-account p-3 mb-3">
                    <div class="d-flex mb-3 pb-3 border-bottom align-items-center">
                        <img src="/assets/images/user.png" class="avatar lg rounded me-3" alt="User Profile Picture">
                        <div class="dropdown flex-grow-1">
                            <span>Welcome,</span>
                            <a href="#" class="dropdown-toggle user-name" data-bs-toggle="dropdown"><strong>{{Session::get('user_account')->username}}</strong></a>
                            <ul class="dropdown-menu p-2 shadow-sm">
                                <li class="divider"></li>
                                <li><a href="page-login.html"><i class="fa fa-power-off me-2"></i>Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- nav tab: content -->
                <nav class="sidebar-nav">
                    <ul class="main-menu metismenu list-unstyled">
                        <li class="{{ Request::is('home*') ? 'active' : '' }}"><a href="home"><i class="fa fa-home"></i>Home</a>
                        
                        <li class="{{ Request::is('users*') ? 'active' : '' }}"><a href="users"><i class="fa fa-user"></i>Users</a></li>
                        
                        <li class="{{ Request::is('project*') ? 'active' : '' }}"><a href="project"><i class="fa fa-list-ul"></i>Project</a></li>
                    </ul>
                </nav>
            </div> --}}

            <div id="main-content">
                @yield('content')
            </div>

        </div>


    </div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- core js file -->
<script src="{{ asset('assets/bundles/libscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/bundles/dataTables.bundle.js') }}"></script>
<script src="{{ asset('assets/bundles/sweetalert2.bundle.js') }}"></script>
<script src="{{ asset('assets/bundles/select2.bundle.js') }}"></script>

<script src="{{ asset('assets/bundles/datepicker.bundle.js') }}"></script>
    
<script src="{{ asset('assets/bundles/tagsinput.bundle.js') }}"></script>

    <!-- page js file -->
    <script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
    
    @livewireScripts

    <script>

        window.livewire.on('SwalSuccess', (title, message) => {
            Swal.fire({
                icon: 'success',
                title: title,
                text: message,
            });
        });
        window.livewire.on('SwalError', (title, message) => {
            Swal.fire({
                icon: 'error',
                title: title,
                text: message,
            });
        });
        Livewire.on('onSuccessStore', function () {
            $('#detailModal').modal('hide');
        });
    </script>
    @yield('js')
    @stack('js')
</body>
</html>