<?php  // exception2.php

try {
    echo "Test 1 <br>";
    echo "Test 2 <br>";
    throw new Exception('hoge error');
    echo "Test 3 <br>";
} catch (Exception $e) {
    echo $e->getMessage() , "<br>";
}

echo "fin";
