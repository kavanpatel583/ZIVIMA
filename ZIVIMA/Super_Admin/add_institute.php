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
Contact: https://hencework.ticksy.com

License: You must have a valid license purchased only from templatemonster to legally use the template for your project.
-->
<html lang="en">


<!-- Mirrored from hencework.com/theme/brunette/form-validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Jan 2019 08:25:30 GMT -->
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Super Admin - Add Institute</title>
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
        <?php include 'Header.php';?>
        <!-- /Top Navbar -->

        <!-- Vertical Nav -->
        <?php include 'AdminSidebar.php';?>
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
                    <li class="breadcrumb-item"><a href="view_institute.php">Institute</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add Institute</li>
                </ol>
            </nav>
            <!-- /Breadcrumb -->

            <!-- Container -->
            <div class="container">
                <!-- Title -->
                <div class="hk-pg-header">
                    <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="external-link"></i></span></span>Add Institute</h4>
                </div>
                <!-- /Title -->

                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
                        <section class="hk-sec-wrapper">
                           
                            <div class="row">
                                <div class="col-sm">

                                <?php 
                                    if(isset($_REQUEST["btnsave"]))
                                    {
                                         $res=mysqli_query($con,"insert into tbl_institute (institute_name,institute_code,institute_address,institute_landmark,
                                         institute_latitude,institute_longitude,institute_pincode,institute_contact,institute_email,
                                         institute_website,about_institute,institute_isactive,institute_uname,institute_pwd,
                                         institute_main_person,district_id,district_collector_id) values 
                                         ('".$_REQUEST["institute_name"]."','".$_REQUEST["institute_code"]."','".$_REQUEST["institute_address"]."',
                                         '".$_REQUEST["institute_landmark"]."','".$_REQUEST["institute_latitude"]."','".$_REQUEST["institute_longitude"]."',
                                         '".$_REQUEST["institute_pincode"]."','".$_REQUEST["institute_contact"]."','".$_REQUEST["institute_email"]."',
                                         '".$_REQUEST["institute_website"]."','".$_REQUEST["about_institute"]."','".$_REQUEST["institute_isactive"]."',
                                         '".$_REQUEST["institute_uname"]."','".$_REQUEST["institute_pwd"]."','".$_REQUEST["institute_main_person"]."',
                                         '".$_REQUEST["district_id"]."','".$_REQUEST["district_collector_id"]."')");
                                         if($res)
                                         {
                                         echo "inserted ..";

                                         $id=mysqli_insert_id($con);

                                         if($_FILES["institute_logo"]["name"] !=NULL)
                                         {
                                             $source=$_FILES["institute_logo"]["tmp_name"];
                                             $filename= $_FILES["institute_logo"]["name"];
                                             $ext = pathinfo($filename, PATHINFO_EXTENSION);
                                             $newname="ST_".date('Ymdhis').".".$ext;

                                              move_uploaded_file($source,"uploads/student/".$newname);

                                              mysqli_query($con,"update tbl_institute set institute_logo='".$newname."' where institute_id='".$id."'");
                                         }

                                    
                                         } else {
                                             echo mysqli_error($con);
                                         }    
                                    }
                                ?>




                                    <form class="needs-validation" novalidate>
                                        <div class="form-row">
                                            <div class="col-md-8 mb-10">
                                                <label for="validationCustom01">Institute Name</label>
                                                <input type="text" class="form-control" name="institute_name" id="validationCustom01" placeholder="e.g. C.k Pithawala" value="" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div><br/>
                                            <div class="col-md-4 mb-10">
                                                <label for="validationCustom02">Institute Code</label>
                                                <input type="text" class="form-control" name="institute_code" id="validationCustom02" placeholder="e.g. 009" value="" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>  
                                        </div>      
                                        <div class="form-row">
                                        <div class="col-md-8 mb-10">

                                            <label for="validationCustom01">District</label>
                                            <select name="district_id" class="form-control custom-select" required>
                                                <option value="">Select City</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                            <div class="invalid-feedback">Please choose Admin.</div>
                                            </div>
                                        <div class="col-md-4 mb-10">
                                        <label for="validationCustom01">District Collector</label>
                                            <select class="form-control custom-select" name="district_collector_id" required>
                                                <option value="">Select Admin</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                            <div class="invalid-feedback">Please choose district collector.</div>
                                        </div>

                                        


                                        </div>


                                        <div class="form-row">
                                            <div class="col-md-12 mb-10">
                                                <label for="validationCustom03">Address</label>
                                                <textarea type="text" name="institute_address" class="form-control" id="validationCustom03" name="" placeholder="Institute Address" required></textarea>
                                                <div class="invalid-feedback">
                                                Please enter valid Address.
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-10">
                                                <label for="validationCustom03">Picode</label>
                                                <input type="text" class="form-control" name="institute_pincode" id="validationCustom03" placeholder="Pincode" required>
                                                <div class="invalid-feedback">
                                                Please enter valid Pincode.
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-10">
                                                <label for="validationCustom03">Landmark</label>
                                                <input type="text" class="form-control" id="validationCustom03" name="institute_landmark" placeholder="Landmark" required>
                                                <div class="invalid-feedback">
                                                Please enter valid Landmark.
                                                </div>
                                            </div>
                                            </div>

                                            
                                            <div class="form-row">
                                            <div class="col-md-6 mb-10">
                                                <label for="validationCustom04">Latitude</label>
                                                <input type="text" class="form-control" id="validationCustom04" placeholder="Latitude" name="institute_latitude" required>
                                                <div class="invalid-feedback">
                                                Please enter valid Latitude.
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="col-md-6 mb-10">
                                                <label for="validationCustom05">Longitude</label>
                                                <input type="text" class="form-control" id="validationCustom05" placeholder="Longitude" name="institute_longitude" required>
                                                <div class="invalid-feedback">
                                                    Please enter valid Longitude
                                                </div>
                                            </div>

                                            
                                           

                                            <div class="col-md-6 mb-10">
                                                <label for="validationCustomUsername">Email</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                    </div>
                                                    <input type="email" name="institute_email" class="form-control" id="validationCustomUsername" placeholder="Email" aria-describedby="inputGroupPrepend" required>
                                                    <div class="invalid-feedback">
                                                        Please enter valid email.
                                                    </div>
                                                </div>
                                            </div>	
                                            <div class="col-md-6 mb-10">
                                                <label for="validationCustomUsername">Contact</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="inputGroupPrepend"></span>
                                                    </div>
                                                    <input type="number" class="form-control" name="institute_contact" id="validationCustomUsername" placeholder="Contact  " aria-describedby="inputGroupPrepend" required>
                                                    <div class="invalid-feedback">
                                                        Please enter valid mobile number.
                                                    </div>
                                                </div>
                                            </div>	
                                            

                                            <div class="col-md-6 mb-10">
                                                <label for="validationCustom04">Username</label>
                                                <input type="text" class="form-control" id="validationCustom04" name="institute_uname" placeholder="Username" required>
                                                <div class="invalid-feedback">
                                                Please enter valid Username.
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="col-md-6 mb-10">
                                                <label for="validationCustom05">Password</label>
                                                <input type="text" class="form-control" id="validationCustom05" name="institute_pwd" placeholder="Password" required>
                                                <div class="invalid-feedback">
                                                    Please enter valid Password
                                                </div>
                                            </div>

                                            <div class="col-md-12 mb-10">
                                                <label for="validationCustom03">Institute Main Person</label>
                                                <input type="text" class="form-control" id="validationCustom03" name="institute_main_person" placeholder="Institute Main Person" required>
                                                <div class="invalid-feedback">
                                                Please enter valid Name.
                                                </div>
                                            </div>

                                            
                                            <div class="col-md-6 mb-10">
                                            <div class="custom-file">
                                            
                                                <input type="file" name="institute_logo" class="custom-file-input" id="validatedCustomFile" required>
                                                <label class="custom-file-label" for="validatedCustomFile">Choose Logo...</label>
                                                <div class="invalid-feedback">Invalid Input</div>
                                            </div>
                                            </div>
                                            
                                            <div class="col-md-6 mb-10">
                                            <div class="custom-file">
                                            
                                                <input type="file" class="custom-file-input" name="institute_coverpage" id="validatedCustomFile" required>
                                                <label class="custom-file-label"  for="validatedCustomFile">Choose coverpage...</label>
                                                <div class="invalid-feedback">Invalid Input</div>
                                            </div>
                                            </div>

                                            <div class="col-md-6 mb-10">
                                            <div class="custom-file">
                                            
                                                <input type="file" class="custom-file-input" name="institute_image1" id="validatedCustomFile" required>
                                                <label class="custom-file-label" for="validatedCustomFile">Choose Institute image 1</label>
                                                <div class="invalid-feedback">Invalid Input</div>
                                            </div>
                                            </div>
                                            
                                            <div class="col-md-6 mb-10">
                                            <div class="custom-file">
                                            
                                                <input type="file" class="custom-file-input" id="validatedCustomFile" name="institute_image2" required>
                                                <label class="custom-file-label" for="validatedCustomFile">Choose Institute image 2</label>
                                                <div class="invalid-feedback">Invalid Input</div>
                                            </div>
                                            </div>


                                            
                                            <div class="col-md-12 mb-10">
                                                <label for="validationCustomUsername">Website</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="inputGroupPrepend">WWW</span>
                                                    </div>
                                                    <input type="text" name="institute_website" class="form-control" id="validationCustomUsername" placeholder="Website" aria-describedby="inputGroupPrepend" required>
                                                    <div class="invalid-feedback">
                                                        Please enter website.
                                                    </div>
                                                </div>
                                             </div>
                                            
                                             <div class="col-md-12 mb-10">
                                             <label for="validationCustomUsername">About Institute</label>
                                             <textarea type="text" name="about_institute" class="form-control" id="validationCustom03" placeholder="Something about Institute" required></textarea>
                                                </div>
  


                                                <div class="row">
                                                    <div class="col-sm">
                                                <label for="validationCustomUsername">Is Active</label>
                                                <div class="custom-control custom-radio mb-10">
                                            <input type="radio" name="institute_isactive" class="custom-control-input" id="customControlValidation2" value="1" required>
                                            <label class="custom-control-label" for="customControlValidation2">Yes</label>
                                        </div>
                                        <div class="custom-control custom-radio mb-10">
                                            <input type="radio" class="custom-control-input" name="institute_isactive" id="customControlValidation3" value="0" required>
                                            <label class="custom-control-label" for="customControlValidation3">no</label>
                                            <div class="invalid-feedback">More example invalid feedback text</div>
                                        </div>
                                        </div>
                                        
                                        </div>
                                    
                                            




                                        </div>
                                        <div class="form-row">
                                            <div class="form-check custom-control custom-checkbox">
                                                
                                                <div class="invalid-feedback">
                                                    You must agree before submitting.
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary" name="btnsave" type="submit">Submit</button>
                                    </form>
                                
                            </div>
                           
                </div>
                <!-- /Row -->
            </div>
            <!-- /Container -->

            <!-- Footer -->
            <div class="hk-footer-wrap container">
                <footer class="footer">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <p>Pampered by<a href="https://hencework.com/" class="text-dark" target="_blank">Hencework</a> © 2019</p>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <p class="d-inline-block">Follow us</p>
                            <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-facebook"></i></span></a>
                            <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-twitter"></i></span></a>
                            <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-google-plus"></i></span></a>
                        </div>
                    </div>
                </footer>
            </div>
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