<?php  // magic3.php
declare(strict_types=1);

class Hoge implements Stringable {    
    public function __construct(
        private string $name,
        private int $value,
    ){}

    public function __toString(): string {
        return "data: {$this->name}, {$this->value}";
    }
}

//
$obj = new Hoge("book", 980);
echo $obj;
