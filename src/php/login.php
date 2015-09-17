<?php

	//start the session
	session_start();

	//assign passed values to the variables
	$username = $_POST['username'];
	$password = $_POST['password'];

	//access the database
	$link = mysqli_connect("localhost", "cl39-example-inf", "dRW79-J9X", "cl39-example-inf");

	//check if the user name exists
	//$query = "SELECT id, username, password FROM users";
	$query = sprintf("SELECT id, username, password FROM users 
    	WHERE username='%s' LIMIT 1",
    	mysql_real_escape_string($username));

	//if the database was sucessfully queried...
	if($result=mysqli_query($link, $query)) {

		$row = mysqli_fetch_array($result);

		//check if the password matches
		if($row[2]==$password) {

			//echo "the password matches";

			//if the password matches start a session and log them in
			$_SESSION['login'] = '1';

			//echo "logged in!";

		} else {
			echo "Unknown username or password. Please try again!";
		}		

	} else {

		echo "Check your username and try again.";
	}


?>