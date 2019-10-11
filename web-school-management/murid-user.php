<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard v.1.0 | Adminpro - Admin Template</title>
    <meta name="description" content="">
    <?php include 'partials/header-styles.php'; ?>
</head>

<body class="materialdesign">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <!-- Header top area start-->
    <?php 
        //tempat function berada 
            
        //

     ?>
    <div class="wrapper-pro">
        <?php include 'partials/menu-leftbar.php' ?>
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
                                            <li><span class="bread-blod">Murid</span>
                                            </li>
                                        </ul>
                                        <form method="post">
                                            <input type="hidden" name="user" value="<?php echo $_SESSION['user_online']['username']; ?>">
                                            <button class="btn btn-primary pull-right" type="submit" name="tambah">
                                                <span class="fa fa-plus"></span> Tambah Murid
                                            </button>
                                        </form>
                                        <?php if(isset($_POST['tambah'])){
                                                $_SESSION['tambah']['user']=$_POST['user'];
                                                goToRedirect('tambah-murid.php',0);
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
                                                <li><span class="bread-blod">Murid</span>
                                                </li>
                                            </ul>
                                            <form method="post">
                                                <button class="btn btn-primary">
                                                    <span class="fa fa-plus"></span> tambah Murid
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
                                goToRedirect('murid-user.php',0);
                            }
                        }elseif (isset($_POST['edit'])) {
                            goToRedirect("tambah-murid.php?id=".base64_encode(date("d/m/y")."-".$_POST['del_id']));
                        }
                     ?>
            <div class="contact-clients-area mg-b-40">
                <div class="container-fluid">

                    <?php 



                    $sql="SELECT * FROM `admin` WHERE status ='1'";

                        $qadmin=$mysqli->query($sql);
                        $resc=$qadmin->num_rows;
                        $count=0;
                        while ($resl=$qadmin->fetch_array()) {
                            $count++;
                            if($count==='1' || $count/2===0 ){
                                echo "<div class='row'>";
                            }
                            ?>
                             <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                                <div class="contact-client-single ct-client-b-mg-30 ct-client-b-mg-30-n shadow-reset">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="contact-client-img">
                                                <a href="#"><img src="<?php echo $resl['fb_photo']; ?>" alt="" />
                                                </a>
                                                <h1>
                                                <?php 
                                                if ($resl['owner_status']) {
                                                        echo "Super Admin";
                                                }else{
                                                        echo "Admin";
                                                }
                                                ?></h1>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="contact-client-content">
                                                <form method="post">
                                                    
                                                    <input type="hidden" name="del_id" value="<?php echo $resl['admin_id']; ?>">
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
                        
                        if ($count/2===0 || $count===$resc) {
                            echo "</div>";
                        }
                        
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
   <!--  <div class="chat-list-wrap">
        <div class="chat-list-adminpro">
            <div class="chat-button">
                <span data-toggle="collapse" data-target="#chat" class="chat-icon-link"><i class="fa fa-comments"></i></span>
            </div>
            <div id="chat" class="collapse chat-box-wrap shadow-reset animated zoomInLeft">
                <div class="chat-main-list">
                    <div class="chat-heading">
                        <h2>Messanger</h2>
                    </div>
                    <div class="chat-content chat-scrollbar">
                        <div class="author-chat">
                            <h3>Monica <span class="chat-date">10:15 am</span></h3>
                            <p>Hi, what you are doing and where are you gay?</p>
                        </div>
                        <div class="client-chat">
                            <h3>Mamun <span class="chat-date">10:10 am</span></h3>
                            <p>Now working in graphic design with coding and you?</p>
                        </div>
                        <div class="author-chat">
                            <h3>Monica <span class="chat-date">10:05 am</span></h3>
                            <p>Practice in programming</p>
                        </div>
                        <div class="client-chat">
                            <h3>Mamun <span class="chat-date">10:02 am</span></h3>
                            <p>That's good man! carry on...</p>
                        </div>
                    </div>
                    <div class="chat-send">
                        <input type="text" placeholder="Type..." />
                        <span><button type="submit">Send</button></span>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Chat Box End-->
    <?php include 'partials/footer-JS.php'; ?>
  
</body>

</html>