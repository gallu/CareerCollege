<?php  // class6.php
declare(strict_types=1);

class Hoge {
    public function __construct() {
        echo __METHOD__ , "<br>\n";
    }
    public function __destruct() {
        echo __METHOD__ , "<br>\n";
    }

    public function func1() {
        echo __METHOD__ , "<br>\n";
    }
}

echo "Trap 1<br>\n";
$obj = new Hoge();
echo "Trap 2<br>\n";
