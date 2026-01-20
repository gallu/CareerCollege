<?php  // write_file.php

$wfn = __DIR__ . "/write.txt";

$r = is_writable($wfn);
var_dump($r);

// file_put_contents($wfn, "hoge data\n"); // 上書き
file_put_contents($wfn, "hoge data\n", FILE_APPEND); // 追加書き
