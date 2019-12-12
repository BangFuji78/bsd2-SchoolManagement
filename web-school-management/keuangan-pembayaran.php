<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Keuangan | Pembayaran</title>
    <meta name="description" content="Keuangan, beranda keuangan">
    <?php include 'partials/header-styles.php'; ?>
    <style>
    table thead tr th {
        text-align: center;
        align-content: center;
        vertical-align: middle;
    }
    </style>
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
                                               <!--  <input type="text" placeholder="Search..." class="form-control">
                                                <a href=""><i class="fa fa-search"></i></a> -->
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Keuangan</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Pembayaran</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Breadcome End-->
            <!-- container start -->
            <div class="admintab-area">
            <div class="login-form-area adminpro-pd mg-b-15">
                <div class="container-fluid">
                <div class="modal-bootstrap shadow-reset nt-mg-b-30">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="admintab-wrap mg-b-40">
                                <!-- <ul class="nav nav-tabs custom-menu-wrap custon-tab-menu-style1">
                                    <li class="active"><a data-toggle="tab" href="#TabExpense"></span>Expenses</a>
                                    </li>
                                    <li><a data-toggle="tab" href="#TabCat"></span>Category</a>
                                    </li>
                                </ul> -->
                                <div class="tab-content">
                                    <div id="pembayaran_br" class="tab-pane in active animated flipInX custon-tab-style1">
                                        <div class="button-ap-list responsive-btn">    
                                        <!-- <h3>Expense</h3> -->
                                        <div class="row mg-b-40">
                                            <a href="keuangan-pembayaran-baru.php"><button type="button" class="btn btn-custon-rounded-four btn-primary">PEMBAYARAN BARU</button></a>
                                        </div>
                                        <div class="row mg-b-40 ">
                                            <table id="table" class="col-xs-12" data-toggle="table">
                                                    <thead>
                                                        <tr>
                                                            <th data-field="status">STATUS</th>
                                                            <th data-field="siswa">SISWA</th>
                                                            <th data-field="kelas">KELAS</th>
                                                            <th data-field="jenis">JENIS</th>
                                                            <th data-field="JUMLAH">JUMLAH</th>
                                                            <th data-field="tanggal">TANGGAL</th>
                                                            <th data-field="option">OPTION</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                            <?php 
                                                $recentInv="SELECT * FROM invoice order by from_unixtime(`creation_timestamp`, '%Y %D %M %H:%i:%s')";
                                                //convert unix timestamp to format date
                                                $queryInv=$mysqli->query($recentInv);
                                                while ( $invRes=$queryInv->fetch_array()) {
                                                    ?>
                                                    <tr>
                                                        <td>
                                                             <div class="col-lg-12 btn-default" style="
                                                                    border-radius: 10px;
                                                                    background-color: 
                                                                    <?php 
                                                                        if($invRes['status']==='pending'){
                                                                            echo "yellow";
                                                                        }else{
                                                                            echo "greenyellow";
                                                                        }
                                                    
                                                                     ?>;
                                                                    text-align: center;">
                                                               <?php 
                                                                        if($invRes['status']==='pending'){
                                                                            echo "Belum";
                                                                        }else{
                                                                            echo "Terbayar";
                                                                        }
                                                    
                                                                     ?>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <?php 
                                                            $namaMurid="SELECT `student_id`, `name` FROM `student` WHERE `student_id`='".$invRes['student_id']."'";
                                                            $queryNM=$mysqli->query($namaMurid);
                                                            $resultNM=$queryNM->fetch_assoc();
                                                            echo $resultNM['name'];

                                                             ?>
                                                        </td>
                                                        <td>
                                                            <?php 
                                                            $namaKelas="SELECT `class_id`, `name` FROM `class` WHERE `class_id`='".$invRes['student_id']."'";
                                                            $queryNM=$mysqli->query($namaKelas);
                                                            $resultNM=$queryNM->fetch_assoc();
                                                            echo $resultNM['name'];

                                                             ?>
                                                        </td>
                                                        <td><?php echo $invRes['title']; ?></td>
                                                        <td>
                                                            <div class="col-lg-12 btn-primary" style="border-radius: 20px;" >
                                                                <?php 
                                                                echo formatUang($invRes['due']);
                                                                 ?>     
                                                            </div>
                                                        </td>
                                                        <td>
                                                        <?php 
                                                            $namaWaktu="SELECT FROM_UNIXTIME(`payment`.`timestamp`, '%W %e %M, %Y') as waktu
                                                            FROM `payment` WHERE `student_id`='".$invRes['student_id']."'";
                                                            $queryNM=$mysqli->query($namaWaktu);
                                                            $resultNM=$queryNM->fetch_assoc();
                                                            echo $resultNM['waktu'];
                                                             ?>

                                                        </td>
                                                        <td>
                                                        <button type="button" class="btn btn-custon-rounded-four btn-primary">Invoice</button>
                                                        <button type="button" class="btn btn-custon-rounded-four btn-primary">Edit</button>
                                                        <button type="button" class="btn btn-custon-rounded-four btn-primary">Delete</button>
                                                        </td>
                                                        
                                                    </tr>
                                            <?php
                                                }
                                             ?>
                                            </tbody>
                                            </table>
                                        </div>
    
                                      
                                                    
                                        </div>
                                    </div>                                
                                   
    <?php include 'partials/footer-JS.php'; ?>
  
</body>

</html>