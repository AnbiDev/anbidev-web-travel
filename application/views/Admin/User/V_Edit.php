<!-- Page wrapper  -->
<div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">User</h3> </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active"><a href="<?php echo base_url('Admin/User'); ?>">User</a></li>
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
                            <h4 class="m-b-0 text-white">Edit User</h4>
                        </div>
                        <div class="card-body">
                            <form action="<?php echo base_url('Admin/User/Update'); ?>" method="POST">
                                <div class="form-body">
                                    <h3 class="card-title m-t-15">Edit</h3>
                                    <hr>

                                    <div class="row p-t-20">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Username</label>
                                                <input type="text" name="username" class="form-control" placeholder="Username" required="" value="<?php echo $data[0]['username']; ?>" >
                                                <small class="form-control-feedback text-danger">*wajib diisi</small> 
                                            </div>
                                        </div>
                                    </div>
                                    <!--/row-->  

                                    <!-- row -->
                                     <div class="row p-t-20">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Level</label>
                                                <select class="form-control" name="level">
                                                    <option value="<?php echo $data[0]['level']; ?>">
                                                        <?php echo ucfirst ( $data[0]['level'] ); ?>
                                                    </option>
                                                    <option value="admin">Admin</option>
                                                    <option value="pegawai">Pegawai</option>
                                                    <option value="manager">Manager</option>
                                                </select>
                                            </div>
                                        </div>
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
   
