<?php

declare(strict_types=1);

namespace Mkarwowski\Game\Character\Professions;

use Mkarwowski\Game\Character\InitialCharacter;
use Mkarwowski\Game\Consts\Professions;

class Hunter extends InitialCharacter
{
    public function __construct(string $characterName)
    {
        parent::__construct($characterName);
        $this->setUpCharacterProfessionStats();
    }

    protected function setUpCharacterProfessionStats(): void
    {
        $this->profession = $this->setProfession();
        $this->strength = $this->calculateStrength();
        $this->agility = $this->calculateAgility();
        $this->intelligence = $this->calculateIntelligence();
        $this->calculateHealth();
    }

    protected function setProfession(): string
    {
        return $this->profession = Professions::$HUNTER;
    }

    protected function calculateStrength(): int
    {
        return $this->strength = $this->level * 2;
    }

    protected function calculateAgility(): int
    {
        return $this->agility = $this->level * 2;
    }

    protected function calculateIntelligence(): int
    {
        return $this->intelligence = $this->level * 2;
    }

    public function getProfession(): string
    {
        return $this->profession;
    }
}