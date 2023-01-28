<?php   // calendar2.php

require_once("common.php");

//
$ym = strval($_GET["ym"] ?? "");
//var_dump($ym);

if ($ym !== "") {
    // 入力があったら、その年月を使う
    $dt = strtotime("{$ym}-1");
    if ($dt === false) {
        // 入力がおかしかったら、今月にする
        $dt = time();
    }
} else {
    // 今月の、年と月を取得
    $dt = time();
}
//echo date(DATE_ATOM, $dt);

// 対象年月の情報を取得
$year = date("Y", $dt);
$month = date("F", $dt);
//var_dump($year, $month);

// 1～末日まで
$t_start = strtotime("first day of {$month} {$year} today");
$t_end = strtotime("last day of {$month} {$year} noon");
$interval = 86400; // １日間隔で(24*60*60)
//echo date(DATE_ATOM, $t_start) , "<br>";
//echo date(DATE_ATOM, $t_end) , "<br>";

// 「前月」と「翌月」を把握する
$t_before = $t_start - 86400;
$t_after = $t_end + 86400;
//echo date(DATE_ATOM, $t_before) , "<br>";
//echo date(DATE_ATOM, $t_after) , "<br>";

//
$data = [];
for($i = 0; $i < intval(date("w", $t_start)); ++$i) {
    // 先頭に詰め物をする
    $data[] = "";
}

/*
// 荒っぽい書き方(カレンダー専用)
for($i = 1; $i <= intval(date("d", $t_end)); ++$i) {
    //$data[] = strval($i);
    $data[] = sprintf("%02d", $i);
}
*/

// 期間start から 期間endまで
$t_wk = $t_start;
while($t_wk <= $t_end) {
    $data[] = date("d", $t_wk);
    $t_wk += $interval;
}

//var_dump($data);

// 出力
?><!doctype html>
<a href="./calendar.php?ym=<?php echo rawurlencode(date("Y-m", $t_before)); ?>">＜＜前月|</a>
    <?php echo h($year); ?> - <?php echo h($month); ?>
<a href="./calendar.php?ym=<?php echo rawurlencode(date("Y-m", $t_after)); ?>">|翌月＞＞</a><br>
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
    echo "<td>{$d}";
}
?>
</table>
