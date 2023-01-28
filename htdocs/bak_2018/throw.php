<?php  // throw.php

try {
    echo "Trap 1\n";
	//throw new Exception('えらー');
    echo "Trap 2\n";
} catch (Exception $e) {
	echo "into catch\n";
    echo $e->getMessage();
} finally {
    echo "finally\n";
}
