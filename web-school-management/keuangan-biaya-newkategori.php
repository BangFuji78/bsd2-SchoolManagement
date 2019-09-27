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
                                            <li><a href="keauangan-home.php">Keuangan</a> <span class="bread-slash">/</span>
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
                                            <li><a href="keuangan-home.php">Keuangan</a> <span class="bread-slash">/</span>
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

<div class="content-i">
    <div class="content-box">
	<div class="element-wrapper">
		<div class="os-tabs-w">
			<div class="os-tabs-controls">
                <h3> New Kategori </h3>
                <form action="" method="post" accept-charset="utf-8">		  
		        <div class="row">
		       <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                <div class="form-group label-floating is-empty">
                  	<label class="control-label">Name</label>
                  	<input class="form-control" name="name" type="text" required="">
                <span class="material-input"></span></div>
            </div><br>
		    <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                <button class="btn btn-success btn-rounded" type="submit">Save</button>
            </div>
            </div>
		</div>
				</div>
	    </div>
</div>       
            </body>
            <?php include 'partials/footer-JS.php'; ?>
</html>