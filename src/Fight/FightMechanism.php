<?php

namespace Mkarwowski\Game\Fight;

use Mkarwowski\Game\Character\InitialCharacter;

class FightMechanism
{
    protected InitialCharacter $firstOpponent;
    protected InitialCharacter $secondOpponent;
    protected InitialCharacter $winner;

    public function __construct(InitialCharacter $firstOpponent, InitialCharacter $secondOpponent)
    {
        $this->firstOpponent = $firstOpponent;
        $this->secondOpponent = $secondOpponent;
    }

    private function whoIsAttacking(): InitialCharacter
    {
        if ($this->firstOpponent->getAgilityValue() - $this->secondOpponent->getAgilityValue() > 0)
            return $this->firstOpponent;
        else
            return $this->secondOpponent;

    }

    private function attackOpponent(): void
    {
        if ($this->whoIsAttacking() === $this->secondOpponent)
            $this->firstOpponent->setHealthValue(($this->firstOpponent->getHealthValue() + $this->firstOpponent->getDeffenceValue()) - $this->secondOpponent->getAttackValue());
        elseif ($this->whoIsAttacking() === $this->firstOpponent)
            $this->secondOpponent->setHealthValue(($this->firstOpponent->getHealthValue() + $this->firstOpponent->getDeffenceValue()) - $this->secondOpponent->getAttackValue());
    }

    public function startBattle(): InitialCharacter
    {
        do {
            $this->attackOpponent();
            if ($this->firstOpponent->getHealthValue() <= 0 || $this->secondOpponent->getHealthValue() <= 0) {
                return $this->battleWinner();
            }
        } while ($this->firstOpponent->getHealthValue() <= 0 || $this->secondOpponent->getHealthValue() <= 0);

        return $this->battleWinner();
    }

    private function battleWinner(): InitialCharacter
    {
        if ($this->firstOpponent->getHealthValue() <= 0) {
            return $this->setWinner($this->firstOpponent);
        } else {
            return $this->setWinner($this->secondOpponent);
        }
    }

    private function setWinner(InitialCharacter $winner): InitialCharacter
    {
        return $this->winner = $winner;
    }

    public function getWinner(): InitialCharacter
    {
        return $this->winner;
    }
}