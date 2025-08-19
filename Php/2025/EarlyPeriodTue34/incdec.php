<?php  // incdec.php

$i = 0;
echo "i is {$i} <br>";

$i = $i + 1;
echo "i is {$i} <br>";

$i += 1;
echo "i is {$i} <br>";

++ $i; // 加算子(インクリメント): 前置
echo "i is {$i} <br>";

$i ++; // 加算子(インクリメント): 後置
echo "i is {$i} <br>";

//
-- $i; // 減算子(デクリメント): 前置
echo "i is {$i} <br>";

$i --; // 減算子(デクリメント): 後置
echo "i is {$i} <br>";

$i -= 1;
echo "i is {$i} <br>";
