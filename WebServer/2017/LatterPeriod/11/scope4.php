<?php
// scope4.php
function hoge() {
    $i = 100;
    $func = function() use(&$i) {
        $s = 'test';
        var_dump($s);
        $i ++;
        var_dump($i);
	};
	$func();
	//var_dump($func);
    var_dump($i);
}
//
hoge();

