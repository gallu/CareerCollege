<?php  // exception.php

try {
    $fobj = new SplFileObject("dummy");
} catch(RuntimeException $e) {
    echo "into catch <br> \n";
    echo $e->getMessage();
}
