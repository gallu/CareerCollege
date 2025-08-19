<?php  // password.php

$raw_pass = 'password';

// 今のデフォであるBCryptは「72文字制限」があるので注意
$h = password_hash($raw_pass, PASSWORD_DEFAULT, ["cost" => 13]);
echo $h , "<br> \n";

$input_pass = $raw_pass;
$r = password_verify($input_pass, $h);
var_dump($r);
echo "<br>\n";

$input_pass .= "a";
$r = password_verify($input_pass, $h);
var_dump($r);
echo "<br>\n";


