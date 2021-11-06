<!DOCTYPE html>
<html lang="es-ES">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Rentacar Pasto | Alquiler de vehículos a nivel nacional">
    <meta name="keyword" content="taxi,car,rent,hire,transport">
    <meta name="author" content="Themescare">
    <!-- Title -->
    <title>Rentacar Pasto</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="{!! asset('webpage/img/favicon/favicon-32x32.png')!!}">
    <!--Bootstrap css-->
    <link rel="stylesheet" href="{!! asset('webpage/css/bootstrap.min.css') !!}" />
    <!--Font Awesome css-->
    <link rel="stylesheet" href="{!! asset('webpage/css/font-awesome.min.css') !!}" />
    <!--Magnific css-->
    <link rel="stylesheet" href="{!! asset('webpage/css/magnific-popup.css') !!}" />
    <!--Owl-Carousel css-->
    <link rel="stylesheet" href="{!! asset('webpage/css/owl.carousel.min.css') !!}" />
    <link rel="stylesheet" href="{!! asset('webpage/css/owl.theme.default.min.css') !!}" />
    <!--Animate css-->
    <link rel="stylesheet" href="{!! asset('webpage/css/animate.min.css') !!}" />
    <!--Datepicker css-->
    <link rel="stylesheet" href="{!! asset('webpage/css/jquery.datepicker.css') !!}" />
    <!--Nice Select css-->
    <link rel="stylesheet" href="{!! asset('webpage/css/nice-select.css') !!}" />
    <!-- Lightgallery css -->
    <link rel="stylesheet" href="{!! asset('webpage/css/lightgallery.min.css') !!}" />
    <!--ClockPicker css-->
    <link rel="stylesheet" href="{!! asset('webpage/css/jquery-clockpicker.min.css') !!}" />
    <!--Slicknav css-->
    <link rel="stylesheet" href="{!! asset('webpage/css/slicknav.min.css') !!}" />
    <!--Site Main Style css-->
    <link rel="stylesheet" href="{!! asset('webpage/css/style.css') !!}" />
    <!--Responsive css-->
    <link rel="stylesheet" href="{!! asset('webpage/css/responsive.css') !!}" />
</head>

