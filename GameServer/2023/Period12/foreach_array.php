<?php  // foreach_array.php

$arr = ["aaa", "bbb", "ccc"];
print_r($arr);

foreach($arr as $key => $value) {
    echo "{$key}: {$value} \n";
}
