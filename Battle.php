<?php

declare(strict_types=1);

namespace Game;

class Battle
{
    private $players;

    public function __construct(Player ...$players)
    {
        $this->players = $players;
        foreach($players as $player) {

        }
    }

    public function fight()
    {
        foreach($this->players as $player) {

        }
    }

    private function round(Player ...$players)
    {
        // Select player one by one for fight
    }
}