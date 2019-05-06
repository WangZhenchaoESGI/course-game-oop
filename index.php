<?php

use Game\Battle;
use Game\Highlander;
use Game\Human;
use Game\Sauron;
use Game\Wizard;
use Game\Zombie;

require __DIR__.'vendor/autoload.php';

$fight = new Battle(...[
        new Zombie(),
        new Zombie(),
        new Zombie(),
        new Zombie(),
        new Zombie(),
        new Zombie(),
        new Zombie(),
        new Highlander(),
        new Sauron(),
        new Wizard(),
        new Wizard(),
        new Wizard(),
        new Human(),
        new Human(),
        new Human(),
        new Human(),
        new Human(),
    ]
);