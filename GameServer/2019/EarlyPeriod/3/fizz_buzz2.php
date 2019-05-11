<?php  // fizz_buzz2.php
/*
3で割り切れたら Fizz
５で割り切れたら Buzz
3と５で割り切れたら FizzBuzz
それ以外なら 数字
 */
//
for($i = 1; $i <= 100; ++$i) {
	//
	$s = '';
	// 3で割り切れたら Fizz
	if (0 === ($i % 3)) {
		$s = 'Fizz';
	}
	// ５で割り切れたら Buzz
	if (0 === ($i % 5)) {
		$s = $s . 'Buzz';
	}
	// それ以外なら数字
	if ('' === $s) {
		$s = (string)$i;
	}
	// 出力
	echo "{$s}<br>\n";
}

