<?php

namespace App\Dice;

use App\Dice\Dice;

require_once 'vendor/autoload.php';

$die = new Dice();

echo "hi\n";

echo $die->roll() . "\n";

echo "ho\n";
