<?php  // lq5.php
/*
問
次の関数を作成しなさい

関数名 nextDate
    引数 $i
    処理 「現在時刻に、引数の日数を足した」日付を取得
    戻り値 「「現在時刻に、引数の日数を足した」日付」の文字列(フォーマットは　DATE_ATOM　とする)    

また、上述関数をつかって「１日後の日付」「３０日後の日付」を取得して、echoまたはvar_dump()で表示しなさい。
 */
function nextDate($i) {
    $t = time();
    $t = $t + ($i * 60*60*24);
    $ds = date(DATE_ATOM, $t);
    // var_dump($ds);
    return $ds;

    $t = strtotime("+{$i} days");
    $ds = date(DATE_ATOM, $t);
    // var_dump($ds);
    return $ds;
}
//
$ds = nextDate(1);
var_dump($ds);

$ds = nextDate(30);
var_dump($ds);
