<?php

namespace Mkarwowski\Game;

use Mkarwowski\Game\Character\Professions\Hunter;
use Mkarwowski\Game\Character\Professions\Warrior;
use Mkarwowski\Game\Equipment\EquipmentCharacterSet\EquipmentSet;
use Mkarwowski\Game\Equipment\Item\DefensiveEquipment\DefensiveItems\OneHandType\OneHandShields\LightShield;
use Mkarwowski\Game\Equipment\Item\OffensiveEquipment\OffensiveItems\TwoHandType\TwoHandWeapons\Sword;
use Mkarwowski\Game\Fight\Battle\Battle;

require '../vendor/autoload.php';

$warrior = new Warrior("Marcin");
$Hunter = new Hunter("Kamil");
$Hunte2r = new Hunter("Marcin");

$sword = new Sword();
$shield = new LightShield();
$equipmentStrongWarrior = new EquipmentSet($sword, $shield);

//$warrior->setEquipmentStatsForCharacter($equipmentStrongWarrior);


$battle = new Battle($Hunter,$Hunte2r );

//print_r($battle->getFirstOpponent());

//print_r($battle->getFirstOpponent());
//print_r($battle->getSecondOpponent());
//print_r($battle->calculateWhoIsAttackingFirst($warrior, $Hunter));
//print_r($battle->calculateAttack($warrior, $Hunter));
//echo "warrior";
//print_r($warrior->getHealthValue());
//echo "hunter";
//print_r($Hunter->getHealthValue());
$battle->conductBattle();
//print_r($battle->conductBattle());