<?php  // cookie1.php

$num = random_int(0, 999);
setcookie('hoge', $num);

var_dump($num);
var_dump($_COOKIE);
