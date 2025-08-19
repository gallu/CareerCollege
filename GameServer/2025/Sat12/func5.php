<?php  // func5.php

echo "<pre>";

/*
空配列 data を作成しなさい。
配列 data に、for文を使って「1*1」「2*2」...「5*5」までの計算結果を順番に入れなさい。
配列 data を print_r で出力しなさい。
*/
$data = [];
for($i = 1; $i <= 5; ++$i) {
    $r = $i * $i;
    $data[] = $r;
}
print_r($data);

/*
以下の処理を行う関数「makeArray」を作成しなさい。
引数: 1つ(処理参照)
処理
    空配列 data を作成しなさい。
    for文で、1から"引数"までのループ処理をします。forの処理は以下の通り
        for文の変数(通常、$i)の値を2乗する
        配列 data に、2乗した値を追加する
戻り値: 配列 data

makeArray()を使って、配列を作成しなさい(引数の値は任意);
得られた配列を、print_rを使って出力しなさい。
*/
function makeArray($v) {
    $data = [];
    for ($i  = 1; $i <= $v; ++$i) {
        $r = $i ** 2;
        $data[] = $r;
    }
    return $data;
}
//
$r = makeArray(6);
print_r($r);

