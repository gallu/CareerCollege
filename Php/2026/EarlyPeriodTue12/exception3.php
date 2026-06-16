<?php  // exception3.php
declare(strict_types=1);

try {
    echo "Trap 1 <br>\n";

    throw new RuntimeException("hogera error");

    echo "Trap 2 <br>\n";
} catch (RuntimeException $e) {
    echo "exception ", $e->getMessage(), "<br>\n";
}
echo "fin. <br>\n";

