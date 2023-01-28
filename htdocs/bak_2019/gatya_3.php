<?php // gatya_3.php

$cards = [
	['id' => 1,'name' => 'スライム', 'probability' => 50],
	['id' => 2,'name' => 'オーク', 'probability' => 20],
	['id' => 3,'name' => 'グリフォン', 'probability' => 15],
	['id' => 4,'name' => 'ドラゴン', 'probability' => 10],
	['id' => 5,'name' => 'ラストモンスター', 'probability' => 5],
];

//
$sum = 0;
foreach($cards as $c) {
	$sum += $c['probability'];
}
$i = mt_rand(0, $sum - 1);

//
/*
if (0 <= $i && $i < 50) { // 50
	$val = ['id' => 1,'name' => 'スライム', 'probability' => 50];
} else if (50 <= $i && $i < 70) { // 20
	$val = ['id' => 2,'name' => 'オーク', 'probability' => 20];
} else if (70 <= $i && $i < 85) { // 15
	$val = ['id' => 3,'name' => 'グリフォン', 'probability' => 15];
} else if (85 <= $i && $i < 95) { // 10
	$val = ['id' => 4,'name' => 'ドラゴン', 'probability' => 10];
} else if (95 <= $i && $i < 100) { // 5
	$val = ['id' => 5,'name' => 'ラストモンスター', 'probability' => 5];
}
*/
/*
if (0 <= $i && $i < 50) { // 50
	$val = ['id' => 1,'name' => 'スライム', 'probability' => 50];
} else if (50 <= $i && $i < (50 + 20)) { // 20
	$val = ['id' => 2,'name' => 'オーク', 'probability' => 20];
} else if ((50 + 20) <= $i && $i < ((50 + 20) + 15)) { // 15
	$val = ['id' => 3,'name' => 'グリフォン', 'probability' => 15];
} else if (((50 + 20) + 15) <= $i && $i < (((50 + 20) + 15) + 10)) { // 10
	$val = ['id' => 4,'name' => 'ドラゴン', 'probability' => 10];
} else if ((((50 + 20) + 15) + 10) <= $i && $i < ((((50 + 20) + 15) + 10) + 5)) { // 5
	$val = ['id' => 5,'name' => 'ラストモンスター', 'probability' => 5];
}
*/
$val = null;
$p_base = 0;
foreach($cards as $c) {
    if ($p_base <= $i && $i < $p_base + $c['probability']) {
        $val = $c;
        break;
    }
    // else
    $p_base += $c['probability'];
}

//
echo "{$val['name']} ({$val['id']}) を取得";








