<?php // lq6.php
/*
問
現在時刻の「１日後」を出力するコードを書きなさい。
フォーマットは「年月日時分秒」が含まれていればどんなフォーマットでもよい、とします。
 */
$t = strtotime("+1 day");
echo date(DATE_ATOM, $t);

echo date(DATE_ATOM, strtotime("+1 day"));

$add_days = 1;
$t = strtotime("+{$add_days} day");
echo date(DATE_ATOM, $t);

//
$t = time();
$t += 60*60*24;
echo date(DATE_ATOM, $t);

$t = time() + 60*60*24;
echo date(DATE_ATOM, $t);

echo date(DATE_ATOM, time() + 60*60*24);
