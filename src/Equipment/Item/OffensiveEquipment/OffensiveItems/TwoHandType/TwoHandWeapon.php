<?php

namespace Mkarwowski\Game\Equipment\Item\OffensiveEquipment\OffensiveItems\TwoHandType;

use Mkarwowski\Game\Consts\ItemType;
use Mkarwowski\Game\Equipment\Item\OffensiveEquipment\Weapon;

abstract class TwoHandWeapon extends Weapon
{
    protected function setItemType(): string
    {
        return $this->itemType = ItemType::$TWO_HAND;
    }

    public function getItemType(): string
    {
        return $this->itemType;
    }
}