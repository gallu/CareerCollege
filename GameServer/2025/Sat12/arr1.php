<?php  // arr1.php

echo "<pre>";

$arr = [1, 2, 3, 4];
var_dump( $arr );
print_r( $arr );

// 古い書き方（なので、あんまり推奨しない
$arr2 = array(11, 22, 33);
print_r( $arr2 );

// 文字も普通にいける
$arr3 = ["1st", "2nd", "3rd"];
print_r( $arr3 );


