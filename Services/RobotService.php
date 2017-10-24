<?php

require 'Repositories/RobotRepository.php';

class RobotService{

	protected $robotRepository;

	public function __construct(){
		$this->robotRepository = new RobotRepository();
	}

	public function getRobots(){
		return $this->robotRepository->getRobots();
	}

	public function getRobotById($id) {
		return $this->robotRepository->getRobotById($id);
	}

	public function createRobot($table,$params){
		if(!empty($params)){
			return $this->robotRepository->createRobot($table,$params);		
		}else{
			return false;
		}
	}
}