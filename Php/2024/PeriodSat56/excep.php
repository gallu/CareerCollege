<?php  // excep.php
declare(strict_types=1);

try {
    $fobj = new SplFileObject(__FILE__);
    // var_dump($fobj);

    $fobj = new SplFileObject("dummy");
    var_dump($fobj);
} catch (RuntimeException $e) {
    echo $e->getMessage();
}
