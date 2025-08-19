<?php  // php83.php
declare(strict_types=1);

// クラス定数に対する型宣言
class Hoge {
    public const string STR = "SSS";
}
var_dump(Hoge::STR);
echo "<br>";

// クラス定数への動的なアクセス構文
$const = 'STR';
var_dump(Hoge::{$const});
echo "<br>";

// 推奨されなくなる機能
// 加算子/減算子 に対する変更
$s = 'aaz';
++$s;
var_dump($s);

$s = str_increment($s);
var_dump($s);


