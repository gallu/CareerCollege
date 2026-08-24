<?php  // exception4.php
declare(strict_types=1);

try {
    $no = random_int(0, 1);
    if (1 === $no) {
        throw new RuntimeException("error");
    }
    echo "no exception <br>";
} catch (RuntimeException $e) {
    echo $e->getMessage(), "<br>";
} finally {
    echo "finally <br>";
}

echo "fin.<br>";
