<?php  // file_read1.php

$fn = __FILE__ ;
//var_dump($fn);

// ファイルをopenする
$fp = fopen($fn, 'r');
if (false === $fp) {
    echo "file open error\n<br>";
    return ;
}
// var_dump($fp);

// ファイルを読み込む
while(false !== ($line = fgets($fp))) {
    var_dump($line);
}

// ファイルをcloseする
fclose($fp);
