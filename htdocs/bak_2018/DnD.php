<?php  // DnD.php

function d($base, $count) {
    $ret = 0;
    for($i = 0; $i < $count; ++$i) {
        $ret += mt_rand(1, $base);
    }
    return $ret;
}
//
function d6($count) {
    return d(6, $count);
}
function d8($count) {
    return d(8, $count);
}

$hp = d8(1);
echo "Hp: {$hp}<br>\n";

$str = d6(3);
echo "ストレングス: {$str}<br>\n";
$int = d6(3);
echo "インテリジェンス: {$int}<br>\n";
$wiz = d6(3);
echo "ウィズダム: {$wiz}<br>\n";
$dex = d6(3);
echo "デクスタリティ: {$dex}<br>\n";
$con = d6(3);
echo "コンスティテューション: {$con}<br>\n";
$chr = d6(3);
echo "カリスマ: {$chr}<br>\n";

