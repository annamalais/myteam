<head>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">
</head>
<?php
include('db.php');

	
// get the posted data
$imgUrl = strip_tags( utf8_decode( $_POST['imgUrl'] ) );
$title = strip_tags( utf8_decode( $_POST['title'] ) );
$description = strip_tags( utf8_decode( $_POST['description'] ) );
$genre = strip_tags( utf8_decode( $_POST['genre'] ) );
	
// check that imgurl was entered
if (empty($imgUrl))
    $error = 'You must enter Image Url.';

// check that title was entered
if (empty($title))
    $error = 'You must enter Title of the movie.';

// check that descripption was entered
if (empty($description))
    $error = 'You must enter Description for the movie.';

// check that genre was entered
if (empty($genre))
    $error = 'You must enter genre for the movie.';



//Check whether the student is already registered.
$query = "select title from page where title = '" . $title . "'";
$select = mysqli_query($connectionpage,$query);

//$query = mysql_real_escape_string($select);

$num_rows = mysqli_num_rows($select);

if ( $num_rows )
	$error = 'Movie already exist.';
	
	
// check if an error was found - if there was, send the user back to the form
if (isset($error)) {
    header('Location: login.php?e='.urlencode($error)); exit;
}



// Success
$query7 = "INSERT INTO page (id, imgUrl, title, description,genre) VALUES ('NULL', '" . $imgUrl . "', '" . $title . "', '" . $description . "','" . $genre."')";

//$insert = mysql_real_escape_string($query);
$results7 = mysqli_query($connectionpage,$query7);
	echo "<div class='alert alert-success'>Movie added to database. You will be automatically redirected after 3 seconds.</div>";
    header('refresh: 3; login.php');


?>
