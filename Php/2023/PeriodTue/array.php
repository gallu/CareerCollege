<?php  // array.php

$arr = [1, 22, 333, 4444];
var_dump($arr);
echo "<br>\n";

foreach($arr as $key => $value) {
    echo "{$key}: {$value} <br> \n";
}
