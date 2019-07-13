<?php // item_use_2.php

// http://dev2.m-fr.net/XXX/item_use_2.php

require_once('./PC.php');
require_once('./item_use_2_main.php');

//
$pc = new PC(500, 500);
$pc->output();

//
$m = [
	"HP+100",
	"MP+100",
	"HP+5",
	"HP+3d6",
	"MP+2d10+20",
	"HP+2d10,MP+3d6",
	"HP+10,MP+10",
	"HP+999,MP+999",
	"HP+-100,MP+200",
];
echo "回復<br>\n";
$macro = $m[ mt_rand(0, count($m) - 1) ];
echo $macro, "<br>\n";
item_use_2_main($pc, $macro);
$pc->output();












