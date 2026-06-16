<?php  // extends8.php
declare(strict_types=1);

class Hoge {
    private int $num;
    public function __construct(int $num) {
        $this->num = $num;
    }
}

class Foo extends Hoge {
    private string $name;
    public function __construct(string $name, float $f) {
        $this->name = $name;
        parent::__construct( (int)$f );
    }
}

$obj = new Foo("hogera", 987.654);
var_dump($obj);
