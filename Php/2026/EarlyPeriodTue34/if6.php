<?php  // if6.php

$age = random_int(30, 70);
$height = random_int(80, 170);

echo "age {$age}, height {$height} is ... ";

//
if ( ($height >= 125)&&($age <= 54) ) {
    echo "can ride !! <br>";
} else {
    echo "not ride ... <br>";
}

//
if ( ($height < 125)||($age > 54) ) {
    echo "not ride ... <br>";
} else {
    echo "can ride !! <br>";
}

