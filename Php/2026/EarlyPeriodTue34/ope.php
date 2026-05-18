<?php  // ope.php

// 比較演算子(等価演算子)
var_dump( 1 === 1 );
var_dump( 1 === 2 );
echo "<br>";

var_dump( "abc" === "abc" );
var_dump( "abc" === "xyz" );
var_dump( "abc" === "ABC" );
echo "<br>";

// 不等価演算子
var_dump( 1 !== 1 );
var_dump( 1 !== 2 );
echo "<br>";

var_dump( "abc" !== "abc" );
var_dump( "abc" !== "xyz" );
var_dump( "abc" !== "ABC" );
echo "<br>";

// 不等号
var_dump( 1 < 2 );
var_dump( 1 > 2 );
echo "<br>";

// 超える / 未満
var_dump( 1 < 1 );
var_dump( 1 > 1 );
echo "<br>";

// 以上 / 以下
var_dump( 1 <= 1 );
var_dump( 1 >= 1 );
echo "<br>";
