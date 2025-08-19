<?php  // php84.php
declare(strict_types=1);

// プロパティフック
class Hoge {
    public string $name {
        get {
            return strtoupper($this->name);
        }
        set {
            var_dump($value);
            $this->name = $value;
        }
    }
}
$obj = new Hoge();
$obj->name = 'abc';
var_dump($obj->name);
echo "<br>";

// 非対称可視性プロパティ
class Foo {
    public function __construct(
        public protected(set) string $name,
    ){}
    public function setName($s) {
        $this->name = $s;
    }
}
$obj = new Foo("xyz");
var_dump($obj->name);
// $obj->name = "YYY";
$obj->setName('YYY');
var_dump($obj->name);
echo "<br>";

// INT_MAXを超えたとき
$i = PHP_INT_MAX;
var_dump($i);
$i ++;
var_dump($i);
echo "<br>";

// BcMath\Number
$i = new BcMath\Number(PHP_INT_MAX);
$j = new BcMath\Number(1);
var_dump($i, $j);
$k = $i->add($j);
var_dump($k);
//
$i = new BcMath\Number(PHP_INT_MAX);
$j = new BcMath\Number(1);
$k = $i + $j;
var_dump($k);

