<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" href="/logo-itslp.png">
    <title>Sistema Escolar</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 4.0.0 -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ url('https://use.fontawesome.com/releases/v6.2.0/css/all.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/AdminLTE.min.css') }}">
    <!--Style datatable -->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css') }}" />

    <!-- AdminLTE Skins. Choose a skin from the css/skins
    folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/_all-skins.min.css') }}">
    {{-- <img src="{{ Vite::asset('public/assets/img/apple-touch-icon.png') }}">
    <img src="{{ Vite::asset('public/assets/img/favicon.ico') }}">
  --}}
</head>

<body class="hold-transition skin-blue sidebar-mini">

    <div class="wrapper">

        <header class="main-header">

            <!-- Logo -->
            <a href="/" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>TEC</b></span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>Sistema Escolar</b></span>
            </a>

            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Navegación</span>
                </a>
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->


                        @auth


                            <!-- User Account: style can be found in dropdown.less -->
                            {{--  <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <small class="bg-red">Online</small>
                  <span class="hidden-xs">{{auth()->user()->name ?? auth()->user()->username}}</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    
                    <p>
                      www.incanatoit.com - Desarrollando Software
                      <small>www.youtube.com/jcarlosad7</small>
                    </p>
                  </li> 
                  
                  
                  <!-- Menu Footer-->
                   <li class="user-footer">
                    
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Cerrar</a>
                    </div>
                  </li>
                </ul>
              </li> --}}

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <small class="bg-red">Online</small>
                                    <span class="hidden-xs">{{ auth()->user()->username }}</span>
                                </a>
                                <ul class="dropdown-menu">


                                    <li><a class="dropdown-item" href="#">Perfil</a></li>
                                    <li><a class="dropdown-item" href="/logout">Cerrar Sesion</a></li>
                                </ul>
                            </li>

                        @endauth


            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->

                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu">
                    <li class="header"></li>

                    <li class="treeview">
                        <a href="/">
                            <i class="fa fa-home"></i>
                            <span>Inicio</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>

                    </li>
                    @auth


                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-user"></i>
                                <span>Usuarios</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>

                        </li>
                        <li class="treeview">
                            <a href="/hoteles/huesped">
                                <i class="fa fa-user-plus"></i>
                                <span>Añadir huesped</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>

                        </li>

                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-building"></i>
                                <span>Hoteles</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="/hoteles/categorias"><i class="fa fa-circle-o"></i> Categorias</a></li>
                            </ul>
                            <ul class="treeview-menu">
                                <li><a href="/hoteles/hotel"><i class="fa fa-circle-o"></i> Hoteles</a></li>
                            </ul>

                        </li>

                        <li class="treeview">
                            <a href="/hoteles/habitaciones">
                                <i class="fa fa-bed"></i>
                                <span>Habitaciones</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>

                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-folder-open"></i>
                                <span>Servicios</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="/servicios/bar"><i class="fa fa-circle-o"></i> Bar</a></li>
                                <li><a href="/servicios/piscina"><i class="fa fa-circle-o"></i> Piscina</a></li>
                                <li><a href="/servicios/restaurant"><i class="fa fa-circle-o"></i> Restaurante</a></li>

                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-line-chart"></i>
                                <span>Reservaciones</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="compras/ingreso"><i class="fa fa-circle-o"></i> Ingresos</a></li>
                                <li><a href="compras/proveedor"><i class="fa fa-circle-o"></i> Proveedores</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="/hoteles/carreras">
                                <i class="fa-solid fa-graduation-cap"></i>
                                <span>Carreras</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>

                        </li>

                        <li class="treeview">
                            <a href="/logout">
                                <i class="fa fa-sign-out"></i> <span>Cerrar Sesion</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>

                        </li>
                    @endauth

                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

        <!--Contenido-->
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <!-- Main content -->
            <section class="content">

                <div class="row">
                    <div class="col-md-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title">Sistema de control Escolar</h3>
                                <p>Este parrafo es publico</p>
                                
                                @role('maestro')
                                <p>Solo profesor</p>
                                @endrole
                                @role('alumno')
                                <p>solo alumno</p>
                                @endrole
                                @role('admin')
                                <p>solo administrador</p>
                                @endrole
                                @guest
                                    {{-- <script>
                    alert("este texto es el que modificas");
                  </script> --}}
                                    <p class="mt-2 text-lg">Bienvenido(a) al sistema para comenzar presiona el enlace <a
                                            href="/login">
                                            <i class="fas fa-sign-in-alt"></i>
                                            Entrar </a>
                                        y proporciona tus credenciales de acceso.</p>
                                @endguest
                                <div class="box-tools pull-right">
                                    <button class="btn btn-box-tool" data-widget="collapse"><i
                                            class="fa fa-minus"></i></button>

                                    <button class="btn btn-box-tool" data-widget="remove"><i
                                            class="fa fa-times"></i></button>
                                </div>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <!--Contenido-->
                                        @yield('contenido')
                                        <!--Fin Contenido-->
                                    </div>
                                </div>

                            </div>
                        </div><!-- /.row -->
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->

    </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
    <!--Fin-Contenido-->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 1.0.0
        </div>
        <strong>Copyright &copy; 2019-2023 <a href="https://github.com/Martinvega17/" target="_blanck">Martin Salvador
                Vega Perez</a>.</strong> All rights reserved.
    </footer>

    <!-- JQuery 3.6.1 -->
    <script src="{{ asset('assets/js/jquery-3.6.1.min.js') }}"></script>
    <!-- Bootstrap 4.0.0 -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('assets/js/app.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Js for datatables -->
    <script src="{{ asset('assets/css/bootstrap.min.css') }}"></script>
    <script src="{{ asset('assets/js/datatable.js') }}"></script>

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"
        rel="stylesheet">
    <script src="{{ asset('https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js') }}"></script>
</body>

</html>
