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
    

<div class="content-i">
<div class="container-fluid">
    <div class="content-box">
	<div class="element-wrapper">
		<div class="os-tabs-w">
			<div class="os-tabs-controls">
			  <ul class="navs navs-tabs upper">
				<li class="navs-item">
				  <a class="navs-links active" data-toggle="tab" href="#single">Single invoice</a>
				</li>
				<li class="navs-item">
				  <a class="navs-links" data-toggle="tab" href="#bulk">Bulk invoice</a>
				</li>
			  </ul>
			</div>
		  </div>
		 <div class="tab-content">
			<div class="tab-pane active" id="single">
			    <div class="row">
			        <div class="col-sm-6">
		<form action="" method="post" accept-charset="utf-8">
      <div class="element-box lined-primary shadow">
		  <h5 class="form-header">Invoice details</h5><br>
		  
		  <div class="row">
		    <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="form-group label-floating is-select">
                    <label class="control-label">Class</label>
                    <div class="select">
                        <select name="pilihKelas">
                            <?php
                                $conn = new mysqli($server, $user, $pass, $db) or die("Unable to connect");
                                $query = "SELECT * FROM class";
                                $result = mysqli_query($query);
                                while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
                                {
                                    ?>
                                    <option value="<?php echo $row['class_id']; ?>"><?php echo $row["name"]; ?></option>
                                <?php
                                }
                            ?>
                            <option value="2">Pre-kindergarden</option>
                            </select>
                    </div>
                </div>
            </div>
            <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="form-group label-floating is-select">
                    <label class="control-label">Student</label>
                    <div class="select">
                        <select name="student_id" required="" id="student_selection_holder">
                            <option value="">Select</option>
                        </select>
                    </div>
                </div>
            </div>
		    <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="form-group label-floating is-empty">
                  	<label class="control-label">Title</label>
                  	<input class="form-control" name="title" type="text" required="">
                <span class="material-input"></span></div>
            </div>
		    <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="form-group label-floating is-empty">
				    <label class="control-label">Description:</label>
				    <textarea class="form-control" name="description" rows="3" required=""></textarea>
				    <span class="material-input"></span>
				<span class="material-input"></span></div>
			</div>
		</div>
		</div>
		</form></div>
		<div class="col-sm-6">
      <div class="element-box lined-success shadow">
		  <h5 class="form-header"> Payment details </h5><br>
    		  <div class="row">
		        <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="form-group label-floating is-empty">
                      	<label class="control-label">Amount</label>
                  	    <input class="form-control" name="amount" type="text" required="">
                    <span class="material-input"></span></div>
                </div>
		    <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="form-group label-floating is-select">
                    <label class="control-label">Status</label>
                    <div class="select">
                        <select name="status" required="">
                            <option value="">Select</option>
                            <option value="completed">Completed</option>
					        <option value="pending">Pending</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="form-group label-floating is-select">
                    <label class="control-label">Method</label>
                    <div class="select">
                        <select name="method" required="">
                            <option value="">Select</option>
					        <option value="1">Cash</option>
					        <option value="2">Kredit</option>
                        </select>
                    </div>
                </div>
            </div><br>
		    <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                <button class="btn btn-success btn-rounded" type="submit">Create invoice</button>
            </div>
            </div>
		</div>
				</div>
	    </div>
          	</div>
		  	<div class="tab-pane" id="bulk">
		  		<form action="" class="form-horizontal form-groups-bordered validate" id="mass" target="_top" method="post" accept-charset="utf-8">
		  	    <div class="row">
			        <div class="col-sm-6">
      <div class="element-box lined-primary shadow">
		  <h5 class="form-header">Payment details</h5><br>
		  
		  <div class="row">
		    <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="form-group label-floating is-select">
                    <label class="control-label">Class</label>
                    <div class="select">
                        <select name="class_id" required="" class="class_id" onchange="return get_class_students_mass(this.value)">
                            <option value="">Select</option>
                                                            <option value="1">Head Start</option>
                                                            <option value="2">Pre-kindergarden</option>
                                                            <option value="3">Kindergarden</option>
                                                            <option value="4">First grade</option>
                                                            <option value="5">Second grade</option>
                                                            <option value="6">Third grade</option>
                                                            <option value="7">Fourth grade</option>
                                                            <option value="8">Fifth grade</option>
                                                            <option value="9">Sixth grade</option>
                                                            <option value="10">Seventh grade</option>
                                                            <option value="11">Eighth grade</option>
                                                    </select>
                    </div>
                </div>
            </div>
            <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="form-group label-floating is-empty">
                      	<label class="control-label">Amount</label>
                  	    <input class="form-control" name="amount" type="text" required="">
                    <span class="material-input"></span></div>
            </div>
		    <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="form-group label-floating is-empty">
                  	<label class="control-label">Title</label>
                  	<input class="form-control" name="title" type="text" required="">
                <span class="material-input"></span></div>
            </div>
		    <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="form-group label-floating is-empty">
				    <label class="control-label">Description:</label>
				    <textarea class="form-control" name="description" rows="3" required=""></textarea>
				    <span class="material-input"></span>
				<span class="material-input"></span></div>
			</div>
			<div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="form-group label-floating is-select">
                    <label class="control-label">Method</label>
                    <div class="select">
                        <select name="method" required="">
                            <option value="">Select</option>
                            <option value="3">Card</option>
					        <option value="1">Cash</option>
					        <option value="2">Check</option>
                        </select>
                    </div>
                </div>
            </div><br>
              
		</div>
		</div>
		</div>
		<div class="col-sm-6">
      <div class="element-box lined-success shadow">
		  <h5 class="form-header">
			Students		  </h5><br>
		  <div class="row">
		  <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="form-group label-floating is-select">
                    <label class="control-label">Status</label>
                    <div class="select">
                        <select name="status" required="">
                            <option value="">Select</option>
                            <option value="completed">Completed</option>
					        <option value="pending">Pending</option>
                        </select>
                    </div>
                </div>
            </div>
            </div>
    	    <div id="student_selection_holder_mass"></div>
    	    <hr>
    	    <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                <button class="btn btn-success btn-rounded" type="submit">Create invoice</button>
            </div>
            </div>
		</div>
		</div>
		</form>	    </div>
          	</div>
          </div>
        </div>
      </div>       
            </body>
            <?php include 'partials/footer-JS.php'; ?>
</html>