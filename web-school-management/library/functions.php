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
function fpadmin($foto, $type){
        $imagename = $foto['foto']['name'];
        $source = $foto['foto']['tmp_name'];
        $target = "img/".$imagename;
        move_uploaded_file($source, $target);

        $imagepath = $imagename;
        $save = "img/" . $imagepath; //This is the new file you saving
        $file = "img/" . $imagepath; //This is the original file

        list($width, $height) = getimagesize($file) ; 


        $tn = imagecreatetruecolor($width, $height) ; 
        $image = imagecreatefromjpeg($file) ; 
        imagecopyresampled($tn, $image, 0, 0, 0, 0, $width, $height, $width, $height) ; 

        imagejpeg($tn, $save, 100) ; 
        if ($type==="admin") {
          $save = "img/admin/" . $imagepath; //This is the new file you saving
        }elseif ($type==="parent") {
          $save = "img/parent/" . $imagepath; //This is the new file you saving
        }elseif ($type==="student") {
          $save = "img/student/" . $imagepath; //This is the new file you saving
        }elseif ($type==="pustakawan") {
          $save = "img/admin/" . $imagepath; //This is the new file you saving
        }elseif ($type==="akuntan") {
          $save = "img/akuntan/" . $imagepath; //This is the new file you saving
        }elseif ($type==="teacher") {
          $save = "img/teacher/" . $imagepath; //This is the new file you saving
        }else{
          $save = "img/" . $imagepath; //This is the new file you saving
        }
       
        $file = "img/" . $imagepath; //This is the original file

        list($width, $height) = getimagesize($file) ; 

        $modwidth = 130; 

        $diff = $width / $modwidth;

        $modheight = 185; 
        $tn = imagecreatetruecolor($modwidth, $modheight) ; 
        $image = imagecreatefromjpeg($file) ; 
        imagecopyresampled($tn, $image, 0, 0, 0, 0, $modwidth, $modheight, $width, $height) ; 
        imagejpeg($tn, $save, 100) ; 
        unlink($file);
        return $save;
}
function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}
function del($id,$table,$mysqli){
  $sqlfoto="SELECT * FROM `".$table."` WHERE ".$table."_id='".$id."'";
  $qfoto=$mysqli->query($sqlfoto);
  $resl=$qfoto->fetch_assoc();
  if(unlink($resl['fb_photo'])){
    $sql="DELETE FROM `".$table."` WHERE ".$table."_id='".$id."'";
    $qdel=$mysqli->query($sql);
    return $qdel;
    //echo $sql;
  }
}
    
	function createSingle()
	{
		$insert_name = array(
			'name' => $this->input->post('paymentName'),
			'start_date' 	=> $this->input->post('startDate'),
			'end_date' 		=> $this->input->post('endDate'),
			'total_amount' 	=> $this->input->post('totalAmount'),
			'type'			=> 1
		);

		$this->db->insert('payment_name', $insert_name);
		$payment_name_id = $this->db->insert_id();

		$insert_data = array(									
			'class_id' 		=> $this->input->post('className'),
			'section_id' 	=> $this->input->post('sectionName'),
			'student_id' 	=> $this->input->post('studentName'),			
			'payment_name_id' => $payment_name_id
		);
		$status = $this->db->insert('payment', $insert_data);		
		return ($status === true ? true : false);
	}

	/*
	*---------------------------------------------------
	* Insert the bulk payment info into the database
	*---------------------------------------------------
	*/
	function createBulk()
	{
		if($this->input->post('studentId')) {
			$insert_name = array(
				'name' => $this->input->post('paymentName'),
				'start_date' 	=> $this->input->post('startDate'),
				'end_date' 		=> $this->input->post('endDate'),
				'total_amount' 	=> $this->input->post('totalAmount'),
				'type'			=> 2
			);

			$this->db->insert('payment_name', $insert_name);
			$payment_name_id = $this->db->insert_id();

			for($x = 1; $x <= count($this->input->post('studentId')); $x++) {								
				$insert_data = array(									
					'class_id' 		=> $this->input->post('className'),
					'section_id' 	=> $this->input->post('sectionName'),
					'student_id' 	=> $this->input->post('studentId')[$x],			
					'payment_name_id' => $payment_name_id
				);

				$status = $this->db->insert('payment', $insert_data);
			}
						
			return ($status === true ? true : false);
		} 
		else {
			return false;
		}		
	}	

?>
