
  <!-- Content Wrapper. Contains page content -->
  <div class="container-fluid">
      <div class="col-sm-6">
        <h1>Payments</h1>
      </div>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <!-- /.box-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-hover table-responsive">
                <thead>
                <tr>
                  <th width="5%"><?php echo $lang['payid']; ?></th>
                  <th width="15%"><?php echo $lang['invoiceid']; ?></th>
                  <th width="17%"><?php echo $lang['tenant'].' '.$lang['name']; ?></th>
				          <th width="10%"><?php echo $lang['method']; ?></th>
                  <th width="10%"><?php echo $lang['transactionid']; ?></th>
                  <th width="15%"><?php echo $lang['amount']; ?></th>
                  <th width="15%"><?php echo $lang['date']; ?></th>
                  <th width="7%"><?php echo $lang['status']; ?></th>
                </tr>
                </thead>
                <tbody>
                  <?php
                  foreach($payments as $payment)
                  {
                  ?>
                    <tr>
                      <td><?php echo $payment['payment_id']; ?></td>
                      <td><?php echo $payment['inv_id']; ?></td>
                      <td><?php echo $payment['ten_name']; ?></td>
                      <td><?php echo $payment['payment_method']; ?></td>
                      <td><?php echo $payment['payment_trans_id']; ?></td>
                      <td><?php echo $options['currency_symbol']; ?> <?php echo $payment['payment_amnt']; ?></td>
                      <td><?php echo $payment['payment_date']; ?></td>
                      <td><?php echo $payment['payment_status']; ?></td>
                    </tr>
                  <?php
                  }
                  ?>
                </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
		</div>
	</div>
	</section>
	<!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

