<html>
<head>
<title>Say My Name</title>
</head>
<body>
<?php
	echo "Hello ". $_POST['Name'];
?>
<pre>
	DEBUG :
<?php
	print_r($_POST);
?>
</pre>
</body>
</html>