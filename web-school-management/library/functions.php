<?php
$baseURL = 'index.php';
$adminURL = 'index.php';
function goToRedirect($url, $time = 0) {
  echo "<meta http-equiv='refresh' content='".$time.",".$baseURL.$url."'>";
}

function clearSQLInjection($mysqli, $data) {
  $newData = $data;

  foreach ($data as $key => $value) {
    $newData[$key] = $mysqli->real_escape_string($value);
  }

  return $newData;
}
function formatUang($jumlahUang){
	$hasil_rupiah = "Rp " . number_format($jumlahUang,0,',','.');
	return $hasil_rupiah;
}
function percent($a,$b){
	$percent=($a/$b)*100;
	return $percent;
}


?>
