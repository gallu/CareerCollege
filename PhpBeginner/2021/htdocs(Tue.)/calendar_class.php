<?php   // calendar_class.php
/*
 * カレンダー(class版)
 */
//  https://dev2.m-fr.net/アカウント名/calendar_class.php
// 引数(パラメタ)を取得する
$y = intval($_GET['y'] ?? '0');
$m = intval($_GET['m'] ?? '0');
// 入力が有効でなければ「当年当月」とする
if (false === checkdate($m, 1, $y)) {
    $d_obj = new DateTime();
    $y = $d_obj->format('Y');
    $m = $d_obj->format('m');
}
//var_dump($y, $m);

// 指定年月の「１日」と「末日」の把握
$start_obj = new DateTime("first day of {$y}-{$m}");
$end_obj = new DateTime("last day of {$y}-{$m}");
//var_dump($start_obj, $end_obj);

// 「前月」と「翌月」の把握
$before = clone $start_obj;
$before->sub( new DateInterval('P1M') );
//var_dump($before, $start_obj);
$after = clone $start_obj;
$after->add( new DateInterval('P1M') );
//var_dump($after, $start_obj);
$before_y = $before->format('Y');
$before_m = $before->format('m');
$after_y = $after->format('Y');
$after_m = $after->format('m');

// 「１日の曜日」に合わせてから文字を入れて調整する
echo $start_obj->format('D, l, N, w') , "<br>\n";
$w = intval($start_obj->format('w'));
$data = [];
for($i = 0; $i < $w; ++$i) {
    //$data[] = '';
    $data[] = [];
}
//var_dump($data);

// XXX このままだと末日がひっかからないので、１秒加算
$end_obj->add( new DateInterval('PT1S') );
// １日～末日までの日付の配列を作る
$p_obj = new DatePeriod($start_obj, new DateInterval('P1D'), $end_obj);
foreach($p_obj  as  $d_obj) {
    //$data[] = $d_obj->format('Y-m-d');
    $wk = [ 'day' => $d_obj->format('d'), 'week' => $d_obj->format('l') ];
    $data[] = $wk;
}
//var_dump($data);
//
$count = (7 - (count($data) % 7)) % 7;
for($i = 0; $i < $count; ++$i) {
    $data[] = [];
}


// XSS対策用関数
function h($s) {
    return htmlspecialchars($s, ENT_QUOTES);
}

?>
<!doctype html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>カレンダー</title>
<style>
.Sunday {
    color: #ff0000;
}
.Saturday {
    color: #0000ff;
}
</style>

</head>
<body>
<?php echo h($y); ?>年<?php echo h($m); ?>月のカレンダー<br>
<a href="./calendar_class.php?y=<?php echo rawurlencode($before_y); ?>&m=<?php echo rawurlencode($before_m); ?>">前月</a>
<a href="./calendar_class.php?y=<?php echo rawurlencode($after_y); ?>&m=<?php echo rawurlencode($after_m); ?>">次月</a>
<table border="1">
<tr>
  <th class="Sunday">日  <th>月  <th>火  <th>水  <th>木  <th>金  <th class="Saturday">土
<?php
foreach($data  as  $k => $d) {
    if (0 === ($k % 7)) {
        echo "<tr>";
    }
    $w = $d['week'] ?? '';
    echo "<td class='{$w}'>";
    if (true === isset($d['day'])) {
        echo $d['day'];
    }
}
?>
</table>
</body>
</html>