<?php  // php82.php
declare(strict_types=1);

/*
// SensitiveParameter アトリビュート
class User {
    public readonly string $email;
    public readonly string $password;
    public function __construct(string $email, string $password) {
        $this->email = $email;
        $this->password = $password;
    }
}
//
$user = new User('email', 'pass');
var_dump($user);
echo "<br>";
//
class User2 {
    public readonly string $email;
    public readonly string $password;
    public function __construct(string $email, #[\SensitiveParameter] string $password) {
        $this->email = $email;
        $this->password = $password;
    }
}
//
$user = new User2('email', 'pass');
var_dump($user);
echo "<br>";
*/

// 読み取り専用クラス
readonly class Hoge {
    public function __construct(
        public int $num,
    ) {}
}
$obj = new Hoge(123);
var_dump($obj->num);
// $obj->num = 654; // Fatal error: Uncaught Error: Cannot modify readonly property

// 推奨されなくなる機能
// 動的なプロパティの利用
// #[\AllowDynamicProperties]
class Foo {}

$obj = new Foo();
$obj->name = "furu";
$obj->num = 987;

var_dump($obj);

