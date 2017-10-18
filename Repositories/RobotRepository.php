<?php

//header('Access-Control-Allow-Origin: *');

class RobotRepository{

	protected $pdo;

	public function __construct($pdo){
		$this->pdo = $pdo;

	}

	public function getRobots(){
		$query = "Select * from Robots";

		try{
			$statement = $this->pdo->prepare($query);
			$statement->execute();
			$result = $statement->fetchAll(PDO::FETCH_ASSOC);

			$json = json_encode($result);

			echo $json;

		} catch (Exception $ex){
			die($ex->getMessage());

		}
	}


}