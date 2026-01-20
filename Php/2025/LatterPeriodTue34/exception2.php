<?php  // exception2.php

try {
	throw new RuntimeException("hogera");
} catch (RuntimeException $e) {
	echo "into catch<br>";
	echo $e->getMessage(), "<br>";
}

echo "fin.";
