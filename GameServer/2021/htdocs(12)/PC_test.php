<?php  // PC_test.php
//  https://dev2.m-fr.net/アカウント名/PC_test.php
require_once( __DIR__ . '/PC.php');

$pc = new PC();
for($i = 0; $i < 5; ++$i) {
    $attack = random_int(0, 3); // 敵の命中の具合
    if (false === $pc->dodge($attack)) {
        $pc->damage( random_int(20, 70) );
        if (false === $pc->isLive()) {
            echo "死亡した orz<br>\n";
            break;
        }
    }
    $pc->heal( random_int(1, 20) );
}
//
$pc->debugPrint();




