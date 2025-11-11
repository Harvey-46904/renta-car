@extends('neweb.index')
@section('content')
<main class="main">

    <!-- Page Title -->
    <div class="page-title">
        <div class="breadcrumbs">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i class="bi bi-house"></i> Inicio</a></li>
                    <li class="breadcrumb-item active current">Sobre Nosotros</li>
                </ol>
            </nav>
        </div>

        <div class="title-wrapper">
            <h1>RENTACAR PASTO</h1>
            <p>Ofrecemos alquiler de autos con seguro de cobertura amplia
                garantizando un servicio integral de alta calidad para vacaciones, trabajo o placer.</p>
        </div>
    </div><!-- End Page Title -->

    <!-- About Section -->
    <section id="about" class="service-details section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <!-- Main Content -->
                <div class="col-lg-8">
                    <div class="service-content">
                        <h2>Sobre nosotros</h2>
                        <p class="lead">Somos una empresa dedicada al alquiler de vehículos, con amplia experiencia
                            brindando soluciones de movilidad seguras, cómodas y confiables para cada uno de nuestros
                            clientes.</p>

                        <div class="service-image" data-aos="fade-up" data-aos-delay="200">
                            <img src="{!! asset('neweb/assets/img/services/services-3.jpg') !!}" alt="Alquiler de vehículos en Pasto"
                                class="img-fluid rounded">
                        </div>

                        <p>En <strong>RENTACAR PASTO</strong> ofrecemos un servicio de renta de autos ideal para
                            vacaciones, recreación, trabajo o negocios.
                            Nos encontramos en la ciudad de Pasto y también en el aeropuerto, para brindar mayor
                            comodidad y disponibilidad a nuestros usuarios.</p>

                        <p>Nuestra misión y visión se centran en garantizar la satisfacción total de nuestros clientes,
                            ofreciendo atención personalizada, vehículos en excelente estado y tarifas competitivas que
                            aseguran una experiencia de alquiler confiable y eficiente.</p>
                        <div class="service-features text-center" data-aos="fade-up" data-aos-delay="300">
                          
                              <div class="service-image" data-aos="fade-up" data-aos-delay="200">
                            <img src="{!! asset('neweb/assets/img/services/mision.png') !!}" alt="Alquiler de vehículos en Pasto"
                                class="img-fluid rounded" style="width: 250px">
                        </div>
                            <p>Nuestra misión es satisfacer en su totalidad las expectativas de todos nuestros clientes
                                y sus familias, brindándoles un servicio integral y con un alto estándar de calidad. Ya
                                sea por vacaciones, recreación, descanso, negocios, trabajo o placer RENTA CAR PASTO
                                ofrece la renta de autos, al mejor precio y con seguro de cobertura amplia y kilometraje
                                ilimitado en todos los vehículos.</p>
                        </div>


                        <!-- Vision -->
                        <div class="service-features text-center" data-aos="fade-up" data-aos-delay="300">
                             <div class="service-image" data-aos="fade-up" data-aos-delay="200">
                            <img src="{!! asset('neweb/assets/img/services/vision.png') !!}" alt="Alquiler de vehículos en Pasto"
                                class="img-fluid rounded" style="width: 250px">
                        </div>
                            <p>Servir eficientemente, siendo fiel a nuestros principios y valores corporativos,
                                generando bienestar, seguridad y confianza en nuestros clientes, usuarios, empleados y
                                todo aquel que solicite nuestros servicios de alquiler de vehículos, satisfaciendo
                                eficazmente y con entusiasmo, la necesidad del servicio que ha solicitado.</p>
                        </div>

                        <!-- Values -->
                        <div class="service-process" data-aos="fade-up" data-aos-delay="400">
                            <h4>Valores Corporativos</h4>
                            <div class="process-steps">
                                <div class="step-item">
                                    <div class="step-number">01</div>
                                    <div class="step-content">
                                        <h5>Cumplimiento</h5>
                                        <p>Cumplimos todos los compromisos adquiridos con nuestros clientes.</p>
                                    </div>
                                </div>
                                <div class="step-item">
                                    <div class="step-number">02</div>
                                    <div class="step-content">
                                        <h5>Honestidad y Ética</h5>
                                        <p>Dirigimos nuestra empresa bajo estándares inquebrantables de confianza,
                                            profesionalismo y ética.</p>
                                    </div>
                                </div>
                                <div class="step-item">
                                    <div class="step-number">03</div>
                                    <div class="step-content">
                                        <h5>Orientación al Cliente</h5>
                                        <p>El interés y bienestar de nuestros clientes siempre estará primero.</p>
                                    </div>
                                </div>
                                <div class="step-item">
                                    <div class="step-number">04</div>
                                    <div class="step-content">
                                        <h5>Excelencia en el Servicio</h5>
                                        <p>Brindamos experiencias únicas de alquiler que garantizan satisfacción y
                                            fidelidad.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- End Main Content -->

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <div class="sidebar" data-aos="fade-up" data-aos-delay="200">

                        <!-- Company Info -->
                        <div class="service-info">
                            <h4>Detalles de la Empresa</h4>
                            <ul class="service-facts">
                                <li>
                                    <span class="fact-label">Servicio:</span>
                                    <span class="fact-value">Alquiler de Vehículos</span>
                                </li>
                                <li>
                                    <span class="fact-label">Cobertura:</span>
                                    <span class="fact-value">Pasto y alrededores</span>
                                </li>
                                <li>
                                    <span class="fact-label">Tipo de vehículos:</span>
                                    <span class="fact-value">Carro || Camionetas</span>
                                </li>
                                <li>
                                    <span class="fact-label">Atención:</span>
                                    <span class="fact-value">24/7 Disponible</span>
                                </li>
                            </ul>
                        </div>

                        <!-- Testimonial -->
                        <div class="service-testimonial">
                            <div class="testimonial-content">
                                <p>"Excelente servicio, autos en perfecto estado y atención amable.
                                    Recomiendo totalmente RENTACAR PASTO para viajes seguros."</p>
                                <div class="testimonial-author">
                                    <img src="{!! asset('neweb/assets/img/person/person-m-9.webp')!!}" alt="Cliente satisfecho"
                                        class="author-image">
                                    <div class="author-info">
                                        <h5>Juan Pérez</h5>
                                        <span>Cliente frecuente</span>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div><!-- End Sidebar -->

            </div>

        </div>

    </section><!-- /About Section -->

</main>

@endsection