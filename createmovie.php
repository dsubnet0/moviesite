<?php
$connect = mysql_connect("localhost", "bp5am", "bp5ampass") or die ("failed to connect");

$create = mysql_query("CREATE DATABASE IF NOT EXISTS moviesite") or die(mysql_error());

mysql_select_db("moviesite");

$create_table_movie = "CREATE TABLE movie (
	movie_id INT(11) NOT NULL AUTO_INCREMENT,
	movie_name VARCHAR(255) NOT NULL,
	movie_type tinyint(2) NOT NULL DEFAULT 0,
	movie_year INT(4) NOT NULL DEFAULT 0,
	movie_leadactor INT(11) NOT NULL DEFAULT 0,
	movie_director INT(11) NOT NULL DEFAULT 0,
	PRIMARY KEY (movie_id),
	KEY movie_type (movie_type,movie_year)
)";

$results = mysql_query($create_table_movie) or die (mysql_error());

$create_table_movietype = "CREATE TABLE movietype (
	movietype_id INT(11) NOT NULL AUTO_INCREMENT,
	movietype_label VARCHAR(100) NOT NULL,
	PRIMARY KEY (movietype_id)
)";

$results = mysql_query($create_table_movietype) or die(mysql_error());

$create_table_people = "CREATE TABLE people (
	people_id INT(11) NOT NULL AUTO_INCREMENT,
	people_fullname VARCHAR(255) NOT NULL,
	people_isactor TINYINT(1) NOT NULL DEFAULT 0,
	people_isdirector TINYINT(1) NOT NULL default 0,
	PRIMARY KEY (people_id)
)";

$results = mysql_query($create_table_people) or die(mysql_error());

echo "Movie database successfully created";
?>