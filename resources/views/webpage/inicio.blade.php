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
                                    <p>Autos desde $180 por día</p>
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
                                                <p><input type="text" placeholder="Ciudad de recogida" /></p>
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
    <!-- About Area Start -->
    <section class="gauto-about-area section_70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-left">
                        <h4>RENTACAR PASTO</h4>
                        <h2>¡Bienvenido!</h2>
                        <p>Tenemos diferentes modelos y gamas de autos para cada necesidad, estamos prestos para brindarte el mejor servicio de la ciudad.</p>
                        <div class="about-list">
                            <ul>
                                <li><i class="fa fa-check"></i>Alquiler de Vehículos</li>
                                <li><i class="fa fa-check"></i>Transporte al Aeropuerto</li>
                                <li><i class="fa fa-check"></i>Servicio de Recogida</li>
                                <li><i class="fa fa-check"></i>Entrega a Domicilio</li>
                                <li><i class="fa fa-check"></i>Cómodos Precios</li>
                                <li><i class="fa fa-check"></i>Servicio de Conductor</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-right"><img src="{!! asset('webpage/img/car-red.jpg')!!}"  style="border-radius: 20px;" /></div>
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
                                <p>Risus commodo maecenas accumsan lacus vel facilisis. Dorem ipsum dolor consectetur
                                    adipiscing elit.</p>
                            </div>
                        </div>
                        <div class="single-service"><span class="service-number">02</span>
                            <div class="service-icon"><img src="{!! asset('webpage/img/airport-transport.png')!!}"
                                    alt="airport trasport" /></div>
                            <div class="service-text"><a href="#">
                                    <h3>Transporte Aeropuerto</h3>
                                </a>
                                <p>Risus commodo maecenas accumsan lacus vel facilisis. Dorem ipsum dolor consectetur
                                    adipiscing elit.</p>
                            </div>
                        </div>
                        <div class="single-service"><span class="service-number">03</span>
                            <div class="service-icon"><img src="{!! asset('webpage/img/service-3.png')!!}"
                                    alt="hospital trasport" /></div>
                            <div class="service-text"><a href="#">
                                    <h3>Servicio de Conductor</h3>
                                </a>
                                <p>Risus commodo maecenas accumsan lacus vel facilisis. Dorem ipsum dolor consectetur
                                    adipiscing elit.</p>
                            </div>
                        </div>
                        <div class="single-service"><span class="service-number">04</span>
                            <div class="service-icon"><img src="{!! asset('webpage/img/service-4.png')!!}"
                                    alt="wedding trasport" /></div>
                            <div class="service-text"><a href="#">
                                    <h3>Servicio de Recogida</h3>
                                </a>
                                <p>Risus commodo maecenas accumsan lacus vel facilisis. Dorem ipsum dolor consectetur
                                    adipiscing elit.</p>
                            </div>
                        </div>
                        <div class="single-service"><span class="service-number">05</span>
                            <div class="service-icon"><img src="{!! asset('webpage/img/domicilio.png')!!}"
                                    alt="wedding trasport" /></div>
                            <div class="service-text"><a href="#">
                                    <h3>Entrega A Domicilio</h3>
                                </a>
                                <p>Risus commodo maecenas accumsan lacus vel facilisis. Dorem ipsum dolor consectetur
                                    adipiscing elit.</p>
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
                    <div class="promo-box-left"><img src="{!! asset('webpage/img/logo.png')!!}" width="220" height="200" /></div>
                </div>
                <div class="col-md-6">
                    <div class="promo-box-right">
                        <h3>Trabaja como conductor</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Promo Area End -->

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
                                            <div class="offer-image"><a href="#"><img src="{!! asset('webpage/img/kia-picanto.png')!!}"
                                                        alt="offer 1" /></a></div>
                                            <div class="offer-text"><a href="#">
                                                    <h3>Sandero </h3>
                                                </a>
                                                <h4>$190.000<span>/ Día</span></h4>
                                                <ul>
                                                    <li><i class="fa fa-car"></i>Model:2017</li>
                                                    <li><i class="fa fa-cogs"></i>Automatic</li>
                                                    <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                                </ul>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="single-offers">
                                            <div class="offer-image"><a href="#"><img src="{!! asset('webpage/img/spark-gt.png')!!}"
                                                        alt="offer 1" /></a></div>
                                            <div class="offer-text"><a href="#">
                                                    <h3>Chevrolet Tracker</h3>
                                                </a>
                                                <h4>$280.000<span>/ Día</span></h4>
                                                <ul>
                                                    <li><i class="fa fa-car"></i>Model:2017</li>
                                                    <li><i class="fa fa-cogs"></i>Automatic</li>
                                                    <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                                </ul>
                                                <!--
                                                <div class="offer-action"><a href="#" class="offer-btn-1">Reservar</a><a
                                                        href="#" class="offer-btn-2">Detalles</a></div>-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="single-offers">
                                            <div class="offer-image"><a href="#"><img src="{!! asset('webpage/img/renault-logan.png')!!}"
                                                        alt="offer 1" /></a></div>
                                            <div class="offer-text"><a href="#">
                                                    <h3>Hyundai Tucson</h3>
                                                </a>
                                                <h4>$300.000<span>/ Día</span></h4>
                                                <ul>
                                                    <li><i class="fa fa-car"></i>Model:2017</li>
                                                    <li><i class="fa fa-cogs"></i>Automatic</li>
                                                    <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                                </ul>
                                              
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="single-offers">
                                            <div class="offer-image"><a href="#"><img src="{!! asset('webpage/img/sandero-stepway.png')!!}"
                                                        alt="offer 1" /></a></div>
                                            <div class="offer-text"><a href="#">
                                                    <h3>Chevrolet Beat</h3>
                                                </a>
                                                <h4>$180.000<span>/ Día</span></h4>
                                                <ul>
                                                    <li><i class="fa fa-car"></i>Model:2017</li>
                                                    <li><i class="fa fa-cogs"></i>Automatic</li>
                                                    <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                                </ul>
                                               
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="single-offers">
                                            <div class="offer-image"><a href="#"><img src="{!! asset('webpage/img/renault-duster.jpg')!!}"
                                                        alt="offer 1" /></a></div>
                                            <div class="offer-text"><a href="#">
                                                    <h3>Renault Duster</h3>
                                                </a>
                                                <h4>$300.000<span>/ Día</span></h4>
                                                <ul>
                                                    <li><i class="fa fa-car"></i>Model:2017</li>
                                                    <li><i class="fa fa-cogs"></i>Automatic</li>
                                                    <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                                </ul>
                                               
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="single-offers">
                                            <div class="offer-image"><a href="#"><img src="{!! asset('webpage/img/ford-ecosport.jpg')!!}" alt="offer 1" /></a></div>
                                            <div class="offer-text"><a href="#">
                                                    <h3>Renault Sandero</h3>
                                                </a>
                                                <h4>$190.000<span>/ Día</span></h4>
                                                <ul>
                                                    <li><i class="fa fa-car"></i>Model:2017</li>
                                                    <li><i class="fa fa-cogs"></i>Automatic</li>
                                                    <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                                </ul>
                                               
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
    </section><!-- Offers Area End -->
@endsection