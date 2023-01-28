<?php  // file_4.php
//
//$f_obj = new SplFileObject( 'dummy' );

var_dump( file_exists( __FILE__ ) );
var_dump( is_readable( __FILE__ ) );
var_dump( is_writable( __FILE__ ) );

//
$f_obj = new SplFileObject(__FILE__);
//var_dump($f_obj);

foreach($f_obj as $no => $line) {
    var_dump($no, $line);
}

/*
while(false === $f_obj->eof()) {
    $line = $f_obj->fgets();
    var_dump($line);
}
*/
/*
while(false !== ($line = $f_obj->fgets())) {
    var_dump($line);
}
*/