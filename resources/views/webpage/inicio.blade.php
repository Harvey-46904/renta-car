@extends('webpage.index')
@section('content')
<!-- Slider Area Start -->
<section class="gauto-slider-area fix">
        <div class="gauto-slide owl-carousel">
            <div class="gauto-main-slide slide-item-1">
                <div class="gauto-main-caption">
                    <div class="gauto-caption-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slider-text">
                                        <p>Autos desde $180.000 por día</p>
                                        <h2>Reserva Hoy Mismo</h2> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gauto-main-slide slide-item-2">
                <div class="gauto-main-caption">
                    <div class="gauto-caption-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slider-text">
                                    <p>Autos desde $180.000 por día</p>
                                        <h2>Reserva Hoy Mismo</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Slider Area End -->
     <!-- Find Area Start -->
     <section class="gauto-find-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="find-box">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="find-text">
                                    <h3>Encuentre los mejores autos aquí.</h3>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="find-form">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <p><input type="text" placeholder="Lugar de entrega" /></p>
                                            </div>
                                            <div class="col-md-4">
                                                <p><input type="text" placeholder="Lugar de recogida" /></p>
                                            </div>
                                            <div class="col-md-4">
                                                <p><select>
                                                        <option data-display="Vehiculo">AC Car</option>
                                                        <option>Non-AC Car</option>
                                                    </select></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <p><input id="reservation_date" name="reservation_date"
                                                        placeholder="Fecha Reserva" data-select="datepicker" type="text">
                                                </p>
                                            </div>
                                            <div class="col-md-4">
                                                <p class="input-group clockpicker" data-placement="bottom"
                                                    data-align="top" data-autoclose="true"><input type="text"
                                                        class="form-control" placeholder="Hora Reserva" /></p>
                                            </div>
                                            <div class="col-md-4">
                                                <p><button type="submit" class="gauto-theme-btn">BUSCAR</button></p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Find Area End -->
    <!-- Offers Area Start -->
    <section class="gauto-offers-area section_70">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="site-heading">
                        
                        <h2>NUESTROS VEHÍCULOS</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="offer-tabs">
                        
                        <div class="tab-content" id="offerTabContent">
                            <!-- All Tab Start -->
                            <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="single-offers">
                                            <div class="offer-image"><a href="#"><img src="{!! asset('webpage/img/sandero-stepway.png')!!}"
                                                        alt="offer 1" /></a></div>
                                            <div class="offer-text"><a href="#">
                                                    <h3>Sandero Stepway</h3>
                                                </a>
                                                <h4>$190.000<span>/ Día</span></h4>
                                                <ul>
                                                    <li><i class="fa fa-car"></i>Full equipo AC</li>
                                                </ul>
                                                <div class="offer-action"><a href="#" class="offer-btn-1">Reservar</a><a
                                                    href="#" class="offer-btn-2">Detalles</a></div>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="single-offers">
                                            <div class="offer-image"><a href="#"><img src="{!! asset('webpage/img/chevrolet-onix.png')!!}"
                                                        alt="offer 1" /></a></div>
                                            <div class="offer-text"><a href="#">
                                                    <h3>Chevrolet Onix</h3>
                                                </a>
                                                <h4>$000.000<span>/ Día</span></h4>
                                                <ul>
                                                    <li><i class="fa fa-car"></i>Full equipo AC</li>
                                                </ul>
                                                
                                                <div class="offer-action"><a href="#" class="offer-btn-1">Reservar</a><a
                                                        href="#" class="offer-btn-2">Detalles</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="single-offers">
                                            <div class="offer-image"><a href="#"><img src="{!! asset('webpage/img/chevrolet-beat.png')!!}"
                                                        alt="offer 1" /></a></div>
                                            <div class="offer-text"><a href="#">
                                                    <h3>Chevrolet Beat</h3>
                                                </a>
                                                <h4>$180.000<span>/ Día</span></h4>
                                                <ul>
                                                    <li><i class="fa fa-car"></i>Full equipo AC</li>
                                                </ul>
                                                <div class="offer-action"><a href="#" class="offer-btn-1">Reservar</a><a
                                                        href="#" class="offer-btn-2">Detalles</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    
                                    <div class="col-lg-4">
                                        <div class="single-offers">
                                            <div class="offer-image"><a href="#"><img src="{!! asset('webpage/img/hb20.png')!!}"
                                                        alt="offer 1" /></a></div>
                                            <div class="offer-text"><a href="#">
                                                    <h3>Hyundai HB20</h3>
                                                </a>
                                                <h4>$300.000<span>/ Día</span></h4>
                                                <ul>
                                                    <li><i class="fa fa-car"></i>Full equipo AC</li>
                                                </ul>
                                                <div class="offer-action"><a href="#" class="offer-btn-1">Reservar</a><a
                                                        href="#" class="offer-btn-2">Detalles</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="single-offers">
                                            <div class="offer-image"><a href="#"><img src="{!! asset('webpage/img/renault-sandero.png')!!}" alt="offer 1" /></a></div>
                                            <div class="offer-text"><a href="#">
                                                    <h3>Renault Sandero</h3>
                                                </a>
                                                <h4>$190.000<span>/ Día</span></h4>
                                                <ul>
                                                    <li><i class="fa fa-car"></i>Full equipo AC</li>
                                                </ul>
                                                <div class="offer-action"><a href="#" class="offer-btn-1">Reservar</a><a
                                                        href="#" class="offer-btn-2">Detalles</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="site-heading">
                                    <br>
                                    <h2>CAMIONETAS</h2>
                                </div>

                                <div class="row">
                                <div class="col-lg-4">
                                        <div class="single-offers">
                                            <div class="offer-image"><a href="#"><img src="{!! asset('webpage/img/tucson.png')!!}"
                                                        alt="offer 1" /></a></div>
                                            <div class="offer-text"><a href="#">
                                                    <h3>Hyundai Tucson</h3>
                                                </a>
                                                <h4>$300.000<span>/ Día</span></h4>
                                                <ul>
                                                    <li><i class="fa fa-car"></i>Full equipo AC</li>
                                                </ul>
                                                <div class="offer-action"><a href="#" class="offer-btn-1">Reservar</a><a
                                                        href="#" class="offer-btn-2">Detalles</a>
                                                </div>
                                              
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="single-offers">
                                            <div class="offer-image"><a href="#"><img src="{!! asset('webpage/img/chevrolet-tracker.png')!!}"
                                                        alt="offer 1" /></a></div>
                                            <div class="offer-text"><a href="#">
                                                    <h3>Chevrolet Tracker</h3>
                                                </a>
                                                <h4>$300.000<span>/ Día</span></h4>
                                                <ul>
                                                    <li><i class="fa fa-car"></i>Full equipo AC</li>
                                                </ul>
                                                <div class="offer-action"><a href="#" class="offer-btn-1">Reservar</a><a
                                                        href="#" class="offer-btn-2">Detalles</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="single-offers">
                                            <div class="offer-image"><a href="#"><img src="{!! asset('webpage/img/qashqai.png')!!}" alt="offer 1" /></a></div>
                                            <div class="offer-text"><a href="#">
                                                    <h3>Nissan Qashqai</h3>
                                                </a>
                                                <h4>$190.000<span>/ Día</span></h4>
                                                <ul>
                                                    <li><i class="fa fa-car"></i>Full equipo AC</li>
                                                </ul>
                                                <div class="offer-action"><a href="#" class="offer-btn-1">Reservar</a><a
                                                        href="#" class="offer-btn-2">Detalles</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                        <div class="single-offers">
                                            <div class="offer-image"><a href="#"><img src="{!! asset('webpage/img/duster.png')!!}"
                                                        alt="offer 1" /></a></div>
                                            <div class="offer-text"><a href="#">
                                                    <h3>Renault Duster</h3>
                                                </a>
                                                <h4>$300.000<span>/ Día</span></h4>
                                                <ul>
                                                    <li><i class="fa fa-car"></i>Full equipo AC</li>
                                                </ul>
                                                <div class="offer-action"><a href="#" class="offer-btn-1">Reservar</a><a
                                                        href="#" class="offer-btn-2">Detalles</a>
                                                </div>
                                              
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <!-- All Tab End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Offers Area End -->
    
    <!-- About Area Start -->
    <section class="gauto-about-area section_70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-left">
                        <h4>RENT A CAR PASTO</h4>
                        <h2>¡Bienvenido!</h2>
                        <p>Empresa pionera y lider en Nariño pone a su disposición vehículos en diferentes gamas para:</p>
                        <div class="about-list">
                            <ul>
                                <li><i class="fa fa-check"></i>Alquiler de Vehículos</li>
                                <li><i class="fa fa-check"></i>Transporte al Aeropuerto</li>
                                <li><i class="fa fa-check"></i>Servicio de Recogida</li>
                                <li><i class="fa fa-check"></i>Entrega a Domicilio</li>
                                <li><i class="fa fa-check"></i>Cómodos Precios</li>
                           
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-right"><img src="{!! asset('webpage/img/qashqai-index.png')!!}"  style="border-radius: 20px;" /></div>
                </div>
            </div>
        </div>
    </section><!-- About Area End -->
   <!-- Service Area Start -->
