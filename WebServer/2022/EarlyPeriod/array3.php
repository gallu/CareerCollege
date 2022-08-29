<?php   // array3.php
declare(strict_types=1);

//
$awk = [];
//
array_push($awk, 1);
var_dump($awk);
//
$awk[] = 2;
var_dump($awk);

//
echo "<br>";
$awk = [1, 2, 3, 4, 5, 6];
$pop = array_pop($awk);
var_dump($pop, $awk);

echo "<br>";
$awk = [1, 2, 3, 4, 5, 6];
$shift = array_shift($awk);
var_dump($shift, $awk);
