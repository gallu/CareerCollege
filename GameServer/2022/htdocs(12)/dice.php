<?php   // dice.php
// ダイス関数
function dice($base_string) {
    // アルファベットを小文字にそろえる
    $base_string = strtolower($base_string);

    // 入力を d 文字で分解
    //var_dump($base_string);
    $r = explode("d", $base_string);
    //var_dump($r);

    // 「ふる回数」と「ダイスの種類」を把握
    $times = intval($r[0]);
    $dice_type = intval($r[1]);
//var_dump($times, $dice_type);

    //times回、ループする
    $total = 0;
    for($i = 0; $i < $times; ++$i) {
        // dice_type面ダイスをふる
        $d = random_int(1, $dice_type);
//var_dump($d);
        // 合計していく
        //$total = $total + $d;
        $total += $d;
    }

    //
    return $total;
}
/*
//
$r = dice("2d6");
echo "2d6 is {$r} <br>";
//
$r = dice("3D8");
echo "3d8 is {$r} <br>";
//
$r = dice("1d4");
echo "1d4 is {$r} <br>";
*/
