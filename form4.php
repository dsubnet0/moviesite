<?php
function debugDisplay() {
?>
	<pre>
	$_POST
	<?php
	print_r($_POST);
	?>
	$_GET
	<?php
	print_r($_GET);
	?>
	</pre>
<?php
}

if (!isset($_GET['step'])) {
	require('startform.php');
} else {

	//switch on search/add wizard step
	switch ($_GET['step']) {
	
		//search/add form
		case "1":
			$type = explode(":", $_POST['type']);
			if ($_POST['Submit'] == "Add") {
				require($_POST['Submit'] . $type[0] . '.php');
			} else {
				if ($_POST['type'] == "Movie:Movie" && $_POST['MovieType' ] == "") {
					header("Location:form4.php");
				}
				echo "<h1>Search Results</h1>";
				echo "<p>You are looking for a " . $type[1] . " named " . $_POST['Name'] . ".</p>";
			}
			if ($_POST['Debug'] == "on") {
				debugDisplay();
			}
			break;
			
		//add summary
		case "2":
			$type = explode(":", $_POST['type']);
			echo "<h1>New " . $type[1] . " : " . $_POST['Name'] . "</h1>";
			switch ($type[0]) {
				case "Movie":
					echo "<p>Released in " . $_POST['MovieYear'] . "</p>";
					echo "<p>" . nl2br(stripslashes($_POST['Desc'])) . "</p>";
					break;
					
				default:
					echo "<h2>Quick Bio</h2>";
					echo "<p>" . nl2br(stripslashes($_POST['Bio'])) . "</p>";
					break;
			}
			break;
		
		//starting from
		default:
			require('startform.php');
			break;
	}
}
?>