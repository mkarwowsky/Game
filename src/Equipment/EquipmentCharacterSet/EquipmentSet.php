<?php

namespace Mkarwowski\Game\Equipment\EquipmentCharacterSet;

use Mkarwowski\Game\Consts\ItemType;
use Mkarwowski\Game\Equipment\InitialItem;
use Mkarwowski\Game\Equipment\Item\DefensiveEquipment\Shield;
use Mkarwowski\Game\Equipment\Item\OffensiveEquipment\Weapon;


class EquipmentSet
{
    protected Weapon $rightHandItem;
    protected Shield $leftHandItem;
    protected int $attackValue = 0;
    protected int $defenceValue = 0;
    protected int $strengthValue = 0;
    protected int $agilityValue = 0;
    protected int $intelligenceValue = 0;

    public function __construct(?Weapon $rightHandItem = null, ?Shield $leftHandItem = null)
    {
        $this->rightHandItem = $this->setRightHandItem($rightHandItem);
        $this->leftHandItem = $this->setLeftHandItem($leftHandItem);
        $this->setStatsFromItems($rightHandItem, $leftHandItem);
    }

    private function setStatsFromItems(?Weapon $rightHandItem = null, ?Shield $leftHandItem = null): void
    {
        if ($this->isItTwoHandsItem($this->rightHandItem)) {
            $this->setStatsFromRightHandItem($rightHandItem);
        } else {
            $this->setStatsFromRightHandItem($rightHandItem);
            $this->setStatsFromLeftHandItem($leftHandItem);
        }
    }

    private function setStatsFromRightHandItem(?Weapon $rightHandItem = null): void
    {
        if ($rightHandItem !== null) {
            $this->setStats($rightHandItem);
            $this->attackValue += $rightHandItem->getAttackValue();
        }
    }

    private function setStatsFromLeftHandItem(?Shield $leftHandItem = null): void
    {
        if ($leftHandItem !== null) {
            $this->setStats($leftHandItem);
            $this->defenceValue += $leftHandItem->getDefenseValue();
        }
    }

    private function setStats(InitialItem $item): void
    {
        $this->strengthValue += $item->getStrength();
        $this->agilityValue += $item->getAgility();
        $this->intelligenceValue += $item->getIntelligence();
    }

    private function setRightHandItem(Weapon $rightHandItem): Weapon
    {
        return $rightHandItem;
    }

    private function setLeftHandItem(Shield $leftHandItem): Shield
    {
        return $leftHandItem;
    }

    private function isItTwoHandsItem(Weapon $rightHandItem): bool
    {
        if ($rightHandItem->getItemType() === ItemType::$TWO_HAND) {
            unset($this->leftHandItem);
            return 1;
        } else {
            return 0;
        }
    }

    public function getAttackValue(): int
    {
        return $this->attackValue;
    }

    public function getDefenceValue(): int
    {
        return $this->defenceValue;
    }

    public function getStrengthValue(): int
    {
        return $this->strengthValue;
    }

    public function getAgilityValue(): int
    {
        return $this->agilityValue;
    }

    public function getIntelligenceValue(): int
    {
        return $this->intelligenceValue;
    }
}