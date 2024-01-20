<?php  // lq4.php
/*
問
二次元配列を作ります。
「乱数を５つ」を１つの配列とし、それを5つ作成します。
5*5で、25個の乱数が必要になります。
乱数は random_int() で作成しなさい。範囲は0から9999の範囲とします。

PHPを動かしたら、上述の二次元配列をCSVでダウンロードできるコードを作成しなさい。
CSVのイメージは以下のようになります(数値は簡易的に全部１にしてあります)。

1,1,1,1,1
1,1,1,1,1
1,1,1,1,1
1,1,1,1,1
1,1,1,1,1

ダウンロードするCSVファイル名は「rand.csv」としなさい。
 */
ob_start();

$data = [];
for($i = 0; $i < 5; ++$i) {
    $datum = [];
    for($j = 0; $j < 5; ++$j) {
        $datum[] = random_int(0, 9999);
    }
    $data[] = $datum;
}
// var_dump($data);

header("Content-type: text/csv");
header("Content-Disposition: attachment; filename=rand.csv");

$stdout = fopen('php://output', 'w');
foreach($data as $datum) {
    fputcsv($stdout, $datum);
}

fclose($stdout);
