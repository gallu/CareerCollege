<?php  // if4.php

$offense = random_int(1, 20);
$defense = random_int(1, 20);

echo "{$offense} >> {$defense} ... ";

if ($offense > $defense) {
    echo "Hit !!<br>";
} else {
    echo "guard !!<br>";
}
