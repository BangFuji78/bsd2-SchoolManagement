<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Contact Clients | Adminpro - Admin Template</title>
    <meta name="description" content="">
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
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="css/data-table/bootstrap-editable.css">
    <!-- charts CSS
		============================================ -->
    <link rel="stylesheet" href="css/c3.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <?php include 'partials/header-styles.php'; ?>
</head>

<body class="materialdesign">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Header top area start-->
    <div class="wrapper-pro">
    
    <!-- Left Sidebar Menu Include-->
        <?php include 'partials/menu-leftbar.php' ?>
    <!-- //Left Sidebar-->

        <!-- Header top area start-->
        <div class="content-inner-all">
        <?php include 'partials/header-menu1.php'; ?>
            
            <!-- Header top area end-->
            <!-- Breadcome start-->
            <div class="breadcome-area mg-b-30 small-dn">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcome-list shadow-reset">
                                <div class="row">
                                
                                    <div class="col-lg-6">
                                        <div class="breadcome-heading" >
                                            <form role="search" class="">
                                                <input type="text" placeholder="Search..." class="form-control">
                                                <a href=""><i class="fa fa-search"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                       
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Student</span>
                                            </li>
                                            <form method="post" action="tambah-murid.php">
                                                <button class="btn btn-custon-rounded-three btn-primary pull-right">
                                                  
                                                    <span class="fa fa-plus"></span> Tambah Student
                                                </button>
                                            </form>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Breadcome End-->
            <?php include 'partials/header-menu-mobile.php'; ?>
            <!-- Breadcome start
            <div class="breadcome-area des-none">
                <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                            <div class="breadcome-heading">
                                                <form role="search" class="">
                                                    <input type="text" placeholder="Search..." class="form-control">
                                                    <a href=""><i class="fa fa-search"></i></a>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                            <ul class="breadcome-menu">
                                                <li><a href="index.php">Users</a> <span class="bread-slash">/</span>
                                                </li>
                                                <li><span class="bread-blod">Admin</span>
                                                </li>
                                            </ul>
                                            <form method="post">
                                                <button class="btn btn-primary">
                                                    <span class="fa fa-plus"></span> tambah admin
                                                </button>   
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
             -->
            <!-- Breadcome End-->
<!-- container start -->
<div class="contact-clients-area mg-b-40">
                <?php
                    if(isset($_POST['delete'])){
                        if(del($_POST['del_id'],"student",$mysqli)){
                            goToRedirect('murid.php',0);
                        }
                    }elseif (isset($_POST['edit-murid'])) {
                        goToRedirect('tambah-murid.php?id='.base64_encode(date("d/m/y")."-".$_POST['del_id']),0);
                    }
                ?>
                <div class="container-fluid">
                    <?php $sql="SELECT * FROM `student` ";

                        $qstudent=$mysqli->query($sql);
                        $resc=$qstudent->num_rows;
                        $count=1;
                        while ($resl=$qstudent->fetch_array()) {
                            
                            ?>
                             <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12 mg-b-40">
                                <div class="contact-client-single ct-client-b-mg-30 ct-client-b-mg-30-n shadow-reset">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="contact-client-img">
                                                <a href="#"><img src="<?php echo $resl['fb_photo']; ?>" alt="" />
                                               <!-- <?php echo var_dump($resl['fb_photo']);?> -->
                                               <?php
                                            //    echo var_dump($count);
                                               
                                               ?>
                                                </a>
                                               
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="contact-client-content">
                                                <form method="post">
                                                    <button class="btn btn-default pull-right" name="edit-murid" type="submit"><span class="fa fa-bars fa-3"></a></span></button>
                                                    <input type="hidden" name="del_id" value="<?php echo $resl['student_id']; ?>">
                                                    <button name="delete" class="btn btn-danger pull-right" onclick="return confirm('Yakin ingin hapus data ini?')">
                                                    <span class="fa fa-trash fa-3"></span></button>
                                                </form>
                                                <h2><a href="#"><?php echo $resl['name']; ?></a></h2>
                                                <p><i class="fa fa-map-marker"></i> <?php echo $resl['address']; ?></p>
                                                
                                            </div>
                                            <div class="contact-client-address">
                                                <h3></h3>
                                                <p class="address-client-ct"><strong>Address:</strong> <?php echo $resl['address']; ?></p>
                                                <p><strong>Phone:</strong> <?php echo $resl['phone']; ?></p>
                                                <p><strong>Email:</strong> <?php echo $resl['email']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                    <?php
                        //otomatis ke bawah.
                       
                        $count++;
                        }
                     ?>
                </div>
            </div>
            <!-- container end -->
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
    </div> -->
    <!-- Footer End-->
    <!-- Chat Box Start-->
    
    <!-- Chat Box End-->
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
    <!--  editable JS
		============================================ -->
    <script src="js/jquery.mockjax.js"></script>
    <script src="js/mock-active.js"></script>
    <script src="js/select2.js"></script>
    <script src="js/moment.min.js"></script>
    <script src="js/bootstrap-datetimepicker.js"></script>
    <script src="js/bootstrap-editable.js"></script>
    <script src="js/xediable-active.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
</body>

</html>