<?php // time.php
// http://dev2.m-fr.net/XXXX/time.php

$t = time();
echo $t;
echo "<br>\n";

$m = microtime(true);
echo $m;
echo "<br>\n";

$date_string = date('Y-m-d H:i:s', $t);
echo $date_string;
echo "<br>\n";

$date_string = date(DATE_ATOM, $t);
echo $date_string;
echo "<br>\n";

//
$t2 = strtotime($date_string);
echo $t2;
echo "<br>\n";







