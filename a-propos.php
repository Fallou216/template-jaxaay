<!DOCTYPE html>
<html lang="fr">
<head>
	<?php include ('layouts/head.php'); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="style.css">

</head>
<body>
<div id="pre-loader">
    <div id="loader-logo"></div><!--loader-logo-->
    <div id="loader-circle"></div><!-- loader-circle -->
    <div class="loader-section section-left"></div><!-- loader-section -->
    <div class="loader-section section-right"></div><!-- loader-section -->
</div><!-- pre-loader -->
<header class="header">
	<div class="topbar">
		<div class="topbar-inner">
			<div class="topbar-left">
				<div class="topbar-socials">
					<a href="#"><i class="fa-brands fa-twitter"></i></a>
					<a href="#"><i class="fa-brands fa-facebook"></i></a>
					<a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
					<a href="#"><i class="fa-brands fa-instagram"></i></a>
				</div><!--topbar-socials-->
				<div class="topbar-info">
					<ul>
						<li>
							<div class="topbar-icon">
								<i class="fa-solid fa-envelope"></i>
							</div><!-- topbar-icon -->
							<div class="topbar-text">
								<a href="mailto:needhelp@company.com">needhelp@company.com</a>
							</div><!-- topbar-text -->
						</li><!-- li -->
						<li>
							<div class="topbar-icon">
								<i class="fa-solid fa-clock"></i>
							</div><!-- topbar-icon -->
							<div class="topbar-text">
								<span>Open Hours: Mon - Fri 8.00 am - 6.00 pm</span>
							</div><!-- topbar-text -->
						</li><!-- li -->
					</ul><!-- ul -->
				</div><!--topbar-info-->
			</div><!-- topbar-left -->
			<div class="topbar-right">
				<ul>
					<li><a href="department-details.html">Council</a></li>
					<li><a href="departments.html">Government</a></li>
					<li><a href="contact.html">Complaints</a></li>
				</ul><!-- ul -->
			</div><!--topbar-right-->
		</div><!-- topbar-inner -->
	</div><!--topbar-->
	<div class="main-menu sticky-header">
		<div class="main-menu-inner">
			<div class="main-menu-left">
				<div class="main-menu-logo">
					<a href="index.html"><img src="assets/image/logo.png" alt="img-145" width="140"></a>
				</div><!--main-menu-logo-->
				<div class="navigation">
					<ul class="main-menu-list list-unstyled">
						<li class="has-dropdown">
							<a href="#">Home</a>
							<ul class="list-unstyled">
								<li><a href="index.html">Home 1</a></li>
								<li><a href="index-2.html">Home 2</a></li>
							</ul><!-- list-unstyled -->
						</li><!--has-dropdown-->
						<li class="has-dropdown">
							<a href="#">Pages</a>
							<ul class="list-unstyled">
								<li><a href="about.html">About</a></li>
								<li><a href="team.html">Team</a>
									<ul class="list-unstyled">
										<li><a href="team.html">Team</a></li>
										<li><a href="team-details.html">Team Details</a></li>
									</ul><!-- list-unstyled -->
								</li>
								<li><a href="portfolio.html">Portfolio</a>
									<ul class="list-unstyled">
										<li><a href="portfolio.html">Portfolio</a></li>
										<li><a href="portfolio-details.html">Portfolio Details</a></li>
										<li><a href="portfolio-details-2.html">Portfolio Details 2</a></li>
									</ul><!-- list-unstyled -->
								</li>
								<li><a href="causes.html">Causes</a>
									<ul class="list-unstyled">
										<li><a href="causes.html">Causes</a></li>
										<li><a href="cause-details.html">Cause Details</a></li>
										<li><a href="donation.html">Donate</a></li>	
									</ul><!-- list-unstyled -->
								</li>
								<li><a href="documentations.html">Documentation</a>
									<ul class="list-unstyled">
										<li><a href="documentations.html">Documentation</a></li>
										<li><a href="documentation-details.html">Documentation Details</a></li>	
									</ul><!-- list-unstyled -->
								</li>
								<li><a href="history.html">History</a></li>
								<li><a href="faq.html">Faq</a></li>
								<li><a href="404-page.html">404 Page</a></li>
							</ul><!-- list-unstyled -->
						</li><!--has-dropdown-->
						<li class="active has-dropdown">
							<a href="#">Services</a>
							<ul class="list-unstyled">
								<li><a href="services.html">Services</a></li>
								<li><a href="service-details.html">Service Details</a></li>
							</ul><!-- list-unstyled -->
						</li><!--has-dropdown-->
						<li class="has-dropdown">
							<a href="#">Departments</a>
							<ul class="list-unstyled">
								<li><a href="departments.html">Departments</a></li>
								<li><a href="department-details.html">Department Details</a></li>
							</ul><!-- list-unstyled -->
						</li><!--has-dropdown-->
						<li class="has-dropdown">
							<a href="#">Events</a>
							<ul class="list-unstyled">
								<li><a href="events.html">Events</a></li>
								<li><a href="event-details.html">Event Details</a></li>
							</ul><!-- list-unstyled -->
						</li><!--has-dropdown-->
						<li class="has-dropdown">
							<a href="#">News</a>
							<ul class="list-unstyled">
								<li><a href="news.html">News</a></li>
								<li><a href="news-details.html">News Details</a></li>
							</ul><!-- list-unstyled -->
						</li><!--has-dropdown-->
						<li><a href="contact.html">Contact</a>
						</li><!-- li -->
					</ul><!-- main-menu-list -->
				</div><!--navigation-->
			</div><!--main-menu-left-->
			<div class="main-menu-right">
				<div class="mobile-menu-button mobile-nav-toggler">
					<span></span>
					<span></span>
					<span></span>
				</div><!-- mobile-menu-button -->
				<div class="search-box">
					<a href="#" class="search-toggler">
						<i class="flaticon-search-interface-symbol"></i>
					</a><!-- search-toggler -->
				</div><!-- search-box -->
				<div class="main-menu-right-button">
					<a href="contact.html" class="btn btn-primary">Report Issue</a>
				</div><!-- main-menu-right-button -->
			</div><!--main-menu-right-->
		</div><!--main-menu-inner-->
	</div><!--main-menu-->
