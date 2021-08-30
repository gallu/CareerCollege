<?php   // rand.php
declare(strict_types=1);

// 乱数
$r1 = mt_rand(0, 999); // 非推奨
$r2 = random_int(0, 999); // 推奨
var_dump($r1, $r2);

// ランダムな文字列(バイト列)
$rs = random_bytes(16);
//var_dump($rs);
$s1 = bin2hex($rs);
$s2 = base64_encode($rs);
var_dump($s1, $s2);

// 上の、hash
$h1 = hash('sha256', $rs);
$h2 = hash('sha512', $rs);
var_dump($h1, $h2);

// XXX 絶対に使っちゃダメ！！！！！！！！！！！
$id = uniqid();
$id_2 = md5(uniqid(strval(mt_rand()),true));
var_dump($id, $id_2);
// 使うならせめてこっち
$id_3 = trim(`uuidgen -r`); // バッククオートなので注意(バルティック演算子)
$id_4 = trim( shell_exec('uuidgen -r') );
var_dump($id_3, $id_4);








