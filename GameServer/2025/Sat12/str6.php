<?php  // str6.php

$s = "  hoge  foo  ";
echo ">>{$s}<<<br>\n";

$t_s = trim($s);
echo ">>{$t_s}<<<br>\n";

$rt_s = rtrim($s);
echo ">>{$rt_s}<<<br>\n";

$lt_s = ltrim($s);
echo ">>{$lt_s}<<<br>\n";