</header><!--header-->
<div class="page-wrapper">
	<section class="page-banner">
		<div class="container">
			<div class="page-breadcrumbs">
				<ul class="list-unstyled">
					<li><a href="index.html">Home</a></li>
					<li>About</li>
				</ul><!-- list-unstyled -->
			</div><!-- page-breadcrumbs -->
			<div class="page-banner-title">
				<h3>About</h3>
			</div><!-- page-banner-title -->
		</div><!-- container -->			
	</section><!--page-banner-->
	<section class="about-one-section">
		<div class="container">
			<div class="row row-gutter-y-40">
				<div class="col-lg-12 col-xl-6">
					<div class="about-one-inner">
						<div class="section-tagline">
							Our introductions
						</div><!-- section-tagline -->
						<h2 class="section-title">Welcome to Mexican City Municipal Council</h2>
							<p>Aliquam viverra arcu. Donec aliquet blandit enim feugiat. Suspendisse id quam sed eros tincidunt luctus sit amet eu nibh egestas tempus turpis, sit amet mattis magna varius non.</p>
							<h5 class="about-one-inner-text">Denounce with righteous indignation and dislike men who are so beguiled & demoralized our power.</h5>
						<div class="row row-gutter-y-30">
							<div class="col-xl-6 col-lg-6 col-md-6">
								<div class="about-one-card">
									<div class="about-one-card-number">01</div>
									<div class="about-one-card-content"><h5>Going Above and Beyond</h5></div>
								</div><!-- about-one-card -->
							</div><!-- col-xl-6 col-lg-6 col-md-6 -->
							<div class="col-xl-6 col-lg-6 col-md-6">
								<div class="about-one-card">
									<div class="about-one-card-number">02</div>
									<div class="about-one-card-content"><h5>Committed to People First</h5></div>
								</div><!-- about-one-card -->
							</div><!-- col-xl-6 col-lg-6 col-md-6 -->
						</div><!-- row row-gutter-y-30 -->
					</div><!-- about-one-inner -->
				</div><!--col-lg-6-->
				<div class="col-lg-12 col-xl-6">
					<div class="about-one-image">
						<img src="assets/image/shapes/shape-1.png" class="floated-image-one" alt="img-58">
						<img src="assets/image/gallery/about-7.jpg" alt="img-59" class="img-fluid">
					</div><!--about-one-image-->
				</div><!--col-lg-6-->
			</div><!-- row -->
		</div><!-- container -->
	</section><!--about-one-section-->
	<section class="client-section">
		<h5 class="client-text">Our partners & suppoters</h5><!-- client-text -->
		<div class="container">
			<div class="client-carousel owl-carousel owl-theme">
				<div class="item">
					<img src="assets/image/shapes/client-1.png" class="img-fluid" alt="img-60">
				</div><!--item-->
				<div class="item">
					<img src="assets/image/shapes/client-1.png" class="img-fluid" alt="img-61">
				</div><!--item-->
				<div class="item">
					<img src="assets/image/shapes/client-1.png" class="img-fluid" alt="img-62">
				</div><!--item-->
				<div class="item">
					<img src="assets/image/shapes/client-1.png" class="img-fluid" alt="img-63">
				</div><!--item-->
			</div><!--client-carousel owl-carousel owl-theme-->
		</div><!--container-->
	</section><!--client-section-->
	<section class="testimonial-section testimonial-box-one">
		<div class="container">
			<div class="testimonial-name">TESTIMONIALS</div>
			<div class="testimonial-slider">
				<div class="swiper testimonial-reviews">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="testimonial-content">
								<div class="testimonial-ratings">
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
								</div><!-- testimonial-ratings -->
								<div class="testimonial-text">
									This is due to their excellent service, competitive pricing and customer support. It’s throughly refresing to get such a personal touch. Duis aute lorem ipsum is simply free text irure dolor in reprehenderit in esse nulla pariatur.
								</div><!-- testimonial-text -->
								<div class="testimonial-thumb-card">
									<h5>Martin McLaughlin</h5>
									<span>Customer</span>
								</div><!-- testimonial-thumb-card -->
							</div><!--testimonial-content-->
						</div><!--swiper-slide-->
						<div class="swiper-slide">
							<div class="testimonial-content">
								<div class="testimonial-ratings">
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
								</div><!-- testimonial-ratings -->
								<div class="testimonial-text">
									This is due to their excellent service, competitive pricing and customer support. It’s throughly refresing to get such a personal touch. Duis aute lorem ipsum is simply free text irure dolor in reprehenderit in esse nulla pariatur.
								</div><!-- testimonial-text -->
								<div class="testimonial-thumb-card">
									<h5>Aleesha Brown</h5>
									<span>Customer</span>
								</div><!-- testimonial-thumb-card -->
							</div><!--testimonial-content-->
						</div><!--swiper-slide-->
						<div class="swiper-slide">
							<div class="testimonial-content">
								<div class="testimonial-ratings">
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
								</div><!-- testimonial-ratings -->
								<div class="testimonial-text">
									This is due to their excellent service, competitive pricing and customer support. It’s throughly refresing to get such a personal touch. Duis aute lorem ipsum is simply free text irure dolor in reprehenderit in esse nulla pariatur.
								</div><!-- testimonial-text -->
								<div class="testimonial-thumb-card">
									<h5>Kevin Martin</h5>
									<span>Member</span>
								</div><!-- testimonial-thumb-card -->
							</div><!--testimonial-content-->
						</div><!--swiper-slide-->
					</div><!-- swiper-wrapper -->
					<div class="swiper-pagination"></div>
				</div><!--swiper testimonial-reviews-->
				<div class="testimonial-thumb">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<img src="assets/image/testimonial/testimonial-2.jpg" class="img-fluid" alt="img-64">
							<i class="fa-solid fa-quote-left"></i>
						</div><!-- swiper-slide -->
						<div class="swiper-slide">
							<img src="assets/image/testimonial/testimonial-3.jpg" class="img-fluid" alt="img-65">
							<i class="fa-solid fa-quote-left"></i>
						</div><!-- swiper-slide -->
						<div class="swiper-slide">
							<img src="assets/image/testimonial/testimonial-4.jpg" class="img-fluid" alt="img-66">
							<i class="fa-solid fa-quote-left"></i>
						</div><!-- swiper-slide -->
					</div><!--swiper-wrapper-->
				</div><!--testimonial-thumb-->
			</div><!--testimonial-slider-->
		</div><!-- container -->
	</section><!--testimonial-section-->
	<section class="team-section">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-12 col-lg-6 col-xl-6">
					<div class="team-inner">
						<div class="section-tagline">team members</div>
						<h2 class="section-title">Meet our Professional City Council</h2>
					</div><!--team-inner-->
				</div><!--col-12 col-md-12 col-lg-6 col-xl-6-->
				<div class="col-12 col-md-12 col-lg-6 col-xl-6">
					<div class="team-box">
						<p>Aliquam viverra arcu. Donec aliquet blandit enim feugiat. Suspendisse id quam sed eros tincidunt luctus sit amet eu nibh egestas tempus turpis.</p>	
					</div><!--team-box-->
				</div><!--col-12 col-md-12 col-lg-6 col-xl-6-->
			</div><!-- row -->
			<div class="row row-gutter-y-30">
				<div class="col-12 col-md-6 col-xl-3">
					<div class="team-card">
						<div class="team-card-img">
							<img src="assets/image/team/team-1.jpg" class="img-fluid" alt="img-67">
							<div class="team-card-icon">
								<a href="#" class="pinterest"><i class="fa-brands fa-pinterest-p"></i></a>
								<a href="#" class="twitter"><i class="fa-brands fa-twitter"></i></a>
								<a href="#" class="facebook"><i class="fa-brands fa-facebook"></i></a>
							</div><!-- team-card-icon -->
						</div><!-- team-card-img -->
						<div class="team-card-content">
							<h4><a href="team-details.html">Sarah Albert</a></h4>
							<p>Consultant</p>
						</div><!-- team-card-content -->
					</div><!--team-card-->
				</div><!--col-12 col-md-6 col-xl-3-->
				<div class="col-12 col-md-6 col-xl-3">
					<div class="team-card">
						<div class="team-card-img">
							<img src="assets/image/team/team-2.jpg" class="img-fluid" alt="img-68">
							<div class="team-card-icon">
								<a href="#" class="pinterest"><i class="fa-brands fa-pinterest-p"></i></a>
								<a href="#" class="twitter"><i class="fa-brands fa-twitter"></i></a>
								<a href="#" class="facebook"><i class="fa-brands fa-facebook"></i></a>
							</div><!-- team-card-icon -->
						</div><!-- team-card-img -->
						<div class="team-card-content">
							<h4><a href="team-details.html">Mike Hardson</a></h4>
							<p>Consultant</p>
						</div><!-- team-card-content -->
					</div><!--team-card-->
				</div><!--col-12 col-md-6 col-xl-3-->
				<div class="col-12 col-md-6 col-xl-3">
					<div class="team-card">
						<div class="team-card-img">
							<img src="assets/image/team/team-3.jpg" class="img-fluid" alt="img-69">
							<div class="team-card-icon">
								<a href="#" class="pinterest"><i class="fa-brands fa-pinterest-p"></i></a>
								<a href="#" class="twitter"><i class="fa-brands fa-twitter"></i></a>
								<a href="#" class="facebook"><i class="fa-brands fa-facebook"></i></a>
							</div><!-- team-card-icon -->
						</div><!-- team-card-img -->
						<div class="team-card-content">
							<h4><a href="team-details.html">Christine Eve</a></h4>
							<p>Consultant</p>
						</div><!-- team-card-content -->
					</div><!--team-card-->
				</div><!--col-12 col-md-6 col-xl-3-->
				<div class="col-12 col-md-6 col-xl-3">
					<div class="team-card">
						<div class="team-card-img">
							<img src="assets/image/team/team-4.jpg" class="img-fluid" alt="img-70">
							<div class="team-card-icon">
								<a href="#" class="pinterest"><i class="fa-brands fa-pinterest-p"></i></a>
								<a href="#" class="twitter"><i class="fa-brands fa-twitter"></i></a>
								<a href="#" class="facebook"><i class="fa-brands fa-facebook"></i></a>
							</div><!-- team-card-icon -->
						</div><!-- team-card-img -->
						<div class="team-card-content">
							<h4><a href="team-details.html">John Martin</a></h4>
							<p>Consultant</p>
						</div><!-- team-card-content -->
					</div><!--team-card-->
				</div><!--col-12 col-md-6 col-xl-3-->
			</div><!-- row -->
		</div><!-- container -->
	</section><!--team-section-->
	<section class="cta-one">
		<div class="cta-one-inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="cta-one-content text-center">
							<h2 class="section-title text-white">It’s a Great way to Love and<br> Support your City</h2>
							<a href="contact.html" class="btn btn-primary">Start Donating Now</a>
						</div><!-- cta-one-content -->
					</div><!-- col-lg-12 -->
				</div><!-- row -->
			</div><!-- container -->
		</div><!--cta-one-inner-->
	</section><!--cta-one-->
