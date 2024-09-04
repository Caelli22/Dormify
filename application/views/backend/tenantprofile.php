<div class="container-fluid" class="tenantprofile">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1><?php echo $lang['tenant'].' '.$lang['profile']; ?></h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo $burl; ?>admin/dashboard"><?php echo $lang['home']; ?></a></li>
            <?php if($view == 'admin') { ?>
            <li class="breadcrumb-item"><a href="<?php echo $burl; ?>admin/tenants"><?php echo $lang['tenants']; ?></a></li>
            <?php } ?>
            <li class="breadcrumb-item active"><?php echo $lang['tenant'].' '.$lang['profile']; ?></li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-3 col-sm-12">
        <!-- Profile Image -->
        <div class="card card-primary card-outline">
          <div class="card-body box-profile">
            <div class="text-center">
              <img class="profile-user-img img-fluid img-circle" src="<?php echo base_url(); ?>assets/usr_pics/<?php echo $tenant['ten_pic']; ?>" alt="<?php echo $lang['tenantprofilepic']; ?>">
            </div>

            <div class="text-center">
              <h3 class="profile-username text-center"><?php echo $tenant['ten_name']; ?></h3>
              <p class="text-muted text-center"><?php echo $tenant['ten_uid']; ?></p>
            </div>
            <ul class="list-group list-group-unbordered mb-3">
              <li class="list-group-item">
                <b>Status</b> <a class="float-right">
                  <?php if($tenant['ten_isactive'] == 1){ ?>
                  <small class="badge badge-success"><?php echo $lang['active']; ?></small>
                  <?php } else { ?>
                  <small class="badge badge-warning"><?php echo $lang['inactive']; ?></small>
                  <?php } ?>
                </a>
              </li>
              <li class="list-group-item">
                <b><?php echo $lang['branch']; ?></b> <a class="float-right"><?php echo $tenant['branch']; ?></a>
              </li>
              <li class="list-group-item">
                <b><?php echo $lang['room']; ?></b> <a class="float-right"><?php echo $tenant['room']; ?></a>
              </li>
              <li class="list-group-item">
                <b><?php echo $lang['bed']; ?></b> <a class="float-right"><?php echo $tenant['bed']; ?></a>
              </li>
            </ul>
          </div>
        </div>

        <!-- About Me Box -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title"><?php echo $lang['tenant'].' '.$lang['stats']; ?></h3>
          </div>
          <div class="card-body">
            <ul class="list-group list-group-unbordered mb-3">
              <li class="list-group-item">
                <b><?php echo $lang['total'].' '.$lang['invoices']; ?></b> <a class="float-right"><?php echo $tenantstats['allinv']; ?></a>
              </li>
              <li class="list-group-item">
                <b><?php echo $lang['paid'].' '.$lang['invoices']; ?></b> <a class="float-right"><?php echo $tenantstats['paidinv']; ?></a>
              </li>
              <li class="list-group-item">
                <b><?php echo $lang['unpaid'].' '.$lang['invoices']; ?></b> <a class="float-right"><?php echo $tenantstats['upaidinv']; ?></a>
              </li>
              <li class="list-group-item">
                <b><?php echo $lang['assigned'].' '.$lang['extraservices']; ?></b> <a class="float-right"><?php echo $tenantstats['alles']; ?></a>
              </li>
              <li class="list-group-item">
                <b><?php echo $lang['total'].' '.$lang['paid'].' '.$lang['amount']; ?></b> <a class="float-right"><?php echo $options['currency_symbol'].' '.amnt($tenantstats['paidamnt']); ?></a>
              </li>
              <li class="list-group-item">
                <b><?php echo $lang['total'].' '.$lang['balance'].' '.$lang['amount']; ?></b> <a class="float-right"><?php echo $options['currency_symbol'].' '.amnt($tenantstats['upaidamnt']); ?></a>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-md-9 col-sm-12">
        <div class="card">

          <div class="card-header p-2">
            <ul class="nav nav-pills">
              <li class="nav-item"><a class="nav-link active" href="#tenantdetails" data-toggle="tab"><?php echo $lang['tenant'].' '.$lang['details']; ?></a></li>
              <?php if($view != 'admin') { ?>
              <li class="nav-item"><a class="nav-link" href="#updatedata" data-toggle="tab"><?php echo $lang['updatedata']; ?></a></li>
              <?php } ?>
              <li class="nav-item"><a class="nav-link" href="#allinv" data-toggle="tab">All Invoices</a></li>
              <li class="nav-item"><a class="nav-link" href="#paidinv" data-toggle="tab">Paid Invoices</a></li>
              <li class="nav-item"><a class="nav-link" href="#pendinginv" data-toggle="tab">Balance Invoices</a></li>
              <li class="nav-item"><a class="nav-link" href="#allpayments" data-toggle="tab">All Payments</a></li>
              <li class="nav-item"><a class="nav-link" href="#alles" data-toggle="tab">Extra Service</a></li>
            </ul>
          </div>
          
          <div class="card-body">
            <div class="tab-content">
              <div class="tab-pane fade show active" id="tenantdetails">
                <table class='table table-bordered w-100'>
                  <tr>
                    <td><b><?php echo $lang['name']; ?></b></td>
                    <td><?php echo $tenant['ten_name']; ?></td>
                  </tr>
                  <tr>
                    <td><b><?php echo $lang['email']; ?></b></td>
                    <td><?php echo $tenant['ten_email']; ?></td>
                  </tr>
                  <tr>
                    <td><b><?php echo $lang['gender']; ?></b></td>
                    <td><?php if($tenant['ten_gender'] == 'M') { ?> Male <?php } else { ?> Female <?php } ?></td>
                  </tr>
                  <tr>
                    <td><b><?php echo $lang['dob']; ?></b></td>
                    <td><?php echo $tenant['ten_dob']; ?></td>
                  </tr>
                  <tr>
                    <td><b><?php echo $lang['address']; ?></b></td>
                    <td><?php echo $tenant['ten_address']; ?></td>
                  </tr>
                  <tr>
                    <td><b><?php echo $lang['contact']; ?></b></td>
                    <td><?php echo $tenant['ten_contact']; ?></td>
                  </tr>
                  <tr>
                    <td><b><?php echo $lang['emergency'].' '.$lang['contact'].' '.$lang['name']; ?> </b></td>
                    <td><?php echo $tenant['ten_emc_name']; ?></td>
                  </tr>
                  <tr>
                    <td><b><?php echo $lang['emergency'].' '.$lang['contact'].' '.$lang['number']; ?> </b></td>
                    <td><?php echo $tenant['ten_emc_contact']; ?></td>
                  </tr>
                </table>
              </div>

              <div class="tab-pane" id="updatedata">
              <?php
              $attributes = array('class' => 'form-horizontal', 'id' => 'update_tenant_data');
              echo form_open_multipart("admin/updatetenant", $attributes);
              ?>
                  <input type="hidden" name="ten_uid" value="<?php echo $tenuid; ?>">

                  <div class="form-group row">
                    <label for="tenantname" class="col-sm-1 col-form-label"><?php echo $lang['name']; ?></label>

                    <div class="col-sm-5">
                      <input type="text" class="form-control" id="tenantname" name="ten_name" disabled placeholder="<?php echo $lang['name']; ?>" value="<?php echo ($tenuid == 0) ? set_value('ten_name') : $tendata['ten_name']; ?>">
                      <?php echo form_error('ten_name', '<div class="alert alert-danger alert-dismissible alertsm">', '</div>'); ?>
                    </div>

                    <label for="tenantemail" class="col-sm-1 col-form-label"><?php echo $lang['email']; ?></label>

                    <div class="col-sm-5">
                      <input type="email" class="form-control" id="tenantemail" name="ten_email" disabled placeholder="<?php echo $lang['email']; ?>" value="<?php echo ($tenuid == 0) ? set_value('ten_email') : $tendata['ten_email']; ?>">
                      <?php echo form_error('ten_email', '<div class="alert alert-danger alert-dismissible alertsm">', '</div>'); ?>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="tenantphoto" class="col-sm-1 col-form-label"><?php echo $lang['photo']; ?></label>

                 
                    <input type="hidden" name="ten_photo_webcam" id="ten_photo_webcam" value="<?php echo set_value('ten_photo_webcam'); ?>">
                    <div class="col-sm-2">
                    </div>
                    <div class="col-sm-5">
                    <div class="custom-file">
                      <label for="tenantphotoselect" class="custom-file-label"><?php echo $lang['select'].' '.$lang['photo']; ?></label>
                      <input type="file" id="tenantphotoselect" class="custom-file-input" name="ten_photo_select" value="<?php echo set_value('ten_photo_select');?>">
                      <?php echo form_error('ten_photo_select', '<div class="alert alert-danger alert-dismissible alertsm">', '</div>'); ?>
                    </div>

                    </div>
                  </div>
                  <input type="hidden" name="ten_pic" value="<?php if($tenuid != 0) { echo $tendata['ten_pic']; } ?>">
                  <script>
                  function checkIfCamPicAvailable() {
                    var campic = document.getElementById('ten_photo_webcam').value;
                    var picurl = '<?php echo base_url().'assets/usr_pics/'; ?>'+campic;
                    if(campic!='')
                    {
                      document.getElementById('my_camera_result').innerHTML = '<img src="'+picurl+'" width="148" class="img-circle"/>';
                    }
                  }
                  window.onload = checkIfCamPicAvailable;
                  </script>

                  <div class="form-group row">
                    <label for="datepicker" class="col-sm-1 col-form-label"><?php echo $lang['dob']; ?></label>

                    <div class="col-sm-5">
                      <input type="text" class="form-control datepicker" id="ten_dob" name="ten_dob" placeholder="<?php echo $lang['dob']; ?>" value="<?php echo ($tenuid == 0) ? set_value('ten_dob') : $tendata['ten_dob']; ?>">
                      <?php echo form_error('ten_dob', '<div class="alert alert-danger alert-dismissible alertsm">', '</div>'); ?>
                    </div>

                    <label for="tenantgender" class="col-sm-1 col-form-label"><?php echo $lang['gender']; ?></label>

                    <div class="col-sm-5">
                      <label>
                        <input type="radio" name="ten_gender" class="flat-red" value="M" <?php if ($tenuid == 0) { echo 'checked'; } else { if($tendata['ten_gender'] == 'M') { echo 'checked'; } }  ?>> <?php echo $lang['male']; ?>
                      </label>
                      <label>
                        <input type="radio" name="ten_gender" class="flat-red" value="F" <?php if ($tenuid != 0 && $tendata['ten_gender'] == 'F') { echo 'checked'; } ?>> <?php echo $lang['female']; ?>
                      </label>
                      <label>
                        <input type="radio" name="ten_gender" class="flat-red" value="O" <?php if ($tenuid != 0 && $tendata['ten_gender'] == 'O') { echo 'checked'; } ?>> <?php echo $lang['other']; ?>
                      </label>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="tenantaddress" class="col-sm-1 col-form-label"><?php echo $lang['address']; ?></label>

                    <div class="col-sm-5">
                      <input type="text" class="form-control" id="tenantaddress" name="ten_address" placeholder="<?php echo $lang['address']; ?>" value="<?php echo ($tenuid == 0) ? set_value('ten_address') : $tendata['ten_address']; ?>">
                    </div>

                    <label for="tenantcontact" class="col-sm-1 col-form-label"><?php echo $lang['contact']; ?></label>

                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="tenantcontact" name="ten_contact" placeholder="<?php echo $lang['contact']; ?>" value="<?php echo ($tenuid == 0) ? set_value('ten_contact') : $tendata['ten_contact']; ?>">
                        <?php echo form_error('ten_contact', '<div class="alert alert-danger alert-dismissible alertsm">', '</div>'); ?>
                      </div>
                  </div>

                  <hr/>
                  <h4><?php echo $lang['ecd']; ?>:</h4>
                  <hr/>

                  <div class="form-group row">
                    <label for="tenantemcname" class="col-sm-1 col-form-label"><?php echo $lang['name']; ?></label>

                    <div class="col-sm-5">
                      <input type="text" class="form-control" id="tenantemcname" name="ten_emc_name" placeholder="<?php echo $lang['name']; ?>" value="<?php echo ($tenuid == 0) ? set_value('ten_emc_name') : $tendata['ten_emc_name']; ?>">
                      <?php echo form_error('ten_emc_name', '<div class="alert alert-danger alert-dismissible alertsm">', '</div>'); ?>
                    </div>

                    <label for="tenantemcnum" class="col-sm-1 col-form-label"><?php echo $lang['contact']; ?></label>

                    <div class="col-sm-5">
                      <input type="text" class="form-control" id="tenantemcnum" name="ten_emc_contact" placeholder="<?php echo $lang['contact']; ?>" value="<?php echo ($tenuid == 0) ? set_value('ten_emc_contact') : $tendata['ten_emc_contact']; ?>">
                      <?php echo form_error('ten_emc_contact', '<div class="alert alert-danger alert-dismissible alertsm">', '</div>'); ?>
                    </div>
                  </div>
                  <hr/>
                  <button type="submit" name="savetenant" class="btn btn-success"><?php echo $lang['save']; ?></button>
              <?php echo form_close(); ?>
              </div>

              <div class="tab-pane" id="allinv">
              <iframe src="<?php echo $burl; ?>admin/tenant_report/<?php echo $tenant['ten_uid']; ?>/all_inv" 
                frameborder="0" scrolling="no" class="ten_report_frame" style="width: 100%; height: 600px;"></iframe>
              </div>


              <div class="tab-pane" id="paidinv">
              <iframe src="<?php echo $burl; ?>admin/tenant_report/<?php echo $tenant['ten_uid']; ?>/paid_inv" frameborder="0" scrolling="no" class="ten_report_frame"></iframe>
              </div>

              <div class="tab-pane" id="pendinginv">
              <iframe src="<?php echo $burl; ?>admin/tenant_report/<?php echo $tenant['ten_uid']; ?>/pen_inv" frameborder="0" scrolling="no" class="ten_report_frame"></iframe>
              </div>

              <div class="tab-pane" id="allpayments">
              <iframe src="<?php echo $burl; ?>admin/tenant_report/<?php echo $tenant['ten_uid']; ?>/all_pay" frameborder="0" scrolling="no" class="ten_report_frame"></iframe>
              </div>

              <div class="tab-pane" id="alles">
              <iframe src="<?php echo $burl; ?>admin/tenant_report/<?php echo $tenant['ten_uid']; ?>/all_aes" frameborder="0" scrolling="no" class="ten_report_frame"></iframe>
              </div>

            </div>
            <!-- /.tab-content -->
          </div>
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
</div>
  
    
