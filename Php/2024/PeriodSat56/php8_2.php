<?php  // php8_2.php

class Users {
    public function __construct(
        public readonly int $user_id,
        public readonly string $email,
        public readonly string $password,
    ) {
        throw new \RuntimeException("aaa");
    }
}
try {
    $obj = new Users(1, 'email', 'pass');
} catch (\RuntimeException $e) {
    echo $e->getTraceAsString() , "<br>\n";
}
echo "<br> \n";

class Users2 {
    public function __construct(
        public readonly int $user_id,
        public readonly string $email,
        #[\SensitiveParameter]
        public readonly string $password,
    ) {
        throw new \RuntimeException("aaa");
    }
}
try {
    $obj = new Users2(1, 'email', 'pass');
} catch (\RuntimeException $e) {
    echo $e->getTraceAsString() , "<br>\n";
}
echo "<br> \n";

// 読み取り専用クラス
readonly class Hoge {
    public function __construct(
        public int $num,
    ) {}
}
//
$obj = new Hoge(123);
var_dump($obj);
// $obj->num = 987; // Uncaught Error: Cannot modify readonly property
echo "<br> \n";

// 動的なプロパティの利用
#[\AllowDynamicProperties] 
class Foo {
}
$obj = new Foo();
var_dump($obj);
$obj->dummy = 123;
var_dump($obj);

