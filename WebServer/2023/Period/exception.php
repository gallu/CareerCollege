<?php  // exception.php
declare(strict_types=1);

try {
    // $obj = new SplFileObject(__FILE__);
    $obj = new SplFileObject("./dummy");
    var_dump($obj);
} catch(RuntimeException $e) {
    echo $e->getMessage();
} catch(Throwable $e) {
}
