<?php  // exception1.php

try {
    // $obj = new SplFileObject(__FILE__);
    // var_dump($obj);

    $obj2 = new SplFileObject('./dummy');
    // var_dump($obj2);
} catch (RuntimeException $e) {
    echo "into catch <br>";
    echo $e->getMessage() , "<br>";
}

echo "fin";
