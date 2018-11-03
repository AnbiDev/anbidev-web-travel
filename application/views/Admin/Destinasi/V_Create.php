<!-- Page wrapper  -->
<div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Destinasi</h3> </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active"><a href="<?php echo base_url('Admin/Destinasi'); ?>">Destinasi</a></li>
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
                            <h4 class="m-b-0 text-white">Create Destinasi</h4>
                        </div>
                        <div class="card-body">
                            <form action="<?php echo base_url('Admin/Destinasi/Insert'); ?>" method="POST">
                                <div class="form-body">
                                    <h3 class="card-title m-t-15">Tambahkan Destinasi Wisata</h3>
                                    <hr>

                                    <div class="row p-t-20">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Nama Destinasi</label>
                                                <input type="text" name="nama_destinasi" class="form-control" placeholder="Destinasi" required="">
                                                <small class="form-control-feedback text-danger">*wajib diisi</small> 
                                            </div>
                                        </div>
                                    </div>
                                    <!--/row-->  

                                    <!-- row -->
                                    <div class="row">
                                        <div class="col-12">
                                           <label class="control-label">Deskripsi</label>
                                           <div class="form-group">
                                            <textarea class="textarea_editor form-control" name="deskripsi" rows="15" placeholder="Enter text ..." style="height:450px"></textarea>
                                            </div>
                                    </div>
                                </div>

                            </div>
                            <!-- /row -->

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
   