<section class="gauto-service-area section_70">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="site-heading">
        
                        <h2>Nuestros Servicios</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="service-slider owl-carousel">
                        <div class="single-service"><span class="service-number">01</span>
                            <div class="service-icon"><img src="{!! asset('webpage/img/service-1.png')!!}" alt="city trasport" />
                            </div>
                            <div class="service-text"><a href="#">
                                    <h3>Alquiler de Vehículos</h3>
                                </a>
                                <p>Precios comodos en gamas baja,media y alta</p>
                            </div>
                        </div>
                        <div class="single-service"><span class="service-number">02</span>
                            <div class="service-icon"><img src="{!! asset('webpage/img/airport-transport.png')!!}"
                                    alt="airport trasport" /></div>
                            <div class="service-text"><a href="#">
                                    <h3>Transporte Aeropuerto</h3>
                                </a>
                                <p>Entregas y recogidas.</p>
                            </div>
                        </div>
                      
                       
                        <div class="single-service"><span class="service-number">03</span>
                            <div class="service-icon"><img src="{!! asset('webpage/img/domicilio.png')!!}"
                                    alt="wedding trasport" /></div>
                            <div class="service-text"><a href="#">
                                    <h3>Entrega A Domicilio</h3>
                                </a>
                                <p>Entregas a domicilio dentro de la ciudad sin ningun costo</p>
                            </div>
                        </div>
                        <div class="single-service"><span class="service-number">04</span>
                            <div class="service-icon"><img src="{!! asset('webpage/img/domicilio.png')!!}"
                                    alt="wedding trasport" /></div>
                            <div class="service-text"><a href="#">
                                    <h3>Traslados a nivel nacional</h3>
                                </a>
                                <p>Aplican terminos y condiciones</p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service Area End -->

    <!-- Promo Area Start -->
    <section class="gauto-promo-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="promo-box-left"><img src="{!! asset('webpage/img/logo-web.png')!!}" width="220" height="300" /></div>
                </div>
                <div class="col-md-6">
                    <div class="promo-box-right">
                        <h3>¿Te gustaría tener ingresos adicionales?</h3>
                        <p>Trabaja con nosotros si tienes vehículos con modelos superiores a 2018 contactanos.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Promo Area End -->

    
@endsection