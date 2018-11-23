<!-- Page wrapper  -->
<div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Pemesanan</h3> </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active"><a href="<?php echo base_url('Admin/Pemesanan'); ?>">Pemesanan</a></li>
                    <li class="breadcrumb-item active">Create</li>
                </ol>
            </div>
        </div>
        <!-- End Bread crumb -->
        <!-- Container fluid  -->
        <div class="container-fluid">
            <!-- Start Page Content -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-outline-primary">
                        <div class="card-header">
                            <h4 class="m-b-0 text-white">Create Pemesanan</h4>
                        </div>
                        <div class="card-body">
                            <form action="<?php echo base_url('Admin/Pemesanan/Insert'); ?>" method="POST">
                                <div class="form-body">
                                    <h3 class="card-title m-t-15">Tambahkan Pemesanan Wisata</h3>
                                    <hr>

                                    <div class="row p-t-20">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Nama</label>
                                                <input type="text" name="nama" class="form-control" placeholder="Nama" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <!--/row-->  

                                    <div class="row p-t-20">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Email</label>
                                                <input type="email" name="email" class="form-control" placeholder="Email" required="">
                                            </div>
                                        </div>

                                         <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">No Telepon</label>
                                                <input type="text" name="no_telepon" class="form-control" placeholder="No Telepon" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <!--/row-->  

                                    <div class="row p-t-20">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Alamat</label>
                                                <input type="text" name="alamat" class="form-control" placeholder="Alamat" required="">
                                        </div>
                                    </div>
                                </div>
                                    <!--/row-->  


                                   <div class="row p-t-20">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Paket Wisata</label>
                                                <select name="id_paket_wisata"  class="form-control select2" placeholder="Paket Wisata" required="">
                                                    <?php  
                                                        if(!empty($paket_wisata) && is_array($paket_wisata)){
                                                            foreach ($paket_wisata as $value) {
                                                    ?>

    <option value="<?php echo $value['id_paket_wisata']; ?>"><?php echo $value['nama_paket_wisata']; ?></option>

                                                    <?php
                                                            }
                                                        }
                                                    ?>
                                                </select>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <!--/row--> 

                                    <div class="row p-t-20">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Catatan</label>
                                                <textarea  style="height: 200px;" cols=30 rows=10 name="pesan" class="form-control" placeholder="Pemesanan">

                                                </textarea> 
                                            </div>
                                        </div>
                                    </div>
                                    <!--/row-->

                        
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                            <button type="button" class="btn btn-inverse" onclick="window.history.go(-1)">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>