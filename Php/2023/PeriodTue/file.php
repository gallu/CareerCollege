<?php  // file.php

var_dump( __FILE__ );
var_dump( __DIR__ );

//
$s = file_get_contents( __FILE__ );
var_dump($s);

//
$lines = file(__FILE__);
var_dump($lines);

//
$fobj = new SplFileObject(__FILE__);
foreach($fobj as $no => $line) {
    echo "{$no}: {$line}";
}
