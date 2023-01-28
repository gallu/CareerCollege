<?php  // fgets.php
//  php  fgets.php

// コンソール以外からの起動なら、エラー表示をしないようにする
if (php_sapi_name() !== "cli") {
    ini_set("display_errors", "off");
}

echo "==> ";
$s = rtrim(fgets(STDIN));
var_dump($s);
