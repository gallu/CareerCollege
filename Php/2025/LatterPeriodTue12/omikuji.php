<?php  // omikuji.php
// https://dev2.m-fr.net/アカウント名/omikuji.php

$omikuji_box = [
    "大吉",
    "中吉",
    "吉",
    "小吉",
    "末吉",
    "凶",
    "大凶",
];
// var_dump( $omikuji_box );

$count = count($omikuji_box);
$idx = random_int(0, $count-1);
$omikuji = $omikuji_box[$idx];

echo "あなたの運勢は {$omikuji} です";

