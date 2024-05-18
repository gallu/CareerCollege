<?php  // hash_array.php

$harr = [
    "key 1" => 111,
    "key 2" => "value",
    "key 3" => true,
];
print_r($harr);
var_dump($harr);

var_dump($harr["key 1"]);
$harr["key 1"] = 987;
var_dump($harr["key 1"]);

$harr["new key"] = 123;
print_r($harr);

unset($harr["key 2"]);
print_r($harr);

$cnt = count($harr);
var_dump($cnt);
echo "<br>";

foreach ($harr as $k => $v) {
    echo "{$k}: {$v} <br>";
}




