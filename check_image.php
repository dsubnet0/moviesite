<?php
//connect to the database
$link = mysql_connect("localhost","bp5am","bp5ampass") or die("Could not connect: " . mysql_error());
mysql_select_db("moviesite",$link) or die(mysql_error());

//make vars available
$image_caption = $_POST['image_caption'];
$image_username = $_POST['image_username'];
$image_tempname = $_FILES['image_filename']['name'];
$today = date("Y-m-d");

//upload image and check for type
$imageDir = "C:/wamp/www/moviesite/images/";
$imageName = $imageDir . $image_tempname;

if (move_uploaded_file($_FILES['image_filename']['tmp_name'],$imageName)) {
	//get info about uploaded image
	list($width, $height, $type, $attr) = getimagesize($imageName);
	
	if ($type > 3) {
		echo "invalid format; hit back<br>";
	} else {
	
		//insert image info into table
		$insert = "INSERT INTO images (image_caption, image_username, image_date)
		VALUES ('$image_caption', '$image_username', '$today')";
		$insertresults = mysql_query($insert) or die(mysql_error());
		
		$lastPicId = mysql_insert_id();
		//echo "lastpicid = '$lastPicId'<br>";
		
		$newFileName = $imageDir . $lastPicId . ".jpg";
		
		if ($type == 2) {
			rename($imageName, $newFileName);
		} else {
			if ($type == 1) {
				$image_old = imagecreatefromgif($imageName);
			} elseif ($type == 3) {
				$image_old = imagecreatefrompng($imageName);
			}
			
			//'convert'
			$image_jpg = imagecreatetruecolor($width, $height);
			imagecopyresampled($image_jpg, $image_old, 0, 0, 0, 0,
				$width, $height, $width, $height);
			imagejpeg($image_jpg, $newfilename);
			imagedestroy($image_old);
			imagedestroy($image_jpg);
		}
		
		$url = "location: showimage.php?id=" . $lastPicId;
		//echo "url = '$url'<br>";
		header($url);
	}
}
?>
