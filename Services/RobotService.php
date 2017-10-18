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


	public function checkRepoFunctionCall(){

		return $this->robotRepository->saySomething();

		
	}

	public function getRobotsRepo(){
		return $this->robotRepository->getRobots();
	}
}