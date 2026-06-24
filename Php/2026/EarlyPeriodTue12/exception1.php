<?php  // exception1.php
declare(strict_types=1);

try {
    $fobj = new SplFileObject( __FILE__ );
    var_dump($fobj);

    $fobj = new SplFileObject("dummy");
    var_dump($fobj);
} catch (RuntimeException $e) {
    echo "exception ", $e->getMessage(), "<br>\n";
}

echo "fin. <br>\n";

