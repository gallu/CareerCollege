<?php  // read2.php

$file_name = __FILE__ ;

//
$lines = file($file_name);
foreach ($lines as $line) {
    echo htmlspecialchars($line), "<br>";
}

echo "<br>------<br>";

//
$contents = file_get_contents($file_name);
echo htmlspecialchars($contents);
