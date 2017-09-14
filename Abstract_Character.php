<?php

abstract class Abstract_Character{

	public function setName($name){
		$this->name = $name;
	}

	public function setWeapon($weapon){
		$this->weapon = $weapon;
	}

	public function setArmor($armor){
		$this->armor = $armor;
	}

	public function attack(){

		if(isset($this->weapon)){
			return rand(0, $this->baseDamage + $this->weapon->damage());
		}

		return rand(0, $this->baseDamage);
	}

	public function defend()
	{
		if(!isset($this->armor) && !isset($this->weapon)){
			return 0;
		}

		if(!isset($this->armor)){
			return $this->weapon->arm;
		}

		if(!isset($this->weapon)){
			return $this->armor->arm;
		}

		return $this->armor->arm + $this->weapon->arm;
	}

	public function toString(){
		
		$return = get_class($this) . '<i>[' . $this->name . ']</i><br/>';
		$return .= 'Armor: ' . get_class($this->armor) . '<br/>';
		$return .= 'Weapon: ' . get_class($this->weapon) . '<br/>';
		$return .= '<hr/>';
		$return .= 'Defense Points: ' . $this->defend() . '<br/>';
		$return .= 'Attack Damage: ' . $this->attack() . '<br/>';
		$return .= '<br/><br/>';

		return $return;

	}

}