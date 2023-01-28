<?php   // date5.php

//
$d_start = new DateTime();
echo $d_start->format("Y-m-d H:i:s") , "<br>";
//
$d_end = new DateTime();
$d_end->add(new DateInterval("P7D"));
echo $d_end->format("Y-m-d H:i:s") , "<br>";
//
$interval = new DateInterval('P1D');
//
$range = new DatePeriod($d_start, $interval ,$d_end);

//
echo "<br>";
foreach($range as $d_obj) {
    echo $d_obj->format("Y-m-d H:i:s") , "<br>";
}
