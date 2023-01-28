<?php   // loot_monte.php
//require_once("./loot_box1.php");
//require_once("./loot_box2.php");
//require_once("./loot_box3.php");
require_once("./loot_box4.php");

// テストで確認:モンテカルロ法
$times = 100000; // 繰り返す回数
$data = [];
for($i = 0; $i < $times; ++$i) {
    // がちゃを引く
    $card = loot_box($loot_set);
    // カウントする
    @$data[ $card["name"] ] ++;
}
//
arsort($data);
//var_dump($data);
foreach($data as $name => $num) {
    $p = $num / $times * 100;
    echo "{$name}: {$p}% <br>";
}
