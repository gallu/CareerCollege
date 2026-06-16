<?php  // csv_read_ng.php

$file_name = '/var/www/html/13TOKYO.CSV';
// var_dump( is_file($file_name) );
// var_dump( is_readable($file_name) );

$fp = fopen($file_name, 'r');
while(false !== ($line = fgets($fp))) {
    // 「カンマで分解」でCSVを解析しちゃダメ！！
    $row = explode(',', rtrim($line));
    var_dump($row);
}

fclose($fp);

