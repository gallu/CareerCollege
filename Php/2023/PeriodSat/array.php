<?php  // array.php

$arr = [1, 2, 3];
var_dump($arr);
echo "<br>";

foreach($arr as $key => $value) {
    echo "{$key}: {$value} <br>";
}
