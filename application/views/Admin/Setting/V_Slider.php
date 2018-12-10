<div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Dashboard</h3> </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Destinasi</li>
                </ol>
            </div>
        </div>
        <!-- End Bread crumb -->
        <!-- Container fluid  -->
        <div class="container-fluid">
            <!-- Start Page Content -->
            <div class="row">
                <div class="col-md-12">
                
                <a href="<?php echo base_url('Admin/Setting/SliderAdd'); ?>" class="btn btn-success  float-right"><span class="fa fa-plus"></span>&nbsp; Tambah</a>

                <!-- <a href="<?php echo base_url('Admin/Gallery/All'); ?>" class="btn btn-primary  float-right" style="margin-right:20px;"><span class="fa fa-camera" ></span>&nbsp; Semua Gambar</a> -->
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">

                    <div class="card">
                        <div class="card-body">
                            
                            <h4 class="card-title">Image Slider</h4>
                            <div class="baguetteBoxOne">
                               <div class="row">
                               <?php $i = 1; 

                               if(!empty($data) && is_array($data)){
                                foreach ($data as $value) {   
                                        
                                    // if(++$i > 5){
                                    //     break;
                                    // }

                                    /* Encrypt ID */
                                    $encrypted_string = $this->encrypt->encode($value['id_gambar']);
                                    $id = str_replace(array('+', '/', '='), array('-', '_', '~'), $encrypted_string);
                                    ?>
                                <div class="col-md-4 gallery">


<a href="<?php echo base_url('assets/images/'.$value['file_name']); ?>" data-caption="<?php echo $value['judul']; ?>">
<img src="<?php echo base_url('assets/images/'.$value['file_name']); ?>" title="<?php echo $value['judul']; ?>" alt="<?php echo $value['file_name']; ?>"">


                                    </a>
                                    <div class="row ">
                                        <div class="col-md-12 text-center">
  
<button class="btn btn-primary btn-sm" title="Edit Title" onclick="editTitle(this,'<?php echo $value['id_gallery']; ?>')"><span class="fa fa-pencil"></span></button>

<button class="btn btn-danger btn-sm"  title="Remove Image" onclick="removeFile('<?php echo $value['token'] ?>','<?php echo base_url('Admin/Gallery/Delete'); ?>',this)"><span class="fa fa-trash"></span></button>

<input type="text" name="edit-title" style="display: none;" onchange="addTitleGallery(this,'<?php echo $value['token'] ?>')" placeholder="Edit Title" id="edit-title"/>

                                        </div>
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

                </div>
            </div>
            <!-- End Page Content -->
        </div>
            <!-- End Container fluid 