<!-- Page wrapper  -->
<div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Dashboard</h3> </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                 <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                 <li class="breadcrumb-item active"><a href="<?php echo base_url('Admin/ContactUs'); ?>">ContactUs</a></li>
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
<a href='<?php echo "mailto:".$data[0]['email']; ?>'><span class="badge badge-primary"><?php echo isset($data[0]['email']) ? $data[0]['email'] : 'Null'; ?> </span></h4>
                            <hr>
                            <p class="card-text">
                                <?php echo isset($data[0]['pesan']) ? $data[0]['pesan'] : 'Mohon Maaf, Deskripsi tidak bisa ditampilkan'; ?>
                            </p>

                            <?php 
                            /* Encrypt ID */
                            $encrypted_string = $this->encrypt->encode($id);
                            $id = str_replace(array('+', '/', '='), array('-', '_', '~'), $encrypted_string);

                            ?>
                           <!--  <a href="<?php echo base_url('Admin/ContactUs/Edit/'.$id); ?>" class="btn btn-primary"><span></span> Edit</a> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End PAge Content -->
        </div>
<!-- End Container fluid  -->