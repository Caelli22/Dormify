<?php
if(!isset($beduid))
{
    die('Wrong Request!');
}
?>
  <!-- content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Assign Bed</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo $burl; ?>admin/dashboard"><?php echo $lang['home']; ?></a></li>
              <li class="breadcrumb-item"><a href="<?php echo $burl; ?>admin/beds"><?php echo $lang['beds']; ?></a></li>
              <li class="breadcrumb-item active"><?php echo $lang['assign'].' '.$lang['bed']; ?></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    
    <!-- Main content -->
    <section class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"><?php echo $lang['assign'].' '.$lang['bed']; ?> { <b><?php echo $beddata['bed_uid'].' - '.$beddata['bed_name']; ?></b> } <?php echo $lang['fromroom']; ?> { <b><?php echo $beddata['bed_room'].' - '.$beddata['room_name']; ?></b> } <?php echo $lang['totenant']; ?></h3>
            </div>
            <!-- /.box-header -->
			<?php
			$attributes = array('class' => 'form-horizontal', 'id' => 'assignbed');
            echo form_open_multipart("admin/processbed", $attributes); 
			?>
      <div class="card-body">
        <input type="hidden" name="room_uid" value="<?php echo $beddata['bed_room']; ?>">
				<input type="hidden" name="bed_uid" value="<?php echo $beduid; ?>">
        <input type="hidden" name="requestid" value="<?php echo $reqid; ?>">
        <input type="hidden" name="request_from" value="beds">

                <div class="form-group row">
                    <label for="bedname" class="col-sm-1 col-form-label"><?php echo $lang['bed'].' '.$lang['name']; ?></label>
                    <div class="col-sm-5">
                    <input type="text" class="form-control" name="bed_name" value="<?php echo $beddata['bed_name']; ?>" readonly>
                    </div>
				  
                    <label for="roomname" class="col-sm-1 col-form-label"><?php echo $lang['room'].' '.$lang['name']; ?></label>
                    <div class="col-sm-5">
                    <input type="text" class="form-control" name="room_name" value="<?php echo $beddata['room_name']; ?>" readonly>
                    </div>
                </div>

				<div class="form-group row">
				    <label for="room" class="col-sm-1 col-form-label"><?php echo $lang['tenant']; ?></label>
                    <div class="col-sm-11">
                        <select class="form-control smartselect" id="tenantforbed" name="assignbed_tenant">
                        <option value="">--<?php echo $lang['select'].' '.$lang['tenant']; ?>--</option>
                        <?php
                        foreach($tenlist as $ten)
                        {
                        ?>
                            <option value="<?php echo $ten['ten_uid']; ?>" <?php if(!empty($ten['ten_bed'])) { echo 'disabled'; } ?> <?php if($ten['ten_uid'] == $tenuid) { echo 'selected'; } ?>><?php echo $ten['ten_name']; ?></option>
                        <?php
                        }
                        ?>
                        </select>
                        <?php echo form_error('assignbed_tenant', '<div class="alert alert-danger alert-dismissible alertsm">', '</div>'); ?>
                    </div>
                </div>


                <div class="form-group row">
				            <label for="bedtotalprice" class="col-sm-1 col-form-label"><?php echo $lang['baseprice']; ?></label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="bedbaseprice" name="base_amnt" value="<?php echo $beddata['room_price']; ?>">
                        <?php echo form_error('base_amnt', '<div class="alert alert-danger alert-dismissible alertsm">', '</div>'); ?>
                    </div>
                </div>

                <?php
                $total = $beddata['room_price'];
                ?>
			
				        <div class="form-group row">
				            <label for="bedtotalprice" class="col-sm-1 col-form-label"><?php echo $lang['total']; ?></label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="bedtotalprice" name="total_amnt" value="<?php echo $total; ?>">
                        <?php echo form_error('total_amnt', '<div class="alert alert-danger alert-dismissible alertsm">', '</div>'); ?>
                    </div>

                    <label for="bedpaidprice" class="col-sm-1 col-form-label"><?php echo $lang['paid']; ?></label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="bedpaidprice" name="paid_amnt" value="<?php echo set_value('paid_amnt'); ?>">
                        <?php echo form_error('paid_amnt', '<div class="alert alert-danger alert-dismissible alertsm">', '</div>'); ?>
                    </div>

                    <label for="bedbalprice" class="col-sm-1 col-form-label"><?php echo $lang['balance']; ?></label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="bedbalprice" name="bal_amnt" value="<?php echo set_value('bal_amnt'); ?>">
                        <?php echo form_error('bal_amnt', '<div class="alert alert-danger alert-dismissible alertsm">', '</div>'); ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="lease_from" class="col-sm-1 col-form-label"><?php echo $lang['leasefrom']; ?></label>
                    <div class="col-sm-5">
                    <input type="text" class="form-control datepicker" id="lease_from" name="lease_from" placeholder="<?php echo $lang['leasefrom']; ?>" value="<?php echo set_value('lease_from'); ?>">
                    <?php echo form_error('lease_from', '<div class="alert alert-danger alert-dismissible alertsm">', '</div>'); ?>
                    </div>

                    <label for="lease_to" class="col-sm-1 col-form-label"><?php echo $lang['leaseto']; ?></label>
                    <div class="col-sm-5">
                    <input type="text" class="form-control datepicker" id="lease_to" name="lease_to" placeholder="<?php echo $lang['leaseto']; ?>" value="<?php echo set_value('lease_to'); ?>">
                    <?php echo form_error('lease_to', '<div class="alert alert-danger alert-dismissible alertsm">', '</div>'); ?>
                    </div>
                </div>

			</div>
			<div class="card-footer">
                <button type="submit" name="savebedant" class="btn btn-success"><?php echo $lang['assign']; ?></button>
                <a href="<?php echo $burl; ?>admin/beds" class="btn btn-warning"><?php echo $lang['cancel']; ?></a>
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

