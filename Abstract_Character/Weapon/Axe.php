<?php

class Axe implements Interface_Weapon
{

	public $attack = 12;
	public $arm = 6;

	public function damage()
	{
		return rand(0, $this->attack);
	}

	public function defend()
	{
		return $this->arm;
	}

}