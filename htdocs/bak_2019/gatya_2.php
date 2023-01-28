<?php // gatya_2.php

/*
 荒っぽいやりかた
 百分率なら有効、千分率くらいまでなら、まぁ
 */
function gatya($cards) {
	$data = [];
	foreach($cards as $c) {
		for($i = 0; $i < $c['probability']; ++$i) {
			$data[] = $c;
		}
	}
	//var_dump($data);
	//
	$key = array_rand($data); // 1枚、乱択
	$val = $data[$key];
	//var_dump($val);
	return $val;
}

$cards = [
	['id' => 1,'name' => 'スライム', 'probability' => 50],
	['id' => 2,'name' => 'オーク', 'probability' => 20],
	['id' => 3,'name' => 'グリフォン', 'probability' => 15],
	['id' => 4,'name' => 'ドラゴン', 'probability' => 10],
	['id' => 5,'name' => 'ラストモンスター', 'probability' => 5],
];
//
/*
$val = gatya($cards);
echo "{$val['name']} ({$val['id']}) を取得";
*/

// モンテカルロ法でテスト
$total = [];
$test_num = 100000;
for($i = 0; $i < $test_num; ++$i) {
	$val = gatya($cards);
	@$total[$val['id']] ++;
}
ksort($total);
//var_dump($total);
foreach($total as $k => $v) {
	echo "{$k} => " , $v / $test_num * 100, "%<br>\n";
}

















