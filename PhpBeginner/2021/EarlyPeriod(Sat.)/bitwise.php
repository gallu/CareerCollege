<?php   // bitwise.php

var_dump( 1 );
var_dump( 2 );
var_dump( 3 );
var_dump( 1 | 2 );
var_dump( 1 | 3 );
var_dump( 2 | 3 );
var_dump( 1 & 2 );
var_dump( 1 & 3 );
var_dump( 2 & 3 );
var_dump( FILE_APPEND ); // 8 -> 1000
var_dump( LOCK_EX ); // 2 -> 0010
var_dump( FILE_APPEND | LOCK_EX ); // 10 -> 1010
