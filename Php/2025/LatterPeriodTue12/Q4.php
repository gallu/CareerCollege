<?php  // Q4.php
//  https://dev2.m-fr.net/アカウント名/Q4.php
/*
次の条件を満たす PHP のコードを書きなさい。
    価格をあらわす 整数を 3 つ 持つ変数 $prices を作成すること
    価格は次の 3 つとする
        800
        1200
        2500
    データは 配列 として作成すること
    作成した $prices の中身を print_r を使って出力すること
*/
$prices = [
    800,
    1200,
    2500,
];
print_r($prices);

/*
次の条件を満たす PHP のコードを書きなさい。
    書籍の情報を 1 冊分あらわす変数 $item を作成すること
    書籍の情報として、次の 2 つのデータを持たせること
        書籍名（name）："初めてのPHP"
        価格（price）：1200
    データは 連想配列 として作成すること
    作成した $item の中身を print_r を使って出力すること
*/
$item = [
    // key  =>  value  ,
    "name" => "初めてのPHP",
    "price" => 1200,
];
print_r($item);

/*
次の条件を満たす PHP のコードを書きなさい。
    書籍の情報を 複数冊まとめて管理する 変数 $items を作成すること
    各書籍は、次の 2 つのデータを持つものとする
        書籍名（name）
        価格（price）
    書籍は次の 2 冊とする
        「初めてのPHP」：1200 円
        「その次のPHP」：2400 円
    データは 配列の中に連想配列を入れる形 で作成すること
    作成した $items の中身を print_r を使って出力すること
*/
$items = [
    ["name" => "初めてのPHP", "price" => 1200],
    ["name" => "その次のPHP", "price" => 2400],
];
print_r($items);

/*
上で作成した $prices の値を合計するコードを書きなさい。
その際、array_sum などのPHP組み込み関数は使わないこと。
合計した値を、echoで表示しなさい。
*/
// $total = $prices[0] + $prices[1] + $prices[2];
// echo "{$total} \n";
$total = 0; // 初期化
foreach ($prices as $k => $v) {
    $total = $total + $v;
}
echo "{$total} \n";

/*
上で作成した $items の中の、priceの値を合計するコードを書きなさい。
その際、array_sum などのPHP組み込み関数は使わないこと。
合計した値を、echoで表示しなさい。
*/
$total = 0; // 初期化
foreach ($items as $k => $v) {
    // print_r($v["price"]);
    $total = $total + $v["price"];
}
echo "{$total} \n";


