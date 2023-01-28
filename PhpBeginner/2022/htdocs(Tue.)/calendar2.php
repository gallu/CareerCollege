<?php   // calendar2.php

require_once(__DIR__ . "/common.php");

// パラメタを取得
$ym = strval($_GET["ym"] ?? "");
//var_dump($ym);

// 対象年月の確定
if ($ym === "") {
    // 今月
    $t = time();
} else {
    // 指定された年月
    $t = strtotime("{$ym}-01");
    if ($t === false) {
        // 日付がおかしかったので「今月」にする
        $t = time();
    }
}
//var_dump($t, date("Y-m-d", $t));
$year = date("Y", $t);
$month = date("F", $t);
//var_dump($year, $month);

// 対象年月の「１日～末日」までを把握
$t_start = strtotime("first day of {$month} {$year} today");
$t_end = strtotime("last day of {$month} {$year} noon");
//var_dump($t_start, date("Y-m-d", $t_start));
//var_dump($t_end, date("Y-m-d", $t_end));
//
$interval = 86400; // 60*60*24(１日の秒数)
// 前月と翌月を把握
$t_before = $t_start - 86400;
$t_after = $t_end + 86400;
//var_dump(date("Y-m-d", $t_before), date("Y-m-d", $t_after));

//
$data = [];
// 「始まる曜日」の分、前に空白をあける
for($i = 0; $i < intval(date("w", $t_start)); ++$i) {
    $data[] = "";
}
//var_dump(date("w", $t_start), $data);

$t_wk = $t_start; // 作業用の変数を使う
while($t_wk <= $t_end) {
    $data[] = date("d", $t_wk);
    $t_wk += $interval;
}
//var_dump($data);
// 出力
?><!doctype html>
<a href="./calendar2.php?ym=<?php echo rawurlencode(date("Y-m", $t_before)); ?>">＜＜前月</a> |
<?php echo h($year); ?>年 <?php echo h($month); ?> のカレンダー
| <a href="./calendar2.php?ym=<?php echo rawurlencode(date("Y-m", $t_after)); ?>">翌月 ＞＞</a>
<br>
<br>
<table border="1">
<tr>
   <th>日
   <th>月
   <th>火
   <th>水
   <th>木
   <th>金
   <th>土
<?php
    foreach($data as $k => $d) {
        if (($k % 7) === 0) {
            echo "<tr>";
        }
        echo "<td>" , h($d);
    }
?>
</table>




