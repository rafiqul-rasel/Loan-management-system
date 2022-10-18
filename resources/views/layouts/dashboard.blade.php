<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Blank Page</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <style>
        .content-wrapper{
            min-height: 770px !important;
        }
    </style>
    @yield('header')
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>

        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Navbar Search -->
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{route('homepage')}}" class="nav-link">Home Page</a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{route('home')}}" class="brand-link  text-decoration-none">
            {{--<img src="" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">--}}
            <span class="brand-text font-weight-light">{{env('APP_NAME',"ONLINE PDF LIBRARY")}}</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                {{--<div class="image">
                    <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                </div>--}}
                <div class="info">
                    <a href="#" class="d-block text-decoration-none"> {{ Auth::user()->name }}</a>
                </div>
            </div>

            <!-- SidebarSearch Form -->


            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    @if(Auth::user()->hasRole('admin'))
                    <li class="nav-item">
                        <a href="{{route('users')}}" class="nav-link">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Users

                            </p>
                        </a>
                    </li>
                    @endif
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-table"></i>
                            <p>
                                Loans
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>

                        <ul class="nav nav-treeview">
                            @if(Auth::user()->hasRole('admin'))
                            <li class="nav-item">
                                <a href="{{route('loan.categories')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Loans Categories</p>
                                </a>
                            </li>
                            @endif
                            @if(Auth::user()->hasRole('user'))
                            <li class="nav-item">
                                <a href="{{route('loans')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>My Loans</p>
                                </a>
                            </li>
                            @endif
                            @if(Auth::user()->hasRole('admin'))
                            <li class="nav-item">
                                <a href="{{route('loanstatus')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Loan Status</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('loans')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Loans</p>
                                </a>
                            </li>
                            @endif
                            @if(Auth::user()->hasRole('user'))
                            <li class="nav-item">
                                <a href="{{route('apply-loan')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Apply Loans</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('mysecret')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>My Secret</p>
                                </a>
                            </li>
                            @endif
                        </ul>
                    </li>
                    @if(Auth::user()->hasRole('admin'))
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-users-cog"></i>
                            <p>
                                Roles & Permissions
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route("rolespermissions.roles")}}" class="nav-link">
                                    <i class="fas fa-user-tag"></i>
                                    <p>Roles</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="../tables/data.html" class="nav-link">
                                    <i class="fas fa-user-cog nav-icon"></i>

                                    <p>Create Roles</p>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-cogs"></i>
                            <p>
                                Website Settings
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('websetting')}}" class="nav-link">
                                    <i class="fas fa-cog"></i>
                                    <p>Settings</p>
                                </a>
                            </li>


                        </ul>
                    </li>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">

                            <i class="nav-icon fa fa-sign-out-alt"></i>
                            <p>
                                Log Out
                            </p>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </a>
                    </li>



                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @yield('content')
    </div>
    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b>Version</b> 1.0.0
        </div>
        <strong>Copyright &copy; 2021-{{date('Y')}} <a href="#">{{env('APP_NAME',"ONLINE PDF LIBRARY")}}</a>.</strong> All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- Js -->
<script src="{{asset('js/app.js')}}"></script>
<!-- AdminLTE for demo purposes -->
@yield('footer')
</body>
</html>
