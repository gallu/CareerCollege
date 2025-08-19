<?php  // ope2.php

echo "1 === 1 : ";
var_dump( 1 === 1 );
echo "<br>";

echo "1 == 1 : ";
var_dump( 1 == 1 );
echo "<br>";

echo "1 === \"1\" : ";
var_dump( 1 === "1" );
echo "<br>";

echo "1 == \"1\" : ";
var_dump( 1 == "1" );
echo "<br>";

// PHP7まではtrue、PHP8からfalse
echo "2 == \"2a\" : ";
var_dump( 2 == "2a" );
echo "<br>";
