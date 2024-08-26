<?php  // rand.php

// 絶対に使わない！！！
var_dump( uniqid() );
var_dump( uniqid() );
var_dump( uniqid() );
// 絶対に使わない！！！
var_dump( uniqid(mt_rand(), true) );
var_dump( uniqid(mt_rand(), true) );
var_dump( uniqid(mt_rand(), true) );

// 「一意の文字列」なら
var_dump( rtrim(`uuidgen -r`) );
var_dump( rtrim(`uuidgen -r`) );
var_dump( rtrim(`uuidgen -r`) );

// 「推測困難性」がほしいなら（24~36バイト以上、くらい)
var_dump( bin2hex(random_bytes(24)) );
var_dump( bin2hex(random_bytes(24)) );
var_dump( bin2hex(random_bytes(24)) );
//
var_dump( base64_encode(random_bytes(24)) );
var_dump( base64_encode(random_bytes(24)) );
var_dump( base64_encode(random_bytes(34)) ); // 末尾確認用








