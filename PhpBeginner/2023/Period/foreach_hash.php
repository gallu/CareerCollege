<?php  // foreach_hash.php

$arr = [
	"name" => "furu",
	"age" => 21,
	"address" => "japan",
];
print_r($arr);

foreach($arr as $key => $val) {
	echo "{$key}: {$val} <br>\n";
}

$arr2 = [
	"国語" => 85,
	"数学" => 100,
	"英語" => 60,
	"理科" => 80,
];
$total = 0;
foreach($arr2 as $key => $val) {
	$total += $val;
}
$p = $total / count($arr2);
echo "平均点: " , $p;


