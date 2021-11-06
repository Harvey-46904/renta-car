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
                                        <p>for rent $65 per day</p>
                                        <h2>Reserved Now & Get <span>50% Off</span></h2><a href="#"
                                            class="gauto-btn">Reserve Now!</a>
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
                                        <p>for rent $70 per day</p>
                                        <h2>Reserved Now & Get <span>50% Off</span></h2><a href="#"
                                            class="gauto-btn">Reserve Now!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Slider Area End -->
    <!-- Find Area Start -->
    <section class="gauto-find-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="find-box">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="find-text">
                                    <h3>Search Your Best Cars here.</h3>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="find-form">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <p><input type="text" placeholder="From Address" /></p>
                                            </div>
                                            <div class="col-md-4">
                                                <p><input type="text" placeholder="To Address" /></p>
                                            </div>
                                            <div class="col-md-4">
                                                <p><select>
                                                        <option data-display="Select">AC Car</option>
                                                        <option>Non-AC Car</option>
                                                    </select></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <p><input id="reservation_date" name="reservation_date"
                                                        placeholder="Journey Date" data-select="datepicker" type="text">
                                                </p>
                                            </div>
                                            <div class="col-md-4">
                                                <p class="input-group clockpicker" data-placement="bottom"
                                                    data-align="top" data-autoclose="true"><input type="text"
                                                        class="form-control" placeholder="Journey Time" /></p>
                                            </div>
                                            <div class="col-md-4">
                                                <p><button type="submit" class="gauto-theme-btn">Find Car</button></p>
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
                        <h4>about us</h4>
                        <h2>Welcome to gauto</h2>
                        <p>Horem Ipsum passages, and more recently with desktop publishing software like aldus pageMaker
                            including versions of all the Rorem Ipsum generators</p>
                        <div class="about-list">
                            <ul>
                                <li><i class="fa fa-check"></i>We are a trusted name</li>
                                <li><i class="fa fa-check"></i>we deal in have all brands</li>
                                <li><i class="fa fa-check"></i>have a larger stock of vehicles</li>
                                <li><i class="fa fa-check"></i>we are at worldwide locations</li>
                            </ul>
                        </div>
                        <div class="about-signature">
                            <div class="signature-left"><img src="assets/img/signature.png" alt="signature" /></div>
                            <div class="signature-right">
                                <h3>Robertho Garcia</h3>
                                <p>President</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-right"><img src="assets/img/about.png" alt="car" /></div>
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
                            <div class="service-icon"><img src="{!! asset('webpage/img/hotel-transport.png')!!}"
                                    alt="wedding trasport" /></div>
                            <div class="service-text"><a href="#">
                                    <h3>Whole City Tour</h3>
                                </a>
                                <p>Risus commodo maecenas accumsan lacus vel facilisis. Dorem ipsum dolor consectetur
                                    adipiscing elit.</p>
                            </div>
                        </div>
                        <div class="single-service"><span class="service-number">06</span>
                            <div class="service-icon"><img src="{!! asset('webpage/img/luggege-transport.png')!!}"
                                    alt="wedding trasport" /></div>
                            <div class="service-text"><a href="#">
                                    <h3>Baggage transport</h3>
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
                    <div class="promo-box-left"><img src="assets/img/toyota-offer-2.png" alt="promo car" /></div>
                </div>
                <div class="col-md-6">
                    <div class="promo-box-right">
                        <h3>Do You Want To Earn With Us? So Don't be Late.</h3><a href="#" class="gauto-btn">Become a
                            drive</a>
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
                                                    <h3>Kia Picanto</h3>
                                                </a>
                                                <h4>$50.00<span>/ Day</span></h4>
                                                <ul>
                                                    <li><i class="fa fa-car"></i>Model:2017</li>
                                                    <li><i class="fa fa-cogs"></i>Automatic</li>
                                                    <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                                </ul>
                                                <div class="offer-action"><a href="#" class="offer-btn-1">Rent Car</a><a
                                                        href="#" class="offer-btn-2">Details</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="single-offers">
                                            <div class="offer-image"><a href="#"><img src="{!! asset('webpage/img/spark-gt.png')!!}"
                                                        alt="offer 1" /></a></div>
                                            <div class="offer-text"><a href="#">
                                                    <h3>Chevrolet Spark GT</h3>
                                                </a>
                                                <h4>$75.00<span>/ Day</span></h4>
                                                <ul>
                                                    <li><i class="fa fa-car"></i>Model:2017</li>
                                                    <li><i class="fa fa-cogs"></i>Automatic</li>
                                                    <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                                </ul>
                                                <div class="offer-action"><a href="#" class="offer-btn-1">Rent Car</a><a
                                                        href="#" class="offer-btn-2">Details</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="single-offers">
                                            <div class="offer-image"><a href="#"><img src="{!! asset('webpage/img/renault-logan.png')!!}"
                                                        alt="offer 1" /></a></div>
                                            <div class="offer-text"><a href="#">
                                                    <h3>Renault Logan</h3>
                                                </a>
                                                <h4>$45.00<span>/ Day</span></h4>
                                                <ul>
                                                    <li><i class="fa fa-car"></i>Model:2017</li>
                                                    <li><i class="fa fa-cogs"></i>Automatic</li>
                                                    <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                                </ul>
                                                <div class="offer-action"><a href="#" class="offer-btn-1">Rent Car</a><a
                                                        href="#" class="offer-btn-2">Details</a></div>
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
                                                    <h3>Sandero Stepway</h3>
                                                </a>
                                                <h4>$50.00<span>/ Day</span></h4>
                                                <ul>
                                                    <li><i class="fa fa-car"></i>Model:2017</li>
                                                    <li><i class="fa fa-cogs"></i>Automatic</li>
                                                    <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                                </ul>
                                                <div class="offer-action"><a href="#" class="offer-btn-1">Rent Car</a><a
                                                        href="#" class="offer-btn-2">Details</a></div>
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
                                                <h4>$75.00<span>/ Day</span></h4>
                                                <ul>
                                                    <li><i class="fa fa-car"></i>Model:2017</li>
                                                    <li><i class="fa fa-cogs"></i>Automatic</li>
                                                    <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                                </ul>
                                                <div class="offer-action"><a href="#" class="offer-btn-1">Rent Car</a><a
                                                        href="#" class="offer-btn-2">Details</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="single-offers">
                                            <div class="offer-image"><a href="#"><img src="{!! asset('webpage/img/ford-ecosport.jpg')!!}" alt="offer 1" /></a></div>
                                            <div class="offer-text"><a href="#">
                                                    <h3>Ford Ecosport</h3>
                                                </a>
                                                <h4>$55.00<span>/ Day</span></h4>
                                                <ul>
                                                    <li><i class="fa fa-car"></i>Model:2017</li>
                                                    <li><i class="fa fa-cogs"></i>Automatic</li>
                                                    <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                                </ul>
                                                <div class="offer-action"><a href="#" class="offer-btn-1">Rent Car</a><a
                                                        href="#" class="offer-btn-2">Details</a></div>
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
    
    <!-- Call Area Start -->
    <section class="gauto-call-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="call-box">
                        <div class="call-box-inner">
                            <h2>With Over <span>150+</span>Partners Locations</h2>
                            <p>Labore dolore magna aliqua ipsum veniam quis nostrud exercitation voluptate velit cillum
                                dolore feu fugiat nulla excepteur sint occaecat sed ipsum cupidatat proident culpa
                                exercitation ullamco laboris aliquik.</p>
                            <div class="call-number">
                                <div class="call-icon"><i class="fa fa-phone"></i></div>
                                <div class="call-text">
                                    <p>need any help?</p>
                                    <h4><a href="#">(431) 529 2093</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </section><!-- Call Area End -->
@endsection