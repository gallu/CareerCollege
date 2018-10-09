<?php // time_class.php

$date_obj = new DateTime();
echo $date_obj->format('Y-m-d H:i:s');
echo "<br>\n";
$date_obj->add(new DateInterval('P1D'));
echo $date_obj->format('Y-m-d H:i:s');
echo "<br>\n";

$date_i_obj = new DateTimeImmutable();
echo $date_i_obj->format('Y-m-d H:i:s');
echo "<br>\n";
$o2 = $date_i_obj->add(new DateInterval('P1D'));
echo $date_i_obj->format('Y-m-d H:i:s');
echo "<br>\n";
echo $o2->format('Y-m-d H:i:s');
echo "<br>\n";


