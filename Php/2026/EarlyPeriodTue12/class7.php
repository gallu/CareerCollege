<?php  // class7.php
declare(strict_types=1);

class Hoge {
    public function __construct(int $num) {
        echo "construct num is {$num} <br>\n";
    }

    // Method Hoge::__destruct() cannot take arguments in
    // public function __destruct(int $num) {
    public function __destruct() {
        echo "destruct <br>\n";
    }
}

$obj = new Hoge(123);
