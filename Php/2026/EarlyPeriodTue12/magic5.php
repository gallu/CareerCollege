<?php  // magic5.php
declare(strict_types=1);

class Hoge {
    public function __construct(
        private string $email,
        private string $password, // 秘密情報！！
        private string $name,
    ){}

    public function __debugInfo(): array {
        return [
            "email" => $this->email,
        ];
    }
}

//
$obj = new Hoge("hoge@hoge.com", "p@ssword", "hogera");
var_dump($obj);
