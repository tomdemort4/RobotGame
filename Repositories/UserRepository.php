<?php

require 'Database/Connection.php';
require 'Models/User.php';

class UserRepository{
	protected $connection;

	public function __construct(){
		$this->connection = Connection::getConnection();
	}

	public function getUser($email,$pass){
		$query = "Select * from users where Email=? and Password=?";
	
		try{
			$statement = $this->connection->prepare($query);
			$statement->execute(array($email,$pass));
			$result = $statement->fetchAll(PDO::FETCH_ASSOC);
			return $result;
		} catch(Exception $ex){
			die($ex->getMessage());
		}

	}
}