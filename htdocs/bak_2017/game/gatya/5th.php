<?php
// 5th.php
function  get_card() {
    //
    $base = 0;
    $rand = mt_rand(0, 99);
    // コモン：70%
    $base += 70;
    if ($base > $rand) {
        return 'コモン';
    }
    // レア：15%
    $base += 15;
    if ($base > $rand) {
        return 'レア';
    }
    // Sレア：10%
    $base += 10;
    if ($base > $rand) {
        return 'Sレア';
    }
    // SSレア：4%
    $base += 4;
    if ($base > $rand) {
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

