<?php
if(!isset($esid))
{
    die('Wrong Request!');
}
?>
  <!-- content Wrapper. Contains page content -->
  <div class="container-fluid">
    <!-- content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?php echo $lang['assign'].' '.$lang['extraservice']; ?></h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <!-- /.box-header -->
			<?php
			$attributes = array('class' => 'form-horizontal', 'id' => 'assignes');
            echo form_open_multipart("admin/processes", $attributes); 
			?>
      <div class="card-body">
                <input type="hidden" name="esid" value="<?php echo $esid; ?>">
                <input type="hidden" name="requestid" value="<?php echo $reqid; ?>">

                <div class="form-group row">
                    <label for="bedname" class="col-sm-1 col-form-label"><?php echo $lang['extraservice'].' '.$lang['name']; ?></label>
                    <div class="col-sm-5">
                    <input type="text" class="form-control" name="es_name" value="<?php echo $esdata['es_name']; ?>" readonly>
                    </div>
				  
                    <label for="roomname" class="col-sm-1 col-form-label"><?php echo $lang['extraservice'].' '.$lang['details']; ?></label>
                    <div class="col-sm-5">
                    <textarea class="form-control" name="es_details" readonly><?php echo $esdata['es_details']; ?></textarea>
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
                            <option value="<?php echo $ten['ten_uid']; ?>" <?php if($ten['ten_uid'] == $tenuid) { echo 'selected'; } ?>><?php echo $ten['ten_name']; ?></option>
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
                        <input type="text" class="form-control" id="bedbaseprice" name="base_amnt" value="<?php echo $esdata['es_price']; ?>">
                        <?php echo form_error('base_amnt', '<div class="alert alert-danger alert-dismissible alertsm">', '</div>'); ?>
                    </div>
                </div>

                <?php
                $total = $esdata['es_price'];
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
                    <label for="lease_from" class="col-sm-1 col-form-label"><?php echo $lang['from']; ?></label>
                    <div class="col-sm-5">
                    <input type="text" class="form-control datepicker" id="lease_from" name="lease_from" placeholder="<?php echo $lang['from'].' '.$lang['date']; ?>" value="<?php echo set_value('lease_from'); ?>">
                    <?php echo form_error('lease_from', '<div class="alert alert-danger alert-dismissible alertsm">', '</div>'); ?>
                    </div>

                    <label for="lease_to" class="col-sm-1 col-form-label"><?php echo $lang['to']; ?></label>
                    <div class="col-sm-5">
                    <input type="text" class="form-control datepicker" id="lease_to" name="lease_to" placeholder="<?php echo $lang['to'].' '.$lang['date']; ?>" value="<?php echo set_value('lease_to'); ?>">
                    <?php echo form_error('lease_to', '<div class="alert alert-danger alert-dismissible alertsm">', '</div>'); ?>
                    </div>
                </div>

			</div>
			<div class="card-footer">
                <button type="submit" name="savebedant" class="btn btn-success"><?php echo $lang['assign']; ?></button>
                <a href="<?php echo $burl; ?>admin/extraservices" class="btn btn-warning"><?php echo $lang['cancel']; ?></a>
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

