<?php  // exception1.php
declare(strict_types=1);

try {
    $obj = new SplFileObject(__FILE__);
    var_dump($obj);
    echo "<br>";

    $obj = new SplFileObject("./dummy");
    var_dump($obj);
    echo "<br>";
} catch (Exception $e) {
    echo $e->getMessage() , "<br>";
}

echo "fin. <br>";
