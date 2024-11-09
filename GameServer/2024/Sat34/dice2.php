<?php  // dice2.php
declare(strict_types=1);

function dice($bs) {
    // dで切断して、回数とダイス種類を把握する
    $arr = explode("d", $bs);
    // var_dump($arr);

    //
    $times = (int)$arr[0]; // 繰り返す回数
    $dice_type = (int)$arr[1]; // サイコロの種類
    // var_dump($times, $dice_type);
    
    $total = 0;
    // 指定された回数、繰り返す
    for ($i = 0; $i < $times; ++$i) {
        // 指定されたn面のサイコロを振る
        $r = random_int(1, $dice_type);
        // echo "{$r}, ";
        // 合算
        $total += $r;
    }

    //
    return $total;
}
/*
$r = dice("2d6");
var_dump($r);
echo "<br>";
$r = dice("4d4");
var_dump($r);
echo "<br>";
*/