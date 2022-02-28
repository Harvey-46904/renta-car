@extends('webpage.index')
@section('content')

  
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bg-carmesy text-center" style="
        border-bottom-width: 0px;
    ">
          <h5 class="modal-title  text-light" id="exampleModalLabel">Rent A Car</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        
        <div class="modal-body bg-black">
           <a href="https://api.whatsapp.com/send?phone=573227795422&text=Hola%20Rent%20A%20Car%20necesito%20ayuda%20para%20alquilar%20un%20veh%C3%ADculo.">  <img src="{!! asset('webpage/img/publicidad1rentacar.jpg')!!}" 
            class="img-fluid rounded mx-auto d-block" alt="Responsive image"></a>
        </div>
        <div class="modal-footer bg-black text-center" style="
        border-top-width: 0px;
    ">
          <button type="button" class="btn btn-secondary bg-carmesy" data-dismiss="modal">Visita Nuestro Portal</button>
        </div>
      </div>
    </div>
  </div>
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
            <div class="gauto-main-slide slide-item-3">
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
            <div class="gauto-main-slide slide-item-4">
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
            <div class="gauto-main-slide slide-item-5">
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
            <div class="gauto-main-slide slide-item-6">
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
            <div class="gauto-main-slide slide-item-7">
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
            <div class="gauto-main-slide slide-item-8">
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
                                    @if (\Session::has('error'))
                                    <div class="alert alert-danger" role="alert">
                                        ERROR:{!! \Session::get('error') !!}
                                    </div>
                                    @endif
                                    <form method="POST" id="consulta_carros" action="{{ route('post_reserva_usuario') }}" >
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-4">
                                                <p>
                                                    
                                                <select id="lugar-entrega" name="lugar_entrega">
                                                <option disabled selected>Lugar de entrega</option>
                                                <option value="Pasto">Pasto</option>
                                                <option value="Aeropuerto-Pasto">Pasto - Aeropuerto Antonio Nariño</option>
                                                <option value="Aeropuerto-Ipiales">Ipiales - Aeropuerto San Luis</option>
                                               
                                            </select>
                                                </p>
                                            </div>
                                            <div class="col-md-4">
                                                <p>
                                                <select id="lugar-recogida" name="lugar_recogida">
                                                <option disabled selected>Lugar de recogida</option>
                                                <option value="Pasto">Pasto</option>
                                                <option value="Aeropuerto-Pasto">Pasto - Aeropuerto Antonio Nariño</option>
                                                <option value="Aeropuerto-Ipiales">Ipiales - Aeropuerto San Luis</option>
                                                
                                                </select>
                                                </p>
                                            </div>
