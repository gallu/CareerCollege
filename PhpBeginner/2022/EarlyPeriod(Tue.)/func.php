<?php   // func.php

// 関数の定義
function 関数名() {
    echo "関数名 <br>";
}
// 関数を呼び出す
関数名();
関数名();
関数名();

//
function 関数名2($引数) {
    var_dump($引数);
}
//
関数名2(10);
関数名2("string");
関数名2(3.14);
echo "<br>";

//
function 関数名3($引数1, $引数2) {
    var_dump($引数1, $引数2);
}
関数名3(999, "vvv");



