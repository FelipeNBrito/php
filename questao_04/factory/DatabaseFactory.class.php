<?php

	class DatabaseFactory {

		const USERNAME="root";
		const PASSWORD="root";
		const HOST="localhost";
		const DB="tarefas";

		
		public function getConnection(){
			$username = self::USERNAME;
		    $password = self::PASSWORD;
		    $host = self::HOST;
	        $db = self::DB;
            $connection = new PDO("mysql:dbname=$db;host=$host", $username, $password);
		            
		    return $connection;
		}
	}