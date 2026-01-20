<?php  // unique_string.php

/* 「一意の」「推測不能な」文字列を作る */

// 何があっても絶対に使うな！！！！！
$id = uniqid();
echo "{$id} <br>\n";
$id = uniqid(mt_rand(), true);
echo "{$id} <br>\n";
$id = md5(uniqid(mt_rand(), true));
echo "{$id} <br>\n";

// 使うのはこっち
$id = bin2hex(random_bytes(24));
echo "{$id} <br>\n";
$id = base64_encode(random_bytes(24));
echo "{$id} <br>\n";
// あまり好ましくない
$id = hash("SHA256", random_bytes(24));
echo "{$id} <br>\n";

// UUID
$uuid = trim(shell_exec("uuidgen -r"));
echo "{$uuid} <br>\n";

