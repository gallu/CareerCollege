<?php  // func1.php
// https://dev2.m-fr.net/アカウント名/func1.php

// 関数の定義
function 関数($引数) {
    var_dump($引数);
    
    return "戻り値";
}

// 関数の使用
$r = 関数(123);
var_dump($r);
