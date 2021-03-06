<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Shop</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Font Awesome -->
{{--    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">--}}
<!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- overlayScrollbars -->
{{--    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">--}}
<!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    {{--    <style>--}}
    {{--        .nav-link{--}}
    {{--            color: black;--}}
    {{--            background: dimgrey;--}}
    {{--        }--}}
    {{--    </style>--}}
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper" id="app">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <router-link to="/home" class="nav-link">Home</router-link>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Contact</a>
            </li>
        </ul>

        <!-- SEARCH FORM -->
        <form class="form-inline ml-3">
            <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>

        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false" v-pre>
                    Elmira <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/logout">
                        Logout
                    </a>
                </div>
            </li>
        </ul>


    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
{{--        <a href="../../index3.html" class="brand-link">--}}
{{--            <img src="{{ asset('assets/admin/default/admin.JPG') }}"--}}
{{--                 alt="AdminLTE Logo"--}}
{{--                 class="brand-image img-circle elevation-3"--}}
{{--                 style="opacity: .8">--}}
{{--            <span class="brand-text font-weight-light">{{ Auth::user()->name }}</span>--}}
{{--        </a>--}}
        <router-link to="/home" class="nav-link">
{{--            <img src="{{ asset('assets/admin/default/admin.JPG') }}"--}}
            <img src="https://image.shutterstock.com/image-vector/user-icon-vector-260nw-393536320.jpg"
                 alt="AdminLTE Logo"
                 class="brand-image img-circle elevation-3"
                 style="opacity: .8; width: 30px">
            <span class="brand-text font-weight-light">{{ Auth::user()->name }}</span>
        </router-link>
        <!-- Sidebar -->
        <div class="sidebar">

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="../../index.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Dashboard v1</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="../../index2.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Dashboard v2</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="../../index3.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Dashboard v3</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <router-link to="/categories" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Category
                                <span class="right badge badge-danger">New</span>
                            </p>
                        </router-link>
                    </li>

                    <li class="nav-item">
                        <router-link to="/products" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Products
                                <span class="right badge badge-danger">New</span>
                            </p>
                        </router-link>
                    </li>

                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">
                                <router-link to="/home">
                                    Home
                                </router-link>
                            </li>
                            <li class="breadcrumb-item active">Blank Page</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <admin-master></admin-master>
    {{--            <home></home>--}}
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b>Version</b> 3.0.4
        </div>
        <strong>Copyright &copy; {{ \Carbon\Carbon::now()->year }} <a href="http://adminlte.io">Sweet Shop</a>.</strong>
        All rights
        reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<script>
    var MyApp = {
        csrfToken: "{{ csrf_token() }}"
    };
</script>
{{--<!-- jQuery -->--}}
{{--<script src="{{ asset('../../plugins/jquery/jquery.min.js') }}"></script>--}}
{{--<!-- Bootstrap 4 -->--}}
{{--<script src="{{ asset('../../plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>--}}
{{--<!-- AdminLTE App -->--}}
{{--<script src="{{ asset('../../dist/js/adminlte.min.js') }}"></script>--}}
{{--<!-- AdminLTE for demo purposes -->--}}
{{--<script src="{{ '../../dist/js/demo.js' }}"></script>--}}
</body>
</html>
