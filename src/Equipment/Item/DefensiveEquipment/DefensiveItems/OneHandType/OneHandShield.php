<?php

namespace Mkarwowski\Game\Equipment\Item\DefensiveEquipment\DefensiveItems\OneHandType;

use Mkarwowski\Game\Consts\ItemType;
use Mkarwowski\Game\Equipment\Item\DefensiveEquipment\Shield;

abstract class OneHandShield extends Shield
{
    protected function setItemType(): string
    {
        return $this->itemType = ItemType::$ONE_HAND;
    }

    public function getItemType(): string
    {
        return $this->itemType;
    }
}