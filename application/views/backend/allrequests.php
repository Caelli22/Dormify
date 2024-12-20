<!-- content Wrapper. Contains page content -->
<div class="container-fluid">
  <div class="col-sm-6">
    <h1>Service Requests</h1>
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
                  <th width="5%"><?php echo $lang['id']; ?></th>
                  <th width="20%"><?php echo $lang['tenant']; ?></th>
                  <th width="10%">Service</th>
                  <th width="10%"><?php echo $lang['requestdate']; ?></th>
                  <th width="10%"><?php echo $lang['status']; ?></th>
                  <th width="10%">Notes</th>
                  <th width="7%"></th>
                </tr>
              </thead>
              <tbody>

                <?php
                $current_user_id = $userdata['user_id'];
                $user_type = $userdata['user_type'];

                $filtered_requests = $user_type === 'admin'
                  ? $requests // Admins can see all requests
                  : array_filter($requests, function ($req) use ($current_user_id) {
                    return isset($req['request_ten_uid']) && $req['request_ten_uid'] == $current_user_id;
                  });
                ?>

                <?php
                foreach ($filtered_requests as $req) {
                  ?>
                  <tr>
                    <td><?php echo $req['id']; ?></td>
                    <td><?php echo (isset($req['tenant'])) ? $req['tenant']['ten_name'] : ''; ?></td>
                    <td><?php echo (isset($req['es'])) ? $req['es']['es_name'] : ''; ?></td>
                    <td><?php echo $req['request_create_date']; ?></td>
                    <td><?php echo $req['request_status']; ?></td>
                    <td><?php echo $req['request_notes']; ?></td>
                    <td>
                      <?php if ($userdata['user_type'] == 'super_admin' || $userdata['user_type'] == 'admin') { ?>
                        <?php if ($req['request_status'] == 'PENDING') { ?>
                          <?php if (isset($req['bed'])) { ?>
                            <a href="beds/assign/<?php echo $req['request_bed_uid']; ?>/<?php echo $req['request_ten_uid']; ?>/<?php echo $req['id']; ?>"
                              title="<?php echo $lang['approverequest']; ?>" class="btn btn-success btn-xs"><i
                                class="fas fa-check"></i></a>
                          <?php } else { ?>
                            <a href="acceptrequest/<?php echo $req['id']; ?>" title="<?php echo $lang['approverequest']; ?>"
                              class="btn btn-success btn-xs"><i class="fas fa-check"></i></a>
                          <?php } ?>
                          <a href="rejectrequest/<?php echo $req['id']; ?>" title="<?php echo $lang['rejectrequest']; ?>"
                            class="btn btn-danger btn-xs"><i class="fas fa-times"></i></a>
                        <?php } ?>
                      <?php } ?>
                    </td>
                  </tr>
                  <?php
                }
                ?>


              </tbody>

            </table>
          </div>
        </div>
        <!-- /.box -->
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->