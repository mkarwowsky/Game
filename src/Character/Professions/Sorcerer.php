<?php

declare(strict_types=1);

namespace Mkarwowski\Game\Character\Professions;

use Mkarwowski\Game\Character\InitialCharacter;
use Mkarwowski\Game\Consts\Professions;

class Sorcerer extends InitialCharacter
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
        return $this->profession = Professions::$SORCERER;
    }

    function calculateStrength(): int
    {
        return $this->strength = $this->level * 2;
    }

    function calculateAgility(): int
    {
        return $this->agility = $this->level * 2;
    }

    function calculateIntelligence(): int
    {
        return $this->intelligence = $this->level * 3;
    }
}