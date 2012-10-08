<html>
<head>
<title>Greetings Earthling</title>
<style type="text/css">
TD{color:#353535;font-family:verdana}
TH{color:#FFFFFF;font-family:verdana;background-color:#336699}
</style>
</head>
<body>
<?php
	if (isset($_POST['Debug']) and $_POST['Debug'] == "on") {
?>
<pre>
<?php
	print_r($_POST);
?>
</pre>
<?php
	}
?>

<p align="center"><?php echo $_POST['Greeting']; ?>
<?php echo $_POST['Name']; ?></p>
</body>
</html>
