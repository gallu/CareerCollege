<?php   // if.php

//
$i = random_int(0, 99);
echo "{$i} is ...";

// 簡単なif
if (50 >= $i) {
    echo "50以下です<br>\n";
} else {
    echo "50を超えてます<br>\n";
}

// ifを重ねる
if (80 <= $i) {
    echo "80以上です<br>\n";
} else if (60 <= $i) {
    echo "60以上です<br>\n";
} else if (40 <= $i) {
    echo "40以上です<br>\n";
} else {
    echo "40未満です<br>\n";
}



