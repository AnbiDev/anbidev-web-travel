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
                            if(is_array($image) && !empty($image)){
                                foreach ($image as $value) {
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
                        <?php echo isset($data[0]['nama_destinasi']) ? $data[0]['nama_destinasi'] : 'Null'; ?></h4>
                        <hr>
                        <p class="card-text">
                            <?php echo isset($data[0]['nama_destinasi']) ? $data[0]['deskripsi'] : 'Mohon Maaf, Deskripsi tidak bisa ditampilkan'; ?>
                        </p>
                        <a href="<?php echo base_url('Admin/Destinasi/Edit/'.$id); ?>" class="btn btn-primary"><span></span> Edit</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End PAge Content -->
    </div>
<!-- End Container fluid  -->