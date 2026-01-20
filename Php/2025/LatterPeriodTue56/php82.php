<?php  // php82.php

// SensitiveParameter アトリビュート
function test(string $id, #[SensitiveParameter] string $pass) {
    debug_print_backtrace();
}
test('id', 'pass');

// クラスに対して readonly を指定する機能 がサポートされました。
readonly class Hoge {
    public function __construct(
        public int $num,
    ) {
    }
}
$obj = new Hoge(12);
var_dump($obj);
// $obj->num = 987; // Cannot modify readonly property Hoge::$num in

/* PHP 8.2.x で推奨されなくなる機能 */
// 動的なプロパティの利用
class Foo {
}
//
$obj = new Foo();
$obj->name = "hoge"; // Deprecated: Creation of dynamic property Foo::$name is
var_dump($obj);
// stdClassは大丈夫
$obj = new stdClass();
$obj->name = "std"; // こっちは大丈夫
var_dump($obj);
// AllowDynamicProperties アトリビュートを付けたら(とりあえず)OK
#[\AllowDynamicProperties] 
class Bar {
}
$obj = new Bar();
$obj->name = "bbb";
var_dump($obj);

