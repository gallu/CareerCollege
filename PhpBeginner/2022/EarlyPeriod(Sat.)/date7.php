<?php   // date7.php

//$s = "2022-7-1";
$s = "2022-13-1";
//
$t = strtotime($s);
var_dump($t);
echo "<br>";
//
try {
    $d_obj = new DateTime($s);
} catch(Throwable $e) {
    $d_obj = null;
}
var_dump($d_obj);
