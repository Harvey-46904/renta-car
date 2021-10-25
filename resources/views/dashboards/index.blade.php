﻿<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Rent A Car Pasto - Dashboard</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{!! asset('dash/plugins/bootstrap/css/bootstrap.css') !!}" rel="stylesheet">
    <link href="{!! asset('dash/plugins/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{!! asset('dash/plugins/node-waves/waves.css') !!}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{!! asset('dash/plugins/animate-css/animate.css') !!}" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="{!! asset('dash/plugins/morrisjs/morris.css') !!}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{!! asset('dash/css/style.css') !!}" rel="stylesheet">
    <link href="{!! asset('dash/css/style_toggle.css') !!}" rel="stylesheet">
    <link href="{!! asset('dash/css/style-navbar.css') !!}" rel="stylesheet">

    <!-- Firma digital Css -->
    <link href="{!! asset('dash/firma_digital/style.css') !!}" rel="stylesheet">
    <link href="{!! asset('dash/css/sweetalert2.min.css') !!}" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{!! asset('dash/css/themes/all-themes.css') !!}" rel="stylesheet" />
    
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->

<nav class="navbar">
    <a href="javascript:void(0);" class="bars"></a>
    <div> <a class="navbar-brand" href="{{url('dashboard')}}"><b>RENTACAR PASTO</b></a> </div>
    <div class="icon" id="bell"> <img src="{!! asset('dash/images/bell.png')!!}"> </div>
    <div class="notifications" id="box">
        <h2>Notifications - <span>2</span></h2>
        <div class="notifications-item"> <img src="{!! asset('dash/images/pic.jpg')!!}" alt="img">
            <div class="text">
                <h4>Samso aliao</h4>
                <p>Samso Nagaro Like your home work</p>
            </div>
        </div>
        <div class="notifications-item"> <img src="https://img.icons8.com/flat_round/64/000000/vote-badge.png" alt="img">
            <div class="text">
                <h4>John Silvester</h4>
                <p>+20 vista badge earned</p>
            </div>
        </div>
    </div>
</nav>
</nav>

    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="{!! asset('dash/images/user.png') !!}" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">John Doe</div>
                    <div class="email">john.doe@example.com</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MENU DE NAVEGACION</li>
                    <li class="active">
                        <a href="{{url('dashboard')}}">
                            <i class="material-icons">home</i>
                            <span>Inicio</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">account_circle</i>
                            <span>Clientes</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{url('crear_cliente')}}">Registro Clientes</a>
                            </li>
                            <li>
                                <a href="{{url('listar_cliente')}}">Listar Clientes</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">drive_eta</i>
                            <span>Vehiculos</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{route('crear_vehiculo')}}">Registro Vehiculos</a>
                            </li>
                            <li>
                                <a href="{{route('listar_vehiculo')}}">Listar Vehiculos</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">assignment_ind</i>
                            <span>Reservaciones</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{url('crear_reserva')}}">Crear Reserva</a>
                            </li>
                            <li>
                                <a href="{{url('listar_reservas')}}">Listar Reserva</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">grading</i>
                            <span>Contratos</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{url('registrar_contrato')}}">Registrar Contrato</a>
                            </li>
                            <li>
                                <a href="pages/medias/carousel.html">Listar Contrato</a>
                            </li>
                        </ul>
                    </li>
                     
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2021 - 2022 <a href="javascript:void(0);">Hache</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.0
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
    </section>

    <!-- AQUI VAMOS A COLOCAR LAS VISTAS CORRESPONDIENTES SAHR-->
    @yield('registro_clientes')

    <!-- FIN DE AQUI VAMOS A COLOCAR LAS VISTAS CORRESPONDIENTES-->

    <!-- Jquery Core Js -->
    <script src="{!! asset('dash/plugins/jquery/jquery.min.js ') !!}"></script>

    <!-- Bootstrap Core Js -->
    <script src="{!! asset('dash/plugins/bootstrap/js/bootstrap.js ') !!}"></script>

    <!--Librerias
    <script src="{!! asset('dash/plugins/bootstrap/js/jquery-3.2.1.slim.min.js ') !!}"></script>-->
    <script src="{!! asset('dash/plugins/bootstrap/js/popper.min.js ') !!}"></script>
    <script src="{!! asset('dash/plugins/bootstrap/js/bootstrap.min.js ') !!}"></script>

    <!-- Select Plugin Js -->
    <script src="{!! asset('dash/plugins/bootstrap-select/js/bootstrap-select.js') !!}"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="{!! asset('dash/plugins/jquery-slimscroll/jquery.slimscroll.js') !!}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{!! asset('dash/plugins/node-waves/waves.js') !!}"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="{!! asset('dash/plugins/jquery-countto/jquery.countTo.js') !!}"></script>

    <!-- Morris Plugin Js -->
    <script src="{!! asset('dash/plugins/raphael/raphael.min.js') !!}"></script>
    <script src="{!! asset('dash/plugins/morrisjs/morris.js') !!}"></script>

    <!-- ChartJs -->
    <script src="{!! asset('dash/plugins/chartjs/Chart.bundle.js') !!}"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="{!! asset('dash/plugins/flot-charts/jquery.flot.js') !!}"></script>
    <script src="{!! asset('dash/plugins/flot-charts/jquery.flot.resize.js') !!}"></script>
    <script src="{!! asset('dash/plugins/flot-charts/jquery.flot.pie.js') !!}"></script>
    <script src="{!! asset('dash/plugins/flot-charts/jquery.flot.categories.js') !!}"></script>
    <script src="{!! asset('dash/plugins/flot-charts/jquery.flot.time.js') !!}"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="{!! asset('dash/plugins/jquery-sparkline/jquery.sparkline.js') !!}"></script>

    <!-- Custom Js -->
    <script src="{!! asset('dash/js/admin.js') !!}"></script>
    <script src="{!! asset('dash/js/pages/index.js') !!}"></script>
    <script src="{!! asset('dash/js/sweetalert2.all.min.js') !!}"></script>
    <script src="{!! asset('dash/js/code-navbar.js') !!}"></script>
    <script src="{!! asset('dash/js/bootstrap.bundle.min.js') !!}"></script>
    

    <!-- Firmas Digitales Js -->
    <script src="{!! asset('dash/firma_digital/script.js') !!}"></script>
    <script src="{!! asset('dash/firma_digital/script2.js') !!}"></script>

    <script src="{!! asset('dash/js/alertas.js') !!}"></script>
    <!-- Demo Js -->
    <script src="{!! asset('dash/js/demo.js') !!}"></script>
</body>

</html>
