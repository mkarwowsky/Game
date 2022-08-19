<?php

namespace Mkarwowski\Game\Equipment\Item\OffensiveEquipment\OffensiveItems\OneHandType;

use Mkarwowski\Game\Consts\ItemType;
use Mkarwowski\Game\Equipment\Item\OffensiveEquipment\Weapon;

abstract class OneHandWeapon extends Weapon
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