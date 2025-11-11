<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <!-- SEO Title -->
  <title>Renta Car Pasto 🚗 | Alquiler de Vehículos en Pasto, Nariño</title>

  <!-- SEO Meta Description -->
  <meta name="description"
    content="Renta Car Pasto - Alquiler de carros en Pasto. Entrega a domicilio, traslados nacionales y la mejor flota de vehículos. Reserva fácil y rápida.">

  <!-- SEO Meta Keywords -->
  <meta name="keywords"
    content="alquiler de carros en pasto, renta de autos pasto, renta car pasto, alquilar carro pasto, vehículos en pasto, alquiler camionetas pasto, renta autos aeropuerto pasto">

  <!-- Canonical -->
  <link rel="canonical" href="https://rentacarpasto.com/" />

  <!-- Favicons -->
  <link href="{!! asset('neweb/assets/img/personalidad/favicon.ico') !!}" rel="icon">
  <link href="{!! asset('neweb/assets/img/personalidad/apple-touch-icon.png') !!}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Poppins:wght@400;600;800&family=Quicksand:wght@400;700&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{!! asset('neweb/assets/vendor/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">
  <link href="{!! asset('neweb/assets/vendor/bootstrap-icons/bootstrap-icons.css') !!}" rel="stylesheet">
  <link href="{!! asset('neweb/assets/vendor/aos/aos.css') !!}" rel="stylesheet">
  <link href="{!! asset('neweb/assets/vendor/swiper/swiper-bundle.min.css') !!}" rel="stylesheet">
  <link href="{!! asset('neweb/assets/vendor/glightbox/css/glightbox.min.css') !!}" rel="stylesheet">
 <link rel="stylesheet" href="{!! asset('webpage/css/font-awesome.min.css') !!}" />
  <!-- Main CSS File -->
  <link href="{!! asset('neweb/assets/css/main.css') !!}" rel="stylesheet">

  <!-- Open Graph / Facebook -->
  <meta property="og:title" content="Renta Car Pasto | Alquiler de Vehículos en Pasto" />
  <meta property="og:description"
    content="Alquila tu carro en Pasto con Renta Car. Entrega a domicilio, traslados nacionales y precios competitivos." />
  <meta property="og:image" content="https://rentacarpasto.com/img/og-image.jpg" />
  <meta property="og:url" content="https://rentacarpasto.com/" />
  <meta property="og:type" content="website" />

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Renta Car Pasto | Alquiler de Vehículos en Pasto" />
  <meta name="twitter:description"
    content="Renta Car Pasto - Tu mejor opción en alquiler de carros y camionetas en Pasto, Nariño." />
  <meta name="twitter:image" content="https://rentacarpasto.com/img/og-image.jpg" />

  <!-- Schema Markup JSON-LD -->
  <script type="application/ld+json">
    {
    "@context": "https://schema.org",
    "@type": "CarRental",
    "name": "Renta Car Pasto",
    "image": "https://rentacarpasto.com/img/og-image.jpg",
    "url": "https://rentacarpasto.com/",
    "telephone": "+57 322 779 5422",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Centro de Pasto",
      "addressLocality": "Pasto",
      "addressRegion": "Nariño",
      "addressCountry": "CO"
    },
    "priceRange": "$$",
    "openingHours": "Mo-Su 07:00-22:00",
    "sameAs": [
      "https://www.facebook.com/rentacarpasto",
      "https://www.instagram.com/rentacarpasto"
    ]
  }
  </script>
</head>


<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div
      class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="./" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="{!! asset('neweb/assets/img/personalidad/logo.png')!!}" alt="">
        <!--  <h1 class="sitename">Clarity</h1>-->

      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="./" class="active">Inicio</a></li>
          <li><a href="./galeria">Galeria</a></li>
          <li><a href="./contactos">Contáctanos</a></li>
          <li><a href="./nosotros">Sobre Nosotros</a></li>

        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="{{ url('/#about') }}">Reserva Ahora</a>

    </div>
  </header>
 
  @yield('content')
  

   <div id="cookieBanner" class="cookie-banner">
            <div class="cookie-content">
                <h4>Política de Cookies</h4>
               <p>
  Utilizamos cookies propias y de terceros para mejorar nuestros servicios y mostrarle publicidad relacionada con sus preferencias.
  <a href="{{ route('cookies') }}">Ver política de cookies</a>
