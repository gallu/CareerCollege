<?php  // dowhile.php

//
while(0 !== random_int(0, 9)) {
    echo ".";
}
echo "<br>";

//
while(false) {
    echo "in while <br>";
}
echo "fin <br>";

//
do {
    echo "in do-while <br>";
} while(false);
echo "fin <br>";
