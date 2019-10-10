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
                                            <li><span class="bread-blod">Biaya</span>
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
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="admintab-wrap mg-b-40">
                                <ul class="nav nav-tabs custom-menu-wrap custon-tab-menu-style1">
                                    <!-- <li class="active"><a data-toggle="tab" href="#TabExpense"></span>Expenses</a>
                                    </li>
                                    <li><a data-toggle="tab" href="#TabCat"></span>Category</a>
                                    </li> -->
                                </ul>
                                <div class="tab-content">
                                    <div id="pembayaran_br" class="tab-pane in active animated flipInX custon-tab-style1">
                                    <div class="button-ap-list responsive-btn">    
                                    <!-- <h3>Expense</h3> -->
                                    <a href="keuangan-pembayaran-baru.php"><button type="button" class="btn btn-custon-rounded-four btn-primary">PEMBAYARAN BARU</button></a>
                                            <table id="table" data-toggle="table">
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
                                                        
                                                    </tbody>
                                                    </table>
                                        </div>
                                    </div>                                
                                    <!-- <div id="TabCat" class="tab-pane animated flipInX custon-tab-style1">
                                    <div class="button-ap-list responsive-btn">
                                        <h3>Category</h3>
                                        <button type="button" class="btn btn-custon-rounded-four btn-primary">New Category</button>
                                            <table id="table" data-toggle="table">
                                                        <thead>
                                                            <tr>
                                                                <th data-field="name">Name</th>
                                                                <th data-field="option">Option</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>    
                                                    
                                                    </tbody>
                                            </table>
                                        </div>    
                                    </div> -->
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