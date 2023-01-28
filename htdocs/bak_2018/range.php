<?php

$total_num = 31;
$play_num = 6;

//
$range = range(1, $total_num);
shuffle($range);

//
$group = [];
$g = 0;
for($i = 0; $i < $total_num; ++$i) {
    @$group[$i % 6][] = $range[$i];
}
//var_dump($group);

//
$k = 'A';
foreach($group as $v) {
    sort($v);
    echo $k++ , ': ', implode(', ', $v), "\n";
}

