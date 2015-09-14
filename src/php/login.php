<?php

	//assign passed values to the variables
	$username = $_POST['username'];
	$password = $_POST['password'];

	//access the database
	$link = mysqli_connect("localhost", "cl39-example-inf", "dRW79-J9X", "cl39-example-inf");

	/*
	//report any errors
	if(mysqli_connect_error()) {

		echo "Couldn't connect to the database";

	} else {

		echo "it worked!";
	}
	*/

	//query the database
	$query = "SELECT * FROM users";

	//if the database was sucessfully queried...
	if($result=mysqli_query($link, $query)) {

		$row = mysqli_fetch_array($result);

		//check if the passed value matches the database
		echo "logged in!";

	} else {

		echo "It Failed";
	}


?>