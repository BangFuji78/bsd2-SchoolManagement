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
            <!-- Breadcome start-->
            <div class="breadcome-area mg-b-30 small-dn">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
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
                                            <li><a href="#">Users</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Siswa</span>
                                            </li>
                                        </ul>
                                        
                                        <form method="post">
                                            <input type="hidden" name="user" value="<?php echo $_SESSION['user_online']['username']; ?>">
                                            <button class="btn btn-primary pull-right" type="submit" name="tambah">
                                                <span class="fa fa-plus"></span> Tambah Siswa
                                            </button>
                                        </form>
                                        <?php 
                                            if(isset($_GET['id']) && $_GET['id'] !== "" ){
                                                $dataid=substr(base64_decode($_GET['id']),strpos(base64_decode($_GET['id']),"-")+1);
                                                
                                            }else{
                                                $sql="SELECT min(class_id) as 'id' FROM `class` ";
                                                $query=$mysqli->query($sql);
                                                $section=$query->fetch_assoc();
                                                goToRedirect("murid.php?id=".base64_encode(date("d/m/y")."-".$section['id']),0); 
                                            }

                                            if(isset($_POST['tambah'])){
                                                $_SESSION['tambah']['user']=$_POST['user'];
                                                goToRedirect('tambah-admin.php',0);
                                            } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Breadcome End-->
            <?php include 'partials/header-menu-mobile.php'; ?>
            <!-- Breadcome start-->
             <div class="basic-form-area mg-t-30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6 pull-right">
                                <div class="sparkline12-list shadow-reset mg-t-30">
                                    <div class="sparkline12-graph">
                                        <div class="basic-login-form-ad">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="all-form-element-inner">
                                                        <form action="" method="post" enctype="multipart/form-data">
                                                            <div class="col-lg-12">
                                                                <div class="form-group-inner">
                                                                    <div class="row login-btn-inner">
                                                                        <div class="col-lg-3 pull-left">
                                                                            <label class="login2 pull-right pull-right-pro"><span class="fa fa-filter"></span> Jenjang</label>
                                                                        </div>
                                                                        <div class="col-lg-5">
                                                                            <div class="form-select-list">
                                                                                <select class="form-control custom-select-value" name="kelas">
                                                                                <?php 
                                                                                       
                                                                                        $sql="SELECT * FROM `class`";
                                                                                        $query=$mysqli->query($sql);
                                                                                        
                                                                                        while ($section=$query->fetch_array()) {
                                                                                ?>
                                                                                    <option value="<?php echo $section['class_id']; ?>" selected="<?php if ($section['class_id']===$dataid) {
                                                                                        echo "true";
                                                                                    } ?>">
                                                                                    <?php echo $section['name']; ?>
                                                                                    </option>
                                                                                <?php
                                                                                        }
                                                                                 ?>
                                            
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-4 pull-right">
                                                                            <button class="btn btn-sm btn-primary login-submit-cs" name="tambah" type="submit">Tampilkan Hasil</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
            <!-- Breadcome End-->
            <!-- container start -->
             <?php 
                        if(isset($_POST['delete'])){
                            if(del($_POST['del_id'],"admin",$mysqli)){
                                goToRedirect('admin-user.php',0);
                            }
                        }elseif (isset($_POST['edit'])) {
                            goToRedirect("tambah-admin.php?id=".base64_encode(date("d/m/y")."-".$_POST['del_id']));
                        }
                     ?>
            <div class="admintab-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="admintab-wrap mg-b-40">
                                <ul class="nav nav-tabs custom-menu-wrap custon-tab-menu-style1">
                                    <?php 
                                        $sql="SELECT section.`section_id`, section.`name`, class.`class_id` FROM section, class WHERE section.`class_id` = class.`class_id`";
                                        $query=$mysqli->query($sql);
                                        $kelas;
                                        while ($rombel=$query->fetch_array()) {
                                           ?>
                                           <li class="active"><a data-toggle="tab" href="#<?php echo $rombel['section_id']; ?>"><span class="fa fa-users"></span> rombel <?php echo $rombel['name']; ?></a>
                                            </li>   
                                    <?php
                                            $kelas[] = $rombel['section_id'];
                                        }
                                     ?>
                                      <li ><a data-toggle="tab" href="#TabDetails"><span class="fa fa-users"></span> test</a>
                                            </li>   
                                </ul>
                                <div class="tab-content">
                                    <?php foreach ($kelas as $id => $value) {
                                        ?>
                                        <div id="<?php echo $value; ?>" class="tab-pane in active animated flipInX custon-tab-style1">
                                            <div class="contact-clients-area mg-b-40">
                                                <div class="container-fluid">

                                                    <?php 
                                                    $sql="SELECT student.`student_id`, student.`name`, student.`address`, student.`phone`, student.`email`, student.`fb_photo`, section.name as 'rombel', class.name as 'kelas'  FROM student, section, class, enroll WHERE enroll.student_id= student.student_id and enroll.section_id = '$value' and enroll.class_id= '$dataid' and section.section_id = enroll.section_id and class.class_id = enroll.class_id";

                                                        $qadmin=$mysqli->query($sql);
                                                        $resc=$qadmin->num_rows;
                                                        
                                                        $count=0;
                                                        while ($resl=$qadmin->fetch_array()) {
                                                            $count++;
                                                            // if($count==='1' || $count/2===0 ){
                                                            //     echo "<div class='row'>";
                                                            // }
                                                            ?>
                                                             <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mg-b-40">
                                                                <div class="contact-client-single ct-client-b-mg-30 ct-client-b-mg-30-n shadow-reset">
                                                                    <div class="row">
                                                                        <div class="col-lg-4">
                                                                            <div class="contact-client-img">
                                                                                <a href="#"><img src="<?php echo $resl['fb_photo']; ?>" alt="" />
                                                                                </a>
                                                                               <!--  <h1>
                                                                                <?php 
                                                                                // if ($resl['owner_status']) {
                                                                                //         echo "Super Admin";
                                                                                // }else{
                                                                                //         echo "Admin";
                                                                                // }
                                                                                ?></h1> -->
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-8">
                                                                            <div class="contact-client-content">
                                                                                <form method="post">
                                                                                    
                                                                                    <input type="hidden" name="del_id" value="<?php echo $resl['student_id']; ?>">
                                                                                    <button class="btn btn-default pull-right" name="edit" type="submit"><span class="fa fa-bars fa-3" ></span></button>
                                                                                    <button name="delete" class="btn btn-danger pull-right" onclick="return confirm('Yakin ingin hapus data ini?')"><span class="fa fa-trash fa-3"></span></button>
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
                                                        
                                                        // if ($count/2===0 || $count===$resc) {
                                                        //     echo "</div>";
                                                        // }
                                                        
                                                        }
                                                     ?>
                                                </div>
                                            </div>

                                        </div>
                                    <?php
                                    } ?>
                                    <div id="TabDetails" class="tab-pane animated flipInX custon-tab-style1">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                        <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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