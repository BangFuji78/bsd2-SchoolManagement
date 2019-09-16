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
//tempat function

//function CRUD(Master)

//Function fitur
?>
