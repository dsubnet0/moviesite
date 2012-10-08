<?php
//setcookie('username','Joe1',time()+60);
session_start();
$_SESSION['username'] = $_POST['user'];
$_SESSION['userpass'] = $_POST['pass'];
$_SESSION['authuser'] = 0;

//Authorize user
if (($_SESSION['username'] == 'Joe') and ($_SESSION['userpass'] == '12345')) {
	$_SESSION['authuser'] = 1;
} else {
	echo "you are not authorized";
	exit();
}
?>
<html>
<head>
<title>Find my Favorite Movie!</title>
</head>
<body>
<?php include "header.php"; ?>
<?php
	$myfavmovie = urlencode("Life of Brian");
	echo "<a href='moviesite.php?favmovie=$myfavmovie'>";
	echo "Click here to see information about my favorite movie!";
	echo "</a>";
	echo "<br>";
	echo "Or choose how many movies you would like to see:";
	echo "</a>";
	echo "<br>";
?>
<form method="post" action="moviesite.php">
	<p>Enter number of movies (up to 10):
		<input type="text" name="num">
		<br>
		Sorted?
		<input type="checkbox" name="sorted">
	</p>
	<input type="submit" name="Submit" value="Submit">
<?php include "footer.php" ?>
</form>
</body>
</html>