<?php include 'connection.php'; 
session_start();
if(!isset($_SESSION["iname"]))
{
	echo "<script>window.location='index.php';</script>";
}
?>
<!DOCTYPE html>
<!-- 
Template Name: Brunette - Responsive Bootstrap 4 Admin Dashboard Template
Author: Hencework
Contact: https://hencework.ticksy.com

License: You must have a valid license purchased only from templatemonster to legally use the template for your project.
-->
<html lang="en">


<!-- Mirrored from hencework.com/theme/brunette/form-validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Jan 2019 08:25:30 GMT -->
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Update Questions</title>
    <meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Toggles CSS -->
    <link href="vendors/jquery-toggles/css/toggles.css" rel="stylesheet" type="text/css">
    <link href="vendors/jquery-toggles/css/themes/toggles-light.css" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="dist/css/style.css" rel="stylesheet" type="text/css">

    
    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Toggles CSS -->
    <link href="vendors/jquery-toggles/css/toggles.css" rel="stylesheet" type="text/css">
    <link href="vendors/jquery-toggles/css/themes/toggles-light.css" rel="stylesheet" type="text/css">

    <!-- ION CSS -->
    <link href="vendors/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet" type="text/css">
    <link href="vendors/ion-rangeslider/css/ion.rangeSlider.skinHTML5.css" rel="stylesheet" type="text/css">

    <!-- select2 CSS -->
    <link href="vendors/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css" />

    <!-- Pickr CSS -->
    <link href="vendors/pickr-widget/dist/pickr.min.css" rel="stylesheet" type="text/css" />

    <!-- Daterangepicker CSS -->
    <link href="vendors/daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />

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
        <?php include 'Header.php'; ?>
        <!-- /Top Navbar -->

        <!-- Vertical Nav -->
        <?php include 'InstituteSidebar.php';?>
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
                <li class="breadcrumb-item"><a href="InstituteDashboard">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="view_all_questions">Manage Questions</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Update Questions</li>
                </ol>
            </nav>
            <!-- /Breadcrumb -->

            <!-- Container -->
            <div class="container">
                <!-- Title -->
                <div class="hk-pg-header">
                    <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="external-link"></i></span></span>Update Questions</h4>
                </div>
                <!-- /Title -->

                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
                        <section class="hk-sec-wrapper">
                            
                            <div class="row">
                                <div class="col-sm">
                                <!-- <?php 
                                    if(isset($_REQUEST["btnsave"]))
                                    {
                                         $res=mysqli_query($con,"insert into tbl_question (question_title,question_added_date,question_description) values ('".$_REQUEST["txtqtitle"]."','".$_REQUEST["add_date"]."','".$_REQUEST["txtdesc"]."')");
                                         if($res)
                                         {
                                            echo "<script>window.location='view_all_problems';</script>";

                                         } else {
                                             echo mysqli_error($con);
                                         }    
                                    }
                                ?> -->
                                 <?php 
                                    if(isset($_REQUEST["edit"]))
                                    {
                                        $res= mysqli_query($con,"select * from tbl_question where question_id='". $_REQUEST["edit"]."'");
                                        while($row=mysqli_fetch_array($res))
                                        {
                                            $id=$row["question_id"];
                                            $p_id=$row["problem_st_id"];
                                            $s_id=$row["student_id"];
                                            $q_title=$row["question_title"];
                                            $q_desc=$row["question_description"];
                                            $q_date=$row["question_added_datetime"];
                                            $student_id=$row["student_id"];
                                            $problem_category_id=$row["problem_category_id"];
                                            $problem_st_id=$row["problem_st_id"];
                                            
                                            
                                            

                                        }
                                    }

                                 if(isset($_REQUEST['btnsave']))
                                 {

                                      $result= mysqli_query($con,"update tbl_question set 
                                      question_title ='".$_REQUEST["txtqtitle"]."',
                                      question_description ='".$_REQUEST["txtdesc"]."',
                                            student_id ='".$_REQUEST["studentid"]."',
                                            problem_st_id ='".$_REQUEST["problem_stmt_id"]."',
                                            problem_category_id ='".$_REQUEST["problem_cat_id"]."'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
                                             where question_id='".$_REQUEST["txtqid"]."'");
                            
                                     if($result)
                                      {
                                          echo "<script>window.location='view_approved_questions.php';</script>";
                                      } else {
                                          echo "error".mysqli_error($con);
                                      }
                                    }
                                ?>
                                <form class="needs-validation" method="post" novalidate>
                                        <div class="form-row">
                                        <div class="col-md-4 mb-10">
                                        <label for="validationCustom02">Student Name</label>
                                        <select class="form-control custom-select"  name="studentid" required>
                                        <option value="">Select Student</option>

                                        <?php 
                                               
                                               $res=mysqli_query($con,"select * from tbl_student");
                                               while($row=mysqli_fetch_array($res))
                                              {
                                            ?>
                                                     <option value="<?php echo $row["student_id"]; ?>" <?php if($row["student_id"]==$student_id) {?> selected <?php } ?>>
                                                        <?php echo $row["student_name"]; ?></option>

                                                    <?php 
                                            } 
                                            ?>
                                            </select>
                                            </div>
                                            <div class="col-md-4 mb-10">
                                        <label for="validationCustom02">Problem Category</label>
                                        <select class="form-control custom-select"  name="problem_cat_id" required>
                                        <option value="">Select Problem Category</option>


                                        <?php 
                                               
                                               $res=mysqli_query($con,"select * from tbl_problem_category");
                                               while($row=mysqli_fetch_array($res))
                                              {
                                            ?>
                                                    <option value="<?php echo $row["problem_category_id"]; ?>" <?php if($row["problem_category_id"]==$problem_category_id) {?> selected <?php } ?>>
                                                        <?php echo $row["problem_category_name"]; ?></option>

                                                    <?php 
                                            } 
                                            ?>
                                            </select>
                                            </div>
                                            <div class="col-md-4 mb-10">
                                        <label for="validationCustom02">Problem Statement</label>
                                        <select class="form-control custom-select"  name="problem_stmt_id" required>
                                        <option value="">Select Problem Statement</option>


                                        <?php 
                                               
                                               $res=mysqli_query($con,"select * from tbl_problem_statement");
                                               while($row=mysqli_fetch_array($res))
                                              {
                                            ?>
                                                    <option value="<?php echo $row["problem_st_id"]; ?>" <?php if($row["problem_st_id"]==$problem_st_id) {?> selected <?php } ?>>
                                                        <?php echo $row["problem_st_title"]; ?></option>

                                                    <?php 
                                            } 
                                            ?>
                                            </select>
                                            </div>

                                        </div>
                                        
                                        <div class="form-row">
                                        
                                        <div class="col-md-12 mb-10">
                                                <label for="validationCustom02">Question Title</label>
                                                <input type="text" name="txtqtitle" class="form-control" id="validationCustom02" placeholder="Question title" value="<?php echo $q_title; ?>" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            </div>
                                            
                                                                
                                        <div class="form-row">
                                            <div class="col-md-12 mb-10">
                                                <label for="validationCustom02">Description</label>
                                                <textarea class="form-control mt-15" rows="4"  placeholder="Question Description" name="txtdesc"><?php echo $q_desc; ?></textarea>
                                            </div>
                                        </div>

                                        <button class="btn btn-primary" type="submit" style="float: right" name="btnsave">Update</button>
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
            <?php include 'Footer.php';?>
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

    <!-- Ion JavaScript -->
    <script src="vendors/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
    <script src="dist/js/rangeslider-data.js"></script>

    <!-- Toggles JavaScript -->
    <script src="vendors/jquery-toggles/toggles.min.js"></script>
    <script src="dist/js/toggle-data.js"></script>

    <!-- Select2 JavaScript -->
    <script src="vendors/select2/dist/js/select2.full.min.js"></script>
    <script src="dist/js/select2-data.js"></script>

    <!-- Bootstrap Tagsinput JavaScript -->
    <script src="vendors/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.html"></script>

    <!-- Bootstrap Input spinner JavaScript -->
    <script src="vendors/bootstrap-input-spinner/src/bootstrap-input-spinner.js"></script>
    <script src="dist/js/inputspinner-data.js"></script>

    <!-- Pickr JavaScript -->
    <script src="vendors/pickr-widget/dist/pickr.min.js"></script>
    <script src="dist/js/pickr-data.js"></script>

    <!-- Daterangepicker JavaScript -->
    <script src="vendors/moment/min/moment.min.js"></script>
    <script src="vendors/daterangepicker/daterangepicker.js"></script>
    <script src="dist/js/daterangepicker-data.js"></script>

    <!-- FeatherIcons JavaScript -->
    <script src="dist/js/feather.min.js"></script>

    <!-- Toggles JavaScript -->
    <script src="vendors/jquery-toggles/toggles.min.js"></script>
    <script src="dist/js/toggle-data.js"></script>

    <!-- Init JavaScript -->
    <script src="dist/js/init.js"></script>

</body>


<!-- Mirrored from hencework.com/theme/brunette/form-validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Jan 2019 08:25:30 GMT -->
</html>