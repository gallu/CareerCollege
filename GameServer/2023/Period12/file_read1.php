<?php  // file_read1.php

$fileName = __FILE__ ;
//var_dump($fileName);

// ファイルをopenする
$fp = fopen($fileName, 'r');
if (false === $fp) {
    echo "ファイルは存在しませんでした。";
    return;
}
// var_dump($fp);

// ファイルを読み込む
// $r = fread($fp, 50);
// var_dump($r);

// $line = fgets($fp);
// var_dump($line);
// $line = fgets($fp);
// var_dump($line);

while(true) {
    $line = fgets($fp);
    if (false === $line) {
        break;
    }
    var_dump($line);
}

/*
while(false !== ($line = fgets($fp))) {
    var_dump($line);
}
*/

// ファイルをcloseする
$r = fclose($fp);
// var_dump($r);
