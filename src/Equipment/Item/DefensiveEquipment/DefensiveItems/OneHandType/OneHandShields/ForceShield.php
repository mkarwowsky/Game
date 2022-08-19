<?php

namespace Mkarwowski\Game\Equipment\Item\DefensiveEquipment\DefensiveItems\OneHandType\OneHandShields;

use Mkarwowski\Game\Equipment\Item\DefensiveEquipment\DefensiveItems\OneHandType\OneHandShield;

class ForceShield extends OneHandShield
{
    public function __construct()
    {
        parent::__construct();
        $this->equipmentName = "Force Shield";
        $this->itemPurpose = $this->setItemPurpose();
        $this->itemType = $this->setItemType();
        $this->strength = 0;
        $this->agility = 5;
        $this->intelligence = 10;
        $this->defenseValue = 10;
    }
}