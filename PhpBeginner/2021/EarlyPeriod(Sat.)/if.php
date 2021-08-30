<?php   // if.php

//
$i = random_int(0, 99);

//
if ($i >= 50) {
    echo "50以上です <br>\n";
} else {
    echo "49以下です <br>\n";
}


//
if ($i >= 80) {
    echo "80以上です <br>\n";
} else if ($i >= 60) {
    echo "60以上です <br>\n";
} elseif ($i >= 40) {
    echo "40以上です <br>\n";
} else {
    echo "39以下です <br>\n";
}

