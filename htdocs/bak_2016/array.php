<?php

$i = 100;
//var_dump($i);

$awk = array(10,20,30,40,50);
//var_dump($awk);

$awk = array(
    '大吉',
    '中吉',
    '小吉',
    '吉',
    '末吉',
    '凶',
    '大凶',
);
//var_dump($awk);
var_dump($awk[0]);
var_dump($awk[1]);
var_dump($awk[2]);

// ループ
foreach($awk as $k => $v) {
    echo 'おみくじ';
    echo $k;
    echo '番目の内容は...';
    echo $v;
    echo "<br>\n";
}

// 連想配列(hash配列)
$awk = array (
    'chemistry' => 80,
    'math'      =>  65,
    'national_lang' =>  79,
    'society'   =>  92,
    'english'   =>  45,
    'physics'   =>  66,
);
//var_dump($awk);


