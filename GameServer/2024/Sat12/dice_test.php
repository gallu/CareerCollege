<?php  // dice_test.php

require_once  __DIR__ . "/dice.php";

// 振る
$base = [
    "2d6",
    "3d8",
    "2D6",
    "10",
];
foreach ($base as $d) {
    $r = dice($d);
    var_dump($r);
    echo "<br>\n";
}
