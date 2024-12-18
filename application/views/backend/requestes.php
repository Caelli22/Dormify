<!-- content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Service Request</h1>
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
          $attributes = array('class' => 'form-horizontal', 'id' => 'assignbed');
          echo form_open_multipart("admin/processRequestEs", $attributes);
          ?>
          <div class="card-body">
            <input type="hidden" name="assignbed_tenant" value="<?php echo $tenuid; ?>">
            <input type="hidden" name="request_from" value="tenants">

            <div class="form-group row roomselectionform">
              <label for="tenantes" class="col-sm-1 col-form-label">Service</label>

              <div class="col-sm-4">
                <select class="form-control smartselect" id="tenantes" name="es_uid">
                  <option value="">--<?php echo $lang['select'] . ' '; ?>--</option>
                  <?php
                  foreach ($alles as $es) {
                    ?>
                    <option value="<?php echo $es['id']; ?>" data-baseprice="<?php echo $es['es_price']; ?>">
                      <?php echo $es['es_name']; ?></option>
                    <?php
                  }
                  ?>
                </select>
                <?php echo form_error('es_uid', '<div class="alert alert-danger alert-dismissible alertsm">', '</div>'); ?>
              </div>
            </div>


            <div class="form-group row">
              <label for="bedtotalprice" class="col-sm-1 col-form-label">Note/Details</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" id="tenantnote" name="note">
              </div>
            </div>


          </div>
          <div class="card-footer">
            <button type="submit" name="savebedant" class="btn btn-success">Submit</button>
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