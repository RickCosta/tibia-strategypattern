<?php

class KnightArmor implements Interface_Armor {

	public $arm = 12;

	public function defend()
	{
		return $this->arm;
	}

}