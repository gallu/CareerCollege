<?php  // scope.php
declare(strict_types=1);

// 変数のスコープ
function func() {
    // XXX これはダメ
    //echo "{$i} <br>\n";
    // ギリギリこっち
    echo "{$GLOBALS['i']} <br>\n";
    // これはマジやめとけ
    global $i;
    echo "{$i} <br>\n";
    $i = 999;

    // XXX ブロックスコープではない orz
    {
        $v = 10;
        echo "{$v} <br>\n";
    }
    echo "{$v} <br>\n";
}
//
$i = 10;
func();
echo "global {$i} <br>\n";
 
