<?php  // class10.php
declare(strict_types=1);

readonly class Hoge {
    public string $name;

    public function __construct(string $name) {
        $this->name = $name;
    }
}

$obj = new Hoge("hogera");
var_dump($obj->name);

// Fatal error: Uncaught Error: Cannot modify readonly property Hoge::$name in
// $obj->name = "foo";

