<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login to This Site</title>
    <meta name="description" content="">
    <?php 
        include 'library/functions.php'; //memanggil file functions.php pada folder library
        include 'library/config_database.php'; //memanggil file config_database.php pada folder
       
     ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- adminpro icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/adminpro-custon-icon.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
     <!-- modals CSS
        ============================================ -->
    <link rel="stylesheet" href="css/modals.css">
    <!-- duallistbox CSS
        ============================================ -->
    <link rel="stylesheet" href="css/duallistbox/bootstrap-duallistbox.min.css">
    <!-- cropper CSS
        ============================================ -->
    <link rel="stylesheet" href="css/cropper/cropper.min.css">
    <!-- summernote CSS
        ============================================ -->
    <link rel="stylesheet" href="css/summernote.css">
    <!-- jvectormap CSS
        ============================================ -->
    <link rel="stylesheet" href="css/jvectormap/jquery-jvectormap-2.0.3.css">
    <!-- data-table CSS
		============================================ -->
    <link rel="stylesheet" href="css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="css/data-table/bootstrap-editable.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- touchspin CSS
        ============================================ -->
    <link rel="stylesheet" href="css/touchspin/jquery.bootstrap-touchspin.min.css">
    <!-- datapicker CSS
        ============================================ -->
    <link rel="stylesheet" href="css/datapicker/datepicker3.css">
    <!-- forms CSS advance
        ============================================ -->
    <link rel="stylesheet" href="css/form/themesaller-forms.css">
    <!-- colorpicker CSS
        ============================================ -->
    <link rel="stylesheet" href="css/colorpicker/colorpicker.css">
    <!-- select2 CSS
        ============================================ -->
    <link rel="stylesheet" href="css/select2/select2.min.css">
    <!-- chosen CSS
        ============================================ -->
    <link rel="stylesheet" href="css/chosen/bootstrap-chosen.css">
    <!-- ionRangeSlider CSS
        ============================================ -->
    <link rel="stylesheet" href="css/ionRangeSlider/ion.rangeSlider.css">
    <link rel="stylesheet" href="css/ionRangeSlider/ion.rangeSlider.skinFlat.css">
    <!-- forms CSS
        ============================================ -->
    <link rel="stylesheet" href="css/form/all-type-forms.css">
    <!-- dropzone CSS
        ============================================ -->
    <link rel="stylesheet" href="css/dropzone.css">
    <!-- x-editor CSS
        ============================================ -->
    <link rel="stylesheet" href="css/select2.css">
    <link rel="stylesheet" href="css/datetimepicker.css">
    <link rel="stylesheet" href="css/bootstrap-editable.css">
    <link rel="stylesheet" href="css/x-editor-style.css">
    <!-- charts CSS
        ============================================ -->
    <link rel="stylesheet" href="css/c3.min.css">
    <!-- charts CSS
        ============================================ -->
    <link rel="stylesheet" href="css/charts.css">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="css/form/all-type-forms.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
     <!-- duallistbox CSS
        ============================================ -->
    <link rel="stylesheet" href="css/duallistbox/bootstrap-duallistbox.min.css">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="css/alerts.css">
    <!-- form CSS
		============================================ -->
    <link rel="stylesheet" href="css/form.css">
    <?php 
        //session_start();
    ?>
</head>

<body class="materialdesign">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Header top area start-->
    
    <div class="wrapper-pro">

           
            <!-- Breadcome End-->
            <!-- login Start-->
            <div class="login-form-area mg-t-30 mg-b-40">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4"></div>
                        <form id="adminpro-form" method="post" class="adminpro-form">
                            <div class="col-lg-4">
                                <div class="login-bg">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="logo">
                                               <div class="col-lg-13 login-title" >    
                                                        <img src="img/logo/logo.png" alt="" width="100%" />
                                                        
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="login-title">
                                                <center>
                                                <h1>
                                                    SIMS<br/>
                                                </h1>
                                                <h5>(Sistem Informasi Management Sekolah)</h5> 
                                                </center>
                                            </div>
                                        </div>

                                    </div>
                               
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="login-input-head">
                                                <p>Username</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="login-input-area">
                                                <input type="text" name="username" />
                                                <i class="fa fa-envelope login-user" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="login-input-head">
                                                <p>Password</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="login-input-area">
                                                <input type="password" name="password" />
                                                <i class="fa fa-lock login-user"></i>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <!-- <div class="forgot-password">
                                                        <a href="#">Lupa Password</a>
                                                    </div> -->
                                                </div>
                                            </div>
                                            <!-- <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="login-keep-me">
                                                        <label class="checkbox">
                                                            <input type="checkbox" name="remember" checked><i></i>Keep me logged in
                                                        </label>
                                                    </div>
                                                </div>
                                            </div> -->
                                            
                                        </div>
                                        <!-- <marquee behavior="alternate" direction="right" 
                                        style="font-family:comic sans ms;color:red;font-weight:bold;">Don't Give your Password to Others..</marquee> -->
                                    </div>
                               
                                    <div class="row">
                                        <div class="col-lg-4">
                                    </div>
                                   
                                    <div class="col-lg-12">
                                            <div class="login-button-pro " >
                                                    <!-- <button type="submit" class="login-button login-button-rg">Register</button> -->
                                                    <button type="submit" name="login" class="form-control login-button login-button-lg ">Log in</button>
                                                
                                            </div>
                                        </div>
                                
                                    </div>
                                </div>
                            </div>
                        </form>
                        <?php
                            if(isset($_POST['login'])){
                                $data=clearSQLInjection($mysqli,$_POST);
                                $admin=$mysqli->query("SELECT * FROM `admin` where username='".$data['username']."' and password='".md5($data['password'])."'");
                                $teacher=$mysqli->query("SELECT * FROM `teacher` where username='".$data['username']."' and password='".md5($data['password'])."'");
                                $student=$mysqli->query("SELECT * FROM `student` where username='".$data['username']."' and password='".md5($data['password'])."'");
                                $parent=$mysqli->query("SELECT * FROM `teacher` where username='".$data['username']."' and password='".md5($data['password'])."'");
                                // echo var_dump();
                                if(
                                    $res=$admin->fetch_array() ||
                                    $res=$teacher->fetch_array() ||
                                    $res=$student->fetch_array() ||
                                    $res=$parent->fetch_array()
                                    ){
                                     gotoRedirect("index.php",0);
                                    $_session['user_online']=$res;
                                    //echo var_dump($res);
                                    
                                }else{
                                   echo '<h1>Login gagal</h1>';
                                }
                               
                            }

                        ?>
                        <div class="col-lg-4"></div>
                    </div>
                </div>
            </div>
            <!-- login End-->
        </div>
    </div>
    <!-- Footer Start-->
   <!-- <div class="footer-copyright-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-copy-right">
                        <p>Copyright &#169; 2018 Colorlib All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
     -->
    <!-- Footer End-->
    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- form validate JS
		============================================ -->
    <script src="js/jquery.form.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/form-active.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
</body>

</html>