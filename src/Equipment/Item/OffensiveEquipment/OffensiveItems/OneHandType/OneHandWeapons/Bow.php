<?php

namespace Mkarwowski\Game\Equipment\Item\OffensiveEquipment\OffensiveItems\OneHandType\OneHandWeapons;

use Mkarwowski\Game\Equipment\Item\OffensiveEquipment\OffensiveItems\OneHandType\OneHandWeapon;

class Bow extends OneHandWeapon
{
    public function __construct()
    {
        parent::__construct();
        $this->equipmentName = "Bow";
        $this->itemPurpose = $this->setItemPurpose();
        $this->itemType = $this->setItemType();
        $this->strength = 0;
        $this->agility = 5;
        $this->intelligence = 0;
        $this->attackValue = 10;
    }
}