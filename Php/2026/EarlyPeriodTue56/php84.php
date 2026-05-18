<?php   // php84.php

// 括弧なしでの new 式のチェーン
class HogeChain {
    public function func() {
        echo __METHOD__, "<br>\n";
    }
}
// 旧来
(new HogeChain())->func();
// 今回
new HogeChain()->func();

//
var_dump( PHP_INT_MAX );
var_dump( PHP_INT_MAX + 1 );

$r = bcadd((string)PHP_INT_MAX, "1");
var_dump($r);

$num = new BcMath\Number(PHP_INT_MAX);
$r = $num + 1;
var_dump((string)$r);

// 暗黙的な nullable パラメータ 
function funcNullable(HogeChain $obj = null) {
}
