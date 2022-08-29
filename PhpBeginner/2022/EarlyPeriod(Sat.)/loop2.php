<?php   // loop2.php

//
while(0 !== random_int(0, 10)) {
    echo ".";
}
echo "<br>";
//
do {
    echo ".";
} while(0 !== random_int(0, 10));
echo "<br>";

//
while(false) {
    echo "into while <br>";
}

do {
    echo "into do-while <br>";
} while(false);

