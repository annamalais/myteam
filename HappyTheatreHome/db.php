<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "maindb";
$prefix = "";
$connection = mysqli_connect($mysql_hostname,$mysql_user, $mysql_password);
	if (!$connection)
	{
		die ("Could not connect to the database: <br />". mysqli_error($connection));
	}
	mysqli_select_db($connection,$mysql_database);
?>