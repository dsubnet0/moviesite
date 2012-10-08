<?php
if ($_POST['type'] == "Movie:Movie" && $_POST['MovieType'] == "" ) {
	header("Location:form4.php");
}
$title = $_POST['Submit'] . " " . $_POST['type'] . " : " . $_POST['Name'];
$name = $_POST['Name'];
$name[0] = strtoupper($name[0]);
echo "<html>";
echo "<head>";
echo "<title>" . $title . "</title>";
?>
<style type="text/css">
TD{color:#353535;font-family:verdana}
TH{color:#FFFFFF;font-family:verdana;background-color:#336699}
</style>
</head>
<body>
<form action="form4.php?step=2" method="post">
<input type="hidden" name="type" value="<?php echo $type[1]; ?>">
<input type="hidden" name="action value="<?php echo $_POST['Submit']; ?>">
<table border="0" width="750" cellspacing="1" cellpadding="3" bgcolor="#353535" align="center">
	<tr>
		<td bgcolor="#FFFFFF" width="30%">Movie Name</td>
		<td bgcolor="#FFFFFF" width="70%">
			<?php echo $name; ?>
			<input type="hidden" name="Name" value="<?php echo $name; ?>">
		</td>
	</tr>
	<tr>
		<td bgcolor="#FFFFFF" width="30%">Movie Type</td>
		<td bgcolor="#FFFFFF" width="70%">
			<?php echo $_POST['MovieType']?><br>
			<input type="hidden" name="type" value="Movie: <?php echo $_POST['MovieType']; ?>">
		</td>
	</tr>
	<tr>
			<td bgcolor="#FFFFFF">Movie Year</td>
			<td bgcolor="#FFFFFF">
				<select name="MovieYear">
					<option value="" selected>Select a year...</option>
					<?php
						for ($year=date("Y"); $year>= 1970; $year--) {
							echo "<option value={$year}>{$year}</option>";
						}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td bgcolor="#FFFFFF">Movie Description</td>
			<td bgcolor="#FFFFFF">
				<textarea name="Desc" rows="5" cols="60">write something here...</textarea>
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

