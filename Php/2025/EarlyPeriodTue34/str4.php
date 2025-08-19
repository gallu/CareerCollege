<?php  // str4.php

$s = "All in the golden afternoon
  Full leisurely we glide;
 For both our oars, with little skill,
  By little arms are plied,
 While little hands make vain pretence
  Our wanderings to guide.";

$c = $s[0];
echo $c , "<br>";

$len = strlen($s);
echo "len is {$len} <br>";

for ($i = 0; $i < $len; ++$i) {
    $c = $s[$i];
    echo "{$c} <br>";
}
