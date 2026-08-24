<?php  // extends5.php
declare(strict_types=1);

class Hoge {
    public function func(int|float $num): int|float {
        echo __METHOD__, "<br>";
    }
}
// 共変性と反変性
// リスコフの置換原則(SOLID原則)
// もし、SがTのサブタイプであるならば、T型のオブジェクトはS型のオブジェクトに置き換えてもプログラムの一貫性が損なわれることはありません。
class Foo extends Hoge {
    // public function func(int|float $num): int|float { // ok
    // public function func(int $num): int|float { // Fatal error: Declaration of Foo::func(int $num): int|float must be compatible with Hoge::func(int|float $num): int|float in
    // public function func(int|float|bool $num): int|float { // ok
    // public function func(string $num): int|float { // Fatal error: Declaration of Foo::func(string $num): int|float must be compatible with Hoge::func(int|float $num): int|float in
    // public function func(int|float $num, string $name): int|float { // Fatal error: Declaration of Foo::func(int|float $num, string $name): int|float must be compatible with Hoge::func(int|float $num): int|float in
    // public function func(int|float $num, string $name = "unknown"): int|float { // ok
    // public function func(int|float $num): int|float|bool { // Fatal error: Declaration of Foo::func(int|float $num): int|float|bool must be compatible with Hoge::func(int|float $num): int|float in
    public function func(int|float $num): float { // ok
        echo __METHOD__, "<br>";
    }
}
