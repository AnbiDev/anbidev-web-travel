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
                    <li class="breadcrumb-item active">About Web Setting</li>
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
                            <h4 class="m-b-0 text-white"><span class="fa fa-gear"></span>&nbsp;About Setting</h4>
                        </div>
                        <div class="card-body">
                            <form enctype="multipart/form-data" action="<?php echo base_url('Admin/Setting/UpdateMain'); ?>" method="POST">
                                <div class="form-body">
                                    <h3 class="card-title m-t-15">Edit untuk mengubah pengaturan utama pada web</h3>
                                    <hr>

                                    <!-- row -->
                                    <div class="row">
                                        <div class="col-12">
                                           <label class="control-label">About</label>
                                           <div class="form-group">
                                            <textarea class="textarea_editor form-control" name="about" rows="10" placeholder="Enter text ..." style="height:200px">
                                                <?php echo $data[0]['about']; ?>
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

    <!-- Container fluid  -->
    <div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-outline-success">
                    <div class="card-header">
                        <h4 class="m-b-0 text-white"><span class="fa fa-id-badge"></span>&nbsp; Service Setting</h4>
                    </div>
                    <div class="card-body">
                       <div class="form-body" style="padding: 20px;">
                            <div class="row">
                                <div class="col-md-12 text-center ">
                                <small>click to edit</small>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3  text-center">
                                    <div class="services">
                                        <span class="iconku">
                                            <i  class="flaticon-reception"></i>
                                        </span>
                                        <small >change icon</small>

                                        <h3 onclick="editTextJudul(this,1)">24/7 Front Desk</h3>
                                        <p onclick="editText(this,1)">Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p>
                                    </div>
                                </div>
                                <div class="col-md-3  text-center">
                                    <div class="services">
                                        <span class="iconku">
                                            <i class="flaticon-herbs"></i>
                                        </span>
                                        <small >change icon</small>
                                        <h3 onclick="editTextJudul(this,2)" >Spa Suites</h3>
                                        <p onclick="editText(this,2)">Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p>
                                    </div>
                                </div>
                                <div class="col-md-3 text-center">
                                    <div class="services">
                                        <span class="iconku">
                                            <i class="flaticon-car"></i>
                                        </span>
                                        <small >change icon</small>
                                        <h3 onclick="editTextJudul(this,3)">Transfer Services</h3>
                                        <p onclick="editText(this,3)">Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p>
                                    </div>
                                </div>
                                <div class="col-md-3 text-center">
                                    <div class="services">
                                        <span class="iconku">
                                            <i class="flaticon-cheers"></i>
                                        </span>
                                        <small  >change icon</small>
                                        <h3 onclick="editTextJudul(this,4)">Restaurant &amp; Bar</h3>
                                        <p onclick="editText(this,4)" >Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center ">
                                <small><a href="https://www.flaticon.com/" style="color:#2869ff;">see list icon in here</a></p></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
