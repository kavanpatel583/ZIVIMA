<?php include 'connection.php'; 
session_start();
if(!isset($_SESSION["aname"]))
{
	echo "<script>window.location='index.php';</script>";
}
?>
<!DOCTYPE html>
<!-- 
Template Name: Brunette - Responsive Bootstrap 4 Admin Dashboard Template
Author: Hencework
Contact: https://hencework.ticksy.com/

License: You must have a valid license purchased only from templatemonster to legally use the template for your project.
-->
<html lang="en">


<!-- Mirrored from hencework.com/theme/brunette/data-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Jan 2019 08:25:35 GMT -->
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Admin - Requested Problem</title>
    <meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Data Table CSS -->
    <link href="vendors/datatables.net-dt/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="vendors/datatables.net-responsive-dt/css/responsive.dataTables.min.css" rel="stylesheet" type="text/css" />

    <!-- Toggles CSS -->
    <link href="vendors/jquery-toggles/css/toggles.css" rel="stylesheet" type="text/css">
    <link href="vendors/jquery-toggles/css/themes/toggles-light.css" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="dist/css/style.css" rel="stylesheet" type="text/css">

</head>

<body>
    <!-- Preloader -->
    <div class="preloader-it">
        <div class="loader-pendulums"></div>
    </div>
    <!-- /Preloader -->
   
	<!-- HK Wrapper -->
	<div class="hk-wrapper hk-vertical-nav">

        <!-- Top Navbar -->
       <?php include 'Header.php';?>
        <!-- /Top Navbar -->

        <!-- Vertical Nav -->
            <?php include 'AdminSidebar.php'; ?>
        <!-- /Vertical Nav -->

        <!-- Setting Panel -->
        <div class="hk-settings-panel">
            <div class="nicescroll-bar position-relative">
                <div class="settings-panel-wrap">
                    <div class="settings-panel-head">
                        <img class="brand-img d-inline-block align-top" src="dist/img/logo-light.png" alt="brand" />
                        <a href="javascript:void(0);" id="settings_panel_close" class="settings-panel-close"><span class="feather-icon"><i data-feather="x"></i></span></a>
                    </div>
                    <hr>
                    <h6 class="mb-5">Layout</h6>
                    <p class="font-14">Choose your preferred layout</p>
                    <div class="layout-img-wrap">
                        <div class="row">
                            <a href="javascript:void(0);" class="col-6 mb-30 active">
                                <img class="rounded opacity-70" src="dist/img/layout1.png" alt="layout">
                                <i class="zmdi zmdi-check"></i>
                            </a>
                            <a href="dashboard2.html" class="col-6 mb-30">
                                <img class="rounded opacity-70" src="dist/img/layout2.png" alt="layout">
                                <i class="zmdi zmdi-check"></i>
                            </a>
                           <a href="dashboard3.html" class="col-6 mb-30">
                                <img class="rounded opacity-70" src="dist/img/layout3.png" alt="layout">
                                <i class="zmdi zmdi-check"></i>
                            </a>
							<a href="dashboard4.html" class="col-6 mb-30">
                                <img class="rounded opacity-70" src="dist/img/layout4.png" alt="layout">
                                <i class="zmdi zmdi-check"></i>
                            </a>
							<a href="dashboard5.html" class="col-6">
                                <img class="rounded opacity-70" src="dist/img/layout5.png" alt="layout">
                                <i class="zmdi zmdi-check"></i>
                            </a>
                        </div>
                    </div>
                    <hr>
                    <h6 class="mb-5">Navigation</h6>
                    <p class="font-14">Menu comes in two modes: dark & light</p>
                    <div class="button-list hk-nav-select mb-10">
                        <button type="button" id="nav_light_select" class="btn btn-outline-primary btn-sm btn-wth-icon icon-wthot-bg"><span class="icon-label"><i class="fa fa-sun-o"></i> </span><span class="btn-text">Light Mode</span></button>
                        <button type="button" id="nav_dark_select" class="btn btn-outline-light btn-sm btn-wth-icon icon-wthot-bg"><span class="icon-label"><i class="fa fa-moon-o"></i> </span><span class="btn-text">Dark Mode</span></button>
                    </div>
                    <hr>
                    <h6 class="mb-5">Top Nav</h6>
                    <p class="font-14">Choose your liked color mode</p>
                    <div class="button-list hk-navbar-select mb-10">
                        <button type="button" id="navtop_light_select" class="btn btn-outline-primary btn-sm btn-wth-icon icon-wthot-bg"><span class="icon-label"><i class="fa fa-sun-o"></i> </span><span class="btn-text">Light Mode</span></button>
                        <button type="button" id="navtop_dark_select" class="btn btn-outline-light btn-sm btn-wth-icon icon-wthot-bg"><span class="icon-label"><i class="fa fa-moon-o"></i> </span><span class="btn-text">Dark Mode</span></button>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between align-items-center">
                        <h6>Scrollable Header</h6>
                        <div class="toggle toggle-sm toggle-simple toggle-light toggle-bg-primary scroll-nav-switch"></div>
                    </div>
                    <button id="reset_settings" class="btn btn-primary btn-block btn-reset mt-30">Reset</button>
                </div>
            </div>
            <img class="d-none" src="dist/img/logo-light.png" alt="brand" />
            <img class="d-none" src="dist/img/logo-dark.png" alt="brand" />
        </div>
        <!-- /Setting Panel -->

        <!-- Main Content -->
        <div class="hk-pg-wrapper">
            <!-- Breadcrumb -->
            <nav class="hk-breadcrumb" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-light bg-transparent">
                <li class="breadcrumb-item"><a href="AdminDashboard.php">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="">Problem Statements</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Requested Problem</li>
                </ol>
            </nav>
            <!-- /Breadcrumb -->

            <!-- Container -->
            <div class="container">

                <!-- Title -->
                <div class="hk-pg-header">
                    <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="database"></i></span></span>Requested Problems</h4>
                </div>
                <!-- /Title -->

                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
                        
                        <section class="hk-sec-wrapper">
                            <div class="row">
                                <div class="col-sm">
                                    <div class="table-wrap">
                                        <!--Copy pdf print buttons -->
                                        <div class="dt-buttons btn-group">          
                                                <button class="btn btn-secondary buttons-copy buttons-html5 btn-outline-light btn-sm" tabindex="0" aria-controls="datable_3" type="button">
                                                    <span>Copy</span>
                                                </button> 
                                                <button class="btn btn-secondary buttons-csv buttons-html5 btn-outline-light btn-sm" tabindex="0" aria-controls="datable_3" type="button">
                                                    <span>CSV</span>
                                                </button> 
                                                <button class="btn btn-secondary buttons-excel buttons-html5 btn-outline-light btn-sm" tabindex="0" aria-controls="datable_3" type="button">
                                                    <span>Excel</span>
                                                </button> 
                                                <button class="btn btn-secondary buttons-pdf buttons-html5 btn-outline-light btn-sm" tabindex="0" aria-controls="datable_3" type="button">
                                                    <span>PDF</span>
                                                </button> 
                                                <button class="btn btn-secondary buttons-print btn-outline-light btn-sm" tabindex="0" aria-controls="datable_3" type="button"><span>Print</span>
                                            </button> 
                                        </div><!-- End of Copy-PDF-PRINT Buttons -->
                                        
                                        <!--Add button-->
                                        <!-- <button onClick="window.location='add_requested_problem.php';" class="btn btn-sm btn-success btn-wth-icon btn-lg" style="float:right;" >
                                        <span class=""><i class="ion ion-md-add-circle-outline"></i></span> </span>
                                            <span class="btn-text">Requested Problem</span> 
                                                <span class="icon-label"></span>
                                        </button> -->
                                        <!--End of Add button-->
                                        <hr/>
                                        <table id="datable_1" class="table table-hover w-100">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Title</th>
                                                    <th>Description</th>
                                                    <th>Added Datetime</th>
                                                    <th>District</th>
                                                    <th>District Collector</th>
                                                    <th>Is Approved</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php 
                                               $i=1;
                                                                   
                                               $res=mysqli_query($con,"select PS.*,DC.district_collector_name,D.district_name from tbl_problem_statement PS LEFT JOIN tbl_district_collector as DC ON DC.district_collector_id=PS.district_collector_id LEFT JOIN tbl_district as D on D.district_id=DC.district_id where PS.problem_st_isactive='no' ORDER BY problem_st_id ASC");
                                               while($row=mysqli_fetch_array($res))
                                              {
                                            ?>
                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $row["problem_st_title"]; ?></td>
                                                    <td><?php echo $row["problem_st_description"]; ?></td>
                                                    <td><?php echo $row["problem_st_added_datetime"]; ?></td>
                                                    <td><?php echo $row["district_name"]; ?></td>
                                                    <td><?php echo $row["district_collector_name"]; ?></td>
                                                    <td><?php echo $row["problem_st_isactive"]; ?></td>
                                                    <td><a class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" data-original-title="View More"><i class="icon" data-icon="y"></i></a>
                                                        <!-- <a class="btn btn-sm btn-outline-info"  data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="glyphicon glyphicon-pencil"></i></a>
                                                        <a class="btn btn-sm btn-outline-danger"  data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="glyphicon glyphicon-trash"></i></a> -->
                                                    </td>
                                                </tr>
                                              <?php 
                                              $i++;
                                            } ?>   
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </section>
                        
                    </div>
                </div>
                <!-- /Row --> 

            </div>
            <!-- /Container -->

            <!-- Footer -->
           <?php include 'Footer.php' ;?>
            <!-- /Footer -->

        </div>
        <!-- /Main Content -->

    </div>
    <!-- /HK Wrapper -->

    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Slimscroll JavaScript -->
    <script src="dist/js/jquery.slimscroll.js"></script>

    <!-- Data Table JavaScript -->
    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="vendors/datatables.net-dt/js/dataTables.dataTables.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="dist/js/dataTables-data.js"></script>

    <!-- FeatherIcons JavaScript -->
    <script src="dist/js/feather.min.js"></script>

    <!-- Fancy Dropdown JS -->
    <script src="dist/js/dropdown-bootstrap-extended.js"></script>

    <!-- Toggles JavaScript -->
    <script src="vendors/jquery-toggles/toggles.min.js"></script>
    <script src="dist/js/toggle-data.js"></script>

    <!-- Init JavaScript -->
    <script src="dist/js/init.js"></script>

</body>


<!-- Mirrored from hencework.com/theme/brunette/data-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Jan 2019 08:25:36 GMT -->
</html>