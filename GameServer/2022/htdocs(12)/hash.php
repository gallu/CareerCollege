<?php   // hash.php

//echo  "hhh" ;
$pc = [
    "oityan",
    100,
    100,
    150,
    150,
];
var_dump( $pc );
echo "<br>";

//
$pc_hash = [
    "name"   => "oityan",
    "HP"     => 100,
    "HP Max" => 100,
    "MP"     => 150,
    "MP Max" => 150,
];
var_dump( $pc_hash );

//
echo "<br>";
foreach ($pc_hash  as  $k => $v) {
    echo $k;
    echo " is ";
    echo $v;
    echo "<br>";
}



