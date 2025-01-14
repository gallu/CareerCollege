<?php  // date7.php

// 明日から7日間の日付を１日ごとに欲しい
$dobj = new DateTime();
for ($i = 0; $i < 7; ++$i) {
    // XXX まずこの書き方はしない
    $dobj->setTimestamp( $dobj->getTimestamp() + 86400 );
    echo $dobj->format("Y-m-d"), "<br>\n";
}
echo "<br>\n";

// 別の書き方
$dobj = new DateTime();
for ($i = 0; $i < 7; ++$i) {
    // 普通、こっち
    $dobj->add( new DateInterval("P1D") );
    echo $dobj->format("Y-m-d"), "<br>\n";
}
