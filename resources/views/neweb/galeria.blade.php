  @extends('neweb.index')
@section('content')
  <main class="main">

    <!-- Page Title -->
    <div class="page-title">
      <div class="breadcrumbs">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><i class="bi bi-house"></i> Inicio</a></li>
            <li class="breadcrumb-item"><a href="#">Galeria</a></li>
          
          </ol>
        </nav>
      </div>

      <div class="title-wrapper">
       <h1>Nuestra Flota de Vehículos</h1>
<p>Explora nuestra galería y descubre los autos disponibles para tu próxima aventura en Pasto. Comodidad, seguridad y estilo a tu alcance.</p>
      </div>
    </div><!-- End Page Title -->

    <!-- Portfolio Details Section -->
    <section id="portfolio-details" class="portfolio-details section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-lg-6" data-aos="fade-right">
            <div class="portfolio-details-media">
              <div class="main-image">
                <div class="portfolio-details-slider swiper init-swiper" data-aos="zoom-in">
                  <script type="application/json" class="swiper-config">
                    {
                      "loop": true,
                      "speed": 1000,
                      "autoplay": {
                        "delay": 6000
                      },
                      "effect": "creative",
                      "creativeEffect": {
                        "prev": {
                          "shadow": true,
                          "translate": [0, 0, -400]
                        },
                        "next": {
                          "translate": ["100%", 0, 0]
                        }
                      },
                      "slidesPerView": 1,
                      "navigation": {
                        "nextEl": ".swiper-button-next",
                        "prevEl": ".swiper-button-prev"
                      }
                    }
                  </script>
                  <div class="swiper-wrapper">
  @foreach($vehiculos_scroll as $vehiculo)
    <div class="swiper-slide">
      <img src="{{ asset($vehiculo['imagen']) }}" alt="Vehiculos de RENTACARPASTO {{ $vehiculo['nombre'] }}" class="img-fluid">
    </div>
  @endforeach
</div>
                  <div class="swiper-button-prev"></div>
                  <div class="swiper-button-next"></div>
                </div>
              </div>

             <div class="thumbnail-grid" data-aos="fade-up" data-aos-delay="200">
  <div class="row g-2 mt-3">
    @foreach($vehiculos_pie as $vehiculo)
      <div class="col-3">
        <img src="{{ asset($vehiculo['imagen']) }}" alt="Vehiculos de RENTACARPASTO {{ $vehiculo['nombre'] }}" class="img-fluid glightbox">
      </div>
    @endforeach
  </div>
</div>

              <div class="tech-stack-badges" data-aos="fade-up" data-aos-delay="300">
                <span>Alquiler de carros en Pasto Nariño</span>
<span>Renta de autos sin conductor</span>
<span>RentaCar Pasto Colombia</span>
<span>Autos para turismo y trabajo</span>
<span>Alquiler de camionetas 4x4</span>
              </div>
            </div>
          </div>

         <div class="col-lg-6" data-aos="fade-left">
  <div class="portfolio-details-content">
    <div class="project-meta">
      <div class="badge-wrapper">
        <span class="project-badge">RentaCar Pasto</span>
      </div>
      <div class="date-client">
        <div class="meta-item">
          <i class="bi bi-calendar-check"></i>
          <span>Noviembre 2025</span>
        </div>
        <div class="meta-item">
          <i class="bi bi-buildings"></i>
          <span>RentaCar Pasto - Alquiler de Vehículos</span>
        </div>
      </div>
    </div>

    <h2 class="project-title">Flota Moderna de Autos para Renta en Pasto</h2>

    <div class="project-website">
      <i class="bi bi-link-45deg"></i>
      <a href="https://rentacarpasto.com" target="_blank">www.rentacarpasto.com</a>
    </div>

    <div class="project-overview">
      <p class="lead">
        En <strong>RentaCar Pasto</strong> ofrecemos una amplia gama de vehículos modernos, seguros y cómodos para cada necesidad: viajes de turismo, negocios o transporte familiar. Contamos con autos compactos, camionetas 4x4 y vehículos automáticos listos para recorrer Nariño y el sur de Colombia.
      </p>

      <div class="accordion project-accordion" id="portfolio-details-projectAccordion">
        <div class="accordion-item" data-aos="fade-up">
          <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#portfolio-details-collapse-1" aria-expanded="true">
              <i class="bi bi-clipboard-data me-2"></i> Nuestra Flota
            </button>
          </h2>
          <div id="portfolio-details-collapse-1" class="accordion-collapse collapse show" data-bs-parent="#portfolio-details-projectAccordion">
            <div class="accordion-body">
              <p>Disponemos de vehículos nuevos y bien mantenidos: autos económicos, camionetas SUV, motos y vans. Todos incluyen mantenimiento al día, seguros vigentes y asistencia 24/7. Ideal para turistas, empresas o viajes familiares en Pasto y alrededores.</p>
            </div>
          </div>
        </div>

        <div class="accordion-item" data-aos="fade-up" data-aos-delay="100">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#portfolio-details-collapse-2">
              <i class="bi bi-exclamation-diamond me-2"></i> Nuestro Compromiso
            </button>
          </h2>
          <div id="portfolio-details-collapse-2" class="accordion-collapse collapse" data-bs-parent="#portfolio-details-projectAccordion">
            <div class="accordion-body">
              <p>Garantizamos una experiencia sin complicaciones: reserva rápida, entrega inmediata y tarifas transparentes. Nos destacamos por nuestro servicio al cliente, atención personalizada y flexibilidad en horarios de entrega.</p>
            </div>
          </div>
        </div>

        <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#portfolio-details-collapse-3">
              <i class="bi bi-award me-2"></i> Beneficios de Elegirnos
            </button>
          </h2>
          <div id="portfolio-details-collapse-3" class="accordion-collapse collapse" data-bs-parent="#portfolio-details-projectAccordion">
            <div class="accordion-body">
              <p>Con RentaCar Pasto obtienes confianza, puntualidad y calidad. Nuestro equipo trabaja para que cada cliente disfrute del mejor servicio de <strong>alquiler de carros en Pasto</strong>, con opciones adaptadas a cada presupuesto y necesidad.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="project-features" data-aos="fade-up" data-aos-delay="300">
      <h3><i class="bi bi-stars"></i> Características Clave</h3>
      <div class="row g-3">
        <div class="col-md-6">
          <ul class="feature-list">
            <li><i class="bi bi-check2-circle"></i> Entrega inmediata</li>
            <li><i class="bi bi-check2-circle"></i> Autos nuevos y seguros</li>
            <li><i class="bi bi-check2-circle"></i> Asistencia</li>
          </ul>
        </div>
        <div class="col-md-6">
          <ul class="feature-list">
            <li><i class="bi bi-check2-circle"></i> Tarifas competitivas y transparentes</li>
            <li><i class="bi bi-check2-circle"></i> Reservas por WhatsApp </li>
            <li><i class="bi bi-check2-circle"></i> Opciones para turismo o empresa</li>
          </ul>
        </div>
      </div>
    </div>

    <div class="cta-buttons" data-aos="fade-up" data-aos-delay="400">
      <a href="https://wa.me/573123456789" target="_blank" class="btn-view-project">Reserva por WhatsApp</a>
      <a href="{{ url('/#portafolio') }}" class="btn-next-project">Ver más vehículos <i class="bi bi-arrow-right"></i></a>
    </div>
  </div>
</div>

        </div>

      </div>

    </section><!-- /Portfolio Details Section -->

  </main>
  @endsection