<?php
if (!isset($paymentuid)) {
  $paymentuid = 0;
}
?>
<!-- content Wrapper. Contains page content -->
<div class="container-fluid">
  <div class="col-sm-6">
    <h1>New Payment</h1>
  </div>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <!-- /.box-header -->
          <?php
          $attributes = array('class' => 'form-horizontal', 'id' => 'addnewpayment');
          echo form_open_multipart("admin/addpayment", $attributes);
          ?>
          <div class="card-body">

            <div class="form-group row">
              <label for="invoice" class="col-sm-1 col-form-label"><?php echo $lang['invoice']; ?></label>

              <div class="col-sm-11">
                <select class="form-control smartselect" id="pay_invoice" name="invoice">
                  <option value="">--<?php echo $lang['select'] . ' ' . $lang['invoice']; ?>--</option>
                  <?php
                  foreach ($allinvs as $inv) {
                    ?>
                    <option value="<?php echo $inv['inv_id']; ?>"><?php echo $inv['inv_id']; ?> -
                      <?php echo $inv['ten_name']; ?> - <?php echo $inv['inv_status']; ?>
                    </option>
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
                <input type="text" class="form-control" id="total" name="total"
                  value="<?php echo set_value('total'); ?>" readonly>
                <?php echo form_error('total', '<div class="alert alert-danger alert-dismissible alertsm">', '</div>'); ?>
              </div>

              <label for="paid" class="col-sm-1 col-form-label"><?php echo $lang['paid']; ?></label>
              <div class="col-sm-3">
                <input type="text" class="form-control" id="paid" name="paid" value="<?php echo set_value('paid'); ?>"
                  readonly>
                <?php echo form_error('paid', '<div class="alert alert-danger alert-dismissible alertsm">', '</div>'); ?>
              </div>

              <label for="balance" class="col-sm-1 col-form-label"><?php echo $lang['balance']; ?></label>
              <div class="col-sm-3">
                <input type="text" class="form-control" id="balance" name="balance"
                  value="<?php echo set_value('balance'); ?>" readonly>
                <?php echo form_error('balance', '<div class="alert alert-danger alert-dismissible alertsm">', '</div>'); ?>
              </div>
            </div>

            <div class="form-group row">
              <label for="pay_amnt" class="col-sm-1 col-form-label"><?php echo $lang['paying']; ?></label>
              <div class="col-sm-3">
                <input type="text" class="form-control" id="pay_amnt" name="pay_amnt"
                  value="<?php echo set_value('pay_amnt'); ?>">
                <?php echo form_error('pay_amnt', '<div class="alert alert-danger alert-dismissible alertsm">', '</div>'); ?>
              </div>

              <label for="paid" class="col-sm-1 col-form-label"><?php echo $lang['method']; ?></label>
              <div class="col-sm-3">
                <select class="form-control" name="pay_method">
                  <option value="cash"><?php echo $lang['cash']; ?></option>
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
              <label for="pay_note" class="col-sm-1 col-form-label"><?php echo $lang['notes']; ?></label>
              <div class="col-sm-11">
                <textarea class="form-control" id="pay_note"
                  name="pay_note"><?php echo set_value('pay_note'); ?></textarea>
              </div>
            </div>
          </div>

          <div class="card-footer">
            <button id="submitButton" type="submit" name="savebedant" class="btn btn-success">
              <?php echo $lang['submit']; ?>
            </button>
            <a href="<?php echo $burl; ?>admin/payments" class="btn btn-warning">
              <?php echo $lang['cancel']; ?>
            </a>
          </div>

          <!-- Loading Modal -->
          <div class="modal fade" id="loadingModal" tabindex="-1" role="dialog" aria-labelledby="loadingModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-body text-center">
                  <div class="spinner-border text-primary" role="status">
                    <span class="visually-hidden"></span>
                  </div>
                  <h5 class="mt-3">Processing...</h5>
                </div>
              </div>
            </div>
          </div>


          <script>
            document.getElementById('submitButton').addEventListener('click', function (event) {
              event.preventDefault(); // Prevent default form submission behavior

              // Disable button to prevent multiple clicks
              this.disabled = true;
              this.innerText = 'Processing...';

              // Show the loading modal
              $('#loadingModal').modal('show');

              // Simulate form submission after a delay (for demo purposes)
              setTimeout(() => {
                // Submit the form manually after loading
                this.closest('form').submit();
              }, 1000); // Replace 1000ms with your desired loading time
            });
          </script>

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