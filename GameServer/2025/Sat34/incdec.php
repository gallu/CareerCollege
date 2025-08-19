<?php  // incdec.php

$i = 0;
echo "i: {$i} <br>";

// $i = $i + 1;
$i += 1;
echo "i: {$i} <br>";

$i ++;
echo "i: {$i} <br>";

++ $i;
echo "i: {$i} <br>";

echo "i:"
    , $i++ // 後置
    , ", "
    , ++$i // 前置
    , ","
    , $i
    , "<br>";


