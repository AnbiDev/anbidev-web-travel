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
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">
                            <?php echo isset($data[0]['nama']) ? $data[0]['nama'] : 'Null'; ?> || 

                              <?php 

                    $encrypted_string_2 = $this->encrypt->encode($data[0]['id_paket_wisata']);
                    $id_paket_wisata = str_replace(array('+', '/', '='), array('-', '_', '~'), $encrypted_string_2);
                              ?>
                    <a target="_blank" href="<?php echo base_url('Admin/PaketWisata/Detail/'.$id_paket_wisata); ?>">
                    <span class="badge badge-danger"><?php echo isset($data[0]['nama_paket_wisata']) ? $data[0]['nama_paket_wisata'] : 'Null'; ?></span> </a>

                        </h4>
        
        <h5 class="card-subtitle"><?php echo  date_format(date_create($data[0]['tanggal']),'l,d F Y h:i:s'); ?></h5>
                            
                            <hr>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <h4>Email : &nbsp;</h4><a style="color: magenta" href="<?php echo 'mailto:'.$data[0]['email']; ?> "><?php echo isset($data[0]['email']) ? $data[0]['email'] : 'Mohon Maaf, Deskripsi tidak bisa ditampilkan'; ?></a>
                                </div>

                                <div class="col-md-6">
                                    <h4>No Telepon :  &nbsp;</h4><a style="color: magenta" href="<?php echo 'tel:'.$data[0]['no_telepon']; ?> "><?php echo isset($data[0]['no_telepon']) ? $data[0]['no_telepon'] : 'Mohon Maaf, Deskripsi tidak bisa ditampilkan'; ?></a>
                                </div>
                            </div>

                            <div class="row" style="margin-top: 20px;">
                                <div class="col-md-6">
                                    <h4>Alamat : &nbsp;</h4><?php echo isset($data[0]['alamat']) ? $data[0]['alamat'] : 'Mohon Maaf, Deskripsi tidak bisa ditampilkan'; ?>
                                </div>
                            </div>

                            <div class="row" style="margin-top: 20px;">
                                <div class="col-md-6">
                                    <h4>Catatan : &nbsp;</h4><?php echo isset($data[0]['pesan']) ? $data[0]['pesan'] : 'Mohon Maaf, Deskripsi tidak bisa ditampilkan'; ?>
                                </div>
                            </div>
                            <!-- <?php 
                            /* Encrypt ID */
                            $encrypted_string = $this->encrypt->encode($id);
                            $id = str_replace(array('+', '/', '='), array('-', '_', '~'), $encrypted_string);

                            ?>
                            <a href="<?php echo base_url('Admin/Destinasi/Edit/'.$id); ?>" class="btn btn-primary"><span></span> Edit</a> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End PAge Content -->
        </div>
<!-- End Container fluid  -->