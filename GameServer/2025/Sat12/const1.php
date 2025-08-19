<?php  // const1.php

// 定数の定義 その１
define("HOGE", "hoge string");
var_dump( HOGE );
// HOGE = "new string"; // Parse error: syntax error, ...
// define("HOGE", "hoge string new"); // Warning: Constant HOGE already defined

// 定数の定義 その2
const FOO = 123456;
var_dump( FOO );
