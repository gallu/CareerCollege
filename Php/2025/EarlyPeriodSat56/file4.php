<?php  // file4.php

echo "<pre>";

$fobj = new SplFileObject(__FILE__);
foreach ($fobj as $no => $line) {
    echo "{$no}: ", htmlspecialchars($line);
}
