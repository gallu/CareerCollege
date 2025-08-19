<?php  // interface2.php

interface Hogable {
    // public以外は宣言できない
    // protected function func(int $i): void; // Access type for interface method Hogable::func() must be public

    // 実装はかけない
    // Interface function Hogable::func() cannot contain body
    // public function func(int $i): void {
        // var_dump($i);
    // }

    // プロパティはかけない
    // Interfaces may only include hooked properties
    // Interfaces may not include member variables 
    // public int $i;
}

class Hoge implements Hogable {
}

$obj = new Hoge();
var_dump($obj);
