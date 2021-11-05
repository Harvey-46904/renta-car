@extends('webpage.index')
@section('content')
 <!-- Breadcromb Area Start -->
 <section class="gauto-breadcromb-area section_70">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcromb-box">
                        <h3>SOBRE NOSOTROS</h3>
                        <ul>
                            <li><i class="fa fa-home"></i></li>
                            <li><a href="index.html">Inicio</a></li>
                            <li><i class="fa fa-angle-right"></i></li>
                            <li>Nosotros</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Breadcromb Area End -->
    <!-- About Page Area Start -->
    <section class="about-page-area section_70">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="about-page-left">
                        <h4>RENTACAR PASTO</h4>
                        <hr>
                        <h3>MISIÓN</h3>
                        <p>Nuestra misión es satisfacer en su totalidad las expectativas de todos nuestros clientes y sus familias, brindándoles un servicio integral y con un alto estándar de calidad. Ya sea por vacaciones, recreación, descanso, negocios, trabajo o placer RENTA CAR PASTO ofrece la renta de autos, al mejor precio y con seguro de cobertura amplia y kilometraje ilimitado en todos los vehículos.</p>
                    </div>
                </div>
                <div class="col-lg-4 ">
                    <div class="about-page-right"><img src="{!! asset('webpage/img/mision.png')!!}" alt="about page" /></div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="about-page-area section_90">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="about-page-left">
                        <h4>RENTACAR PASTO</h4>
                        <hr>
                        <h3>VISIÓN</h3>
                        <p>Servir eficientemente, siendo fiel a nuestros principios y valores corporativos, generando bienestar, seguridad y confianza en nuestros clientes, usuarios, empleados y todo aquel que solicite nuestros servicios de alquiler de vehículos, satisfaciendo eficazmente y con entusiasmo, la necesidad del servicio que ha solicitado.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="about-page-right"><img src="{!! asset('webpage/img/vision.png')!!}" alt="about page" /></div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-page-area section_70">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="about-page-left">
                        <h4>RENTACAR PASTO</h4>
                        <hr>
                        <h3>VALORES</h3>
                        <p>> Cumpliremos todos los compromisos que tenemos con nuestros clientes.</p>
                        <p>> Dirigiremos nuestra empresa con altos estándares inquebrantables de honestidad, confianza, profesionalismo y ética.</p>
                        <p>> El interés de nuestros clientes siempre estará primero.</p>
                        <p>> Nos dedicaremos a brindar una experiencia de alquiler individual que garantice la satisfacción del cliente y por medio de la cual nos ganemos la confianza incondicional de nuestros clientes.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="about-page-right"><img src="{!! asset('webpage/img/valores.png')!!}" alt="about page" /></div>
                </div>
            </div>
        </div>
    </section>

@endsection