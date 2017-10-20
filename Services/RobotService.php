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

	public function Create($robot) {
		return false;
	}

}