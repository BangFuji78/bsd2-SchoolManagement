<?php 
     $dataid=substr(base64_decode($_GET['id']),strpos(base64_decode($_GET['id']),"-")+1);
     
 ?>
<!-- container start -->
<div class="basic-form-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="sparkline12-list shadow-reset mg-t-30">
                    <div class="sparkline12-hd">
                        <div class="main-sparkline12-hd">
                            <h1>Tambah Admin</h1>
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
                                                            <label class="login2 pull-right pull-right-pro"><span class="fa fa-id-card"></span> Jenis Akun</label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <div class="form-select-list">
                                                                <select class="form-control custom-select-value" name="akun">
                                                                    <option value="0">admin</option>
                                                                    <option value="1">Super Admin</option>
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
                                                                <button name="kembali" class="btn btn-white" type="submit">Kembali</button>
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
                                                    $save=fpadmin($_FILES,"admin");
                                                }else{
                                                    alert("foto Profil belum terpilih");
                                                    gotoRedirect('tambah-admin.php',0);
                                                }
                                                //echo var_dump($data);
                                                //echo "Thumbnail: <img src='".$save."'>";
                                                $sqlAdmin="INSERT INTO `admin`(`name`, `email`, `password`, `phone`, `address`, `owner_status`, `username`, `status`, `birthday`, `messages`, `notify`, `information`, `marks`, `academic`, `attendance`, `schedules`, `news`, `library`, `be`, `acc`, `class`, `school`, `polls`, `settings`, `academic_se`, `files`, `users`,`fb_photo`) VALUES ('".$data['nama']."','".$data['email']."','".md5($data['password'])."','".$data['telp']."','".$data['alamat']."','".$data['akun']."', '".$data['username']."','1','".date_format(date_create($data['tlahir']),"Y-m-d")."','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1','".$save."')";
                                                if($qadmin=$mysqli->query($sqlAdmin)){
                                                    unset($_SESSION['tambah']['user']);
                                                    gotoRedirect('admin-user.php',0);
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