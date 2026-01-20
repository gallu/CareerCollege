<?php  // read_file_2.php

$fn = __FILE__;

//
$lines = file($fn);
foreach ($lines as $line) {
    echo htmlspecialchars($line), "<br>\n";
}
echo "<br>\n";

//
$content = file_get_contents($fn);
echo htmlspecialchars($content);
