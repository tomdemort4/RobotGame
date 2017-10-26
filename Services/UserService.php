<?php

require 'Repositories/UserRepository.php';

class UserService{

	protected $userRepository;

	public function __construct(){
		$this->userRepository = new UserRepository();

	}

	public function getUser($email,$pass){
		if(!empty($email) && !empty($pass)){
			return $this->userRepository->getUser($email,$pass);
		}else{
			return false;
		}
	}

}