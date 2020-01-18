<?php  // DnD.php

require_once('dice.php');

$str = dice('3d6');
$dex = dice('3d6');
$int = dice('3d6');
$wiz = dice('3d6');
$con = dice('3d6');
$chr = dice('3d6');
//
$hp = dice('3d8');
//
echo "HP: {$hp}<br>\n";
echo "STR: {$str}<br>\n";
echo "DEX: {$dex}<br>\n";
echo "INT: {$int}<br>\n";
echo "WIZ: {$wiz}<br>\n";
echo "CON: {$con}<br>\n";
echo "CHR: {$chr}<br>\n";
