<?php  // dice.php
//  http://dev2.m-fr.net/アカウント名/dice.php

function monoDice($s) {
//var_dump($s);
    // dを小文字に揃える
    $s = strtolower($s);
//var_dump($s);

    // dの前後で分割する
    $array = explode('d', $s);
//var_dump($array);
    // 固定値なら値をそのまま返す
    if (1 === count($array)) {
        return intval($array[0]);
    }

    // 実際にダイスをふる
    $r = 0;
    for($i = 0; $i < $array[0]; ++$i) {
        $r += mt_rand(1, $array[1]);
    }
    //
    return $r;
}
//
function dice($s) {
    // + で切り分ける
    $awk = explode('+', $s);
    //
    $total = 0;
    foreach($awk as $wk) {
        $total += monoDice( trim($wk) );
    }
    //
    return $total;
}

/*
// 使用例
echo dice('1d6') , "<br>\n";
echo dice('2d10') , "<br>\n";
echo dice('3D8') , "<br>\n";
//
echo dice('1d4 + 1d6+1d8') , "<br>\n";
echo dice('2d6+4') , "<br>\n";
*/



