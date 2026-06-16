<?php  // for2.php

$str = "Alice was beginning to get very tired of sitting by her sister on the bank, and of having nothing to do: once or twice she had peeped into the book her sister was reading, but it had no pictures or conversations in it, 'and what is the use of a book,' thought Alice 'without pictures or conversation?'";
$len = strlen($str);
echo "len is {$len} <br>";

$count = 0;
for ($i = 0; $i < $len; ++$i) {
    $c = $str[$i];
    // echo "{$c} <br>";

    if ($c === " ") {
        $count ++;
    }
    if ($count > 5) {
        echo "<br>";
        $count = 0;
    } else {
        echo $c;
    }
}
