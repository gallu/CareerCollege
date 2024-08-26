<?php  // exception2.php
declare(strict_types=1);

try {
    echo "Test 1 <br>";

    throw new Exception("hoge");

    echo "Test 2 <br>";
} catch (Exception $e) {
    echo $e->getMessage() , "<br>";
}

echo "fin . <br>";   
