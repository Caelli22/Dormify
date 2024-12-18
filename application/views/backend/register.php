<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title; ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/dist/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/dist/css/MercuryGMS.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body style="background-color: #353a40;">
    <div class="container">
      <div class="row justify-content-center mt-5">
          <div class="card o-hidden border-0 shadow-lg my-5">
              <div class="card-body p-0">
                  <!-- Nested Row within Card Body -->
                  <div class="row">
                      <!-- Form Section -->
                      <div class="col-lg-12">
                          <div class="p-5">
                              <div class="text-center">
                                  <h1 class="h4 text-gray-900 mb-4">Hello there!</h1>
                                  <p class="login-box-msg" id="loginmsg"><?php echo $lang['reg_title']; ?></p>
                              </div>
                              <?php 
                              echo validation_errors('<p class="alert alert-danger">'); 

                              if ($errmsg == 'success1') {
                                  echo "<p class='alert alert-success'>".$lang['registration_success_msg']."</p>";
                              }

                              $attributes = array('id' => 'register', 'class' => 'user');
                              echo form_open_multipart("admin/signup", $attributes); 
                              ?>
                              
                              <div class="form-group">
                                  <select class="form-control smartselect" id="tenantbranch" name="ten_branch">
                                      <option value="">--<?php echo $lang['select'].' '.$lang['branch']; ?>--</option>
                                      <?php
                                      $branchid = ($tenuid == 0) ? set_value('ten_branch') : $tendata['ten_branch'];
                                      foreach($branches as $branch)
                                      {
                                      ?>
                                          <option value="<?php echo $branch['id']; ?>"><?php echo $branch['branch_name']; ?></option>
                                      <?php
                                      }
                                      ?>
                                  </select>
                              </div>

                              <div class="form-group">
                                  <input type="text" name="user_name" class="form-control form-control-user" placeholder="<?php echo $lang['name']; ?>">
                              </div>

                              <div class="form-group">
                                  <input type="email" name="user_email" class="form-control form-control-user" placeholder="<?php echo $lang['email']; ?>">
                              </div>

                              <div class="form-group">
                                  <input type="password" name="user_password" class="form-control form-control-user" placeholder="<?php echo $lang['password']; ?>">
                              </div>

                              <button type="submit" class="btn btn-primary btn-user btn-block">
                                  <?php echo $lang['register']; ?>
                              </button>
                              </form>

                              <hr>

                              <?php
                              if (isset($options['enable_registration']) && $options['enable_registration'] == true) {
                              ?>
                              <div class="text-center">
                                  <a class="small" href="<?php echo $burl; ?>admin/login">Already have an account? Login!</a>
                                  </a>
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

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url(); ?>assets/backend/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/backend/bootstrap copy/js/bootstrap.min.js"></script>
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
