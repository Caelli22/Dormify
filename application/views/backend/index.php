<div class="container-fluid">
    <!-- Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>

    </div>

    <?php if (isset($userdata) && $userdata['user_type'] == 'member') { ?>

        <div class="row">
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-danger shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                    <?php echo $lang['total'] . ' ' . $lang['balance'] . ' ' . $lang['amount']; ?>
                                </div>
                                <div class="h3 mb-0 font-weight-bold text-gray-800">
                                    <?php echo $options['currency_symbol']; ?>     <?php echo amnt($usercounts['upaidamnt']); ?>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-money-bill-wave fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                    <a href="<?php echo $burl; ?>admin/tenant/<?php echo $userdata['user_id']; ?>/tenantview#allpayments"
                        class="card-footer text-danger small-box-footer">
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
                                    <?php echo $lang['total'] . ' ' . $lang['paid'] . ' ' . $lang['amount']; ?>
                                </div>
                                <div class="h3 mb-0 font-weight-bold text-gray-800">
                                    <?php echo $options['currency_symbol']; ?>     <?php echo amnt($usercounts['paidamnt']); ?>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-money-bill-wave fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                    <a href="<?php echo $burl; ?>admin/tenant/<?php echo $userdata['user_id']; ?>/tenantview#allpayments"
                        class="card-footer text-success small-box-footer">
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
                                    <?php echo $lang['total'] . ' ' . $lang['unpaid'] . ' ' . $lang['invoices']; ?>
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
                    <a href="<?php echo $burl; ?>admin/tenant/<?php echo $userdata['user_id']; ?>/tenantview#pendinginv"
                        class="card-footer text-warning small-box-footer">
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
                                    <?php echo $lang['total'] . ' ' . $lang['unpaid'] . ' ' . $lang['invoices']; ?>
                                </div>
                                <div class="h3 mb-0 font-weight-bold text-gray-800">
                                    <?php echo $usercounts['paidinv']; ?>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-file-alt fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                    <a href="<?php echo $burl; ?>admin/tenant/<?php echo $userdata['user_id']; ?>/tenantview#pendinginv"
                        class="card-footer text-success small-box-footer">
                        <?php echo $lang['viewmore']; ?> <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>



        </div>
        <!-- /.row -->

    <?php } else { ?>

        <div class="row">
            <!-- col1 -->
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                    <?php echo $lang['total'] . ' ' . $lang['tenants']; ?>
                                </div>
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
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    <?php echo $lang['total'] . ' ' . $lang['rooms']; ?>
                                </div>
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
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    <?php echo $lang['total'] . ' ' . $lang['beds']; ?>
                                </div>
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

        </div>

        <div class="row">
            <!-- col4 -->
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-danger shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                    <?php echo $lang['unpaid'] . ' ' . $lang['invoices']; ?>
                                </div>
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

            <!-- col5 -->
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-danger shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                    <?php echo $lang['total'] . ' ' . $lang['balance'] . ' ' . $lang['amount']; ?>
                                </div>
                                <div class="h3 mb-0 font-weight-bold text-gray-800">
                                    <?php echo $options['currency_symbol']; ?>
                                    <?php echo amnt($modulecounts['upaidamnt']); ?>
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
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    <?php echo $lang['total'] . ' ' . $lang['paid'] . ' ' . $lang['amount']; ?>
                                </div>
                                <div class="h3 mb-0 font-weight-bold text-gray-800">
                                    <?php echo $options['currency_symbol']; ?>
                                    <?php echo amnt($modulecounts['paidamnt']); ?>
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



        </div>
        <!-- /.row -->
        <div class="row">
            <!-- Pie Chart -->


            <div class="col-xl-12 col-lg-5">
                <div class="card shadow mb-4">
                    <!-- Card Header -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Tenants, Rooms, and Beds</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-pie pt-4 pb-2">
                            <canvas id="nextchart"></canvas>
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

    // Create the bar chart
    var ctx = document.getElementById('ie_chart').getContext('2d');
    var ie_chart = new Chart(ctx, {
        type: 'bar',  // Changed to 'bar'
        data: {
            labels: ['Income', 'Expenses'],  // Labels for the X-axis
            datasets: [{
                label: 'Amount (₱)',  // Label for the data
                data: [income, expenses],  // Data for income and expenses
                backgroundColor: ['#1cc88a', '#4e73df'],  // Bar colors matching the previous pie chart
            }],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false,  // Hide legend since we have only one dataset
                },
                tooltip: {
                    callbacks: {
                        label: function (tooltipItem) {
                            return tooltipItem.label + ': ₱' + tooltipItem.raw.toFixed(2);
                        }
                    }
                }
            },
            scales: {
                x: {
                    beginAtZero: true  // Ensure the X-axis starts from zero
                },
                y: {
                    beginAtZero: true,  // Ensure the Y-axis starts from zero
                    ticks: {
                        callback: function (value) {
                            return '₱' + value;  // Add dollar signs to the Y-axis ticks
                        }
                    }
                }
            }
        }
    });
</script>




<script>
    // Fetch PHP data
    var tenants = <?php echo json_encode($modulecounts['tenants']); ?>;
    var rooms = <?php echo json_encode($modulecounts['rooms']); ?>;
    var beds = <?php echo json_encode($modulecounts['beds']); ?>;

    // Create the donut chart
    var ctx = document.getElementById('nextchart').getContext('2d');
    var nextchart = new Chart(ctx, {
        type: 'doughnut',  // Changed to 'doughnut' for a donut chart
        data: {
            labels: ['Tenants', 'Rooms', 'Beds'],  // Labels for the data
            datasets: [{
                label: 'Count',
                data: [tenants, rooms, beds],  // Data for tenants, rooms, and beds
                backgroundColor: ['#17a2b8', '#28a745', '#ffc107'],  // Colors for each section
            }],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'bottom',  // Position the legend at the bottom
                },
                tooltip: {
                    callbacks: {
                        label: function (tooltipItem) {
                            return tooltipItem.label + ': ' + tooltipItem.raw.toFixed();  // Tooltip format with rounded values
                        }
                    }
                }
            },
            cutout: '50%',  // Create the "donut" hole in the middle
        }
    });
</script>