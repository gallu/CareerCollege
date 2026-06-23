<?php  // dice_test.php

require_once __DIR__ . "/dice.php";

$r = dice("2d6");
echo "r is {$r} <br>";

$r = dice("5d10");
echo "r is {$r} <br>";

$r = dice("2D6");
echo "r is {$r} <br>";
