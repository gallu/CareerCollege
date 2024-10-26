<?php  // type.php
declare(strict_types=1);

$i = 1;
$s = "1";
var_dump($i, $s);
echo "<br>\n";

var_dump($i == $s);
var_dump($i === $s);
echo "<br>\n";

$r = random_int(1, 6);
var_dump($r);
$r = random_int("1", "6");
var_dump($r);
echo "<br>\n";

