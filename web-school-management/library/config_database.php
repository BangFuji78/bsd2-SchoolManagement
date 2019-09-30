<?php
//Bang~Eric
// $db = 'raport_ma'; //nama database
// $user = 'root'; //nama user mysql
// $pass = ''; //password user mysql
// $host = '127.0.0.1'; //host server mysql

//Bang~Lucky
// $db = 'raport_ma'; //nama database
// $user = 'root'; //nama user mysql
// $pass = ''; //password user mysql
// $host = '127.0.0.1'; //host server mysql

// Bang~Issac
$db = 'sekolah'; //nama database
$user = 'root'; //nama user mysql
$pass = ''; //password user mysql
$host = '127.0.0.1'; //host server mysql

//Bang~Miun
// $db = 'school_management'; //nama database
// $user = 'root'; //nama user mysql
// $pass = ''; //password user mysql
// $host = '127.0.0.1'; //host server mysql

$mysqli = new mysqli($host, $user, $pass, $db);

if ($mysqli) {
  // echo 'Success connection database';
}else {
  echo 'Error connection database';
  exit;
}
?>
