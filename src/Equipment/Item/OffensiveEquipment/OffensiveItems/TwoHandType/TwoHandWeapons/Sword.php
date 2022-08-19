<?php

namespace Mkarwowski\Game\Equipment\Item\OffensiveEquipment\OffensiveItems\TwoHandType\TwoHandWeapons;

use Mkarwowski\Game\Equipment\Item\OffensiveEquipment\OffensiveItems\TwoHandType\TwoHandWeapon;

class Sword extends TwoHandWeapon
{
    public function __construct()
    {
        parent::__construct();
        $this->equipmentName = "Sword";
        $this->itemPurpose = $this->setItemPurpose();
        $this->itemType = $this->setItemType();
        $this->strength = 0;
        $this->agility = 0;
        $this->intelligence = 0;
        $this->attackValue = 15;
    }
}