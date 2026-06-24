<?php  // random2.php
/*
真の乱数
	・再現不可能性
/dev/random
/dev/urandom

疑似乱数
	初期seed考えろ！！
	・無作為性
	・予測不可能性
 */

// 真の乱数
$d = random_int(0, 99);
echo "{$d} <br>";

// 強い疑似乱数
$d = mt_rand(0, 99);
echo "{$d} <br>";

// 弱い疑似乱数(だった)
$d = rand(0, 99);
echo "{$d} <br>";

//
mt_srand( time() );
for ($i = 0; $i < 10; ++$i) {
	$d = mt_rand(0, 99);
	echo "{$d}, ";	
}
echo "<br>";

mt_srand( 1234 ); // 75, 71, 6, 65, 16, 64, 32, 25, 75, 29,
for ($i = 0; $i < 10; ++$i) {
	$d = mt_rand(0, 99);
	echo "{$d}, ";	
}
echo "<br>";
