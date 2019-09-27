<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Keuangan | Biaya</title>
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
            <div class="login-form-area adminpro-pd mg-b-15">
                <div class="container-fluid">
                <div class="modal-bootstrap shadow-reset nt-mg-b-30">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="admintab-wrap mg-b-40">
                                <ul class="nav nav-tabs custom-menu-wrap custon-tab-menu-style1">
                                    <li class="active"><a data-toggle="tab" href="#TabExpense"></span>Expenses</a>
                                    </li>
                                    <li><a data-toggle="tab" href="#TabCat"></span>Category</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div id="TabExpense" class="tab-pane in active animated flipInX custon-tab-style1">
                                    <div class="button-ap-list responsive-btn">    
                                    <h3>Expense</h3>
                                    <a href="keuangan-biaya-newexpense.php"><button type="button" class="btn btn-custon-rounded-four btn-primary">New Expense</button></a>
                                            <table id="table" data-toggle="table">
                                                        <thead>
                                                            <tr>
                                                                <th data-field="title">Title</th>
                                                                <th data-field="dsc">Description</th>
                                                                <th data-field="kategori">Category</th>
                                                                <th data-field="jumlah">Amount</th>
                                                                <th data-field="method">Method</th>
                                                                <th data-field="date">Date</th>
                                                                <th data-field="option">Option</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        
                                                    </tbody>
                                                    </table>
                                        </div>
                                    </div>                                
                                    <div id="TabCat" class="tab-pane animated flipInX custon-tab-style1">
                                    <div class="button-ap-list responsive-btn">
                                        <h3>Category</h3>
                                        <a href="keuangan-biaya-newkategori.php"><button type="button" class="btn btn-custon-rounded-four btn-primary">New Category</button></a>
                                            <!-- <div class="modal-bootstrap shadow-reset">
                                                   <div class="modal-area-button">
                                                        <a class="Primary mg-b-10" href="#" data-toggle="modal" data-target="#PrimaryModalhdbgcl">Primary</a>
                                                        </div>
                                                </div>
                                                <div id="PrimaryModalhdbgcl" class="modal modal-adminpro-general default-popup-PrimaryModal fade" role="dialog">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header header-color-modal bg-color-1">
                                                                <h4 class="modal-title">New Category</h4>
                                                                <div class="modal-close-area modal-close-df">
                                                                    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="modal-body">
                                                                <i class="fa fa-check modal-check-pro"></i>
                                                                
                                                            </div>
                                                            <div class="modal-footer">
                                                                <a data-dismiss="modal" href="#">Cancel</a>
                                                                <a href="#">Process</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->
                                        
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