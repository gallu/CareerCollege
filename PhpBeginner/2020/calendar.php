<?php  // calendar.php
//  http://dev2.m-fr.net/アカウント名/calendar.php

// パラメタを取得
$ym = $_GET['ym'] ?? '';
//var_dump($ym);
//
$awk = explode('-', $ym);
//var_dump($awk);
if (checkdate(intval(@$awk[1]), 1, intval($awk[0]))) {
    $t = strtotime("{$awk[0]}-{$awk[1]}-1 00:00:00");
    $t = strtotime($awk[0] . '-' . $awk[1] . '-1 00:00:00');
} else {
    // 「今月」を把握する
    $t = time();
}
//$t = strtotime('2020-12-1');

// DateTimeクラスのコンストラクタ用の文字列の作成
$first_day_string = 'first day of ' . date('Y-m-d 00:00:00', $t);
$last_day_string = 'last day of ' . date('Y-m-d 23:59:59', $t);
//
$first_day = new DateTime($first_day_string);
$last_day = new DateTime($last_day_string);
//echo $first_day->format('Y-m-d') , "<br>\n";
//echo $last_day->format('Y-m-d') , "<br>\n";

// 「翌月」と「前月」の取得
$next_date = clone $first_day;
$next_date->add(new DateInterval('P1M'));
$before_date = clone $first_day;
$before_date->sub(new DateInterval('P1M'));
//echo $next_date->format('Y-m-d') , "<br>\n";
//echo $before_date->format('Y-m-d') , "<br>\n";

//
$obj = new DatePeriod($first_day, new DateInterval('P1D'), $last_day);

// 先頭の空白分を積む
$date_array = [];
$w = intval($first_day->format('w'));
for($i = 0; $i < $w; ++$i) {
    $date_array[] = '';
}
foreach($obj as $date) {
    //$date_array[] = $date->format('d(D)');
    $date_array[] = $date->format('d');
}
//var_dump($date_array); exit;

/*
0 (日曜)から 6 (土曜)
1月
2火
3水
*/
?>
<a href="./calendar.php?ym=<?php echo rawurlencode($before_date->format('Y-m')); ?>"> ＜＜ </a>　
<?php echo $first_day->format('Y-m'); ?>
　<a href="./calendar.php?ym=<?php echo rawurlencode($next_date->format('Y-m')); ?>"> ＞＞ </a><br>
<table border="1">
<tr>
  <th>Sun
  <th>Mon
  <th>Tue
  <th>Wed
  <th>Thu
  <th>Fri
  <th>Sat
<?php
foreach($date_array as $k => $v) {
    if (0 === ($k % 7)) {
        echo "<tr>\n";
    }
    echo "  <td>{$v}\n";
}
?>
</table>



