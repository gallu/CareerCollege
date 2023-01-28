<?php   // class2.php
declare(strict_types=1);

class Hoge {
    //
    public function publicFunc() {
        echo "into publicFunc<br>";
    }
    private function privateFunc() {
        echo "into privateFunc<br>";
    }

    //
    public string $publicProperty = "public P";
    private string $privateProperty = "private P";
}
//
$obj = new Hoge();
var_dump($obj);
//
$obj->publicFunc();
$obj->publicProperty = "outer string";
var_dump($obj->publicProperty);
//
//$obj->privateFunc(); // Uncaught Error: Call to private method Hoge::privateFunc()
//$obj->privateProperty = "outer string 2"; // Uncaught Error: Cannot access private property
//var_dump($obj->privateProperty); // Uncaught Error: Cannot access private property

