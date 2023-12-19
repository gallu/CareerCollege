<?php  // tostring.php

class Hoge {
    public function __toString(): string {
        return $this::class;
    }
}

$obj = new Hoge();
// var_dump($obj);
var_dump( (string) $obj );
echo $obj;
