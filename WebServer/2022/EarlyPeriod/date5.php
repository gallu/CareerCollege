<?php  // date5.php
declare(strict_types=1);

//
//$t = time();
$t = strtotime('2022-06-07 00:00:00');
for($i = 0; $i < 7; ++$i) {
    echo date('Y-m-d H:i:s', $t) , "<br>";
    $t += 86400;
}
echo "<br>";

//
$start = new DateTime('today');
$interval = new \DateInterval('P1D');
$end = (new DateTime('today'))->add(new \DateInterval('P7D'));

$d_range = new DatePeriod($start, $interval, $end);
foreach($d_range as $d) {
    echo $d->format('Y-m-d H:i:s'), "<br>";
}