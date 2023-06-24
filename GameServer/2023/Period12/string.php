<?php  // string.php

$num = 123;

echo "num is ";
echo $num;
echo ". <br>";

$str = "num is " . $num . ". <br>";
echo $str;

echo "num is " , $num , ". <br>";

$str = "num is {$num}. <br>";
echo $str;
