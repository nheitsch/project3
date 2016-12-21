<?php

	// 1. Create a database connection
 	
 	include 'db-info.php';
	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);


	// 2. Collect Data
	$name = Trim(stripslashes($_POST['Name']));
	$email = Trim(stripslashes($_POST['EMail']));
	$phone = Trim(stripslashes($_POST['Phone']));
	$message = Trim(stripslashes($_POST['comment']));

	// 3. Insert Data
	$query = "INSERT INTO contacts (name, email, phone, comment) VALUES ('$name', '$email', '$phone', '$message')";
	$result = mysqli_query($connection, $query);


	// 4. Check Data
	$NumberOfRowsAffected = mysqli_affected_rows($connection);
	if($NumberOfRowsAffected < 1 ) {
 		die('No records were written to the database. Waaaa!');
	}


	// 5. Close Connection
	mysqli_close($connection);
	header("Location: database-read.php");

	

?>