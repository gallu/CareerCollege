<?php  // exception1.php

try {
	$fo = new SplFileObject(__FILE__);
	// var_dump($fo);

	$fo = new SplFileObject("./dummy");
	// var_dump($fo);
} catch (RuntimeException $e) {
	echo "into catch<br>";
	echo $e->getMessage();
}
