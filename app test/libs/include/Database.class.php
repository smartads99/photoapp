<?php

  class Database
  {
	public static $conn=null;
	public static function getConnection()
	{
		if (Database::$conn == null)
		{
			$servername="mysql.selfmade.ninja";
			$username="phpapp022";
			$password="Boobesh@23241234";
			$dbname="phpapp022_new_db";
		
			// Create connection
			$connection = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($connection->connect_error) {
				die("Connection failed: " . $connection->connect_error);
			} else 
			   {
				printf("New connection establishing....");
				Database::$conn = $connection;
				return Database::$conn;
		       }
		 }else 
		    {
				printf("Returning existing establishing...");
				return Database::$conn;
			}
		
		}
	}
