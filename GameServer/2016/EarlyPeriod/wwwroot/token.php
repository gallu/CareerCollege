<?php
// 「種」を作る
$seed = 'test'; // ダメな例
$seed = time(); // ダメな例
$seed = microtime(true); // ダメな例
$seed = random_bytes(128); // よい例(PHP7以降)

// tokenを作る
$token = md5($seed);
echo $token , "\n";

$token = sha1($seed);
echo $token , "\n";

$token = hash('sha512', $seed);
echo $token , "\n";

// 本命
$token = trim(`uuidgen -r`);
echo $token , "\n";

