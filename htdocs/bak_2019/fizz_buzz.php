<?php  // fizz_buzz.php
/*
3で割り切れたら Fizz
５で割り切れたら Buzz
3と５で割り切れたら FizzBuzz
それ以外なら 数字
 */
//
for($i = 1; $i <= 100; ++$i) {
	//
	//if (0 === ($i % 5) && 0 === ($i % 3)) {
	if (0 === ($i % 15)) {
		// 3と５で割り切れたら FizzBuzz
		echo "FizzBuzz<br>\n";
	} else if (0 === ($i % 3)) {
		// 3で割り切れたら Fizz
		echo "Fizz<br>\n";
	} else if (0 === ($i % 5)) {
		// ５で割り切れたら Buzz
		echo "Buzz<br>\n";
	} else {
		// それ以外
		echo "{$i}<br>\n";
	}
}

