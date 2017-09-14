<?php

require_once('Abstract_Character.php');
require_once('Abstract_Character/Knight.php');
require_once('Abstract_Character/Sorcerer.php');

require_once('Abstract_Character/Weapon/Interface_Weapon.php');
require_once('Abstract_Character/Weapon/Axe.php');

require_once('Abstract_Character/Armor/Interface_Armor.php');
require_once('Abstract_Character/Armor/KnightArmor.php');

$knight = new Knight();
$knight->setName('Amine Edge');
$knight->setWeapon(new Axe());
$knight->setArmor(new KnightArmor());

echo "<pre>";
print_r($knight->toString());
echo "</pre>";