<?php  // magic4.php

class Hoge {
    public function __construct(
        private int $num,
        public  string $name,
    ){}

    public function __debugInfo() {
        return [
            "name" => $this->name,
            "num" => "?????",
        ];
    }
}

//
$obj = new Hoge(123, "2nd");
var_export($obj);
echo "\n";

var_export("name");
echo "\n";

var_export([1,2,3]);
echo "\n";

//
var_dump($obj);

