<?php
	$hostname='localhost';
	$username = 'root';
	$password = '';
	$dbname = 'website';
	$port=3306;
		$conn = new mysqli($hostname, $username, $password, $dbname, $port);
if($conn-> connect_error){
		echo"connection fail";
		die($conn-> connect_error);
	}
	?>

	