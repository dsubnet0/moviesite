<?php
$connect = mysql_connect("localhost", "bp5am", "bp5ampass") or die ("failed to connect");

mysql_select_db("moviesite");

$insert = "INSERT INTO movie (movie_id,movie_name,movie_type,movie_year,movie_leadactor,movie_director) VALUES (1,'Bruce Almighty',5,2003,1,2),(2,'Office Space',5,1999,5,6),(3,'Grand Canyon',2,1991,4,3)";
$results = mysql_query($insert) or die(mysql_error());

$type = "INSERT INTO movietype (movietype_id,movietype_label) VALUES (1,'Sci Fi'),(2,'Drama'),(3,'Adventure'),(4,'War'),(5,'Comedy'),(6,'Horror'),(7,'Action'),(8,'Kids')";
$results = mysql_query($type) or die(mysql_error());

$people = "INSERT INTO people (people_id,people_fullname,people_isactor,people_isdirector) VALUES (1,'Jim Carrey',1,0),(2,'Tom Shadyac',0,1),(3,'Lawrence Kasdan',0,1),(4,'Kevin Kline',1,0),(5,'Ron Livingston',1,0),(6,'Mike Judge',0,1)";
$results = mysql_query($people) or die(mysql_error());

echo "data inserted successfully";
?>