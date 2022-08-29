<?php  // foreach.php
//  https://dev2.m-fr.net/アカウント名/foreach.php

$array = [11, 22, 33];
var_dump( $array );

$count = count( $array );
var_dump( $count );

echo "<br>\n";
foreach($array  as  $k => $v) {
	echo "{$k} is {$v} <br>\n";
}
