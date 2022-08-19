<?php

namespace Mkarwowski\Game\Equipment\Item\OffensiveEquipment;

use Mkarwowski\Game\Consts\ItemPurpose;
use Mkarwowski\Game\Equipment\InitialItem;

abstract class Weapon extends InitialItem
{
    protected int $attackValue;

    protected function setItemPurpose(): string
    {
        return $this->itemPurpose = ItemPurpose::$WEAPON;
    }

    public function getItemPurpose(): string
    {
        return $this->itemPurpose;
    }

    public function getAttackValue(): int
    {
        return $this->attackValue;
    }
}