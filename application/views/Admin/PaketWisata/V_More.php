<!-- Page wrapper  -->
<div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Tambahan</h3> </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active"><a href="<?php echo base_url('Admin/PaketWisata'); ?>">Paket Wisata</a></li>
                    <li class="breadcrumb-item active"><a href="<?php echo base_url('Admin/PaketWisata/Edit/'.$id_paket_wisata); ?>">Create</a></li>
                </ol>
            </div>
        </div>
        <!-- End Bread crumb -->
        <!-- Container fluid  -->
        <div class="container-fluid">
            <!-- Start Page Content -->
            
            <!-- Fasilitas -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Fasilitas</h4>
                            <h6 class="card-subtitle">Tambahkan fasilitas atau edit fasilitas untuk paket wisata</h6>
                            <hr>
                            <p class="card-text">

                            </p>
                            <button class="btn btn-primary"><span></span> Edit</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Fasilitas -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Itinerary</h4>
                            <h6 class="card-subtitle">Tambahkan atau edit itinerary jadwal tour pada paket wisata</h6>
                            <hr>
                            <p class="card-text">

                            </p>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#fasilitasModal" data-whatever="<?php echo $id_paket_wisata; ?>">Edit</button>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Detail Harga Paket -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Detail Harga Paket </h4>
                            <button class="btn btn-primary float-right btn-rounded">Tambah</button>
                            <h6 class="card-subtitle">Daftar harga yang akan ditawarkan berdasarkan jumlah orang</h6>
                            <div class="table-responsive m-t-40">
                                <table id="table-harga" class="table display table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Nama Paket Harga</th>
                                            <th>Jumlah Orang</th>
                                            <th>Harga</th>
                                            <th>Deskripsi</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<div class="modal fade" id="fasilitasModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
               <div class="modal-content">
                 <div class="modal-header">
                   <h5 class="modal-title" id="exampleModalLabel">Fasilitas</h5>
                   <button type="button" class="close tutup" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
        <form action="#" id="fasilitasi-form">
             <div class="modal-body">
                <input type="hidden" value="" id="id_paket_wisata">
                <div class="form-group">
                   <label for="lokasi_kedatangan" class="col-form-label">Lokasi Kedatangan :</label>
                   <input type="text" class="form-control" id="lokasi_kedatangan" name="lokasi_kedatangan" >
                </div>
                 <div class="form-group">
                   <label for="lokasi_keberangkatan" class="col-form-label">Lokasi Keberangkatan :</label>
                   <input type="text" class="form-control" id="lokasi_keberangkatan" name="lokasi_keberangkatan">
                </div>
               <div class="form-group">
                   <label for="message-text" class="col-form-label">Deskripsi:</label>
                   <div class="form-group">
                       <textarea class="textarea_editor form-control" name="deskripsi" rows="15" placeholder="Enter text ..." style="height:150px">
                       </textarea>
                   
                    </div>
           
               </div>
           </div>
       <div class="modal-footer">
           <button type="button" class="btn btn-secondary tutup" data-dismiss="modal">Close</button>
           <button type="submit" class="btn btn-primary">Save</button>
       </div>
       </form>
    </div>
</div>
</div>
</div>