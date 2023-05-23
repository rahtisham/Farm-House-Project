@extends('layouts.frontend')

@section('content')

    <!-- ALL SECTION INCLOSED TO THE WRAPPER -->
    <div class="wrapper">
        <!-- BEGIN LOADING -->
        <div id="loader" class="loader">
            <div class="implode">
                <div class="implode-in">
                    <div id="cover" class="acting">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div> <!-- /.implode -->
        </div> <!-- /#loader -->
        <!-- END LOADING -->

        <!-- HEADER AREA START -->
        <x-header />
        <!-- /HEADER AREA END -->

        <!-- PROPERTIES AREA START -->
        <section class="properties page-prime-bg">
            <div class="page-prime-bg-overlay-effect"></div>
            <div class="container">
                <div class="page-heading">
                    <div class="page-main-title">
                        <strong></strong> <!-- Use for heading after effect -->
                        <h2>Properties</h2>
                    </div>
                    <h5>Modern, Elegent & Beautiful</h5>
                </div> <!-- /.page-heading -->

                <div class="page-prime-metadata">
                    <span class="only">
                        only
                    </span>
                    <span class="price">
                        $15000
                    </span>
                    <span class="booking">
                        For Booking
                    </span>
                </div>
                <div class="page-prime-btn">
                    <a href="#" class="dream-btn">Book Today</a>
                </div>
            </div> <!-- /.container -->
        </section> <!-- /.properties -->
        <!-- /PROPERTIES AREA END -->

        <!-- SHOWCASE FEATURE AREA START -->
        <section class="showcase-feature">
            <div class="container">
                <div class="section-heading">
                    <h5>Check Out</h5>
                    <div class="main-title">
                        <h2><span>Property</span> Details</h2>
                        <strong></strong> <!-- Use for heading after effect -->
                    </div>
                </div> <!-- /.section-heading -->
                <div id="showcase-main-thumb-slider-section">
                    <!-- Showcase Slider Main -->
                    <div id="showcase-main-area-slider">
                        <div class="items">
                            <div class="img-pot" data-bg-img="assets/images/slider/showcase/6.jpg"></div>
                        </div>
                        <div class="items">
                            <div class="img-pot" data-bg-img="assets/images/slider/showcase/4.jpg"></div>
                        </div>
                        <div class="items">
                            <div class="img-pot" data-bg-img="assets/images/slider/showcase/3.jpg"></div>
                        </div>
                        <div class="items">
                            <div class="img-pot" data-bg-img="assets/images/slider/showcase/5.jpg"></div>
                        </div>
                        <div class="items">
                            <div class="img-pot" data-bg-img="assets/images/slider/showcase/4.jpg"></div>
                        </div>
                        <div class="items">
                            <div class="img-pot" data-bg-img="assets/images/slider/showcase/4.jpg"></div>
                        </div>
                    </div> <!-- /#showcase-main-area-slider -->
                    <!-- Showcase Slider Thumbnail -->
                    <div id="showcase-thumb-slider">
                        <div class="items">
                            <div class="img-pot" data-bg-img="assets/images/slider/showcase/4.jpg"></div>
                        </div>
                        <div class="items">
                            <div class="img-pot" data-bg-img="assets/images/slider/showcase/6.jpg"></div>
                        </div>
                        <div class="items">
                            <div class="img-pot" data-bg-img="assets/images/slider/showcase/2.jpg"></div>
                        </div>
                        <div class="items">
                            <div class="img-pot" data-bg-img="assets/images/slider/showcase/3.jpg"></div>
                        </div>
                        <div class="items">
                            <div class="img-pot" data-bg-img="assets/images/slider/showcase/5.jpg"></div>
                        </div>
                        <div class="items">
                            <div class="img-pot" data-bg-img="assets/images/slider/showcase/4.jpg"></div>
                        </div>
                    </div> <!-- /#showcase-thumb-slider -->
                </div> <!-- /#showcase-main-thumb-slider-section -->
            </div> <!-- /.container -->
        </section> <!-- /.showcase-feature -->
        <!-- /SHOWCASE FEATURE AREA END -->

        <!-- AWESOME PROPERTIES AREA START -->
        <div class="properties-things">
            <div class="container">
                <div class="awesome-items stylist-bottom-left">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <article class="awesome-content">
                                <div class="awesome-header stylist-bottom-right">
                                    <h3>Our Awesome Property</h3>
                                    <p><i class="fa fa-map-marker"></i> 530, Khan A Sabur Road, Khulna, Bangladesh</p>
                                </div>
                                <div class="awesome-footer">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius mod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nstrud exercitation ullamco laboris nisi ut aliquip</p>
                                    <div class="awesome-btn">
                                        <a href="#" class="dream-btn">Book Now</a>
                                    </div>
                                </div>
                            </article> <!-- /.awesome-content -->
                        </div> <!-- /.col- -->
                        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                            <div class="total-package shadow-bottom-items">
                                <strong>$12000</strong>
                                <div class="price-list">
                                    <ul>
                                        <li>
                                            <span>Total area</span>
                                            <span>4500m</span>
                                        </li>
                                        <li>
                                            <span>Total rooms</span>
                                            <span>6</span>
                                        </li>
                                        <li>
                                            <span>Bed rooms</span>
                                            <span>3</span>
                                        </li>
                                        <li>
                                            <span>Bath room</span>
                                            <span>2</span>
                                        </li>
                                        <li>
                                            <span>Parking car</span>
                                            <span>2</span>
                                        </li>
                                    </ul>
                                </div>
                            </div> <!-- /.total-package -->
                        </div> <!-- /.col -->
                        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                            <div class="location">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3018.5643871937855!2d-74.04982968529976!3d40.837530979318444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2f836b2b96f69%3A0xc543045120c8804b!2sRoom+%26+Board+New+York+Area+Delivery+Center!5e0!3m2!1sen!2sbd!4v1475739911754" allowfullscreen></iframe>
                            </div>
                        </div> <!-- /.col -->
                    </div> <!-- /.row -->
                </div> <!-- /.awesome-items -->
            </div> <!-- /.container -->
        </div> <!-- /.properties-things -->
        <!-- /AWESOME PROPERTIES AREA END -->

        <!-- FOOTER AREA START -->
        <x-footer />
        <!-- /FOOTER AREA END -->
    </div> <!-- /.wrapper -->
    <!-- ALL SECTION INCLOSED TO THE WRAPPER -->

@endsection
