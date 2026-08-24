<?php  // misoka.php


function misoka($y, $m) {
    switch ($m) {
        case 2:
            // でも400で割り切れたらうるう年
            // でも100で割り切れたらうるう年じゃない
            // 4で割り切れたらうるう年
            // 上述以外ならうるう年じゃない
            if ( ($y%400) === 0 ) {
                $misoka = 29;
            } elseif ( ($y%100) === 0 ) {
                $misoka = 28;
            } elseif ( ($y%4) === 0 ) {
                $misoka = 29;
            } else {
                $misoka = 28;
            }
            break;
        case 4:
        case 6:
        case 9:
        case 11:
            $misoka = 30;
            break;
        case 1:
        case 3:
        case 5:
        case 7:
        case 8:
        case 10:
        case 12:
            $misoka = 31;
            break;
        default:
            $misoka = 0;
            break;
    }

    return $misoka;
}


// $y = 2000;
// $m = 2;

// $misoka = misoka($y, $m);

// echo "{$y}年{$m}月の晦日は{$misoka}";


