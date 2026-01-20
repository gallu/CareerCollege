<?php  // php83.php

// 無名クラスも、readonly としてマークできるようになりました。
$obj = new readonly class (123) {
    public function __construct(
        public int $num,
    ){}
};
var_dump($obj->num);
// $obj->num = 987; // Fatal error: Uncaught Error: Cannot modify readonly property class@anonymous::$num in

/* PHP 8.3.x で推奨されなくなる機能 */
// 加算子/減算子 に対する変更
$s = 'z';
$s ++; // 非推奨になった
var_dump($s);
// こちらが推奨
$s = str_increment($s);
var_dump($s);

