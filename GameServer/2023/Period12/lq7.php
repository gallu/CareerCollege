<?php  // lq7.php
/*
問
次の関数を作成しなさい

関数名 nextDate
    引数 $i
    処理 「現在時刻に、引数の日数を足した」日付を取得
    戻り値 「「現在時刻に、引数の日数を足した」日付」の文字列(フォーマットは DATE_ATOM とする)

また、上述関数をつかって「１日後の日付」「３０日後の日付」を取得して、echoまたはvar_dump()で表示しなさい。
 */
function nextDate($i) {
    // 処理 「現在時刻に、引数の日数を足した」日付を取得
    // 戻り値 「「現在時刻に、引数の日数を足した」日付」の文字列(フォーマットは DATE_ATOM とする)
    return date(DATE_ATOM, time() + ($i * 60*60*24));
}

$s = nextDate(1);
var_dump($s);

$s = nextDate(30);
var_dump($s);
