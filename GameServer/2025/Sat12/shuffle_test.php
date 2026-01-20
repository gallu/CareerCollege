<?php  // shuffle_test.php
//  https://dev2.m-fr.net/アカウント名/shuffle_test.php

require_once __DIR__ . "/shuffle.php";

$base = [
    0, 1, 2, 3, 4, 5, 6, 7, 8, 9,
];

$shuffled = FYshuffle($base);
print_r($shuffled);
