            <div class="container-fluid">
                <!-- Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                  
                </div>

                <?php if(isset($userdata) && $userdata['user_type'] == 'member') { ?>

<div class="row">
  
  <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-danger shadow h-100 py-2">
          <div class="card-body">
              <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                          <?php echo $lang['total'].' '.$lang['balance'].' '.$lang['amount']; ?>
                      </div>
                      <div class="h3 mb-0 font-weight-bold text-gray-800">
                          <?php echo $options['currency_symbol']; ?> <?php echo amnt($usercounts['upaidamnt']); ?>
                      </div>
                  </div>
                  <div class="col-auto">
                      <i class="fas fa-money-bill-wave fa-2x text-gray-300"></i>
                  </div>
              </div>
          </div>
          <a href="<?php echo $burl; ?>admin/tenant/<?php echo $userdata['user_id']; ?>/tenantview#allpayments" class="card-footer text-danger small-box-footer">
              <?php echo $lang['viewmore']; ?> <i class="fa fa-arrow-circle-right"></i>
          </a>
      </div>
  </div>


  <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
          <div class="card-body">
              <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                          <?php echo $lang['total'].' '.$lang['paid'].' '.$lang['amount']; ?>
                      </div>
                      <div class="h3 mb-0 font-weight-bold text-gray-800">
                          <?php echo $options['currency_symbol']; ?> <?php echo amnt($usercounts['paidamnt']); ?>
                      </div>
                  </div>
                  <div class="col-auto">
                      <i class="fas fa-money-bill-wave fa-2x text-gray-300"></i>
                  </div>
              </div>
          </div>
          <a href="<?php echo $burl; ?>admin/tenant/<?php echo $userdata['user_id']; ?>/tenantview#allpayments" class="card-footer text-success small-box-footer">
              <?php echo $lang['viewmore']; ?> <i class="fa fa-arrow-circle-right"></i>
          </a>
      </div>
  </div>


  <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
          <div class="card-body">
              <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                          <?php echo $lang['total'].' '.$lang['unpaid'].' '.$lang['invoices']; ?>
                      </div>
                      <div class="h3 mb-0 font-weight-bold text-gray-800">
                          <?php echo $usercounts['upaidinv']; ?>
                      </div>
                  </div>
                  <div class="col-auto">
                      <i class="fas fa-file-alt fa-2x text-gray-300"></i>
                  </div>
              </div>
          </div>
          <a href="<?php echo $burl; ?>admin/tenant/<?php echo $userdata['user_id']; ?>/tenantview#pendinginv" class="card-footer text-warning small-box-footer">
              <?php echo $lang['viewmore']; ?> <i class="fa fa-arrow-circle-right"></i>
          </a>
      </div>
  </div>


  <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
          <div class="card-body">
              <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                          <?php echo $lang['assigned'].' '.$lang['extraservices']; ?>
                      </div>
                      <div class="h3 mb-0 font-weight-bold text-gray-800">
                          <?php echo $usercounts['alles']; ?>
                      </div>
                  </div>
                  <div class="col-auto">
                      <i class="fas fa-utensils fa-2x text-gray-300"></i>
                  </div>
              </div>
          </div>
          <a href="<?php echo $burl; ?>admin/tenant/<?php echo $userdata['user_id']; ?>/tenantview#alles" class="card-footer text-success small-box-footer">
              <?php echo $lang['viewmore']; ?> <i class="fa fa-arrow-circle-right"></i>
          </a>
      </div>
  </div>



</div>
<!-- /.row -->

                <?php } else { ?>

                
                <div class="row">
                    <!-- col1 -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-info shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                            <?php echo $lang['total'].' '.$lang['tenants']; ?></div>
                                        <div class="h3 mb-0 font-weight-bold text-gray-800">
                                            <?php echo $modulecounts['tenants']; ?>
                                        </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                                <a href="<?php echo $burl; ?>admin/tenants" class="card-footer text-info small-box-footer">
                            <?php echo $lang['viewmore']; ?> <i class="fa fa-arrow-circle-right"></i>
                        </a>
                        </div>
                    </div>
                    <!-- col2 -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            <?php echo $lang['total'].' '.$lang['rooms']; ?></div>
                                        <div class="h3 mb-0 font-weight-bold text-gray-800">
                                            <?php echo $modulecounts['rooms']; ?>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-home fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo $burl; ?>admin/rooms" class="card-footer text-success small-box-footer">
                                <?php echo $lang['viewmore']; ?> <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                    <!-- col3 -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                <?php echo $lang['total'].' '.$lang['beds']; ?></div>
                                            <div class="h3 mb-0 font-weight-bold text-gray-800">
                                                <?php echo $modulecounts['beds']; ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-bed fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                                <a href="<?php echo $burl; ?>admin/beds" class="card-footer text-warning small-box-footer">
                                    <?php echo $lang['viewmore']; ?> <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
                    <!-- col4 -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-danger shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                            <?php echo $lang['unpaid'].' '.$lang['invoices']; ?></div>
                                        <div class="h3 mb-0 font-weight-bold text-gray-800">
                                            <?php echo $modulecounts['upaidinv']; ?>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-file-invoice fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo $burl; ?>admin/invoices" class="card-footer text-danger small-box-footer">
                                <?php echo $lang['viewmore']; ?> <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                
                </div>
                
                <div class="row">

            <!-- col5 -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-danger shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                    <?php echo $lang['total'].' '.$lang['balance'].' '.$lang['amount']; ?></div>
                                <div class="h3 mb-0 font-weight-bold text-gray-800">
                                    <?php echo $options['currency_symbol']; ?> <?php echo amnt($modulecounts['upaidamnt']); ?>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-money-bill-wave fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                    <a href="<?php echo $burl; ?>admin/invoices" class="card-footer text-danger small-box-footer">
                        <?php echo $lang['viewmore']; ?> <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>


    <!-- col6 -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            <?php echo $lang['total'].' '.$lang['paid'].' '.$lang['amount']; ?></div>
                        <div class="h3 mb-0 font-weight-bold text-gray-800">
                            <?php echo $options['currency_symbol']; ?> <?php echo amnt($modulecounts['paidamnt']); ?>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-money-bill-wave fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
            <a href="<?php echo $burl; ?>admin/payments" class="card-footer text-success small-box-footer">
                <?php echo $lang['viewmore']; ?> <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>

    <!-- col7 -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            <?php echo date("F"); ?> <?php echo $lang['income']; ?>
                        </div>
                        <div class="h3 mb-0 font-weight-bold text-gray-800">
                            <?php echo $options['currency_symbol']; ?> <?php echo amnt($modulecounts['thismonthincome']); ?>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-money-bill-wave fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
            <a href="<?php echo $burl; ?>admin/payments" class="card-footer text-success small-box-footer">
                <?php echo $lang['viewmore']; ?> <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>

    <!-- col8 -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            <?php echo date("F"); ?> <?php echo $lang['expense']; ?>
                        </div>
                        <div class="h3 mb-0 font-weight-bold text-gray-800">
                            <?php echo $options['currency_symbol']; ?> <?php echo amnt($modulecounts['thismonthexpense']); ?>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-money-bill-wave fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
            <a href="<?php echo $burl; ?>admin/expenses" class="card-footer text-warning small-box-footer">
                <?php echo $lang['viewmore']; ?> <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>

            </div>
            <!-- /.row -->
                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Earnings Overview</h6>
                                    <div class="dropdown no-arrow">
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Dropdown Header:</div>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="myAreaChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        

                        <!-- Pie Chart -->
                            <div class="col-xl-4 col-lg-5">
                                <div class="card shadow mb-4">
                                    <!-- Card Header -->
                                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary">Income and Expenses</h6>
                                    </div>
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <div class="chart-pie pt-4 pb-2">
                                            <canvas id="ie_chart"></canvas>
                                        </div>
                                        <div class="mt- text-center small">                                     
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
            <?php } ?>
            </div>
            <div>
            </div>

<!-- /.content-wrapper -->


<!-- Include Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- JavaScript for Pie Chart -->
<script>
    // Fetch PHP data
    var income = <?php echo json_encode($modulecounts['thismonthincome']); ?>;
    var expenses = <?php echo json_encode($modulecounts['thismonthexpense']); ?>;

    // Create the pie chart
    var ctx = document.getElementById('ie_chart').getContext('2d');
    var ie_chart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Income', 'Expenses'],
            datasets: [{
                data: [income, expenses],
                backgroundColor: ['#4e73df', '#1cc88a'],
                hoverBackgroundColor: ['#2e59d9', '#17a673'],
                hoverBorderColor: "rgba(234, 236, 244, 1)",
            }],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'bottom',
                },
                tooltip: {
                    callbacks: {
                        label: function(tooltipItem) {
                            return tooltipItem.label + ': $' + tooltipItem.raw.toFixed(2);
                        }
                    }
                }
            }
        }
    });
</script>