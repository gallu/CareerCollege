<?php  // exp2.php
declare(strict_types=1);

try {
	echo "test 1 <br> \n";

	throw new Exception("てすと だよ");

	echo "test 2 <br> \n";
} catch(Exception $e) {
	echo $e->getMessage();
}
