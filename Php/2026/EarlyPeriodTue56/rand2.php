<?php  // rand2.php
declare(strict_types=1);

// ユニーク(一意)な文字列 の生成
$id = bin2hex(random_bytes(16));
echo "{$id} <br>";
$id = base64_encode(random_bytes(16));
echo "{$id} <br>";
// UUID
$uuid = rtrim(shell_exec("uuidgen -r"));
echo "{$uuid} <br>";

// 使っちゃだめ！！ 絶対！！
$id = uniqid();
echo "{$id} <br>";
$id = uniqid();
echo "{$id} <br>";

$id = md5(uniqid((string)mt_rand(), true));
echo "{$id} <br>";
$id = md5(uniqid((string)mt_rand(), true));
echo "{$id} <br>";

// 推測不可能性 の文字列 の生成
$id = bin2hex(random_bytes(24));
echo "{$id} <br>";
$id = base64_encode(random_bytes(24));
echo "{$id} <br>";
