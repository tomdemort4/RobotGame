<?php

require 'Database/Connection.php';
require 'Models/Robot.php';

class RobotRepository{
	protected $connection;

	function __construct() {
		$this->connection = Connection::getConnection();
	}

	public function getRobots(){
		return [
			new Robot(1, "Robot@1"),
			new Robot(2, "Robot@2"),
		];
		// $query = "Select * from Robots";

		// try{
		// 	$statement = $this->connection->prepare($query);
		// 	$statement->execute();
		// 	$result = $statement->fetchAll(PDO::FETCH_ASSOC);
		// 	return $result;
		// } catch (Exception $ex){
		// 	die($ex->getMessage());
		// }
	}
}