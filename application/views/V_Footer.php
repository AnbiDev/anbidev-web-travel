		<footer id="colorlib-footer" role="contentinfo">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-3 colorlib-widget">
						<h4><?php echo isset($data[0]['nama']) ? $data[0]['nama'] : 'Nandemonaiya'; ?></h4>
						<p><?php echo isset($data[0]['short_description']) ? $data[0]['short_description'] : 'desc cannot be displayed' ; ?></p>
						<p>
							<ul class="colorlib-social-icons">

<li><a href="<?php echo isset($data[0]['twitter_link']) ? 'https://'.$data[0]['twitter_link']: '#' ?>"><i class="fa fa-twitter"></i></a></li>
<li><a href="<?php echo isset($data[0]['facebook_link']) ? 'https://'.$data[0]['facebook_link'] : '#' ?>"><i class="fa fa-facebook"></i></a></li>
<li><a href="<?php echo isset($data[0]['instagram_link']) ? 'https://'.$data[0]['instagram_link'] : '#' ?>"><i class="icon-instagram"></i></a></li>
<li><a href="<?php echo isset($data[0]['youtube_link']) ? 'https://'.$data[0]['youtube_link'] : '#' ?>"><i class="icon-youtube"></i></a></li>

							</ul>
						</p>
					</div>
					<div class="col-md-3 colorlib-widget">
						<h4>Quick Links</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="#">Destination</a></li>
								<li><a href="#">Paket Wisata</a></li>
								<li><a href="#">Gallery</a></li>
								<li><a href="#">About</a></li>
							</ul>
						</p>
					</div>
					<div class="col-md-3">
						<h4>Recents Gallery Image</h4>
						<aside id="colorlib-hero" style="min-height: 310px;">
						<div class="flexslider" style="min-height: 310px;">
							<ul class="slides" style="min-height: 310px;">

								<?php if (!empty($gallery) && is_array($gallery)): ?>
								<?php foreach ($gallery as $value): ?>
								<li style="min-height: 310px;height: 310px;background-image: url(<?php echo base_url(); ?>assets/images/<?php echo $value['file_name']; ?>);" >
									<div class="overlay"></div>
								</li>	
								<?php endforeach ?>
								<?php endif ?>
								
							</ul>
						</div>
					</div>
					</aside>
					<div class="col-md-3 col-md-push-1">
						<h4>Contact Information</h4>
						<ul class="colorlib-footer-links">
					<li><?php echo isset($data[0]['alamat']) ? $data[0]['alamat'] : 'Unknown'; ?></li>
<li><a href="<?php echo isset($data[0]['no_telp']) ? 'https://wa.me/'.$data[0]['no_telp'] : '0000-0000-0000' ;?>">
						(+62) <?php echo isset($data[0]['no_telp']) ? $data[0]['no_telp'] : '0000-0000-0000' ;?>
						</a>
					</li>
<li><a href="<?php echo isset($data[0]['email']) ? 'mailto:'.$data[0]['email'] : 'unknown@unknown.com' ;?>">
					<?php echo isset($data[0]['email']) ? $data[0]['email'] : 'unknown@unknown.com' ;?>
						</a>
					</li>
					<li>
					<a href="<?php echo base_url(); ?>">
							<?php echo str_replace("http://", "", base_url()); ?>
						</a>
					</li>
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
	<!-- Gallery -->

    <script src="<?php echo base_url('assets/js/masonry.pkgd.min.js'); ?>"></script>
    <script>
        $(window).on('load', function(){
            $('div.masonry-container').masonry({
                columnWidth: 'img.masonry-block',
                itemSelector: 'img.masonry-block'
            });
        });
    </script> 
	</body>
</html>

