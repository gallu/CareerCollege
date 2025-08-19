<?php  // Q6.php

echo "<pre>";
/*
変数 $arr_1 に、空の配列を代入します。
random_int(0, 100) で作られた乱数を一つ、 $arr_1 に追加します。
print_rで $arr_1 の内容を出力しなさい。
 */
$arr_1 = [];
$arr_1[] = random_int(0, 100);
print_r($arr_1);

/*
変数 $arr_2 に、空の配列を代入します。
random_int(0, 100) で作られた乱数を5つ、 $arr_2 に追加します。
print_rで $arr_2 の内容を出力しなさい。
 */
$arr_2 = [];
$arr_2[] = random_int(0, 100);
$arr_2[] = random_int(0, 100);
$arr_2[] = random_int(0, 100);
$arr_2[] = random_int(0, 100);
$arr_2[] = random_int(0, 100);
print_r($arr_2);

$arr_2 = [];
for($i = 0; $i < 5; ++$i) {
    $arr_2[] = random_int(0, 100);
}
print_r($arr_2);

/*
変数 $arr_2 に、空の配列を代入します。
random_int(0, 100) で作られた乱数を5つ、 for文を使って、$arr_2 に追加します。
print_rで $arr_2 の内容を出力しなさい。
 */
$arr_2 = [];
for($i = 0; $i < 5; ++$i) {
    $arr_2[] = random_int(0, 100);
}
print_r($arr_2);

/*
以下の関数を作成しなさい
関数名: makePoint
引数: 1つ
処理:
    変数 $arr に、空の配列を代入します。
    random_int(0, 100) で作られた乱数を[引数]個、 for文を使って、$arr に追加します。
戻り値: 処理で作成された $arr の値

上述関数を使って「引数に3を与えたときの値」を取得してprint_rで出力しなさい。
また、上述関数を使って「引数に5を与えたときの値」を取得してprint_rで出力しなさい。
 */
function makePoint($times) {
    $arr = [];
    for($i = 0; $i < $times; ++$i) {
        $arr[] = random_int(0, 100);
    }
    return $arr;
}

$r = makePoint(3);
print_r($r);

$r = makePoint(5);
print_r($r);
