<?php  // password.php

$raw_pass = "自分で決めたパスワード";
$h = password_hash($raw_pass, PASSWORD_DEFAULT);
echo $h;
