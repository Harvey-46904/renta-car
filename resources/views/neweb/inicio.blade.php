@extends('neweb.index')
@section('content')
<main class="main">
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog text-center" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger text-center" style="
        border-bottom-width: 0px;
    ">
                    <h5 class="modal-title  text-light text-center" id="exampleModalLabel">Rent A Car</h5>

                </div>

                <div class="modal-body bg-black">
                    <a
                        href="https://api.whatsapp.com/send?phone=573227795422&text=Hola%20Rent%20A%20Car%20necesito%20ayuda%20para%20alquilar%20un%20veh%C3%ADculo.">
                        <img src="{!! asset('webpage/img/publicidad1rentacar1.jpg')!!}"
                            class="img-fluid rounded mx-auto d-block" alt="Responsive image"></a>
                </div>
                <div class="modal-footer bg-black text-center" style="
        border-top-width: 0px;
    ">
                    <button type="button" class="btn btn-secondary bg-danger" data-dismiss="modal">Continuar en Rent A
                        Car Pasto</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Section -->
    <section id="hero" class="hero section bg-danger">

        <div class="container">
            <div class="row align-items-center">
                <!-- Texto -->
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                    <div class="hero-content">
                        <h1>RentaCar Pasto</h1>
                        <p>
                            Alquiler de vehículos en <strong>San Juan de Pasto, Nariño - Colombia</strong>.
                            Somos líderes en servicio, con una flota moderna y atención personalizada.
                        </p>
                        <div class="hero-buttons">
                            <a href="tel:+573227795422" class="btn btn-primary">Llámanos</a>
                            <a href="#servicios" class="btn btn-outline">Mira nuestros vehículos</a>
                        </div>

                        <!-- Info destacada -->
                        <div class="hero-stats ">

                            <div class="stat-item">
                                <span class="stat-number">⏰</span>
                                <span class="stat-label">Lunes a Domingo <br> 7:00 AM - 8:00 PM</span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-number">📞</span>
                                <span class="stat-label">Celular <br>322 779 5422</span>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Imagen -->
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
                    <div class="hero-visual">
                        <div class="hero-image">

                            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                                        class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                                        aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                                        aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{!! asset('neweb/assets/img/vehiculos/banercar1.png') !!}"
                                            class="d-block w-100" alt="...">

                                    </div>
                                    <div class="carousel-item">
                                        <img src="{!! asset('neweb/assets/img/vehiculos/banercar2.png') !!}"
                                            class="d-block w-100" alt="...">

                                    </div>
                                    <div class="carousel-item">
                                        <img src="{!! asset('neweb/assets/img/vehiculos/banercar3.png') !!}"
                                            class="d-block w-100" alt="...">

                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <h1 id="animatedText" class="text-light text-glow"></h1>

                </div>
            </div>
        </div>

        <!-- Elementos decorativos -->
        <div class="hero-bg-elements">
            <div class="bg-shape shape-1"></div>
            <div class="bg-shape shape-2"></div>
            <div class="bg-particles"></div>
        </div>

    </section>





    <div class="marquee">
        <span>
            <h3>🚗 ¡Explora Pasto con estilo! Rent a Car Pasto te ofrece los mejores precios, vehículos modernos y un
                servicio de calidad. 🚘 ¡Reserva ahora y empieza tu aventura! 🌟</h3>
        </span>
    </div>
    <!-- Portfolio Section -->
    <section id="portafolio" class="portfolio section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Vehículos en Renta</h2>
            <p>Contamos con una amplia selección de autos modernos y confiables para que disfrutes tu viaje con
                comodidad y
                seguridad.</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
                <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="200">
                    <li data-filter="*" class="filter-active">Todos nuestros vehículos</li>
                    <li data-filter=".filter-carro">Vehiculos</li>
                    <li data-filter=".filter-camioneta">Camionetas</li>

                </ul><!-- End Portfolio Filters -->

                <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="300">

                 @foreach ($vehiculos as $vehiculo)
        <div class="col-xl-4 col-lg-6 portfolio-item isotope-item filter-{{ $vehiculo['tipo'] }}">
            <div class="portfolio-wrapper">
                <div class="portfolio-image">
                    <img src="{{ asset($vehiculo['imagen']) }}"
                         alt="Rentacarpasto vehiculo {{ $vehiculo['nombre'] }}" class="img-fluid" loading="lazy">
                    <div class="portfolio-hover">
                        <div class="portfolio-actions">
                            
                             <a href="javascript:void(0)" class="btn btn-danger text-dark" title="Ver detalles" onclick="mensaje_wpp_carro('{{ $vehiculo['nombre'] }}')" >
                              Quiero Rentarlo
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-content">
                    <div class="portfolio-meta">
                        <span class="project-type">{{ $vehiculo['nombre'] }}</span>
                        <div class="project-rating">
                            <i class="bi bi-star-fill"></i>
                            <span>{{ $vehiculo['rating'] }}</span>
                        </div>
                    </div>
                    <h3>{{ $vehiculo['nombre'] }}</h3>
                    <div class="portfolio-tech">
                        <span class="tech-badge">{{ $vehiculo['equipamiento'] }}</span>
                        <span class="tech-badge">{{ $vehiculo['transmision'] }}</span>
                        <span class="tech-badge">{{ $vehiculo['capacidad'] }}</span>
                    </div>
                </div>
            </div>
        </div>
    @endforeach



                </div><!-- End Portfolio Items Container -->

            </div>

            <div class="portfolio-cta text-center" data-aos="fade-up" data-aos-delay="400">
                <h4>¿Te gustaría tener ingresos adicionales? 💰</h4>
                <p>¡Únete a nuestro equipo! Si tienes vehículos modelo 2022 o superior, esta es tu oportunidad. 🚗✨</p>
                <div class="cta-buttons">
                    <a href="#contact" class="btn btn-primary">Más Información</a>

                </div>
            </div>

        </div>

    </section><!-- /Portfolio Section -->

    <!-- Why Us Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section  hero  bg-danger">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Testimonios</h2>
            <p>La satisfacción de nuestros clientes nos respalda; descubre sus experiencias al rentar con nosotros.</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="testimonials-slider swiper init-swiper">
                <script type="application/json" class="swiper-config">
                    {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 4000
              },
              "slidesPerView": 1,
              "centeredSlides": true,
              "spaceBetween": 20,
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "768": {
                  "slidesPerView": 1.5,
                  "spaceBetween": 30
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 40
                }
              }
            }
                </script>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-card" data-aos="zoom-in" data-aos-delay="100">
                            <div class="testimonial-header">
                                <div class="user-avatar">
                                    <img src="{!! asset('neweb/assets/img/person/person-f-12.webp')!!}" alt="Clientes Rentacarpasto">
                                </div>
                                <div class="user-info">
                                    <h3>Jennifer Martinez</h3>
                                  
                                    <div class="rating">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-content">
                                <div class="quote-mark">
                                    <i class="bi bi-quote"></i>
                                </div>
                                <p>Excelente servicio y vehículos en perfectas condiciones. Reservar con Renta Carpasto siempre ha sido rápido y confiable. ¡Recomendado 100%!</p>
                            </div>
                            <div class="testimonial-footer">
                                <div class="company-badge">
                                    <i class="bi bi-building"></i>
                                    <span></span>
                                </div>
                                <div class="verified-badge">
                                    <i class="bi bi-patch-check-fill"></i>
                                    <span>Verificado</span>
                                </div>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-card" data-aos="zoom-in" data-aos-delay="200">
                            <div class="testimonial-header">
                                <div class="user-avatar">
                                    <img src="{!! asset('neweb/assets/img/person/person-m-13.webp')!!}" alt="Profile Image">
                                </div>
                                <div class="user-info">
                                    <h3>Alexander Chen</h3>
                                   
                                    <div class="rating">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-content">
                                <div class="quote-mark">
                                    <i class="bi bi-quote"></i>
                                </div>
                                <p>Me encantó la experiencia. El proceso de alquiler fue muy sencillo y los carros están muy bien mantenidos. ¡Definitivamente volveré a usar Renta Carpasto!</p>
                            </div>
                            <div class="testimonial-footer">
                                <div class="company-badge">
                                    <i class="bi bi-building"></i>
                                    <span></span>
                                </div>
                                <div class="verified-badge">
                                    <i class="bi bi-patch-check-fill"></i>
                                    <span>Verificado</span>
                                </div>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-card" data-aos="zoom-in" data-aos-delay="300">
                            <div class="testimonial-header">
                                <div class="user-avatar">
                                    <img src="{!! asset('neweb/assets/img/person/person-f-8.webp')!!}" alt="Profile Image">
                                </div>
                                <div class="user-info">
                                    <h3>Rachel Taylor</h3>
                                  
                                    <div class="rating">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-content">
                                <div class="quote-mark">
                                    <i class="bi bi-quote"></i>
                                </div>
                                <p>Renta Carpasto me salvó en varias ocasiones con alquileres de última hora. Servicio confiable, trato amable y carros de excelente calidad.</p>
                            </div>
                            <div class="testimonial-footer">
                                <div class="company-badge">
                                    <i class="bi bi-building"></i>
                                    <span></span>
                                </div>
                                <div class="verified-badge">
                                    <i class="bi bi-patch-check-fill"></i>
                                    <span>Verificado</span>
                                </div>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-card" data-aos="zoom-in" data-aos-delay="100">
                            <div class="testimonial-header">
                                <div class="user-avatar">
                                    <img src="{!! asset('neweb/assets/img/person/person-m-6.webp')!!}" alt="Profile Image">
                                </div>
                                <div class="user-info">
                                    <h3>Christopher Lee</h3>
                                   
                                    <div class="rating">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-content">
                                <div class="quote-mark">
                                    <i class="bi bi-quote"></i>
                                </div>
                                <p>¡La mejor opción para alquilar un carro! Todo el proceso fue rápido, el personal súper atento y los vehículos impecables.</p>
                            </div>
                            <div class="testimonial-footer">
                                <div class="company-badge">
                                    <i class="bi bi-building"></i>
                                    <span></span>
                                </div>
                                <div class="verified-badge">
                                    <i class="bi bi-patch-check-fill"></i>
                                    <span>Verificado</span>
                                </div>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-card" data-aos="zoom-in" data-aos-delay="200">
                            <div class="testimonial-header">
                                <div class="user-avatar">
                                    <img src="{!! asset('neweb/assets/img/person/person-f-14.webp')!!}" alt="Profile Image">
                                </div>
                                <div class="user-info">
                                    <h3>Amanda Rodriguez</h3>
                                  
                                    <div class="rating">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-content">
                                <div class="quote-mark">
                                    <i class="bi bi-quote"></i>
                                </div>
                                <p>Reservar con Renta Carpasto es fácil y seguro. Los carros son cómodos y limpios, y el servicio al cliente es excelente</p>
                            </div>
                            <div class="testimonial-footer">
                                <div class="company-badge">
                                    <i class="bi bi-building"></i>
                                    <span></span>
                                </div>
                                <div class="verified-badge">
                                    <i class="bi bi-patch-check-fill"></i>
                                    <span>Verificado</span>
                                </div>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>

    </section><!-- /Testimonials Section -->



    <!-- Contact Section -->



    <!-- About Section -->

    <section id="about" class="about section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-5 align-items-center">

                <!-- Texto -->
                <div class="col-lg-5" data-aos="fade-right" data-aos-delay="200">
                    <div class="content">
                        <h6 class="subtitle">RentaCar Pasto</h6>
                        <h2>Requisitos para Reservar</h2>
                        <p>
                            Para garantizar tu seguridad y confianza, en <strong>RentaCar Pasto</strong> establecemos
                            los siguientes
                            requisitos
                            al momento de reservar un vehículo:
                        </p>

                        <ul class="features-list">
                            <li><i class="bi bi-check-circle-fill"></i><span>Ser mayor de 25 años</span></li>
                            <li><i class="bi bi-check-circle-fill"></i><span>Tarjeta de crédito para garantía:
                                    $1.000.000
                                    (vehículos) o $1.500.000 (camionetas)</span></li>
                            <li><i class="bi bi-check-circle-fill"></i><span>Licencia de conducción vigente, cédula o
                                    pasaporte</span></li>
                        </ul>

                        <a onclick="mensaje_wpp_carro('')" href="javascript:void(0)" href="javascript:void(0)" class="btn btn-primary">Reservar Ahora</a>
                    </div>
                </div>

                <!-- Imagen -->
                <div class="col-lg-7" data-aos="fade-left" data-aos-delay="300">
                    <div class="image-composition">
                        <div class="image-main">
                            <img src="{!! asset('neweb/assets/img/about/about-square-8.jpg') !!}"
                                alt="Alquiler de vehículos en Pasto" class="img-fluid" loading="lazy">
                        </div>
                        <div class="image-secondary">
                            <img src="{!! asset('neweb/assets/img/about/about-9.jpg') !!}"
                                alt="Clientes satisfechos en Pasto" class="img-fluid" loading="lazy">
                        </div>
                        <div class="stats-card">
                            <div class="stats-item">
                                <h3>100%</h3>
                                <p>Transparencia</p>
                            </div>
                            <div class="stats-item">
                                <h3>+500</h3>
                                <p>Clientes Felices</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <section id="services" class="services section hero  bg-danger">

        <!-- Título de la sección -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Servicios</h2>
            <p>En <strong>RentaCar Pasto</strong> ofrecemos soluciones confiables y flexibles para tu movilidad en Pasto
                y a
                nivel nacional.</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4">

                <!-- Servicio 1 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="bi bi-car-front"></i>
                        </div>
                        <h4><a href="#">Alquiler de Vehículos</a></h4>
                        <p>Disponemos de una flota moderna de autos y camionetas para que elijas el que mejor se adapte
                            a tus
                            necesidades.</p>

                        <a href="tel:+573227795422" class="service-link">
                            <span>Reservar</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Servicio 2 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="bi bi-truck"></i>
                        </div>
                        <h4><a href="#">Traslados a Nivel Nacional</a></h4>
                        <p>Realizamos traslados cómodos y seguros desde Pasto hacia cualquier ciudad de Colombia con
                            conductores
                            expertos.</p>
                        <a href="tel:+573227795422" class="service-link">
                            <span>Solicitar</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Servicio 3 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="bi bi-house-door"></i>
                        </div>
                        <h4><a href="#">Entrega a Domicilio</a></h4>
                        <p>Recibe tu vehículo directamente en tu casa, hotel o aeropuerto de Pasto. Comodidad y rapidez
                            en cada
                            reserva.</p>
                        <a href="tel:+573227795422" class="service-link">
                            <span>Agendar</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- /About Section -->
</main>
<script>
    const textos = [
  "AUTOS DESDE $190.000 POR DÍA",
  "ENTREGA INMEDIATA",
  "VEHÍCULOS NUEVOS Y SEGUROS"
];

let i = 0, j = 0, borrando = false;
const velocidad = 100;
const pausa = 1500;
const h1 = document.getElementById("animatedText");
const prefijo = "# "; // <-- carácter fijo que no se borra

function animarTexto() {
  const textoActual = textos[i];

  if (!borrando) {
    h1.textContent = prefijo + textoActual.slice(0, j++);
    if (j > textoActual.length) {
      borrando = true;
      setTimeout(animarTexto, pausa);
      return;
    }
  } else {
    h1.textContent = prefijo + textoActual.slice(0, j--);
    if (j < 0) {
      borrando = false;
      i = (i + 1) % textos.length;
    }
  }

  setTimeout(animarTexto, borrando ? 50 : velocidad);
}

animarTexto();
</script>
@endsection