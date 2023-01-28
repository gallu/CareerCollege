<?php   // class5.php
declare(strict_types=1);

class Hoge {
    public function __construct(string $s) {
        echo "into Hoge::__construct <br>";
        var_dump($s);
        echo "<br>";
    }
    public function __destruct() {
        echo "into Hoge::__destruct <br>";
    }
    
    public function t() {
        echo "into Hoge::t <br>";
    }
}

//
$obj = new Hoge("str");
var_dump($obj);
echo "<br>";

echo "end <br>";
