<?php // item_use_1.php
// http://dev2.m-fr.net/XXX/item_use_1.php

require_once('./PC.php');
require_once('./item_use_1_main.php');

//
$pc = new PC(500, 500);
$pc->output();

//
$item_no = mt_rand(1, 5);
echo "回復({$item_no})aa<br>\n";
item_use_1_main($pc, $item_no);
$pc->output();
