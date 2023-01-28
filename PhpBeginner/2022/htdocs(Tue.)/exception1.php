<?php   // exception1.php

try {
    //$fo = new SplFileObject("dummy");
    $fo = new SplFileObject(__FILE__);
} catch(RuntimeException $e) {
    echo $e->getMessage();
    return ;
}

echo "fin";