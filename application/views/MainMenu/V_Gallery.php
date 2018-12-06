<div id="colorlib-testimony" class="colorlib-light-grey">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span>
						<h2>Galeri</h2>
						<p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					</div>
				</div>
<div class="row">
	<div class="col-md-12 animate-box">

		<div class="baguetteBoxOne">
			<?php if (!empty($gallery) && is_array($gallery) ): ?>
			<?php foreach ($gallery as $key => $value): ?>
				
			
			<!-- <img class="animate-box gambar" src="assets/images/<?php echo $data['file_name']; ?>" alt="<?php echo $value['file_name']; ?>" style="width: 100%;">
 -->
		
                                <div class="col-md-5 gallery">


<a href="<?php echo base_url('assets/images/'.$value['file_name']); ?>" data-caption="<?php echo $value['judul']; ?>">
	<img class="animate-box gambar" src="assets/images/<?php echo $value['file_name']; ?>" alt="<?php echo $value['file_name']; ?>" style="width: 100%;">


                                    </a>
                                 </div>
                            
			
			<?php endforeach ?>				
			<?php endif ?>
		</div>
     </div>

		</div>

		<!-- <div class="column">
			<?php 

			$sql = mysqli_query($koneksi, "SELECT * FROM tbl_gambar WHERE (id_gambar % 2) > 0");
			while ($data = mysqli_fetch_assoc($sql)) {
			?>

			<img class="animate-box gambar" src="assets/images/<?php echo $data['file_name']; ?>" alt="<?php echo $data['file_name']; ?>" style="width: 100%;">

			<?php } ?>
		</div> -->
	</div>
</div>
</div>
</div>
</div>
</div>