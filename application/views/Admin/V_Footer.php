<!-- footer -->
<footer class="footer"> © 2018 All rights reserved. Template designed by <a href="https://colorlib.com">Colorlib</a></footer>
<!-- End footer -->
</div>
<!-- End Page wrapper  -->
</div>
<!-- End Wrapper -->

<!-- All Jquery -->
<script src="<?php echo base_url('assets/js/lib/jquery/jquery.min.js'); ?>"></script>

<!-- Bootstrap tether Core JavaScript -->
<script src="<?php echo base_url('assets/js/lib/bootstrap/js/popper.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/lib/bootstrap/js/bootstrap.min.js'); ?>"></script>

<!-- slimscrollbar scrollbar JavaScript -->
<script src="<?php echo base_url('assets/js/jquery.slimscroll.js'); ?>"></script>

<!--Menu sidebar -->
<script src="<?php echo base_url('assets/js/sidebarmenu.js'); ?>"></script>

<!--stickey kit -->
<script src="<?php echo base_url('assets/js/lib/sticky-kit-master/dist/sticky-kit.min.js'); ?>"></script>

<!-- wysihtml5. -->
<script src="<?php echo base_url('assets/js/lib/html5-editor/wysihtml5-0.3.0.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/lib/html5-editor/bootstrap-wysihtml5.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/lib/html5-editor/wysihtml5-init.js'); ?>"></script>

<!--Custom JavaScript -->


<!-- Amchart -->
<script src="<?php echo base_url('assets/js/lib/morris-chart/raphael-min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/lib/morris-chart/morris.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/lib/morris-chart/dashboard1-init.js'); ?>"></script>


<script src="<?php echo base_url('assets/js/lib/calendar-2/moment.latest.min.js'); ?>"></script>
<!-- scripit init-->
<!-- <script src="<?php echo base_url('assets/js/lib/calendar-2/semantic.ui.min.js'); ?>"></script> -->
<!-- scripit init-->
<script src="<?php echo base_url('assets/js/lib/calendar-2/prism.min.js'); ?>"></script>
<!-- scripit init-->
<script src="<?php echo base_url('assets/js/lib/calendar-2/pignose.calendar.min.js'); ?>"></script>
<!-- scripit init-->
<script src="<?php echo base_url('assets/js/lib/calendar-2/pignose.init.js'); ?>"></script>

<script src="<?php echo base_url('assets/js/lib/owl-carousel/owl.carousel.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/lib/owl-carousel/owl.carousel-init.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/scripts.js'); ?>"></script>
<!-- scripit init-->

<!-- Datatable -->
<script src="<?php echo base_url('assets/js/lib/datatables/datatables.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/lib/datatables/datatables-init.js'); ?>"></script>

<!-- Dropzone -->
<script src="<?php echo base_url('assets/js/lib/dropzone/dropzone.js'); ?>"></script>

<!-- Toastr -->
<script src="<?php echo base_url('assets/js/lib/toastr/toastr.min.js'); ?>"></script>


<!-- Pace Loading Bar -->
<!-- <script src="<?php echo base_url('assets/js/lib/preloader/pace.min.js'); ?>"></script> -->

<!--costum -->
<script src="<?php echo base_url('assets/js/custom.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/custom.js'); ?>"></script>
<script type="text/javascript" > console.log('dsasdasds'); </script>

<script type="text/javascript">
    <?php if($this->session->flashdata('success')){ ?>

        toastr.success("<?php echo $this->session->flashdata('success'); ?>",'Success',{
            timeOut: 8000,
            "closeButton": true,
            "debug": false,
            "newestOnTop": true,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": true,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut",
            "tapToDismiss": false

        });

        <?php }elseif($this->session->flashdata('error')){ ?>

            toastr.error("<?php echo $this->session->flashdata('error'); ?>",'Error',{
                "positionClass": "toast-top-right",
                timeOut: 8000,
                "closeButton": true,
                "debug": false,
                "newestOnTop": true,
                "progressBar": true,
                "preventDuplicates": true,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut",
                "tapToDismiss": false

            });
            
            <?php } ?>

        </script>
    </body>

    </html>