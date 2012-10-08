<?php
$title = $_POST['Submit'] . " " . $_POST['type'] . " : " . $_POST['Name'];
$name = $_POST['Name'];
$name[0] = strtoupper($name[0]);
?>

<html>
<head>
<title><?php echo $title; ?></title>
<style type="text/css">
TD{color:#353535;font-family:verdana}
TH{color:#FFFFFF;font-family:verdana;backgroun-color:#336699}
</style>
</head>
<body>
<form action="form4.php?step=2" method="post">
	<input type="hidden" name="action" value="<?php echo $_POST['Submit']; ?>">
	<input type="hidden" name="action" value="<?php echo $_POST['Submit']; ?>">
	<table border="0" width="750" cellspacing="1" cellpadding="3" bgcolor="#353535" align="center">
		<tr>
			<td bgcolor="#FFFFFF" width="30%">
				<?php echo $type[1]; ?> Name
			</td>
			<td bgcolor="#FFFFFF" width="70%">
				<?php echo $name?>
				<input type="hidden" name="Name" value="<?php echo $Name; ?>">
			</td>
		</tr>
		<tr>
			<td bgcolor="#FFFFFF">Quick Bio</td>
			<td bgcolor="#FFFFFF">
				<textarea name="Bio" rows="5" cols="60"></textarea>
			</td>
		</tr>
		<tr>
			<td bgcolor="#FFFFFF" colspan="2" align="center">
				<input type="submit" name="SUBMIT" value="Add">
			</td>
		</tr>
	</table>
</form>
</body>
</html>
