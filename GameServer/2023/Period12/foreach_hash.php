<?php  // foreach_hash.php

$arr = [
    "HP" => 100,
    "MP" => 150,
    "exp" => 1234,
];
print_r($arr);

foreach($arr as $key => $value) {
    echo "{$key}: {$value} \n";
}
