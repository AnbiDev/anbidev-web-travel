<!-- Page wrapper  -->
<div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Setting</h3> </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active"><a href="<?php echo base_url('Admin/Setting/Main'); ?>">Main</a></li>
                    <li class="breadcrumb-item active">Main Web Setting</li>
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
                            <h4 class="m-b-0 text-white"><span class="fa fa-gears"></span>&nbsp;Main Setting</h4>
                        </div>
                        <div class="card-body">
                            <form enctype="multipart/form-data" action="<?php echo base_url('Admin/Setting/UpdateMain'); ?>" method="POST">
                                <div class="form-body">
                                    <h3 class="card-title m-t-15">Edit untuk mengubah pengaturan utama pada web</h3>
                                    <hr>

                                    <div class="row p-t-20">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Nama</label>
                                                <input type="text" name="nama" class="form-control" placeholder="Nama Web"  value="<?php echo $data[0]['nama']; ?>" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <!--/row-->  

                                    <div class="row p-t-20">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Email</label>
                                                <input type="text" name="email" class="form-control" placeholder="zzz@email.com" required="" value="<?php echo $data[0]['email']; ?>">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">No Telepon</label>
                                                +62  <input type="text" name="no_telp" class="form-control" placeholder="0000 - 0000 - 0000" required="" maxlength="13" value="<?php echo $data[0]['no_telp']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <!--/row-->  

                                    <div class="row p-t-20">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="fa fa-facebook"></label>
                                                <input type="text" name="facebook" class="form-control" placeholder="Facebook" required="" value="<?php echo $data[0]['facebook_link']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                               <label class="fa fa-twitter"></label>
                                               <input type="text" name="twitter" class="form-control" placeholder="Twitter" required="" value="<?php echo $data[0]['twitter_link']; ?>">
                                           </div>
                                       </div>
                                       <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="fa fa-instagram"></label>
                                            <input type="text" name="instagram" class="form-control" placeholder="Instagram" required="" value="<?php echo $data[0]['instagram_link']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="fa fa-youtube"></label>
                                            <input type="text" name="youtube" class="form-control" placeholder="Youtube" required="" value="<?php echo $data[0]['youtube_link']; ?>">
                                        </div>
                                    </div>
                                </div>


                                <div class="row p-t-20">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Alamat</label>
                                            <textarea name="alamat" class="form-control" placeholder="Alamat" required="" style="height:100px;"><?php echo $data[0]['alamat']; ?></textarea> 
                                        </div>
                                    </div>
                                </div>
                                <!--/row--> 

                                <!-- row -->
                                <div class="row">
                                    <div class="col-12">
                                     <label class="control-label">Short Description</label>
                                     <div class="form-group">
                                        <textarea class="textarea_editor form-control" name="short_description" rows="10" placeholder="Enter text ..." style="height:200px">
                                            <?php echo $data[0]['short_description']; ?>
                                        </textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row p-t-20">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="control-label">Logo</label>
                                    <input type="file" name="icon" class="form-control"  onchange="readURL(this)">
                                    <small class="form-control-feedback text-danger">* 400 x 200 pixel</small>
                                </div>
                            </div>
                            <div class="col-md-3" style="width: 400px;height: 200px;">
                              <div class="form-group" >
                               <img  class="blah" src="<?php echo base_url('assets/images/'.$data[0]['logo']); ?>" alt="Logo Gambar" style="width: 400px; height: 200px;">
                           </div>
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