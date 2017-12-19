<pre>
<?php
// password_hash.php
$raw_pass = 'password';

// 単純なhash(ダメなパターン)
$t_start = microtime(true);
$pass = hash('md5', $raw_pass);
$t_end = microtime(true);
//var_dump($pass);
var_dump($t_end - $t_start);

// salt + hash(ダメなパターン)
$t_start = microtime(true);
$salt = 'abcdefg';
$pass = hash('md5', $salt . $raw_pass);
$t_end = microtime(true);
//var_dump($pass);
var_dump($t_end - $t_start);

// 「個別のsalt」＋ストレッチ
$t_start = microtime(true);
$salt = random_bytes(10); // 個別のsalt
$pass = $raw_pass;
// ストレッチ
for($i = 0; $i < 1000; ++$i) {
    $pass = hash('md5', $salt . $pass);
}
$t_end = microtime(true);
//var_dump($pass);
var_dump($t_end - $t_start);

// 本命
$t_start = microtime(true);
$pass = password_hash($raw_pass, PASSWORD_DEFAULT);
$t_end = microtime(true);
var_dump($pass);
var_dump($t_end - $t_start);

// 本命2
$t_start = microtime(true);
$pass = password_hash($raw_pass, PASSWORD_DEFAULT, ['cost' => 14]);
$t_end = microtime(true);
var_dump($pass);
var_dump($t_end - $t_start);



