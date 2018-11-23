<!-- Page wrapper  -->
<div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">ContactUs</h3> </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active"><a href="<?php echo base_url('Admin/ContactUs'); ?>">ContactUs</a></li>
                    <li class="breadcrumb-item active">Edit</li>
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
                            <h4 class="m-b-0 text-white">Edit ContactUs</h4>
                        </div>
                        <div class="card-body">
                            <form action="<?php echo base_url('Admin/ContactUs/Update'); ?>" method="POST">
                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                                <div class="form-body">
                                    <h3 class="card-title m-t-15">Tambahkan ContactUs Wisata</h3>
                                    <hr>
                                    
                                    <div class="row ">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Nama</label>
                                                <input type="text" name="nama" class="form-control" placeholder="Nama" required="" value="<?php echo $data[0]['nama']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <!--/row-->  

                                    <div class="row ">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Email</label>
                                                <input type="email" name="email" class="form-control" placeholder="Email" required="" value="<?php echo $data[0]['email']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <!--/row-->  

                                    <!-- row -->
                                    <div class="row">
                                        <div class="col-12">
                                         <label class="control-label">Pesan</label>
                                         <div class="form-group">
                                            <textarea class="textarea_editor form-control" name="pesan" rows="15" placeholder="Enter Text Here..." style="height:450px">
                                               <?php echo $data[0]['pesan']; ?>
                                            </textarea>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12 " style="padding: 10px;">
                                    <?php 
                                    /* Encrypt ID */
                                    $encrypted_string = $this->encrypt->encode($id);
                                    $id = str_replace(array('+', '/', '='), array('-', '_', '~'), $encrypted_string);
                                    ?>
                                    <a href="<?php echo base_url('Admin/ContactUs/Image/'.$id.'/edit'); ?>" class="btn btn-primary float-right"><span class="fa fa-camera"></span>&nbsp;Edit Gambar</a>
                                </div>
                            </div>
                            <!-- /row -->

                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Update</button>
                            <button type="button" class="btn btn-inverse" onclick="window.history.go(-1)">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

