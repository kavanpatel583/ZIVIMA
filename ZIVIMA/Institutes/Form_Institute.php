<!DOCTYPE html>
<!-- 
Template Name: Brunette - Responsive Bootstrap 4 Admin Dashboard Template
Author: Hencework
Contact: https://hencework.ticksy.com/

License: You must have a valid license purchased only from templatemonster to legally use the template for your project.
-->
<html lang="en">


<!-- Mirrored from hencework.com/theme/brunette/form-layout.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Jan 2019 08:25:30 GMT -->
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Admin - Form Institute</title>
    <meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- select2 CSS -->
    <link href="vendors/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css" />

    <!-- Daterangepicker CSS -->
    <link href="vendors/daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />

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
              <?php include 'Sidebar.php';?>
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
                    <li class="breadcrumb-item"><a href="#">Forms</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Form Layout</li>
                </ol>
            </nav>
            <!-- /Breadcrumb -->

            <!-- Container -->
            <div class="container">
                <!-- Title -->
                <div class="hk-pg-header">
                    <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="align-left"></i></span></span>Enter Institute Details...</h4>
                </div>
                <!-- /Title -->

                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
                        <section class="hk-sec-wrapper">
                            <h5 class="hk-sec-title">Institute Form</h5>
                            <p class="mb-25">Add details....</p>
                            <div class="row">
                                <div class="col-sm">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-12 form-group">
                                                <label for="firstName">Institute Name</label>
                                                <input class="form-control" id="institute_name" placeholder="" value="" type="text">
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label for="institute_code">Institute Code</label>
                                                <input class="form-control" id="institute_code" placeholder="" value="" type="number">
                                            </div>

                                            <div class="col-md-4 form-group">
                                                <label for="city_id">City ID</label>
                                                <select class="form-control" id="city_id" placeholder="" value=""></select>
                                                <!--<input class="form-control" id="city_id" placeholder="" value="" type="number">-->
                                            </div>

                                            <div class="col-md-4 form-group">
                                                <label for="admin_id">Admin ID</label>
                                                <select class="form-control" id="admin_id" placeholder="" value=""></select>
                                                <!--<input class="form-control" id="admin_id" placeholder="" value="" type="number">-->
                                            </div>
                                        
                                        </div>

                                        <div class="form-group">
                                            <label for="institute_address">Address</label>
                                            <textarea class="form-control" id="institute_address" placeholder=""></textarea>                                            
                                        </div>

                                        <div class="row">
                                        <div class="col-md-4 form-group">
                                                <label for="institute_landmark">Landmark</label>
                                                <input class="form-control" id="institute_landmark" placeholder="" value="" type="text">
                                        </div>
                                        <div class="col-md-4 form-group">
                                                <label for="institute_longitude">Longitude</label>
                                                <input class="form-control" id="institute_longitude" placeholder="" value="" type="text">
                                        </div>
                                        <div class="col-md-4 form-group">
                                                <label for="institute_pincode">Pincode</label>
                                                <input class="form-control" id="institute_pincode" placeholder="" value="" type="number">
                                        </div>
                                        </div>

                                        <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label for="institute_contact">Contact</label>
                                            <input class="form-control" id="institute_contact" placeholder="" type="number">
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label for="email">Email</label>
                                            <input class="form-control" id="email" placeholder="you@example.com" type="email">
                                        </div>
                                        </div>

                                        <div class="row">
                                        <div class="col-md-12 form-group">
                                            <label for="institute_website">Website</label>
                                            <input class="form-control" id="institute_website" placeholder="https://www.abc.com" type="text">
                                        </div>
                                        </div>

                                        <div class="row">
                                        <div class="col-md-12 form-group">
                                            <label for="institute_about">About Institute</label>
                                            <textarea class="form-control" id="institute_about" placeholder="About Institute"> </textarea>                                            
                                        </div>
                                        </div>
                                        
                                        <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label for="institute_username">User Name</label>
                                            <input class="form-control" id="institute_username" placeholder="User Name" type="text">                                            
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="institute_password">Password</label>
                                            <input class="form-control" id="institute_password" placeholder="Password" type="password">                                            
                                        </div>
                                        </div>
                                        <h6 class="form-group">Is Active</h6>

                                        <div class="d-block mt-20 mb-30">
                                            <div class="custom-control custom-radio mb-10">
                                                <input id="institute_isactive_yes" name="institute_isactive" class="custom-control-input" checked="" type="radio">
                                                <label class="custom-control-label" for="institute_isactive_yes">Yes</label>
                                            </div>
                                            <div class="custom-control custom-radio mb-10">
                                                <input id="institute_isactive_no" name="institute_isactive" class="custom-control-input" type="radio">
                                                <label class="custom-control-label" for="institute_isactive_no">No</label>
                                            </div>
                                        </div>

                                        <div class="row">
                                        <div class="col-md-4 form-group">
                                                <label for="institute_main_person">Institute Main Person</label>
                                                <select class="form-control" id="institute_main_person" placeholder=""></select>
                                                <!--<input class="form-control" id="admin_id" placeholder="" value="" type="number">-->
                                        </div>
                                        <div class="col-md-4 form-group">
                                                <label for="institute_logo">Institute Logo</label>
                                                <input class="form-control" id="institute_logo" placeholder="" type="file">
                                        </div>
                                        <div class="col-md-4 form-group">
                                                <label for="institute_coverpage">Institute Main Person</label>
                                                <input class="form-control" id="institute_coverpage" placeholder="" type="file">
                                        </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="input_tags">Tags</label>
                                            <select id="input_tags" class="form-control" multiple="multiple">
                                                <option selected="selected">orange</option>
                                                <option>white</option>
                                                <option selected="selected">purple</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="input_tags">Date range</label>
                                            <input class="form-control" type="text" name="daterange" value="01/01/2018 - 01/15/2018" />
                                        </div>

                                        <div class="form-group">
                                            <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
                                            <input class="form-control" id="address2" placeholder="Apartment or suite" type="text">
                                        </div>

                                        <div class="row">
                                            <div class="col-md-5 mb-10">
                                                <label for="country">Country</label>
                                                <select class="form-control custom-select d-block w-100" id="country">
                                                    <option value="">Choose...</option>
                                                    <option>United States</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 mb-10">
                                                <label for="state">State</label>
                                                <select class="form-control custom-select d-block w-100" id="state">
                                                    <option value="">Choose...</option>
                                                    <option>California</option>
                                                </select>
                                            </div>
                                            <div class="col-md-3 mb-10">
                                                <label for="zip">Zip</label>
                                                <input class="form-control" id="zip" placeholder="" type="text">
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="custom-control custom-checkbox mb-15">
                                            <input class="custom-control-input" id="same-address" type="checkbox" checked>
                                            <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" id="save-info" type="checkbox">
                                            <label class="custom-control-label" for="save-info">Save this information for next time</label>
                                        </div>
                                        <hr>

                                        <h6 class="form-group">Payment</h6>

                                        <div class="d-block mt-20 mb-30">
                                            <div class="custom-control custom-radio mb-10">
                                                <input id="credit" name="paymentMethod" class="custom-control-input" checked="" type="radio">
                                                <label class="custom-control-label" for="credit">Credit card</label>
                                            </div>
                                            <div class="custom-control custom-radio mb-10">
                                                <input id="debit" name="paymentMethod" class="custom-control-input" type="radio">
                                                <label class="custom-control-label" for="debit">Debit card</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input id="paypal" name="paymentMethod" class="custom-control-input" type="radio">
                                                <label class="custom-control-label" for="paypal">PayPal</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label for="cc-name">Name on card</label>
                                                <input class="form-control" id="cc-name" placeholder="" type="text">
                                                <small class="form-text text-muted">Full name as displayed on card</small>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for="cc-number">Credit card number</label>
                                                <input class="form-control" id="cc-number" placeholder="" data-mask="9999-9999-9999-9999" type="text">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 form-group">
                                                <label for="cc-expiration">Expiration</label>
                                                <input class="form-control" id="cc-expiration" placeholder="" data-mask="99-99" type="text">
                                                <div class="invalid-feedback">
                                                    Expiration date required
                                                </div>
                                            </div>
                                            <div class="col-md-3 form-group">
                                                <label for="cc-cvv">CVV</label>
                                                <input class="form-control" id="cc-cvv" data-mask="999" placeholder="" type="text">
                                            </div>
                                        </div>
                                        <hr>
                                        <button class="btn btn-primary" type="submit">Continue to checkout</button>
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
            <?php include 'Footer.php'; ?>
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

    <!-- Ion JavaScript -->
    <script src="vendors/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
    <script src="dist/js/rangeslider-data.js"></script>

    <!-- Select2 JavaScript -->
    <script src="vendors/select2/dist/js/select2.full.min.js"></script>
    <script src="dist/js/select2-data.js"></script>

    <!-- Bootstrap Tagsinput JavaScript -->
    <script src="vendors/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.html"></script>

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


<!-- Mirrored from hencework.com/theme/brunette/form-layout.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Jan 2019 08:25:30 GMT -->
</html>