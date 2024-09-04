<!-- Content Wrapper. Contains page content -->
<div class="container-fluid">
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              <?php echo $lang[ 'tenants']; ?>
            </h3>
          </div>
          <!-- /.box-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-hover table-responsive">
              <thead>
                <tr>
                  <th>
                    <?php echo $lang[ 'id']; ?>
                  </th>
                  <th class="col-2">
                    <?php echo $lang[ 'photo']; ?>
                  </th>
                  <th class="col-2">
                    <?php echo $lang[ 'name']; ?>
                  </th>
                  <th>
                    <?php echo $lang[ 'gender']; ?>
                  </th>
                  <?php if($isadmin) { ?>
                    <th>
                      <?php echo $lang[ 'branch']; ?>
                    </th>
                    <?php } ?>
                      <th class="col-3">
                        <?php echo $lang[ 'contact']; ?>
                      </th>
                      <th class="col-3">
                        <?php echo $lang[ 'roomnbed']; ?>
                      </th>
                      <th>
                        <?php echo $lang[ 'status']; ?>
                      </th>
                      <th class="text-center">
                        Actions
                      </th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($tenlist as $tenant) { ?>
                  <tr>
                    <td>
                      <?php echo $tenant[ 'ten_uid']; ?>
                    </td>
                    <td class="text-center">
                      <img src="<?php echo base_url(); ?>assets/usr_pics/<?php echo $tenant['ten_pic']; ?>"
                      class="img-fluid rounded-circle" alt="<?php echo $tenant['ten_name']; ?>"
                      style="width: 50px; height: 50px;">
                    </td>
                    <td>
                      <?php echo $tenant[ 'ten_name']; ?>
                    </td>
                    <td>
                      <?php if($tenant[ 'ten_gender']=='M' ) { ?>
                        <i class="fa fa-mars text-primary">
                        </i>
                        Male
                        <?php } else { ?>
                          <i class="fa fa-venus text-danger">
                          </i>
                          Female
                          <?php } ?>
                    </td>
                    <?php if($isadmin) { ?>
                      <td>
                        <?php echo $tenant[ 'branch']; ?>
                      </td>
                      <?php } ?>
                        <td>
                          <b>
                            Email:
                          </b>
                          <?php echo $tenant[ 'ten_email']; ?>
                            <br>
                            <b>
                              Mobile:
                            </b>
                            <?php echo $tenant[ 'ten_contact']; ?>
                              <br>
                              <b>
                                Address:
                              </b>
                              <?php echo $tenant[ 'ten_address']; ?>
                                <br>
                        </td>
                        <td>
                          <b>
                            Room:
                          </b>
                          <?php echo $tenant[ 'room']; ?>
                            <br>
                            <b>
                              Bed:
                            </b>
                            <?php echo $tenant[ 'bed']; ?>
                              <br>
                        </td>
                        <td>
                          <?php if($tenant[ 'ten_isactive']==1 ){ ?>
                            <span class="badge bg-success">
                              <?php echo $lang[ 'active']; ?>
                            </span>
                            <?php } else { ?>
                              <span class="badge bg-warning text-dark">
                                <?php echo $lang[ 'inactive']; ?>
                              </span>
                              <?php } ?>
                        </td>
                        <td class="text-center">
                          <div class="d-flex justify-content-center">
                            <a href="tenant/<?php echo $tenant['ten_uid']; ?>" class="btn btn-primary btn-sm mx-1"
                            title="<?php echo $lang['view_tenant']; ?>">
                              <i class="fas fa-eye">
                              </i>
                            </a>
                            <a href="edittenant/<?php echo $tenant['ten_uid']; ?>" class="btn btn-warning btn-sm mx-1"
                            title="<?php echo $lang['edit'].' '.$lang['tenant']; ?>">
                              <i class="far fa-edit">
                              </i>
                            </a>
                            <a href="JavaScript:void(0);" onclick="return deletetenant('<?php echo $tenant['ten_uid']; ?>');"
                            class="btn btn-danger btn-sm mx-1" title="<?php echo $lang['delete'].' '.$lang['tenant']; ?>">
                              <i class="fas fa-trash-alt">
                              </i>
                            </a>
                            <?php if($tenant[ 'room'] !='N/A' && $tenant[ 'bed'] !='N/A' ){ ?>
                              <a href="JavaScript:void(0);" onclick="return retractTenBed('<?php echo $tenant['ten_uid']; ?>');"
                              title="<?php echo $lang['retract'].' '.$lang['bed']; ?>" class="btn btn-primary btn-sm mx-1">
                                <i class="far fa-minus-square">
                                </i>
                              </a>
                              <?php } else { ?>
                                <a href="tenants/assignbed/<?php echo $tenant['ten_uid']; ?>" title="<?php echo $lang['assign'].' '.$lang['bed']; ?>"
                                class="btn btn-primary btn-sm mx-1">
                                  <i class="far fa-plus-square">
                                  </i>
                                </a>
                                <?php } ?>
                          </div>
                        </td>
                  </tr>
                  <?php } ?>
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