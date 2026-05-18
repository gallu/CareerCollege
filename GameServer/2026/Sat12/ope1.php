<?php  // ope1.php

var_dump( 1 === 1 );
echo "<br>";
var_dump( 1 === 2 );
echo "<br>";

var_dump( "abc" === "abc" );
echo "<br>";
var_dump( "abc" === "ABC" );
echo "<br>";

echo "<br>";

var_dump( 1 !== 1 );
echo "<br>";
var_dump( 1 !== 2 );
echo "<br>";
var_dump( "abc" !== "abc" );
echo "<br>";
var_dump( "abc" !== "ABC" );
echo "<br>";

echo "<br>";

var_dump( 1 < 2 );
echo "<br>";
var_dump( 1 > 2 );
echo "<br>";
// 超える / 未満
var_dump( 1 < 1 );
echo "<br>";
var_dump( 1 > 1 );
echo "<br>";
// 以上 / 以下
var_dump( 1 <= 1 );
echo "<br>";
var_dump( 1 >= 1 );
echo "<br>";

