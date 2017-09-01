<?php

	class DatabaseFactory {

		$host = 'localhost'; 	// Database host url
		$user = 'user';			// Database user
		$password = 'password';	// Database password

		$connection = null;		// Factory's connection

		function getConnection() {

			// If there is no connection yet, create one
			if ($this->connection == null) {
				$this->connection =  new DatabaseConnection($host, $user, $password);
			}

			// return the connection to the database
			return $this->connection;
		}
	}