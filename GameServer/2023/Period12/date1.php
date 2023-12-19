<?php  // date1.php

$t = time();
var_dump($t);

echo date(DATE_ATOM, $t) , "<br>\n";
echo date(DATE_ATOM) , "<br>\n";
echo date("Y年m月d日 h時i分s秒") , "<br>\n";
