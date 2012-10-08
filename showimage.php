<?php 
//connect to the database 
$link = mysql_connect("localhost", "bp5am", "bp5ampass") 
	or die("Could not connect: " . mysql_error()); 
mysql_select_db("moviesite", $link) or die (mysql_error());

//make vars available
$id = $_REQUEST['id'];

if (isset($_REQUEST['mode'])) {
	$mode = $_REQUEST['mode'];
} else {
	$mode = '';
}

//get pic info
$getpic = mysql_query("SELECT * FROM images WHERE image_id = '$id'")
	or die(mysql_error());
$rows = mysql_fetch_array($getpic);
extract($rows);

$image_filename = "images/" . $image_id . ".jpg";

list($width, $height, $type, $attr) = getimagesize($image_filename);

?>

<html>
<head>
<title>Here is your pic</title>
</head>
<body>
<h1>title</h1><br><br>

<?php
if ($mode == 'change') {
	echo "<font color=\"CC0000\"><em><strong>Your image has been modified.</strong></em></font>";
	echo "<img src=\"" . $image_filename . "\" align=\"left\" " . $attr . ">";
} else {
?>

<p>here is the pic just uploaded:</p>

<img src="<?php echo $image_filename; ?>" align="left"
	<?php echo $attr; ?> >
<strong><?php echo $image_caption; ?></strong><br>
It is <?php echo $width; ?> pixels wide and
	<?php echo $height; ?> pixels high.<br>
	It was uploaded on <?php echo $image_date; ?>
	by <?php echo $image_username; ?>.

<?php
}
?>

<hr>
<p><em><strong>Modifying your image</strong></em></p>
<form action="modifyimage.php" method="post">
<p>
Please choose if you would like to modify your image with any of the following options. If you would like to preview the image before saving, you will need to hit your browser’s ‘back’ button to return to this page. Saving an image with any of the modifications listed below <em>cannot be undone.</em> </p>
<input name="id" type="hidden" value="<?php echo $image_id;?>">
<input namge="bw" type="checkbox">black &amp; white<br>

<p align="center">
	<input type="submit" name="action" value="preview">
	<input type="submit" name="action" value="save">
</p>
</form>
</body>
</html>

