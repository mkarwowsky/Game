<?php

namespace Mkarwowski\Game\Equipment\Item\DefensiveEquipment\DefensiveItems\OneHandType\OneHandShields;

use Mkarwowski\Game\Consts\ItemPurpose;
use Mkarwowski\Game\Consts\ItemType;
use Mkarwowski\Game\Equipment\Item\DefensiveEquipment\DefensiveItems\OneHandType\OneHandShield;

class HeavyShield extends OneHandShield
{
    public function __construct()
    {
        parent::__construct();
        $this->equipmentName = "Heavy Shield";
        $this->itemPurpose = $this->setItemPurpose();
        $this->itemType = $this->setItemType();
        $this->strength = 5;
        $this->agility = 0;
        $this->intelligence = 0;
        $this->defenseValue = 15;
    }
}