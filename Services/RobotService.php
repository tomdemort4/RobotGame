<?php

//header("Access-Control-Allow-Origin");

require 'Repositories/RobotRepository.php';

class RobotService{

	protected $pdo;
	protected $robotRepository;

	public function __construct($pdo){
		$this->pdo = $pdo;
		$this->robotRepository = new RobotRepository($pdo);
	}


	public function checkNotEmpty(){

		if($this->robotRepository->GetRobots()){
			echo "correcto";
		}
		
		
	}
}