<?php  // file_write2.php

$fileName = __DIR__ . "/write.txt";
var_dump($fileName);

//
file_put_contents($fileName, "file put write \n", FILE_APPEND);
