<?php   // bit.php

$i = 10;
printf("%08d<br>", decbin($i));
$j = 3;
printf("%08d<br>", decbin($j));
printf("%08d<br>", decbin($i | $j));
var_dump( $i | $j );

echo "<br><br>";
printf("%08d<br>", decbin($i));
printf("%08d<br>", decbin($j));
printf("%08d<br>", decbin($i & $j));
var_dump( $i & $j );
