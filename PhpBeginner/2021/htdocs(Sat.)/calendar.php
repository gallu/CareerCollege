<?php   // calendar.php
/*
 * カレンダー(関数版)
// https://dev2.m-fr.net/アカウント名/calendar.php
 */

// XSS対策用関数
function h($s) {
    return htmlspecialchars($s, ENT_QUOTES);
}

// パラメタを取得
$y = intval($_GET['y']  ??  0);
$m = intval($_GET['m']  ??  0);
//var_dump($y, $m);
if ( false === checkdate($m, 1, $y) ) {
    // 現在日時を入れる
    $t = time();
    $y = intval(date('Y', $t));
    $m = intval(date('m', $t));
}
//var_dump($y, $m);
//
$start = strtotime("first day of {$y}-{$m}");
$end = strtotime("last day of {$y}-{$m}");
// 前月と翌月の把握
$before = strtotime("-1 month", $start);
$before_y = date('Y', $before);
$before_m = date('m', $before);
//
$after = strtotime("+1 month", $start);
$after_y = date('Y', $after);
$after_m = date('m', $after);

//
$t = $start;
$days = [];
// 対象年月の１日の「曜日」の把握
//echo date('D, l, N, w', $start);
$w = intval(date('w', $start));
for($i = 0; $i < $w; ++$i) {
    //$days[] = '';
    $days[] = [];
}
//
while($t <= $end) {
    //$days[] = date('Y-m-d', $t);
    $wk = [];
    $wk['day'] = date('d', $t);
    $wk['total_date'] = date('z', $t);
    $days[] = $wk;
    $t += 86400; // 1日(24*60*60)
}
//var_dump($days);
?>
<!doctype html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>カレンダー</title>
</head>
<body>
  <?php  echo h($y); ?>年 <?php  echo h($m); ?>月 のカレンダー<br>
<a href="./calendar.php?y=<?php echo rawurlencode($before_y); ?>&m=<?php echo rawurlencode($before_m); ?>">前月</a>　
<a href="./calendar.php?y=<?php echo rawurlencode($after_y); ?>&m=<?php echo rawurlencode($after_m); ?>">翌月</a><br>
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
foreach($days as $k => $d) {
    if (0 === ($k % 7)) {
        echo "<tr>\n";
    }
    echo '<td>';
    if ([] !== $d) {
        echo h($d['day']) , '<br>(', h($d['total_date']) , ')';
    }
}
?>
</table>

</body>
</html>