</div><!--page-wrapper-->		
<section class="footer">
	<div class="footer-inner">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="footer-widget-logo">
						<a href="index.html"><img src="assets/image/logo-light.png" class="img-fluid" alt="img-25"></a>
					</div><!-- footer-widget-logo -->
					<div class="footer-widget-text">
						<p>The gowrnx official guide to living, working, visiting and investing in the Texas</p>
					</div><!-- footer-widget-text -->
					<div class="footer-widget-socials">
						<a href="#"><i class="fa-brands fa-twitter"></i></a>
						<a href="#"><i class="fa-brands fa-facebook"></i></a>
						<a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
						<a href="#"><i class="fa-brands fa-instagram"></i></a>
					</div><!-- footer-widget-socials -->
				</div><!--col-lg-4-->
				<div class="col-lg-3">
					<div class="footer-widget">
						<div class="footer-widget-explore">
							<h4 class="footer-widget-title">Explore</h4>
							<ul class="list-unstyled">
								<li><a href="department-details.html">Administration</a></li>
								<li><a href="service-details.html">Fire Services</a></li>
								<li><a href="event-details.html">Business & Taxation</a></li>
								<li><a href="team-details.html">Circular’s And Go’s</a></li>
								<li><a href="contact.html">Contact Us</a></li>
							</ul><!-- list-unstyled -->
						</div><!-- footer-widget-explore -->
					</div><!--footer-widget-->
				</div><!--col-lg-3-->
				<div class="col-lg-2">
					<div class="footer-widget">
						<div class="footer-widget-department">
							<h4 class="footer-widget-title">Departments</h4>
							<ul class="list-unstyled">
								<li><a href="department-details.html">Health & Safety</a></li>
								<li><a href="department-details.html">Housing & Land</a></li>
								<li><a href="department-details.html">Legal & Finance</a></li>
								<li><a href="department-details.html">Transport & Traffic</a></li>
								<li><a href="department-details.html">Arts & Culture</a></li>
							</ul><!-- list-unstyled -->
						</div><!-- footer-widget-department -->
					</div><!--footer-widget-->
				</div><!--col-lg-2-->
				<div class="col-lg-3">
					<div class="footer-widget">
						<div class="footer-widget-contact">
							<h4 class="footer-widget-title">Contact</h4>
							<p>88 Broklyn Golden Road Street,<br>New York. USA</p>
						</div><!-- footer-widget-contact -->
						<div class="footer-widget-contact-list">
							<i class="fa-solid fa-envelope"></i>
							<div class="footer-widget-contact-item">
								<a href="mailto:needhelp@company.com">needhelp@company.com</a>
							</div><!-- footer-widget-contact-item -->
						</div><!-- footer-widget-contact-list -->
						<div class="footer-widget-contact-list">
							<i class="fa-solid fa-phone"></i>
							<div class="footer-widget-contact-item">
								<a href="tel:+92-003-68-090">+92 (003) 68-090</a>
							</div><!-- footer-widget-contact-item -->
						</div><!-- footer-widget-contact-list -->
					</div><!--footer-widget-->
				</div><!--col-lg-3-->
			</div><!-- row -->
		</div><!-- container -->
	</div><!--footer-inner-->
	<div class="bottom-footer">
		<div class="conatiner">
			<p>© Copyright 2023 by Company.com</p>
		</div><!-- container -->
	</div><!--bottom-footer-->
