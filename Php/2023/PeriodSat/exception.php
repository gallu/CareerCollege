<?php  // exception.php

try {
    // $obj = new SplFileObject("dummy");
    throw new RuntimeException("ほげら");
} catch(RuntimeException $e) {
    echo "into catch <br>\n";
    echo $e->getMessage();
}
