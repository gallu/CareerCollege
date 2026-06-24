<?php  // uplow.php

$str = "All in the golden afternoon";

$s = strtoupper($str);
echo "strtoupper: {$s} <br>";

$s = strtolower($str);
echo "strtolower: {$s} <br>";

$s = ucfirst($str);
echo "ucfirst: {$s} <br>";

$s = ucwords($str);
echo "ucwords: {$s} <br>";
