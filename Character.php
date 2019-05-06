<?php

declare(strict_types=1);

namespace Game;

abstract class Character implements Player
{
    protected $health;
    protected $damage;
    protected $force;

    public function __construct()
    {
        $this->health = rand(50, 100);
        $this->damage = rand(20, 40);
        $this->force = rand(1, 5);
    }

    public function health(): int
    {
        return $this->health;
    }

    public function damage(): int
    {
        return $this->damage;
    }

    public function force(): int
    {
        return $this->force;
    }
}