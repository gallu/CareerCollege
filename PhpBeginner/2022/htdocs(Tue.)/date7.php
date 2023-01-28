<?php   // date7.php

$ds = "2022-07-41";
echo "{$ds} <br>";

$t = strtotime($ds);
var_dump($t);
echo "<br>";

try {
    $d_obj = new DateTime($ds);
    var_dump($d_obj);
    echo "<br>";
} catch(\Throwable $e) {
    var_dump($e->getMessage());
}

