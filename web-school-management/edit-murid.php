<?php 
     $dataid=substr(base64_decode($_GET['id']),strpos(base64_decode($_GET['id']),"-")+1);
     $sql="SELECT * FROM `student` WHERE student_id='".$dataid."'";
     $query=$mysqli->query($sql);
     $resstudent=$query->fetch_assoc();
     // echo var_dump($resstudent);
      ?>
<!-- container start -->
<div class="basic-form-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="sparkline12-list shadow-reset mg-t-30">
                    <div class="sparkline12-hd">
                        <div class="main-sparkline12-hd">
                            <h1>Edit Murid</h1>
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
                                                            <img src="<?php echo $resstudent['fb_photo']; ?>" class="contact-client-img" width="100px" alt="" >
                                                            <br><br>
                                                            <input type="file" accept="image/x-png,image/gif,image/jpeg" class="form-control" name="foto" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <label class="login2 pull-right pull-right-pro"><span class="fa fa-user"></span> Nama</label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <input type="text" class="form-control" name="nama" value="<?php echo $resstudent['name']; ?>" />
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
                                                                <input type="text" class="form-control" value="<?php echo date_format(date_create($resstudent['birthday']),"d/m/Y"); ?>" name="tlahir">
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
                                                            <input type="text" class="form-control" name="alamat" value="<?php echo $resstudent['address']; ?>" />
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
                                                            <input type="text" class="form-control" name="email" value="<?php echo $resstudent['email']; ?>" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <label class="login2 pull-right pull-right-pro"><span class="fa fa-phone"></span> Nomor Telp.</label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <input type="number" class="form-control" name="telp" value="<?php echo $resstudent['phone']; ?>" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <label class="login2 pull-right pull-right-pro"><span class="fa fa-user"></span> Username</label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <input type="text" class="form-control" name="username" value="<?php echo $resstudent['username']; ?>"/>
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
                                                            <label class="login2 pull-right pull-right-pro"><span class="fa fa-id-card"></span> Jenis Akun</label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <div class="form-select-list">
                                                                <select class="form-control custom-select-value" name="sex">

                                                                    <option value="0" <?php if($resstudent['sex']==='0'){
                                                                        echo "selected='true'";
                                                                        } ?>>Laki-laki</option>
                                                                    <option value="1"<?php if($resstudent['sex']==='1'){
                                                                        echo "selected='true'";
                                                                        } ?>>Perempuan</option>
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
                                                            <button name="kembali" class="btn btn-white" type="submit"><a href="murid.php">Kembali</a></button>
                                                                <button class="btn btn-sm btn-primary login-submit-cs" name="tambah" type="submit">Edit</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <?php  if(isset($_POST['tambah'])){
                                                $data=clearSQLInjection($mysqli, $_POST);
                                                if($_FILES['foto']['name']!=="") {
                                                    $save=fpadmin($_FILES,"student");//nama functionnya tetap fpadmin yang berbeda adalah type setelah "$_files,"
                                                    if($resstudent['fb_photo']!==""){
                                                        unlink($resstudent['fb_photo']);
                                                    }
                                                }else{
                                                    $save=$resstudent['fb_photo'];
                                                }
                                               
                                                //echo var_dump($data);
                                                //echo "Thumbnail: <img src='".$save."'>";
                                                $sqlstudent="UPDATE `student` SET `name`='".$data['nama']."',`email`='".$data['email']."',";
                                                if ($data['password']!=="") {
                                                    $sqlstudent=$sqlstudent."`password`='".md5($data['password'])."', ";
                                                }
                                                $sqlstudent=$sqlstudent."`phone`='".$data['telp']."', `address`='".$data['alamat']."',`sex`='".$data['sex']."',`username`='".$data['username']."',`birthday`='".date("Y-m-d", strtotime(str_replace('/', '-', $data['tlahir'])) )."', `fb_photo`='".$save."' WHERE student_id='".$dataid."'";
                                                //  echo var_dump($sqlstudent);
                                                if($qstudent=$mysqli->query($sqlstudent)){
                                                    unset($_SESSION['tambah']['user']);
                                                    gotoRedirect('murid.php',0);
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