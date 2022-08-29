<?php   // dice.php

//
function dice(string $d_string) : int {
    // 大文字のDは小文字のdに変換する
    $d_string = strtolower($d_string);
    
    // もし１文字目がdなら、先頭に１を加える
    if ($d_string[0] === "d") {
        $d_string = "1{$d_string}";
    }
    
    //　入ってきた文字から、「振る回数」と「ダイスの種類」を分離させる
    $awk = explode("d", $d_string);
    $times = intval($awk[0]);
    $dice_type = intval($awk[1]);
//var_dump($times, $dice_type);

    // 「振る回数」回ループ
    $total = 0;
    for($i = 0; $i < $times; ++$i) {
        // 「ダイスの種類」を振って、
        $num = random_int(1, $dice_type);
//var_dump($num);
        // 足す
        //$total = $total + $num;
        $total += $num;
    }
    //
    return $total;
}

/*
//
$r = dice("2d6");
echo "2d6 is {$r} <br>";
//
$r = dice("3d8");
echo "3d8 is {$r} <br>";
//
$r = dice("2D6");
echo "2D6 is {$r} <br>";
//
//$r = dice("50d6");
//echo "50d6 is {$r} <br>";
//
$r = dice("d6");
echo "d6 is {$r} <br>";
*/

/*
//
$r = dice("2d6+3");
echo "d6 is {$r} <br>";
//
$r = dice("2d6+3d8-4");
echo "d6 is {$r} <br>";
*/