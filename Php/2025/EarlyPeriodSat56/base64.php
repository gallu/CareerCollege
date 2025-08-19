<?php // base64.php

$s = "Hello";

$be = base64_encode($s);
echo $be , "<br>\n";

$s2 = base64_decode($be);
echo $s2 , "<br>\n";



