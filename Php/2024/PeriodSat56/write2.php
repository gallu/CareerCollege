<?php  // write2.php
$fn = __DIR__ . "/write.txt";

// $fp = fopen($fn, "w"); // 上書き
$fp = fopen($fn, "a"); // 追加書き

$r = fwrite($fp, "hello file write\n");
var_dump($r);

fclose($fp);
