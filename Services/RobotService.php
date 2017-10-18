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
		return new Robot($id, "Robot");
	}

	public function Create($robot) {
		return false;
	}

}