<?php  // class4.php
declare(strict_types=1);

class Hoge {
    public function __construct() {
        var_dump(__METHOD__);
    }
    public function __destruct() {
        var_dump(__METHOD__);
    }
}

//
echo "Trap 1 \n";
$obj = new Hoge();
echo "Trap 2 \n";
unset($obj);
echo "Trap 3 \n";
