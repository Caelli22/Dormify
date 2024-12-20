<!-- Content Wrapper. Contains page content -->
<div class="container-fluid">
  <!-- Content Header (Page header) -->
  <div class="col-sm-6">
    <h1>Rooms</h1>
  </div>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <!-- /.box-header -->
          <div class="card-body">
            <table id="example1" class="table responsive table-bordered table-hover dt-responsive nowrap">
              <thead>
                <tr>
                  <th width="5%"><?php echo $lang['id']; ?></th>
                  <th width="20%"><?php echo $lang['name']; ?></th>
                  <th width="25%"><?php echo $lang['details']; ?></th>
                  <th width="10%"><?php echo $lang['price']; ?></th>
                  <th width="10%"><?php echo $lang['total'].' '.$lang['beds']; ?></th>
                  <th width="10%"><?php echo $lang['available'].' '.$lang['beds']; ?></th>
                  <?php if ($isadmin) { ?>
                    <th><?php echo $lang['branch']; ?></th>
                  <?php } ?>
                  <th width="10%"></th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ($roomlist as $room) {
                ?>
                <tr>
                  <td><?php echo $room['room_uid']; ?></td>
                  <td><?php echo $room['room_name']; ?></td>
                  <td><?php echo $room['room_details']; ?></td>
                  <td><?php echo $room['room_price']; ?></td>
                  <td><?php echo $room['allbeds']; ?></td>
                  <td><?php echo $room['avlbeds']; ?></td>
                  <?php if ($isadmin) { ?>
                    <td><?php echo $room['branch']; ?></td>
                  <?php } ?>
                  <td>
                    <a href="roomstructure/<?php echo $room['room_uid']; ?>" title="<?php echo $lang['viewroom']; ?>" class="btn btn-primary btn-xs"><i class="fas fa-eye"></i></a>
                    <a href="rooms/edit/<?php echo $room['room_uid']; ?>" title="<?php echo $lang['edit'].' '.$lang['room']; ?>" class="btn btn-warning btn-xs"><i class="far fa-edit"></i></a>
                    <a href="JavaScript:Void(0);" onclick="return deleteroom('<?php echo $room['room_uid']; ?>');" title="<?php echo $lang['delete'].' '.$lang['room']; ?>" class="btn btn-danger btn-xs"><i class="fas fa-trash-alt"></i></a>
                  </td>
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
