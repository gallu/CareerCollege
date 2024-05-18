<?php  // func7.php
declare(strict_types=1);

/*
 * グローバル変数使っちゃ ダメ!! ゼッタイ!!
 */
function hoge() {
    // ギリギリまだマシといえなくもない
    var_dump($GLOBALS['global_num']);
    $GLOBALS['global_num'] = 456;
}

function foo() {
    // これは本当に絶対に何があろうともダメ!!!
    global $global_num;
    var_dump($global_num);
    $global_num = 789;
}

$global_num = 123;
echo "num is {$global_num} <br>";

hoge();
echo "<br>num is {$global_num} <br>";

foo();
echo "<br>num is {$global_num} <br>";
