<?php

class Robot{

	private $id;
	private $name;
	private $life;
	private $attack;
	private $defense;
	private $battleColor;
	private $image;

	public function __construct($id,$name,$life,$attack,$defense,$battleColor,$image){
		$this->id = $id;
		$this->name = $name;
		$this->life = $life;
		$this->attack = $attack;
		$this->defense = $defense;
		$this->battleColor = $battleColor;
		$this->image = $image;
	}

	public function doSomething(){
		echo "Que tal gentecilla";
	}




	
}