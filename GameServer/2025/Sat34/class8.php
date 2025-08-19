<?php  // class8.php
declare(strict_types=1);

class Hoge {
    private string $name;
    
    public function __construct(string $v) {
        $this->name = $v;
    }
    public function getName(): string {
        return $this->name;
    }
}
//
$obj = new Hoge("おいちゃん");
var_dump($obj);
var_dump($obj->getName());
