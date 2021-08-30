<?php   // file_2.php
//
//$fp = fopen('dummy', 'r');
$fp = fopen(__FILE__, 'r');
var_dump($fp);
//
while(false === feof($fp)) {
    $line = fgets($fp);
    var_dump($line);
}
/*
while(true) {
    $line = fgets($fp);
    if (false === $line) {
        break;
    }
    var_dump($line);
}
*/
/*
while(false !== ($line = fgets($fp))) {
    var_dump($line);
}
*/

//
fclose($fp);

