<?php  // date1.php
declare(strict_types=1);

// Unixタイムスタンプ, UNIX時間, POSIX time, エポック秒
// 1970-01-01 00:00:00 からの経過秒
$t = time();
var_dump($t);
echo "<br>";

//
$ds = date(DATE_ATOM, $t);
echo "{$ds} <br>";
// 現在時刻ならこっちでよい
$ds = date(DATE_ATOM);
echo "{$ds} <br>";

$ds = date(DATE_COOKIE);
echo "{$ds} <br>";

$ds = date("Y-m-d H:i:s");
echo "{$ds} <br>";


