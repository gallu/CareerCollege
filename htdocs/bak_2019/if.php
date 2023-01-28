<?php  // if.php
// http://dev2.m-fr.net/XXXX/if.php

// 判定ロール 2D6
$r = mt_rand(1, 6) + mt_rand(1, 6);
//$r = 2; // デバッグ用

if (12 === $r) {
    echo "クリティカル!!<br>\n";
} else if (2 === $r) {
    echo "ファンブル orz orz<br>\n";
} elseif ($r >= 8) {
    echo "判定成功!!<br>\n";
} else {
    echo "判定失敗 orz<br>\n";
}



