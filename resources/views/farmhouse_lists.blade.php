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
                    <h2>FarhHouse Booking</h2>
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
        <!-- Property Search Area Start -->
        <div class="property-search-area container">
            <div class="property-search-form ">
                <div class="advanced-search-sec row">
                    <form method="get">
                        <div class="col-xs-12 col-sm-6 col-md-me-15 col-lg-me-17 search-field">
                            <label for="property-location">Location</label>
                            <select id="property-location" name="Cities">
                                <option value="0">All Cities</option>
                                <option value="1">Chicago</option>
                                <option value="2">Phoenix</option>
                                <option value="3">San Diego</option>
                                <option value="4">Austin</option>
                                <option value="5">Detroit</option>
                            </select>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-me-15 col-lg-me-17 search-field">
                            <label for="proeprty-type">Property Type</label>
                            <select id="proeprty-type" name="Property-type">
                                <option value="0">All Types</option>
                                <option value="1">Apartment</option>
                                <option value="2">House</option>
                                <option value="3">Villa</option>
                                <option value="4">Office</option>
                                <option value="5">Condo</option>
                            </select>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-me-13 col-lg-me-13 search-field">
                            <label for="property-room">Total Room</label>
                            <select id="property-room" name="Total-room">
                                <option value="0">Choose</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">+5</option>
                            </select>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-me-13 col-lg-me-13 search-field">
                            <label for="property-bathroom">Bathroom</label>
                            <select id="property-bathroom" name="Bathrooms">
                                <option value="0">Choose</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">+5</option>
                            </select>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-me-29 col-lg-me-25 search-field">
                            <div class="price-range">
                                <div class="property-price">
                                    <label>Price Range</label>
                                    <div class="price-range">
                                        <div class="price-input-count">
                                            <input type="text" name="price min" id="price-min" />
                                        </div>
                                        <span class="price-money">-</span>
                                        <div class="price-input-count">
                                            <input type="text" name="price max" id="price-max" />
                                        </div>
                                    </div>
                                    <div class="price-range-select">
                                        <div class="priceSlider"></div>
                                    </div>
                                </div> <!-- /.property-price -->
                              </div> <!-- /.price-range -->
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-me-15 col-lg-me-15 search-field">
                            <div class="submit">
                                   <button type="submit" value="Search" class="dream-btn">Search</button>
                            </div>
                        </div>
                    </form>
                </div> <!-- /.advanced-search-sec -->
                <!-- Show or Hide Property -->
                <a class="more-options close-element"></a>
            </div>
        </div> <!-- /.property-search-area -->
        <!-- Property Search Area End -->
    </section> <!-- /.properties -->
    <!-- /PROPERTIES AREA END -->

    <!-- PROPERTIES BLOG AREA START -->
    <section class="propertise-blog">
        <div class="container">
            <div class="section-heading">
                <h5>Check Out</h5>
                <div class="main-title">
                    <h2><span>Our</span> Properties</h2>
                    <strong></strong> <!-- Use for heading after effect -->
                </div>
            </div> <!-- /.section-heading -->
            <div class="row">
                <div class="blog-list">
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <!-- post begin -->
                        <article class="post-item border-right shadow-bottom-items">
                            <div class="post-media">
                                <img src="assets/images/slider/showcase/6.jpg" alt="Featured">
                            </div>
                            <div class="post-inner border-around">
                                <div class="post-metadata">
                                    <span class="total-place">
                                        <i class="flaticon-ten-commandment"></i>
                                        <a href="#">13K Sq Ft</a>
                                    </span>
                                    <span class="bedroom">
                                        <i class="flaticon-bed"></i>
                                        <a href="#">4 bedrooms</a>
                                    </span>
                                    <span class="bathroom">
                                        <i class="flaticon-bathtub"></i>
                                        <a href="#">3 Bathrooms</a>
                                    </span>
                                </div> <!-- /.post-metadata -->
                                <div class="post-content border-top">
                                    <div class="post-title">
                                        <h5><a href="{{ route('farmhouse_details') }}">Best Renovation</a></h5>
                                    </div>
                                    <div class="post-entry">
                                        <p>Claritas est etiam processus dynamicus, qui sequitur mutationem..</p>
                                    </div>
                                    <div class="post-about border-top">
                                        <span>
                                            <i class="fa fa-map-marker"></i>
                                            530 B.I.D.C Road, Khulna
                                        </span>
                                        <span>
                                            <strong>$1500</strong>/month
                                        </span>
                                    </div>
                                </div> <!-- /.post-content -->
                            </div> <!-- /.post-inner -->
                        </article> <!-- /.post-item -->
                    </div> <!-- /.col- -->
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <!-- post begin -->
                        <article class="post-item border-right shadow-bottom-items">
                            <div class="post-media">
                                <img src="assets/images/slider/showcase/3.jpg" alt="Featured">
                            </div>
                            <div class="post-inner border-around">
                                <div class="post-metadata">
                                    <span class="total-place">
                                        <i class="flaticon-ten-commandment"></i>
                                        <a href="#">13K Sq Ft</a>
                                    </span>
                                    <span class="bedroom">
                                        <i class="flaticon-bed"></i>
                                        <a href="#">4 bedrooms</a>
                                    </span>
                                    <span class="bathroom">
                                        <i class="flaticon-bathtub"></i>
                                        <a href="#">3 Bathrooms</a>
                                    </span>
                                </div> <!-- /.post-metadata -->
                                <div class="post-content border-top">
                                    <div class="post-title">
                                        <h5><a href="{{ route('farmhouse_details') }}">Best Renovation</a></h5>
                                    </div>
                                    <div class="post-entry">
                                        <p>Claritas est etiam processus dynamicus, qui sequitur mutationem..</p>
                                    </div>
                                    <div class="post-about border-top">
                                        <span>
                                            <i class="fa fa-map-marker"></i>
                                            530 B.I.D.C Road, Khulna
                                        </span>
                                        <span>
                                            <strong>$1500</strong>/month
                                        </span>
                                    </div>
                                </div> <!-- /.post-content -->
                            </div> <!-- /.post-inner -->
                        </article> <!-- /.post-item -->
                    </div> <!-- /.col- -->
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <!-- post begin -->
                        <article class="post-item border-right shadow-bottom-items">
                            <div class="post-media">
                                <img src="assets/images/slider/showcase/2.jpg" alt="Featured">
                            </div>
                            <div class="post-inner border-around">
                                <div class="post-metadata">
                                    <span class="total-place">
                                        <i class="flaticon-ten-commandment"></i>
                                        <a href="#">13K Sq Ft</a>
                                    </span>
                                    <span class="bedroom">
                                        <i class="flaticon-bed"></i>
                                        <a href="#">4 bedrooms</a>
                                    </span>
                                    <span class="bathroom">
                                        <i class="flaticon-bathtub"></i>
                                        <a href="#">3 Bathrooms</a>
                                    </span>
                                </div> <!-- /.post-metadata -->
                                <div class="post-content border-top">
                                    <div class="post-title">
                                        <h5><a href="{{ route('farmhouse_details') }}">Best Renovation</a></h5>
                                    </div>
                                    <div class="post-entry">
                                        <p>Claritas est etiam processus dynamicus, qui sequitur mutationem..</p>
                                    </div>
                                    <div class="post-about border-top">
                                        <span>
                                            <i class="fa fa-map-marker"></i>
                                            530 B.I.D.C Road, Khulna
                                        </span>
                                        <span>
                                            <strong>$1500</strong>/month
                                        </span>
                                    </div>
                                </div> <!-- /.post-content -->
                            </div> <!-- /.post-inner -->
                        </article> <!-- /.post-item -->
                    </div> <!-- /.col- -->
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <!-- post begin -->
                        <article class="post-item border-right shadow-bottom-items">
                            <div class="post-media">
                                <img src="assets/images/slider/showcase/4.jpg" alt="Featured">
                            </div>
                            <div class="post-inner border-around">
                                <div class="post-metadata">
                                    <span class="total-place">
                                        <i class="flaticon-ten-commandment"></i>
                                        <a href="#">13K Sq Ft</a>
                                    </span>
                                    <span class="bedroom">
                                        <i class="flaticon-bed"></i>
                                        <a href="#">4 bedrooms</a>
                                    </span>
                                    <span class="bathroom">
                                        <i class="flaticon-bathtub"></i>
                                        <a href="#">3 Bathrooms</a>
                                    </span>
                                </div> <!-- /.post-metadata -->
                                <div class="post-content border-top">
                                    <div class="post-title">
                                        <h5><a href="{{ route('farmhouse_details') }}">Best Renovation</a></h5>
                                    </div>
                                    <div class="post-entry">
                                        <p>Claritas est etiam processus dynamicus, qui sequitur mutationem..</p>
                                    </div>
                                    <div class="post-about border-top">
                                        <span>
                                            <i class="fa fa-map-marker"></i>
                                            530 B.I.D.C Road, Khulna
                                        </span>
                                        <span>
                                            <strong>$1500</strong>/month
                                        </span>
                                    </div>
                                </div> <!-- /.post-content -->
                            </div> <!-- /.post-inner -->
                        </article> <!-- /.post-item -->
                    </div> <!-- /.col- -->
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <!-- post begin -->
                        <article class="post-item border-right shadow-bottom-items">
                            <div class="post-media">
                                <img src="assets/images/slider/showcase/5.jpg" alt="Featured">
                            </div>
                            <div class="post-inner border-around">
                                <div class="post-metadata">
                                    <span class="total-place">
                                        <i class="flaticon-ten-commandment"></i>
                                        <a href="#">13K Sq Ft</a>
                                    </span>
                                    <span class="bedroom">
                                        <i class="flaticon-bed"></i>
                                        <a href="#">4 bedrooms</a>
                                    </span>
                                    <span class="bathroom">
                                        <i class="flaticon-bathtub"></i>
                                        <a href="#">3 Bathrooms</a>
                                    </span>
                                </div> <!-- /.post-metadata -->
                                <div class="post-content border-top">
                                    <div class="post-title">
                                        <h5><a href="{{ route('farmhouse_details') }}">Best Renovation</a></h5>
                                    </div>
                                    <div class="post-entry">
                                        <p>Claritas est etiam processus dynamicus, qui sequitur mutationem..</p>
                                    </div>
                                    <div class="post-about border-top">
                                        <span>
                                            <i class="fa fa-map-marker"></i>
                                            530 B.I.D.C Road, Khulna
                                        </span>
                                        <span>
                                            <strong>$1500</strong>/month
                                        </span>
                                    </div>
                                </div> <!-- /.post-content -->
                            </div> <!-- /.post-inner -->
                        </article> <!-- /.post-item -->
                    </div> <!-- /.col- -->
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <!-- post begin -->
                        <article class="post-item border-right shadow-bottom-items">
                            <div class="post-media">
                                <img src="assets/images/slider/showcase/6.jpg" alt="Featured">
                            </div>
                            <div class="post-inner border-around">
                                <div class="post-metadata">
                                    <span class="total-place">
                                        <i class="flaticon-ten-commandment"></i>
                                        <a href="#">13K Sq Ft</a>
                                    </span>
                                    <span class="bedroom">
                                        <i class="flaticon-bed"></i>
                                        <a href="#">4 bedrooms</a>
                                    </span>
                                    <span class="bathroom">
                                        <i class="flaticon-bathtub"></i>
                                        <a href="#">3 Bathrooms</a>
                                    </span>
                                </div> <!-- /.post-metadata -->
                                <div class="post-content border-top">
                                    <div class="post-title">
                                        <h5><a href="{{ route('farmhouse_details') }}">Best Renovation</a></h5>
                                    </div>
                                    <div class="post-entry">
                                        <p>Claritas est etiam processus dynamicus, qui sequitur mutationem..</p>
                                    </div>
                                    <div class="post-about border-top">
                                        <span>
                                            <i class="fa fa-map-marker"></i>
                                            530 B.I.D.C Road, Khulna
                                        </span>
                                        <span>
                                            <strong>$1500</strong>/month
                                        </span>
                                    </div>
                                </div> <!-- /.post-content -->
                            </div> <!-- /.post-inner -->
                        </article> <!-- /.post-item -->
                    </div> <!-- /.col- -->
                </div> <!-- /.blog-list -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </section> <!-- /.propertise-blog -->
    <!-- /PROPERTIES BLOG AREA END -->

    <!-- PAGINATION AREA START -->
    <div class="pagination-area">
        <div class="container">
            <nav class="navigation pagination">
                <div class="nav-links">
                    <a class="prev page-numbers" href="#">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="page-numbers" href="#">1</a>
                    <span class="page-numbers current">2</span>
                    <a class="page-numbers" href="#">3</a>
                    <a class="page-numbers" href="#">4</a>
                    <a class="next page-numbers" href="#">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </nav>
        </div> <!-- /.container -->
    </div> <!-- /.pagination-area -->
    <!-- /PAGINATION AREA END -->

    <!-- FOOTER AREA START -->
    <x-footer />
    <!-- /FOOTER AREA END -->
</div> <!-- /.wrapper -->
<!-- ALL SECTION INCLOSED TO THE WRAPPER -->


@endsection
