<?php  // arr2.php

$arr = [];
print_r($arr);

$arr[] = 1;
print_r($arr);

$arr[] = 2;
$arr[] = 3;
print_r($arr);
echo "<br>";

echo $arr[1] , "<br>\n";

$arr[1] = 22222;
print_r($arr);
echo "<br>";

$arr[999] = 99999;
print_r($arr);
echo "<br>";

$count = count($arr);
echo "count is {$count} <br>";

foreach ($arr  as  $k => $v) {
    echo "{$k} : {$v} <br>";
}

