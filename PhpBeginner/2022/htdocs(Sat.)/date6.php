<?php   // date6.php

//
$start = new DateTime("2022/6/10"); // この日付から
$end = new DateTime("2022/6/15"); // この日付まで
$end->add(new DateInterval("PT1S"));
$interval = new DateInterval("P1D"); // １日間隔で
//
echo $start->format("Y-m-d H:i:s") , "<br>";
echo $end->format("Y-m-d H:i:s") , "<br>";
echo "<br>";
//
$dp = new DatePeriod($start, $interval, $end);
foreach($dp as $d_obj) {
    echo $d_obj->format("Y-m-d") , "<br>";
}
