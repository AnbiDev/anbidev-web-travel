 <div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Dashboard</h3> </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active"><a href="<?php echo base_url('Admin/Gallery'); ?>">Gallery</a></li>
                    <li class="breadcrumb-item active"><a href="#" >Create / Edit</a></li>
                    <li class="breadcrumb-item active">Image</li>
                </ol>
            </div>
        </div>
        <!-- End Bread crumb -->
        <!-- <div class="pace"></div> -->
        <!-- Container fluid  -->
        <div class="container-fluid">
            <!-- Start Page Content -->
            
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Gambar</h4>
                            <div class="row">

                               <!--  <?php 
                                if(is_array($image) && !empty($image)){
                                    foreach ($image as $value) {
                                        # code...
                                        ?>

    <div class="col-md-3 col-sm-4 col-xs-6 text-center">
        <img class="img-responsive" src="<?php echo base_url('assets/images/'.$value['file_name']); ?>"  />
    

    <button onclick="removeFile('<?php echo $value['token']; ?>','<?php echo base_url('Admin/Destinasi/RemoveImage'); ?>',this)" class="btn btn-danger btn-sm" style="margin-top:10px">Remove</button> 
    
                                        </div>
                                        <?php
                                    }
                                }
                                ?> -->
                            </div>
                            <h6 class="card-subtitle">Upload gambar untuk ke dalam untuk menambah image di gallery.</h6>
                            
                            <div class="dropzone">
                                <div class="dz-message">
                                    <h3> Klik atau Drop gambar disini</h3>
                                </div>
                                <!-- <div class="fallback">
                                    <input name="file" type="file" multiple/>
                                </div> -->
                            </div>
                            <div class="row">
                                <div class="col-md-12" style="padding: 10px;">
                                    <a href="<?php echo base_url('Admin/Gallery/goAhead/'.$message); ?>" class="btn btn-success btn-lg">Finish</a>
                                    <button type="button" class="btn btn-inverse" onclick="window.history.go(-1)">Cancel</button>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- End PAge Content -->
        </div>
        <!-- End Container fluid  -->
    </div>
        <!-- End Page wrapper  -->