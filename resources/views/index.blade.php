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
        <x-header/>
		<!-- /HEADER AREA END -->

		<!-- MAIN SLIDER AND PROPERTY SEARCH AREA START-->
		<section id="main-slider" class="carousel main-slider">
			<div class="carousel slide">
				<div class="carousel-inner">

					<div class="item active item-bg-1">
						<div class="container">
							<div class="row">
								<div class="col-sm-12">
									<div class="slider-items">
										<div class="animation animated-item-4">
											<!-- Only Slider Top Style -->
											<div class="slider-head-style">
											</div>
										</div>
										<div class="mian-heading">
											<h2>Find Your <span class="typed-from-js"></span></h2>
											<div class="main-title">
												<h3>With Us</h3>
												<strong></strong> <!-- Use for heading after effect -->
											</div>
										</div>
									</div> <!-- /.slider-items -->
								</div>
							</div>
						</div>
					</div> <!--/.item-->
					<div class="item item-bg-2">
						<div class="container">
							<div class="row">
								<div class="col-sm-12">
									<div class="slider-items">
										<div class="animation animated-item-4">
											<!-- Only Slider Top Style -->
											<div class="slider-head-style">
											</div>
										</div>
										<div class="mian-heading">
											<h2>Find Your <span class="typed-from-js"></span></h2>
											<div class="main-title">
												<h3>With Us</h3>
												<strong></strong> <!-- Use for heading after effect -->
											</div>
										</div>
									</div> <!-- /.slider-items -->
								</div>
							</div>
						</div>
					</div> <!--/.item-->
					<div class="item item-bg-3">
						<div class="container">
							<div class="row">
								<div class="col-sm-12">
									<div class="slider-items">
										<div class="animation animated-item-4">
											<!-- Only Slider Top Style -->
											<div class="slider-head-style">
											</div>
										</div>
										<div class="mian-heading">
											<h2>Find Your <span class="typed-from-js"></span></h2>
											<div class="main-title">
												<h3>With Us</h3>
												<strong></strong> <!-- Use for heading after effect -->
											</div>
										</div>
									</div> <!-- /.slider-items -->
								</div>
							</div>
						</div>
					</div> <!--/.item-->

					<!-- Property Search Area Start -->
					<div class="property-search-area container">
						<div class="property-search-form ">
							<div class="advanced-search-sec row">
								<form method="get" action="#">
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
				</div> <!-- /.carousel-inner -->
			</div> <!--/.carousel-->
			<a class="prev hidden-xs" href="#main-slider" data-slide="prev">
				<i class="fa fa-long-arrow-left"></i>
			</a>
			<a class="next hidden-xs" href="#main-slider" data-slide="next">
				<i class="fa fa-long-arrow-right"></i>
			</a>
		</section> <!-- /.main-slider -->
		<!-- /MAIN SLIDER AND PROPERTY SEARCH AREA START -->

		<!-- RENEWAL AREA START -->
		<section class="renewal">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
						<div class="renewal-items">
							<div class="renewal-icon">
								<i class="flaticon-house"></i>
							</div>
							<div class="title">
								<h3><a href="#">Best renovation</a></h3>
							</div>
							<div class="content">
								<p>Claritas etiam processus dynamicus, qui sequitur mutationem.</p>
							</div>
							<div class="renewal-btn">
								<a href="#" class="fresh-btn">Read more</a>
							</div>
						</div> <!-- /.renewal-items -->
					</div> <!-- /.col- -->
					<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
						<div class="renewal-items">
							<div class="renewal-icon">
								<i class="flaticon-burj-al-arab-1"></i>
							</div>
							<div class="title">
								<h3><a href="#">Best renovation</a></h3>
							</div>
							<div class="content">
								<p>Claritas etiam processus dynamicus, qui sequitur mutationem.</p>
							</div>
							<div class="renewal-btn">
								<a href="#" class="fresh-btn">Read more</a>
							</div>
						</div> <!-- /.renewal-items -->
					</div> <!-- /.col- -->
					<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
						<div class="renewal-items">
							<div class="renewal-icon">
								<i class="flaticon-mansion"></i>
							</div>
							<div class="title">
								<h3><a href="#">Best renovation</a></h3>
							</div>
							<div class="content">
								<p>Claritas etiam processus dynamicus, qui sequitur mutationem.</p>
							</div>
							<div class="renewal-btn">
								<a href="#" class="fresh-btn">Read more</a>
							</div>
						</div> <!-- /.renewal-items -->
					</div> <!-- /.col- -->
					<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
						<div class="renewal-items">
							<div class="renewal-icon">
								<i class="flaticon-cityscape"></i>
							</div>
							<div class="title">
								<h3><a href="#">Best renovation</a></h3>
							</div>
							<div class="content">
								<p>Claritas etiam processus dynamicus, qui sequitur mutationem.</p>
							</div>
							<div class="renewal-btn">
								<a href="#" class="fresh-btn">Read more</a>
							</div>
						</div> <!-- /.renewal-items -->
					</div> <!-- /.col- -->
				</div> <!-- /.row -->
			</div> <!-- /.container -->
		</section> <!-- /.renewal -->
		<!-- /RENEWAL AREA END -->

		<!-- ROOM FEATURE AREA START -->
		<section class="room-feature">
			<div class="bg-img-over-effect"></div>
			<div class="container">
				<div class="section-heading if-bg-colorful">
					<h5>Recommended</h5>
					<div class="main-title">
						<h2><span>Our</span> Feature</h2>
						<strong></strong> <!-- Use for heading after effect -->
					</div>
				</div> <!-- /.section-heading -->
				<div class="room-feature-all">
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="feature-content wow fadeInLeft">
								<h3>Our Awesome Feature</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nstrud exercitation ullamco</p>
								<div class="room-feature-btn">
									<a href="#" class="dream-btn">Explore</a>
								</div>
							</div> <!-- /.feature-content -->
						</div> <!-- /.col- -->
						<!-- Room Slider Begin -->
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div id="room-slider" class="carousel slide room-slider wow fadeInRight" data-ride="carousel" data-interval="3000">
								<!-- Indicators -->
								<ol class="carousel-indicators">
									<li data-target="#room-slider" data-slide-to="0" class="active"></li>
									<li data-target="#room-slider" data-slide-to="1"></li>
									<li data-target="#room-slider" data-slide-to="2"></li>
								</ol>
								<!-- Wrapper for slides (Vertical) -->
								<div class="carousel-inner vertical" role="listbox">
									<div class="item active item-bg-1">
										<div class="bg-img-over-effect"></div>
										<div class="slider-in-room">
											<div class="content">
												<h3>Deluxe Suite</h3>
												<p>Claritas est etiam processus dynamic us, qui sequitur mutationem.</p>
											</div>
											<div class="slider-meta">
												<div class="info">
													<span class="building">
														<img src="{{ asset('assets/images/icons/building.png') }}" alt="icon">
														<a href="#">60m</a>
													</span>
													<span class="technology">
														<img src="assets/images/icons/technology.png" alt="icon">
														<a href="#">4</a>
													</span>
													<span class="bath">
														<img src="assets/images/icons/bath.png" alt="icon">
														<a href="#">2</a>
													</span>
												</div>
												<div class="price">
													<a href="#" class="price-btn">$2000</a>
												</div>
											</div> <!-- /.slider-meta -->
										</div> <!-- /.slider-in-room -->
									</div> <!-- /.item -->
									<div class="item item-bg-2">
										<div class="bg-img-over-effect"></div>
										<div class="slider-in-room">
											<div class="content">
												<h3>Deluxe Suite</h3>
												<p>Claritas est etiam processus dynamic us, qui sequitur mutationem.</p>
											</div>
											<div class="slider-meta">
												<div class="info">
													<span class="building">
														<img src="assets/images/icons/building.png" alt="Iocn">
														<a href="#">60m</a>
													</span>
													<span class="technology">
														<img src="assets/images/icons/technology.png" alt="Iocn">
														<a href="#">4</a>
													</span>
													<span class="bath">
														<img src="assets/images/icons/bath.png" alt="Iocn">
														<a href="#">2</a>
													</span>
												</div>
												<div class="price">
													<a href="#" class="price-btn">$2000</a>
												</div>
											</div> <!-- /.slider-meta -->
										</div> <!-- /.slider-in-room -->
									</div> <!-- /.item -->
									<div class="item item-bg-3">
										<div class="slider-in-room">
										<div class="bg-img-over-effect"></div>
											<div class="content">
												<h3>Deluxe Suite</h3>
												<p>Claritas est etiam processus dynamic us, qui sequitur mutationem.</p>
											</div>
											<div class="slider-meta">
												<div class="info">
													<span class="building">
														<img src="assets/images/icons/building.png" alt="Iocn">
														<a href="#">60m</a>
													</span>
													<span class="technology">
														<img src="assets/images/icons/technology.png" alt="Iocn">
														<a href="#">4</a>
													</span>
													<span class="bath">
														<img src="assets/images/icons/bath.png" alt="Iocn">
														<a href="#">2</a>
													</span>
												</div>
												<div class="price">
													<a href="#" class="price-btn">$2000</a>
												</div>
											</div> <!-- /.slider-meta -->
										</div> <!-- /.slider-in-room -->
									</div> <!-- /.item -->
								</div> <!-- /.carousel-inner -->
							</div> <!-- /#room-slider -->
						</div> <!-- /.col- -->
					</div> <!-- /.row -->
				</div> <!-- /.room-feature-all -->
			</div> <!-- /.container -->
		</section> <!-- /.room-feature -->
		<!-- /ROOM FEATURE AREA END -->

		<!-- OUR TEAM AREA START -->
		<section class="our-team">
			<div class="container">
				<div class="section-heading">
					<h5>Meet with</h5>
					<div class="main-title">
						<h2><span>Our</span> Team</h2>
						<strong></strong> <!-- Use for heading after effect -->
					</div>
				</div> <!-- /.section-heading -->
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
						<div class="team-members">
							<img src="assets/images/team/1.jpg" alt="Team Member">
							<div class="member-name">
								<h3>Victoria Moore</h3>
							</div><!-- /.member-name -->
							<div class="member-hover">
								<div class="member-info">
									<h3>Victoria Moore</h3>
									<a href="#">Manager</a>
									<div class="member-social">
										<ul>
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-instagram"></i></a></li>
										</ul>
									</div>
								</div>
							</div><!-- /.member-hover -->
						</div> <!-- /.team-members -->
					</div> <!-- /.col -->
					<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
						<div class="team-members">
							<img src="assets/images/team/2.jpg" alt="Team Member">
							<div class="member-name">
								<h3>Paul Kovalik</h3>
							</div><!-- /.member-name -->
							<div class="member-hover">
								<div class="member-info">
									<h3>Paul Kovalik</h3>
									<a href="#">Web Designer</a>
									<div class="member-social">
										<ul>
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-instagram"></i></a></li>
										</ul>
									</div>
								</div>
							</div><!-- /.member-hover -->
						</div> <!-- /.team-members -->
					</div> <!-- /.col -->
					<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
						<div class="team-members">
							<img src="assets/images/team/3.jpg" alt="Team Member">
							<div class="member-name">
								<h3>David Kowalsky</h3>
							</div><!-- /.member-name -->
							<div class="member-hover">
								<div class="member-info">
									<h3>David Kowalsky</h3>
									<a href="#">Web Developer</a>
									<div class="member-social">
										<ul>
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-instagram"></i></a></li>
										</ul>
									</div>
								</div>
							</div><!-- /.member-hover -->
						</div> <!-- /.team-members -->
					</div> <!-- /.col -->
					<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
						<div class="team-members">
							<img src="{{ asset('assets/images/team/4.jpg') }}" alt="Team Member">
							<div class="member-name">
								<h3>Mr. John Doe</h3>
							</div><!-- /.member-name -->
							<div class="member-hover">
								<div class="member-info">
									<h3>Mr. John Doe</h3>
									<a href="#">Graphics Designer</a>
									<div class="member-social">
										<ul>
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-instagram"></i></a></li>
										</ul>
									</div>
								</div>
							</div><!-- /.member-hover -->
						</div> <!-- /.team-members -->
					</div> <!-- /.col -->
				</div><!-- row -->
			</div><!-- container -->
		</section> <!-- /.our-team -->
		<!-- /OUR TEAM AREA END -->

		<!-- TESTIMONIAL AREA START -->
		<section class="testimonial">
			<div class="bg-img-over-effect"></div>
			<div class="container">
				<div class="section-heading if-bg-colorful">
					<h5>Look at Our</h5>
					<div class="main-title">
						<h2><span>Client</span> Testimonial</h2>
						<strong></strong> <!-- Use for heading after effect -->
					</div>
				</div> <!-- /.section-heading -->
				<div class="row">
					<div id="testimonial-carousel" class="carousel slide" data-interval="3000" data-ride="carousel">
						<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xs-offset-0 col-sm-offset-0 col-md-offset-2 col-lg-offset-2">
							<div class="carousel-inner">
								<!-- Carousel items -->
								<div class="item active">
									<div class="client-opition">
										<div class="row">
											<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
												<div class="client-thumb">
													<img src="assets/images/team/4.jpg" alt="Client">
												</div>
											</div>
											<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
												<div class="client-focus">
													<div class="client-mind">
														<h4>Dream house is the Best Choice</h4>
													</div>
													<div class="designation">
														<h5>Tony Stark, Fantasy Inc</h5>
													</div>
													<div class="feedback">
														<img src="assets/images/icons/5star.png" alt="feedback">
													</div>
												</div> <!-- /.client-focus -->
											</div>
										</div> <!-- /.row -->
									</div> <!-- /.client-opition -->
									<div class="client-said">
										<p>I like the geometric visual, bold typo, easy grid and the well balanced whitespace. Gallery PhotoCreative Corporate, CommunityCompany Profile, Agency and other.</p>
										<div class="signature">
											<img src="assets/images/client/signature.png" alt="Signature">
										</div>
									</div> <!-- /.client-said -->
								</div> <!-- /.item -->
								<div class="item">
									<div class="client-opition">
										<div class="row">
											<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
												<div class="client-thumb">
													<img src="assets/images/team/3.jpg" alt="Client">
												</div>
											</div>
											<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
												<div class="client-focus">
													<div class="client-mind">
														<h4>Dream house is the Best Choice</h4>
													</div>
													<div class="designation">
														<h5>Tony Stark, Fantasy Inc</h5>
													</div>
													<div class="feedback">
														<img src="assets/images/icons/5star.png" alt="feedback">
													</div>
												</div> <!-- /.client-focus -->
											</div>
										</div> <!-- /.row -->
									</div> <!-- /.client-opition -->
									<div class="client-said">
										<p>I like the geometric visual, bold typo, easy grid and the well balanced whitespace. Gallery PhotoCreative Corporate, CommunityCompany Profile, Agency and other.</p>
										<div class="signature">
											<img src="assets/images/client/signature.png" alt="Signature">
										</div>
									</div> <!-- /.client-said -->
								</div> <!-- /.item -->
								<div class="item">
									<div class="client-opition">
										<div class="row">
											<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
												<div class="client-thumb">
													<img src="assets/images/team/2.jpg" alt="Client">
												</div>
											</div>
											<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
												<div class="client-focus">
													<div class="client-mind">
														<h4>Dream house is the Best Choice</h4>
													</div>
													<div class="designation">
														<h5>Tony Stark, Fantasy Inc</h5>
													</div>
													<div class="feedback">
														<img src="assets/images/icons/5star.png" alt="feedback">
													</div>
												</div> <!-- /.client-focus -->
											</div>
										</div> <!-- /.row -->
									</div> <!-- /.client-opition -->
									<div class="client-said">
										<p>I like the geometric visual, bold typo, easy grid and the well balanced whitespace. Gallery PhotoCreative Corporate, CommunityCompany Profile, Agency and other.</p>
										<div class="signature">
											<img src="assets/images/client/signature.png" alt="Signature">
										</div>
									</div> <!-- /.client-said -->
								</div> <!-- /.item -->
							</div> <!-- /.carousel-inner -->
						</div> <!-- /.col- -->
						<!-- Carousel nav -->
						<a class="carousel-control left" href="#testimonial-carousel" data-slide="prev">
							<i class="fa fa-long-arrow-left"></i>
						</a>
						<a class="carousel-control right" href="#testimonial-carousel" data-slide="next">
							<i class="fa fa-long-arrow-right"></i>
						</a>
					</div> <!-- /#testimonial-carousel -->
				</div> <!-- /.row -->
			</div> <!-- /.container -->
		</section> <!-- /.testimonial-->
		<!-- /TESTIMONIAL AREA END -->

		<!-- SHOWCASE FEATURE AREA START -->
		<section class="showcase-feature">
			<div class="container">
				<div class="section-heading wow zoomIn">
					<h5>Look At</h5>
					<div class="main-title">
						<h2><span>Our</span> Showcase</h2>
						<strong></strong> <!-- Use for heading after effect -->
					</div>
				</div> <!-- /.section-heading -->
				<div id="showcase-main-thumb-slider-section" class="wow zoomIn">
					<!-- Showcase Slider Main -->
					<div id="showcase-main-area-slider">
						<div class="items">
							<div class="img-pot" data-bg-img="assets/images/slider/showcase/6.jpg"></div>
						</div>
						<div class="items">
							<div class="img-pot" data-bg-img="assets/images/slider/showcase/4.jpg"></div>
						</div>
						<div class="items">
							<div class="img-pot" data-bg-img="assets/images/slider/showcase/5.jpg"></div>
						</div>
						<div class="items">
							<div class="img-pot" data-bg-img="assets/images/slider/showcase/3.jpg"></div>
						</div>
						<div class="items">
							<div class="img-pot" data-bg-img="assets/images/slider/showcase/2.jpg"></div>
						</div>
						<div class="items">
							<div class="img-pot" data-bg-img="assets/images/slider/showcase/6.jpg"></div>
						</div>
					</div> <!-- /#showcase-main-area-slider -->
					<!-- Showcase Slider Thumbnail -->
					<div id="showcase-thumb-slider">
						<div class="items">
							<div class="img-pot" data-bg-img="assets/images/slider/showcase/6.jpg"></div>
						</div>
						<div class="items">
							<div class="img-pot" data-bg-img="assets/images/slider/showcase/5.jpg"></div>
						</div>
						<div class="items">
							<div class="img-pot" data-bg-img="assets/images/slider/showcase/4.jpg"></div>
						</div>
						<div class="items">
							<div class="img-pot" data-bg-img="assets/images/slider/showcase/3.jpg"></div>
						</div>
						<div class="items">
							<div class="img-pot" data-bg-img="assets/images/slider/showcase/2.jpg"></div>
						</div>
						<div class="items">
							<div class="img-pot" data-bg-img="assets/images/slider/showcase/6.jpg"></div>
						</div>
					</div> <!-- /#showcase-thumb-slider -->
				</div> <!-- /#showcase-main-thumb-slider-section -->
				<div class="showcase-btn">
					<a href="#" class="dream-btn">View Gallery</a>
				</div>
			</div> <!-- /.container -->
		</section> <!-- /.showcase-feature -->
		<!-- /SHOWCASE FEATURE AREA END -->

		<!-- FEATURES AREA START -->
		<section class="features">
			<div class="bg-img-over-effect"></div>
			<div class="container">
				<div class="features-items">
					<ul>
						<li class="wow fadeInLeft">
							<a href="#"><i class="flaticon-armchair"></i></a>
							<h5>Good Furniture</h5>
						</li>
						<li class="wow zoomIn">
							<a href="#"><i class="flaticon-shield"></i></a>
							<h5>Safety Area</h5>
						</li>
						<li class="wow zoomIn">
							<a href="#"><i class="flaticon-support"></i></a>
							<h5>24 Hours Support</h5>
						</li>
						<li class="wow fadeInRight">
							<a href="#"><i class="flaticon-command"></i></a>
							<h5>Dood Neighbour</h5>
						</li>
					</ul>
				</div> <!-- /.features-items -->
			</div> <!-- /.container -->
		</section> <!-- /.features -->
		<!-- /FEATURES AREA END -->

		<!-- BLOG AREA START -->
		<section class="blog">
			<div class="container">
				<div class="section-heading">
					<h5>Some of</h5>
					<div class="main-title">
						<h2><span>Our</span> Blog</h2>
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
										<span class="user">
											<i class="flaticon-people-1"></i>
											<a href="#">Mr Dan</a>
										</span>
										<span class="date">
											<i class="flaticon-calendar-weekly"></i>
											<a href="#">Feb 19, 2016</a>
										</span>
										<span class="tag">
											<i class="flaticon-shop"></i>
											<a href="#">Real State</a>
										</span>
									</div> <!-- /.post-metadata -->
									<div class="post-content border-top">
										<div class="post-title">
											<h5><a href="blog-single.html">Best Renovation</a></h5>
										</div>
										<div class="post-entry">
											<p>Claritas est etiam processus dynamicus, qui sequitur mutationem..</p>
										</div>
										<div class="post-about border-top">
											<a href="single.html" class="read-more">Read More</a>
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
										<span class="user">
											<i class="flaticon-people-1"></i>
											<a href="#">Mr Dan</a>
										</span>
										<span class="date">
											<i class="flaticon-calendar-weekly"></i>
											<a href="#">Feb 19, 2016</a>
										</span>
										<span class="tag">
											<i class="flaticon-shop"></i>
											<a href="#">Real State</a>
										</span>
									</div> <!-- /.post-metadata -->
									<div class="post-content border-top">
										<div class="post-title">
											<h5><a href="blog-single.html">Best Renovation</a></h5>
										</div>
										<div class="post-entry">
											<p>Claritas est etiam processus dynamicus, qui sequitur mutationem..</p>
										</div>
										<div class="post-about border-top">
											<a href="single.html" class="read-more">Read More</a>
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
										<span class="user">
											<i class="flaticon-people-1"></i>
											<a href="#">Mr Dan</a>
										</span>
										<span class="date">
											<i class="flaticon-calendar-weekly"></i>
											<a href="#">Feb 19, 2016</a>
										</span>
										<span class="tag">
											<i class="flaticon-shop"></i>
											<a href="#">Real State</a>
										</span>
									</div> <!-- /.post-metadata -->
									<div class="post-content border-top">
										<div class="post-title">
											<h5><a href="blog-single.html">Best Renovation</a></h5>
										</div>
										<div class="post-entry">
											<p>Claritas est etiam processus dynamicus, qui sequitur mutationem..</p>
										</div>
										<div class="post-about border-top">
											<a href="single.html" class="read-more">Read More</a>
										</div>
									</div> <!-- /.post-content -->
								</div> <!-- /.post-inner -->
							</article> <!-- /.post-item -->
						</div> <!-- /.col- -->
					</div> <!-- /.blog-list -->
				</div> <!-- /.row -->
			</div> <!-- /.container -->
		</section> <!-- /.blog -->
		<!-- /BLOG AREA END -->


		<!-- FOOTER AREA START -->
		<x-footer />
		<!-- /FOOTER AREA END -->
	</div> <!-- /.wrapper -->
	<!-- ALL SECTION INCLOSED TO THE WRAPPER -->
@endsection
