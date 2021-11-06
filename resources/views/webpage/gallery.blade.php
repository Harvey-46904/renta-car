@extends('webpage.index')
@section('content')
<!-- Breadcromb Area Start -->
<section class="gauto-breadcromb-area section_70">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcromb-box">
                        <h3>Galería de Imágenes</h3>
                        <ul>
                            <li><i class="fa fa-home"></i></li>
                            <li><a href="index.html">Inicio</a></li>
                            <li><i class="fa fa-angle-right"></i></li>
                            <li>Galería de Imágenes</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcromb Area End -->
    <!-- Gallery Area Start -->
    <section class="gauto-gallery-area section_70">
        <div class="container">
            <div class="row" id="lightgallery">
                <div class="col-lg-4" data-src="{!! asset('webpage/img/gallery1.png')!!}">
                    <div class="single-gallery">
                        <div class="img-holder"><img src="{!! asset('webpage/img/gallery1.png')!!}" alt="gallery 1" />
                            <div class="overlay-content">
                                <div class="inner-content">
                                    <div class="title-box">
                                        <h3>Chevrolet Spark GT</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="link-zoom-button">
                                
                                <div class="single-button"><a class="zoom lightbox-image"
                                        href="{!! asset('webpage/img/gallery1.png')!!}"><span class="fa fa-search"></span>Zoom</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-src="{!! asset('webpage/img/gallery2.png')!!}">
                    <div class="single-gallery">
                        <div class="img-holder"><img src="{!! asset('webpage/img/gallery2.png')!!}" alt="gallery 2" />
                            <div class="overlay-content">
                                <div class="inner-content">
                                    <div class="title-box">
                                        <h3>Renault Logan</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="link-zoom-button">
                                
                                <div class="single-button"><a class="zoom lightbox-image"
                                        href="{!! asset('webpage/img/gallery2.png')!!}"><span class="fa fa-search"></span>Zoom</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-src="{!! asset('webpage/img/gallery3.png')!!}">
                    <div class="single-gallery">
                        <div class="img-holder"><img src="{!! asset('webpage/img/gallery3.png')!!}" alt="gallery 3" />
                            <div class="overlay-content">
                                <div class="inner-content">
                                    <div class="title-box">
                                        <h3><a href="#">Base Cabient Repair</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="link-zoom-button">
                                
                                <div class="single-button"><a class="zoom lightbox-image"
                                        href="{!! asset('webpage/img/gallery3.png')!!}"><span class="fa fa-search"></span>Zoom</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-src="{!! asset('webpage/img/gallery4.png')!!}">
                    <div class="single-gallery">
                        <div class="img-holder"><img src="{!! asset('webpage/img/gallery4.png')!!}" alt="gallery 4" />
                            <div class="overlay-content">
                                <div class="inner-content">
                                    <div class="title-box">
                                        <h3><a href="#">Base Cabient Repair</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="link-zoom-button">
                                
                                <div class="single-button"><a class="zoom lightbox-image"
                                        href="{!! asset('webpage/img/gallery4.png')!!}"><span class="fa fa-search"></span>Zoom</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-src="{!! asset('webpage/img/gallery6.png')!!}">
                    <div class="single-gallery">
                        <div class="img-holder"><img src="{!! asset('webpage/img/gallery6.png')!!}" alt="gallery 5" />
                            <div class="overlay-content">
                                <div class="inner-content">
                                    <div class="title-box">
                                        <h3><a href="#">Base Cabient Repair</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="link-zoom-button">
                                
                                <div class="single-button"><a class="zoom lightbox-image"
                                        href="{!! asset('webpage/img/gallery6.png')!!}"><span class="fa fa-search"></span>Zoom</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-src="{!! asset('webpage/img/gallery7.png')!!}">
                    <div class="single-gallery">
                        <div class="img-holder"><img src="{!! asset('webpage/img/gallery7.png')!!}" alt="gallery 6" />
                            <div class="overlay-content">
                                <div class="inner-content">
                                    <div class="title-box">
                                        <h3>Auto</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="link-zoom-button">
                                
                                <div class="single-button"><a class="zoom lightbox-image"
                                        href="{!! asset('webpage/img/gallery7.png')!!}"><span class="fa fa-search"></span>Zoom</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <!-- Gallery Area End -->
@endsection