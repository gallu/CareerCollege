<?php  // file4.php

$lines = file(__FILE__);
foreach($lines as $l) {
    echo "{$l} <br>\n";
}
echo "<br> \n";

$contents = file_get_contents(__FILE__);
var_dump($contents);
