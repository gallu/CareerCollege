<?php  // ope2.php

var_dump( 1 === 1 );
var_dump( 1 == 1 );
echo "<br>";

var_dump( 1 === "1" ); // 厳格な比較
var_dump( 1 == "1" ); // 曖昧な比較
echo "<br>";

var_dump( 200 );
var_dump( 2e2 ); // 指数表記
echo "<br>";

var_dump( 200 === "2e2" );
var_dump( 200 == "2e2" );
echo "<br>";