</p>
            </div>
            <div class="cookie-buttons">
                <button id="acceptCookies" class="cookie-btn cookie-accept">Aceptar</button>
                <button id="rejectCookies" class="cookie-btn cookie-reject">Rechazar</button>
            </div>
        </div>
  <a href="https://api.whatsapp.com/send?phone=573227795422&text=Hola%20Rent%20A%20Car%20necesito%20ayuda%20para%20alquilar%20un%20veh%C3%ADculo." class="btn-wsp" target="_blank">
                <i class="fa fa-whatsapp icono"></i>
        </a>
  <footer id="footer" class="footer position-relative dark-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <img src="{!! asset('neweb/assets/img/personalidad/logo.png')!!}" alt="">
          </a>
          <div class="footer-contact pt-3">
            <p>Cra 36 #10-21, Avenida Panamericana</p>
            <p>Pasto, Nariño</p>
            <p class="mt-3"><strong>Celular:</strong> <span>+57 322 779 5422</span></p>
            <p><strong>Email:</strong> <span>sistemas@rentacarpasto.com</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Links</h4>
          <ul>
            <li><a href="./">Inicio</a></li>
            <li><a href="./galeria">Galeria</a></li>
            <li><a href="#services">Servicios</a></li>
            <li><a href="./contactos">Contáctanos</a></li>
            <li><a href="./nosotros">Sobre Nosotros</a></li>
          </ul>
        </div>

       <div class="col-lg-2 col-md-3 footer-links">
  <h4>Servicios</h4>
  <ul>
    <li><a href="#services">Alquiler de vehículos</a></li>
    <li><a href="#services">Traslados y turismo</a></li>
   
    
   
  </ul>
</div>

<div class="col-lg-2 col-md-3 footer-links">
  <h4>Compañía</h4>
  <ul>
    <li><a href="./nosotros">Sobre nosotros</a></li>
    <li><a href="./galeria">Galería de vehículos</a></li>
    <li><a href="#testimonials">Opiniones</a></li>
    <li><a href="./nosotros">Preguntas frecuentes</a></li>
    <li><a href="./contactos">Contáctanos</a></li>
  </ul>
</div>

<div class="col-lg-2 col-md-3 footer-links">
  <h4>Enlaces útiles</h4>
  <ul>
    <li><a href="./terminos-y-condiciones">Términos y condiciones</a></li>
    <li><a href="./politicas">Política de privacidad</a></li>
    <li><a href="./politica-Cookies">Política de Cookies</a></li>
    <li><a href="./contactos">Soporte</a></li>
    <li><a href="./contactos">Nuestras sedes</a></li>
  
  </ul>
</div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Rent A Car Pasto</strong> <span>Todos los derechos reservados</span></p>
      <div class="credits">
      
       DESARROLLO Y DISEÑO ORIGINAL: <a href="#">HACHE</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
    <script src="{!! asset('dash/plugins/jquery/jquery.min.js ') !!}"></script>
    <!-- Popper JS -->
    <script src="{!! asset('webpage/js/popper.min.js')!!}"></script>
    <script src="{!! asset('webpage/js/popper.min.js') !!}"></script>
    <!--Bootstrap js-->
    <script src="{!! asset('webpage/js/bootstrap.min.js') !!}"></script>
        <script src="{!! asset('dash/js/moment.min.js') !!}"></script>
   <script src="{!! asset('dash/js/sweetalert2.all.min.js') !!}"></script>
  <script src="{!! asset('neweb/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>
  <script src="{!! asset('neweb/assets/vendor/php-email-form/validate.js') !!}"></script>
  <script src="{!! asset('neweb/assets/vendor/aos/aos.js') !!}"></script>
  <script src="{!! asset('neweb/assets/vendor/purecounter/purecounter_vanilla.js') !!}"></script>
  <script src="{!! asset('neweb/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') !!}"></script>
  <script src="{!! asset('neweb/assets/vendor/isotope-layout/isotope.pkgd.min.js') !!}"></script>
  <script src="{!! asset('neweb/assets/vendor/swiper/swiper-bundle.min.js') !!}"></script>
  <script src="{!! asset('neweb/assets/vendor/glightbox/js/glightbox.min.js') !!}"></script>
  <script src="{!! asset('webpage/js/style_hache.js') !!}"></script>
  <!-- Main JS File -->
  <script src="{!! asset('neweb/assets/js/main.js') !!}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const cookieBanner = document.getElementById('cookieBanner');
            const acceptBtn = document.getElementById('acceptCookies');
            const rejectBtn = document.getElementById('rejectCookies');
            
            // Comprobar si ya se ha tomado una decisión sobre las cookies
            if (!localStorage.getItem('cookiesAccepted') && !localStorage.getItem('cookiesRejected')) {
                cookieBanner.classList.remove('hidden');
            } else {
                cookieBanner.classList.add('hidden');
            }
            
            // Función para aceptar cookies
            acceptBtn.addEventListener('click', function() {
                localStorage.setItem('cookiesAccepted', 'true');
                cookieBanner.classList.add('hidden');
                // Aquí puedes añadir código para habilitar todas las cookies
            });
            
            // Función para rechazar cookies
            rejectBtn.addEventListener('click', function() {
                localStorage.setItem('cookiesRejected', 'true');
                cookieBanner.classList.add('hidden');
                // Aquí puedes añadir código para deshabilitar cookies no esenciales
            });
        });
    </script>
</body>

</html>