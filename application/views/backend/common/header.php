<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
     
    


    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/plugins/iCheck/all.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/plugins/morris/morris.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/plugins/datatables-responsive/css/responsive.bootstrap4.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/plugins/jvectormap/jquery-jvectormap-1.2.2.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/plugins/datepicker/datepicker3.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/plugins/daterangepicker/daterangepicker.css">
    
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/plugins/select2/select2.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/plugins/select2/select2-bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">




    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/modern/vendor/fontawesome-free/css/all.min.css"  type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/modern/css/sb-admin-2.min.css" >

    
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <script src="<?php echo base_url(); ?>assets/backend/plugins/sweetalert/sweetalert2.min.js"></script>
    
    <style>
        @media print {
            body * {
            visibility: hidden;
            }
            .invoice, .invoice * {
            visibility: visible;
            }
            .invoice {
            position: absolute;
            left: 0;
            top: 0;
            }
            .no-print {
            display: none !important;
            }
        }
    </style>



</head>

<body id="page-top">
    <div id="wrapper">
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo $burl; ?>admin/dashboard">
                <div class="sidebar-brand-icon rotate-n-15">
                    <!-- <i class="fas fa-laugh-wink"></i> -->
                </div>
                <div class="sidebar-brand-text mx-3">Dormify</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Dashboard -->
            <li class="nav-item active">
                <a class="nav-link <?php if($cpage == 'dashboard') echo"active"; ?>" href="<?php echo $burl; ?>admin/dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Member Dashboard -->

            <?php if(isset($userdata) && $userdata['user_type'] == 'member') { ?>
                
               
                <!-- My Profile --> 
                <li class="nav-item">
                    <a href="<?php echo $burl; ?>admin/tenant/<?php echo $userdata['user_id']; ?>/tenantview" class="nav-link <?php if($cpage == 'tenants') echo"active"; ?>">
                    <i class="nav-icon fas fa-user"></i>
                    <span><?php echo $lang['myprofile']; ?></span></a>
                </li>

                <!-- Make Requests -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSettings"
                        aria-expanded="true" aria-controls="collapseSettings">
                        <i class="fas fa-plus"></i>
                        <span>Make Request</span>
                    </a>
                    <div id="collapseSettings" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Options:</h6>
                            <a class="collapse-item" href="<?php echo $burl; ?>admin/requestbed">Request Bed</a>
                            <a class="collapse-item" href="<?php echo $burl; ?>admin/requestes">Request Categories</a>
                            <a class="collapse-item" href="<?php echo $burl; ?>admin/allrequests">All Request</a>
                        </div>
                    </div>
                </li>

                <!-- Make Payment -->
                <li class="nav-item">
                    <a href="<?php echo $burl; ?>admin/makepayment" class="nav-link <?php if($cpage == 'payments') echo"active"; ?>">
                    <i class="nav-icon fas fa-money-check-alt"></i>
                    <span><?php echo $lang['make'].' '.$lang['payment']; ?></span></a>
                </li>
                
                <!-- Notices -->
                <li class="nav-item">
                    <a href="<?php echo $burl; ?>admin/notices" class="nav-link <?php if($cpage == 'notices') echo"active"; ?>">
                    <i class="nav-icon fas fa-thumbtack"></i>
                    <span><?php echo $lang['notices'];?></span></a>
                </li>

                <!-- Events -->
                <li class="nav-item">
                    <a href="<?php echo $burl; ?>admin/events" class="nav-link <?php if($cpage == 'events') echo"active"; ?>">
                    <i class="nav-icon far fa-calendar-alt"></i>
                    <span><?php echo $lang['events']; ?></span></a>
                </li>
            <?php } 

            else { ?>

            <!-- Nav Item - Tenant Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed <?php if($cpage == 'tenants' || $cpage == 'newtenant') echo"active"; ?>" href="#" data-toggle="collapse" data-target="#collapseTenants"
                    aria-expanded="true" aria-controls="collapseTenants">
                    <i class="fas fa-users"></i>
                    <span>Tenant</span>
                </a>
                <div id="collapseTenants" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Tenants Options:</h6>
                        <a class="collapse-item" href="<?php echo $burl; ?>admin/tenants">Manage Tenant</a>
                        <a class="collapse-item" href="<?php echo $burl; ?>admin/tenants/add">New Tenant</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Rooms Collapse Menu -->
            <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseRooms"
                        aria-expanded="true" aria-controls="collapseRooms">
                        <i class="fas fa-home"></i>
                        <span>Rooms</span>
                    </a>
                    <div id="collapseRooms" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Rooms Options:</h6>
                            <a class="collapse-item" href="<?php echo $burl; ?>admin/rooms">Manage Room</a>
                            <a class="collapse-item" href="<?php echo $burl; ?>admin/rooms/add">New Room</a>
                        </div>
                    </div>
                </li>

            <!-- Nav Item - Beds Collapse Menu -->
            <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBeds"
                        aria-expanded="true" aria-controls="collapseBeds">
                        <i class="fas fa-bed"></i>
                        <span>Beds</span>
                    </a>
                    <div id="collapseBeds" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Beds Options:</h6>
                            <a class="collapse-item" href="<?php echo $burl; ?>admin/beds">Manage Beds</a>
                            <a class="collapse-item" href="<?php echo $burl; ?>admin/beds/add">New Bed</a>
                        </div>
                    </div>
                </li>

            <!-- Nav Item - Extra Service Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseExtraService"
                        aria-expanded="true" aria-controls="collapseExtraService">
                        <i class="fas fa-external-link-alt"></i>
                        <span>Extra Service</span>
                    </a>
                    <div id="collapseExtraService" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Extra Service Options:</h6>
                            <a class="collapse-item" href="<?php echo $burl; ?>admin/extraservices">Manage Extra Service</a>
                            <a class="collapse-item" href="<?php echo $burl; ?>admin/extraservices/add">New Extra Service</a>
                        </div>
                    </div>
                </li>

            <!-- Nav Item - Invoices Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseInvoices"
                        aria-expanded="true" aria-controls="collapseInvoices">
                        <i class="fas fa-money-check-alt"></i>
                        <span>Accounting</span>
                    </a>
                    <div id="collapseInvoices" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Accounting Options:</h6>
                            <a class="collapse-item" href="<?php echo $burl; ?>admin/invoices">View Invoices</a>
                            <a class="collapse-item" href="<?php echo $burl; ?>admin/newinvoice">Generate Invoices</a>
                            <a class="collapse-item" href="<?php echo $burl; ?>admin/payments">View Payments</a>
                            <a class="collapse-item" href="<?php echo $burl; ?>admin/payments/add">Add Payment</a>
                            <a class="collapse-item" href="<?php echo $burl; ?>admin/expenses">View Expenses</a>
                            <a class="collapse-item" href="<?php echo $burl; ?>admin/expenses/add">Add Expense</a>
                        </div>
                    </div>
                </li>   
                
            <!-- Nav Item - Reports Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseReport"
                        aria-expanded="true" aria-controls="collapseReport">
                        <i class="fas fa-file-alt"></i>
                        <span>Reports</span>
                    </a>
                    <div id="collapseReport" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Reports Options:</h6>
                            <a class="collapse-item" href="<?php echo $burl; ?>admin/reports/income">Income Report</a>
                            <a class="collapse-item" href="<?php echo $burl; ?>admin/reports/expense">Expense Report</a>
                        </div>
                    </div>
                </li>
            
            <!-- Nav Item - Notices Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseNotices"
                    aria-expanded="true" aria-controls="collapseNotices">
                    <i class="fas fa-thumbtack"></i>
                    <span>Notices</span>
                </a>
                <div id="collapseNotices" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Notices Options:</h6>
                        <a class="collapse-item" href="<?php echo $burl; ?>admin/notices">Manage Notices</a>
                        <a class="collapse-item" href="<?php echo $burl; ?>admin/notices/add">New Notice</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Requests -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo $burl; ?>admin/allrequests">
                    <i class="fas fa-plus"></i>
                    <span>All Requests</span></a>
            </li>


            <?php if(isset($userdata) && $userdata['user_type'] == 'admin') { ?>

            <!-- Nav Item - Settings Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSettings"
                        aria-expanded="true" aria-controls="collapseSettings">
                        <i class="fas fa-sliders-h"></i>
                        <span>Settings</span>
                    </a>
                    <div id="collapseSettings" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Settings:</h6>
                            <a class="collapse-item" href="<?php echo $burl; ?>admin/branches">Branches</a>
                            <a class="collapse-item" href="<?php echo $burl; ?>admin/expensecat">Expense Categories</a>
                            <a class="collapse-item" href="<?php echo $burl; ?>admin/complaintcat">Complaint Categories</a>
                            <a class="collapse-item" href="<?php echo $burl; ?>admin/emailtpl">Email Templates</a>
                        </div>
                    </div>
                </li>

            <!-- Nav Item - Website Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseWebsite"
                        aria-expanded="true" aria-controls="collapseWebsite">
                        <i class="far fa-window-maximize"></i>
                        <span>Manage Website</span>
                    </a>
                    <div id="collapseWebsite" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Website Settings:</h6>
                            <a class="collapse-item" href="<?php echo $burl; ?>admin/webpages">Website Pages</a>
                            <a class="collapse-item" href="<?php echo $burl; ?>admin/blog">Blog</a>
                            <a class="collapse-item" href="<?php echo $burl; ?>admin/gallery">Gallery</a>
                        </div>
                    </div>
                </li>

            <!-- Nav Item - Events -->
                <li class="nav-item">
                        <a class="nav-link" href="<?php echo $burl; ?>admin/events">
                            <i class="far fa-calendar-alt"></i>
                            <span>Events</span></a>
                </li>

            <!-- Nav Item - Users -->
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $burl; ?>admin/users">
                        <i class="fas fa-user"></i>
                        <span>Users</span></a>
                </li>

            
            <!-- Nav Item - Configurations -->
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $burl; ?>admin/configurations">
                        <i class="fas fa-cogs"></i>
                        <span>Configurations</span></a>
                </li>
            <?php } ?>
		
        <?php } ?>
            
            <!-- Nav Item - Configurations -->  
                <li class="nav-item">
                    <a href="<?php echo $burl; ?>admin/complaints" class="nav-link <?php if($cpage == 'complaints') echo"active"; ?>">
                    <i class="nav-icon fas fa-ticket-alt"></i>
                    <span><?php echo $lang['complaints']; ?></span></a>
                </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>



        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $userdata['user_name']; ?></span>
                                <img class="img-profile rounded-circle"
                                    src="<?php echo base_url(); ?>assets/usr_pics/<?php echo $userdata['profphoto']; ?>" alt="User Image">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="<?php echo $burl; ?>admin/changepassword">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Change Password
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>Sign Out
                                </a>
                            </div>
                        </li>

                        <!-- Logout Modal-->
                        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">Select "Sign Out" below if you are ready to end your current session.</div>
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                        <a class="btn btn-primary" href="<?php echo $burl; ?>admin/logout">Sign Out</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </ul>
                </nav>
        

                