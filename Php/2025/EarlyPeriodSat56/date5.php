<?php  // date5.php
// 「一か月後」は書いちゃだめ！！！
$t = strtotime("+1 month");
echo date(DATE_ATOM, $t), "<br>";

$t = strtotime("2025-06-21 +1 month");
echo date(DATE_ATOM, $t), "<br>";

$t = strtotime("2025-01-31 +1 month");
echo date(DATE_ATOM, $t), "<br>";

$t = strtotime("2025-01-31 +2 month");
echo date(DATE_ATOM, $t), "<br>";

$t = strtotime("2025-01-31 +1 month");
$ds = date(DATE_ATOM, $t);
$t = strtotime("{$ds} +1 month");
echo date(DATE_ATOM, $t), "<br>";

// (昔の)1日後の算出
$t = time() + (24*60*60);
echo date(DATE_ATOM, $t), "<br>";
// (昔の)一か月後じゃなくて30日の算出
$t = time() + (24*60*60)*30;
echo date(DATE_ATOM, $t), "<br>";
