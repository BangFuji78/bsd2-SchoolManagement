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
                
            </div>
            <!-- Breadcome End-->
            <?php include 'partials/header-menu-mobile.php'; ?>
            <!-- Breadcome start-->
            <div class="breadcome-area des-none">
                
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
            <div class="contact-clients-area mg-b-40">
                <div class="container-fluid">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 mg-b-40">
                                <div class="contact-client-single ct-client-b-mg-30 ct-client-b-mg-30-n shadow-reset">
                                    <div class="row">
                                        <div class="col-lg-12">
                                           <form method="post">
                                            <input type="hidden" name="user" value="<?php echo $_SESSION['user_online']['username']; ?>">
                                            <button class="btn btn-default col-xs-12 pull-right" type="submit" name="tambah">
                                                <span class="fa fa-plus"></span> Tambah kelas
                                            </button>
                                        </form>
                                        <?php if(isset($_POST['tambah'])){
                                                $_SESSION['tambah']['user']=$_POST['user'];
                                                goToRedirect('tambah-kelas.php',0);
                                            } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php 



                    $sql="SELECT * FROM `class` ";

                        $qadmin=$mysqli->query($sql);
                        $resc=$qadmin->num_rows;
                        $count=0;
                        while ($resl=$qadmin->fetch_array()) {
                            $count++;
                            // if($count==='1' || $count/2===0 ){
                            //     echo "<div class='row'>";
                            // }
                            ?>
                             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 mg-b-40">
                                <div class="contact-client-single ct-client-b-mg-30 ct-client-b-mg-30-n shadow-reset">
                                    <div class="row">
                                        <div class="col-lg-12"><center>
                                           <a href="#" class="btn btn-warning col-xs-12" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-building-o"></i> <span class="mini-dn"><?php echo $resl['name']; ?></span></i></span></a>
                                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX col-xs-6 pull-right">
                                                <a href="tambah-kelas.php?id=<?php echo base64_encode(date("d/m/y")."-".$resl['class_id']); ?>" class="col-xs-12 dropdown-item">edit</a><br>
                                                <a href="keuangan-pembayaran.php" class=" col-xs-12 dropdown-item">Pelajaran</a><br>
                                                <a href="keuangan-biaya.php" class=" col-xs-12 dropdown-item">Delete</a>
                                            </div>
                                            </center>
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