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

	public function createRobot($name,$life,$attack,$defense,$color,$image,$price){

		if(!empty($name) && !empty($life) && !empty($attack) && !empty($defense) && !empty($color)
			 && !empty($image) && !empty($price)){
			return $this->robotRepository->createRobot($name,$life,$attack,$defense,$color,$image,$price);		
		}else{
			echo "something went wrong";
			return false;
		}
	}
}