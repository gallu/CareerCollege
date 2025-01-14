<?php  // token1.php

for ($i = 0; $i < 5; ++$i) {
    // 何があっても使っちゃだめ！！！！！
    $token = uniqid();
    echo "{$token} <br>\n";
}

// 「一意なトークン」であれば
for ($i = 0; $i < 5; ++$i) {
    // UUID
    $token = rtrim(`uuidgen -r`);
    echo "{$token} <br>\n";
}

// 一意+推測困難性を求めるなら
$len = 24; // 大体これくらいあればいいとされてる
// 扱いやすいけどちょいと長い
for ($i = 0; $i < 5; ++$i) {
    $token = bin2hex(random_bytes($len));
    echo "{$token} <br>\n";
}
// 少し短くなるけど記号がネックになるかも
for ($i = 0; $i < 5; ++$i) {
    $token = base64_encode(random_bytes($len));
    echo "{$token} <br>\n";
}


