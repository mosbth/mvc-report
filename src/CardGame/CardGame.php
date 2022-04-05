<?php

namespace App\CardGame;

class CardGame
{
    public function getCard(): int
    {
        return random_int(2, 14);
    }

    public function increment(): int
    {
        //$num =
        // work with session
        return random_int(2, 14);
    }
}
