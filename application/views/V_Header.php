<!DOCTYPE HTML>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Anbi Travel</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content="" />
	<meta property="og:image" content="" />
	<meta property="og:url" content="" />
	<meta property="og:site_name" content="" />
	<meta property="og:description" content="" />
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="<?php echo base_url('assets/css/font-poppins.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/css/font-playfair-display.css'); ?>" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/animate-landing.css'); ?>">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/icomoon.css'); ?>">

	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css'); ?>">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo base_url('assets/icons/font-awesome/css/font-awesome.min.css'); ?>">

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
	<link rel="stylesheet" href="<?php echo base_url('assets/fonts/flaticon/font/flaticon.css'); ?>">

	<!-- Theme style  -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/style-landing.css'); ?>">

	<!-- Gallery -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/gallery.css') ?>">

	<!-- BaguetteBox -->
	<link href="<?php echo base_url('assets/css/lib/baguettebox/baguetteBox.min.css'); ?>" rel="stylesheet">

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
							<p class="site"><?php echo str_replace("http://", "", base_url()); ?></p>
						</div>
						<div class="col-xs-8 text-right">
							<p class="num">Call: (+62)<?php echo isset($data[0]['no_telp']) ? $data[0]['no_telp'] : '0000-0000-0000'; ?></p>
							<ul class="colorlib-social">
								<li><a href="<?php echo isset($data[0]['twitter_link']) ? 'https://' . $data[0]['twitter_link'] : '#' ?>"><i class="fa fa-twitter"></i></a></li>
								<li><a href="<?php echo isset($data[0]['facebook_link']) ? 'https://' . $data[0]['facebook_link'] : '#' ?>"><i class="fa fa-facebook"></i></a></li>
								<li><a href="<?php echo isset($data[0]['instagram_link']) ? 'https://' . $data[0]['instagram_link'] : '#' ?>"><i class="icon-instagram"></i></a></li>
								<li><a href="<?php echo isset($data[0]['youtube_link']) ? 'https://' . $data[0]['youtube_link'] : '#' ?>"><i class="icon-youtube"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-xs-2">
							<div id="colorlib-logo"><a href="<?php echo base_url('Landing') ?>">Anbi travel</a></div>
						</div>
						<div class="col-xs-10 text-right menu-1">
							<ul>
								<li><a href="<?php echo base_url(); ?>">Home</a></li>
								<li><a href="<?php echo base_url(''); ?>">Paket Wisata</a></li>
								<li><a href="<?php echo base_url(''); ?>">Destinasi Wisata</a></li>
								<li><a href="<?php echo base_url('Gallery') ?>">Galeri</a></li>
								<li><a href="<?php echo base_url('Pemesanan'); ?>">Pemesanan</a></li>
								<li><a href="<?php echo base_url('About'); ?>">About</a></li>
								<li><a href="#">Contact</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>