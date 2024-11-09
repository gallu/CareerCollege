<?php  // arr5.php

$arr = [1, 2, 3];
$arr[4] = 4;
print_r($arr);

if (array_is_list($arr) === true) {
    echo "ちゃんとした配列です。<br>";
} else {
    echo "順番が崩れてます orz<br>";
}

$arr2 = array_values($arr);
print_r($arr2);

if (array_is_list($arr2) === true) {
    echo "ちゃんとした配列です。<br>";
} else {
    echo "順番が崩れてます orz<br>";
}
