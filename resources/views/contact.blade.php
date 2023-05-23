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
						<h2>Contact <span>Us</span></h2>
					</div>
					<h5>Modern, Elegent & Beautiful</h5>
				</div> <!-- /.page-heading -->
			</div> <!-- /.container -->
		</section> <!-- /.properties -->
		<!-- /PROPERTIES AREA END -->

		<!-- CONTACT US AREA START -->
		<section class="contact-with-us">
			<div class="container">
				<div class="section-heading">
					<h5>Learn more width</h5>
					<div class="main-title">
						<h2><span>Contact</span> Us</h2>
						<strong></strong> <!-- Use for heading after effect -->
					</div>
				</div> <!-- /.section-heading -->
				<!-- Contact Everything Here -->
				<div class="contact-everything">
					<div class="boundary">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-10 col-lg-8 col-xs-offset-0 col-sm-offset-0 col-md-offset-1 col-lg-offset-2">
								<!-- Contact Information Begin -->
								<div class="row">
									<div class="col-md-12">
										<div class="contact-info">
											<div class="contact-img">
												<img src="assets/images/contact/1.jpg" alt="CEO">
											</div> <!-- /.contact-img -->
											<div class="contact-content">
												<div class="title">
													<h3>Charis Powel (CEO)</h3>
												</div>
												<p>I like the geometric visual, bold typo, easy grid and the well balan ced whitespace. Gallery PhotoCreative Corporate, CommunityCompany Profile, Agency and other. I like the geometric visual,</p>
												<div class="mail-phone">
													<span>
														<i class="fa fa-envelope-o"></i>
														<a href="#">email@gmail.com</a>
													</span>
													<span>
														<i class="fa fa-phone"></i>
														<a href="#">0123456789</a>
													</span>
												</div>
											</div> <!-- /.contact-content -->
										</div> <!-- /.contact-info -->
									</div> <!-- /.col- -->
								</div> <!-- /.row -->
								<!-- Conatact Form Begin -->
								<div class="row">
									<div class="contact-form">
										<form method="post" action="#">
											<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
												<div class="form-group">
													<div class="input-img">
														<input type="text" name="Name" class="form-control" required placeholder="Name">
														<div class="input-icon">
															<i class="fa fa-user"></i>
														</div>
													</div>
												</div>
											</div> <!-- /.col- -->
											<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
												<div class="form-group">
													<div class="input-img">
														<input type="email" name="Email" id="email" class="form-control" placeholder="E-mail" required>
														<div class="input-icon">
															<i class="fa fa-envelope-o"></i>
														</div>
													</div>
												</div>
											</div> <!-- /.col- -->
											<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
												<div class="form-group">
													<div class="input-img">
														<input type="tel" name="Phone" class="form-control" placeholder="Phone">
														<div class="input-icon">
															<i class="fa fa-phone"></i>
														</div>
													</div>
												</div>
											</div> <!-- /.col- -->
											<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
												<div class="form-group">
													<div class="input-img">
														<input type="url" name="Website" class="form-control" placeholder="Website (optional)">
														<div class="input-icon">
															<i class="fa fa-gg"></i>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
												<div class="form-group">
													<div class="text-area">
														<textarea name="message" class="form-control" placeholder="Text"></textarea>
													</div>
												</div>
											</div> <!-- /.col- -->
											<div class="form-group col-xs-12 col-md-12 col-lg-12">
												<div class="form-btn">
													<button type="submit" name="submit" class="contact-form-btn gen-btn">Contact Now</button>
												</div>
											</div>
										</form>
									</div> <!-- /.contact-form -->
								</div> <!-- /.row -->
								<!-- Office Time Begin -->
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xs-offset-0 col-sm-offset-0 col-md-offset-1 col-lg-offset-1">
										<div class="office-time wow zoomIn">
											<div class="opening">
												<span>Opening</span> Time:
											</div>
											<div class="opening-time">
												<p>
													<span>Monday-Friday:</span>
													<span>10:00am - 08:00 pm</span>
												</p>
												<p>
													<span>Monday-Friday:</span>
													<span>10:00am - 08:00 pm</span>
												</p>
											</div>
										</div> <!-- /.office-time -->
									</div> <!-- /col- -->
								</div> <!-- /.row -->
							</div> <!-- /.col -->
			 			</div> <!-- /.row -->
			 		</div> <!-- /.boundary -->
			 		<div class="bottom-style"><strong></strong></div>
			 	</div> <!-- /.contact-everything -->
			</div> <!-- /.container -->
		</section> <!-- /.contact-with-us -->
		<!-- /CONTACT US AREA END -->

		<!--CONTACT MAP AREA -->
	    <div class="map-section">
	        <!--Map Container-->
	        <div class="map-outer">
	            <!--Map Canvas-->
	            <div class="map-canvas"
	                data-zoom="14"
	                data-lat="-37.817085"
	                data-lng="144.955631"
	                data-type="roadmap"
	                data-hue="#ffc400"
	                data-title="Envato"
	                data-content="21/D, Redwood City, CA 94872, USA<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
	            </div>
	        </div> <!-- /.map-outer -->
	    </div> <!-- /.map-section -->


		<!-- FOOTER AREA START -->
		<x-footer />
		<!-- /FOOTER AREA END -->
	</div> <!-- /.wrapper -->
	<!-- ALL SECTION INCLOSED TO THE WRAPPER -->


@endsection
