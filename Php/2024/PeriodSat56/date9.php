<?php // date9.php

// XXX 一か月後、は「やっちゃだめ！！！」
$dobj = new DateTime();
$dobj->add( new DateInterval("P1M") );
echo $dobj->format("Y-m-d"), "<br>\n";

$t = strtotime("+1 month");
echo date("Y-m-d", $t) , "<br>\n";

echo "<br> \n";

//
$dobj = new DateTime("2025-01-31");
$dobj->add( new DateInterval("P1M") );
echo $dobj->format("Y-m-d"), "<br>\n";

$t = strtotime("2025-01-31 +1 month");
echo date("Y-m-d", $t) , "<br>\n";

// $t = time();
// $t += 86400 * ???; // 1カ月を秒数で
