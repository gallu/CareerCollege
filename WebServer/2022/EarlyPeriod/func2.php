<?php   // func2.php
declare(strict_types=1);

function hoge(int $i) : void
{
    //$i = $i * 2;
    $i = $i * $GLOBALS['j'];

    // やめた方がいい
    global $j;
    $i = $i * $j;
    $j = 888;
}

//
$i = 10;
$j = 2;
hoge($i);
var_dump($i, $j);
