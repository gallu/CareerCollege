<?php   // ope.php
// https://dev2.m-fr.net/アカウント名/ope.php

//
$i = random_int(1, 50);
$j = random_int(1, 50);

// 四則演算
$k = $i + $j;
echo "{$i} + {$j} = {$k} <br>\n";
echo $i . " + " . $j . " = " . $k . " <br>\n";
echo $i , " + " , $j , " = " , $k , " <br>\n";
//
$k = $i / $j;
echo "{$i} / {$j} = {$k} <br>\n";
//
$k = $i % $j;
echo "{$i} % {$j} = {$k} <br>\n";

// 比較演算子
$i = random_int(1, 5);
$j = random_int(1, 5);
//
$b = $i < $j;
echo "{$i} < {$j} ";
var_dump($b);
echo "<br>\n";
//
$b = $i === $j;
echo "{$i} === {$j} ";
var_dump($b);
echo "<br>\n";

// 論理演算子 と ビット演算子
//
$b = (1 === 1)||(2 === 3);
echo "(1 === 1)||(2 === 3) ";
var_dump($b);
echo "<br>\n";
// XXX このコードは基本的にNG
$b = (1 === 1)|(2 === 3);
echo "(1 === 1)|(2 === 3) ";
var_dump($b);
echo "<br>\n";

// XXX このコードは基本的にNG
$b = 1||2;
echo "1||2 ";
var_dump($b);
echo "<br>\n";
//
$b = 1|2;
echo "1|2 ";
var_dump($b);
echo "<br>\n";

