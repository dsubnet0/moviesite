<html>
<head>
<title>Add/Search Entry</title>
<style type="text/css">
TD{color:#353535;font-family:verdana}
TH{color:#FFFFFF;font-family:verdana;background-color:336699}
</style>
</head>
<body>
<form action="formprocess3.php" method="post">
<table border="0" cellspacing="1" cellpadding="3" bgcolor="#353535" align="center">
	<tr>
		<td bgcolor="#FFFFFF" width="50%">Name</td>
		<td bgcolor="#FFFFFF" width="50%">
			<input type="text" name="Name">
		</td>
	</tr>
	<tr>
		<td bgcolor="#FFFFFF">What you're looking for</td>
		<td bgcolor="#FFFFFF">
			<select name="MovieType">
				<option value="" select>Select a movie type...</option>
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
		<td bgcolor="#FFFFFF">Add what?</td>
		<td bgcolor="#FFFFFF">
			<input type="radio" name="type" value="Movie" checked> 
			Movie<br>
			<input type="radio" name="type" value="Actor">
			Actor<br>
			<input type="radio" name="type" value="Director">
			Director<br>
		</td>
	</tr>
	<tr>
		<td bgcolor="#FFFFFF" width="50%">Display Debug info</td>
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