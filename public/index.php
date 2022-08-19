<?php

namespace Mkarwowski\Game;

use Mkarwowski\Game\Character\Professions\Warrior;
use Mkarwowski\Game\Equipment\EquipmentCharacterSet\EquipmentSet;
use Mkarwowski\Game\Equipment\Item\DefensiveEquipment\DefensiveItems\OneHandType\OneHandShields\LightShield;
use Mkarwowski\Game\Equipment\Item\OffensiveEquipment\OffensiveItems\TwoHandType\TwoHandWeapons\Sword;
use Mkarwowski\Game\Fight\Battle\Battle;

require '../vendor/autoload.php';

$warrior = new Warrior("Marcin");
$warriorStronger = new Warrior("Kamil");

$sword = new Sword();
$shield = new LightShield();
$equipmentStrongWarrior = new EquipmentSet($sword, $shield);

$warriorStronger->setEquipmentStatsForCharacter($equipmentStrongWarrior);


$battle = new Battle($warrior, $warriorStronger);

//print_r($battle->getFirstOpponent());

$battle->whoIsAttacking();