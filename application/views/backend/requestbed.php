
  <!-- content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?php echo $lang['requestbed']; ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo $burl; ?>admin/dashboard"><?php echo $lang['home']; ?></a></li>
              <li class="breadcrumb-item active"><?php echo $lang['requestbed']; ?></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"><?php echo $lang['requestbed']; ?></h3>
            </div>
            <!-- /.box-header -->
			<?php
			$attributes = array('class' => 'form-horizontal', 'id' => 'assignbed');
            echo form_open_multipart("admin/processRequestBed", $attributes); 
			?>
      <div class="card-body">
				<input type="hidden" name="assignbed_tenant" value="<?php echo $tenuid; ?>">
                <input type="hidden" name="request_from" value="tenants">
                <input type="hidden" name="bed_name" id="ten_bed_name" value="">
                <input type="hidden" name="room_name" id="ten_room_name" value="">

                <div class="form-group row roomselectionform">
                  <label for="tenantroom" class="col-sm-1 col-form-label"><?php echo $lang['room']; ?></label>

                  <div class="col-sm-5">
                    <select class="form-control roomselect" id="tenantroom" name="room_uid">
                      <optgroup class='def-cursor' label='Room' data-totalbeds='Total Beds' data-availablebeds='Available Beds' data-baseprice='Base Price'>
                      <option value="" data-totalbeds='' data-availablebeds='' data-baseprice=''>--<?php echo $lang['select'].' '.$lang['room']; ?>--</option>
                      <?php 
                      foreach($allrooms as $room)
                      {
                      ?>
                        <option data-totalbeds="<?php echo $room['allbeds']; ?>" data-availablebeds="<?php echo $room['avlbeds']; ?>" data-baseprice="<?php echo $options['currency_symbol']; ?> <?php echo $room['room_price']; ?>" value="<?php echo $room['room_uid']; ?>" <?php if($room['avlbeds']<1) echo'disabled'; ?>><?php echo $room['room_name']; ?></option>
                      <?php
                      }
                      ?>
                    </select>
                    <?php echo form_error('room_uid', '<div class="alert alert-danger alert-dismissible alertsm">', '</div>'); ?>
                  </div>

				  <label for="tenantbed" class="col-sm-1 col-form-label"><?php echo $lang['bed']; ?></label>

                  <div class="col-sm-5">
                    <select class="form-control smartselect" id="tenantbed" name="bed_uid">
                      <option value="">-- <?php echo $lang['select'].' '.$lang['bed']; ?> --</option>
                    </select>
                    <?php echo form_error('bed_uid', '<div class="alert alert-danger alert-dismissible alertsm">', '</div>'); ?>
                  </div>
                </div>
				
                <div class="form-group row">
				            <label for="bedtotalprice" class="col-sm-1 col-form-label"><?php echo $lang['base'].' '.$lang['price']; ?></label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="bedbaseprice" name="base_amnt" value="" disabled>
                        <?php echo form_error('base_amnt', '<div class="alert alert-danger alert-dismissible alertsm">', '</div>'); ?>
                    </div>
                </div>

				        <div class="form-group row">
				            <label for="bedtotalprice" class="col-sm-1 col-form-label"><?php echo $lang['total']; ?></label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="bedtotalprice" name="total_amnt" value="" disabled>
                        <?php echo form_error('total_amnt', '<div class="alert alert-danger alert-dismissible alertsm">', '</div>'); ?>
                    </div>
                </div>

			</div>
			<div class="card-footer">
                <button type="submit" name="savebedant" class="btn btn-success"><?php echo $lang['requestbed']; ?></button>
                <a href="<?php echo $burl; ?>admin/dashboard" class="btn btn-warning"><?php echo $lang['cancel']; ?></a>
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

