<aside id="colorlib-hero">
	<div class="flexslider">
		<ul class="slides">
			<li style="background-image: url(<?php echo base_url(); ?>assets/images/landing/img_bg_5.jpg);">
				<div class="overlay"></div>
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
							<div class="slider-text-inner text-center">
								<h2>Selamat Datang Di Anbi Travel</h2>
								<h1>Travel dengan sangat nyaman dizona nyaman</h1>
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
								<h1>Anda bisa kemana saja dengan Anbi Travel</h1>
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
								<h1>Cari Tahu Lebih tentang kami</h1>
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
								<h2>Come &amp; enjoy the unforgetable travel</h2>
								<h1>Kemanapun dengan kami disini</h1>
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

			<?php foreach ($desc as $value) : ?>

				<div class="col-md-3 animate-box text-center">
					<div class="services">
						<span class="icon">
							<i class="<?php echo $value['logo_desc']; ?>"></i>
						</span>
						<h3><?php echo $value['judul']; ?></h3>
						<p>
							<?php echo $value['short_desc']; ?>
						</p>
					</div>
				</div>

			<?php endforeach ?>
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
						<a href="<?php echo base_url(); ?>assets/images/landing/room-1.jpg" class="room image-popup-link" style="background-image: url(<?php echo base_url(); ?>assets/images/landing/room-1.jpg);"></a>
						<div class="desc text-center">
							<span class="rate-star"><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span>
							<h3><a href="#">Suite</a></h3>
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
						<a href="<?php echo base_url(); ?>assets/images/landing/room-2.jpg" class="room image-popup-link" style="background-image: url(<?php echo base_url(); ?>assets/images/landing/room-2.jpg);"></a>
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
						<a href="<?php echo base_url(); ?>assets/images/landing/room-3.jpg" class="room image-popup-link" style="background-image: url(<?php echo base_url(); ?>assets/images/landing/room-3.jpg);"></a>
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
						<a href="<?php echo base_url(); ?>assets/images/landing/room-4.jpg" class="room image-popup-link" style="background-image: url(<?php echo base_url(); ?>assets/images/landing/room-4.jpg);"></a>
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
						<a href="<?php echo base_url(); ?>assets/images/landing/room-5.jpg" class="room image-popup-link" style="background-image: url(<?php echo base_url(); ?>assets/images/landing/room-5.jpg);"></a>
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
						<a href="<?php echo base_url(); ?>assets/images/landing/room-6.jpg" class="room image-popup-link" style="background-image: url(<?php echo base_url(); ?>assets/images/landing/room-6.jpg);"></a>
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
											<figure class="image"><img src="<?php echo base_url(); ?>assets/images/landing/menu-1.jpg" alt="Free Bootstrap Template by colorlib.com"></figure>
											<div class="text">
												<span class="price">$25.99</span>
												<h3>Grilled Pork</h3>
												<p class="cat">Meat / Potatoes / Rice</p>
											</div>
										</li>
										<li>
											<figure class="image"><img src="<?php echo base_url(); ?>assets/images/landing/menu-2.jpg" alt="Free Bootstrap Template by colorlib.com"></figure>
											<div class="text">
												<span class="price">$30.99</span>
												<h3>Tuna Roast Source</h3>
												<p class="cat">Tuna / Potatoes / Rice</p>
											</div>
										</li>
										<li>
											<figure class="image"><img src="<?php echo base_url(); ?>assets/images/landing/menu-3.jpg" alt="Free Bootstrap Template by colorlib.com"></figure>
											<div class="text">
												<span class="price">$40.00</span>
												<h3>Roast Beef (4 sticks)</h3>
												<p class="cat">Crab / Potatoes / Rice</p>
											</div>
										</li>
										<li>
											<figure class="image"><img src="<?php echo base_url(); ?>assets/images/landing/menu-4.jpg" alt="Free Bootstrap Template by colorlib.com"></figure>
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
											<figure class="image"><img src="<?php echo base_url(); ?>assets/images/landing/menu-1.jpg" alt="Free Bootstrap Template by colorlib.com"></figure>
											<div class="text">
												<span class="price">$39.90</span>
												<h3>Fried Potatoes with Garlic</h3>
												<p class="cat">Viggies / Potatoes / Rice</p>
											</div>
										</li>
										<li>
											<figure class="image"><img src="<?php echo base_url(); ?>assets/images/landing/menu-3.jpg" alt="Free Bootstrap Template by colorlib.com"></figure>
											<div class="text">
												<span class="price">$20.99</span>
												<h3>Tuna Roast Source</h3>
												<p class="cat">Tuna / Potatoes / Rice</p>
											</div>
										</li>
										<li>
											<figure class="image"><img src="<?php echo base_url(); ?>assets/images/landing/menu-3.jpg" alt="Free Bootstrap Template by colorlib.com"></figure>
											<div class="text">
												<span class="price">$50.00</span>
												<h3>Roast Beef (4 sticks)</h3>
												<p class="cat">Crab / Potatoes / Rice</p>
											</div>
										</li>
										<li>
											<figure class="image"><img src="<?php echo base_url(); ?>assets/images/landing/menu-4.jpg" alt="Free Bootstrap Template by colorlib.com"></figure>
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
											<figure class="image"><img src="<?php echo base_url(); ?>assets/images/landing/menu-8.jpg" alt="Free Bootstrap Template by colorlib.com"></figure>
											<div class="text">
												<span class="price">$25.00</span>
												<h3>Fried Potatoes with Garlic</h3>
												<p class="cat">Viggies / Potatoes / Rice</p>
											</div>
										</li>
										<li>
											<figure class="image"><img src="<?php echo base_url(); ?>assets/images/landing/menu-9.jpg" alt="Free Bootstrap Template by colorlib.com"></figure>
											<div class="text">
												<span class="price">$20.50</span>
												<h3>Tuna Roast Source</h3>
												<p class="cat">Tuna / Potatoes / Rice</p>
											</div>
										</li>
										<li>
											<figure class="image"><img src="<?php echo base_url(); ?>assets/images/landing/menu-3.jpg" alt="Free Bootstrap Template by colorlib.com"></figure>
											<div class="text">
												<span class="price">$30.00</span>
												<h3>Roast Beef (4 sticks)</h3>
												<p class="cat">Crab / Potatoes / Rice</p>
											</div>
										</li>
										<li>
											<figure class="image"><img src="<?php echo base_url(); ?>assets/images/landing/menu-4.jpg" alt="Free Bootstrap Template by colorlib.com"></figure>
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