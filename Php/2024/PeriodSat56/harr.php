<?php  // harr.php

$harr_1 = [
    'key 1' => 1,
    'key 2' => 2,
];
$harr_2 = [
    'key 2' => 222,
    'key 3' => 333,
];
var_dump($harr_1, $harr_2);

$harr = $harr_1 + $harr_2;
var_dump($harr);

$harr = array_merge($harr_1, $harr_2);
var_dump($harr);

$harr = [...$harr_1, ...$harr_2];
var_dump($harr);
