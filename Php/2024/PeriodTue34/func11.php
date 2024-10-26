<?php  // func11.php
declare(strict_types=1);

function hoge(int $num, bool $flg) {
	var_dump($num, $flg);
}
//
// hoge();
hoge(123, true);
hoge(123, true, 'str'); // XXX

function foo(int $num, bool $flg = false) {
	var_dump($num, $flg);
}
// foo();
foo(456);
foo(789, true);

