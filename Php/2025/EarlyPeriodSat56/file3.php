<?php  // file3.php

echo "<pre>";

$fstring = file_get_contents(__FILE__);
echo htmlspecialchars($fstring);

$farr = file(__FILE__);
foreach($farr as $l) {
    echo htmlspecialchars($l);
}
