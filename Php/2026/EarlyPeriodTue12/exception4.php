<?php  // exception4.php
declare(strict_types=1);

try {
    echo "Trap 1 <br>\n";
    throw new RuntimeException("hoge muu");
    echo "Trap 2 <br>\n";
} catch (RuntimeException $e) {
    echo "exception ", $e->getMessage(), "<br>\n";
} finally {
    echo "finally <br>\n";
}
echo "fin. <br>\n";
