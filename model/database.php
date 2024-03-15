<?php

class Database
{
    private $server = "localhost";
	private $user = "root";
	private $pass = "";
	private $database = "paperlaria";
	private $connection = null;	

    public function __construct()
	{
		try
		{
			$this->connection = new PDO("mysql:host=$this->server;dbname=$this->database;charset=utf8", $this->user, $this->pass);
			$this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch(PDOException $e)
		{
			die("Conexão falhou: ".$e->getMessage());
		}		
	}

	public function getConnection()
	{
		return $this->connection;
	}
}

?>