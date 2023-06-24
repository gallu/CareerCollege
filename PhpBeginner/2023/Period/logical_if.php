<?php  // logical_if.php

$age = random_int(50, 80);
$height = random_int(100, 175);

echo "age: {$age}, height: {$height} is ...";

if ( ($age <= 64)&&($height >= 125) ) {
	echo "can ride!!";
} else {
	echo "can NOT ride...";
}
