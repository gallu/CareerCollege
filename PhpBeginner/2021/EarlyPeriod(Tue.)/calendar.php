<?php  // calendar.php
/*
 * カレンダー(関数版)
 */
//  https://dev2.m-fr.net/アカウント名/calendar.php
// 引数(パラメタ)を取得する
$y = intval($_GET['y'] ?? '0');
$m = intval($_GET['m'] ?? '0');
// 入力が有効でなければ「当年当月」とする
if (false === checkdate($m, 1, $y)) {
    $t = time();
    $y = date('Y', $t);
    $m = date('m', $t);
}    

// 指定年月の「１日」と「末日」の把握
$t_start = strtotime("first day of {$y}-{$m}");
$t_end = strtotime("last day of {$y}-{$m}");

$data = [];
// 「前月」と「翌月」の把握
$before = strtotime('-1 month', $t_start);
$after = strtotime('+1 month', $t_start);
//echo date('Y-m-d', $before) , "<br>\n";
//echo date('Y-m-d', $after) , "<br>\n";
$before_y = date('Y', $before);
$before_m = date('m', $before);
$after_y = date('Y', $after);
$after_m = date('m', $after);

// 「１日の曜日」に合わせてから文字を入れて調整する
echo date('D, l, N, w', $t_start) , "<br>\n";
$w = intval(date('w', $t_start));
for($i = 0; $i < $w; ++$i) {
    $data[] = '';
}
// １日～末日までの日付の配列を作る
$t = $t_start;
while($t <= $t_end) {
    //$data[] = date('Y-m-d', $t);
    $data[] = date('d', $t);
    $t += 86400;
}
//var_dump($data);

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
</head>
<body>
<?php echo h($y); ?>年<?php echo h($m); ?>月のカレンダー<br>
<a href="./calendar.php?y=<?php echo rawurlencode($before_y); ?>&m=<?php echo rawurlencode($before_m); ?>">前月</a>
<a href="./calendar.php?y=<?php echo rawurlencode($after_y); ?>&m=<?php echo rawurlencode($after_m); ?>">次月</a>
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
foreach($data  as  $k => $d) {
    if (0 === ($k % 7)) {
        echo "<tr>";
    }
    echo "<td>{$d}";
}
?>
</table>
</body>
</html>