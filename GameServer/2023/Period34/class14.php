<?php  // class14.php
declare(strict_types=1);

class Hoge {
    public function __construct(
        public readonly int $num,
    ) {
    }
    
    public function __toString(): string {
        // return (string)$this->num;
        return "num is {$this->num}";
    }
}

$obj = new Hoge(123);
// var_dump($obj);
echo $obj;