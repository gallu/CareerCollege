<?php  // exception2.php
declare(strict_types=1);

try {
    echo "Trap 1 <br>";

    throw new RuntimeException("hogera error");

    echo "Trap 2 <br>";
} catch (RuntimeException $e) {
    echo $e->getMessage(), "<br>";
}

echo "fin.";
