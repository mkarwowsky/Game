<?php

namespace Mkarwowski\Game\Fight\Battle;

use Mkarwowski\Game\Character\InitialCharacter;
use Mkarwowski\Game\Character\Professions\Warrior;

class Battle
{
    protected InitialCharacter $firstOpponent;
    protected InitialCharacter $secondOpponent;

    public function __construct(InitialCharacter $firstOpponent, InitialCharacter $secondOpponent)
    {
        $this->firstOpponent = $firstOpponent;
        $this->secondOpponent = $secondOpponent;
    }

    public function getFirstOpponent(): InitialCharacter
    {
        return $this->firstOpponent;
    }

}