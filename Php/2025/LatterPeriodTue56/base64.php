<?php  // base64.php

$s = "Hello PHP World.";
echo "{$s}<br>\n";

$b64 = base64_encode($s);
echo "{$b64}<br>\n";

$s2 = base64_decode($b64);
echo "{$s2}<br>\n";
