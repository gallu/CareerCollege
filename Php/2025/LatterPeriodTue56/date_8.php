<?php  // date_8.php
// 現在時刻の把握
$t = time();

// 一週間後の把握
$t2 = $t + (24*60*60) * 7;

echo date(DATE_ATOM, $t2);
