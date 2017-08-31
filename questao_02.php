<?php

	// Location to be redirected
	$location = "http://www.google.com";
 
 	// Checks if the user is logged in through session
 	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

		header("Location: " . $location);
		exit(); // Exit to avoid resending headers
	} 

	// Checks if the user is logged in through cookie
	if (isset($_COOKIE['Loggedin']) && $_COOKIE['Loggedin'] == true) {
		header("Location: ". $location);
		exit(); // Exit to avoid resending headers
	}
