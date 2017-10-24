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

	public function createRobot($table,$parameters){
        
       $query = sprintf(
               'insert into %s (%s) values(%s)',
               $table ,
               implode(',',  array_keys($parameters)),
               ':' . implode(', :',  array_keys($parameters))        
        );
       
        var_dump($query);
        try{
           $statement = $this->connection->prepare($query);
           
            $statement->execute($parameters);
            
       } catch (Exception $ex) {
           die($ex->getMessage());
       }       
    }
}