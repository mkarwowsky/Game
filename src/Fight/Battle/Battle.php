<?php

namespace Mkarwowski\Game\Fight\Battle;

use Mkarwowski\Game\Character\InitialCharacter;

class Battle
{
    protected InitialCharacter $firstOpponent;
    protected InitialCharacter $secondOpponent;
    protected InitialCharacter $currentAttacker;

    public function __construct(InitialCharacter $firstOpponent, InitialCharacter $secondOpponent)
    {
        $this->firstOpponent = $firstOpponent;
        $this->secondOpponent = $secondOpponent;
    }

    public function getFirstOpponent(): InitialCharacter
    {
        return $this->firstOpponent;
    }

    public function getSecondOpponent(): InitialCharacter
    {
        return $this->secondOpponent;
    }

    public function calculateWhoIsAttackingFirst(): void
    {
        $chanceOfAttackFirstOpponent = mt_rand(1, $this->firstOpponent->getAgilityValue());
        $chanceOfAttackSecondOpponent = mt_rand(1, $this->secondOpponent->getAgilityValue());
        if ($chanceOfAttackFirstOpponent > $chanceOfAttackSecondOpponent)
            $this->currentAttacker = $this->firstOpponent;
        else
            $this->currentAttacker = $this->secondOpponent;
    }

    public function calculateHealthAfterAttack(): void
    {
        $this->calculateWhoIsAttackingFirst();
        if ($this->currentAttacker === $this->firstOpponent) {
            $this->secondOpponent->setHealthValue($this->secondOpponent->getHealthValue() - $this->currentAttacker->getAttackValue());
        } else
            $this->firstOpponent->setHealthValue($this->firstOpponent->getHealthValue() - $this->currentAttacker->getAttackValue());
//        if ($this->currentAttacker === $this->firstOpponent) {
//            $this->secondOpponent->setHealthValue($this->secondOpponent->getHealthValue() - $this->firstOpponent->getAttackValue());
//        } else {
//            $this->firstOpponent->setHealthValue($this->firstOpponent->getHealthValue() - $this->secondOpponent->getAttackValue());
//        }
    }

    public function conductBattle(): InitialCharacter
    {
            $this->calculateHealthAfterAttack();

        if ($this->firstOpponent->getHealthValue() <= 1) {
            print_r($this->secondOpponent);
            return $this->secondOpponent;
        } else {
            print_r($this->firstOpponent);
            return $this->firstOpponent;
        }
    }
}