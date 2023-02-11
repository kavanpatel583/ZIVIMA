<?php include 'connection.php'; 
session_start();
if(!isset($_SESSION["dcname"]))
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


<!-- Mirrored from hencework.com/theme/brunette/form-validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Jan 2019 08:25:30 GMT -->

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>District Collector - Add Polling Question</title>
    <meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

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
        <?php include 'DistrictCollectorSidebar.php';?>
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
                    <li class="breadcrumb-item"><a href="DistrictCollectorDashboard">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="view_polling_questions.php">Manage Polling Questions</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Update Polling Question</li>
                </ol>
            </nav>
            <!-- /Breadcrumb -->

            <!-- Container -->
            <div class="container">
                <!-- Title -->
                <div class="hk-pg-header">
                    <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="external-link"></i></span></span>Add Polling Question</h4>
                </div>
                <!-- /Title -->

                <!-- Row -->
                <div class="row">
                <div class="col-xl-3"></div>
                    <div class="col-xl-6">
                        <section class="hk-sec-wrapper">
                        
                            <div class="row">
                                <div class="col-sm">
                                <?php 
                                    if(isset($_REQUEST["btnsave"]))
                                    {
                                         $res=mysqli_query($con,"insert into tbl_polling (district_id,polling_question,answer1,answer2,
                                         answer3,answer4,answer5,polling_start_date,polling_end_date)
                                         values ('".$_REQUEST["district_id"]."','".$_REQUEST["polling_question"]."','".$_REQUEST["answer1"]."','".$_REQUEST["answer2"]."',
                                         '".$_REQUEST["answer3"]."','".$_REQUEST["answer4"]."','".$_REQUEST["answer5"]."','".$_REQUEST["polling_start_date"]."','".$_REQUEST["polling_end_date"]."')");
                                         if($res)
                                         {
                                         echo "inserted ..";
                                         echo "<script>window.location='view_polling_questions.php';</script>";
                                         }
                                         
                                          else {
                                             echo mysqli_error($con);
                                         }    
                                    }
                                ?>
                                    <form class="needs-validation" novalidate>
                                    <div class="form-row">       
                                    <div class="col-md-12 mb-10">
                                                <label for="validationCustom01">District</label>
                                                <select class="form-control custom-select" name="district_id" required>
                                                    <option value="">Select District</option>
                                                    <?php 
                                               
                                               $res=mysqli_query($con,"select * from  tbl_district");
                                               while($row=mysqli_fetch_array($res))
                                              {
                                            ?>
                                                    <option value="<?php echo $row["district_id"]; ?>">
                                                        <?php echo $row["district_name"]; ?></option>

                                                    <?php 
                                            } 
                                            ?>
                                                </select>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            </div>
                                        <div class="form-row">
                                            
                                            <div class="col-md-12 mb-10">
                                                <label for="validationCustom02">Question</label>
                                                <input type="text" class="form-control" name="polling_question" id="validationCustom02" placeholder="Question" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            </div>

                                            <div class="form-row">
                                            
                                            <div class="col-md-12 mb-10">
                                                <label for="validationCustom02">Answer 1</label>
                                                <input type="text" class="form-control" name="answer1" id="validationCustom02" placeholder="Answer 1" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            </div>

                                            <div class="form-row">
                                            
                                            <div class="col-md-12 mb-10">
                                                <label for="validationCustom02">Answer 2</label>
                                                <input type="text" class="form-control" name="answer2" id="validationCustom02" placeholder="Answer 2" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            </div>

                                            <div class="form-row">
                                            
                                            <div class="col-md-12 mb-10">
                                                <label for="validationCustom02">Answer 3</label>
                                                <input type="text" class="form-control" name="answer3" id="validationCustom02" placeholder="Answer 3" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            </div>

                                            <div class="form-row">
                                            
                                            <div class="col-md-12 mb-10">
                                                <label for="validationCustom02">Answer 4</label>
                                                <input type="text" class="form-control" name="answer4" id="validationCustom02" placeholder="Answer 4" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            </div> 

                                             <div class="form-row">
                                            
                                            <div class="col-md-12 mb-10">
                                                <label for="validationCustom02">Answer 5</label>
                                                <input type="text" class="form-control" name="answer5" id="validationCustom02" placeholder="Answer 5" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            </div> 

                                           
                                       <div class="form-row">
                                            <div class="col-md-6 mb-10">
                                                <label for="validationCustom03">Polling Start Date</label>
                                                <input type="date" class="form-control" id="validationCustom03" name="polling_start_date" required>
                                                <div class="invalid-feedback">
                                                    Please provide a valid Date! 
                                                </div>
                                            </div>     

                                            <div class="col-md-6 mb-10">
                                                <label for="validationCustom03">Polling End Date</label>
                                                <input type="date" class="form-control" id="validationCustom03" name="polling_end_date" required>
                                                <div class="invalid-feedback">
                                                    Please provide a valid Date! 
                                                </div>
                                            </div>                                      
                                        </div> 

                                      
                                        
                                        <button style="float:right;" class="btn btn-primary" name="btnsave" type="submit">Submit</button>
                                    </form>
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

    <!-- Jasny-bootstrap  JavaScript -->
    <script src="vendors/jasny-bootstrap/dist/js/jasny-bootstrap.min.js"></script>

    <!-- Slimscroll JavaScript -->
    <script src="dist/js/jquery.slimscroll.js"></script>

    <!-- Fancy Dropdown JS -->
    <script src="dist/js/dropdown-bootstrap-extended.js"></script>

    <!-- FeatherIcons JavaScript -->
    <script src="dist/js/feather.min.js"></script>

    <!-- Toggles JavaScript -->
    <script src="vendors/jquery-toggles/toggles.min.js"></script>
    <script src="dist/js/toggle-data.js"></script>

    <!-- Init JavaScript -->
    <script src="dist/js/init.js"></script>
    <script src="dist/js/validation-data.js"></script>

</body>


<!-- Mirrored from hencework.com/theme/brunette/form-validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Jan 2019 08:25:30 GMT -->

</html>