<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title; ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/dist/css/MercuryGMS.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/plugins/iCheck/square/blue.css">
  <!-- bootstrap admin css -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/modern/dist/css/sb-admin-2.min.css">
   <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

</head>
<body class="bg-gradient-dark">
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center mt-5">
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <!-- Background Image -->
                            <div class="col-lg-13 d-lg-block">
                                <img src="<?php echo base_url(); ?>assets/backend/dist/img/dorm-login-bg.jpg" class="img-fluid" alt="Background Image">
                            </div>
                            <!-- Form Section -->
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-dark mb-4">Hello there!</h1>
                                    </div>
                                    <p class="login-box-msg text-dark" id="loginmsg"><?php echo $lang['sign_in_title']; ?></p>
                                    
                                    <?php 
                                    echo validation_errors('<p class="alert alert-danger">'); 
                                    
                                    if ($errmsg == 'err1') {
                                        echo "<p class='alert alert-danger'>".$lang['invalid_login']."</p>";
                                    }

                                    $attributes = array('id' => 'login');
                                    echo form_open_multipart("admin/ulogin", $attributes); 
                                    ?>
                                    
                                    <div class="form-group">
                                        <input type="email" name="user_email" class="form-control form-control-user" placeholder="<?php echo $lang['email']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="user_password" class="form-control form-control-user" placeholder="<?php echo $lang['password']; ?>">
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        <?php echo $lang['signin']; ?>
                                    </button>
                                    </form>
                                    
                                    <hr>
                                    
                                    <?php
                                    if (isset($options['enable_registration']) && $options['enable_registration'] == true) {
                                    ?>
                                    <div class="text-center">
                                    <a class="small" href="<?php echo $burl; ?>admin/register">
                                    Create an Account!
                                    </a> </br>
                                    <!-- <a class="small" href="<?php echo $burl; ?>admin/blog">
                                    Forgot Password?
                                    </a> -->
                                    </div>
                                    <?php  
                                    }
                                    ?>                     
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url(); ?>assets/backend/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/backend/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/backend/plugins/iCheck/icheck.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/backend/dist/js/MercuryGMS.js"></script>

    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>
</body>

</html>
