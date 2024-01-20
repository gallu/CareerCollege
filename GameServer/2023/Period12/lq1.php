<?php  // lq1.php
/*
問
「現在の年月日時分秒」を文字列で出力しなさい。
フォーマットは「年月日時分秒」が含まれていればどんなフォーマットでもよい、とします。
 */
// echo date(DATE_ATOM);
echo date("Y-m-d H:i:s");
echo date("Y年m月d日 H時i分s秒");

$t = time();
echo date(DATE_ATOM, $t);

$t = strtotime("now");
echo date(DATE_ATOM, $t);

echo date(DATE_ATOM, strtotime("now"));

$dobj = new DateTime();
echo $dobj->format(DATE_ATOM);

$dobj = new DateTime("now", new DateTimeZone("asia/tokyo"));
echo $dobj->format(DATE_ATOM);
