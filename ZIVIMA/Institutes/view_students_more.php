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
    <title>View Student</title>
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
                <li class="breadcrumb-item"><a href="AdminDashboard.php">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="View_all_student.php">All students</a></li>
                    <li class="breadcrumb-item active" aria-current="page">View Student</li>
                </ol>
            </nav>
            <!-- /Breadcrumb -->

            <!-- Container -->
            <div class="container">
                <!-- Title -->
                <div class="hk-pg-header">
                    <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="external-link"></i></span></span>View Student</h4>
                </div>
                <!-- /Title -->


                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
                        <section class="hk-sec-wrapper">
                            
                            <div class="row">
                                <div class="col-sm">

                                <?php 
                                    if(isset($_REQUEST["edit"]))
                                    {
                                        $res= mysqli_query($con,"select * from tbl_student where student_id='". $_REQUEST["edit"]."'");
                                        while($row=mysqli_fetch_array($res))
                                        {
                                            $student_id=$row["student_id"];
                                            $student_name=$row["student_name"];
                                            $student_contact=$row["student_contact"];
                                            $student_uname=$row["student_uname"];
                                            $student_pwd=$row["student_pwd"];
                                            $student_email=$row["student_email"];
                                            $student_profile_picture=$row["student_profile_picture"];
                                            $student_department=$row["student_department"];
                                            $student_dob=$row["student_dob"];
                                            $student_qualification=$row["student_qualification"];
                                            $student_isactive=$row["student_isactive"];
                                            $student_isapproved=$row["student_isapproved"];
                                            $student_added_datetime=$row["student_added_datetime"];
                                            $student_approved_datetime=$row["student_approved_datetime"];
                                            $student_address=$row["student_address"];
                                            $student_landmark=$row["student_landmark"];
                                            $student_pincode=$row["student_pincode"];
                                            $institute_id=$row["institute_id"];
                                            $district_id=$row["district_id"];
                                        }
                                    }

                                 if(isset($_REQUEST['btnsave']))
                                 {
                                      $result= mysqli_query($con,"update tbl_student set student_name='".$_REQUEST["student_name"]."',
                                      student_contact='".$_REQUEST["student_contact"]."',student_uname='".$_REQUEST["student_uname"]."',
                                      student_pwd='".$_REQUEST["student_pwd"]."',student_email='".$_REQUEST["student_email"]."',
                                      student_department='".$_REQUEST["student_department"]."',student_dob='".$_REQUEST["student_dob"]."',
                                      student_qualification='".$_REQUEST["student_qualification"]."',student_isactive='".$_REQUEST["student_isactive"]."',
                                      student_isapproved='".$_REQUEST["student_isapproved"]."',student_added_datetime='".$_REQUEST["student_added_datetime"]."',
                                      student_approved_datetime='".$_REQUEST["student_approved_datetime"]."',student_address='".$_REQUEST["student_address"]."',
                                      student_landmark='".$_REQUEST["student_landmark"]."',student_pincode='".$_REQUEST["student_pincode"]."',
                                      institute_id='".$_REQUEST["institute_id"]."',district_id='".$_REQUEST["district_id"]."'
                                        where student_id='".$_REQUEST["txthfsid"]."'");
                                
                                      if($result)
                                      {
                                        $id=$_REQUEST["txthfsid"];

                                        if($_FILES["student_profile_picture"]["name"] !=NULL)
                                        {
                                            $source=$_FILES["student_profile_picture"]["tmp_name"];
                                            $filename= $_FILES["student_profile_picture"]["name"];
                                            $ext = pathinfo($filename, PATHINFO_EXTENSION);
                                            $newname="ST_".date('Ymdhis').".".$ext;

                                             move_uploaded_file($source,"uploads/student/".$newname);

                                             mysqli_query($con,"update tbl_student set student_profile_picture ='".$newname."' where student_id='".$id."'");
                                       

                                          echo "<script>window.location='view_all_student.php';</script>";
                                        }
                                      } else {
                                          echo "error".mysqli_error($con);
                                      }
                                    }
                                
                                
                                ?>
                                    <form class="needs-validation" method="post" enctype="multipart/form-data" novalidate>
                                    <input type="hidden" value="<?php echo $student_id; ?>" name="txthfsid"  />
                                        <div class="form-row">
                                        <div class="col-md-6 mb-10">
                                        <label for="validationCustom02">Institute Name</label>
                                        <select class="form-control custom-select" name="institute_id" disabled >
                                        <option value="">Select Institute</option>
                                        <?php 
                                               
                                               $res=mysqli_query($con,"select * from tbl_institute");
                                               while($row=mysqli_fetch_array($res))
                                              {
                                            ?>                                                
                                                <option value="<?php echo $row["institute_id"]; ?>" <?php if($row["institute_id"]==$institute_id) {?> selected <?php } ?>>
                                                <?php echo $row["institute_name"]; ?></option>
                                                
                                                <?php 
                                            } 
                                            ?>  
                                            </select>
                                            
                                            </div>
                                            <div class="col-md-6 mb-10">
                                                <label for="validationCustom02">Name</label>
                                                <input name="student_name" type="text" class="form-control" id="validationCustom02" value="<?php echo $student_name; ?>" disabled>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            </div>
                                            <div class="form-row"> 
                                            <div class="col-md-6 mb-10">
                                                <label for="validationCustom02">Contact</label>
                                                <input name="student_contact" type="number_format" class="form-control" id="validationCustom02" value="<?php echo $student_contact; ?>" disabled>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-10">
                                                <label for="validationCustomUsername">Username</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                    </div>
                                                    <input name="student_uname" type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" value="<?php echo $student_uname; ?>" disabled>
                                                    <div class="invalid-feedback">
                                                        Please choose a username.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                        <div class="col-md-6 mb-10">
                                            <label class="control-label mb-10" for="exampleInputEmail_1">Email</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="icon-envelope-open"></i></span>
                                                </div>
                                                <input name="student_email" type="email" class="form-control" id="exampleInputEmail_1" value="<?php echo $student_email; ?>" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-10">
                                                <label for="validationCustom03">Profile Photo</label>
                                                <div class="custom-file">
                                            <input name="student_profile_picture" type="text" class="form-control" id="validatedCustomFile" value="<?php echo $student_profile_picture; ?>" disabled>
                                            <label class="custom-file-label" for="validatedCustomFile"><?php echo $student_profile_picture; ?></label>
                                        </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-4 mb-10">
                                                <label for="validationCustom06">Department</label>
                                                <input name="student_department" type="text" class="form-control" id="validationCustom04" value="<?php echo $student_department; ?>" disabled>
                                                <div class="invalid-feedback">
                                                    Please provide a valid Department.
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-10">
                                            <label for="validationCustom06">Date of Birth</label>
                                            <input name="student_dob" class="form-control" type="date" name="birthday" value="<?php echo $student_dob; ?>" disabled />
                                                <div class="invalid-feedback">
                                                    Please provide a valid Department.
                                                </div>
                                    </div>
                                            <div class="col-md-4 mb-10">
                                                <label for="validationCustom05">Qualification</label>
                                                <input name="student_qualification" type="text" class="form-control" id="validationCustom05" value="<?php echo $student_qualification; ?>" disabled >
                                                <div class="invalid-feedback">
                                                    Please provide a valid Qualification.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6 mb-10">
                                            <label for="inputPassword5">Password</label>
                                            <input name="student_pwd" type="text" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" value="<?php echo $student_pwd; ?>" disabled>
                                                <div class="invalid-feedback">
                                                    Please provide a valid Password.
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-10">
                                        <label for="validationCustom02">Select District</label>
                                        <select name="district_id" class="form-control custom-select" disabled>
                                        <?php 
                                               
                                               $res=mysqli_query($con,"select * from tbl_district");
                                               while($row=mysqli_fetch_array($res))
                                              {
                                            ?>                                                
                                                <option value="<?php echo $row["district_id"]; ?>" <?php if($row["district_id"]==$district_id) {?> selected <?php } ?> >
                                                <?php echo $row["district_name"]; ?></option>
                                                
                                                <?php 
                                            } 
                                            ?>  
                                           </select>
                                            </div>
                                    
                                        </div>

                                        <div class="form-row">
                                        <div class="col-md-6 mb-10">
                                            <label for="validationCustom06">Added Date</label>
                                            <input name="student_added_datetime" class="form-control" type="date" name="add_date" value="<?php echo $student_added_datetime ; ?>" disabled/>
                                                <div class="invalid-feedback">
                                                    Please provide a valid Date.
                                                </div>
                                    </div>
                                            <div class="col-md-6 mb-10">
                                                <label for="validationCustom05">Appoved Date</label>
                                                <input name="student_approved_datetime" type="date" class="form-control" id="approved_date" value="<?php echo $student_approved_datetime; ?>" disabled>
                                                <div class="invalid-feedback">
                                                    Please provide a valid Date.
                                                </div>
                                            </div>
                                        </div>



                                        <div class="form-row"> 
                                            <div class="col-md-6 mb-10">
                                                <label for="validationCustom02">IsActive</label>
                                                <div>
                                                <div class="custom-control custom-radio mb-10">
                                            <input name="student_isactive" type="radio" class="custom-control-input" id="customControlValidation2" value="yes" <?php if($student_isactive=="yes") { ?> checked="checked" <?php } ?> disabled>
                                            <label class="custom-control-label" for="customControlValidation2">Yes</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input name="student_isactive" type="radio" class="custom-control-input" id="customControlValidation3" value="no" <?php if($student_isactive=="no") { ?> checked="checked" <?php } ?> disabled>
                                            <label class="custom-control-label" for="customControlValidation3">No</label>
                                        </div>
                                        </div>
                                    
                                            </div>
                                            <div class="col-md-6 mb-10">
                                                <label for="validationCustomUsername">IsApproved</label>
                                                <div>
                                                <div class="custom-control custom-radio mb-10">
                                            <input name="student_isapproved" type="radio" class="custom-control-input" id="customControlValidation4" value="no" <?php if($student_isapproved=="no") { ?> checked="checked" <?php } ?>  disabled>
                                            <label class="custom-control-label" for="customControlValidation4">Pending</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input name="student_isapproved" type="radio" class="custom-control-input" id="customControlValidation5" value="yes" <?php if($student_isapproved=="yes") { ?> checked="checked" <?php } ?>  disabled>
                                            <label class="custom-control-label" for="customControlValidation5">Approved</label>
                                        </div>
                                        </div>
                                                </div>
                                            </div>

                                        
                                            <div class="form-row">
                                        <div class="col-md-12 mb-10">
                                        <label for="validationCustom02">Address</label>
                                        <textarea name="student_address" class="form-control mt-15"  disabled><?php echo $student_address; ?></textarea>
                                            </div>
                                            </div>


                                            <div class="form-row">
                                        
                                            <div class="col-md-6 mb-10">
                                                <label for="validationCustom02">Landmark</label>
                                                <input name="student_landmark" type="text" class="form-control" id="validationCustom02" placeholder="Landmark" value="<?php echo $student_landmark; ?>" disabled>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-10">
                                        <label for="validationCustom02">Pin Code</label>
                                        <input name="student_pincode" type="number_format" class="form-control" id="validationCustom02" placeholder="Pin Code" value="<?php echo $student_pincode; ?>" disabled>

                                            </div>
                                            </div>

                                            
                                        
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