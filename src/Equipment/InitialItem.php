<?php

namespace Mkarwowski\Game\Equipment;

abstract class InitialItem
{
    protected string $equipmentName;
    protected string $itemPurpose;
    protected string $itemType;
    protected int $strength;
    protected int $agility;
    protected int $intelligence;

    abstract protected function setItemPurpose();

    abstract protected function setItemType();

    abstract public function getItemPurpose();

    abstract public function getItemType();

    public function getStrength()
    {
        return $this->strength;
    }

    public function getAgility()
    {
        return $this->agility;
    }

    public function getIntelligence()
    {
        return $this->intelligence;
    }

    protected function __construct()
    {
        $this->setItemPurpose();
        $this->setItemType();
        $this->getItemPurpose();
        $this->getItemType();
    }

}