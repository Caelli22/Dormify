
  <!-- Content Wrapper. Contains page content -->
  <div class="container-fluid">


    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"><?php echo $lang['notices']; ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="card-body">
              <?php if($state == 'add' || $state == 'edit') { ?>
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
