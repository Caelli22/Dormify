    <?php
    if(!isset($configuid))
    {
        $configuid = 0;
    }
    ?>
  <!-- content Wrapper. Contains page content -->
  <div class="container-fluid">

  <div class="col-sm-6">
    <h1>Configurations</h1>
  </div>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <!-- /.box-header -->
			<?php
			$attributes = array('class' => 'form-horizontal', 'id' => 'configurations');
      echo form_open_multipart("admin/updateconfig", $attributes);
			?>
            <div class="card-body">

      <h3><span class="badge badge-secondary"><?php echo $lang['gend']; ?></span></h3><hr/>

      <div class="form-group row">
        <label for="room" class="col-sm-1 col-form-label"><?php echo $lang['hpdname']; ?></label>
        <div class="col-sm-11">
          <input type="text" class="form-control" id="dhp_name" name="dhp_name" value="<?php echo $options['dhp_name']; ?>">
          <?php echo form_error('dhp_name', '<div class="alert alert-danger alert-dismissible alertsm">', '</div>'); ?>
        </div> 
      </div>

      <div class="form-group row">
        <label for="room" class="col-sm-1 col-form-label"><?php echo $lang['app'].' '.$lang['footer']; ?></label>
        <div class="col-sm-11">
          <input type="text" class="form-control" id="app_footer" name="app_footer" value="<?php echo $options['app_footer']; ?>">
          <?php echo form_error('app_footer', '<div class="alert alert-danger alert-dismissible alertsm">', '</div>'); ?>
        </div> 
      </div>

      <div class="form-group row">
        <label for="applogo" class="col-sm-1 col-form-label"><?php echo $lang['app'].' '.$lang['logo']; ?></label>
        <div class="col-sm-5">
          <input type="file" class="form-control" id="ten_photo_select" name="ten_photo_select" value="<?php echo $options['app_logo']; ?>">
          <?php echo form_error('app_logo', '<div class="alert alert-danger alert-dismissible alertsm">', '</div>'); ?>
        </div> 
        <div class="col-sm-5">
        <input type="hidden" name="app_logo" value="<?php echo $options['app_logo']; ?>">
        <?php if(!empty($options['app_logo'])) { ?> <img src="<?php echo base_url().'assets/usr_pics/'.$options['app_logo']; ?>" width="25%"/> <?php } ?>
        </div>
      </div>
      
      <div class="form-group row">
                <label for="contactno" class="col-sm-1 col-form-label"><?php echo $lang['contact']; ?></label>

                <div class="col-sm-5">
                  <input type="text" class="form-control" id="contact_no" name="contact_no" value="<?php echo $options['contact_no']; ?>">
                  <?php echo form_error('contact_no', '<div class="alert alert-danger alert-dismissible alertsm">', '</div>'); ?>
                </div>
        
        <label for="email" class="col-sm-1 col-form-label"><?php echo $lang['email']; ?></label>

                <div class="col-sm-5">
                  <input type="text" class="form-control" id="email" name="email" value="<?php echo $options['email']; ?>">
                  <?php echo form_error('email', '<div class="alert alert-danger alert-dismissible alertsm">', '</div>'); ?>
                </div> 
      </div>

      <div class="form-group row">
          <label for="country" class="col-sm-1 col-form-label"><?php echo $lang['country']; ?></label>
          <div class="col-sm-5">
            <input type="text" class="form-control" id="country" name="country" value="<?php echo $options['country']; ?>">
            <?php echo form_error('country', '<div class="alert alert-danger alert-dismissible alertsm">', '</div>'); ?>
				  </div> 
				  <label for="state" class="col-sm-1 col-form-label"><?php echo $lang['state']; ?></label>
          <div class="col-sm-5">
            <input type="text" class="form-control" id="state" name="state" value="<?php echo $options['state']; ?>">
            <?php echo form_error('state', '<div class="alert alert-danger alert-dismissible alertsm">', '</div>'); ?>
				  </div> 
      </div>
				
				<div class="form-group row">
                  <label for="city" class="col-sm-1 col-form-label"><?php echo $lang['city']; ?></label>
                  <div class="col-sm-5">
                  <input type="text" class="form-control" id="city" name="city" value="<?php echo $options['city']; ?>">
                  <?php echo form_error('city', '<div class="alert alert-danger alert-dismissible alertsm">', '</div>'); ?>
					</div>
					<label for="address" class="col-sm-1 col-form-label"><?php echo $lang['address']; ?></label>

                  <div class="col-sm-5">
                    <textarea class="form-control" id="address" name="address"><?php echo $options['address']; ?></textarea>
                    <?php echo form_error('address', '<div class="alert alert-danger alert-dismissible alertsm">', '</div>'); ?>
                  </div>
				  </div>

          <div class="form-group row">
                  <label for="city" class="col-sm-1 col-form-label"><?php echo $lang['currency'].' '.$lang['code']; ?></label>
                  <div class="col-sm-5">
                  <input type="text" class="form-control" id="currency_code" name="currency_code" value="<?php echo $options['currency_code']; ?>">
                  <?php echo form_error('currency_code', '<div class="alert alert-danger alert-dismissible alertsm">', '</div>'); ?>
					</div>
					<label for="address" class="col-sm-1 col-form-label"><?php echo $lang['currency'].' '.$lang['symbol']; ?></label>

                  <div class="col-sm-5">
                  <input type="text" class="form-control" id="currency_symbol" name="currency_symbol" value="<?php echo $options['currency_symbol']; ?>">
                  <?php echo form_error('currency_symbol', '<div class="alert alert-danger alert-dismissible alertsm">', '</div>'); ?>
                  </div>
          </div>
          <div class="form-group row">
              <label for="room" class="col-sm-1 col-form-label"><?php echo $lang['language']; ?></label>
              <div class="col-5">
                <select class="form-control smartselect" id="lang" name="lang">
                    <?php
                    foreach($languages as $eachlang)
                    {
                    ?>
                        <option value="<?php echo strtolower($eachlang['lang_name']); ?>" <?php if($options['lang'] == strtolower($eachlang['lang_name'])) { echo 'selected'; } ?>><?php echo $eachlang['lang_name']; ?></option>
                    <?php
                    }
                    ?>
                </select>
              </div> 
          </div>        

          <h3><span class="badge badge-secondary"><?php echo $lang['smtp']; ?></span></h3><hr/>
            <div class="form-group row">
              <label for="smtphost" class="col-sm-1 col-form-label"><?php echo $lang['smtp'].' '.$lang['host']; ?></label>

              <div class="col-sm-5">
                <input type="text" class="form-control" id="smtp_host" name="smtp_host" value="<?php echo $options['smtp_host']; ?>">
                <?php echo form_error('smtp_host', '<div class="alert alert-danger alert-dismissible alertsm">', '</div>'); ?>
              </div>
              
              <label for="smtpusername" class="col-sm-1 col-form-label"><?php echo $lang['smtp'].' '.$lang['username']; ?></label>

              <div class="col-sm-5">
                <input type="text" class="form-control" id="smtp_username" name="smtp_username" value="<?php echo $options['smtp_username']; ?>">
                <?php echo form_error('smtp_username', '<div class="alert alert-danger alert-dismissible alertsm">', '</div>'); ?>
              </div> 
            </div>
            <div class="form-group row">
              <label for="smtppass" class="col-sm-1 col-form-label"><?php echo $lang['smtp'].' '.$lang['password']; ?></label>

              <div class="col-sm-5">
                <input type="text" class="form-control" id="smtp_pass" name="smtp_pass" value="<?php echo $options['smtp_pass']; ?>">
                <?php echo form_error('smtp_pass', '<div class="alert alert-danger alert-dismissible alertsm">', '</div>'); ?>
              </div>
              
              <label for="smtpport" class="col-sm-1 col-form-label"><?php echo $lang['smtp'].' '.$lang['port']; ?></label>

              <div class="col-sm-5">
                <input type="text" class="form-control" id="smtp_port" name="smtp_port" value="<?php echo $options['smtp_port']; ?>">
                <?php echo form_error('smtp_port', '<div class="alert alert-danger alert-dismissible alertsm">', '</div>'); ?>
              </div> 
            </div>

            <h3><span class="badge badge-secondary"><?php echo $lang['invsettings']; ?></span></h3><hr/>
            <div class="form-group row">
              <label for="room" class="col-sm-1 col-form-label"><?php echo $lang['invoicefooternote']; ?></label>
              <div class="col-sm-11">
                <textarea class="form-control" id="invoice_footer" name="invoice_footer"><?php echo $options['invoice_footer']; ?></textarea>
                <?php echo form_error('invoice_footer', '<div class="alert alert-danger alert-dismissible alertsm">', '</div>'); ?>
              </div> 
            </div>

            <h3><span class="badge badge-secondary"><?php echo $lang['othersettings']; ?></span></h3><hr/>

            <div class="form-group row">
              <label for="room" class="col-sm-1 col-form-label"><?php echo $lang['tsid']; ?></label>
              <div class="col-sm-3">
                <input type="text" class="form-control" id="tid_start" name="tid_start" value="<?php echo $options['tid_start']; ?>">
                <?php echo form_error('tid_start', '<div class="alert alert-danger alert-dismissible alertsm">', '</div>'); ?>
              </div> 

              <label for="room" class="col-sm-1 col-form-label"><?php echo $lang['rsid']; ?></label>
              <div class="col-sm-3">
                <input type="text" class="form-control" id="rid_start" name="rid_start" value="<?php echo $options['rid_start']; ?>">
                <?php echo form_error('rid_start', '<div class="alert alert-danger alert-dismissible alertsm">', '</div>'); ?>
              </div> 

              <label for="room" class="col-sm-1 col-form-label"><?php echo $lang['bsid']; ?></label>
              <div class="col-sm-3">
                <input type="text" class="form-control" id="bid_start" name="bid_start" value="<?php echo $options['bid_start']; ?>">
                <?php echo form_error('bid_start', '<div class="alert alert-danger alert-dismissible alertsm">', '</div>'); ?>
              </div> 
            </div>

        </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success"><?php echo $lang['save']; ?></button>
            </div>
			
			
            <?php echo form_close(); ?>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
		</div>
	</div>
	</section>
	<!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 