<!--
                                            <div class="col-md-4">
                                                <p>
                                                <select>
                                                <option disabled selected>Vehículo</option>
                                                <option>Chevrolet Beat</option>
                                                <option>Renault Logan</option>
                                                <option>Renault Sandero</option>
                                                <option>Sandero Stepway</option>
                                                <option>Chevrolet Onix</option>
                                                <option>Hyundai HB20</option>
                                                <option disabled>CAMIONETAS</option>
                                                <option>Chevrolet Tracker</option>
                                                <option>Renault Duster</option>
                                                <option>Hyundai Tucson</option>
                                                <option>Nissan Qashqai</option>
                                                </select>
                                                </p>
                                            </div>
                                             -->
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <p> <input class="form-control" type="date" id="desdes" name="desdes">
                                                </p>
                                            </div>
                                            <div class="col-md-4">
                                                <p> <input class="form-control" type="date" id="hastas" name="hastas">
                                            </p>
                                            </div>
                                            <div class="col-md-4">
                                                <p><button type="submit" class="gauto-theme-btn" id="Buscar">BUSCAR</button></p>
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
                                            <div class="offer-image"><a href="#"><img src="{!! asset('webpage/img/spart_gt.png')!!}"
                                                        alt="offer 1" /></a></div>
                                            <div class="offer-text"><a href="#">
                                                    <h3>Chevrolet Spark GT</h3>
                                                </a>
                                                <h4>$150.000<span>/ Día</span></h4>
                                                <ul>
                                                    <li><i class="fa fa-car"></i>Full equipo AC</li>
                                                </ul>
                                                <div class="offer-action"><a href="" onclick="mensaje_wpp_carro('Chevrolet Spark GT')" class="offer-btn-1">Reservar</a><a
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
                                                <div class="offer-action"><a  href="" onclick="mensaje_wpp_carro('Chevrolet Beat')" class="offer-btn-1">Reservar</a><a
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
                                                <div class="offer-action"><a href="" onclick="mensaje_wpp_carro('Renault Sandero')" class="offer-btn-1">Reservar</a><a
                                                        href="#" class="offer-btn-2">Detalles</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   
                                    
                                    <div class="col-lg-4">
                                        <div class="single-offers" >
                                            <div class="offer-image"><a href="#"><img src="{!! asset('webpage/img/joy.png')!!}"
                                                        alt="offer 1" /></a></div>
                                            <div class="offer-text"><a href="#">
                                                    <h3>Chevrolet Joy</h3>
                                                </a>
                                                <h4>$200.000<span>/ Día</span></h4>
                                                <ul>
                                                    <li><i class="fa fa-car"></i>Full equipo AC</li>
                                                </ul>
                                                <div class="offer-action"><a href="" onclick="mensaje_wpp_carro('Sandero Stepway')" class="offer-btn-1">Reservar</a><a
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
                                                <h4>$210.000<span>/ Día</span></h4>
                                                <ul>
                                                    <li><i class="fa fa-car"></i>Full equipo AC</li>
                                                </ul>
                                                
                                                <div class="offer-action"><a href="" onclick="mensaje_wpp_carro('Chevrolet Onix')" class="offer-btn-1">Reservar</a><a
                                                        href="#" class="offer-btn-2">Detalles</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="single-offers" >
                                            <div class="offer-image"><a href="#"><img src="{!! asset('webpage/img/duster_blanco.png')!!}"
                                                        alt="offer 1" /></a></div>
                                            <div class="offer-text"><a href="#">
                                                    <h3>Renault Duster</h3>
                                                </a>
                                                <h4>$290.000<span>/ Día</span></h4>
                                                <ul>
                                                    <li><i class="fa fa-car"></i>Full equipo AC</li>
                                                </ul>
                                                <div class="offer-action"><a href="" onclick="mensaje_wpp_carro('Renault Logan')" class="offer-btn-1">Reservar</a><a
                                                    href="#" class="offer-btn-2">Detalles</a></div>
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
                                            <div class="offer-image"><a href="#"><img src="{!! asset('webpage/img/chevrolet-tracker.png')!!}"
                                                        alt="offer 1" /></a></div>
                                            <div class="offer-text"><a href="#">
                                                    <h3>Chevrolet Tracker</h3>
                                                </a>
                                                <h4>$280.000<span>/ Día</span></h4>
                                                <ul>
                                                    <li><i class="fa fa-car"></i>Full equipo AC</li>
                                                </ul>
                                                <div class="offer-action"><a href="" onclick="mensaje_wpp_carro('Chevrolet Tracker')" class="offer-btn-1">Reservar</a><a
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
                                                <h4>$300.000<span>/ Día</span></h4>
                                                <ul>
                                                    <li><i class="fa fa-car"></i>Full equipo AC</li>
                                                </ul>
                                                <div class="offer-action"><a href="" onclick="mensaje_wpp_carro('Nissan Qashqai')" class="offer-btn-1">Reservar</a><a
                                                        href="" class="offer-btn-2">Detalles</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
                                                <div class="offer-action"><a href=""  onclick="mensaje_wpp_carro('Hyundai Tucson')" class="offer-btn-1">Reservar</a><a
                                                        href="#" class="offer-btn-2">Detalles</a>
                                                </div>
                                              
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
                    <div class="promo-box-left" style="height:260px;width:500px;"><img src="{!! asset('webpage/img/logo-web.png')!!}" width="200"  /></div>
                </div>
                <div class="col-md-6">
                    <div class="promo-box-right">
                        <h3 style="color:White;">¿Te gustaría tener ingresos adicionales?</h3>
                        <p style="color:White;">Trabaja con nosotros, si tienes vehículos con modelos superiores a 2018 contactanos.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Promo Area End -->

    
@endsection