<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Luxehotel Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="<?php echo base_url('assets/css/font_poppins.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/css/font_playfair_display.css'); ?>" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/animate.css'); ?>">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/icomoon.css'); ?>">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css'); ?>">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/magnific-popup.css'); ?>">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/flexslider.css'); ?>">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/owl.carousel.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/owl.theme.default.min.css'); ?>">
	
	<!-- Date Picker -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-datepicker.css'); ?>">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css'); ?>">

	<!-- Theme style  -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">

	<!-- Modernizr JS -->
	<script src="<?php echo base_url('assets/js/modernizr-2.6.2.min.js'); ?>"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="<?php echo base_url('assets/js/respond.min.js'); ?>"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top">
				<div class="container">
					<div class="row">
						<div class="col-xs-4">
							<p class="site">www.yoursitehere.com</p>
						</div>
						<div class="col-xs-8 text-right">
							<p class="num">Call: +01-123-456</p>
							<ul class="colorlib-social">
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-linkedin"></i></a></li>
								<li><a href="#"><i class="icon-dribbble"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-xs-2">
							<div id="colorlib-logo"><a href="index.html">Luxehotel</a></div>
						</div>
						<div class="col-xs-10 text-right menu-1">
							<ul>
								<li class="active"><a href="index.html">Home</a></li>
								<li class="has-dropdown">
									<a href="rooms-suites.html">Rooms</a>
									<ul class="dropdown">
										<li><a href="#">Web Design</a></li>
										<li><a href="#">eCommerce</a></li>
										<li><a href="#">Branding</a></li>
										<li><a href="#">API</a></li>
									</ul>
								</li>
								<li><a href="dining-bar.html">Dining &amp; Bar</a></li>
								<li><a href="aminities.html">Aminities</a></li>
								<li><a href="blog.html">Blog</a></li>
								<li><a href="about.html">About</a></li>
								<li><a href="contact.html">Contact</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(<?php echo base_url(); ?>assets/images/landing/img_bg_5.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2>Welcome to the luxehotel</h2>
				   					<h1>A Luxury Hotel</h1>
										<p><a class="btn btn-primary btn-demo" href="#"></i> View Detail</a> <a class="btn btn-primary btn-learn">Know More</a></p>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(<?php echo base_url(); ?>assets/images/landing/img_bg_1.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2>Discover &amp; Enjoy</h2>
				   					<h1>Everything you need in luxehotel</h1>
										<p><a class="btn btn-primary btn-demo" href="#"></i> View Detail</a> <a class="btn btn-primary btn-learn">Know More</a></p>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(<?php echo base_url(); ?>assets/images/landing/img_bg_3.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluids">
			   			<div class="row">
				   			<div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2>You are invited</h2>
				   					<h1>We know how to please you</h1>
										<p><a class="btn btn-primary btn-demo" href="#"></i> View Detail</a> <a class="btn btn-primary btn-learn">Know More</a></p>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(<?php echo base_url(); ?>assets/images/landing/img_bg_4.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2>Come &amp; enjoy the unforgetable nights</h2>
				   					<h1>In the heart of luxehotel</h1>
										<p><a class="btn btn-primary btn-demo" href="#"></i> View Detail</a> <a class="btn btn-primary btn-learn">Know More</a></p>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>	   	
			  	</ul>
		  	</div>
		</aside>
		<div id="colorlib-reservation">
			<div class="container">
				<div class="row">
					<div class="col-md-12 search-wrap">
						<form method="post" class="colorlib-form">
		              	<div class="row">
		                <div class="col-md-3">
		                  <div class="form-group">
		                    <label for="date">Check-in:</label>
		                    <div class="form-field">
		                      <i class="icon icon-calendar2"></i>
		                      <input type="text" id="date" class="form-control date" placeholder="Check-in date">
		                    </div>
		                  </div>
		                </div>
		                <div class="col-md-3">
		                  <div class="form-group">
		                    <label for="date">Check-out:</label>
		                    <div class="form-field">
		                      <i class="icon icon-calendar2"></i>
		                      <input type="text" id="date" class="form-control date" placeholder="Check-out date">
		                    </div>
		                  </div>
		                </div>
		                <div class="col-md-2">
		                  <div class="form-group">
		                    <label for="adults">Adults</label>
		                    <div class="form-field">
		                      <i class="icon icon-arrow-down3"></i>
		                      <select name="people" id="people" class="form-control">
		                        <option value="#">1</option>
		                        <option value="#">2</option>
		                        <option value="#">3</option>
		                        <option value="#">4</option>
		                        <option value="#">5+</option>
		                      </select>
		                    </div>
		                  </div>
		                </div>
		                <div class="col-md-2">
		                  <div class="form-group">
		                    <label for="children">Children</label>
		                    <div class="form-field">
		                      <i class="icon icon-arrow-down3"></i>
		                      <select name="people" id="people" class="form-control">
		                        <option value="#">1</option>
		                        <option value="#">2</option>
		                        <option value="#">3</option>
		                        <option value="#">4</option>
		                        <option value="#">5+</option>
		                      </select>
		                    </div>
		                  </div>
		                </div>
		                <div class="col-md-2">
		                  <input type="submit" name="submit" id="submit" value="Search" class="btn btn-primary btn-block">
		                </div>
		              </div>
		            </form>
					</div>
				</div>
			</div>
		</div>

		<div id="colorlib-services">
			<div class="container">
				<div class="row">
					<div class="col-md-3 animate-box text-center">
						<div class="services">
							<span class="icon">
								<i class="flaticon-reception"></i>
							</span>
							<h3>24/7 Front Desk</h3>
							<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p>
						</div>
					</div>
					<div class="col-md-3 animate-box text-center">
						<div class="services">
							<span class="icon">
								<i class="flaticon-herbs"></i>
							</span>
							<h3>Spa Suites</h3>
							<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p>
						</div>
					</div>
					<div class="col-md-3 animate-box text-center">
						<div class="services">
							<span class="icon">
								<i class="flaticon-car"></i>
							</span>
							<h3>Transfer Services</h3>
							<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p>
						</div>
					</div>
					<div class="col-md-3 animate-box text-center">
						<div class="services">
							<span class="icon">
								<i class="flaticon-cheers"></i>
							</span>
							<h3>Restaurant &amp; Bar</h3>
							<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="colorlib-rooms" class="colorlib-light-grey">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span>
						<h2>Rooms &amp; Suites</h2>
						<p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 animate-box">
						<div class="owl-carousel owl-carousel2">
							<div class="item">
								<a href="images/room-1.jpg" class="room image-popup-link" style="background-image: url(<?php echo base_url(); ?>assets/images/landing/room-1.jpg);"></a>
								<div class="desc text-center">
									<span class="rate-star"><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span>
									<h3><a href="rooms-suites.html">Suite</a></h3>
									<p class="price">
										<span class="currency">$</span>
										<span class="price-room">99</span>
										<span class="per">/ per night</span>
									</p>
									<ul>
										<li><i class="icon-check"></i> Only 10 rooms are available</li>
										<li><i class="icon-check"></i> Breakfast included</li>
										<li><i class="icon-check"></i> Price does not include VAT &amp; services fee</li>
									</ul>
									<p><a class="btn btn-primary btn-book">Book now!</a></p>
								</div>
							</div>
							<div class="item">
								<a href="images/room-2.jpg" class="room image-popup-link" style="background-image: url(<?php echo base_url(); ?>assets/images/landing/room-2.jpg);"></a>
								<div class="desc text-center">
									<span class="rate-star"><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full"></i></span>
									<h3><a href="rooms-suites.html">Double Room</a></h3>
									<p class="price">
										<span class="currency">$</span>
										<span class="price-room">199</span>
										<span class="per">/ per night</span>
									</p>
									<ul>
										<li><i class="icon-check"></i> Perfect for traveling couples</li>
										<li><i class="icon-check"></i> Breakfast included</li>
										<li><i class="icon-check"></i> Price does not include VAT &amp; services fee</li>
									</ul>
									<p><a class="btn btn-primary btn-book">Book now!</a></p>
								</div>
							</div>
							<div class="item">
								<a href="images/room-3.jpg" class="room image-popup-link" style="background-image: url(<?php echo base_url(); ?>assets/images/landing/room-3.jpg);"></a>
								<div class="desc text-center">
									<span class="rate-star"><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full"></i></span>
									<h3><a href="rooms-suites.html">Family Room</a></h3>
									<p class="price">
										<span class="currency">$</span>
										<span class="price-room">249</span>
										<span class="per">/ per night</span>
									</p>
									<ul>
										<li><i class="icon-check"></i> Two double beds</li>
										<li><i class="icon-check"></i> Babysitting facilities</li>
										<li><i class="icon-check"></i> 1 free bed available on request</li>
									</ul>
									<p><a class="btn btn-primary btn-book">Book now!</a></p>
								</div>
							</div>
							<div class="item">
								<a href="images/room-4.jpg" class="room image-popup-link" style="background-image: url(<?php echo base_url(); ?>assets/images/landing/room-4.jpg);"></a>
								<div class="desc text-center">
									<span class="rate-star"><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full"></i></span>
									<h3><a href="rooms-suites.html">Classic Double Room</a></h3>
									<p class="price">
										<span class="currency">$</span>
										<span class="price-room">150</span>
										<span class="per">/ per night</span>
									</p>
									<ul>
										<li><i class="icon-check"></i> Only 10 rooms are available</li>
										<li><i class="icon-check"></i> Breakfast included</li>
										<li><i class="icon-check"></i> Price does not include VAT &amp; services fee</li>
									</ul>
									<p><a class="btn btn-primary btn-book">Book now!</a></p>
								</div>
							</div>
							<div class="item">
								<a href="images/room-5.jpg" class="room image-popup-link" style="background-image: url(<?php echo base_url(); ?>assets/images/landing/room-5.jpg);"></a>
								<div class="desc text-center">
									<span class="rate-star"><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full"></i></span>
									<h3><a href="rooms-suites.html">Superior Double Room</a></h3>
									<p class="price">
										<span class="currency">$</span>
										<span class="price-room">200</span>
										<span class="per">/ per night</span>
									</p>
									<ul>
										<li><i class="icon-check"></i> Perfect for traveling couples</li>
										<li><i class="icon-check"></i> Breakfast included</li>
										<li><i class="icon-check"></i> Price does not include VAT &amp; services fee</li>
									</ul>
									<p><a class="btn btn-primary btn-book">Book now!</a></p>
								</div>
							</div>
							<div class="item">
								<a href="images/room-6.jpg" class="room image-popup-link" style="background-image: url(<?php echo base_url(); ?>assets/images/landing/room-6.jpg);"></a>
								<div class="desc text-center">
									<span class="rate-star"><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full"></i></span>
									<h3><a href="rooms-suites.html">Superior Family Room</a></h3>
									<p class="price">
										<span class="currency"><small>$</small></span>
										<span class="price-room">299</span>
										<span class="per">/ per night</span>
									</p>
									<ul>
										<li><i class="icon-check"></i> Perfect for traveling couples</li>
										<li><i class="icon-check"></i> Breakfast included</li>
										<li><i class="icon-check"></i> Price does not include VAT &amp; services fee</li>
									</ul>
									<p><a class="btn btn-primary btn-book">Book now!</a></p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12 text-center animate-box">
						<a href="#">View all rooms <i class="icon-arrow-right3"></i></a>
					</div>
				</div>
			</div>
		</div>


		<div id="colorlib-dining-bar">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span>
						<h2>Dining &amp; Bar</h2>
						<p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					</div>
				</div>
				<div class="row">
					<div class="diningbar-flex">
						<div class="half animate-box">
							<ul class="nav nav-tabs text-center" role="tablist">
								<li role="presentation" class="active"><a href="#mains" aria-controls="mains" role="tab" data-toggle="tab">Mains</a></li>
								<li role="presentation"><a href="#desserts" aria-controls="desserts" role="tab" data-toggle="tab">Desserts</a></li>
								<li role="presentation"><a href="#drinks" aria-controls="drinks" role="tab" data-toggle="tab">Drinks</a></li>
							</ul>
			            <!-- Tab panes -->
			            <div class="tab-content">
								<div role="tabpanel" class="tab-pane active" id="mains">
									<div class="row">
										<div class="col-md-12">
											<ul class="menu-dish">
							              <li>
							                <figure class="image"><img src="images/menu-1.jpg" alt="Free Bootstrap Template by colorlib.com"></figure>
							                <div class="text">
							                  <span class="price">$25.99</span>
							                  <h3>Grilled Pork</h3>
							                  <p class="cat">Meat / Potatoes / Rice</p>
							                </div>
							              </li>
							              <li>
							                <figure class="image"><img src="images/menu-2.jpg" alt="Free Bootstrap Template by colorlib.com"></figure>
							                <div class="text">
							                  <span class="price">$30.99</span>
							                  <h3>Tuna Roast Source</h3>
							                  <p class="cat">Tuna / Potatoes / Rice</p>
							                </div>
							              </li>
							              <li>
							                <figure class="image"><img src="images/menu-3.jpg" alt="Free Bootstrap Template by colorlib.com"></figure>
							                <div class="text">
							                  <span class="price">$40.00</span>
							                  <h3>Roast Beef (4 sticks)</h3>
							                  <p class="cat">Crab / Potatoes / Rice</p>
							                </div>
							              </li>
							              <li>
							                <figure class="image"><img src="images/menu-4.jpg" alt="Free Bootstrap Template by colorlib.com"></figure>
							                <div class="text">
							                  <span class="price">$20.50</span>
							                  <h3>Salted Fried Chicken</h3>
							                  <p class="cat">Crab / Potatoes / Rice</p>
							                </div>
							              </li>
							            </ul>
										</div>
									</div>
								</div>

								<div role="tabpanel" class="tab-pane" id="desserts">
									<div class="row">
										<div class="col-md-12">
											<ul class="menu-dish">
							              <li>
							                <figure class="image"><img src="images/menu-1.jpg" alt="Free Bootstrap Template by colorlib.com"></figure>
							                <div class="text">
							                  <span class="price">$39.90</span>
							                  <h3>Fried Potatoes with Garlic</h3>
							                  <p class="cat">Viggies / Potatoes / Rice</p>
							                </div>
							              </li>
							              <li>
							                <figure class="image"><img src="images/menu-3.jpg" alt="Free Bootstrap Template by colorlib.com"></figure>
							                <div class="text">
							                  <span class="price">$20.99</span>
							                  <h3>Tuna Roast Source</h3>
							                  <p class="cat">Tuna / Potatoes / Rice</p>
							                </div>
							              </li>
							              <li>
							                <figure class="image"><img src="images/menu-3.jpg" alt="Free Bootstrap Template by colorlib.com"></figure>
							                <div class="text">
							                  <span class="price">$50.00</span>
							                  <h3>Roast Beef (4 sticks)</h3>
							                  <p class="cat">Crab / Potatoes / Rice</p>
							                </div>
							              </li>
							              <li>
							                <figure class="image"><img src="images/menu-4.jpg" alt="Free Bootstrap Template by colorlib.com"></figure>
							                <div class="text">
							                  <span class="price">$29.00</span>
							                  <h3>Salted Fried Chicken</h3>
							                  <p class="cat">Crab / Potatoes / Rice</p>
							                </div>
							              </li>
							            </ul>
										</div>
									</div>
								</div>

								<div role="tabpanel" class="tab-pane" id="drinks">
									<div class="row">
										<div class="col-md-12">
											<ul class="menu-dish">
							              <li>
							                <figure class="image"><img src="images/menu-8.jpg" alt="Free Bootstrap Template by colorlib.com"></figure>
							                <div class="text">
							                  <span class="price">$25.00</span>
							                  <h3>Fried Potatoes with Garlic</h3>
							                  <p class="cat">Viggies / Potatoes / Rice</p>
							                </div>
							              </li>
							              <li>
							                <figure class="image"><img src="images/menu-9.jpg" alt="Free Bootstrap Template by colorlib.com"></figure>
							                <div class="text">
							                  <span class="price">$20.50</span>
							                  <h3>Tuna Roast Source</h3>
							                  <p class="cat">Tuna / Potatoes / Rice</p>
							                </div>
							              </li>
							              <li>
							                <figure class="image"><img src="images/menu-3.jpg" alt="Free Bootstrap Template by colorlib.com"></figure>
							                <div class="text">
							                  <span class="price">$30.00</span>
							                  <h3>Roast Beef (4 sticks)</h3>
							                  <p class="cat">Crab / Potatoes / Rice</p>
							                </div>
							              </li>
							              <li>
							                <figure class="image"><img src="images/menu-4.jpg" alt="Free Bootstrap Template by colorlib.com"></figure>
							                <div class="text">
							                  <span class="price">$29.99</span>
							                  <h3>Salted Fried Chicken</h3>
							                  <p class="cat">Crab / Potatoes / Rice</p>
							                </div>
							              </li>
							            </ul>
										</div>
									</div>
								</div>
			            </div>
			         </div><!-- end half -->
			         <div class="half diningbar-img" style="background-image: url(<?php echo base_url(); ?>assets/images/landing/cover_img_1.jpg);"></div><!-- end half -->
			      </div>
			   </div>
	      </div>
		</div>

		<div id="colorlib-blog">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span>
						<h2>Recent Blog</h2>
						<p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					</div>
				</div>
				<div class="blog-flex">
					<div class="video colorlib-video" style="background-image: url(<?php echo base_url(); ?>assets/images/landing/blog-3.jpg);">
						<a href="https://vimeo.com/channels/staffpicks/93951774" class="popup-vimeo"><i class="icon-video"></i></a>
						<div class="overlay"></div>
					</div>
					<div class="blog-entry">
						<div class="row">
							<div class="col-md-12 animate-box">
								<a href="blog.html" class="blog-post">
									<span class="img" style="background-image: url(<?php echo base_url(); ?>assets/images/landing/blog-1.jpg);"></span>
									<div class="desc">
										<span class="date">January 14, 2018</span>
										<h3>A Definitive Guide to the Best Dining</h3>
										<span class="cat">Activities</span>
									</div>
								</a>
							</div>
							<div class="col-md-12 animate-box">
								<a href="blog.html" class="blog-post">
									<span class="img" style="background-image: url(<?php echo base_url(); ?>assets/images/landing/blog-2.jpg);"></span>
									<div class="desc">
										<span class="date">January 14, 2018</span>
										<h3>How These 5 People Found The Path to Their Dream Trip</h3>
										<span class="cat">Activities</span>
									</div>
								</a>
							</div>
							<div class="col-md-12 animate-box">
								<a href="blog.html" class="blog-post">
									<span class="img" style="background-image: url(<?php echo base_url(); ?>assets/images/landing/blog-3.jpg);"></span>
									<div class="desc">
										<span class="date">January 14, 2018</span>
										<h3>Our Secret Island Boat Tour Is just for You</h3>
										<span class="cat">Activities</span>
									</div>
								</a>
							</div>
							<div class="col-md-12 animate-box text-right">
								<a href="#">View all blog post <i class="icon-arrow-right3"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="colorlib-testimony" class="colorlib-light-grey">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span>
						<h2>Our Satisfied Guests says</h2>
						<p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					</div>
				</div>
				<div class="row">
				<div class="col-md-4 animate-box">
					<div class="testimony text-center">
						<span class="img-user" style="background-image: url(<?php echo base_url(); ?>assets/images/landing/person2.jpg);"></span>
						<span class="user">Brian Doe</span>
						<small>Satisfied Customer</small>
						<blockquote>
							<p></i> Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
						</blockquote>
					</div>
				</div>
				<div class="col-md-4 animate-box">
					<div class="testimony text-center">
						<span class="img-user" style="background-image: url(<?php echo base_url(); ?>assets/images/landing/person1.jpg);"></span>
						<span class="user">Nathalie Miller</span>
						<small>Satisfied Customer</small>
						<blockquote>
							<p></i> Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
						</blockquote>
					</div>
				</div>
				<div class="col-md-4 animate-box">
					<div class="testimony text-center">
						<span class="img-user" style="background-image: url(<?php echo base_url(); ?>assets/images/landing/person3.jpg);"></span>
						<span class="user">Shara Jones</span>
						<small>Satisfied Customer</small>
						<blockquote>
							<p></i> Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
						</blockquote>
					</div>
				</div>
			</div>
			</div>
		</div>

	
		<div id="colorlib-subscribe" style="background-image: url(<?php echo base_url(); ?>assets/images/landing/img_bg_2.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span>
						<h2>Sign Up for a Newsletter</h2>
						<p>Get A 50% Discounts in every Rooms, Book now!</p>
						<form class="form-inline qbstp-header-subscribe">
							<div class="row">
								<div class="col-md-12 col-md-offset-0">
									<div class="form-group">
										<input type="text" class="form-control" id="email" placeholder="Enter your email">
										<button type="submit" class="btn btn-primary">Subscribe</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<footer id="colorlib-footer" role="contentinfo">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-3 colorlib-widget">
						<h4>Luxehotel</h4>
						<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
						<p>
							<ul class="colorlib-social-icons">
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-linkedin"></i></a></li>
								<li><a href="#"><i class="icon-dribbble"></i></a></li>
							</ul>
						</p>
					</div>
					<div class="col-md-3 colorlib-widget">
						<h4>Quick Links</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="#">Accomodation</a></li>
								<li><a href="#">Dining &amp; Bar</a></li>
								<li><a href="#">Restaurants</a></li>
								<li><a href="#">Beach &amp; Resorts</a></li>
							</ul>
						</p>
					</div>
					<div class="col-md-3">
						<h4>Recents Blog Post</h4>
						<ul class="colorlib-footer-links">
							<li><a href="#">The Ultimate Packing List For Female Travelers</a></li>
							<li><a href="#">How These 5 People Found The Path to Their Dream Trip</a></li>
							<li><a href="#">A Definitive Guide to the Best Dining and Drinking Venues in the City</a></li>
						</ul>
					</div>

					<div class="col-md-3 col-md-push-1">
						<h4>Contact Information</h4>
						<ul class="colorlib-footer-links">
							<li>291 South 21th Street, <br> Suite 721 New York NY 10016</li>
							<li><a href="tel://1234567920">+ 1235 2355 98</a></li>
							<li><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
							<li><a href="http://luxehotel.com">luxehotel.com</a></li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-center">
						<p>
							<small class="block"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart3" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></small> 
							<small class="block">Demo Images: <a href="http://unsplash.com/" target="_blank">Unsplash</a></small>
						</p>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
	<!-- jQuery Easing -->
	<script src="<?php echo base_url('assets/js/jquery.easing.1.3.js'); ?>"></script>
	<!-- Bootstrap -->
	<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
	<!-- Waypoints -->
	<script src="<?php echo base_url('assets/js/jquery.waypoints.min.js'); ?>"></script>
	<!-- Flexslider -->
	<script src="<?php echo base_url('assets/js/jquery.flexslider-min.js'); ?>"></script>
	<!-- Owl carousel -->
	<script src="<?php echo base_url('assets/js/owl.carousel.min.js'); ?>"></script>
	<!-- Magnific Popup -->
	<script src="<?php echo base_url('assets/js/jquery.magnific-popup.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/magnific-popup-options.js'); ?>"></script>
	<!-- Date Picker -->
	<script src="<?php echo base_url('assets/js/bootstrap-datepicker.js'); ?>"></script>
	<!-- Main -->
	<script src="<?php echo base_url('assets/js/main.js'); ?>"></script>

	</body>
</html>

