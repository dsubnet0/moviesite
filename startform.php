<html>
<head>
<title>Multipurpose Form</title>
<style type="text/css">
TD{color:#353535;font-family:verdana}
TH{color:#353535;font-family:verdana;background-color:#336699}
</style>
</head>
<body>
<form action="form4.php?step=1" method="post">
<table border="0" width="750" cellspacing="1" cellpadding="3" bgcolor="#353535" align="center">
	<tr>
		<td bgcolor="#FFFFFF" width="30%">Name</td>
		<td bgcolor="#FFFFFF width="70%">
			<input type="TEXT" name="Name">
		</td>
	</tr>
	<tr>
		<td bgcolor="#FFFFFF">Item Type</td>
		<td bgcolor="#FFFFFF">
			<input type="radio" name="type" value="Movie:Movie" checked>
			Movie<br>
			<input type="radio" name="type" value="Person:Actor">
			Actor<br>
			<input type="radio" name="type" value="Person:Director">
			Director<br>
		</td>
	</tr>
	<tr>
		<td bgcolor="#FFFFFF">Movie type (if applicable)</td>
		<td bgcolor="#FFFFFF">
			<select name="MovieType">
				<option value="" selected>Movie type...</option>
				<option value="Action">Action</option>
				<option value="Drama">Drama</option>
				<option value="Comedy">Comedy</option>
				<option value="Sci-Fi">Sci-Fi</option>
				<option value="War">War</option>
				<option value="Other">Other...</option>
			</select>
		</td>
	</tr>
	<tr>
		<td bgcolor="#FFFFFF" width="50%">display debug dump</td>
		<td bgcolor="#FFFFFF" width="50%">
			<input type="checkbox" name="Debug" checked>
		</td>
	</tr>
	<tr>
		<td bgcolor="#FFFFFF" colspan=2 align="center">
			<input type="submit" name="Submit" value="Search">
			<input type="submit" name="Submit" value="Add">
		</td>
	</tr>
</table>
</form>
</body>
			
</html>