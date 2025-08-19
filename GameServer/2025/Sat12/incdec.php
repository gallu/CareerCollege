<?php  // incdec.php

$i = 0;
echo "i is {$i} <br>";

$i = $i + 1;
echo "i is {$i} <br>";

$i += 1;
echo "i is {$i} <br>";

$i ++; // 加算子(後置
echo "i is {$i} <br>";

++ $i; // 加算子(前置
echo "i is {$i} <br>";

echo "i is ", ++$i, ", ", $i++, ", {$i} <br>";

//
$i --; // 減算子
echo "i is {$i} <br>";

-- $i; // 減算子
echo "i is {$i} <br>";
