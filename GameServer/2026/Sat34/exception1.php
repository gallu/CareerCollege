<?php  // exception1.php
declare(strict_types=1);

try {
    $fobj = new SplFileObject(__FILE__);
    // var_dump($fobj);

    $fobj2 = new SplFileObject("./dummy");
    var_dump($fobj2);
} catch (RuntimeException $e) {
    echo $e->getMessage(), "<br>";
}

echo "fin.";


