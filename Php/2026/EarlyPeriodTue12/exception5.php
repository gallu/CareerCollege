<?php  // exception5.php
declare(strict_types=1);

class Hoge {
    public function __construct() {
        // error発生
        throw new RuntimeException("Hoge class error");
    }
}

try {
    $obj = new Hoge();
    var_dump($obj);
} catch (RuntimeException $e) {
    echo "exception ", $e->getMessage(), "<br>\n";
}
echo "fin. <br>\n";

