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
            
            <?php include 'partials/header-menu-mobile.php'; ?>
            <?php 
                if(isset($_GET['id'])) {
                    include('edit-teacher.php');
                //}elseif(!isset($_SESSION['tambah']['user'])){
                   // gotoRedirect('index.php',0);
                }else{
                    ?>
                <!-- container start -->
                <div class="basic-form-area mg-b-15">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sparkline12-list shadow-reset mg-t-30">
                                    <div class="sparkline12-hd">
                                        <div class="main-sparkline12-hd">
                                            <h1>Tambah Guru</h1>
                                            <!-- <div class="sparkline12-outline-icon">
                                                <span class="sparkline12-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                                <span><i class="fa fa-wrench"></i></span>
                                                <span class="sparkline12-collapse-close"><i class="fa fa-times"></i></span>
                                            </div> -->
                                        </div>
                                    </div>
                                    <div class="sparkline12-graph">
                                        <div class="basic-login-form-ad">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="all-form-element-inner">
                                                        <form action="#" method="post" enctype="multipart/form-data">
                                                            <div class="col-lg-6 form-group-inner">
                                                                <div class="form-group-inner">
                                                                    <div class="row">
                                                                        <div class="col-lg-4">
                                                                            <label class="login2 pull-right pull-right-pro"><span class="fa fa-picture-o"></span>  Foto Profil</label>
                                                                        </div>
                                                                        <div class="col-lg-8">
                                                                            <input type="file" accept="image/jpeg" class="form-control" name="foto" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group-inner">
                                                                    <div class="row">
                                                                        <div class="col-lg-4">
                                                                            <label class="login2 pull-right pull-right-pro"><span class="fa fa-user"></span> Nama</label>
                                                                        </div>
                                                                        <div class="col-lg-8">
                                                                            <input type="text" class="form-control" name="nama" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group-inner " id="data_1">
                                                                    <div class="row">
                                                                         <div class="col-lg-4">
                                                                            <label class="login2 pull-right pull-right-pro"><span class="fa fa-calendar"></span> Tanggal Lahir</label>
                                                                        </div>
                                                                        <div class="col-lg-8">
                                                                            <div class=" input-group date ">
                                                                                <input type="text" class="form-control" value="<?php echo date("d/m/Y"); ?>" name="tlahir">
                                                                                 <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group-inner">
                                                                    <div class="row">
                                                                        <div class="col-lg-4">
                                                                            <label class="login2 pull-right pull-right-pro"><span class="fa fa-map-marker"></span> Alamat</label>
                                                                        </div>
                                                                        <div class="col-lg-8">
                                                                            <input type="text" class="form-control" name="alamat" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group-inner">
                                                                    <div class="row">
                                                                        <div class="col-lg-4">
                                                                            <label class="login2 pull-right pull-right-pro"><span class="fa fa-envelope"></span> E-mail</label>
                                                                        </div>
                                                                        <div class="col-lg-8">
                                                                            <input type="text" class="form-control" name="email" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group-inner">
                                                                    <div class="row">
                                                                        <div class="col-lg-4">
                                                                            <label class="login2 pull-right pull-right-pro"><span class="fa fa-phone"></span> Nomor Telp.</label>
                                                                        </div>
                                                                        <div class="col-lg-8">
                                                                            <input type="number" class="form-control" name="telp" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group-inner">
                                                                    <div class="row">
                                                                        <div class="col-lg-4">
                                                                            <label class="login2 pull-right pull-right-pro"><span class="fa fa-user"></span> Username</label>
                                                                        </div>
                                                                        <div class="col-lg-8">
                                                                            <input type="text" class="form-control" name="username" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group-inner">
                                                                    <div class="row">
                                                                        <div class="col-lg-4">
                                                                            <label class="login2 pull-right pull-right-pro"><span class="fa fa-key"></span> Password</label>
                                                                        </div>
                                                                        <div class="col-lg-8">
                                                                            <input type="password" class="form-control" name="password" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group-inner">
                                                                    <div class="row">
                                                                        <div class="col-lg-4">
                                                                            <label class="login2 pull-right pull-right-pro"><span class="fa fa-id-card"></span> Jenis Kelamin</label>
                                                                        </div>
                                                                         <div class="col-lg-8">
                                                                            <div class="form-select-list">
                                                                                <select class="form-control custom-select-value" name="kelamin">
                                                                                    <option value="0">Laki Laki</option>
                                                                                    <option value="1">Perempuan</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group-inner">
                                                                <div class="login-btn-inner">
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div class="login-horizental cancel-wp pull-right">
                                                                                <button name="kembali" class="btn btn-white" type="submit"><a href="teacher.php">Kembali</a></button>
                                                                                <button class="btn btn-sm btn-primary login-submit-cs" name="tambah" type="submit">Tambah</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                        <?php  if(isset($_POST['tambah'])){
                                                                $data=clearSQLInjection($mysqli, $_POST);
                                                                if($_FILES['foto']['name']!=="") {
                                                                    $save=fpadmin($_FILES,"teacher");
                                                                }else{
                                                                    alert("foto Profil belum terpilih");
                                                                    gotoRedirect('tambah-teacher.php',0);
                                                                }
                                                                //echo var_dump($data);
                                                                //echo "Thumbnail: <img src='".$save."'>";
                                                                $sqlTeacher= "INSERT INTO `teacher`(`name`,
                                                                 `birthday`, `sex`, `address`, `phone`,`email`, `password`, `username`,`fb_photo`) VALUES ('".$data['nama']."','".date_format(date_create($data['tlahir']),"Y-m-d")."','".($data['kelamin'])."','".$data['alamat']."','".$data['telp']."','".$data['email']."', '".md5($data['password'])."','".$data['username']."','".$save."')";
                                                                
                                                                if($qteacher=$mysqli->query($sqlTeacher)){
                                                                    unset($_SESSION['tambah']['user']);
                                                                    alert("data guru telah tersimpan");
                                                                    gotoRedirect('teacher.php',0);
                                                                }

                                                              
                                                              
                                                        }?>
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
                <!-- container end -->
                <?php
                }
             ?>
            
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