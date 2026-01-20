<?php  // hash.php

$base = "Hello";

// 基本「絶対に」使うな！！！
$h1 = md5($base);
echo "md5:{$h1} <br>\n";
$h2 = sha1($base);
echo "sha1:{$h2} <br>\n";

// 使うのはこっち
$h3 = hash("SHA512", $base);
echo "SHA512:{$h3} <br>\n";
$h4 = hash("SHA256", $base);
echo "SHA256:{$h4} <br>\n";

