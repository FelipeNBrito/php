<?php

	require_once './DatabaseFactory.class.php';

	class MyUserClass {

		private $dbconn;

		function __construct() {
			$dbconn = $this->DatabaseFactory->getConnection();
		}

		// This function is responsable for returning the users list from the database in alphabetical order
		public function getUserList() {

			// Build up the query to get all users in alphabetial order from the database
			$query = 'select name from user ORDER BY name';

			// Run the query and store results in a variable
			$results = $dbconn->query($query);

			// Finally return the user list
			return $results;
		}
	}