<?php
class Db_Connect 
{
	private $conn;
	// Connecting to databaserequire_once __DIR__ . '/../vendor/autoload.php';
	public function connect() 
	{
		// Connecting to mysql database
		$this->conn = new mysqli ( "localhost", "root", "", "datademo");
		// return database handler
		return $this->conn;
	}
}

?>