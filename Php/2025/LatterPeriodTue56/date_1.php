<?php  // date_1.php

$t = time();
var_dump($t);
echo "<br>\n";

$ds = date("Y-m-d H:i:s", $t);
echo "{$ds} <br>\n";

// 時刻が「現在」なら第二引数が省略できる
$ds = date("Y-m-d H:i:s");
echo "{$ds} <br>\n";

// いろいろな定数がある
$ds = date(DATE_ATOM);
echo "{$ds} <br>\n";

$ds = date(DATE_COOKIE);
echo "{$ds} <br>\n";

$ds = date(DATE_RFC822);
echo "{$ds} <br>\n";

$ds = date(DATE_RSS);
echo "{$ds} <br>\n";
