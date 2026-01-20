<?php  // getLastDayOfMonth.php
/*
関数名: getLastDayOfMonth
引数: ２つ: 年($year), 月($month)
処理
  4で割り切れたら閏年、割り切れなかったら平年
  ただし、100で割り切れる場合は平年
  ただし、400で割り切れる場合は閏年
戻り値
  指定された年月の、末日の日付
 */
function getLastDayOfMonth($year, $month) {
    /* 閏年か？を判定する */
    if ($year%400 === 0) {
        // ただし、400で割り切れる場合は閏年
        $uruu = true;
    } elseif ($year%100 === 0) {
        // ただし、100で割り切れる場合は平年
        $uruu = false;
    } elseif ($year%4 === 0) {
        // 4で割り切れたら閏年
        $uruu = true;
    } else {
        // 割り切れなかったら平年
        $uruu = false;
    }
    
    /* 各月の末日を取得する */
    switch ($month) {
        case 1:        case 3:        case 5:        case 7:
        case 8:        case 10:       case 12:
            return 31;

        case 4:        case 6:        case 9:        case 11:
            return 30;
        
        case 2:
            if ($uruu === true) {
                return 29;
            }
            return 28;

        default:
            return null;
    }
}

// var_dump( getLastDayOfMonth(2025, 1) );
// var_dump( getLastDayOfMonth(2000, 2) );
// var_dump( getLastDayOfMonth(1900, 2) );

