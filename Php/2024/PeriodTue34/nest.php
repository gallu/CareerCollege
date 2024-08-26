<?php  // nest.php

for ($i = 0; $i < 10; ++$i) {
    echo "*";
}
echo "<br><br>";

for ($i = 0; $i < 10; ++$i) {
    for ($j = 0; $j < 10; ++$j) {
        echo "*";
    }
    echo "<br>";
}
echo "<br><br>";

for ($i = 0; $i < 10; ++$i) {
    for ($j = 0; $j < $i; ++$j) {
        echo "*";
    }
    echo "<br>";
}
echo "<br><br>";




