<?php   // if3.php

$age = random_int(50, 80);
$height = random_int(100, 150);

echo "age:{$age}, height:{$height} is ... ";

if (($height >= 125)&&($age <= 64)) {
    echo "can ride.";
} else {
    echo "can NOT! ride.";
}



