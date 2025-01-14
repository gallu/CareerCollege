<?php  // file3.php

$fp = fopen(__FILE__ , "r");

while(false !== ($line = fgets($fp))) {
    echo "{$line} <br>\n";
}

fclose($fp);

