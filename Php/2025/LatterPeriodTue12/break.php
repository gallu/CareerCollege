<?php  // break.php
// https://dev2.m-fr.net/アカウント名/break.php

for ($i = 0; $i < 10; ++$i) {
    echo "{$i}, ";
}
echo "<br>";

for ($i = 0; $i < 10; ++$i) {
    if ($i >= 5) {
        break;
    }
    echo "{$i}, ";
}
echo "<br>";


