<?php  // file_4.php

//
//$f_obj = new SplFileObject('dummy');
$f_obj = new SplFileObject( __FILE__ );
//var_dump($f_obj);

/*
while (!$f_obj->eof()) {
    $line = $f_obj->fgets();
    var_dump($line);
}
*/
//
foreach($f_obj as $no => $line) {
    echo "{$no} \n";
    var_dump($line);
}
