<?php 
//connect to MySQL 
$connect = mysql_connect("localhost", "bp5am", "bp5ampass") or die ("Hey loser, check your server connection."); 
mysql_select_db("moviesite"); 

//create “reviews” table 
$reviews = "CREATE TABLE reviews ( 
	review_movie_id int(11) NOT NULL, 
	review_date date NOT NULL, 
	review_name varchar(255) NOT NULL, 
	review_reviewer_name varchar(255) NOT NULL, 
	review_comment varchar(255) NOT NULL, 
	review_rating int(11) NOT NULL default 0, 
	KEY (review_movie_id) )"; 
$results = mysql_query($reviews) or die (mysql_error()); 

//populate the “reviews” table 
$insert = "INSERT INTO reviews 
	(review_movie_id, review_date, review_name, review_reviewer_name, review_comment, review_rating) 
	VALUES 
	('1', '2003-08-02', 'This movie rocks!', 'John Doe','I thought this was a great movie even though my girlfriend made me see it against my will.' ,'4'),
	('1','2003-08-01','An okay movie', 'Billy Bob','This was an okay movie. I liked Eraserhead better.','2'), 
	('1','2003-08-10','Woo hoo!', 'Peppermint Patty','Wish I\’d have seen it sooner!','5'), 
	('2','2003-08-01','My favorite movie', 'Marvin Marian','I didn\’t wear my flair to the movie but I loved it anyway.','5'), 
	('3','2003-08-01','An awesome time', 'George B.','I liked this movie, even though I thought it was an informational video from our travel agent.','3')";

$insert_results = mysql_query($insert) or die(mysql_error()); 

?>