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
                    <li class="breadcrumb-item active">Slidder Web Setting</li>
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
                            <h4 class="m-b-0 text-white"><span class="fa fa-gear"></span>&nbsp;Slidder Add</h4>
                        </div>
                        <div class="card-body">
                        <form enctype="multipart/form-data" action="<?php echo base_url('Admin/Setting/UploadSlider'); ?>" method="POST">
                                <div class="form-body">
                                    <h3 class="card-title m-t-15">Tambah gambar serta deskripsi di slidder main menu</h3>
                                    <hr>

                                    <!-- row -->
                                    <div class="row">
                                        <div class="col-12">
                                         <label class="control-label">Gambar</label>
                                         <div class="col-md-6" >
                                            <div class="form-group" >
                                                <img  class="blah"  alt="Slider Gambar" style="width:100%;height: auto;">
                                            </div>
                                        </div>
                                        <div class="col-md-6" >
                                         <div class="form-group">
                                             <input type="file" onchange="readURL(this)" name="gambar" class="form-control" required="">
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <!-- row -->
                             <div class="row">
                                <div class="col-12">
                                 <div class="form-group">
                                     <input type="text" name="judul" class="form-control" placeholder="Judul" required="">
                                 </div>
                             </div>
                         </div>
                         <!-- row -->
                         <div class="row">
                            <div class="col-12">

                             <div class="form-group">
                                 <input type="text" name="deskripsi" class="form-control" placeholder="Deskripsi" required="">
                             </div>
                         </div>
                     </div>
                     <!-- row -->
                     <div class="row">
                        <div class="col-12">

                         <div class="form-group">
                             <input type="text" name="link_to" class="form-control" placeholder="Link To" >
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

