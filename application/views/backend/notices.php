<!-- Content Wrapper. Contains page content -->
<div class="container-fluid">
  <div class="col-sm-6">
    <h1>Notices</h1>
  </div>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-12">
        <div class="card">

          <!-- /.box-header -->
          <div class="card-body">
            <?php if ($state == 'add' || $state == 'edit') { ?>
              *<?php echo $lang['noticenote']; ?>
            <?php } ?>
            <?php echo $gc->output; ?>
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