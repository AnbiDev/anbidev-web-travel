<div class="gallery">
	
	<div class="header">
		<h1>Testimoni Gambar</h1>
	</div>

	<div class="row">
		<div class="column">
			<?php 

			$koneksi = mysqli_connect("localhost","root","","db_travel");
			$sql = mysqli_query($koneksi, "SELECT * FROM tbl_gambar WHERE (id_gambar % 2) = 0");
			while ($data = mysqli_fetch_assoc($sql)) {
			?>

			<img src="assets/images/<?php echo $data['file_name']; ?>" alt="<?php echo $data['file_name']; ?>" style="width: 100%;">

			<?php } ?>
		</div>

		<div class="column">
			<?php 

			$koneksi = mysqli_connect("localhost","root","","db_travel");
			$sql = mysqli_query($koneksi, "SELECT * FROM tbl_gambar WHERE (id_gambar % 2) > 0");
			while ($data = mysqli_fetch_assoc($sql)) {
			?>

			<img src="assets/images/<?php echo $data['file_name']; ?>" alt="<?php echo $data['file_name']; ?>" style="width: 100%;">

			<?php } ?>
		</div>
	</div>

</div>