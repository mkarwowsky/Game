<?php

namespace Mkarwowski\Game\Equipment\Item\DefensiveEquipment;

use Mkarwowski\Game\Consts\ItemPurpose;
use Mkarwowski\Game\Equipment\InitialItem;

abstract class Shield extends InitialItem
{
    protected int $defenseValue;

    protected function setItemPurpose(): string
    {
        return $this->itemPurpose = ItemPurpose::$DEFENCE;
    }

    public function getItemPurpose(): string
    {
        return $this->itemPurpose;
    }

    public function getDefenseValue(): int
    {
        return $this->defenseValue;
    }
}