<?php  // hash1.php

function hash_test($s) {
    var_dump($s);

    // 使っちゃだめ！！
    $h = md5($s);
    var_dump($h);
    $h = sha1($s);
    var_dump($h);

    // 今はまだこっちならOK
    $h = hash("sha256", $s);
    var_dump($h);
    $h = hash("sha512", $s);
    var_dump($h);

    echo "\n";
}

hash_test("abc");
hash_test("abb");
hash_test("abcd");
hash_test("abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyz");
