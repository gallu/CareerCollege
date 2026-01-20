<?php  // str4.php

$s = "abcdefg";
echo "{$s} <br>";

$c = $s[0];
echo "{$c} <br>";

$c = $s[2];
echo "{$c} <br>";

$c = $s[4];
echo "{$c} <br>";

// マルチバイト文字は、[]で１文字抜き出しができない
$s = "あいうえお";
$c = $s[1];
echo "{$c} <br>";
