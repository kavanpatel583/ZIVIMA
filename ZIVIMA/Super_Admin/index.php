<?php include 'connection.php'; 
session_start();
?>

<!DOCTYPE html>
<!-- 
Template Name: Brunette - Responsive Bootstrap 4 Admin Dashboard Template
Author: Hencework
Contact: https://hencework.ticksy.com/

License: You must have a valid license purchased only from templatemonster to legally use the template for your project.
-->
<html lang="en">


<!-- Mirrored from hencework.com/theme/brunette/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Jan 2019 08:24:54 GMT -->
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>ZIVIMA - Admin Login</title>
    <meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

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
	<div class="hk-wrapper">

        <!-- Main Content -->
        <div class="hk-pg-wrapper hk-auth-wrapper">
            <header class="d-flex justify-content-between align-items-center">
                <a class="d-flex auth-brand" href="#">
                    <img class="brand-img" src="dist/img/logo-dark.png" alt="brand" />
                </a>
               
            </header>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-5 pa-0">
                        <div id="owl_demo_1" class="owl-carousel dots-on-item owl-theme">
                            <div class="fadeOut item auth-cover-img overlay-wrap" style="background-image:url(dist/img/bg2.jpg);">
                                <div class="auth-cover-info py-xl-0 pt-100 pb-50">
                                    <div class="auth-cover-content text-center w-xxl-75 w-sm-90 w-xs-100">
                                        <h1 class="display-3 text-white mb-20">Zila Vikas Manch</h1>
                                        <p class="text-white">Make in India' is great, but 'Make It Happen in India' is even greater. Make It Happen in India is more than manufacturing. It's about training, about education, about societal development and automation and engineering.</p>
                                    </div>
                                </div>
                                <div class="bg-overlay bg-trans-dark-50"></div>
                            </div>
                            <div class="fadeOut item auth-cover-img overlay-wrap" style="background-image:url(dist/img/bg1.jpg);">
                                <div class="auth-cover-info py-xl-0 pt-100 pb-50">
                                    <div class="auth-cover-content text-center w-xxl-75 w-sm-90 w-xs-100">
                                        <h1 class="display-3 text-white mb-20">I.T. + I.T. = I.T. </h1>
                                        <p class="text-white">India Today + Information Technology  = India Tomorrow.</p>
                                    </div>
                                </div>
								<div class="bg-overlay bg-trans-dark-50"></div>
                            </div>
                        </div>
                    </div>
                   <?php
                    if(isset($_REQUEST['btnlogin']))
                    {
                             $res=mysqli_query($con,"select * from tbl_super_admin_login where super_admin_uname='".$_REQUEST["txtusername"]."' and super_admin_pwd='".$_REQUEST["txtpassword"]."'");
                             if(mysqli_num_rows($res)>0)
                             {
                                  while($row=mysqli_fetch_array($res))
                                  {
                                        $id=$row["super_admin_id"];
                                        $name=$row["super_admin_name"];
                                        $uname=$row["super_admin_uname"];
                                        $pass=$row["super_admin_pwd"];
                                  } 
                                
                                if($uname == $_REQUEST["txtusername"] && $pass == $_REQUEST["txtpassword"])
                                {
                                    $_SESSION["aname"]=$name;
                                    echo "<script>window.location='AdminDashboard.php';</script>";
                                } else {
                                    echo "username password does not matched..";
                                }

                             } else {
                                 echo "invalid";
                             }
                     }
                   ?>

                    <div class="col-xl-7 pa-0">
                        <div class="auth-form-wrap py-xl-0 py-50">
                            <div class="auth-form w-xxl-55 w-xl-75 w-sm-90 w-xs-100">
                                <form method="post">
                                    <h1 class="display-4 mb-10">Welcome Back :)</h1>
                                    <p class="mb-30">Sign in to your "ZIVIMA" account.</p>
                                    <div class="form-group">
                                        <input class="form-control" name="txtusername" placeholder="Email" type="text">
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input class="form-control" name="txtpassword" placeholder="Password" type="password">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><span class="feather-icon"><i data-feather="eye-off"></i></span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-25">
                                        <input class="custom-control-input" id="same-address" type="checkbox" checked>
                                        <label class="custom-control-label font-14" for="same-address">Keep me logged in</label>
                                    </div>
                                    <button class="btn btn-primary btn-block" type="submit" name="btnlogin">Login</button>
                                   
                                   
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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

    <!-- Fancy Dropdown JS -->
    <script src="dist/js/dropdown-bootstrap-extended.js"></script>

    <!-- Owl JavaScript -->
    <script src="vendors/owl.carousel/dist/owl.carousel.min.js"></script>

    <!-- FeatherIcons JavaScript -->
    <script src="dist/js/feather.min.js"></script>

    <!-- Init JavaScript -->
    <script src="dist/js/init.js"></script>
    <script src="dist/js/login-data.js"></script>
</body>


<!-- Mirrored from hencework.com/theme/brunette/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Jan 2019 08:24:55 GMT -->
</html>