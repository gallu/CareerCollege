<?php  // hash.php
/*
hash関数
hash値

hash検索
正真性

衝突

不可逆性
*/

function test($base) {
    var_dump($base);

    // つかっちゃダメ
    $h = md5($base);
    var_dump($h);
    $h = sha1($base);
    var_dump($h);

    //　今は、まだ、こっちならOK
    $h = hash("sha256", $base);
    var_dump($h);
    $h = hash("sha512", $base);
    var_dump($h);
}

test("like");
test("abc");
test("a");
test("abcdefghijklmnopqrstuvwxyz");
test("abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyz");
