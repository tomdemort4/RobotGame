<?php

class Connection{
	private static function GetConfig()
	{
		return [
			'database'=>[
				'name' => 'RobotGame',
				'username' => 'root',
				'password' => '',
				'connection' => 'mysql:host=db',
				'options' => [
					PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
				]
			]
		
		];
	}

	public static function getConnection(){
		try{

			$config = Connection::getConfig()["database"];

			return new PDO(
				$config['connection'].';dbname='.$config['name'],
				$config['username'],
				$config['password'],
				$config['options']
			);
		}catch (Exception $ex){
			die($ex->getMessage());
		}
	}
}