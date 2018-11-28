<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title>Login</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>assets/css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/css/helper-login.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/style-login.css" rel="stylesheet">

    <!-- Toastr -->
    <link href="<?php echo base_url('assets/css/lib/toastr/toastr.min.css'); ?>" rel="stylesheet">
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    <style>
        body {
            background-color: #420089;
        }
    </style>
</head>

<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <!-- <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div> -->
    <!-- Main wrapper  -->
    <div id="main-wrapper">

        <div class="unix-login">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="login-content card">
                            <div class="login-form">
                                <h4>Login</h4> 
                                <form action="<?php echo base_url('Login/ceklogin'); ?>" method="post" accept-charset="utf-8">
                                    <div class="form-group">
                                        <input type="text" name="username" class="form-control" placeholder="Masukkan Username">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control" placeholder="Masukkan Password">
                                    </div>
                                    <div>
                                        <input type="submit" name="login" value="Login" class="btn btn-primary btn-flat m-b-30 m-t-30">
                                    </div>
                                    <div>
                                        <a href="<?php echo base_url(''); ?>"> Back</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="<?php echo base_url(); ?>assets/js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/lib/bootstrap/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/jquery-login.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url(); ?>assets/js/sidebarmenu-login.js"></script>
    <!--stickey kit -->
    <script src="<?php echo base_url(); ?>assets/js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/custom-login.min.js"></script>
    
    <!-- Toastr -->
    <script src="<?php echo base_url('assets/js/lib/toastr/toastr.min.js'); ?>"></script>
    
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