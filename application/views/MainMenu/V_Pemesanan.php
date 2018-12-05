<div id="colorlib-testimony" class="colorlib-light-grey">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span>
						<h2>Pemesanan</h2>
						<p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					</div>
				</div>
<div class="row">
	<div class="col-md-12 animate-box">
		<div class="testimony">
			<form action="<?php echo base_url('Admin/Pemesanan/Insert'); ?>" method="POST">
				<div class="row form-group">
					<div class="col-md-12">
						<label>Nama</label>
						<input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required="">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-md-6">
						<label>Email</label>
						<input type="email" name="email" class="form-control" placeholder="Alamat Email">
					</div>
					<div class="col-md-6">
						<label>No Telepon</label>
						<input type="text" name="no_telepon" class="form-control" placeholder="No Telepon" required="">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-md-12">
						<label>Alamat</label>
						<input type="text" name="alamat" class="form-control" placeholder="Alamat" required="">
					</div>
				</div>
				<div class="form-group row">
					<div class="col-lg-12">
                    <label>Paket Wisata</label>
                    <select class="form-control" name="id_paket_wisata" placeholder="Paket Wisata" required="">
                            <?php if (!empty($paket_wisata) && is_array($paket_wisata)): ?>
                            <?php foreach ($paket_wisata as $value): ?>
                            
                            <option value="<?php echo $value['id_paket_wisata'] ?>"><?php echo $value['nama_paket_wisata']; ?></option>
                           	
                        	<?php endforeach ?>
                        	 <?php endif ?>
                        </select>
                    </div>
                </div>
				<div class="row form-group">
					<div class="col-md-12">
						<label for="message">Catatan</label>
						<textarea name="message" cols="30" rows="7" class="form-control" placeholder="Tambahkan catatan untuk agen.."></textarea>
					</div>
				</div>
				<div class="form-actions">
					<button type="submit" class="btn btn-success">Pesan</button>
					<button type="button" class="btn btn-inverse" onclick="window.history.go(-1)">Cancel</button>
				</div>
				<input type="hidden" name="level" value="user">
			</form>		
		</div>
</div>
	</div>
</div>
</div>