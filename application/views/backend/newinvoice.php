<!-- content Wrapper. Contains page content -->
<div class="container-fluid">
    <div class="col-sm-6">
        <h1>New Invoice</h1>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <!-- /.box-header -->
                    <?php
                    $attributes = array('class' => 'form-horizontal', 'id' => 'newinvoice');
                    echo form_open_multipart("admin/processinv", $attributes);
                    ?>
                    <div class="card-body">

                        <div class="form-group row">
                            <label for="room" class="col-sm-1 col-form-label"><?php echo $lang['tenant']; ?></label>
                            <div class="col-sm-5">
                                <select class="form-control smartselect" id="tenantforinvoice" name="assignbed_tenant">
                                    <option value="">--<?php echo $lang['select'] . ' ' . $lang['tenant']; ?>--</option>
                                    <?php
                                    foreach ($tenlist as $ten) {
                                        ?>
                                        <option value="<?php echo $ten['ten_uid']; ?>"><?php echo $ten['ten_name']; ?>
                                        </option>
                                        <?php
                                    }
                                    ?>
                                </select>
                                <?php echo form_error('assignbed_tenant', '<div class="alert alert-danger alert-dismissible alertsm">', '</div>'); ?>
                            </div>

                            <label for="invoiceid"
                                class="col-sm-1 col-form-label"><?php echo $lang['invoice']; ?></label>
                            <div class="col-sm-5">
                                <select class="form-control smartselect" id="invoiceid" name="invoice">
                                    <option value="">--<?php echo $lang['select'] . ' ' . $lang['invoice']; ?>--</option>
                                </select>
                                <?php echo form_error('invoice', '<div class="alert alert-danger alert-dismissible alertsm">', '</div>'); ?>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="bedtotalprice"
                                class="col-sm-1 col-form-label"><?php echo $lang['base'] . ' ' . $lang['price']; ?></label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="bedbaseprice" name="base_amnt" value="">
                                <?php echo form_error('base_amnt', '<div class="alert alert-danger alert-dismissible alertsm">', '</div>'); ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="bedtotalprice"
                                class="col-sm-1 col-form-label"><?php echo $lang['total']; ?></label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="bedtotalprice" name="total_amnt" value="">
                                <?php echo form_error('total_amnt', '<div class="alert alert-danger alert-dismissible alertsm">', '</div>'); ?>
                            </div>

                            <label for="bedpaidprice"
                                class="col-sm-1 col-form-label"><?php echo $lang['paid']; ?></label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="bedpaidprice" name="paid_amnt" value="">
                                <?php echo form_error('paid_amnt', '<div class="alert alert-danger alert-dismissible alertsm">', '</div>'); ?>
                            </div>

                            <label for="bedbalprice"
                                class="col-sm-1 col-form-label"><?php echo $lang['balance']; ?></label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="bedbalprice" name="bal_amnt" value=""
                                    readonly>
                                <?php echo form_error('bal_amnt', '<div class="alert alert-danger alert-dismissible alertsm">', '</div>'); ?>
                            </div>
                        </div>

                    </div>
                    <div class="card-footer">
                        <button type="submit" name="savebedant"
                            class="btn btn-success"><?php echo $lang['create']; ?></button>
                        <a href="<?php echo $burl; ?>admin/invoices"
                            class="btn btn-warning"><?php echo $lang['cancel']; ?></a>
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