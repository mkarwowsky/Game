<?php

namespace Mkarwowski\Game\Equipment\Item\DefensiveEquipment\DefensiveItems\OneHandType\OneHandShields;

use Mkarwowski\Game\Equipment\Item\DefensiveEquipment\DefensiveItems\OneHandType\OneHandShield;

class LightShield extends OneHandShield
{
    public function __construct()
    {
        parent::__construct();
        $this->equipmentName = "Light Shield";
        $this->itemPurpose = $this->setItemPurpose();
        $this->itemType = $this->setItemType();
        $this->strength = 5;
        $this->agility = 10;
        $this->intelligence = 0;
        $this->defenseValue = 10;
    }
}