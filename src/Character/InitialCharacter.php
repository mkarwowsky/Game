<?php

declare(strict_types=1);

namespace Mkarwowski\Game\Character;

use Mkarwowski\Game\Consts\Professions;
use Mkarwowski\Game\Equipment\EquipmentCharacterSet\EquipmentSet;

abstract class InitialCharacter
{
    protected string $characterName;
    protected string $profession;
    protected int $strength;
    protected int $agility;
    protected int $intelligence;
    protected int $health;
    protected int $experience;
    protected int $level;
    protected int $attackValue;
    protected int $defenceValue;
    protected ?EquipmentSet $equipmentSet;

    abstract protected function setProfession();

    protected function __construct(string $characterName)
    {
        $this->characterName = $characterName;
        $this->strength = 1;
        $this->agility = 1;
        $this->intelligence = 1;
        $this->experience = 1;
        $this->health = 1;
        $this->level = 1;
        $this->attackValue = 1;
        $this->defenceValue = 0;
        $this->setProfession();
        $this->equipmentSet = null;
    }

    abstract protected function calculateStrength(): int;

    abstract protected function calculateAgility(): int;

    abstract protected function calculateIntelligence(): int;

    public function getCharacterName(): string
    {
        return $this->characterName;
    }

    public function getAttackValue(): int
    {
        return $this->attackValue;
    }

    public function getDeffenceValue(): int
    {
        return $this->defenceValue;
    }

    public function getStrengthValue(): int
    {
        return $this->strength;
    }

    public function getAgilityValue(): int
    {
        return $this->agility;
    }

    public function getIntelligenceValue(): int
    {
        return $this->intelligence;
    }

    public function getHealthValue(): int
    {
        return $this->health;
    }

    public function setHealthValue(int $healthValue): int
    {
        return $this->health -= $healthValue;
    }

    protected function calculateHealth(): int
    {
        return $this->health += $this->strength * $this->level * 10;
    }

    public function calculateExperience(): int
    {
        $this->experience++;
        if ($this->experience > $this->level * 3) {
            $this->calculateLevel();
            $this->calculateStrength();
            $this->calculateAgility();
            $this->calculateIntelligence();
            $this->calculateHealth();
        }
        return $this->experience;
    }

    protected function calculateLevel(): int
    {
        return $this->level++;
    }

    public function setEquipmentStatsForCharacter(EquipmentSet $equipmentSet): void
    {
        $this->equipmentSet = $equipmentSet;
        $this->strength += $equipmentSet->getStrengthValue();
        $this->agility += $equipmentSet->getAgilityValue();
        $this->intelligence += $equipmentSet->getIntelligenceValue();
        $this->attackValue += $equipmentSet->getAttackValue();
        $this->defenceValue += $equipmentSet->getDefenceValue();
    }
}

