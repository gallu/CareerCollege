<?php  // op.php

var_dump(1 === 1);
var_dump(1 === 2);
echo "<br>";

var_dump("abc" === "abc");
var_dump("abc" === "ABC");
echo "<br>";

var_dump(1 !== 1);
var_dump(1 !== 2);
echo "<br>";

var_dump(5 > 10);
var_dump(5 < 10);
echo "<br>";

// 超 / 未満
var_dump(5 > 5);
var_dump(5 < 5);
echo "<br>";

// 以上 / 以下
var_dump(5 >= 5);
var_dump(5 <= 5);
echo "<br>";
