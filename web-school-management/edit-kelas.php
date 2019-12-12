<?php 
     $dataid=substr(base64_decode($_GET['id']),strpos(base64_decode($_GET['id']),"-")+1);
     $sql= "select * from class where class_id='".$dataid."'";
     $query=$mysqli->query($sql);
     $class=$query->fetch_assoc();
 ?>
<!-- container start -->
<div class="basic-form-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="sparkline12-list shadow-reset mg-t-30">
                    <div class="sparkline12-hd">
                        <div class="main-sparkline12-hd">
                            <h1>Tambah Kelas</h1>
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
                                            <div class="col-lg-12 form-group-inner">
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <label class="login2 pull-right pull-right-pro"><span class="fa fa-building-o"></span> Nama</label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <input type="text" class="form-control" name="nama" value="<?php echo $class['name']; ?>" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <label class="login2 pull-right pull-right-pro"><span class="fa fa-user"></span> Guru</label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <div class="form-select-list">
                                                                <select class="form-control custom-select-value" name="guru">
                                                                    <?php 
                                                                        $sql="SELECT * FROM `teacher`";
                                                                        $query=$mysqli->query($sql);
                                                                        while ($res=$query->fetch_array()) {
                                                                            ?>

                                                                            <option value="<?php echo $res['teacher_id']; ?>" <?php if($res['teacher_id']===$class['teacher_id']){
                                                                                echo "selected=true";
                                                                                } ?>><?php echo $res['name']; ?></option>
                                                                    <?php
                                                                        }
                                                                     ?>
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
                                                                <button class="btn btn-sm btn-primary login-submit-cs" name="tambah" type="submit">Edit</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <?php  if(isset($_POST['tambah'])){
                                                 $data=clearSQLInjection($mysqli, $_POST);
                                                    $sqlAdmin="UPDATE `class` SET `name`='".$data['nama']."',`teacher_id`='".$data['guru']."' WHERE `class_id`='".$dataid."'";
                                                    ECHO var_dump($sqlAdmin);
                                                    if($qadmin=$mysqli->query($sqlAdmin)){
                                                        unset($_SESSION['tambah']['user']);
                                                        gotoRedirect('pengaturan-akademik.php',0);
                                                    }else{
                                                        echo var_dump("test");
                                                    }

                                              
                                              
                                        }
                                        if(isset($_POST['kembali'])){
                                            gotoRedirect('pengaturan-akademik.php',0);
                                        }
                                        ?>
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