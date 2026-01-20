<?php  // loot_box_draw.php
// https://dev2.m-fr.net/アカウント名/loot_box_draw.php

require_once __DIR__ . "/loot_box_data.php";
// require_once __DIR__ . "/loot_box_draw_function_1.php";
// require_once __DIR__ . "/loot_box_draw_function_2.php";
// require_once __DIR__ . "/loot_box_draw_function_3.php";
require_once __DIR__ . "/loot_box_draw_function_4.php";

// がちゃを引く
$card = lootBoxDraw($loot_box_data);
var_dump($card);
