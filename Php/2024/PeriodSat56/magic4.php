<?php  // magic4.php

class Hoge implements Stringable {
    private string $password;
    public function __construct(string $pw) {
        $this->password = $pw;
    }

    public function __toString(): string {
        return "********";
    }
}

$obj = new Hoge('pass');
echo $obj;
