<?php  // lq1.php
/*
問）
「今この瞬間の年月日」を文字列で作成せよ。変数 $d に格納しなさい。
また、$dをechoで出力しなさい。
年月日のフォーマットについては、「年、月、日、時、分、秒」がすべてそろっていれば、どのようなフォーマットでもよい。
*/
$obj = new DateTime();
$d = $obj->format(DATE_ATOM);
echo $d , "\n";

// $t = time();
// $d = date(DATE_ATOM, $t);
$d = date(DATE_ATOM);
echo $d , "\n";

$d = date("Y-m-d H:i:s");
echo $d , "\n";

echo DATE_ATOM , "\n";
