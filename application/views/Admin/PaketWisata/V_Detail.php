<!-- Page wrapper  -->
<div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Dashboard</h3> </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                 <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                 <li class="breadcrumb-item active"><a href="<?php echo base_url('Admin/Destinasi'); ?>">Destinasi</a></li>
                 <li class="breadcrumb-item active">Detail</li>               
             </ol>
         </div>
     </div>
     <!-- End Bread crumb -->
     <!-- Container fluid  -->
     <div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row">
            <div class="col-lg-3">
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="testimonial-widget-one p-17">
                        <div class="testimonial-widget-one owl-carousel owl-theme">
                            <?php 
                            // echo "<pre>";
                            // print_r($data);
                            // exit();
                            if(is_array($data) && !empty($data)){
                                foreach ($data as $value) {
                                        # code...
                                    ?>
                                    <div class="item">
                                        <div class="testimonial-conten ">
                                            <img class="img-responsive "  src="<?php echo base_url('assets/images/'.$value['file_name']); ?>" alt="<?php echo $value['file_name']; ?>" />
                                        </div>
                                    </div>

                                    <?php 
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">
                            <?php echo isset($data[0]['nama_paket_wisata']) ? $data[0]['nama_paket_wisata'] : 'Null'; ?></h4>
                            <hr>
                            <p class="card-text">
                                <?php echo isset($data[0]['deskripsi']) ? $data[0]['deskripsi'] : 'Mohon Maaf, Deskripsi tidak bisa ditampilkan'; ?>
                            </p>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Fasilitas -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Fasilitas</h4>
                            <h6 class="card-subtitle">Tambahkan fasilitas atau edit fasilitas untuk paket wisata</h6>
                            <hr>
                            <p class="card-text">

                              <h6>Lokasi Kedatangan  : &nbsp;<b><span id="lokasi-kedatangan-text"><?php echo isset($fasilitas[0]['lokasi_kedatangan']) ? $fasilitas[0]['lokasi_kedatangan'] : "-"; ?></span></b></h6>
                              <h6>Lokasi Keberangkatan  : &nbsp;<b><span id="lokasi-keberangkatan-text"><?php echo isset($fasilitas[0]['lokasi_keberangkatan']) ? $fasilitas[0]['lokasi_keberangkatan'] : "-"; ?></span></b></h6>

                              <span id="deskripsi-fasilitas">
                                  <?php echo isset($fasilitas[0]['deskripsi']) ? $fasilitas[0]['deskripsi'] : ""; ?>                </span>
                              </p>


                          </div>
                      </div>
                  </div>
              </div>

              <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Itinerary</h4>
                            <h6 class="card-subtitle">Tambahkan atau edit itinetary jadwal tour pada paket wisata</h6>
                            <hr>
                            <p class="card-text" >
                              <span id="deskripsi-itinetary">
                                <?php echo isset($itinetary[0]['deskripsi']) ? $itinetary[0]['deskripsi'] : ""; ?>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Detail Harga Paket -->
        <div class="row">
            <div class="col-12 text-center">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-left">Detail Harga Paket </h4>
                        <h6 class="card-subtitle text-left">Daftar harga yang akan ditawarkan berdasarkan jumlah orang</h6>
                        <div class="table-responsive m-t-40">
                            <table id="table-harga" class="table display table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Paket Harga</th>
                                        <th>Jumlah Orang</th>
                                        <th>Harga</th>
                                        <th>Deskripsi</th>
                                        
                                    </tr>
                                </thead>
                                <tbody id="tblHargaDetail">
                                  <?php 
                                  if(!empty($harga_detail) && is_array($harga_detail)){
                                        $i = 1;
                                      foreach ($harga_detail as $value) {
                                          ?>
                                          <tr>
                                            <td><?php echo $i++; ?></td>
                                            <td><?php echo $value['nama_paket_harga']; ?></td>
                                            <td><?php echo $value['jumlah_orang']; ?></td>
                                            <td>Rp. <?php echo number_format($value['harga']); ?> /pax</td>
                                            <td><?php echo $value['deskripsi']; ?></td>    
                                        </tr>
                                        <?php
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php 
        /* Encrypt ID */
            $encrypted_string = $this->encrypt->encode($id);
            $id = str_replace(array('+', '/', '='), array('-', '_', '~'), $encrypted_string);
    ?>
    <a href="<?php echo base_url('Admin/PaketWisata/Edit/'.$id); ?>" class="btn btn-primary"><span></span> Edit</a>
    <!-- End PAge Content -->
</div>
<!-- End Container fluid  -->