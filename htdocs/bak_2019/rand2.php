<?php  // rand2.php

function dn($n) {
    return mt_rand(1, $n);
}
//
function d6() {
    return dn(6);
}
function d8() {
    return dn(8);
}

//
$str = d6() + d6() + d6();
$int = d6() + d6() + d6();
$dex = d6() + d6() + d6();
$con = d6() + d6() + d6();
$hp = d8();
//
echo "HP: {$hp}<br>\n";
echo "強さ：{$str}<br>\n";
echo "教養：{$int}<br>\n";
echo "敏捷：{$dex}<br>\n";
echo "頑健：{$con}<br>\n";




