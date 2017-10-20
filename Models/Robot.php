<?php

class Robot{

	public $id;
	public $name;
	public $life;
	public $attack;
	public $defense;
	public $battleColor;
	public $image;

	public function __construct($id, $name,$life,$attack,$defense,$battleColor,$image){
		$this->id = $id;
		$this->name = $name;
		$this->life = $life;
		$this->attack = $attack;
		$this->defense = $defense;
		$this->battleColor = $battleColor;
		$this->image = $image;
	}
}