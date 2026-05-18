<?php  // func8.php

// globalスコープの変数へのアクセス方法

function func1() {
    // 基本「使ってはいけません」
    echo "in func1 ", $GLOBALS["global_i"] , "<br>\n";
}

function func2() {
    // 何があっても絶対に何が何でも「使うな！！！！！」
    global $global_i;
    echo "in func2 ", $global_i , "<br>\n";    
}

$global_i = 123;
func1();
func2();
