<?php  // arr2.php
echo "<pre>";

$arr = [1, 2, 3];
print_r($arr);

// 要素を１つ取り出す
$i = $arr[1];
var_dump($i);
// 要素を1つ上書きする
$arr[0] = 111;
print_r($arr);
// 要素を(後ろに)追加する
$arr[] = 456;
print_r($arr);

// 要素の個数を数える
$num = count($arr);
echo "num is {$num} \n";

// 配列を反復処理する(配列をぶんまわす)
foreach ($arr as $k => $v) {
	echo "{$k}: {$v} \n";
}

// 反復処理(ダメなやりかた)
$count = count($arr);
for($k = 0; $k < $count; ++$k) {
	$v = $arr[$k];
	echo "{$k}: {$v} \n";
}
