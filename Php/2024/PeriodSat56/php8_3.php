<?php  // php8_3.php

// readonly 機能の修正
$obj = new readonly class(456) {
    public function __construct(
        public int $num,
    ) {}
};
var_dump($obj);
var_dump($obj->num);
// $obj->num = 789; // Fatal error: Uncaught Error: Cannot modify readonly property
echo "<br> \n";

// クラス定数に対する型宣言
class Hoge {
    public const int NUM = 123;
}
var_dump(Hoge::NUM);
echo "<br> \n";

// 加算子/減算子 に対する変更
$s = 'aay';
for($i = 0; $i < 10; ++$i) {
    // $s ++; // 非推奨扱い
    $s = str_increment($s);
    echo "{$s}, ";
}
echo "<br> \n";

