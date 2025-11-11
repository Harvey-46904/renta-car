@extends('neweb.index')
@section('content')

<main class="main">

    <!-- Page Title -->
    <div class="page-title">
        <div class="breadcrumbs">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i class="bi bi-house"></i> Inicio</a></li>
                    <li class="breadcrumb-item active current">Contáctanos</li>
                </ol>
            </nav>
        </div>

        <div class="title-wrapper">
            <h1>Contáctanos</h1>
            <p>Comunícate con <strong>RENTACAR PASTO</strong> y descubre una experiencia de alquiler de vehículos
                cómoda, rápida y segura.</p>
        </div>
    </div><!-- End Page Title -->

    <!-- Contact Details Section -->
    <section id="contact-details" class="portfolio-details section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4">

                <!-- Imagen o mapa -->
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="portfolio-details-media">
                         <div class="location-info text-center mt-4">
                            <h4><i class="fa fa-map-marker"></i> Cra 36 #10-21, Avenida Panamericana, Pasto, Nariño</h4>
                        </div>
                        <div class="google-map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.7737845789837!2d-77.28333468524528!3d1.2125799991599774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e2ed48aaaaaaaab%3A0xaaaaaaaaaaaaaaaaa!2sCra.%2036%20%2310-21%2C%20Pasto%2C%20Nari%C3%B1o!5e0!3m2!1ses!2sco!4v1635789012345!5m2!1ses!2sco"
                                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy">
                            </iframe>
                        </div>
                       
                    </div>
                    <div class="location-info text-center mt-4">
                        <h4><i class="fa fa-map-marker"></i> Hotel cabañas rio mayo Oficina 01 Chachagüi-Nariño</h4>
                    </div>
                    <div class="google-map">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d259.0765188868615!2d-77.28825687853136!3d1.3964241401672706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e2edbe2f51efb17%3A0x3a269ffcc68313d4!2sHotel%20Caba%C3%B1as%20Rio%20Mayo!5e0!3m2!1ses!2sco!4v1746257139337!5m2!1ses!2sco" 
                             width="100%" 
                            height="450" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy">
                        </iframe>
                    </div>
                    
                </div>

                <!-- Información de contacto -->
                <div class="col-lg-6 align" data-aos="fade-left">
                    <div class="portfolio-details-content">
                        <div class="project-meta">
                            <div class="badge-wrapper">
                                <span class="project-badge">Información de contacto</span>
                            </div>
                            <div class="date-client">
                                <div class="meta-item">
                                    <i class="bi bi-geo-alt"></i>
                                    <span>Cra 36 #10-21, Avenida Panamericana, Pasto, Nariño</span>
                                </div>
                                <div class="meta-item">
                                    <i class="bi bi-telephone"></i>
                                    <span>322 779 5422</span>
                                </div>
                                <div class="meta-item">
                                    <i class="bi bi-globe"></i>
                                    <span>San Juan de Pasto, Nariño, Colombia</span>
                                </div>
                                <div class="meta-item">
                                    <i class="bi bi-clock"></i>
                                    <span>Lunes a Domingo — 7:00 a.m. a 8:00 p.m.</span>
                                </div>
                            </div>
                        </div>

                        <h2 class="project-title">Estamos para servirte</h2>

                        <div class="project-overview">
                            <p class="lead">
                                En <strong>RENTACAR PASTO</strong> brindamos atención personalizada a nuestros clientes,
                                ya sea para reservas, cotizaciones o asistencia.
                                Puedes visitarnos en nuestra sede o llamarnos para programar tu vehículo ideal.
                            </p>
                        </div>

                        <div class="cta-buttons" data-aos="fade-up" data-aos-delay="200">
                            <a href="tel:3227795422" class="btn-view-project"><i class="bi bi-telephone-forward"></i>
                                Llamar ahora</a>
                            <a href="https://maps.google.com/?q=Cra+36+%2310-21,+Avenida+Panamericana,+Pasto,+Nariño"
                                target="_blank" class="btn-next-project">
                                <i class="bi bi-geo-alt"></i> Como llegar a Rent A Car Pasto
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section><!-- /Contact Details Section -->

</main>
@endsection