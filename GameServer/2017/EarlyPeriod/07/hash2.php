<?php
// hash2.php
$s = 'furu'; // “K“–‚ÉD‚«‚È•¶Žš—ñ
$s = $s . date('Ymd');
//
$h = md5($s);
var_dump($h);
//
$h = sha1($s);
var_dump($h);
