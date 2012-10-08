<?php
$line = mysql_connect("localhost","bp5am","bp5ampass") or die(mysql_error());

mysql_select_db("moviesite") or die(mysql_error());

//$add = "ALTER TABLE movie ADD COLUMN (movie_running_time int NULL, movie_cost int NULL, movie_takings int NULL)";
//$results = mysql_query($add) or die(mysql_error());

$update = "UPDATE movie SET movie_running_time=102,movie_cost=10,movie_takings=15 WHERE movie_id = 1";
$results = mysql_query($update) or die(mysql_error());

$update = "UPDATE movie SET movie_running_time=90,movie_cost=3,movie_takings=90 WHERE movie_id = 2";
$results = mysql_query($update) or die(mysql_error());

$update = "UPDATE movie SET movie_running_time=134,movie_cost=15,movie_takings=10 WHERE movie_id = 3";
$results = mysql_query($update) or die(mysql_error());

?>