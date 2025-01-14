<?php  // date6.php

// 明日から7日間の日付を１日ごとに欲しい
$t = time();
for ($i = 0; $i < 7; ++$i) {
    $t += 86400; // 1日を秒数で
    echo date("Y-m-d", $t), "<br>\n";
}
echo "<br>\n";

// 別の書き方(の前提)
$t = strtotime("+1 days");
echo date("Y-m-d", $t), "<br>\n";
echo "<br>\n";
// 別の書き方
for ($i = 1; $i < 8; ++$i) {
    $t = strtotime("+{$i} days");
    echo date("Y-m-d", $t), "<br>\n";
}
echo "<br>\n";
