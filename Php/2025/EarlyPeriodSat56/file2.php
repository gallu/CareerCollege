<?php  // file2.php

$fp = fopen(__FILE__, "r");
while( false !== ($line = fgets($fp)) ) {
    echo htmlspecialchars($line) , "<br>";
}
fclose($fp);
