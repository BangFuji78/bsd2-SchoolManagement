<?php
//Untuk display error jika ada error
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

session_start(); //memulai start session engine
include 'library/functions.php'; //memanggil file functions.php pada folder library
include 'library/config_database.php'; //memanggil file config_database.php pada folder library

if (isset($_SESSION['user_online'])) { //jika user sudah login atau jika data user login sudah tersimpan di session
	$_SESSION['user_online'] = null; //hapus data session user
	unset($_SESSION['user_online']);
  goToRedirect('index.php');
}else {
  goToRedirect('dashboard.php');
}
?>
