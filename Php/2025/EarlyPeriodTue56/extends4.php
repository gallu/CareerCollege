<?php  // extends4.php
declare(strict_types=1);

class Hoge {
    public function func(int $num, string $name): string|false {
        if (0 > $num) {
            return false;
        }
        return "{$num}: {$name}";
    }
}
class Foo extends Hoge {
    // これはエラーが出る
    // public function func(string $name, int $price): array {
        // return [
            // "name" => $name,
            // "price" => $price,
        // ];
    // }

    // これは当然動く(意味ないけど)
    // public function func(int $num, string $name): string|false {
        // return parent::func($num, $name);
    // }

    // 反変性 と 共変性
    public function func(int|float $num, string $name): string {
        if (is_float($num)) {
            $num = (int)floor($num);
        }
        $r = parent::func($num, $name);
        if ($r === false) {
            return "だめぽ";
        }
        return $r;
    }
}

$fobj = new Foo();
$r = $fobj->func(-1, "");
var_dump($r);

$r = $fobj->func(123, "name");
var_dump($r);

$r = $fobj->func(1.23, "name");
var_dump($r);
