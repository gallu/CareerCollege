<?php
// 4th.php
// XXX これは「駄目！！」な実装
function  get_card() {
    // コモン：70%
    if (70 > mt_rand(0, 99)) {
        return 'コモン';
    }
    // レア：15%
    if (15 > mt_rand(0, 99)) {
        return 'レア';
    }
    // Sレア：10%
    if (10 > mt_rand(0, 99)) {
        return 'Sレア';
    }
    // SSレア：4%
    if (4 > mt_rand(0, 99)) {
        return 'SSレア';
    }
    // SSSレア：1%
    return 'SSSレア';
}

// モンテカルロ法によるテスト
$max = 1000000;
$data = [];
for($i = 0; $i < $max; ++$i) {
    @$data[get_card()] ++;
}
//var_dump($data);
foreach($data  as  $k => $v) {
   printf("%s\t:\t%.4f<br>\n", $k, $v / $max * 100);
}
