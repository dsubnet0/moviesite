<?php
//connect to the database 
$link = mysql_connect("localhost", "bp5am", "bp5ampass") or die("Could not connect: " . mysql_error()); 
mysql_select_db("moviesite", $link) or die (mysql_error());

//make vars available
$id = $_POST['id'];
if (isset($_POST['bw'])) {
	$bw = $_POST['bw'];
} else {
	$bw = '';
}
$action = $_POST['action'];

//get pic info
$getpic = mysql_query("SELECT * FROM images WHERE image_id = '$id'") or die(mysql_error());
$rows = mysql_fetch_array($getpic);
extract($rows);

$image_filename = "images/" . $image_id . ".jpg";

list($width, $height, $type, $attr) = getimagesize($image_filename);

$image = imagecreatefromjpeg("$image_filename");

if ($bw == 'on') {
	imagefilter($image, IMG_FILTER_GRAYSCALE);
}

if ($action == "preview") {
	header("Content-type:image/jpeg");
	imagejpeg($image);
}

if ($action == "save") {
	imagejpeg($image, $image_filename);
	$url = "location:showimage.php?id=" . $id. "&mode=change";
	header($url);
}
?>