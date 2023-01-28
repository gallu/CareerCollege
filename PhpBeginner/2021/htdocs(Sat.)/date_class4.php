<?php   // date_class4.php
//
$start = new DateTime('2021-6-1 00:00:00');
$end = new DateTime('2021-6-30 23:59:59');
$interval = new DateInterval('P1D');
//
$date_period_obj = new DatePeriod($start, $interval, $end);
//var_dump($date_period_obj);
//
foreach($date_period_obj  as  $d_obj) {
    echo $d_obj->format('Y/m/d'), "<br>\n";
}

//
echo "<br><br>\n";

//
$start = strtotime('2021-6-1 00:00:00');
$end = strtotime('2021-6-30 23:59:59');
$interval = 86400;
//
$t = $start;
while($t < $end) {
    echo date('Y/m/d', $t) , "<br>\n";
    $t += $interval;
}
//
echo "<br><br>\n";

//
echo date('Y/m/t', strtotime('2021-06-01')), "<br>\n";
echo date('Y/m/d', strtotime('last day of 2021-02')), "<br>\n";
//
$date_obj = new DateTime('2021-06-01');
echo $date_obj->format('Y/m/t'), "<br>\n";

$date_obj = new DateTime('last day of 2021-02');
echo $date_obj->format('Y/m/d'), "<br>\n";





