<?php  // extends5.php
declare(strict_types=1);

class Hoge {
    public function func(int $num): int|float {
        return 3.14;
    }
}

// リスコフの置換原則
// サブクラスはそのスーパークラス（基底クラス）と置き換え可能でなければならない
class Foo extends Hoge {
    // 共変性と反変性
    // public function func(string $s): bool { // Fatal error: Declaration of 
    // public function func(int $num, float $f): int|float { // Fatal error: Declaration of
    // public function func(int $num): int|float|bool { // Fatal error: Declaration of 
    
    // public function func(int $num, float $f = 3.14): int|float { // これはOK
    // public function func(int|float $num): int|float { // これはOK
    public function func(int $num): float { // これはOK
        return 3.14;
    }    
}
