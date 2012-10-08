<?php
session_start();

if ($_SESSION['authuser'] != 1) {
	echo "you don't have permission";
	exit();
}
?>
<html>
<head>
<title>My Movie Site</title>
</head>
<body>
<?php include "header.php"; ?>
<?php
	$favmovies = array("Life of Brian", "Stripes","Office Space", "The Holy Grail", "Matrix", "Terminator 2", "Star Wars", "Close Encounters of the Third Kind", "Sixteen Candles", "Caddyshack");

	if (isset($_REQUEST['favmovie'])) {
		echo "welcome, ";
		//echo $_COOKIE['username'];
		echo $_SESSION['username'];
		echo "! <br>";
		echo "My favorite movie is ";
		echo $_REQUEST['favmovie'];
		echo "<br>";
		$movierate = 5;
		echo "My movie rating for this movie is: ";
		echo $movierate;
	} else {
		echo "My top " . $_POST["num"] . " movies are:<br>";
		
		if (isset($_REQUEST['sorted'])) {
			sort($favmovies);
		}
		
		$numlist = 1;
		while ($numlist <= $_POST["num"]) {
			echo $numlist;
			echo ". ";
			echo pos($favmovies);
			next($favmovies);
			echo "<br>\n";
			$numlist = $numlist + 1;
		}
	}
?>
</body>
</html>
