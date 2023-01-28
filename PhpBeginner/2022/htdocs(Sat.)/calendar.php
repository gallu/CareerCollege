<?php   // calendar.php

require_once("common.php");

//
$ym = strval($_GET["ym"] ?? "");
//var_dump($ym);

if ($ym !== "") {
    // 入力があったら、その年月を使う
    try {
        $d_obj = new DateTime("{$ym}-1");
    } catch(Throwable $e) {
        // 入力がおかしかったら、今月にする
        $d_obj = new DateTime();
    }
} else {
    // 今月の、年と月を取得
    $d_obj = new DateTime();
}

// 対象年月の情報を取得
$year = $d_obj->format("Y");
$month = $d_obj->format("F");

// 1～末日まで
$d_start = new DateTimeImmutable("first day of {$month} {$year} today");
$d_end = new DateTimeImmutable("last day of {$month} {$year} noon");
$interval = new DateInterval("P1D"); // １日間隔で
// echo $d_start->format(DATE_ATOM) , "<br>";
// echo $d_end->format(DATE_ATOM) , "<br>";

// 「前月」と「翌月」を把握する
$d_before = $d_start->sub(new DateInterval("P1M"));
$d_after = $d_start->add(new DateInterval("P1M"));
// echo $d_before->format(DATE_ATOM) , "<br>";
// echo $d_after->format(DATE_ATOM) , "<br>";

//
$dp = new DatePeriod($d_start, $interval, $d_end);

/*
if (1日が日曜日なら)
    $data = [];
if (1日が月曜日なら)
    $data = [""];
if (1日が火曜日なら)
    $data = ["",""];
if (1日が水曜日なら)
    $data = ["","",""];
if (1日が木曜日なら)
    $data = ["","","",""];
if (1日が金曜日なら)
    $data = ["","","","",""];
if (1日が土曜日なら)
    $data = ["","","","","",""];
*/
//
$data = [];
for($i = 0; $i < intval($d_start->format("w")); ++$i) {
    // 先頭に詰め物をする
    $data[] = "";
}

foreach($dp as $d_obj) {
    //echo $d_obj->format("Y-m-d") , "<br>";
    $data[] = $d_obj->format("d");
}
//var_dump($data);

// 出力
?><!doctype html>
<a href="./calendar.php?ym=<?php echo rawurlencode($d_before->format("Y-m")); ?>">＜＜前月＜＜</a>
    <?php echo h($year); ?> - <?php echo h($month); ?>
<a href="./calendar.php?ym=<?php echo rawurlencode($d_after->format("Y-m")); ?>">＞＞翌月＞＞</a><br>
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
