<html>
	<head>title</head>
	<body>
		<form  method="post" enctype="multipart/form-data" id="something" class="uniForm">
		    <input name="new_image" id="new_image" size="30" type="file" class="fileUpload" />
		    <button name="submit" type="submit" class="submitButton">Upload/Resize Image</button>
    	</form>
    	<?php
	    if(isset($_POST['submit'])){
	      if (isset ($_FILES['new_image'])){
	          $imagename = $_FILES['new_image']['name'];
	          $source = $_FILES['new_image']['tmp_name'];
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

	          $save = "img/sml_" . $imagepath; //This is the new file you saving
	          $file = "img/" . $imagepath; //This is the original file

	          list($width, $height) = getimagesize($file) ; 

	          $modwidth = 130; 

	          $diff = $width / $modwidth;

	          $modheight = 185; 
	          $tn = imagecreatetruecolor($modwidth, $modheight) ; 
	          $image = imagecreatefromjpeg($file) ; 
	          imagecopyresampled($tn, $image, 0, 0, 0, 0, $modwidth, $modheight, $width, $height) ; 

	          imagejpeg($tn, $save, 100) ; 
	        echo "Large image: <img src='img/".$imagepath."'><br>"; 
	        echo "Thumbnail: <img src='img/sml_".$imagepath."'>"; 

	      }
	    } ?>
	</body>
</html>