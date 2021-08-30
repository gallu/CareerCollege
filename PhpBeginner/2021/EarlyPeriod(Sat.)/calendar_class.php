<?php   // calendar_class.php
/*
 * カレンダー(class版)
// https://dev2.m-fr.net/アカウント名/calendar_class.php
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
    $date_obj = new DateTime();
    $y = intval($date_obj->format('Y'));
    $m = intval($date_obj->format('m'));
}
//var_dump($y, $m);

//
$start_obj = new DateTime("first day of {$y}-{$m}");
$end_obj = new DateTime("last day of {$y}-{$m}");
//var_dump($start_obj, $end_obj);

// 前月と翌月の把握
$before_obj = clone $start_obj;
$before_obj = $before_obj->sub( new DateInterval('P1M') );
//var_dump($before_obj, $start_obj);
$before_y = $before_obj->format('Y');
$before_m = $before_obj->format('m');
//
$after_obj = clone $start_obj;
$after_obj = $after_obj->add( new DateInterval('P1M') );
$after_y = $after_obj->format('Y');
$after_m = $after_obj->format('m');
//var_dump($before_y, $before_m, $after_y, $after_m);

//
$days = [];
// 対象年月の１日の「曜日」の把握
//echo $start_obj->format('D, l, N, w');
$w = intval($start_obj->format('w'));
for($i = 0; $i < $w; ++$i) {
    $days[] = '';
}
//var_dump($days);

// DatePeriodで使うので、end_objに１秒足しておく
$end_obj->add( new DateInterval('PT1S') );
// 1日から最終日までの日付を順次把握
$date_period_obj = new DatePeriod($start_obj, new DateInterval('P1D'), $end_obj);
foreach($date_period_obj  as  $d_obj) {
    //$days[] = $d_obj->format('Y-m-d');
    $days[] = $d_obj->format('d');
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
<a href="./calendar_class.php?y=<?php echo rawurlencode($before_y); ?>&m=<?php echo rawurlencode($before_m); ?>">前月</a>　
<a href="./calendar_class.php?y=<?php echo rawurlencode($after_y); ?>&m=<?php echo rawurlencode($after_m); ?>">翌月</a><br>
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
    echo h($d);
}
?>
</table>

</body>
</html>





