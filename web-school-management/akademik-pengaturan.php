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
            <div class="contact-clients-area mg-b-40">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="admintab-wrap mg-b-40">
                                <ul class="nav nav-tabs custom-menu-wrap custon-tab-menu-style1">
                                    <li class="active"><a data-toggle="tab" href="#rombel" aria-expanded="true"><span class="fa fa-pencil fa-6"></span> Rombongan Belajar - (Rombel)</a>
                                    </li>
                                    <li class=""><a data-toggle="tab" href="#TabDetails" aria-expanded="false"><span class="adminpro-icon adminpro-analytics-arrow tab-custon-ic"></span>Tab Details</a>
                                    </li>
                                    <li class=""><a data-toggle="tab" href="#TabPlan" aria-expanded="false"><span class="adminpro-icon adminpro-analytics-bridge tab-custon-ic"></span>Tab Plan</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div id="rombel" class="tab-pane animated flipInX custon-tab-style1 active">
                                        <div class="row">
                                        <?php 
                                            $celas=0;
                                            $nCelas="";
                                            if(isset($_SESSION['id']) && $_SESSION['id'] !== "" ){
                                                $dataid=$_SESSION['id'];
                                                
                                            }else{
                                                $sql="SELECT min(class_id) as 'id' FROM `class` ";
                                                $query=$mysqli->query($sql);
                                                $awal=$query->fetch_assoc();
                                                $dataid=$awal['id'];
                                                //goToRedirect("akademik-pengaturan.php",0);
                                            }
                                         ?>
                                             <div class="col-lg-6 pull-right">
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
                                                                                                
                                                                                                while ($kelas=$query->fetch_array()) {
                                                                                                    $celas=$kelas['teacher_id'];
                                                                                                    
                                                                                        ?>
                                                                                            <option value="<?php echo $kelas['class_id']; ?>" <?php if ($kelas['class_id']===$dataid) {
                                                                                                echo "selected=true";
                                                                                                $nCelas=$kelas['name'];
                                                                                            } ?>>
                                                                                            <?php echo $kelas['name'];
                                                                                                        
                                                                                             ?>
                                                                                            </option>
                                                                                        <?php
                                                                                                }
                                                                                         ?>
                                                    
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-4 pull-right">
                                                                                    <button class="btn btn-sm btn-primary login-submit-cs" name="filter" type="submit">Tampilkan Hasil</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                                <?php 
                                                                    if(isset($_POST['filter'])){
                                                                        $_SESSION['id']=$_POST['kelas'];
                                                                        goToRedirect("#");
                                                                    }
                                                                 ?>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                            <div class="contact-clients-area mg-b-40">
                                                                <div class="container-fluid">
                                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 mg-b-40">
                                                                                <div class="contact-client-single ct-client-b-mg-30 ct-client-b-mg-30-n">
                                                                                    <div class="row">
                                                                                        <div class="col-lg-12">
                                                                                           <form method="post">
                                                                                            <input type="hidden" name="user" value="<?php echo $_SESSION['user_online']['username']; ?>">
                                                                                            <button class="btn btn-default col-xs-12 pull-right" type="submit" name="tambah">
                                                                                                <span class="fa fa-plus"></span> Tambah Rombel
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



                                                                    $sql="SELECT * FROM `section` where class_id='".$dataid."' ";
                                                                        
                                                                        $qadmin=$mysqli->query($sql);
                                                                        $resc=$qadmin->num_rows;
                                                                        $count=0;
                                                                        while ($resl=$qadmin->fetch_array()) {
                                                                            $count++;
                                                                            // if($count==='1' || $count/2===0 ){
                                                                            //     echo "<div class='row'>";
                                                                            // }
                                                                            ?>
                                                                             <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 mg-b-40">
                                                                                <div class="contact-client-single ct-client-b-mg-30 ct-client-b-mg-30-n" style="border:1pt solid black; border-radius: 10px">
                                                                                    <div class="row">
                                                                                        <div class="col-lg-2">
                                                                                            <center>
                                                                                            <div class="btn-primary" style="width:40px;height:40px; font: 24pt arial; border: 1pt solid; border-radius: 40px; vertical-align: middle; text-align: center; ">
                                                                                                <?php 
                                                                                                     echo $resl['name'];   ?>
                                                                                            </div>
                                                                                            </center>
                                                                                        </div>
                                                                                        <div class="col-lg-10 pull-left">
                                                                                            <div class="contact-client-content">
                                                                                                <form method="post">
                                                                                                    
                                                                                                    <input type="hidden" name="del_id" value="<?php echo $resl['admin_id']; ?>">
                                                                                                    <button class="btn btn-default pull-right" name="edit" type="submit"><span class="fa fa-bars fa-3" ></span></button>
                                                                                                    <button name="delete" class="btn btn-danger pull-right" onclick="return confirm('Yakin ingin hapus data ini?')"><span class="fa fa-trash fa-3"></span></button>
                                                                                                </form>
                                                                                                <h4><i class="fa fa-graduation-cap"></i> Guru : <?php 
                                                                                                            if($resc<=1){
                                                                                                        $sql="select * from teacher where teacher_id='".$celas."'";
                                                                                                        $query=$mysqli->query($sql);
                                                                                                        $guru=$query->fetch_assoc();
                                                                                                        //echo var_dump($sql);
                                                                                                    }else{
                                                                                                        $sql="select * from teacher where teacher_id='".$resl['teacher_id']."'";
                                                                                                        $query=$mysqli->query($sql);
                                                                                                        $guru=$query->fetch_assoc();
                                                                                                        echo var_dump($sql);
                                                                                                        } 
                                                                                                        echo $guru['name'];
                                                                                                 ?></h4>
                                                                                            </div>
                                                                                            <div class="contact-client-address">
                                                                                                <h5><i class="fa fa-users"></i> Murid :
                                                                                                        <?php $sql="select count(enroll.student_id) as 'count' from enroll, class, section where class.class_id = '".$dataid."' and section.section_id = '".$resl['section_id']."' and enroll.class_id= class.class_id and enroll.section_id= section.section_id";
                                                                                                            $query=$mysqli->query($sql);
                                                                                                            $siswa=$query->fetch_assoc();
                                                                                                            echo $siswa['count'];
                                                                                                         ?>
                                                                                                </h5>
                                                                                                <h5><i class="fa fa-building"></i> Jenjang :

                                                                                                <a href="" class="btn btn-primary"> <?php 
                                                                                                        echo $nCelas;
                                                                                                 ?></a></h5>
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
                                        </div>
                                    </div>
                                    <div id="TabDetails" class="tab-pane animated flipInX custon-tab-style1">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                        <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                    </div>
                                    <div id="TabPlan" class="tab-pane animated flipInX custon-tab-style1">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                        <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries. </p>
                                        <p>the leap into electronic typesetting, remaining essentially unchanged.</p>
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