<body>
    <!-- Header Top Area Start -->
    <section class="gauto-header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="header-top-left">
                        <p><i class="fa fa-phone"></i><a onclick=" window.open('https://api.whatsapp.com/send/?phone=573227795422&text&app_absent=0', '_blank');">  Contáctanos: 3227795422</a></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="header-top-right"><a href="{{ route('login')}}"><i class="fa fa-key"></i> Iniciar Sesión</a>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Header Top Area End -->
    <!-- Main Header Area Start -->
    <header class="gauto-main-header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="site-logo"><a href="{{ route('inicio')}}"><img src="{!! asset('webpage/img/logo.png')!!}" alt="rentacar" style="border-radius: 20px;"/></a></div>
                </div>
                <div class="col-lg-6 col-sm-9">
                    <div class="header-promo">
                        <div class="single-header-promo">
                            <div class="header-promo-icon"><img src="{!! asset('webpage/img/globe.png')!!} " alt="globe" /></div>
                            <div class="header-promo-info">
                                <h3>San Juan de Pasto</h3>
                                <p>Nariño, Colombia</p>
                            </div>
                        </div>
                        <div class="single-header-promo">
                            <div class="header-promo-icon"><img src="{!! asset('webpage/img/clock.png')!!}" alt="clock" /></div>
                            <div class="header-promo-info">
                                <h3>Lunes a Domingo</h3>
                                <p>7:00am - 8:00pm</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--
                <div class="col-lg-3">
                    <div class="header-action"><a href="#"><i class="fa fa-phone"></i>Request a call</a></div>
                </div>
                -->
            </div>
        </div>
    </header><!-- Main Header Area End -->

    <!-- Mainmenu Area Start -->
    <section class="gauto-mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="mainmenu">
                        <nav>
                            <ul id="gauto_navigation">
                                <li class="active"><a href="{{ route('inicio')}}">INICIO</a></li>
                                <li><a href="{{ route('servicios')}}">SERVICIOS</a></li>
                                <li><a href="{{ route('vehiculos')}}">VEHÍCULOS</a></li>
                                <li><a href="{{ route('gallery')}}">GALERÍA</a></li>
                                <li><a href="{{ route('info')}}">SOBRE NOSOTROS</a></li>
                                <li><a href="{{ route('contact')}}">CONTÁCTANOS</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-12">
                    <div class="main-search-right">
                        <!-- Responsive Menu Start -->
                        <div class="gauto-responsive-menu"></div>
                        <!-- Responsive Menu Start -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Mainmenu Area End -->

    <!--inicio cuerpo de sitios-personalizado-->
    @yield('content')
    <!--final cuerpo de sitios-personalizado-->

    <!-- Footer Area Start -->
    <footer class="gauto-footer-area">
        <div class="footer-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="single-footer">
                            <div class="footer-logo"><a href="#"><img src="{!! asset('webpage/img/logo.png')!!}"
                                        alt="footer-logo" /></a></div>
                            <div class="footer-address">
                                <h3>RENTACAR PASTO</h3>
                                <p>125 Big fella St. Road, <span>New York, Hi 5654775</span></p>
                                <ul>
                                    <li>Phone: 326487652</li>
                                    <li>Email: example@mail.com</li>
                                    <li>Office Time: 9AM- 4PM</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-footer quick_links">
                            <h3>Quick Links</h3>
                            <ul class="quick-links">
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Our Services</a></li>
                                <li><a href="#">Case Studies</a></li>
                                <li><a href="#">Contact us</a></li>
                            </ul>
                            <ul class="quick-links">
                                <li><a href="#">Testimonials</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">latest News</a></li>
                            </ul>
                        </div>
                        <div class="single-footer newsletter_box">
                            <h3>newsletter</h3>
                            <form><input type="email" placeholder="Email Address" /><button type="submit"><i
                                        class="fa fa-paper-plane"></i></button></form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="copyright">
                            <p>COPYRIGHT © 2021 RENTA CAR PASTO - TODOS LOS DERECHOS RESERVADOS</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="footer-social">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href=""><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->

    <!--Jquery js-->
    <script src="{!! asset('webpage/js/jquery.min.js') !!}"></script>
    <!-- Popper JS -->
    <script src="{!! asset('webpage/js/popper.min.js')!!}"></script>
    <script src="{!! asset('webpage/js/popper.min.js') !!}"></script>
    <!--Bootstrap js-->
    <script src="{!! asset('webpage/js/bootstrap.min.js') !!}"></script>
    <!--Owl-Carousel js-->
    <script src="{!! asset('webpage/js/owl.carousel.min.js') !!}"></script>
    <!--Lightgallery js-->
    <script src="{!! asset('webpage/js/lightgallery-all.js') !!}"></script>
    <script src="{!! asset('webpage/js/custom_lightgallery.js') !!}"></script>
    <!--Slicknav js-->
    <script src="{!! asset('webpage/js/jquery.slicknav.min.js')!!}"></script>
    <!--Magnific js-->
    <script src="{!! asset('webpage/js/jquery.magnific-popup.min.js') !!}"></script>
    <!--Nice Select js-->
    <script src="{!! asset('webpage/js/jquery.nice-select.min.js') !!}"></script>
    <!-- Datepicker JS -->
    <script src="{!! asset('webpage/js/jquery.datepicker.min.js') !!}"></script>
    <!--ClockPicker JS-->
    <script src="{!! asset('webpage/js/jquery-clockpicker.min.js') !!}"></script>
    <!--Main js-->
    <script src="{!! asset('webpage/js/main.js') !!}"></script>
</body>

</html>