<?php  // for4.php

$s = "abcdefg";
$len = strlen($s);
echo "len is {$len} <br>";

for ($i = 0; $i < $len; ++$i) {
    echo $s[$i], "<br>";
}
echo "<br>";
