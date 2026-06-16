<?php  // read1.php

$file_name = __FILE__ ;

$fp = fopen($file_name, 'r');
// var_dump($fp);
if (false === $fp) {
    echo "ファイルがあかなかったよ";
    return ;
}

while(false !== ($line = fgets($fp))) {
    echo htmlspecialchars($line), "<br>";
}

fclose($fp);
