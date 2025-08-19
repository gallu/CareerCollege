<?php  // exception2.php

try {
    throw new Exception("hoge error");
} catch (Exception $e) {
    echo "catch !! <br>";
    echo $e->getMessage(), "<br>";
    return ;
}

echo "fin <br>";

