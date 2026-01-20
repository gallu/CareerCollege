<?php  // php84.php

// プロパティフック
class Hoge {
	public string $name{
		set{
            if ($value === "") {
                throw new Exception("名前がから");
            }
			$this->name = $value;
		}
		get{
			return "name: {$this->name}";
		}
	}
}
$obj = new Hoge();
$obj->name = 'ho';
var_dump($obj->name);

// 非対称可視性プロパティ 
class Foo {
    public protected(set) string $name;
    public function setName(string $v): void {
        $this->name = $v;
    }
}
$obj = new Foo();
$obj->setName("hoho");
var_dump($obj->name);
// $obj->name = 'hara'; // Fatal error: Uncaught Error: Cannot modify protected(set) property Foo::$name 

// 括弧なしでの new 式のチェーン
class Bar {
    public function f() {
        echo __METHOD__ , "<br>";
    }
}
// これは従来から
(new Bar())->f();
// こっちもいけるようになった
new Bar()->f();

// BcMath\Number
// 任意精度整数を使わない場合
$i = PHP_INT_MAX;
var_dump($i);
++$i;
var_dump($i);
// 使う場合
$bc = new \BcMath\Number(PHP_INT_MAX);
var_dump( (string)$bc );
$bc = $bc->add(1);
var_dump( (string)$bc );
// 演算子のオーバライド
$bc = new \BcMath\Number(PHP_INT_MAX);
var_dump( (string)$bc );
$bc = $bc + 1;
var_dump( (string)$bc );

// 暗黙的な nullable パラメータ
// Deprecated: hoge(): Implicitly marking parameter $i as nullable is deprecated, the explicit nullable type must be used instead in
function hoge(int $i = null): void {
}

// クラス名をアンダースコア _ とする 
// Deprecated: Using "_" as a class name is deprecated since 8.4
class _ {
}


