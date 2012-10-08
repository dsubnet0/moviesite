<?php 
$link = mysql_connect("localhost","bp5am","bp5ampass") or die (mysql_error());
mysql_select_db("moviesite") or die (mysql_error());

$query = "SELECT movie_id,movie_name,movie_director,movie_leadactor FROM movie";

$result = mysql_query($query,$link) or die (mysql_error());
$num_movies = mysql_num_rows($result);


$movie_header =<<<EOD
<h2><center>Movie Review Database</center></h2>
<table width="70%" border="1" cellpadding="2" cellspacing="2" align="center">
	<tr>
		<th>Movie Title</th>
<!--		<th>Year of Release</th> -->
		<th>Director</th>
		<th>Lead Actor</th>
		<th>Type</th>
	</tr>
EOD;

$movie_details = '';
while ($row = mysql_fetch_array($result)) {
	$movie_id = $row['movie_id'];
	$movie_name = $row['movie_name'];
	$movie_director = $row['movie_director'];
	$movie_leadactor = $row['movie_leadactor'];
	
	get_director();
	
	get_leadactor();
	
	$movie_details .=<<<EOD
	<tr>
		<td><a href="movie_details.php?movie_id=$movie_id" title="Find out more about $movie_name">$movie_name</a></td>
		<td>$director</td>
		<td>$leadactor</td>
	</tr>
EOD;
}

$movie_details .=<<<EOD
<tr>
	<td>&nbsp;</td>
</tr>
<tr>
	<td>Total: $num_movies Movies</td>
</tr>
EOD;

$movie_footer = "</table>";

$movie =<<<MOVIE
	$movie_header
	$movie_details
	$movie_footer
MOVIE;

echo "There are $num_movies movies in our database.";
echo $movie;


function get_director() {
	global $movie_director;
	global $director;
	
	$query_d = "SELECT people_fullname FROM people WHERE people_id = '$movie_director'";
	$results_d = mysql_query($query_d) or die (mysql_error());
	$row_d = mysql_fetch_array($results_d);
	extract($row_d);
	$director = $people_fullname;
}

function get_leadactor() {
	global $movie_leadactor;
	global $leadactor;
	
	$query_a = "SELECT people_fullname FROM people WHERE people_id = '$movie_leadactor'";
	$results_a = mysql_query($query_a) or die (mysql_error());
	$row_a = mysql_fetch_array($results_a);
	extract($row_a);
	$leadactor = $people_fullname;
}
?>

