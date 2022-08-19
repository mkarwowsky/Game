<?php

namespace Mkarwowski\Game\Equipment\Item\OffensiveEquipment\OffensiveItems\OneHandType\OneHandWeapons;

use Mkarwowski\Game\Equipment\Item\OffensiveEquipment\OffensiveItems\OneHandType\OneHandWeapon;

class Wand extends OneHandWeapon
{
    public function __construct()
    {
        parent::__construct();
        $this->equipmentName = "Wand";
        $this->itemPurpose = $this->setItemPurpose();
        $this->itemType = $this->setItemType();
        $this->strength = 0;
        $this->agility = 0;
        $this->intelligence = 5;
        $this->attackValue = 10;
    }
}