</section><!--footer-->
<div class="mobile-nav-wrapper">
	<div class="mobile-nav-overlay mobile-nav-toggler"></div><!-- mobile-nav-overlay -->
	<div class="mobile-nav-content">
		<a href="#" class="mobile-nav-close mobile-nav-toggler">
			<span></span>
			<span></span>
		</a><!-- mobile-nav-close -->
		<div class="logo-box">
			<a href="index.html"><img src="assets/image/logo-light.png" width="160" height="72" alt=""></a>
		</div><!-- logo-box -->
		<div class="mobile-nav-container"></div><!-- mobile-nav-container -->
		<ul class="mobile-nav-contact list-unstyled">
			<li>
				<i class="fa-solid fa-phone"></i>
				<a href="tel:+8898006802">+ 88 ( 9800 ) 6802</a>
			</li><!-- li -->
			<li>
				<i class="fa-solid fa-envelope"></i>
				<a href="mailto:needhelp@company.com">needhelp@company.com</a>
			</li><!-- li -->
			<li>
				<i class="fa-solid fa-map-marker-alt"></i>
				88 Broklyn Golden Road Street <br> New York. USA
			</li><!-- li -->
		</ul><!-- mobile-nav-contact -->
		<ul class="mobile-nav-social list-unstyled">
			<li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
			<li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
			<li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
			<li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
		</ul><!-- mobile-nav-social -->
	</div><!-- mobile-nav-content -->
</div><!-- mobile-nav-wrapper -->
<div class="search-popup">
	<div class="search-popup-overlay search-toggler"></div><!-- search-popup-overlay -->
	<div class="search-popup-content">
		<form action="#">
			<label for="search" class="sr-only">search here</label><!-- sr-only -->
			<input type="text" id="search" placeholder="Search Here...">
			<button type="submit" aria-label="search submit" class="search-btn">
				<span><i class="flaticon-search-interface-symbol"></i></span>
			</button><!-- search-btn -->
		</form><!-- form -->
	</div><!-- search-popup-content -->
</div><!-- search-popup -->
<a href="#" class="scroll-to-top scroll-to-target" data-target="html"><i class="fa-solid fa-arrow-up"></i></a>
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/owl-carousel/owl.carousel.min.js"></script>
<script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="assets/vendor/counter-up/jquery.counterup.min.js"></script>
<script src="assets/vendor/youtube-popup/youtube-popup.jquery.js"></script>
<script src="assets/js/theme.js"></script>
</body>
</html>