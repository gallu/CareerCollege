<?php
// hash.php
// 前提としての、乱数
/*
var_dump( time() );
var_dump( microtime(true) );
var_dump( rand(0, 1000) );
var_dump( mt_rand(0, 1000) );
var_dump( random_bytes(128) );
*/

// 様々なhash
/*
var_dump( md5('a') );
var_dump( sha1('a') );
var_dump( hash('sha256', 'a') );
var_dump( hash('sha512', 'a') );
*/

// セッションID用に
//var_dump( md5(time()) );
//var_dump( sha1(microtime(true)) );
var_dump( hash('sha256', random_bytes(128)) );


/*
// いい感じのユーザトークン
var_dump( hash('sha256', random_bytes(128)) );
var_dump( hash('sha512', random_bytes(128)) );

// サーバがLinuxであること前提
var_dump( trim(`uuidgen -r`) );
*/
