<?php
if ($_POST['type'] == "Movie" && $_POST['MovieType'] == "") {
	header("Location:form3.php");
}
$title = $_POST['Submit'] . " " . $_POST['type'] . " : " . $_POST['Name'];
?>
<html>
<head>
<title><?php echo $title; ?></title>
</head>
<body>
<?php
	//if ($_POST['Debug'] == "on") {
	if (isset($_POST['Debug'])) {
?>
<pre>
<?php
	print_r($_POST);
?>
</pre>
<?php
	}
	$name = $_POST['Name'];
	$name[0] = strtoupper($name[0]);
	if ($_POST['type'] == "Movie") {
		$foo = $_POST['MovieType'] . " " . $_POST['type'];
	} else {
		$foo = $_POST['type'];
	}
?>

<p align="center">
	You are <?php echo $_POST['Submit']; ?>ing
	<?php echo $_POST['Submit'] == "Search" ? "for " : ""; ?>
	a <?php echo $foo ?>
	named "<?php echo $name; ?>"
</p>
</body>
</html>