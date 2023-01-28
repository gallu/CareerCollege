<?php   // calendar.php

require_once(__DIR__ . "/common.php");

// パラメタを取得
$ym = strval($_GET["ym"] ?? "");
//var_dump($ym);

// 対象年月の確定
if ($ym === "") {
    // 今月
    $d_obj = new DateTime();
} else {
    // 指定された年月
    try {
        $d_obj = new DateTime("{$ym}-01");
    } catch(\Throwable $e) {
        // 日付がおかしかったので「今月」にする
        $d_obj = new DateTime();
    }
}
$year = $d_obj->format("Y");
$month = $d_obj->format("F");
//var_dump($year, $month);

// 対象年月の「１日～末日」までを把握
$d_start = new DateTimeImmutable("first day of {$month} {$year} today");
$d_end = new DateTimeImmutable("last day of {$month} {$year} noon");
//
$interval = new DateInterval('P1D');
//var_dump($d_start, $d_end);
// 前月と翌月を把握
$d_before = $d_start->sub(new DateInterval('P1M'));
$d_after = $d_start->add(new DateInterval('P1M'));
//var_dump($d_before, $d_start, $d_after);
//
$range = new DatePeriod($d_start, $interval ,$d_end);

//
$data = [];

// 「始まる曜日」の分、前に空白をあける
for($i = 0; $i < intval($d_start->format("w")); ++$i) {
    $data[] = "";
}
/*
$data = []; // 日
$data = [""]; // 月
$data = ["", ""]; // 火
$data = ["", "", ""]; // 水
$data = ["", "", "", ""]; // 木
$data = ["", "", "", "", ""]; // 金
$data = ["", "", "", "", "", ""]; // 土
*/

foreach($range as $d_obj) {
    //$data[] = $d_obj->format("Y-m-d");
    $data[] = $d_obj->format("d");
}
//var_dump($data);

// 出力
?><!doctype html>
<a href="./calendar.php?ym=<?php echo rawurlencode($d_before->format("Y-m")); ?>">＜＜前月</a> |
<?php echo h($year); ?>年 <?php echo h($month); ?> のカレンダー
| <a href="./calendar.php?ym=<?php echo rawurlencode($d_after->format("Y-m")); ?>">翌月 ＞＞</a>
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









