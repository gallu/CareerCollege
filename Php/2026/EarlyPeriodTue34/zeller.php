<?php  // zeller.php

/*
 * 年月日から曜日を求める
 *
 * @param int $y 年
 * @param int $m 月
 * @param int $d 日
 * @return string 日～土までの文字列(曜日)
 */
function zeller($y, $m, $d) {    
    // ただし、1月と2月は、前年のそれぞれ13月・14月として扱う
    if ($m === 1 || $m === 2) {
        $m = $m + 12;
        $y --;
    }
    //
    $h = 
        (
            $y 
            + floor($y/4) 
            - floor($y/100) 
            + floor($y/400) 
            + floor((13*$m+8)/5)
            + $d
        ) % 7;
    // var_dump($h);

    $weeks = ["日","月","火","水","木","金","土"];

    return $weeks[$h];
}

// $y = 2026;
// $m = 6;
// $d = 30;
// echo "{$y}年{$m}月{$d}日は... ";

// $w = zeller($y, $m, $d);
// echo $w, "曜日です。";
