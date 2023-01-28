<?php   // func2.php

function 関数名($引数) {
    echo "in function　{$引数} <br>";
}
//
関数名(1);
関数名(999);
関数名("str");
echo "<br> end <br>";

function 関数名2($引数1, $引数2) {
    echo "in func2　{$引数1}, {$引数2} <br>";
}
関数名2(1, 999);
関数名2("1st", "2nd");
