<?php // hash.php

$s = 'password';
// 使っちゃだめ
var_dump( md5($s) );
var_dump( md5($s) );
// 使っちゃだめ
var_dump( sha1($s) );

//
var_dump( hash('sha512', $s) );
var_dump( hash('sha256', $s) );
