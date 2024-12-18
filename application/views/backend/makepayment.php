
  <!-- content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- content Header (Page header) -->

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?php echo $lang['make'].' '.$lang['payment']; ?></h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    
    <!-- Main content -->
    <section class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">

            <!-- /.box-header -->
			<?php
			$attributes = array('class' => 'form-horizontal', 'id' => 'paymentForm');
      echo form_open_multipart("admin/madepayment", $attributes); 
			?>
            <div class="card-body">
                        
				<div class="form-group row">
          <label for="invoice" class="col-sm-1 col-form-label">Unpaid Invoices</label>

          <div class="col-sm-11">
            <select class="form-control smartselect" id="pay_invoice" name="invoice">
                    <option value="">--<?php echo $lang['select'].' '.$lang['invoice']; ?>--</option>
                    <?php
                    foreach($allinvs as $inv)
                    {
                    ?>
                        <option value="<?php echo $inv['inv_id']; ?>"><?php echo $inv['inv_id']; ?> - <?php echo $inv['ten_name']; ?> - <?php echo $inv['inv_status']; ?></option>
                    <?php
                    }
                    ?>
            </select>
            <?php echo form_error('invoice', '<div class="alert alert-danger alert-dismissible alertsm">', '</div>'); ?>
          </div>
        </div>

        <div class="form-group row">
          <label for="total" class="col-sm-1 col-form-label"><?php echo $lang['total']; ?></label>
          <div class="col-sm-3">
            <input type="text" class="form-control" id="total" name="total" value="<?php echo set_value('total'); ?>" readonly>
            <?php echo form_error('total', '<div class="alert alert-danger alert-dismissible alertsm">', '</div>'); ?>
          </div>

          <label for="paid" class="col-sm-1 col-form-label"><?php echo $lang['paid']; ?></label>
          <div class="col-sm-3">
            <input type="text" class="form-control" id="paid" name="paid" value="<?php echo set_value('paid'); ?>" readonly>
            <?php echo form_error('paid', '<div class="alert alert-danger alert-dismissible alertsm">', '</div>'); ?>
				  </div>

          <label for="balance" class="col-sm-1 col-form-label"><?php echo $lang['balance']; ?></label>
          <div class="col-sm-3">
            <input type="text" class="form-control" id="balance" name="balance" value="<?php echo set_value('balance'); ?>" readonly>
            <?php echo form_error('balance', '<div class="alert alert-danger alert-dismissible alertsm">', '</div>'); ?>
				  </div>
        </div>

        <div class="form-group row">
          <label for="paid" class="col-sm-1 col-form-label"><?php echo $lang['method']; ?></label>
          <div class="col-sm-3">
            <select class="form-control" name="pay_method">
              <option value="cash">Cash</option>
              <!-- <option value="cash">Gcash</option> -->
            </select>
				  </div>

          <label for="trans_id" class="col-sm-1 col-form-label"><?php echo $lang['transactionid']; ?></label>
          <div class="col-sm-3">
            <input type="text" class="form-control" id="trans_id" name="trans_id" 
                  value="<?php echo !empty(set_value('trans_id')) ? set_value('trans_id') : ''; ?>" 
                  placeholder="Generated" readonly>
          </div>

        </div>

        <div class="form-group row">
          <label class="col-sm-12">To make a payment, please deal directly with your current admin. For any questions or 
            concerns, visit the admin office during office hours.</label>
        </div>


        <input type="hidden" id="pay_transid" name="pay_transid">

        </div>
        <div class="card-footer">
          
          <button type="button" name="paybttn" class="btn btn-success" onclick=""><?php echo $lang['pay']; ?></button>

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

