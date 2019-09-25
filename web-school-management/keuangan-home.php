<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Keuangan | Beranda</title>
    <meta name="description" content="Keuangan, beranda keuangan">
    <?php include 'partials/header-styles.php'; ?>
    <style>
    table thead tr th {
        text-align: center;
        align-items: center;
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
                                            <li><span class="bread-blod">Beranda</span>
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
                                                <!-- <input type="text" placeholder="Search..." class="form-control">
                                                <a href=""><i class="fa fa-search"></i></a> -->
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="index.php">Keuangan</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Beranda</span>
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
            
            <div class="analysis-progrebar-area mg-t-30 materialdesign-alert">
                <div class="container-fluid">
                    <div class="row">
                       <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="analysis-progrebar ant-res-b-30 ant-res-b-nt-30 shadow-reset">
                                <div class="analysis-progrebar-content">
                                    <h3 style="text-align: center; "><span class="fa fa-money" style="color:green;"></span> <span class="fa fa-sign-in" style="color:green;"></span> Pemasukan</h3>
                                    <?php 
                                         $sqlic="SELECT sum(`amount`) as 'income', `month` FROM `payment` WHERE `payment_type`='income'";
                                        $queryic=$mysqli->query($sqlic);
                                        $resultic=$queryic->fetch_assoc();
                                     ?>
                                    <h2 style="text-align: center; "><span class=""><?php echo formatUang($resultic['income']); ?></span></h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="analysis-progrebar ant-res-b-30 shadow-reset">
                                <div class="analysis-progrebar-content">
                                     <h3 style="text-align: center; "><span class="fa fa-sign-out" style="color: red;"></span> <span class="fa fa-money" style="color: red;"></span>  Biaya</h3>
                                    <?php 
                                         $sqlpy="SELECT sum(`amount`) as 'payment', `month` FROM `payment` WHERE `payment_type`='expense'";
                                        $querypy=$mysqli->query($sqlpy);
                                        $resultpy=$querypy->fetch_assoc();
                                     ?>
                                    <h2 style="text-align: center; "><span class=""><?php echo formatUang($resultpy['payment']); ?></span></h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="analysis-progrebar ant-res-b-30 ant-res-b-nt-30 shadow-reset">
                                <div class="analysis-progrebar-content">
                                    <h5>Terbayarkan</h5>
                                    <?php 
                                         $sqlsd="SELECT count(`invoice_id`) as 'jumsd' FROM `invoice` WHERE `status`='completed'";
                                        $querysd=$mysqli->query($sqlsd);
                                        $resultsd=$querysd->fetch_assoc();
                                        $sql="SELECT count(`invoice_id`) as 'jum' FROM `invoice`";
                                        $query=$mysqli->query($sql);
                                        $result=$query->fetch_assoc();
                                     ?>
                                    <h2><span class="counter"><?php echo percent($resultsd['jumsd'],$result['jum']); ?></span>%</h2>
                                    <div class="progress progress-mini">
                                        <div style="width: <?php echo percent($resultsd['jumsd'],$result['jum']); ?>%; background-color: green;" class="progress-bar 90-progress-bar"></div>
                                    </div>
                                    <div class="m-t-sm small">
                                        <?php echo "sudah terbayar ".$resultsd['jumsd']." dari ".$result['jum']." Nota"; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="analysis-progrebar ant-res-b-30 shadow-reset">
                                <div class="analysis-progrebar-content">
                                    <h5>Belum Terbayarkan</h5>
                                    <?php 
                                        $sqlbl="SELECT count(`invoice_id`) as 'jumbl' FROM `invoice` WHERE `status`='pending'";
                                        $querybl=$mysqli->query($sqlbl);
                                        $resultbl=$querybl->fetch_assoc();
                                     ?>
                                    <h2><span class="counter"><?php 
                                                echo percent($resultbl['jumbl'],$result['jum']);
                                     ?></span>%</h2>
                                    <div class="progress progress-mini">
                                        <div style="width: <?php echo percent($resultbl['jumbl'],$result['jum']); ?>%;" class="progress-bar progress-bar-danger"></div>
                                    </div>
                                    <div class="m-t-sm small">
                                        <?php echo "belum terbayar ".$resultbl['jumbl']." dari ".$result['jum']." Nota"; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="data-table-area mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="sparkline10-list shadow-reset mg-t-30">
                                <div class="sparkline10-hd">
                                    <div class="main-sparkline10-hd">
                                        <h1>Pemasukan Terbaru</h1>
                                        <div class="sparkline10-outline-icon">
                                            <span class="sparkline10-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            <!-- <span><i class="fa fa-wrench"></i></span> -->
                                            <!-- <span class="sparkline10-collapse-close"><i class="fa fa-times"></i></span >-->
                                        </div>
                                    </div>
                                </div>
                                <div class="sparkline10-graph">
                                    <div class="static-table-list">
                                        <table class="table border-table">
                                            <thead>
                                                <tr>
                                                    <th>Status</th>
                                                    <th>Siswa</th>
                                                    <th>Uraian</th>
                                                    <th>Jumlah</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                         <div class="col-lg-12 btn-default" style="border-radius: 10px;background-color: yellow; text-align: center;">
                                                           Belum
                                                        </div>
                                                    </td>
                                                    <td>Mamun</td>
                                                    <td>Pembayaran bulan Juli</td>
                                                    <td>
                                                        <div class="col-lg-12 btn-primary" style="border-radius: 20px;" >
                                                            <?php 
                                                            echo formatUang(10000);
                                                             ?>     
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="col-lg-12 btn-default" style="border-radius: 10px;background-color: greenyellow; text-align: center;">
                                                           Terbayar
                                                        </div>
                                                    </td>
                                                    <td>Mamun</td>
                                                    <td>Pembayaran bulan Juli</td>
                                                    <td>
                                                        <div class="col-lg-12 btn-primary" style="border-radius: 20px;" >
                                                                <?php 
                                                                echo formatUang(10000000);
                                                                 ?>     
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="sparkline11-list shadow-reset mg-t-30">
                                <div class="sparkline11-hd">
                                    <div class="main-sparkline11-hd">
                                        <h1>Biaya Terbaru</h1>
                                        <div class="sparkline10-outline-icon">
                                            <span class="sparkline11-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            <!-- <span><i class="fa fa-wrench"></i></span> -->
                                            <!-- <span class="sparkline11-collapse-close"><i class="fa fa-times"></i></span> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="sparkline11-graph">
                                    <div class="static-table-list">
                                        <table class="table border-table">
                                            <thead>
                                                <tr>
                                                    <th>Uraian</th>
                                                    <th>Kategori</th>
                                                    <th>Jumlah</th>
                                                    <th>Jenis Pembayaran</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Mamun</td>
                                                    <td>
                                                        <div class="col-lg-12 btn-primary" style="border-radius: 10px;background-color: purple;">
                                                           Gaji Guru
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <?php 
                                                        echo formatUang(10000);
                                                         ?>
                                                    </td>
                                                    <td>
                                                        <div class="col-lg-12 btn-primary" style="border-radius: 10px;text-align: center; background-color: darkblue; color: white;">
                                                            cash
                                                        </div>
                                                    </td>  
                                                </tr>
                                                <tr>
                                                    <td>Mamun</td>
                                                    <td>
                                                        <div class="col-lg-12 btn-primary" style="border-radius: 10px;background-color: purple;">
                                                           Gaji Guru
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <?php 
                                                        echo formatUang(10000);
                                                         ?>
                                                    </td>
                                                    <td>
                                                        <div class="col-lg-12 btn-primary" style="border-radius: 10px;text-align: center; background-color: darkblue; color: white;">
                                                            cash
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
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