<?php  // if1.php

$hit_roll = random_int(1, 6) + random_int(1, 6);
echo "hit roll is {$hit_roll} ... ";

// 8以上なら命中
if (8 <= $hit_roll) {
    echo "Hit!! <br>\n";
} else {
    echo "Dodge... <br>\n";
}
