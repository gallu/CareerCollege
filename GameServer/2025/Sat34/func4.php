<?php  // func4.php

function hoge() {
    // 使うな
    // やめとけ
    var_dump($GLOBALS["global_num"]);
}

function foo() {
    // 死んでも殺しても殺されても何があっても絶対使うな
    // 天変地異が起ころうとも何があっても絶対にゼッタイにやめとけ
    global  $global_num;
    var_dump($global_num);
}

$global_num = 123;
hoge();
foo();
