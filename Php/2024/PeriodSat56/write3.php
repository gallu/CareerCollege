<?php  // write3.php
$fn = __DIR__ . "/write.txt";

// $r = file_put_contents($fn, "hello put contents \n"); // 上書き
$r = file_put_contents($fn, "hello put contents app \n", FILE_APPEND); // 追加書き
var_dump($r);
