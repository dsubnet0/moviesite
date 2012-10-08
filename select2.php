<?php
$connect = mysql_connect("localhost","bp5am","bp5ampass")
or die("failed to connect");

mysql_select_db("moviesite");

$query = "SELECT * FROM movie WHERE movie_year > 1990 ORDER BY movie_type";
$results = mysql_query($query) or die(mysql_error());

echo "<table border=\"0\">\n";
while ($row = mysql_fetch_assoc($results)) {
	echo "<tr>\n";
	foreach($row as $value) {
		echo "<td>\n";
		echo $value;
		echo "</td>\n";
	}
	echo "</tr>\n";
}
echo "</table>\n";
?>