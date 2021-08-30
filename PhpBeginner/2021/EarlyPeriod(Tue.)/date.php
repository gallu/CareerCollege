<?php   // date.php
//  https://dev2.m-fr.net/アカウント名/date.php

//
echo  date(DATE_ATOM) , "<br>\n";
echo  date(DATE_COOKIE) , "<br>\n";
echo  date(DATE_ISO8601) , "<br>\n";
echo  date(DATE_RFC7231) , "<br>\n";
echo  date('Y/m/d H:i:s') , "<br>\n";

//
$t = time();
var_dump($t);
echo "<br>\n";
//
echo  date('Y/m/d H:i:s', time()) , "<br>\n";
echo  date('Y/m/d H:i:s', 10000) , "<br>\n";
echo  date('Y/m/d H:i:s', -100000) , "<br>\n";

//
$t = strtotime('August 15th, 2014');
var_dump($t);
echo "<br>\n";
echo  date('Y/m/d H:i:s', $t) , "<br>\n";
//
$t = strtotime('8/15/2014');
var_dump($t);
echo "<br>\n";
echo  date('Y/m/d H:i:s', $t) , "<br>\n";

/*
August 15th, 2014
August 15, 2014
8/15/2014
8/15/14
*/
