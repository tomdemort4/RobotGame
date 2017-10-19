<?php

require 'Repositories/UserRepository.php';

class UserService{

	protected $pdo;
	protected $userRepository;

	public function __construct($pdo){
		$this->pdo = $pdo;
		$this->userRepository = new UserRepository($pdo);

	}

	public function getUsers(){
		return $this->userRepository->getUsers();
	}

}