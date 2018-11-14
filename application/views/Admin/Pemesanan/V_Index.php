<!-- Page wrapper  -->
<div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Dashboard</h3> </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Pemesanan</li>
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

                            <h4 class="card-title">Pemesanan</h4>
                            <a href="<?php echo base_url('Admin/Pemesanan/Create'); ?>" class="btn btn-primary btn-lg float-right btn-rounded"><span class="fa fa-plus"></span></a>
                            <h6 class="card-subtitle">Menampilkan Semua Data Pemesanan</h6>
                            <div class="table-responsive m-t-40">
                                <table id="myTable" class="table table-bordered table-striped"> 
                                    <thead>
                                        <tr>
                                            <th style="width:10%;text-align: center;">No</th>
                                            <th style="width:70%;">Nama</th>
                                            <th style="width:20%;">Paket Wisata</th>
                                            <th style="width:70%;">Alamat</th>
                                            <th style="width:70%;">No Telepon</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; 

                                        if(!empty($data) && is_array($data)){
                                            foreach ($data as $value) {   
                                                /* Encrypt ID */
                                                $encrypted_string = $this->encrypt->encode($value['id_pemesanan']);
                                                $id = str_replace(array('+', '/', '='), array('-', '_', '~'), $encrypted_string);
                                                ?>
                                                <tr>
                                                    <td style="text-align: center;"><?php echo $i++; ?></td>
                                                    <td><?php echo $value['nama_pemesanan']; ?></td>
                                                    <td style="text-align: center;">
                                                        <a href="<?php echo base_url('Admin/Pemesanan/Detail/'.$id); ?>" class="btn btn-success " alt="Detail"><span class="fa fa-eye"></span></a>
                                                        <a href="<?php echo base_url('Admin/Pemesanan/Edit/'.$id); ?>" class="btn btn-warning " alt="Edit"><span class="fa fa-pencil"></span></a>
                                                        <button class="btn btn-danger" onclick="deleteThis('<?php echo base_url('Admin/Pemesanan/Delete/'.$id); ?>')" alt="Delete"><span class="fa fa-trash"></span></button>
                                                    </td>
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
            <!-- End PAge Content -->
        </div>
            <!-- End Container fluid  -->