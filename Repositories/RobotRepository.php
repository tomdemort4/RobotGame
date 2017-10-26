<?php

require 'Database/Connection.php';
require 'Models/Robot.php';

class RobotRepository{
	protected $connection;

	function __construct() {
		$this->connection = Connection::getConnection();
	}

	public function getRobots(){
		$query = "Select * from Robots";

		try{
			$statement = $this->connection->prepare($query);
			$statement->execute();
			$result = $statement->fetchAll(PDO::FETCH_ASSOC);
			return $result;
		} catch (Exception $ex){
			die($ex->getMessage());
		}
		
	}

	public function getRobotById($id){
		$query = "Select * from Robots where id=?";

		try{
			$statement = $this->connection->prepare($query);
			$statement->execute(array($id));
			$result = $statement->fetchAll(PDO::FETCH_ASSOC);
			return $result;

		}catch(Exception $ex){
			die($ex->getMessage());
		}
	}

	 public function createRobot($name,$life,$attack,$defense,$color,$image,$price){
        
       $query = "insert into Robots (Name,Life,Attack,Defense,BattleColor,Image,Price)" .
       			"values(?,?,?,?,?,?,?)";
       
        try{
           $statement = $this->connection->prepare($query);
            $statement->execute(array($name,$life,$attack,$defense,$color,$image,$price));
            
       } catch (Exception $ex) {
           die($ex->getMessage());
       }       
    }
}