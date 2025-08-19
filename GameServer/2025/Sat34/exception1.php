<?php  // exception1.php

try {
    $fn = new SplFileObject( __FILE__ );
    $fn = new SplFileObject("./dummy");
    var_dump($fn);
} catch (RuntimeException $e) {
    echo "catch !! <br>";
    echo $e->getMessage(), "<br>";
    return ;
}

echo "fin <br>";
