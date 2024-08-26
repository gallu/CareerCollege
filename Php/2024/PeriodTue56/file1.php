<?php  // file1.php

$fp = fopen(__FILE__, 'r');
while(false !== ($line = fgets($fp))) {
    var_dump($line);
}

fclose($fp);
