<?php   // if.php

// if文
$i = random_int(0, 99);
// 成功五割
if ($i <= 50) {
	echo $i , ': 成功!!';
} else {
	echo $i , ': 失敗 orz';
}
/*
if (条件式) {
	条件式が成り立つときの処理
} else {
	条件式が成り立たなかったときの処理
}
*/
