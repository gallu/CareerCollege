<?php   // bit.php

echo " 7 | 11 : ";
echo 7 | 11 , "<br>\n";
echo decbin(7) , "<br>";
echo decbin(11) , "<br>";
echo decbin(7 | 11) , "<br>";

echo "<br>";
echo " 7 & 11 : ";
echo 7 & 11 , "<br>\n";
echo decbin(7) , "<br>";
echo decbin(11) , "<br>";
echo decbin(7 & 11) , "<br>";

// XXX これはダメな例
echo "<br>";
var_dump(true | false);
var_dump(true & false);





