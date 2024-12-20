<?php
if (!isset($beduid)) {
    $beduid = 0;
}
?>
<!-- content Wrapper. Contains page content -->
<div class="container-fluid">
  <div class="col-sm-6">
    <h1 class="card-title"><?php echo ($beduid == 0) ? $lang['addnewbed'] : $lang['editbed']; ?></h1>
  </div>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <!-- /.box-header -->
          <?php
          $attributes = array('class' => 'form-horizontal', 'id' => 'addnewbed');
          echo form_open_multipart("admin/savebed", $attributes); 
          ?>
          <div class="card-body">
            <input type="hidden" name="bed_uid" value="<?php echo $beduid; ?>">
            <div class="form-group row">
              <label for="bedname" class="col-sm-1 col-form-label"><?php echo $lang['name']; ?></label>
              <div class="col-sm-5">
                <input type="text" class="form-control" id="bedname" name="bed_name" placeholder="<?php echo $lang['name']; ?>" value="<?php echo ($beduid == 0) ? set_value('bed_name') : $beddata['bed_name']; ?>">
                <?php echo form_error('bed_name', '<div class="alert alert-danger alert-dismissible alertsm">', '</div>'); ?>
              </div>
              
              <label for="room" class="col-sm-1 col-form-label"><?php echo $lang['rooms']; ?></label>
              <div class="col-sm-5">
                <select class="form-control roomselect" id="bedroom" name="bed_room">
                  <optgroup class='def-cursor' label='<?php echo $lang['room']; ?>' data-totalbeds='<?php echo $lang['total'] . ' ' . $lang['beds']; ?>' data-availablebeds='<?php echo $lang['available'] . ' ' . $lang['beds']; ?>' data-baseprice='<?php echo $lang['base'] . ' ' . $lang['price']; ?>'>
                    <option value="" data-totalbeds='' data-availablebeds='' data-baseprice=''>--<?php echo $lang['select'] . ' ' . $lang['room']; ?>--</option>
                    <?php
                    $roomuid = ($beduid == 0) ? set_value('bed_room') : $beddata['bed_room'];
                    foreach ($allrooms as $room) {
                      $roomselected = ($roomuid == $room['room_uid']) ? 'selected' : '';
                    ?>
                      <option data-totalbeds="<?php echo $room['allbeds']; ?>" data-availablebeds="<?php echo $room['avlbeds']; ?>" data-baseprice="<?php echo $options['currency_symbol']; ?> <?php echo $room['room_price']; ?>" value="<?php echo $room['room_uid']; ?>" <?php echo $roomselected; ?>><?php echo $room['room_name']; ?></option>
                    <?php
                    }
                    ?>
                  </optgroup>
                </select>
                <?php echo form_error('bed_room', '<div class="alert alert-danger alert-dismissible alertsm">', '</div>'); ?>
              </div>
            </div>

            <div class="form-group row">
              <label for="roomdetails" class="col-sm-1 col-form-label"><?php echo $lang['details']; ?></label>
              <div class="col-sm-11">
                <textarea class="form-control" id="bed_details" name="bed_details"><?php echo ($beduid == 0) ? set_value('bed_details') : $beddata['bed_details']; ?></textarea>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" name="savebedant" class="btn btn-success"><?php echo $lang['save']; ?></button>
            <?php if ($beduid == 0) { ?> 
              <?php } ?>
            <a href="<?php echo $burl; ?>admin/beds" class="btn btn-warning"><?php echo $lang['cancel']; ?></a>
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
