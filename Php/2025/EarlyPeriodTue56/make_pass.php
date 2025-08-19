<?php  // make_pass.php

function makePassword($passwordLen, $symbols_flg) {
    $base  = 'abcdefghijklmnopqrstuvwxyz';
    $base .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $base .= '0123456789';
    if (true === $symbols_flg) {
        $base .= "!\"#$%&'()*+,-./:;<=>?@[\\]^_`{|}~";
    }
    $len = strlen($base);

    // 上述文字列から「ランダムに passwordLen 文字」選択する
    $pass = "";
    for ($i = 0; $i < $passwordLen; ++$i) {
        $idx = random_int(0, $len-1);
        $pass .= $base[$idx];
    }

    return $pass;
}

$r = makePassword(12, false);
var_dump($r);
echo "<br>";
$r = makePassword(12, true);
var_dump($r);
