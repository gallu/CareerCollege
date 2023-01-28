<?php  // DirectoryIterator.php

$dir = new DirectoryIterator( __DIR__ );
foreach($dir as $f) {
    var_dump($f);
}
